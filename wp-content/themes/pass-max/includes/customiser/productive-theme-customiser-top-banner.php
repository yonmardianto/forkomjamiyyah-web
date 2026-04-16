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


if ( ! class_exists( 'Productive_Theme_Customiser_Top_Banner' ) ) {
    
    /**
     * Productive_Theme_Customiser_Top_Banner
     * Theme Customiser Class
     */
    class Productive_Theme_Customiser_Top_Banner extends Productive_Theme_Customiser_Common {
        
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
                'productive_passmax_top_banner',
                array(
                    'title' => esc_html__( 'Top Banner Options', 'pass-max' ),
                    'description' => esc_html__( 'Top Banner Options', 'pass-max' ),
                    'panel' => 'productive_passmax_theme_options',
                    'priority' => 90,
                    'capability' => 'edit_theme_options',
                )
                );
            
            // add a setting for productive_passmax_page_banner_image control, below.
            $wp_customise->add_setting(
                'productive_passmax_page_banner_image',
                array(
                    'type' => 'theme_mod',
                    'default' => true,
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_image'),
                )
                );
            
            // add control.
            $wp_customise->add_control(
                new WP_Customize_Media_Control(
                    $wp_customise,
                    'productive_passmax_page_banner_image',
                    array(
                        'priority' => 10,
                        'section' => 'productive_passmax_top_banner',
                        'label' => esc_html__( 'Top Banner Image', 'pass-max' ),
                        'description' => esc_html__( 'Site-wide top banner image', 'pass-max' ),
                        // 'active_callback' => 'is_front_page'
                    )
                    )
                );
            
            // add a setting for productive_passmax_show_top_banner control, below.
            $wp_customise->add_setting(
                'productive_passmax_show_top_banner',
                array(
                    'type' => 'theme_mod',
                    'default' => 'hide_top_banner',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_select'),
                )
            );
            $wp_customise->add_control(
                'productive_passmax_show_top_banner',
                array(
                    'type' => 'select',
                    'priority' => 20,
                    'section' => 'productive_passmax_top_banner',
                    'label' => esc_html__( 'Top Banner Width', 'pass-max' ),
                    'description' => '',
                    'choices' => array(
                        'full_width_top_banner' => esc_html__( 'Full Width', 'pass-max' ),
                        'page_width_top_banner' => esc_html__( 'Page Content Width', 'pass-max' ),
                        'hide_top_banner' => esc_html__( 'Hide Top Banner', 'pass-max' ),
                    ),
                )
            );
            
            // add a setting for productive_passmax_top_banner_title_css_style control, below.
            $wp_customise->add_setting(
                'productive_passmax_top_banner_title_css_style',
                array(
                    'type' => 'theme_mod',
                    'default' => 'h3',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_select'),
                )
            );
            $wp_customise->add_control(
                'productive_passmax_top_banner_title_css_style',
                array(
                    'type' => 'select',
                    'priority' => 30,
                    'section' => 'productive_passmax_top_banner',
                    'label' => esc_html__( 'Top Banner Title CSS Style', 'pass-max' ),
                    'description' => esc_html__( 'Select the css style to apply to titles in the top banner (default = h3).', 'pass-max' ),
                    'choices' => productive_global_get_heading_tag_css_classes(),
                )
            );
            
            $wp_customise->add_setting(
                'productive_passmax_top_banner_overlay_color',
                array(
                    'type' => 'theme_mod',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'default'              => '#000000',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_color'),
                )
                );
            
            $wp_customise->add_control(
                new WP_Customize_Color_Control(
                    $wp_customise,
                    'productive_passmax_top_banner_overlay_color',
                    array(
                        'priority' => 40,
                        'label' => esc_html__( 'Overlay Color', 'pass-max' ),
                        'section' => 'productive_passmax_top_banner',
                    )
                    )
                );
            
            $wp_customise->add_setting(
                'productive_passmax_top_banner_overlay_opacity',
                array(
                    'type' => 'theme_mod',
                    'default' => 0.0,
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_float'),
                )
            );
            $wp_customise->add_control(
                'productive_passmax_top_banner_overlay_opacity',
                array(
                    'type' => 'number',
                    'priority' => 50,
                    'section' => 'productive_passmax_top_banner',
                    'label' => esc_html__( 'Overlay Opacity', 'pass-max' ),
                    'description' => '',
                    'input_attrs' => array(
                        'min' => 0,
                        'max' => 1,
                        'step' => 0.02,
                    ),
                )
            );
            
            $wp_customise->add_setting(
                'productive_passmax_top_banner_alignment_v',
                array(
                    'type' => 'theme_mod',
                    'default' => 'align-content-center',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_select'),
                )
            );
            $wp_customise->add_control(
                'productive_passmax_top_banner_alignment_v',
                array(
                    'type' => 'select',
                    'priority' => 60,
                    'section' => 'productive_passmax_top_banner',
                    'label' => esc_html__( 'Vertical Alignment', 'pass-max' ),
                    'description' => '',
                    'choices' => productive_global_get_vertical_align_content_options(),
                )
            );

            $wp_customise->add_setting(
                'productive_passmax_top_banner_alignment_h',
                array(
                    'type' => 'theme_mod',
                    'default' => 'justify-items-center',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_select'),
                )
            );
            $wp_customise->add_control(
                'productive_passmax_top_banner_alignment_h',
                array(
                    'type' => 'select',
                    'priority' => 70,
                    'section' => 'productive_passmax_top_banner',
                    'label' => esc_html__( 'Horizontal Alignment', 'pass-max' ),
                    'description' => '',
                    'choices' => productive_global_get_horizontal_justify_items_options(),
                )
            );
            
            $wp_customise->add_setting(
                'productive_passmax_top_banner_height',
                array(
                    'type' => 'theme_mod',
                    'default' => 250,
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_absint'),
                )
            );
            $wp_customise->add_control(
                'productive_passmax_top_banner_height',
                array(
                    'type' => 'number',
                    'priority' => 80,
                    'section' => 'productive_passmax_top_banner',
                    'label' => esc_html__( 'Banner Height (px)', 'pass-max' ),
                    'input_attrs' => array(
                        'min' => 50,
                        'max' => 1000,
                        'step' => 10,
                    ),
                )
            );
            
        }
        
    } // End of class.
    
    // add hook for the class.
    add_action( 'customize_register', array( 'Productive_Theme_Customiser_Top_Banner', 'register' ) );
    
}// End of if class exists




/**
 * Method productive_passmax_page_banner_image.
 *
 * @param string $class ''.
 */
function productive_passmax_page_banner_image() {
    return get_theme_mod( 'productive_passmax_page_banner_image', true );
}

/**
 * Method productive_passmax_show_top_banner.
 *
 * @param string $class ''.
 */
function productive_passmax_show_top_banner( $class = '' ) {
    return get_theme_mod( 'productive_passmax_show_top_banner', 'hide_top_banner' );
}

/**
 * Method productive_passmax_top_banner_title_css_style.
 *
 * @param string $class ''.
 */
function productive_passmax_top_banner_title_css_style( $class = '' ) {
    return get_theme_mod( 'productive_passmax_top_banner_title_css_style', 'h3' );
}

/**
 * Method productive_passmax_top_banner_overlay_color.
 *
 * @param string $class ''.
 */
function productive_passmax_top_banner_overlay_color( $class = '' ) {
    return get_theme_mod( 'productive_passmax_top_banner_overlay_color', '#000000' );
}

/**
 * Method productive_passmax_top_banner_overlay_opacity.
 *
 * @param string $class ''.
 */
function productive_passmax_top_banner_overlay_opacity( $class = '' ) {
    return get_theme_mod( 'productive_passmax_top_banner_overlay_opacity', 0.0 );
}

/**
 * Method productive_passmax_top_banner_alignment_v.
 *
 * @param string $class ''.
 */
function productive_passmax_top_banner_alignment_v( $class = '' ) {
    return get_theme_mod( 'productive_passmax_top_banner_alignment_v', 'align-content-center' );
}

/**
 * Method productive_passmax_top_banner_alignment_h.
 *
 * @param string $class ''.
 */
function productive_passmax_top_banner_alignment_h( $class = '' ) {
    return get_theme_mod( 'productive_passmax_top_banner_alignment_h', 'justify-items-center' );
}

/**
 * Method productive_passmax_top_banner_height.
 *
 * @param string $class ''.
 */
function productive_passmax_top_banner_height( $class = '' ) {
    return get_theme_mod( 'productive_passmax_top_banner_height', 250 );
}


