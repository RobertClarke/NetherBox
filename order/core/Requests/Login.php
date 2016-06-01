<?php

class Login extends Request {

	public function __construct($inputs) {

		// Check if email or password are missing
		if ( empty($inputs['email']) || empty($inputs['password2']) )
			new Response('Your email or password is missing', 400, true);

		// Attempt to log the user into their account
		$login = parent::call('validatelogin', $inputs);

		if ( $login['result'] == 'error' )
			new Response($login['message'], 400, true);

		// Make an API request to get the client's hash + details
		$client = parent::call('getclientsdetails', ['clientid' => $login['userid']]);

		// Get the SALT & encrypt it
		$hash = md5( substr($client['password'], -5) . $inputs['password2']);

		$response = [
			'result'	=> 'success',

			'userid'	=> $client['userid'],
			'email'		=> $client['email'],
			'firstname'	=> $client['firstname'],
			'lastname'	=> $client['lastname'],
			'address1'	=> $client['address1'],
			'address2'	=> $client['address2'],
			'city'		=> $client['city'],
			'state'		=> $client['state'],
			'postcode'	=> $client['postcode'],
			'country'	=> $client['country'],
			'hash'		=> md5($hash . ENCRYPTION_KEY),
		];

		new Response($response, 200, true);

	}

}
