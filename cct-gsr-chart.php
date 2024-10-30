<?php
/*
Plugin Name: CaliCoTek GSR Chart
Plugin URI: http://calicotek.com/cct-gsr-chart/
Description: adds CaliCoTek Gold Silver Ratio Chart to admin page to configure current gold, silver, platinum and palladium spot prices into a chart for site users.
Version: 1.5
Author: ModManMatt @ CaliCoTek
Author URI: http://calicotek.com/
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

// Version Definition should be same as above
define('CCT_GSR_CHART_VERSION', '1.5' );

// For debugging purposes
//error_reporting(E_ALL);
//ini_set("display_errors", 1);
//define('WP-DEBUG', true);

/* Version check */
global $wp_version;
$exit_msg=__('CCT GSR Chart Tools requires WordPress version 3.0 or higher; please update first.', 'cct_gsr_chart');
if (version_compare($wp_version,"3.0","<"))
{
	exit ($exit_msg);
}

// Set-up Action and Filter Hooks
register_activation_hook(__FILE__, 'cct_gsr_chart_add_defaults');  // add action hook defaults to database
register_uninstall_hook(__FILE__, 'cct_gsr_chart_delete_plugin_options');  // clean and delete old plugin options if option to complete remove is used
add_action('admin_init', 'cct_gsr_chart_init' );
add_action('admin_menu', 'cct_gsr_chart_add_options_page'); // Register options Page
add_filter( 'plugin_action_links', 'cct_gsr_chart_plugin_formula_action_links', 10, 2 ); // adds setting link to plugin installer page
add_filter( 'plugin_action_links', 'cct_gsr_chart_plugin_spot_action_links', 10, 2 ); // adds setting link to plugin installer page
add_filter( 'plugin_row_meta', 'cct_gsr_chart_plugin_links', 10, 2 );
add_shortcode('cctgsrchart', 'cct_gsr_chart_shortcode_function');


// Delete options table entries ONLY when plugin deactivated AND deleted
function cct_gsr_chart_delete_plugin_options() {
	delete_option('cct_gsr_chart_options');
}

// Define default option settings
function cct_gsr_chart_add_defaults() {
	$tmp = get_option('cct_gsr_chart_options');
	if(($tmp['chk_default_options_db']=='1')||(!is_array($tmp))) {
		delete_option('cct_gsr_chart_options'); // so we don't have to reset all the 'off' checkboxes too! (don't think this is needed but leave for now)
          $arr = array(
			//main variables
		    'updated' => '12.34',
		    'gold_spot' => '12.34',
			'silver_spot' => '12.34',
            'platinum_spot' => '12.34',
            'palladium_spot' => '12.34',
			//ratio's
            'gold2silver_ratio' => '$goldspot / $silverspot;',
			'gold2platinum_ratio' => '$goldspot / $platinumspot; ',
			'gold2palladium_ratio' => '$goldspot / $palladiumspot; ',
			'silver2platinum_ratio' => '$silverspot / $platinumspot; ',
			'silver2palladium_ratio' => '$silverspot / $palladiumspot; ',
			'platinum2palladium_ratio' => '$platinumspot / $palladiumspot; ',
    		// gold
			'gold_eagle_1oz_buy' => '$goldspot + 8;',
			'gold_eagle_1oz_sell' => '$goldspot + 88;',
			'gold_eagle_halfoz_buy' => '$goldspot * 0.5+2;',
			'gold_eagle_halfoz_sell' => '$goldspot * 0.5+2; ',
			'gold_eagle_quarteroz_buy' => '$goldspot *0.25-6.5;',
			'gold_eagle_quarteroz_sell' => '$goldspot *0.25+45.5;',
			'gold_eagle_tenthoz_buy' => '$goldspot *0.1-8;',
			'gold_eagle_tenthoz_sell' => '$goldspot *0.1+32; ',
			'gold_buffalo_1oz_buy' => '$goldspot +8;',
			'gold_buffalo_1oz_sell' => '$goldspot +88; ',
			'gold_maple_1oz_buy' => '$goldspot -7;',
			'gold_maple_1oz_sell' => '$goldspot +80; ',
			'gold_krugerrand_1oz_buy' => '$goldspot -10;',
			'gold_krugerrand_1oz_sell' => '$goldspot +78; ',
			'gold_barcard_1oz_buy' => '$goldspot -32;',
			'gold_barcard_1oz_sell' => '$goldspot +45; ',
			'gold_liberty_xfau_20_buy' => '$goldspot *0.9675-20;',
			'gold_liberty_xfau_20_sell' => '$gold_liberty_xfau_20_buy +220; ',
			'gold_gaudens_xfau_20_buy' => '$goldspot *0.9675-20;',
			'gold_gaudens_xfau_20_sell' => '$gold_gaudens_xfau_20_buy +220; ',
			//silver
			'd2013_usa_silver_eagle_1oz_buy' => '$silverspot +0;',
			'd2013_usa_silver_eagle_1oz_sell' => '$silverspot +12.25;',
			'd2013_usa_silver_eagle_1oz_20_500_buy' => '$silverspot +1.25;',
			'd2013_usa_silver_eagle_1oz_20_500_sell' => '$silverspot +5.25;',
			'cbd_usa_silver_eagle_1oz_buy' => '$silverspot ;',
			'cbd_usa_silver_eagle_1oz_sell' => '$silverspot +10.75; ',
			'cbd_usa_silver_eagle_1oz_20_500_buy' => '$silverspot +1.25;',
			'cbd_usa_silver_eagle_1oz_20_500_sell' => '$silverspot +4.75; ',
			'maple_2013_silver_1oz_buy' => '$silverspot ;',
			'maple_2013_silver_1oz_sell' => '$silverspot +10;',
			'maple_2013_silver_1oz_20_500_buy' => '$silverspot +0.8;',
			'maple_2013_silver_1oz_20_500_sell' => '$silverspot +5;',
			'cbd_silver_maple_1oz_buy' => '$silverspot ;',
			'cbd_silver_maple_1oz_sell' => '$silverspot +10;',
			'cbd_silver_maple_1oz_20_500_buy' => '$silverspot +0.8;',
			'cbd_silver_maple_1oz_20_500_sell' => '$silverspot +4.5;',
			'usa_90percent_silver_coin_buy' => '$silverspot ;',
			'usa_90percent_silver_coin_sell' => '$silverspot ; ',
			'd1000_dollar_face_value_bag_buy' => '$silverspot -0.5*715;',
			'd1000_dollar_face_value_bag_sell' => '$silverspot -0.5*715;',
			'd100_500_dollar_face_value_buy' => '$silverspot -1*715; ',
			'd100_500_dollar_face_value_sell' => '$silverspot +5*715; ',
			'd1_99_dollar_face_value_buy' => '$silverspot -1.5*715;',
			'd1_99_dollar_face_value_sell' => '$silverspot +5.5*715;',
			'd100_oz_engelhard_JM_999_bar_buy' => '$silverspot -0.8*100;',
			'd100_oz_engelhard_JM_999_bar_sell' => '$silverspot +1.5*100;',
			'd100_oz_999_generic_silver_bar_buy' => '$silverspot -1.75*100;',
			'd100_oz_999_generic_silver_bar_sell' => '$silverspot +1.4*100;',
			'd10_oz_999_generic_silver_bar_under_20_oz_buy' => '$silverspot -1.45*10;',
			'd10_oz_999_generic_silver_bar_under_20_oz_sell' => '$silverspot +8*10;',
			'd999_generic_silver_bar_oz_or_more_buy' => '$silverspot -0.75*10;',
			'd999_generic_silver_bar_oz_or_more_sell' => '$silverspot +3*10;',
			'd1_oz_999_generic_rounds_bars_1_19_buy' => '$silverspot -1.45;',
			'd1_oz_999_generic_rounds_bars_1_19_sell' => '$silverspot +8;',
			'd20_plus_oz_buy' => '$silverspot -0.75;',
			'd20_plus_oz_sell' => '$silverspot +3;',
			'chk_default_options_db' => ''
		);
		update_option('cct_gsr_chart_options', $arr);
	}
}

// Init plugin options to white list our options
function cct_gsr_chart_init(){
	register_setting( 'cct_gsr_chart_plugin_options', 'cct_gsr_chart_options', 'cct_gsr_chart_validate_options' );
	load_plugin_textdomain( 'cct_gsr_chart' );
}

	if(!load_plugin_textdomain('cct_gsr_chart','/wp-content/languages/'))
		load_plugin_textdomain('cct_gsr_chart', false, basename( dirname( __FILE__ ) ) . '/languages' );

// Sanitize and validate input. Accepts an array, return a sanitized array.
function cct_gsr_chart_validate_options($input) {
	// strip html from textboxes
	$input['widget_title'] =  wp_filter_nohtml_kses($input['widget_title']); // Sanitize input (strip html tags, and escape characters)
	$input['feed_url'] =  wp_filter_nohtml_kses($input['feed_url']); // Sanitize input (strip html tags, and escape characters)
	return $input;
}

// Display Settings link on the main Plugins page
function cct_gsr_chart_plugin_spot_action_links($links, $file) {

	if ( $file == plugin_basename( __FILE__ ) ) {
	    // the anchor tag and href to the URL we want. For a "Settings" link, this needs to be the url of your settings page
	  $cct_gsr_chart_links = '<a href="'.get_admin_url().'options-general.php?page=cct_gsr_chart_page">'.__('Spot Menu', 'cct_gsr_chart').'</a>';
		// make the 'Settings' link appear first
		array_unshift( $links, $cct_gsr_chart_links );
	}

	return $links;
}

// Display a Settings link on the main Plugins page
function cct_gsr_chart_plugin_formula_action_links($links, $file) {

	if ( $file == plugin_basename( __FILE__ ) ) {
	    // the anchor tag and href to the URL we want. For a "Settings" link, this needs to be the url of your settings page
	  $cct_gsr_chart_links = '<a href="'.get_admin_url().'options-general.php?page=calicotek-gsr-chart/cct-gsr-chart.php">'.__('Formula Settings', 'cct_gsr_chart').'</a>';
		// make the 'Settings' link appear first
		array_unshift( $links, $cct_gsr_chart_links );
	}

	return $links;
}

function cct_gsr_chart_plugin_links($links, $file) {
		    $plugin = plugin_basename(__FILE__); 
		    if ($file == $plugin) // only for this plugin
		            return array_merge( $links,
                array( '<a href="http://calicotek.com/category/plugins">' . __('Other Plugins by this author' ) . '</a>' ),
		        array( '<a href="http://wordpress.org/support/plugin/calicotek-gsr-chart">' . __('Plugin Support') . '</a>' ),
			    array( '<a href="https://calicotek.com/donate" target="_blank">' . __('Donate') . '</a>' )
		    );
		    return $links;
		}

// Adds stylesheet
add_action( 'admin_print_styles', 'cct_gsr_chart_load_custom_admin_css' );

// The load CSS function
function cct_gsr_chart_load_custom_admin_css() {
	wp_enqueue_style( 'cct_gsr_chart_custom_admin_css', plugins_url( '/style.css', __FILE__ ) );
}

// Function that outputs the contents of the dashboard widget
function cct_gsr_chart_widget_function() {	require "widgets/widget_dash.php";  }

// register dishboard widget function
function add_cct_gsr_chart_dashboard_widgets() { wp_add_dashboard_widget('cct_gsr_chart_dashboard_widget', 'CCT GSR CHART Widget', 'cct_gsr_chart_widget_function'); }

// Register the new dashboard widget with the 'wp_dashboard_setup' action
add_action('wp_dashboard_setup', 'add_dashboard_widgets' );

function cct_gsr_chart_shortcode_function() { require "pages/cct-gsr-chart-output.php";;}

// register options formulas settings page
function cct_gsr_chart_add_options_page() { add_options_page('CCT GSR Chart Options Settings', 'CCT-GSR-Chart', 'manage_options', __FILE__, 'cct_gsr_chart_options_function'); }
function cct_gsr_chart_options_function() {	require "options/cct-gsr-chart-formula-options.php";  }

?>