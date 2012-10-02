<?php
/*
Plugin Name: Just a Handful View for Store Locator Plus
Plugin URI: http://www.charlestonsw.com/products/store-locator-plus/
Description: This extension takes the standard layout in Store Locator Plus and rearranges the layout to better show a short list of venues.
Version: 1.0
Author: Patrick Rauland
Author URI: http://www.patrickrauland.com

Copyright (C) 2012 Patrick Rauland

*/

class SLPJustAHandfulView
{

	public function __construct()
	{
		add_action( 'init', array( &$this, 'init' ), 2000 );
		$this->theVariableIWant = $GLOBALS['theVariableIWant'];
	}

	public function init()
	{
	
		//give the user the ability to show or hide the search form in the backend
		add_action('slp_add_searchform_features_setting', array('SLPEnhancedSearch','slp_add_search_form_feature_settings'), 9 );

		//remove the search form
		add_action('slp_render_search_form',array('SLPEnhancedSearch','slp_render_search_form'),9);

		//modify the results list
		add_filter('slp_javascript_results_string', array('SLPEnhancedResults','mangle_results_output'), 90);

		//add styles & scripts
		add_action( 'wp_enqueue_scripts', array( &$this, 'register_plugin_scripts' ), 1000 );

	}

	public function register_plugin_scripts()
	{
		//includes styles & scripts

		//styles
		wp_enqueue_style( 'slp-just-a-handful-view-styles', plugins_url( 'assets/css/style.css', __FILE__  ) );

		//scripts
		wp_enqueue_script('slp-just-a-handful-view-script', plugins_url(' assets/js/script.js', __FILE__ ), array('jquery'), false, true );
	}
}

/**
 * Main SLP Enhanced Results Class
 */
Class SLPEnhancedSearch2 
{
	/**
	 * Method: slp_render_search_form
	 */
	function slp_render_search_form() 
	{
		//remove the search form - we don't need that jazz
		remove_action('slp_render_search_form',array('SLPlus_UI','slp_render_search_form'));
	}

	/**
	* Method: slp_add_search_form_feature_settings
	*
	* Add new settings for the search for to the map settings/search form
	* section.
	*/
	function slp_add_search_form_feature_settings() {
		global $slpMapSettings;
		?>
		<div class='form_entry'>
			
			<label for='<?php echo $slpMapSettings->prefix; ?>-enhanced_search_hide_search_form'>
			<?php _e('Hide Search Form', SLPLUS_PREFIX); ?>:
			</label>
			
			<input name='<?php echo $slpMapSettings->prefix; ?>-enhanced_search_hide_search_form'
			value='1'
			type='checkbox'
			<?php echo (
			($slpMapSettings->get_item('enhanced_search_hide_search_form',0) === 1) ?
			'checked' :
			'');
			?>
			>
		</div>
		<?php
		return;
	}
}

/**
 * Main SLP Enhanced Results Class
 */
 class SLPEnhancedResults 
 {
/**
 * Method: mangle_results_output
 */
	function mangle_results_output($resultString) {

		$locationListing = 
		"{0}
		<div class='jahv-extraInfo'>
			{6} <br/>
			{3}
			{4}
			{5}
		</div>";
		
		return $locationListing;
		
	 }
 }




/**
 * Initialize the plugin
 */
new SLPJustAHandfulView();

//That's it! Thank you very much and good night.