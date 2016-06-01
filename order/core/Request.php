<?php

/**
 * NetherBox Order System API Request
 */

class Request {

	/**
	 * Constructor
	 * @param string $request_name Request to be made (types located in the core/Requests folder).
	 * @param array  $inputs       Inputs to pass onto the request.
	 */
	public function __construct($request, $inputs=[]) {

		// Check to see if there's a file to handle the request
		if ( !file_exists('./core/Requests/'.$request.'.php') )
			return false;

		// Include the request from the Requests folder
		require_once('./core/Requests/'.$request.'.php');
		new $request($inputs);

	}

	/**
	 * Makes an API call using CURL to WHMCS
	 * @param  string $action The WHMCS API action to complete.
	 * @param  array $fields  Fields to pass onto WHMCS API.
	 */
	public static function call($action, $fields=[]) {

		$request = [
			'username'		=> API_USERNAME,
			'password'		=> md5(API_PASSWORD),
			'accesskey'		=> API_KEY,
			'responsetype'	=> 'json',
			'action'		=> $action
		];

		$request = array_merge($request, $fields);

		// Send WHMCS API request via CURL
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, API_URL . 'includes/api.php');
		curl_setopt($curl, CURLOPT_POST, 1);
		curl_setopt($curl, CURLOPT_TIMEOUT, 30);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($request));

		$response = curl_exec($curl);

		// CURL error occured, return error status
		if ( curl_error($curl) )
			new Response('We can\'t process your request right now. Try again in a few minutes.', 500, true);

		curl_close($curl);

		// Decode the JSON response & check if it's an error
		$response = json_decode($response, true);

		// Change WHMCS API error responses to user-friendly messages
		$bad_responses = ['Invalid Access Key', 'Authentication Failed', 'Access Denied'];

		if ( isset($response['message']) && in_array($response['message'], $bad_responses) )
			new Response('We can\'t process your request right now. Try again in a few minutes.', 500, true);

		return $response;

	}

}
