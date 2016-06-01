var plans = {
	
	'pc-1':	{ whmcs_id: 1, price: '5.00', url: 'https://billing.netherbox.com/cart.php?a=add&pid=6' },
	'pc-2':	{ whmcs_id: 2, price: '10.00', url: 'https://billing.netherbox.com/cart.php?a=add&pid=7' },
	'pc-3':	{ whmcs_id: 3, price: '20.00', url: 'https://billing.netherbox.com/cart.php?a=add&pid=8' },
	'pc-4':	{ whmcs_id: 4, price: '30.00', url: 'https://billing.netherbox.com/cart.php?a=add&pid=9' },
	'pc-5':	{ whmcs_id: 5, price: '40.00', url: 'https://billing.netherbox.com/cart.php?a=add&pid=10' },
	
	'pe-1':	{ whmcs_id: 1, price: '8.00', url: 'https://billing.netherbox.com/cart.php?a=add&pid=1' },
	'pe-2':	{ whmcs_id: 2, price: '16.00', url: 'https://billing.netherbox.com/cart.php?a=add&pid=2' },
	'pe-3':	{ whmcs_id: 3, price: '30.00', url: 'https://billing.netherbox.com/cart.php?a=add&pid=3' },
	'pe-4':	{ whmcs_id: 4, price: '40.00', url: 'https://billing.netherbox.com/cart.php?a=add&pid=4' },
	'pe-5':	{ whmcs_id: 5, price: '50.00', url: 'https://billing.netherbox.com/cart.php?a=add&pid=5' },
	
};

$(function() {
	
	$( '#plan-select .plan' ).click(function() {
		
		var plan = $( this ).data('plan');
		
		$( '#plan-select .price span.cost' ).html(plans[plan]['price']);
		$( 'a.order-bttn' ).attr('href', plans[plan]['url']);
		
		$( '#plan-select .plan.active' ).removeClass('active');
		$( this ).addClass('active');
		
		event.preventDefault();
		
	});
	
	$( '.toggle a' ).click(function() { 
		
		var tab = $( this ).data('tab');
		
		if ( tab == 'pc' ) {
			
			$( '.toggle a.pe' ).removeClass('active');
			$( '.toggle a.pc' ).addClass('active');
			
			// Reset
			$( '#plan-select #pc .plan.active' ).removeClass('active');
			$( '#plan-select #pc a.middle' ).addClass('active');
			$( '#plan-select .price span.cost' ).html(plans['pc-3']['price']);
			$( 'a.order-bttn' ).attr('href', plans['pc-3']['url']);
			
			$( '#plan-select #pe' ).fadeOut( function() { 
				$( '#plan-select #pc' ).fadeIn();
			});
			
			
		} else if ( tab == 'pe' ) {
			
			$( '.toggle a.pe' ).addClass('active');
			$( '.toggle a.pc' ).removeClass('active');
			
			// Reset
			$( '#plan-select #pe .plan.active' ).removeClass('active');
			$( '#plan-select #pe a.middle' ).addClass('active');
			$( '#plan-select .price span.cost' ).html(plans['pe-3']['price']);
			$( 'a.order-bttn' ).attr('href', plans['pe-3']['url']);
			
			$( '#plan-select #pc' ).fadeOut( function() { 
				$( '#plan-select #pe' ).fadeIn();
			});
			
		}
		
		event.preventDefault();
		
	});
	
});