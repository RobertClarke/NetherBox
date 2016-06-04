<?php

class CreateOrder extends Request {

	public function __construct($inputs) {

		// Check if any required inputs are missing
		$required = ['client', 'hash', 'plan', 'platform', 'location', 'unlimited', 'support', 'plugin', 'dedicated', 'username', 'billingcycle', 'method'];

		foreach ( $required as $id ) {
			if ( empty($inputs[$id]) )
				new Response('Request fields missing', 400, true);
		}

		// Verify client hash
		$client = Request::call('getclientsdetails', ['clientid' => $inputs['client']]);

		if ( $client['result'] == 'error' )
			new Response('Invalid client id supplied', 401, true);

		// Retrieve and compare hash values
		$db_hash = substr($client['password'], 0, -6);
		$secured = md5($db_hash . ENCRYPTION_KEY);

		// Hashes don't match, authentication error
		if ( $inputs['hash'] != $secured )
			new Response('Authentication failed', 401, true);

		// Platform-based flags for desktop
		if ( $inputs['platform'] == 'desktop' ) {

			$addon['unlimited']	= 3;
			$addon['dedicated']	= 4;
			$addon['support']	= 2;
			$addon['plugin']	= 1;

			/**
			 * Array of plan customfield ids
			 *
			 * [0] = Plan ID
			 * [1] = Username field
			 * [2] = Location field
			 */
			$plans = [
				'dirt'		=> [17, 25, 26],
				'gravel'	=> [6, 6, 13],
				'nether'	=> [7, 7, 14],
				'quartz'	=> [8, 8, 15],
				'glowstone'	=> [9, 9, 16],
				'obsidian'	=> [10, 10, 17],
				'lava'		=> [13, 11, 18],
				'beacon'	=> [18, 27, 28],
			];

		}

		// Platform-based flags for mobile
		else {

			$addon['unlimited']	= 1;
			$addon['dedicated']	= 2;
			$addon['support']	= 2;
			$addon['plugin']	= 1;

			/**
			 * Array of plan customfield ids
			 *
			 * [0] = Plan ID
			 * [1] = Username field
			 * [2] = Location field
			 */
			$plans = [
				'dirt'		=> [19, 29, 30],
				'gravel'	=> [1, 1, 19],
				'nether'	=> [2, 2, 20],
				'quartz'	=> [3, 3, 21],
				'glowstone'	=> [4, 4, 22],
				'obsidian'	=> [5, 5, 23],
				'lava'		=> [14, 12, 24],
				'beacon'	=> [20, 31, 32],
			];

		}

		// Location id to string conversion
		$locations = [
			'dallas'	=> 'Dallas',
			'ashburn'	=> ' Ashburn', // Has a space at the beginning on purpose; how it's setup in WHMCS
			'la'		=> ' Los Angeles', // Has a space at the beginning on purpose; how it's setup in WHMCS
			'amsterdam'	=> ' Amsterdam', // Has a space at the beginning on purpose; how it's setup in WHMCS
		];

		// Array to be submitted to WHMCS API
		$submit = [
			'clientid'		=> $inputs['client'],
			'pid'			=> $plans[$inputs['plan']][0],
			'billingcycle'	=> ( ($inputs['billingcycle'] == 'annually') ? 'annually' : 'monthly' ),
			'paymentmethod'	=> ( ($inputs['method'] == 'stripe') ? 'stripe' : 'paypal' ),
			'clientip'		=> $_SERVER['REMOTE_ADDR'],
			'customfields' 	=> base64_encode(serialize([
				$plans[$inputs['plan']][1] => preg_replace('/[^A-Za-z0-9_]/', ' ', $inputs['username']),
				$plans[$inputs['plan']][2] => $locations[$inputs['location']],
			])),
			'addons'		=> '',
			'configoptions'	=> [],
		];

		// Add addons to order (comma separated) to submission array
		if ( $inputs['support'] == 'true' )
			$submit['addons'] .= $addon['support'].',';
		if ( $inputs['plugin'] == 'true' )
			$submit['addons'] .= $addon['plugin'].',';

		$submit['addons'] = substr($submit['addons'], 0, -1); // Remove trailing comma

		// Add configurable options to order (base64 encoded) to submission array
		if ( $inputs['unlimited'] == 'true' )
			$submit['configoptions'][ $addon['unlimited'] ] = 1;
		if ( $inputs['dedicated'] == 'true' )
			$submit['configoptions'][ $addon['dedicated'] ] = 1;

		$submit['configoptions'] = base64_encode(serialize($submit['configoptions']));

		// Add promocode, if any
		if ( !empty($inputs['promocode']) )
			$submit['promocode'] = $inputs['promocode'];

		// If payment method is Stripe, check for Stripe token before proceeding
		if ( $submit['paymentmethod'] == 'stripe' ) {

			if ( empty($inputs['cc_token']) )
				new Response('Request fields missing', 400, true);

			// Add Stripe card to the users profile so we can charge it later
			$cc = Request::call('addstripecard', ['clientid' => $inputs['client'], 'stripeToken' => $inputs['cc_token']]);

			if ( $cc['result'] == 'error' )
				new Response('Unable to attach Stripe token to client', 500, true);

		}

		// Add the order to the system
		$create = Request::call('addorder', $submit);

		if ( $create['result'] == 'error' )
			new Response('Unable to create order', 500, true);

		// Run fraud check on the order
		$fraud = Request::call('orderfraudcheck', ['orderid' => $create['orderid']]);

		// If order isn't marked as fraud, attempt to capture CC payment
		if ( $fraud['status'] == 'Pass' ) {

			// Attempt to capture the payment if credit card is payment method
			if ( $submit['paymentmethod'] == 'stripe' ) {

				$capture = Request::call('capturepayment', ['invoiceid' => $create['invoiceid']]);

				if ( $capture['result'] == 'error' ) {
					$result = [
						'result'	=> 'fail',
						'message'	=> 'We were unable to process your credit card payment. Please try again. Your credit card was not charged.',
					];
				}

				$result = ['result' => 'success', 'ordernum' => $create['invoiceid']];

			}

			// PayPal, return redirect form(s)
			else {

				/**
				 * CURL get the invoice page to extract the PayPal redirect form
				 *
				 * This will "fake" a user login and then extract the page contents,
				 * so we can get the form out of it
				 */

				$timestamp = time();
				$hash = sha1($client['email'].$timestamp.AUTH_KEY);
				$url = API_URL . 'dologin.php?email='.$client['email'].'&timestamp='.$timestamp.'&hash='.$hash.'&goto=viewinvoice.php?id='.$create['invoiceid'];

				// Create a temporary cookie for the session
				$ckfile = tempnam ('/tmp', 'COOKIES');

				// Visit the login URL first, so we can authenticate
				$ch = curl_init($url);
				curl_setopt($ch, CURLOPT_COOKIEJAR, $ckfile);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
				curl_setopt($ch, CURLOPT_TIMEOUT, 30);
				$output = curl_exec($ch);

				// Visit the viewinvoice.php page to view the invoice
				$ch = curl_init('https://netherbox.com/billing/viewinvoice.php?id='.$create['invoiceid']);
				curl_setopt($ch, CURLOPT_COOKIEFILE, $ckfile);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				$output = curl_exec($ch);

				// Create a new DOM to extract the PayPal forms from the page
				$dom = new DomDocument;
				$dom->preserveWhiteSpace = FALSE;
				@$dom->loadHTML($output);
				$params = $dom->getElementsByTagName('form');

				$k = 0;
				$html = '';

				// Loop through each <form> element in $output
				foreach ($params as $param) {

					// Found a PayPal form, store it
					if ( $params->item($k)->getAttribute('action') == 'https://www.paypal.com/cgi-bin/webscr' && $params->item($k)->getAttribute('name') == 'paymentfrm' ) {
						$tmp_dom = new DOMDocument();
						$tmp_dom->appendChild($tmp_dom->importNode($param, true));
						$html .= trim($tmp_dom->saveHTML());
					}
					$k++;

				}

				$result = [
					'result' => 'success',
					'pp_html' => $html,
				];

			}

		}
		else $result = ['result' => 'fraud']; // Order marked as fraud

		// Return final response
		new Response($result, 200, true);

	}

}
