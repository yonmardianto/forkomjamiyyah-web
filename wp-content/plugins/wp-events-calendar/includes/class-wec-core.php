<?php
/**
 * The core plugin class.
 */
class WEC_Core {

	public function __construct() {
		$this->load_dependencies();
		$this->define_admin_hooks();
		$this->define_public_hooks();
	}

	private function load_dependencies() {
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-wec-cpt.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-wec-api.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-wec-admin.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/class-wec-public.php';

		$this->cpt    = new WEC_CPT();
		$this->api    = new WEC_API();
		$this->admin  = new WEC_Admin();
		$this->public = new WEC_Public();
	}

	private function define_admin_hooks() {
		add_action( 'init', array( $this->cpt, 'register_cpt_event' ) );
		add_action( 'init', array( $this->cpt, 'register_image_sizes' ) );
		add_action( 'add_meta_boxes', array( $this->cpt, 'add_event_meta_boxes' ) );
		add_action( 'save_post', array( $this->cpt, 'save_event_meta_boxes' ) );

		add_action( 'admin_enqueue_scripts', array( $this->admin, 'enqueue_styles' ) );
		add_action( 'admin_enqueue_scripts', array( $this->admin, 'enqueue_scripts' ) );

		add_action( 'admin_menu', array( $this->admin, 'add_plugin_admin_menu' ) );
		add_action( 'admin_init', array( $this->admin, 'register_settings' ) );
	}

	private function define_public_hooks() {
		add_action( 'rest_api_init', array( $this->api, 'register_routes' ) );

		add_action( 'wp_enqueue_scripts', array( $this->public, 'enqueue_styles' ) );
		add_action( 'wp_enqueue_scripts', array( $this->public, 'enqueue_scripts' ) );
		
		add_shortcode( 'wec_calendar', array( $this->public, 'render_calendar_shortcode' ) );
	}

	public function run() {
		// Execution starts from constructor hooks.
	}
}
