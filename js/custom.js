//Begin Document Ready for the entire custom.js File
jQuery(document).ready(function($) {

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

	// home project hovers
	$('div.home-project-image').mouseenter(function() {
		$('div.home-project-hover', this).removeClass('opacity-zero').addClass('opacity-one');
	});

	$('div.home-project-image').mouseleave(function() {
		$('div.home-project-hover', this).addClass('opacity-zero').removeClass('opacity-one');
	});

	$("#workscroll").click(function() {
	    $('html, body').animate({
	        scrollTop: $("#recentprojects").offset().top
	    }, 200);
	});

}); // End Documnet Ready for the entire custom.js file
