<?php
/**
 * Shortcode for Slider
 */

/**
 * Class SimpleSliderPublic Define all public facing functionality.
 *
 * @package MKASimpleSlider
 */
class SimpleSliderPublic {
	/**
	 * Local options var.
	 *
	 * @var SimpleSliderOptions
	 */
	private $options;

	/**
	 * SimpleSliderPublic constructor.
	 *
	 * @param SimpleSliderOptions $options Databse options.
	 */
	public function __construct( SimpleSliderOptions $options ) {
		$this->options = $options;
	}


	/**
	 * Register scripts.
	 */
	public function register_scripts() {
		wp_register_style( 'flickity-css', PLUGIN_URL . 'bower_components/flickity/dist/flickity.css' );
		wp_register_style( 'flickity-css-custom', PLUGIN_URL . 'assets/css/carousel.css' );
		wp_register_script( 'flickity-js', PLUGIN_URL . 'bower_components/flickity/dist/flickity.pkgd.js', array( 'jquery' ), '2.0.5', true );
	}

	/**
	 * Run hooks.
	 *
	 * @param SimpleSliderOptions $options Options array.
	 */
	public static function run( SimpleSliderOptions $options ) {
		$public = new self( $options );
		add_action( 'wp_enqueue_scripts', array( $public, 'register_scripts' ) );
	}
}