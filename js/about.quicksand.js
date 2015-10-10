//Begin Document Ready for the entire custom.js File
jQuery(document).ready(function($) {



/* This is the cool stuff on the filtering pages like hovering and pop ups, woot */

function jazzyfresh() {

	$(".ingredient_round").mouseenter(function(){

		$(this).find(".ingredient-overlay").fadeIn('fast');
		return false;
	
	});
	
	$(".ingredient_round").mouseleave(function(){

		$(this).find(".ingredient-overlay").fadeOut('fast');
		return false;
	
	});


/* count through the numbered divs to show the content based on the ingredient */
$('div[id^=ingredient-]').bind("click touch", function(){
    $(".ingredient-popup").fadeIn('fast');
    thisId = $(this).attr('id');
    bioId = thisId.substring(thisId.lastIndexOf('-')+1);
    var bioElement = $('#ingredient-popup-'+bioId); // your bio div
	bioElement.show();
	$("div.white-fade").fadeIn('fast');
});

/* hide teh popup on click */

var $ingredient = $('.ingredient-popup') ;
$ingredient.bind("click touch", function(){
	$ingredient.fadeOut();
	$("div.ingredientcontent, div.white-fade").fadeOut();
});

/* move the bio content into the static team-member-bio div that is outside the php loop */
$ingredient.append($('div.ingredientcontent'));


/* replace the text on the filter with the current category name */

$('ul.dropdown li a').bind("click touch", function (){
	$('span.filtertext span').text( $(this).text() );
});


}


jazzyfresh(); /* execute the function */



	/* ---------------------------------------------------------------------- */
	/*	Who We Are, Featured Projects Filter -- QUICKSAND CODE
	/* ---------------------------------------------------------------------- */
	
	$(function() {
	
	function portfolio_quicksand() {
	// Setting up our variables
	var $filter;
	var $container;
	var $containerClone;
	var $filterLink;
	var $filteredItems
	// Set our filter
	$filter = $('.filter li.active a').attr('class');
	// Set our filter link
	$filterLink = $('.filter li a');
	// Set our container
	$container = $('.filterable-grid');
	// Clone our container
	$containerClone = $container.clone();
	// Apply our Quicksand to work on a click function
	// for each of the filter li link elements
	$filterLink.click(function(e)
	{
		// Remove the active class
		$('.filter li').removeClass('active');
		// Split each of the filter elements and override our filter
		$filter = $(this).attr('class').split(' ');
		// Apply the 'active' class to the clicked link
		$(this).parent().addClass('active');
		// If 'all' is selected, display all elements
		// else output all items referenced by the data-type
		if ($filter == 'all') {
			$filteredItems = $containerClone.find('.allcontent');
		}
		else {
			$filteredItems = $containerClone.find('.allcontent[data-type~=' + $filter + ']');
		}
		// Finally call the Quicksand function
		$container.quicksand($filteredItems,
		{
			// The duration for the animation
			duration: 750,
			// The easing effect when animating
			easing: 'easeInOutCirc',
			// Height adjustment set to dynamic
			adjustHeight: 'dynamic'
		});
		
		//Initalize our hover scripts and pop up scripts When Filtered
		$container.quicksand($filteredItems, 
			function () { jazzyfresh(); }
		);
		
	});
}

	if(jQuery().quicksand) {
		portfolio_quicksand();	
	}


}); // END OF DOCUMENT


}); // End Documnet Ready for the entire custom.js file