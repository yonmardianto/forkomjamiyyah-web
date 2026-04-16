<?php
/**
 * Post Types and Meta Boxes
 */
class WEC_CPT {

	public function register_cpt_event() {
		$labels = array(
			'name'               => _x( 'Events', 'post type general name', 'wp-events-calendar' ),
			'singular_name'      => _x( 'Event', 'post type singular name', 'wp-events-calendar' ),
			'menu_name'          => _x( 'Events Calendar', 'admin menu', 'wp-events-calendar' ),
			'name_admin_bar'     => _x( 'Event', 'add new on admin bar', 'wp-events-calendar' ),
			'add_new'            => _x( 'Add New', 'event', 'wp-events-calendar' ),
			'add_new_item'       => __( 'Add New Event', 'wp-events-calendar' ),
			'new_item'           => __( 'New Event', 'wp-events-calendar' ),
			'edit_item'          => __( 'Edit Event', 'wp-events-calendar' ),
			'view_item'          => __( 'View Event', 'wp-events-calendar' ),
			'all_items'          => __( 'All Events', 'wp-events-calendar' ),
			'search_items'       => __( 'Search Events', 'wp-events-calendar' ),
			'parent_item_colon'  => __( 'Parent Events:', 'wp-events-calendar' ),
			'not_found'          => __( 'No events found.', 'wp-events-calendar' ),
			'not_found_in_trash' => __( 'No events found in Trash.', 'wp-events-calendar' )
		);

		$args = array(
			'labels'             => $labels,
			'description'        => __( 'Description.', 'wp-events-calendar' ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'event' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'menu_icon'          => 'dashicons-calendar-alt',
			'supports'           => array( 'title', 'editor', 'thumbnail' ),
			'show_in_rest'       => true // Required for Gutenberg editor
		);

		register_post_type( 'wec_event', $args );
	}

	public function register_image_sizes() {
		add_image_size( 'wec-event-image', 300, 300, true );
	}

	public function add_event_meta_boxes() {
		add_meta_box(
			'wec_event_dates_meta_box', // ID
			__( 'Event Dates', 'wp-events-calendar' ), // Title
			array( $this, 'render_event_dates_meta_box' ), // Callback
			'wec_event', // Screen (CPT)
			'side', // Context
			'high' // Priority
		);
	}

	public function render_event_dates_meta_box( $post ) {
		// Add an nonce field so we can check for it later.
		wp_nonce_field( 'wec_save_event_dates', 'wec_event_dates_nonce' );

		// Use get_post_meta to retrieve an existing value from the database.
		$start_date = get_post_meta( $post->ID, '_wec_start_date', true );
		$end_date   = get_post_meta( $post->ID, '_wec_end_date', true );

		echo '<div style="margin-bottom: 15px;">';
		echo '<label for="wec_start_date"><strong>' . __( 'Start Date & Time', 'wp-events-calendar' ) . '</strong></label><br>';
		echo '<input type="datetime-local" id="wec_start_date" name="wec_start_date" value="' . esc_attr( $start_date ) . '" style="width: 100%; margin-top: 5px;" required />';
		echo '</div>';

		echo '<div>';
		echo '<label for="wec_end_date"><strong>' . __( 'End Date & Time', 'wp-events-calendar' ) . '</strong></label><br>';
		echo '<input type="datetime-local" id="wec_end_date" name="wec_end_date" value="' . esc_attr( $end_date ) . '" style="width: 100%; margin-top: 5px;" required />';
		echo '</div>';
	}

	public function save_event_meta_boxes( $post_id ) {
		// Check if our nonce is set.
		if ( ! isset( $_POST['wec_event_dates_nonce'] ) ) {
			return;
		}

		// Verify that the nonce is valid.
		if ( ! wp_verify_nonce( $_POST['wec_event_dates_nonce'], 'wec_save_event_dates' ) ) {
			return;
		}

		// If this is an autosave, our form has not been submitted, so we don't want to do anything.
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
			return;
		}

		// Check the user's permissions.
		if ( isset( $_POST['post_type'] ) && 'wec_event' == $_POST['post_type'] ) {
			if ( ! current_user_can( 'edit_post', $post_id ) ) {
				return;
			}
		}

		// Sanitize user input.
		$start_date = isset( $_POST['wec_start_date'] ) ? sanitize_text_field( $_POST['wec_start_date'] ) : '';
		$end_date   = isset( $_POST['wec_end_date'] ) ? sanitize_text_field( $_POST['wec_end_date'] ) : '';

		// Server side validation: End date cannot be earlier than start date
		if ( ! empty( $start_date ) && ! empty( $end_date ) ) {
			if ( strtotime( $end_date ) < strtotime( $start_date ) ) {
				$end_date = $start_date; // Auto correct fallback
			}
		}

		// Update the meta field in the database.
		update_post_meta( $post_id, '_wec_start_date', $start_date );
		update_post_meta( $post_id, '_wec_end_date', $end_date );
	}
}
