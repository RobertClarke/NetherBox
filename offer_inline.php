<?php

// OFFER SCRIPT
// This script will display offers on the top of every
// page of the website, when enabled below:

// Set to true/false to enable/disable offer banner
$enabled = true;

// Offer text and text
// $text = 'Get <b>15% OFF</b> recurring with promo code "NETHER" at checkout.';
$text = 'Get <b>15% OFF</b> with promo code "PIG" at checkout, limited time sale!';
$link = 'https://netherbox.com/?promo=PIG';

// Do not edit below this line
if ( $enabled ) {

echo '
<div id="offer" data-offer="'.substr(md5($text), '-12').'">
	<div class="wrapper">
		<p>'.$text.'</p>
		<a href="'.$link.'" class="bttn">Claim Promo Code</a>
		<a href="#" class="nothanks">No Thanks</a>
	</div>
</div>
';

}

?>
