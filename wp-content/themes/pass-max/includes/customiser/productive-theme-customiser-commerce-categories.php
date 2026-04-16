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


if ( ! class_exists( 'Productive_Theme_Customiser_Commerce_Categories' ) ) {
    
    /**
     * Productive_Theme_Customiser_Commerce_Categories
     * Theme Customiser Class
     */
    class Productive_Theme_Customiser_Commerce_Categories extends Productive_Theme_Customiser_Common {
        
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
                'productive_passmax_theme_commerce_categories',
                array(
                    'title' => esc_html__( 'Product Archives', 'pass-max' ),
                    'description' => esc_html__( 'Product Archives (Shop, Category, Loop) Options', 'pass-max' ),
                    'panel' => 'productive_passmax_theme_woocommerce_options',
                    'priority' => 20,
                    'capability' => 'edit_theme_options',
                )
                );
            
            // add a setting for productive_passmax_show_sidebars_always_in_woo_archives control, below.
            $wp_customise->add_setting(
                'productive_passmax_show_sidebars_always_in_woo_archives',
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
                'productive_passmax_show_sidebars_always_in_woo_archives',
                array(
                    'type' => 'checkbox',
                    'priority' => 10,
                    'section' => 'productive_passmax_theme_commerce_categories',
                    'label' => esc_html__( 'Always show Sidebar on WooCommerce Archives?', 'pass-max' ),
                    'description' => esc_html__( 'If enabled, sidebars will always be displayed on Product catalog and archives, even if the site is set to one-column layout)', 'pass-max' ),
                )
                );
            
            $wp_customise->add_setting(
                'productive_passmax_woo_archives_style',
                array(
                    'type' => 'theme_mod',
                    'default' => 'product_archive_design_03',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_select'),
                )
            );
            $wp_customise->add_control(
                'productive_passmax_woo_archives_style',
                array(
                    'type' => 'select',
                    'priority' => 20,
                    'section' => 'productive_passmax_theme_commerce_categories',
                    'label' => esc_html__( 'Product Loops Style', 'pass-max' ),
                    'description' => '',
                    'choices' => productive_global_get_woo_archives_style_options(),
                )
            );
            
            $wp_customise->add_setting(
                'productive_passmax_woo_archives_add_to_cart_style',
                array(
                    'type' => 'theme_mod',
                    'default' => 'woo_add_to_cart_on_hover',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_select'),
                )
            );
            $wp_customise->add_control(
                'productive_passmax_woo_archives_add_to_cart_style',
                array(
                    'type' => 'select',
                    'priority' => 21,
                    'section' => 'productive_passmax_theme_commerce_categories',
                    'label' => esc_html__( 'Add to Cart Display', 'pass-max' ),
                    'description' => '',
                    'choices' => array(
                        'woo_add_to_cart_always'    => esc_html__( 'Show Always', 'pass-max' ),
                        'woo_add_to_cart_on_hover'  => esc_html__( 'Show on Hover only', 'pass-max' ),
                    ),
                )
            );
            
        }
        
        
    } // End of class.
    
    if( class_exists( 'woocommerce' ) ) {
        add_action( 'customize_register', array( 'Productive_Theme_Customiser_Commerce_Categories', 'register' ) );
    }
    
} // End of if class exists



/**
 * Method productive_passmax_show_sidebars_always_in_woo_archives.
 *
 * @param string $class ''.
 */
function productive_passmax_show_sidebars_always_in_woo_archives( $class = '' ) {
    return get_theme_mod( 'productive_passmax_show_sidebars_always_in_woo_archives', true );
}

/**
 * Method productive_passmax_woo_archives_style.
 *
 * @param string $class ''.
 */
function productive_passmax_woo_archives_style( $class = '' ) {
    return get_theme_mod( 'productive_passmax_woo_archives_style', 'product_archive_design_03' );
}

/**
 * Method productive_passmax_woo_archives_add_to_cart_style.
 *
 * @param string $class ''.
 */
function productive_passmax_woo_archives_add_to_cart_style( $class = '' ) {
    return get_theme_mod( 'productive_passmax_woo_archives_add_to_cart_style', 'woo_add_to_cart_on_hover' );
}




// COMMERCE CATEGORIES
/**
 * Method productive_passmax_subcategories_design.
 *
 * @param string $class ''.
 */
function productive_passmax_subcategories_design( $class = '' ) {
    return get_theme_mod( 'productive_passmax_subcategories_design', 'subcat_design_01' );
}

/**
 * Method productive_passmax_subcategories_items_per_row_to_display.
 *
 * @param string $class ''.
 */
function productive_passmax_subcategories_items_per_row_to_display( $class = '' ) {
    return get_theme_mod( 'productive_passmax_subcategories_items_per_row_to_display', 5 );
}
add_action( 'productive_passmax_display_subcategories_items_per_row_to_display', 'productive_passmax_subcategories_items_per_row_to_display' );
