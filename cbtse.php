<?php
/*
Plugin Name: CB Tabs with Scrolling Effect
Description: A WordPress plugin that adds tabs with a scrolling effect to your site.
Version: 1.0
Author: MD Abul Bashar
Author URI: https://hmbashar.com
Text Domain: cbtse
Domain Path: /languages
Prefix: cbtse_
Requires Plugins: elementor
*/

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}


if (!defined('CB_TABS_DIR_URL')) {
	define('CB_TABS_DIR_URL', plugin_dir_url(__FILE__));
}

// Main CB Tabs with Scrolling Effect Class
class CB_Tabs_Scrolling_Effect {

    // Constructor
    public function __construct() {
        add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
        add_action( 'plugins_loaded', array( $this, 'load_textdomain' ) );
        add_action( 'elementor/widgets/widgets_registered', array( $this, 'register_widgets' ) );
    }

    // Enqueue scripts and styles
    // Enqueue scripts and styles
    public function enqueue_scripts() {
        wp_enqueue_style( 'cbtse-style', plugin_dir_url( __FILE__ ) . 'assets/css/style.css' );

     // Enqueue GSAP and related scripts
     //wp_enqueue_script( 'gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js', array('jquery'), '3.7.1', true );
     //wp_enqueue_script( 'cbtse-gsap-latest', plugin_dir_url( __FILE__ ) . 'assets/js/gsap-latest-beta.min.js', array('jquery'), '3.7.1', true );
     //wp_enqueue_script( 'cbtse-scroll-to-plugin', plugin_dir_url( __FILE__ ) . 'assets/js/ScrollToPlugin.min.js', array('jquery'), '3.7.1', true );
     //wp_enqueue_script( 'cbtse-scroll-trigger', plugin_dir_url( __FILE__ ) . 'assets/js/ScrollTrigger.min.js', array('jquery'), '3.7.1', true );

        // Enqueue custom script
       //wp_enqueue_script( 'cbtse-script', plugin_dir_url( __FILE__ ) . 'assets/js/script.js', array( 'jquery', 'cbtse-gsap-latest', 'cbtse-scroll-smoother', 'cbtse-scroll-to-plugin', 'cbtse-scroll-trigger' ), '1.0', false );
    }

    // Load text domain for translations
    public function load_textdomain() {
        load_plugin_textdomain( 'cbtse', false, basename( dirname( __FILE__ ) ) . '/languages' );
    }

      // Register the Elementor widget
      public function register_widgets() {
        // Include the widget file
        require_once( plugin_dir_path( __FILE__ ) . 'widgets/cbtse-elementor-widget.php' );
        require_once( plugin_dir_path( __FILE__ ) . 'widgets/cbts-scroll-custom.php' );

        // Register the widget
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \CB_Tabs_Scrolling_Effect_Widget() );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \CB_Tabs_Scrolling() );
    }
}

// Initialize the plugin
new CB_Tabs_Scrolling_Effect();