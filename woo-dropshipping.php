<?php

/**
 * The plugin bootstrap file.
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/ianbrown80/dropshipping-plugin
 * @since             1.0.0
 * @package           IB_Woo_Dropshipping
 *
 * @wordpress-plugin
 * Plugin Name:       Ian's WooCommerce Dropshipping Plugin
 * Plugin URI:        https://github.com/ianbrown80/dropshipping-plugin
 * Description:       Messing about with some Dropshipping API's and Integrating them into WooCommerce
 * Version:           0.0.1
 * Author:            Ian Brown
 * Author URI:        https://github.com/ianbrown80
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       dropshipping-plugin
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'IB_WOO_DROPSHIPPING_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-dropshipping-plugin-activator.php
 */
function activate_IB_Woo_Dropshipping() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-dropshipping-plugin-activator.php';
	IB_Woo_Dropshipping_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-dropshipping-plugin-deactivator.php
 */
function deactivate_IB_Woo_Dropshipping() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-dropshipping-plugin-deactivator.php';
	IB_Woo_Dropshipping_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_IB_Woo_Dropshipping' );
register_deactivation_hook( __FILE__, 'deactivate_IB_Woo_Dropshipping' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-dropshipping-plugin.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_IB_Woo_Dropshipping() {

	$plugin = new IB_Woo_Dropshipping();
	$plugin->run();

}
run_IB_Woo_Dropshipping();
