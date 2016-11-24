<?php
/**
 * Plugin Name: MKA Simple Slider
 * Version:     1.0.0
 * Description: Simple Slider by Monkey Kode.
 * Author:      Jull Weber
 * Author URI:  https://monkeykode.com/
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: mka-simple-slider
 * Domain Path: /languages
 */

// If this file is called directly, abort.
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


require_once( 'inc/class-simple-slider.php' );
require_once( 'inc/class-simple-slider-public.php' );
require_once( 'inc/class-simple-slider-admin.php' );
require_once( 'inc/class-options.php' );
require_once( 'inc/class-simple-slider-shortcode.php' );
require_once( 'inc/class-slider-post-type.php' );
define( 'THEME_NAME', 'goodwin' );
define( 'PLUGIN_VERSION', '1.0.0' );
define( 'PLUGIN_URL', plugin_dir_url( __FILE__ ) );


/**
 * Initialize slider class. Check if doesn't exist.
 */
if ( ! function_exists( 'slider_simple_init' ) ) :
	/**
	 * Init function.
	 */
	function simple_slider_init() {
		load_plugin_textdomain( 'simple-slider', false, '/mka-simple-slider/languages/' );
		SimpleSlider::run( THEME_NAME );
	}

	simple_slider_init();
endif;
