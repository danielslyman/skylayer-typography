<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://danielslyman.com
 * @since      1.0.0
 *
 * @package    Skylayer_Typography
 * @subpackage Skylayer_Typography/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Skylayer_Typography
 * @subpackage Skylayer_Typography/includes
 * @author     Daniel Slyman (Skylayer) <daniel@skylayer.de>
 */
class Skylayer_Typography_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'skylayer-typography',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
