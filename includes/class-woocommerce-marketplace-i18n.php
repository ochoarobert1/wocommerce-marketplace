<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://robertochoaweb.com/
 * @since      1.0.0
 *
 * @package    Woocommerce_Marketplace
 * @subpackage Woocommerce_Marketplace/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Woocommerce_Marketplace
 * @subpackage Woocommerce_Marketplace/includes
 * @author     Robert Ochoa <ochoa.robert1@gmail.com>
 */
class Woocommerce_Marketplace_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'woocommerce-marketplace',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
