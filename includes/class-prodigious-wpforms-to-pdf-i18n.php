<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/latheva
 * @since      1.0.0
 *
 * @package    Prodigious_Wpforms_To_Pdf
 * @subpackage Prodigious_Wpforms_To_Pdf/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Prodigious_Wpforms_To_Pdf
 * @subpackage Prodigious_Wpforms_To_Pdf/includes
 * @author     Theva Arasaratnam <thearasa@publicisgroupe.net>
 */
class Prodigious_Wpforms_To_Pdf_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'prodigious-wpforms-to-pdf',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
