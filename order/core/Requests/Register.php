<?php

class Register extends Request {

	public function __construct($inputs) {

		// Attempt to register the user given their inputs
		$register = parent::call('addclient', $inputs);

		if ( $register['result'] == 'error' )
			new Response($register['message'], 400, true);

		// Make an API request to get the client's hash + details
		$client = parent::call('getclientsdetails', ['clientid' => $register['clientid']]);

		// Get the SALT & encrypt it
		//$hash = md5( substr($client['password'], -5) . $inputs['password2']);

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
			//'hash'		=> md5($hash . ENCRYPTION_KEY),
			'hash'		=> md5(substr($client['password'], 0, -6) . ENCRYPTION_KEY),
		];

		new Response($response, 200, true);

	}

}
