<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://github.com/latheva
 * @since      1.0.0
 *
 * @package    Prodigious_Wpforms_To_Pdf
 * @subpackage Prodigious_Wpforms_To_Pdf/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Prodigious_Wpforms_To_Pdf
 * @subpackage Prodigious_Wpforms_To_Pdf/public
 * @author     Theva Arasaratnam <thearasa@publicisgroupe.net>
 */

require_once plugin_dir_path( __FILE__ ) . '../vendor/autoload.php';

class Prodigious_Wpforms_To_Pdf_Public {

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
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Prodigious_Wpforms_To_Pdf_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Prodigious_Wpforms_To_Pdf_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/prodigious-wpforms-to-pdf-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Prodigious_Wpforms_To_Pdf_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Prodigious_Wpforms_To_Pdf_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/prodigious-wpforms-to-pdf-public.js', array( 'jquery' ), $this->version, false );

	}

    public static function prodigious_gnerate_pdf(array $form_data) {
        $location = __DIR__ . '/pdf/';
        $name='cv_'.date('m-d-Y_hia').'.pdf';
        $tpl = __DIR__ . '/template/askcare-application-form.html';
        $content = file_get_contents($tpl);
        foreach ($form_data as $data) {
            $content = str_replace('##'.$data['id'].'##', $data['value'], $content);
        }
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML($content);
        $mpdf->Output($location . $name, \Mpdf\Output\Destination::FILE);
    }
}
