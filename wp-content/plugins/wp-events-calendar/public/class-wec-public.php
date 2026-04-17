<?php
/**
 * Public specific functionality
 */
class WEC_Public
{

	public function enqueue_styles()
	{
		// Not strictly needed as FullCalendar 6 doesn't require a separate CSS file, 
		// but we might want custom styling.
		wp_enqueue_style('wec-public-style', plugin_dir_url(__FILE__) . 'css/wec-public.css', array(), '1.0.0', 'all');

		$custom_css = get_option('wec_custom_css');
		if (!empty($custom_css)) {
			wp_add_inline_style('wec-public-style', wp_strip_all_tags($custom_css));
		}
	}

	public function enqueue_scripts()
	{
		// Only enqueue FullCalendar JS if the shortcode is on the page, or enqueue everywhere (simpler).
		// For performance, we should ideally check if the shortcode exists, but for now we enqueue globally or let the shortcode handle it.
		// Actually, let's register the scripts here and enqueue them in the shortcode.

		wp_register_script('fullcalendar', 'https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js', array(), '6.1.11', true);
		wp_register_script('wec-public-script', plugin_dir_url(__FILE__) . 'js/wec-public.js', array('fullcalendar'), '1.0.0', true);

		// Localize script to pass the REST API URL
		wp_localize_script('wec-public-script', 'wecData', array(
			'apiUrl' => rest_url('wec/v1/events')
		));
	}

	public function render_calendar_shortcode($atts)
	{
		// Enqueue scripts when shortcode is used
		wp_enqueue_style('wec-public-style');
		wp_enqueue_script('fullcalendar');
		wp_enqueue_script('wec-public-script');

		// Render the calendar container
		ob_start();
		?>
		<div class="wec-wrapper"
			style="display: flex; flex-wrap: wrap; gap: 20px; background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); max-width: 1200px; margin: 0 auto;">
			<div id="wec-calendar-container" style="flex: 1 1 65%; min-width: 300px;"></div>

			<div id="wec-event-list-sidebar"
				style="flex: 1 1 30%; min-width: 250px; border-left: 1px solid #eee; padding-left: 20px;">
				<h3 style="margin-top:0;">Daftar Event</h3>
				<div id="wec-event-list-container" style="max-height: 600px; overflow-y: auto; padding-right:10px;">
					<!-- Event items will be injected here via JS -->
					<p style="color:#777;">Memuat event...</p>
				</div>
			</div>
		</div>

		<!-- Modal for Event Details -->
		<div id="wec-event-modal"
			style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.5); z-index:9999;">
			<div
				style="position:relative; top:50%; left:50%; transform:translate(-50%, -50%); background:#fff; padding:20px; border-radius:8px; max-width:400px; width:90%;">
				<span id="wec-modal-close" style="float:right; cursor:pointer; font-size:20px; font-weight:bold;">&times;</span>
				<h3 id="wec-modal-title" style="margin-top:0;"></h3>
				<img id="wec-modal-image" src=""
					style="width:100%; max-width:300px; height:auto; display:none; margin-bottom:15px; border-radius:4px;" />
				<p><strong>Waktu:</strong> <span id="wec-modal-time"></span></p>
				<div id="wec-modal-desc"></div>
				<a id="wec-modal-link" href="#" style="display:inline-block; margin-top:10px; color:#fff;">Lihat Detail
					&rarr;</a>
			</div>
		</div>
		<?php
		return ob_get_clean();
	}
}
