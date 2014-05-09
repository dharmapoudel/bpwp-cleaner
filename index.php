<?php
/**
 * Plugin Name: BlankPress WordPress Cleaner
 * Plugin URI: http://www.wordpress.org/plugins
 * Description: Allows users to selectively clean up the WordPress header, removes unwanted dashboard widgets  and tweaks annoying WordPress features. Better performance, Faster page load, Better security and Better WP experience.
 * Version: 1.0
 * Author: Dharma Poudel (@rogercomred)
 * Author URI: https://www.twitter.com/rogercomred
 * Text Domain: bpwp-cleaner
 * Domain Path: /l10n
 */
 
//define some constants
if (!defined('BPWCDOMAIN'))	define('BPWCDOMAIN', 'bpwp-cleaner');
if(!defined('BPWCPATH')) define( 'BPWCPATH', dirname( __FILE__ ) );
 

//get the required files
require_once  BPWCPATH.'/inc/class.bpwpc-cleanup.php';
require_once  BPWCPATH.'/inc/class.bpwpc-core.php';


//activation and deactivation hooks
register_activation_hook(__FILE__, 'bpwpcleaner_install'); // Install hook
register_deactivation_hook(__FILE__, 'bpwpcleaner_uninstall'); // Uninstall hook

//install
function bpwpcleaner_install() {
	$options = array(
	    'remove_wp_generator' => 1,
	    'remove_rsd_link' => 1,
	    'remove_wlwmanifest_link' => 1,
	    'remove_feed_links' =>1,
	    'remove_feed_links_extra' =>1,
	    'remove_index_rel_link' => 1,
	    'remove_start_post_rel_link' => 1,
	    'remove_parent_post_rel_link' => 1,
	    'remove_adjacent_posts_rel_link' => 1,
	    'remove_rel_canonical' => 1,
	    'remove_wp_shortlink_wp_head' => 1,
	    'remove_help_tab' => 1,
	    'remove_wp_welcome_panel' => 1,
	    'remove_update_nag' => 1,
	    'remove_update_submenu' => 0,
	    'remove_browser_nag' => 1,
	    'remove_right_now' => 0,
	    'remove_quick_press' => 0,
	    'remove_primary' => 1,
	    'remove_activity' => 0,
	    'remove_version' => 1,
	    'remove_header_js' => 0,
	    'remove_recent_comments_style' => 1,
	    'remove_thumbnail_dimensions' => 1,
	    'remove_category_rel' => 1,
	    'remove_admin_bar' => 1,
	    'remove_login_errors' => 1,
	    'login_errors_msg' => 'Invalid!',
	    'remove_login_shake' => 1
	);
	
	// register some default options on plugin installation
	if(false===(get_option('bpwpcleaner_options'))){
	    update_option('bpwpcleaner_options', $options);
	}
	
}


				
//uninstall
function bpwpcleaner_uninstall() {
	// delete the options saved
	delete_option('bpwpcleaner_options');
}

// Add the settings link to the plugins page
function bpwpcleaner_add_plugin_settings_link($links){
	$settings_link = '<a href="options-general.php?page=bpwpcleaner-setting">'.__('Settings', BPWCDOMAIN).'</a>';
	array_unshift($links, $settings_link);
	return $links;
}

add_filter("plugin_action_links_".plugin_basename(__FILE__),'bpwpcleaner_add_plugin_settings_link');