jQuery(document).ready(function($) {
	
	//when a user clicks on a location in the results list add a class for CSS to style
	$("#map_sidebar .results_entry").live("click", function(){
		$("#map_sidebar .results_entry").removeClass('jahv-selected');
		$(this).addClass('jahv-selected');
	});

	//open the first location by default
	$('#map_sidebar').bind('contentchanged',function() {
		//simulate a click on the first location to open it up
		$("#map_sidebar .results_entry:first-child").click();
	});

	//listen to the clicks on the map
	//TODO - waiting for a hook

});