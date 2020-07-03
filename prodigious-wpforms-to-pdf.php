<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/latheva
 * @since             1.0.0
 * @package           Prodigious_Wpforms_To_Pdf
 *
 * @wordpress-plugin
 * Plugin Name:       Prodigious WPForms to PDF generator
 * Plugin URI:        https://prodigious.fr/wordpress/plugin
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Theva Arasaratnam
 * Author URI:        https://github.com/latheva
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       prodigious-wpforms-to-pdf
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
define( 'PRODIGIOUS_WPFORMS_TO_PDF_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-prodigious-wpforms-to-pdf-activator.php
 */
function activate_prodigious_wpforms_to_pdf() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-prodigious-wpforms-to-pdf-activator.php';
	Prodigious_Wpforms_To_Pdf_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-prodigious-wpforms-to-pdf-deactivator.php
 */
function deactivate_prodigious_wpforms_to_pdf() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-prodigious-wpforms-to-pdf-deactivator.php';
	Prodigious_Wpforms_To_Pdf_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_prodigious_wpforms_to_pdf' );
register_deactivation_hook( __FILE__, 'deactivate_prodigious_wpforms_to_pdf' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-prodigious-wpforms-to-pdf.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_prodigious_wpforms_to_pdf() {

	$plugin = new Prodigious_Wpforms_To_Pdf();
	$plugin->run();

}
run_prodigious_wpforms_to_pdf();
