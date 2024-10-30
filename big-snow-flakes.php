<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://www.wpmaniax.com
 * @since             1.0.0
 * @package           Big_Snow_Flakes
 *
 * @wordpress-plugin
 * Plugin Name:       Big Snow Flakes
 * Plugin URI:        http://www.wpmaniax.com
 * Description:       Add Big Animated Snow Flakes to your Wordpress site and enjoy winter and Christmas.
 * Version:           1.0.1
 * Author:            WP Maniax
 * Author URI:        http://www.wpmaniax.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       big-snow-flakes
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-big-snow-flakes-activator.php
 */
function activate_big_snow_flakes() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-big-snow-flakes-activator.php';
	Big_Snow_Flakes_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-big-snow-flakes-deactivator.php
 */
function deactivate_big_snow_flakes() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-big-snow-flakes-deactivator.php';
	Big_Snow_Flakes_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_big_snow_flakes' );
register_deactivation_hook( __FILE__, 'deactivate_big_snow_flakes' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-big-snow-flakes.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_big_snow_flakes() {

	$plugin = new Big_Snow_Flakes();
	$plugin->run();

}
run_big_snow_flakes();
