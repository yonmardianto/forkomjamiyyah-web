<?php
/**
 * Admin specific functionality
 */
class WEC_Admin
{

	public function enqueue_styles($hook)
	{
		global $post_type;
		if ('wec_event' == $post_type) {
			wp_enqueue_style('wec-admin-style', plugin_dir_url(__FILE__) . 'css/wec-admin.css', array(), '1.0.0', 'all');
		}
	}

	public function enqueue_scripts($hook)
	{
		global $post_type;
		if ('wec_event' == $post_type) {
			wp_enqueue_script('wec-admin-script', plugin_dir_url(__FILE__) . 'js/wec-admin.js', array('jquery', 'wp-data', 'wp-edit-post'), '1.0.0', true);
		}
	}

	public function add_plugin_admin_menu()
	{
		// Add submenu page under 'wec_event' CPT
		add_submenu_page(
			'edit.php?post_type=wec_event',
			__('Settings', 'wp-events-calendar'),
			__('Settings', 'wp-events-calendar'),
			'manage_options',
			'wec_settings',
			array($this, 'display_settings_page')
		);
	}

	public function register_settings()
	{
		register_setting('wec_settings_group', 'wec_custom_css');
	}

	public function display_settings_page()
	{
		?>
		<div class="wrap">
			<h1><?php _e('Events Calendar Settings', 'wp-events-calendar'); ?></h1>
			<form method="post" action="options.php">
				<?php settings_fields('wec_settings_group'); ?>
				<?php do_settings_sections('wec_settings_group'); ?>
				<table class="form-table">
					<tr valign="top">
						<th scope="row"><?php _e('Additional CSS', 'wp-events-calendar'); ?></th>
						<td>
							<textarea name="wec_custom_css" rows="10" cols="50"
								style="width: 100%; font-family: monospace;"><?php echo esc_textarea(get_option('wec_custom_css')); ?></textarea>
							<p class="description">
								<?php _e('Add your custom CSS here to modify the frontend layout, fonts, and styling of the events calendar.', 'wp-events-calendar'); ?>
							</p>
						</td>
					</tr>
				</table>
				<?php submit_button(); ?>
			</form>
		</div>
		<?php
	}

	public function add_wec_event_columns($columns)
	{
		$new_columns = array();
		foreach ($columns as $key => $title) {
			if ($key === 'date') {
				$new_columns['start_date'] = __('Start Date', 'wp-events-calendar');
				$new_columns['end_date'] = __('End Date', 'wp-events-calendar');
			}
			$new_columns[$key] = $title;
		}
		return $new_columns;
	}

	public function render_wec_event_columns($column, $post_id)
	{
		$all_day = get_post_meta($post_id, '_wec_all_day', true);
		$format = ($all_day === '1') ? get_option('date_format') : get_option('date_format') . ' ' . get_option('time_format');

		switch ($column) {
			case 'start_date':
				$start = get_post_meta($post_id, '_wec_start_date', true);
				if ($start) {
					echo esc_html(date_i18n($format, strtotime($start)));
					if ($all_day === '1') {
						echo '<br><small style="color:#999;">(' . __('All Day', 'wp-events-calendar') . ')</small>';
					}
				} else {
					echo '—';
				}
				break;
			case 'end_date':
				$end = get_post_meta($post_id, '_wec_end_date', true);
				if ($end) {
					echo esc_html(date_i18n($format, strtotime($end)));
					if ($all_day === '1') {
						echo '<br><small style="color:#999;">(' . __('All Day', 'wp-events-calendar') . ')</small>';
					}
				} else {
					echo '—';
				}
				break;
		}
	}
}
