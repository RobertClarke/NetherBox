$(function() {
    
    // ~~~ RESPONSIVE NAV ~~~
    var pull = $('nav ul.responsive a');
    var menu = $('nav ul.nav');
 
    $(pull).on('click', function(e) {
        e.preventDefault();
        menu.fadeToggle(200);
        pull.toggleClass('active');
    });
    
    $(window).resize(function(){
	    var w = $(window).width();
	    if(w > 540 && menu.is(':hidden')) {
	        menu.removeAttr('style');
	    }
	});
    
});