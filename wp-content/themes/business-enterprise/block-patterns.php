<?php
/**
 * Block Patterns
 *
 * @since 1.0.0
 */

/**
 * Registers pattern categories for Business Enterprise
 *
 * @since 1.0.0
 * @return void
 */
function business_enterprise_register_pattern_category() {
	$block_pattern_categories = array(
		'theme' => array( 'label' => esc_html__( 'Base Theme Patterns', 'business-enterprise' ) ),
	);

	$block_pattern_categories = apply_filters( 'business_enterprise_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'business_enterprise_register_pattern_category', 9 );