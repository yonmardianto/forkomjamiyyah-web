<?php
/**
 * Plugin Name:       WP Events Calendar
 * Description:       A WordPress plugin to manage events with start and end dates, displayed using FullCalendar.
 * Version:           1.0.0
 * Author:            Forkom Jamiyyah Al Azhar
 * Text Domain:       wp-events-calendar
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
	die;
}

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-wec-core.php';

/**
 * Flush rewrite rules on plugin activation to prevent 404 errors on CPT single pages.
 */
function activate_wp_events_calendar()
{
	require_once plugin_dir_path(__FILE__) . 'includes/class-wec-cpt.php';
	$cpt = new WEC_CPT();
	$cpt->register_cpt_event();
	flush_rewrite_rules();
}
register_activation_hook(__FILE__, 'activate_wp_events_calendar');

/**
 * Begins execution of the plugin.
 */
function run_wp_events_calendar()
{
	$plugin = new WEC_Core();
	$plugin->run();
}
run_wp_events_calendar();
