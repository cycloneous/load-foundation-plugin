<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://cycloneous.wordpress.com
 * @since      1.0.0
 *
 * @package    Load_Foundation_Plugin
 * @subpackage Load_Foundation_Plugin/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Load_Foundation_Plugin
 * @subpackage Load_Foundation_Plugin/public
 * @author     Cycloneous <cycloneous@gmail.com>
 */
class Load_Foundation_Plugin_Public {

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
		 * defined in Load_Foundation_Plugin_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Load_Foundation_Plugin_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		// Dec 22, 2018
		// no need to queue up this CSS since we are using our foundation plugin
		// we will keep it just in case we need it in the future
		
		// wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/load-foundation-plugin-public.css', array(), $this->version, 'all' );

		// Dec 22, 2018
		// added to include foundation.css and normalize.css
		
		wp_enqueue_style( $this->plugin_name . '-base', plugin_dir_url( __FILE__ ) . 'assets/foundation-5/css/foundation.min.css', array(), $this->version, 'all' );
		wp_enqueue_style( $this->plugin_name . '-normalize', plugin_dir_url( __FILE__ ) . 'assets/foundation-5/css/normalize.css', array(), $this->version, 'all' );

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
		 * defined in Load_Foundation_Plugin_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Load_Foundation_Plugin_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		// Dec 22, 2018
		// no need to queue up this JS since we are using our foundation plugin
		// we will keep it just in case we need it in the future

		// wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/load-foundation-plugin-public.js', array( 'jquery' ), $this->version, false );

		// Dec 22, 2018
		// added to include foundation.js		

		// let us check if jQuery is loaded already
		// let us load it if it is not loaded
		
		if (!wp_script_is( 'jquery', 'enqueued')) {

        // Enqueue / load up our jQuery

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'assets/foundation-5/js/jquery.js', null, $this->version, false );

	    }

		
		wp_enqueue_script( $this->plugin_name . '-fastclick', plugin_dir_url( __FILE__ ) . 'assets/foundation-5/js/vendor/fastclick.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( $this->plugin_name . '-jquery-cookie', plugin_dir_url( __FILE__ ) . 'assets/foundation-5/js/vendor/jquery.cookie.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( $this->plugin_name . '-modernizr', plugin_dir_url( __FILE__ ) . 'assets/foundation-5/js/vendor/modernizr.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( $this->plugin_name . '-placeholder', plugin_dir_url( __FILE__ ) . 'assets/foundation-5/js/vendor/placeholder.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( $this->plugin_name . '-foundation', plugin_dir_url( __FILE__ ) . 'assets/foundation-5/js/foundation.min.js', array( 'jquery' ), $this->version, false );
		
	}

}
