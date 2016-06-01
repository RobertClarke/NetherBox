<?php

class CheckPromo extends Request {

	public function __construct($inputs) {

		// Check if promo code missing
		if ( empty($inputs['code']) )
			new Response('Promo code missing from request', 400, true);

		// Attempt to grab the promo details from WHMCS
		$promo = parent::call('getpromotions', $inputs);

		if ( $promo['totalresults'] == 0 )
			new Response('Promo code invalid', 400, true);

		// Get first index from promo array
		$promo = $promo['promotions']['promotion'][0];

		// Check if promo code max uses exceeded or if it's expired
		if ( ($promo['maxuses'] != 0 && $promo['uses'] >= $promo['maxuses']) || ($promo['expirationdate'] != '0000-00-00' && strtotime($promo['expirationdate'].' 23:59:59') <= strtotime('now')) )
			new Response('Promo code expired', 400, true);

		$response = [
			'result'	=> 'success',

			'code'		=> $promo['code'],
			'value'		=> $promo['value'],
			'recurring'	=> ( $promo['recurring'] == 1 ) ? true : false,
		];

		new Response($response, 200, true);

	}

}
