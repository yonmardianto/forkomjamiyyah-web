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

if ( ! class_exists( 'Productive_Theme_Customiser_Homepage_Products_On_Sale' ) ) {
    
    /**
     * Productive_Theme_Customiser_Homepage_Products_On_Sale
     * Theme Customiser Class
     */
    class Productive_Theme_Customiser_Homepage_Products_On_Sale extends Productive_Theme_Customiser_Common {
        
        /**
         * Register the customizer
         *
         * @param WP_Customize_Manager $wp_customise param.
         */
        public static function register( $wp_customise ) {
            
            // See common for Panels
            // 
            
            // Section
            $panel = 'productive_passmax_theme_homepage_options';
            if ( function_exists('pass_addons_is_active') ) {
                $panel = 'pass_addons_theme_options_homepage';
            }
            $wp_customise->add_section(
                'productive_passmax_homepage_products_on_sale_options',
                array(
                    'title' => esc_html__( 'Products On Sale', 'pass-max' ),
                    'description' => esc_html__( 'Home Products On Sale Section', 'pass-max' ),
                    'panel' => $panel,
                    'priority' => 120,
                    'capability' => 'edit_theme_options',
                )
                );
            
            // add a setting for productive_passmax_homepage_products_on_sale_enable control, below.
            $wp_customise->add_setting(
                'productive_passmax_homepage_products_on_sale_enable',
                array(
                    'type' => 'theme_mod',
                    'default' => true,
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_checkbox'),
                )
                );
            $wp_customise->add_control(
                'productive_passmax_homepage_products_on_sale_enable',
                array(
                    'type' => 'checkbox',
                    'priority' => 10,
                    'section' => 'productive_passmax_homepage_products_on_sale_options',
                    'label' => esc_html__( 'Enable On Sale Products Section?', 'pass-max' ),
                    'description' => '',
                    // 'active_callback' => 'is_front_page',
                )
            );
            
            // add a setting for productive_passmax_homepage_products_on_sale_section_title control, below.
            $wp_customise->add_setting(
                'productive_passmax_homepage_products_on_sale_section_title',
                array(
                    'type' => 'theme_mod',
                    'default' => esc_html__( 'Products On Sale', 'pass-max' ),
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_no_html'),
                )
            );
            $wp_customise->add_control(
                'productive_passmax_homepage_products_on_sale_section_title',
                array(
                    'type' => 'text',
                    'priority' => 20,
                    'section' => 'productive_passmax_homepage_products_on_sale_options',
                    'label' => esc_html__( 'Section Title', 'pass-max' ),
                    'description' => '',
                )
            );
            
            
            // add a setting for productive_passmax_homepage_products_on_sale_section_go_to_shop_copy control, below.
            $wp_customise->add_setting(
                'productive_passmax_homepage_products_on_sale_section_go_to_shop_copy',
                array(
                    'type' => 'theme_mod',
                    'default' => esc_html__( 'Shop', 'pass-max' ),
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_no_html'),
                )
            );
            $wp_customise->add_control(
                'productive_passmax_homepage_products_on_sale_section_go_to_shop_copy',
                array(
                    'type' => 'text',
                    'priority' => 30,
                    'section' => 'productive_passmax_homepage_products_on_sale_options',
                    'label' => esc_html__( '"Go to Shop" link Copy', 'pass-max' ),
                    'description' => esc_html__( 'Leave empty to hide', 'pass-max' ),
                )
            );
            
            // add a setting for productive_passmax_homepage_products_on_sale_num_cols control, below.
            $wp_customise->add_setting(
                'productive_passmax_homepage_products_on_sale_num_cols',
                array(
                    'type' => 'theme_mod',
                    'default' => 4,
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_absint'),
                )
            );
            $wp_customise->add_control(
                'productive_passmax_homepage_products_on_sale_num_cols',
                array(
                    'type' => 'number',
                    'priority' => 40,
                    'section' => 'productive_passmax_homepage_products_on_sale_options',
                    'label' => esc_html__( 'Number of columns per row', 'pass-max' ),
                    'description' => esc_html__( 'The number of products to show in a row.', 'pass-max' ),
                    'input_attrs' => array(
                        'min' => 2,
                        'max' => 7,
                        'step' => 1,
                    ),
                )
            );
            
            // add a setting for productive_passmax_homepage_products_on_sale_num_rows control, below.
            $wp_customise->add_setting(
                'productive_passmax_homepage_products_on_sale_num_rows',
                array(
                    'type' => 'theme_mod',
                    'default' => 1,
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_absint'),
                )
            );
            $wp_customise->add_control(
                'productive_passmax_homepage_products_on_sale_num_rows',
                array(
                    'type' => 'number',
                    'priority' => 50,
                    'section' => 'productive_passmax_homepage_products_on_sale_options',
                    'label' => esc_html__( 'Number of rows', 'pass-max' ),
                    'description' => '',
                    'input_attrs' => array(
                        'min' => 1,
                        'max' => 2,
                        'step' => 1,
                    ),
                )
            );
            
            // add a setting for productive_passmax_homepage_products_on_sale_section_bg_color_scheme control, below.
            $wp_customise->add_setting(
                'productive_passmax_homepage_products_on_sale_section_bg_color_scheme',
                array(
                    'type' => 'theme_mod',
                    'default' => 'section_with_themed_bg',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_select'),
                )
            );
            $wp_customise->add_control(
                'productive_passmax_homepage_products_on_sale_section_bg_color_scheme',
                array(
                    'type' => 'select',
                    'priority' => 110,
                    'section' => 'productive_passmax_homepage_products_on_sale_options',
                    'label' => esc_html__( 'Section Background Color Scheme', 'pass-max' ),
                    'description' => '',
                    'choices' => productive_global_get_colour_schemes_for_bg(),
                )
            );

            // add a setting for productive_passmax_pro_callout_1, below.
            $hero_content_list_url = 'edit.php?post_type='.PRODUCTIVE_PASSMAX_PLUGIN_CONTENT_ELEMENT_SLUG.'&'.PRODUCTIVE_PASSMAX_PLUGIN_CONTENT_ELEMENT_TAXONOMY_SLUG.'='.PRODUCTIVE_PASSMAX_PLUGIN_HOME_SECTION_HERO_TAXONOMY_SLUG_ON_SALE;
            $productive_passmax_manage_heading = esc_html__( 'Manage Hero Image and Content', 'pass-max' );
            $productive_passmax_manage_list_url = '<a target="_blank" class="" href="'. esc_url( admin_url( $hero_content_list_url ) ) .'">' . esc_html__( 'Manage Hero Content', 'pass-max' ) . '</a> ';

            $wp_customise->add_setting(
                'productive_passmax_homepage_manage_on_sale_hero_content_list_url',
                array(
                    'type' => 'theme_mod',
                    'default' => '',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_html'),
                )
                );
            // add control..
            $wp_customise->add_control(
                'productive_passmax_homepage_manage_on_sale_hero_content_list_url',
                array(
                    'type' => 'hidden',
                    'priority' => 200,
                    'section' => 'productive_passmax_homepage_products_on_sale_options',
                    'label' => $productive_passmax_manage_heading,
                    'description' => $productive_passmax_manage_list_url,
                )
                );
        }
        
        
    } // End of class.
    add_action( 'customize_register', array( 'Productive_Theme_Customiser_Homepage_Products_On_Sale', 'register' ) );
    
    
    /**
     * Method productive_passmax_homepage_products_on_sale_enable.
     *
     * @param string $class ''.
     */
    function productive_passmax_homepage_products_on_sale_enable( $class = '' ) {
        return get_theme_mod( 'productive_passmax_homepage_products_on_sale_enable', true);
    }

    /**
     * Method productive_passmax_homepage_products_on_sale_section_title.
     *
     * @param string $class ''.
     */
    function productive_passmax_homepage_products_on_sale_section_title( $class = '' ) {
        return get_theme_mod( 'productive_passmax_homepage_products_on_sale_section_title', esc_html__( 'Products On Sale', 'pass-max' ) );
    }

    /**
     * Method productive_passmax_homepage_products_on_sale_section_go_to_shop_copy.
     *
     * @param string $class ''.
     */
    function productive_passmax_homepage_products_on_sale_section_go_to_shop_copy( $class = '' ) {
        return get_theme_mod( 'productive_passmax_homepage_products_on_sale_section_go_to_shop_copy', esc_html__( 'Shop', 'pass-max' ) );
    }

    /**
     * Method productive_passmax_homepage_products_on_sale_num_cols.
     *
     * @param string $class ''.
     */
    function productive_passmax_homepage_products_on_sale_num_cols( $class = '' ) {
        return get_theme_mod( 'productive_passmax_homepage_products_on_sale_num_cols', 4 );
    }

    /**
     * Method productive_passmax_homepage_products_on_sale_num_rows.
     *
     * @param string $class ''.
     */
    function productive_passmax_homepage_products_on_sale_num_rows( $class = '' ) {
        return get_theme_mod( 'productive_passmax_homepage_products_on_sale_num_rows', 1 );
    }
    
    /**
     * Method productive_passmax_homepage_products_on_sale_section_bg_color_scheme.
     *
     * @param string $class ''.
     */
    function productive_passmax_homepage_products_on_sale_section_bg_color_scheme( $class = '' ) {
        return get_theme_mod( 'productive_passmax_homepage_products_on_sale_section_bg_color_scheme', 'section_with_themed_bg' );
    }

    
} // End of if class exists
