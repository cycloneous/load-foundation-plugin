<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://cycloneous.wordpress.com
 * @since             1.0.0
 * @package           Load_Foundation_Plugin
 *
 * @wordpress-plugin
 * Plugin Name:       Load Foundation 5 Plugin
 * Plugin URI:        https://cycloneous.wordpress.com
 * Description:       This plugin loads the Foundation 5 libraries necessary for mobile responsive website.
 * Version:           1.0.0
 * Author:            Cycloneous
 * Author URI:        https://cycloneous.wordpress.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       load-foundation-plugin
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die('Naughty, naughty! Does Santa Claus know you are here?!?!');
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PLUGIN_NAME_VERSION', '0.1' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-load-foundation-plugin-activator.php
 */
function activate_load_foundation_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-load-foundation-plugin-activator.php';
	Load_Foundation_Plugin_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-load-foundation-plugin-deactivator.php
 */
function deactivate_load_foundation_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-load-foundation-plugin-deactivator.php';
	Load_Foundation_Plugin_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_load_foundation_plugin' );
register_deactivation_hook( __FILE__, 'deactivate_load_foundation_plugin' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-load-foundation-plugin.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_load_foundation_plugin() {

	$plugin = new Load_Foundation_Plugin();
	$plugin->run();

}
run_load_foundation_plugin();
