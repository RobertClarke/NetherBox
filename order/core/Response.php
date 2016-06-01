<?php

/**
 * NetherBox Order System API Response
 */

class Response {

	// HTTP status code
	private $code = 200;

	// Response in array format
	private $response = [];

	/**
	 * Constructor
	 * @param array|string  $response The response to be created. Can be an array, string or JSON string.
	 * @param integer       $code     HTTP status code to return when outputting the message.
	 * @param boolean       $echo     Whether or not to echo out the error message right away (with HTTP status code).
	 */
	public function __construct($response='', $code=200, $echo=false) {

		$this->code = $code;

		// Store $response if it's already an array
		if ( is_array($response) )
			$this->response = $response;

		// Attempt to decode $response (if it's a string/JSON)
		// NOTE: $response can be left empty if you don't want to pass through an error message
		elseif ( !empty($response) ) {

			$decode = json_decode($response, true);

			// Valid JSON format
			if ( json_last_error() == JSON_ERROR_NONE )
				$this->response = $decode;

			// Must be a string, store it in $response
			else
				$this->response['message'] = $response;

		}

		if ( $echo )
			$this->output();

	}

	/**
	 * Echo's out the HTTP response with HTTP response code.
	 */
	public function output() {
		http_response_code($this->code);

		if ( !empty($this->response) )
			echo json_encode($this->response);

		exit;
	}

	/**
	 * Returns the HTTP status code and reponse (in array format).
	 */
	public function raw() {
		return [
			'code'		=> $this->code,
			'response'	=> $this->response
		];
	}

}
