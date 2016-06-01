<?php

/**
 * NetherBox Order System API
 */

require_once('core/Response.php');

// Check if config file exists
if ( !file_exists('config.php') )
	new Response('Configuration error', 500, true);

require_once('config.php');
require_once('core/Request.php');

// Get action from URL, strip out everything except letters
$action = preg_replace("/[^a-zA-Z]+/", "", filter_input(INPUT_GET, 'action', FILTER_UNSAFE_RAW));

switch ( $action ) {

	// User login
	case 'login':

		$inputs = [
			'email'		=> filter_input(INPUT_POST, 'email', FILTER_DEFAULT),
			'password2'	=> filter_input(INPUT_POST, 'password', FILTER_DEFAULT),
		];

		new Request('Login', $inputs);

	break;

	// User registration
	case 'register':

		$inputs = [];

		// Get all POST inputs from from
		$get = ['firstname', 'lastname', 'email', 'password2', 'password_repeat', 'securityqid', 'securityqans', 'phonenumber', 'address1', 'city', 'postcode', 'state', 'country'];
		foreach ( $get as $id ) {
			$inputs[$id] = filter_input(INPUT_POST, $id, FILTER_DEFAULT);
		}

		new Request('Register', $inputs);

	break;

	// Promo code check
	case 'promo':
		new Request('CheckPromo', ['code' => filter_input(INPUT_POST, 'code', FILTER_DEFAULT)]);
	break;

	// Create order
	case 'createorder':

		$inputs = [];

		// Get all POST inputs from from
		$get = ['client', 'hash', 'plan', 'platform', 'location', 'unlimited', 'support', 'plugin', 'dedicated', 'username', 'billingcycle', 'method', 'promocode', 'cc_token'];
		foreach ( $get as $id ) {
			$inputs[$id] = filter_input(INPUT_POST, $id, FILTER_DEFAULT);
		}

		new Request('CreateOrder', $inputs);

	break;

	// Invalid action, return "Bad Request" header
	default:
		new Response('', 400, true);
	break;

}
