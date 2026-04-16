<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package Business Enterprise
 * @since 1.0.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function business_enterprise_register_block_styles() {
		// Box shadow for columns, column, group and image
		register_block_style(
			'core/columns',
			array(
				'name'  => 'bk-box-shadow',
				'label' => __( 'Box Shadow', 'business-enterprise' )
			)
		);

		register_block_style(
			'core/column',
			array(
				'name'  => 'bk-box-shadow',
				'label' => __( 'Box Shadow', 'business-enterprise' )
			)
		);
		register_block_style(
			'core/column',
			array(
				'name'  => 'bk-box-shadow-medium',
				'label' => __( 'Box Shadow Medium', 'business-enterprise' )
			)
		);
		register_block_style(
			'core/column',
			array(
				'name'  => 'bk-box-shadow-large',
				'label' => __( 'Box Shadow Large', 'business-enterprise' )
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'bk-box-shadow',
				'label' => __( 'Box Shadow', 'business-enterprise' )
			)
		);
		register_block_style(
			'core/group',
			array(
				'name'  => 'bk-box-shadow-medium',
				'label' => __( 'Box Shadow Medium', 'business-enterprise' )
			)
		);
		register_block_style(
			'core/group',
			array(
				'name'  => 'bk-box-shadow-large',
				'label' => __( 'Box Shadow Larger', 'business-enterprise' )
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'bk-box-shadow',
				'label' => __( 'Box Shadow', 'business-enterprise' )
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'bk-box-shadow-medium',
				'label' => __( 'Box Shadow Medium', 'business-enterprise' )
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'bk-box-shadow-larger',
				'label' => __( 'Box Shadow Large', 'business-enterprise' )
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'bk-box-shadow-hover',
				'label' => __( 'Box Shadow on Hover', 'business-enterprise' )
			)
		);
		register_block_style(
			'core/columns',
			array(
				'name'  => 'bk-box-shadow-hover',
				'label' => __( 'Box Shadow on Hover', 'business-enterprise' )
			)
		);

		register_block_style(
			'core/column',
			array(
				'name'  => 'bk-box-shadow-hover',
				'label' => __( 'Box Shadow on Hover', 'business-enterprise' )
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'bk-box-shadow-hover',
				'label' => __( 'Box Shadow on Hover', 'business-enterprise' )
			)
		);

		// Secondary button
		register_block_style(
			'core/button',
			array(
				'name'   => 'bk-button-secondary',
				'label'  => __( 'Secondary', 'business-enterprise' )
			)
		);
	}
	add_action( 'init', 'business_enterprise_register_block_styles' );
}