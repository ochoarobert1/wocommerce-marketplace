<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://robertochoaweb.com/
 * @since             1.0.0
 * @package           Woocommerce_Marketplace
 *
 * @wordpress-plugin
 * Plugin Name:       Woocommerce Marketplace - Streann Studio
 * Plugin URI:        https://robertochoaweb.com/casos/woomarketplace
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Robert Ochoa
 * Author URI:        https://robertochoaweb.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       woocommerce-marketplace
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
define( 'WOOCOMMERCE_MARKETPLACE_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-woocommerce-marketplace-activator.php
 */
function activate_woocommerce_marketplace() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-woocommerce-marketplace-activator.php';
	Woocommerce_Marketplace_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-woocommerce-marketplace-deactivator.php
 */
function deactivate_woocommerce_marketplace() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-woocommerce-marketplace-deactivator.php';
	Woocommerce_Marketplace_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_woocommerce_marketplace' );
register_deactivation_hook( __FILE__, 'deactivate_woocommerce_marketplace' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-woocommerce-marketplace.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_woocommerce_marketplace() {

	$plugin = new Woocommerce_Marketplace();
	$plugin->run();

}
run_woocommerce_marketplace();
