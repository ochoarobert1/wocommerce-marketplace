<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://robertochoaweb.com/
 * @since      1.0.0
 *
 * @package    Woocommerce_Marketplace
 * @subpackage Woocommerce_Marketplace/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Woocommerce_Marketplace
 * @subpackage Woocommerce_Marketplace/public
 * @author     Robert Ochoa <ochoa.robert1@gmail.com>
 */
class Woocommerce_Marketplace_Public
{

    /**
     * The ID of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $plugin_name    The ID of this plugin.
     */
    private $plugin_name;

    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $version    The current version of this plugin.
     */
    private $version;

    /**
     * Initialize the class and set its properties.
     *
     * @since    1.0.0
     * @param      string    $plugin_name       The name of the plugin.
     * @param      string    $version    The version of this plugin.
     */
    public function __construct($plugin_name, $version)
    {
        $this->plugin_name = $plugin_name;
        $this->version = $version;
    }

    /**
     * Register the stylesheets for the public-facing side of the site.
     *
     * @since    1.0.0
     */
    public function enqueue_styles()
    {

        /**
         * This function is provided for demonstration purposes only.
         *
         * An instance of this class should be passed to the run() function
         * defined in Woocommerce_Marketplace_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The Woocommerce_Marketplace_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */

        wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'css/woocommerce-marketplace-public.css', array(), $this->version, 'all');
    }

    /**
     * Register the JavaScript for the public-facing side of the site.
     *
     * @since    1.0.0
     */
    public function enqueue_scripts()
    {

        /**
         * This function is provided for demonstration purposes only.
         *
         * An instance of this class should be passed to the run() function
         * defined in Woocommerce_Marketplace_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The Woocommerce_Marketplace_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */

        wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__) . 'js/woocommerce-marketplace-public.js', array( 'jquery' ), $this->version, false);
    }

    
    /**
     * Method woomarketplace_add_start_date
     *
     * @return void
     */
    public function woomarketplace_add_start_date()
    {
        woocommerce_form_field('ads_start_date', array(
            'type'        => 'text',
            'required'    => true,
            'label'       => 'Ads Start Date',
            'description' => 'Please select the starting point to show this ad',
        ), '');
    }
}
