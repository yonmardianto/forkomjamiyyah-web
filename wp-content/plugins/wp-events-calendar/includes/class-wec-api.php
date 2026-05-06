<?php
/**
 * REST API Endpoints
 */
class WEC_API {

	public function register_routes() {
		register_rest_route( 'wec/v1', '/events', array(
			'methods'             => 'GET',
			'callback'            => array( $this, 'get_events' ),
			'permission_callback' => '__return_true' // Publicly accessible
		) );
	}

	public function get_events( $request ) {
		$args = array(
			'post_type'      => 'wec_event',
			'posts_per_page' => -1,
			'post_status'    => 'publish',
		);

		// If start and end parameters are provided by FullCalendar
		$start_date = $request->get_param( 'start' );
		$end_date   = $request->get_param( 'end' );

		// We could potentially add a meta_query here to filter by date, 
		// but for a simpler generic approach we just fetch all or filter in PHP. 
		// For scalability, filtering in WP_Query is better.
		if ( $start_date && $end_date ) {
			// Convert ISO to Y-m-d format for meta comparison
			$start_dt = gmdate( 'Y-m-d H:i:s', strtotime( $start_date ) );
			$end_dt   = gmdate( 'Y-m-d H:i:s', strtotime( $end_date ) );
			
			$args['meta_query'] = array(
				'relation' => 'OR',
				array(
					'key'     => '_wec_start_date',
					'value'   => array( $start_dt, $end_dt ),
					'compare' => 'BETWEEN',
					'type'    => 'DATETIME'
				),
				array(
					'key'     => '_wec_end_date',
					'value'   => array( $start_dt, $end_dt ),
					'compare' => 'BETWEEN',
					'type'    => 'DATETIME'
				)
			);
		}

		$formatted_events = array();

		// Check if WordPress is in Multisite mode and current site is the main site
		if ( is_multisite() && is_main_site() ) {
			// Get all active, public subsites
			$sites = get_sites( array( 'public' => 1, 'archived' => 0, 'spam' => 0, 'deleted' => 0 ) );
			
			foreach ( $sites as $site ) {
				// Switch scope to the specific subsite
				switch_to_blog( $site->blog_id );
				
				$events = get_posts( $args );
				$blog_name = get_bloginfo( 'name' ); // Get the subsite's name
				
				foreach ( $events as $event ) {
					$start   = get_post_meta( $event->ID, '_wec_start_date', true );
					$end     = get_post_meta( $event->ID, '_wec_end_date', true );
					$all_day = (bool) get_post_meta( $event->ID, '_wec_all_day', true );
					$image_url = get_the_post_thumbnail_url( $event->ID, 'wec-event-image' );

					$formatted_events[] = array(
						'id'          => $site->blog_id . '-' . $event->ID, // Unique ID across the network
						'title'       => $event->post_title,
						'start'       => $start,
						'end'         => ( $all_day && ! empty( $end ) ) ? date( 'Y-m-d', strtotime( $end . ' +1 day' ) ) : $end,
						'allDay'      => $all_day,
						'description' => wp_strip_all_tags( $event->post_content ),
						'imageUrl'    => $image_url ? $image_url : '',
						'url'         => get_permalink( $event->ID ),
						'blogId'      => $site->blog_id,
						'blogName'    => $blog_name,
					);
				}
				
				restore_current_blog(); // Revert back to original site scope
			}
		} else {
			// Single site logic
			$events    = get_posts( $args );
			$blog_id   = get_current_blog_id();
			$blog_name = get_bloginfo( 'name' );
			
			foreach ( $events as $event ) {
				$start   = get_post_meta( $event->ID, '_wec_start_date', true );
				$end     = get_post_meta( $event->ID, '_wec_end_date', true );
				$all_day = (bool) get_post_meta( $event->ID, '_wec_all_day', true );
				$image_url = get_the_post_thumbnail_url( $event->ID, 'wec-event-image' );

				$formatted_events[] = array(
					'id'          => $event->ID,
					'title'       => $event->post_title,
					'start'       => $start,
					'end'         => ( $all_day && ! empty( $end ) ) ? date( 'Y-m-d', strtotime( $end . ' +1 day' ) ) : $end,
					'allDay'      => $all_day,
					'description' => wp_strip_all_tags( $event->post_content ),
					'imageUrl'    => $image_url ? $image_url : '',
					'url'         => get_permalink( $event->ID ),
					'blogId'      => $blog_id,
					'blogName'    => $blog_name,
				);
			}
		}

		return rest_ensure_response( $formatted_events );
	}
}
