<?php
/**
 * Admin specific functionality
 */
class WEC_Admin {

	public function enqueue_styles( $hook ) {
		global $post_type;
		if ( 'wec_event' == $post_type ) {
			wp_enqueue_style( 'wec-admin-style', plugin_dir_url( __FILE__ ) . 'css/wec-admin.css', array(), '1.0.0', 'all' );
		}
	}

	public function enqueue_scripts( $hook ) {
		global $post_type;
		if ( 'wec_event' == $post_type ) {
			wp_enqueue_script( 'wec-admin-script', plugin_dir_url( __FILE__ ) . 'js/wec-admin.js', array( 'jquery' ), '1.0.0', true );
		}
	}

	public function add_plugin_admin_menu() {
		// Add submenu page under 'wec_event' CPT
		add_submenu_page(
			'edit.php?post_type=wec_event',
			__( 'Settings', 'wp-events-calendar' ),
			__( 'Settings', 'wp-events-calendar' ),
			'manage_options',
			'wec_settings',
			array( $this, 'display_settings_page' )
		);
	}

	public function register_settings() {
		register_setting( 'wec_settings_group', 'wec_custom_css' );
	}

	public function display_settings_page() {
		?>
		<div class="wrap">
			<h1><?php _e( 'Events Calendar Settings', 'wp-events-calendar' ); ?></h1>
			<form method="post" action="options.php">
				<?php settings_fields( 'wec_settings_group' ); ?>
				<?php do_settings_sections( 'wec_settings_group' ); ?>
				<table class="form-table">
					<tr valign="top">
						<th scope="row"><?php _e( 'Additional CSS', 'wp-events-calendar' ); ?></th>
						<td>
							<textarea name="wec_custom_css" rows="10" cols="50" style="width: 100%; font-family: monospace;"><?php echo esc_textarea( get_option( 'wec_custom_css' ) ); ?></textarea>
							<p class="description"><?php _e( 'Add your custom CSS here to modify the frontend layout, fonts, and styling of the events calendar.', 'wp-events-calendar' ); ?></p>
						</td>
					</tr>
				</table>
				<?php submit_button(); ?>
			</form>
		</div>
		<?php
	}
}
