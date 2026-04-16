<?php
/**
 * Theme Customiser
 *
 * @package     pass-max
 * @author      productiveminds.com
 * @copyright   productiveminds.com
 * 
 */

if ( ! defined( 'ABSPATH' ) ) {
    die();
}


if ( ! class_exists( 'Productive_Theme_Customiser_Commerce_Product_Page' ) ) {
    
    /**
     * Productive_Theme_Customiser_Commerce_Product_Page
     * Theme Customiser Class
     */
    class Productive_Theme_Customiser_Commerce_Product_Page extends Productive_Theme_Customiser_Common {
        
        /**
         * Register the customizer
         *
         * @param WP_Customize_Manager $wp_customise param.
         */
        public static function register( $wp_customise ) {
            
            // See common for Panels
            // 
            // Section
            $wp_customise->add_section(
                'productive_passmax_theme_commerce_product_page',
                array(
                    'title' => esc_html__( 'Product Page', 'pass-max' ),
                    'description' => esc_html__( 'Product Details Page Options', 'pass-max' ),
                    'panel' => 'productive_passmax_theme_woocommerce_options',
                    'priority' => 30,
                    'capability' => 'edit_theme_options',
                )
                );
            
            // add a setting for productive_passmax_show_sidebars_always_in_woo_product_details control, below.
            $wp_customise->add_setting(
                'productive_passmax_show_sidebars_always_in_woo_product_details',
                array(
                    'type' => 'theme_mod',
                    'default' => true,
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_checkbox'),
                )
                );
            
            // add control..
            $wp_customise->add_control(
                'productive_passmax_show_sidebars_always_in_woo_product_details',
                array(
                    'type' => 'checkbox',
                    'priority' => 10,
                    'section' => 'productive_passmax_theme_commerce_product_page',
                    'label' => esc_html__( 'Always show Sidebar on Product Page?', 'pass-max' ),
                    'description' => esc_html__( 'If enabled, sidebars will always be displayed on Product details page, even if the site is set to one-column layout', 'pass-max' ),
                )
                );
            
            // add a setting for productive_passmax_show_top_banner_product_details control, below.
            $wp_customise->add_setting(
                'productive_passmax_show_top_banner_product_details',
                array(
                    'type' => 'theme_mod',
                    'default' => false,
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_checkbox'),
                )
                );
            
            // add control..
            $wp_customise->add_control(
                'productive_passmax_show_top_banner_product_details',
                array(
                    'type' => 'checkbox',
                    'priority' => 20,
                    'section' => 'productive_passmax_theme_commerce_product_page',
                    'label' => esc_html__( 'Show Top Banner on Product Page?', 'pass-max' ),
                    'description' => esc_html__( 'If disabled, top banner will be hidden on product page, even if enabled site-wide.', 'pass-max' ),
                )
                );
            
            // add a setting for productive_passmax_show_prev_next_woo_product_details control, below.
            $wp_customise->add_setting(
                'productive_passmax_show_prev_next_woo_product_details',
                array(
                    'type' => 'theme_mod',
                    'default' => true,
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_checkbox'),
                )
                );
            
            // add control..
            $wp_customise->add_control(
                'productive_passmax_show_prev_next_woo_product_details',
                array(
                    'type' => 'checkbox',
                    'priority' => 30,
                    'section' => 'productive_passmax_theme_commerce_product_page',
                    'label' => esc_html__( 'Show Previous/Next Nav', 'pass-max' ),
                    'description' => esc_html__( 'Users can navigate to the previous and next product page, when enabled.', 'pass-max' ),
                )
                );
            
        }
        
        
    } // End of class.
    
    if( class_exists( 'woocommerce' ) ) {
        add_action( 'customize_register', array( 'Productive_Theme_Customiser_Commerce_Product_Page', 'register' ) );
    }
    
} // End of if class exists



/**
 * Method productive_passmax_show_sidebars_always_in_woo_product_details.
 *
 * @param string $class ''.
 */
function productive_passmax_show_sidebars_always_in_woo_product_details( $class = '' ) {
    return get_theme_mod( 'productive_passmax_show_sidebars_always_in_woo_product_details', true );
}

/**
 * Method productive_passmax_show_top_banner_product_details.
 *
 * @param string $class ''.
 */
function productive_passmax_show_top_banner_product_details( $class = '' ) {
    return get_theme_mod( 'productive_passmax_show_top_banner_product_details', false );
}

/**
 * Method productive_passmax_product_page_custom_design.
 *
 * @param string $class ''.
 */
function productive_passmax_product_page_custom_design( $class = '' ) {
    return get_theme_mod( 'productive_passmax_product_page_custom_design', true );
}
add_action( 'productive_passmax_display_product_page_custom_design', 'productive_passmax_product_page_custom_design' );

/**
 * Method productive_passmax_show_prev_next_woo_product_details.
 *
 * @param string $class ''.
 */
function productive_passmax_show_prev_next_woo_product_details( $class = '' ) {
    return get_theme_mod( 'productive_passmax_show_prev_next_woo_product_details', true );
}
