jQuery(document).ready(function($) {
    
	//when a user clicks on a location in the results list add a class for CSS to style
	$("#map_sidebar .results_entry").live("click", function(){
		$(this).toggleClass('jahv-selected');
	});

	//open the first location by default
	//TODO - waiting for a hook

});