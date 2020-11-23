<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/ianbrown80/dropshipping-plugin
 * @since      1.0.0
 *
 * @package    IB_Woo_Dropshipping
 * @subpackage IB_Woo_Dropshipping/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    IB_Woo_Dropshipping
 * @subpackage IB_Woo_Dropshipping/includes
 * @author     Your Name <email@example.com>
 */
class IB_Woo_Dropshipping_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'dropshipping-plugin',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
