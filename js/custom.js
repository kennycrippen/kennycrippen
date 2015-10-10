//Begin Document Ready for the entire custom.js File
jQuery(document).ready(function($) {
	
	// fade in the Kenny image
	$('div.kenny').delay(500).animate({
		opacity: 1
	});
	
	// slowly transition the Kenny image to color and back to black and white
	$(function () {
	    $('img.kenny-color').fadeIn(20000, function () {
	        fadeItOut();
	    });
	});
	
	function fadeItIn() {
	    $('img.kenny-color').fadeIn(20000, function () {
	        fadeItOut();
	    });
	}
	
	function fadeItOut() {
	    $('img.kenny-color').fadeOut(20000, function () {
	        fadeItIn();
	    });
	}
	
	// animate the heaer on load
	$('div#header').animate({
		opacity: 1,
		top: 0
	}, 400, "swing");
	
	// delay other page content from showing until loaded
	$('div.fade-delay').delay(1000).animate({
		opacity: 1
	});
	
	$('div.fade-delay-fast').delay(400).animate({
		opacity: 1
	});
	
	// home project hovers
	$('div.home-project-image').mouseenter(function() {
		$('div.home-project-hover', this).animate({
			opacity: 1
		}, 200);
	});
	
	$('div.home-project-image').mouseleave(function() {
		$('div.home-project-hover', this).animate({
			opacity: 0
		}, 100);
	});
	
	// initiate flexslider
	$('.flexslider').flexslider({
	    animation: 'slide',
	    pauseOnHover: true,
	    pauseOnAction: true,
	    touch: true,
	    controlNav: false
	  });
	
	
	
}); // End Documnet Ready for the entire custom.js file