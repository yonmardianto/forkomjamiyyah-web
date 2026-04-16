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


if ( ! class_exists( 'Productive_Theme_Customiser_Commerce_Generic' ) ) {
    
    /**
     * Productive_Theme_Customiser_Commerce_Generic
     * Theme Customiser Class
     */
    class Productive_Theme_Customiser_Commerce_Generic extends Productive_Theme_Customiser_Common {
        
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
                'productive_passmax_theme_commerce_generic',
                array(
                    'title' => esc_html__( 'General WooCommerce Options', 'pass-max' ),
                    'description' => esc_html__( 'WooCommerce options across website', 'pass-max' ),
                    'panel' => 'productive_passmax_theme_woocommerce_options',
                    'priority' => 10,
                    'capability' => 'edit_theme_options',
                )
                );
            
            // add a setting for productive_passmax_enable_header_cart control, below.
            $wp_customise->add_setting(
                'productive_passmax_enable_header_cart',
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
                'productive_passmax_enable_header_cart',
                array(
                    'type' => 'checkbox',
                    'priority' => 20,
                    'section' => 'productive_passmax_theme_commerce_generic',
                    'label' => esc_html__( 'Show Header Mini-Cart Icon?', 'pass-max' ),
                    'description' => esc_html__( 'Display Cart icon in the header', 'pass-max' ),
                    // 'active_callback' => 'is_front_page',
                )
                );

                // add a setting for productive_passmax_enable_header_wishlist control, below.
            $wp_customise->add_setting(
                    'productive_passmax_enable_header_wishlist',
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
                    'productive_passmax_enable_header_wishlist',
                    array(
                        'type' => 'checkbox',
                        'priority' => 30,
                        'section' => 'productive_passmax_theme_commerce_generic',
                        'label' => esc_html__('Show Header Wishlist Icon?', 'pass-max'),
                        'description' => esc_html__('Display Wishlist icon in the header', 'pass-max'),
                    // 'active_callback' => 'is_front_page',
                    )
            );

            // add a setting for productive_passmax_enable_header_compare control, below.
            $wp_customise->add_setting(
                    'productive_passmax_enable_header_compare',
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
                    'productive_passmax_enable_header_compare',
                    array(
                        'type' => 'checkbox',
                        'priority' => 40,
                        'section' => 'productive_passmax_theme_commerce_generic',
                        'label' => esc_html__('Show Header Compare Icon?', 'pass-max'),
                        'description' => esc_html__('Display product compare icon in the header', 'pass-max'),
                    // 'active_callback' => 'is_front_page',
                    )
            );
        }
        
        
    } // End of class.
    
    if ( class_exists( 'woocommerce' ) && productiveminds_is_productive_commerce() ) {
        // add hook for the class.
        add_action( 'customize_register', array( 'Productive_Theme_Customiser_Commerce_Generic', 'register' ) );
    }
    
} // End of if class exists


/**
 * Method productive_passmax_enable_header_cart.
 *
 * @param string $class ''.
 */
function productive_passmax_enable_header_cart( $class = '' ) {
    return get_theme_mod( 'productive_passmax_enable_header_cart', true );
}
add_action( 'productive_passmax_display_enable_header_cart', 'productive_passmax_enable_header_cart' );

/**
 * Method productive_passmax_enable_header_wishlist.
 *
 * @param string $class ''.
 */
function productive_passmax_enable_header_wishlist( $class = '' ) {
    return get_theme_mod( 'productive_passmax_enable_header_wishlist', true );
}
add_action( 'productive_passmax_display_enable_header_wishlist', 'productive_passmax_enable_header_wishlist' );

/**
 * Method productive_passmax_enable_header_compare.
 *
 * @param string $class ''.
 */
function productive_passmax_enable_header_compare( $class = '' ) {
    return get_theme_mod( 'productive_passmax_enable_header_compare', true );
}
add_action( 'productive_passmax_display_enable_header_compare', 'productive_passmax_enable_header_compare' );
