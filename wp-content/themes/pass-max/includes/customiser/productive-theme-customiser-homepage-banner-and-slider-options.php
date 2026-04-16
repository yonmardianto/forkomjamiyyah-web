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


if ( ! class_exists( 'Productive_Theme_Customiser_Homepage_Banner_And_Slider_Options' ) ) {
    
    /**
     * Productive_Theme_Customiser_Homepage_Banner_And_Slider_Options
     * Theme Customiser Class
     */
    class Productive_Theme_Customiser_Homepage_Banner_And_Slider_Options extends Productive_Theme_Customiser_Common {
        
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
            $title = esc_html__( 'Home Banner Options', 'pass-max' );
            if ( function_exists('pass_addons_is_active') ) {
                $panel = 'pass_addons_theme_options_homepage';
                $title = esc_html__( 'Banner & Slider Options', 'pass-max' );
            }
            $wp_customise->add_section(
                'productive_passmax_homepage_options_banner_background',
                array(
                    'title' => $title,
                    'description' => '',
                    'panel' => $panel,
                    'priority' => 10,
                    'capability' => 'edit_theme_options',
                )
                );
            
            $enable_title = esc_html__( 'Enable Home Banner', 'pass-max' );
            $enable_blog_posts_title = esc_html__( 'Enable Banner on Blog Posts Home', 'pass-max' );
            if ( function_exists('pass_addons_is_active') ) {
                $enable_title = esc_html__( 'Enable Home Banner & Slider', 'pass-max' );
                $enable_blog_posts_title = esc_html__( 'Enable Banner & Slider on Blog Posts Home', 'pass-max' );
            }
            $wp_customise->add_setting(
                'productive_passmax_is_homepage_banner_enable',
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
                'productive_passmax_is_homepage_banner_enable',
                array(
                    'type' => 'checkbox',
                    'priority' => 10,
                    'section' => 'productive_passmax_homepage_options_banner_background',
                    'label' => $enable_title,
                    'description' => esc_html__( 'Untick the box to hide the home banner and slider', 'pass-max' ),
                    // 'active_callback' => 'is_front_page',
                )
                );
            
            $wp_customise->add_setting(
                'productive_passmax_homepage_banner_width',
                array(
                    'type' => 'theme_mod',
                    'default' => 'full_width_page_banner',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_select'),
                )
            );
            $wp_customise->add_control(
                'productive_passmax_homepage_banner_width',
                array(
                    'type' => 'select',
                    'priority' => 100,
                    'section' => 'productive_passmax_homepage_options_banner_background',
                    'label' => esc_html__( 'Full Width Banner/Slider?', 'pass-max' ),
                    'description' => '',
                    'choices' => array(
                        'full_width_page_banner' => esc_html__( 'Yes, Full Width', 'pass-max' ),
                        'page_width_page_banner' => esc_html__( 'No, Fit Page Content', 'pass-max' ),
                    ),
                )
            );
            
            $default_banner_height = PRODUCTIVE_PASSMAX_DEFAULT_BANNER_HEIGHT_IMAGE;
            if ( function_exists('pass_addons_is_active') ) {
                $default_banner_height = PRODUCTIVE_PASSMAX_DEFAULT_BANNER_HEIGHT_SLIDER;
            }
            $wp_customise->add_setting(
                'productive_passmax_homepage_banner_height',
                array(
                    'type' => 'theme_mod',
                    'default' => $default_banner_height,
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_absint'),
                )
            );
            $wp_customise->add_control(
                'productive_passmax_homepage_banner_height',
                array(
                    'type' => 'number',
                    'priority' => 110,
                    'section' => 'productive_passmax_homepage_options_banner_background',
                    'label' => esc_html__( 'Main Banner/Slider Height (px)', 'pass-max' ),
                    'description' => '',
                    'input_attrs' => array(
                        'min' => PRODUCTIVE_PASSMAX_THE_BANNER_HEIGHT_MIN,
                        'max' => PRODUCTIVE_PASSMAX_THE_BANNER_HEIGHT_MAX,
                        'step' => 10,
                    ),
                )
            );
            
            $wp_customise->add_setting(
                'productive_passmax_homepage_banner_and_slides_content_width',
                array(
                    'type' => 'theme_mod',
                    'default' => 700,
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_absint'),
                )
            );
            $wp_customise->add_control(
                'productive_passmax_homepage_banner_and_slides_content_width',
                array(
                    'type' => 'number',
                    'priority' => 120,
                    'section' => 'productive_passmax_homepage_options_banner_background',
                    'label' => esc_html__( 'Main Banner/Slider Content Width (px)', 'pass-max' ),
                    'description' => esc_html__( 'The width of the area container copy and CTAs', 'pass-max' ),
                    'input_attrs' => array(
                        'min' => 300,
                        'max' => 1000,
                        'step' => 10,
                    ),
                )
            );
            
            $wp_customise->add_setting(
                'productive_passmax_homepage_banner_and_slides_overlay_color',
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
                    'productive_passmax_homepage_banner_and_slides_overlay_color',
                    array(
                        'priority' => 130,
                        'label' => esc_html__( 'Main Banner/Slider Overlay Color', 'pass-max' ),
                        'section' => 'productive_passmax_homepage_options_banner_background',
                    )
                    )
                );
            
            $wp_customise->add_setting(
                'productive_passmax_homepage_banner_and_slides_overlay_opacity',
                array(
                    'type' => 'theme_mod',
                    'default' => 0.001,
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_float'),
                )
            );
            $wp_customise->add_control(
                'productive_passmax_homepage_banner_and_slides_overlay_opacity',
                array(
                    'type' => 'number',
                    'priority' => 140,
                    'section' => 'productive_passmax_homepage_options_banner_background',
                    'label' => esc_html__( 'Banner Overlay Opacity', 'pass-max' ),
                    'description' => '',
                    'input_attrs' => array(
                        'min' => 0,
                        'max' => 1,
                        'step' => 0.01,
                    ),
                )
            );
            
            $wp_customise->add_setting(
                'productive_passmax_homepage_banner_border_color',
                array(
                    'type' => 'theme_mod',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'default'              => '#c9c9c9',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_color'),
                )
                );
            
            $wp_customise->add_control(
                new WP_Customize_Color_Control(
                    $wp_customise,
                    'productive_passmax_homepage_banner_border_color',
                    array(
                        'priority' => 150,
                        'label' => esc_html__( 'Banner Border Color', 'pass-max' ),
                        'section' => 'productive_passmax_homepage_options_banner_background',
                    )
                    )
                );
            
            $wp_customise->add_setting(
                'productive_passmax_homepage_banner_alignment_v',
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
                'productive_passmax_homepage_banner_alignment_v',
                array(
                    'type' => 'select',
                    'priority' => 160,
                    'section' => 'productive_passmax_homepage_options_banner_background',
                    'label' => esc_html__( 'Banner Content Vertical Alignment', 'pass-max' ),
                    'description' => '',
                    'choices' => productive_global_get_vertical_align_content_options(),
                )
            );

            $wp_customise->add_setting(
                'productive_passmax_homepage_banner_alignment_h',
                array(
                    'type' => 'theme_mod',
                    'default' => productive_passmax_get_deafult_homepage_banner_alignment_h(),
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_select'),
                )
            );
            $wp_customise->add_control(
                'productive_passmax_homepage_banner_alignment_h',
                array(
                    'type' => 'select',
                    'priority' => 170,
                    'section' => 'productive_passmax_homepage_options_banner_background',
                    'label' => esc_html__( 'Banner Content Horizontal Alignment', 'pass-max' ),
                    'description' => '',
                    'choices' => productive_global_get_horizontal_justify_items_options(),
                )
            );
            
        }
    } // End of class.
    
    // add hook for the class.
    add_action( 'customize_register', array( 'Productive_Theme_Customiser_Homepage_Banner_And_Slider_Options', 'register' ) );
    
} // End of if class exists


/**
 * Method productive_passmax_is_homepage_banner_enable.
 *
 * @param string $class ''.
 */
function productive_passmax_is_homepage_banner_enable( $class = '' ) {
    return get_theme_mod( 'productive_passmax_is_homepage_banner_enable', true );
}

/**
 * Method productive_passmax_homepage_banner_width.
 *
 * @param string $class ''.
 */
function productive_passmax_homepage_banner_width( $class = '' ) {
    return get_theme_mod( 'productive_passmax_homepage_banner_width', 'full_width_page_banner' );
}

/**
 * Method productive_passmax_homepage_banner_height.
 *
 * @param string $class ''.
 */
function productive_passmax_homepage_banner_height( $class = '' ) {
    $default_banner_height = PRODUCTIVE_PASSMAX_DEFAULT_BANNER_HEIGHT_IMAGE;
    if ( function_exists('pass_addons_is_active') ) {
        $default_banner_height = PRODUCTIVE_PASSMAX_DEFAULT_BANNER_HEIGHT_SLIDER;
    }
    return get_theme_mod( 'productive_passmax_homepage_banner_height', $default_banner_height );
}

/**
 * Method productive_passmax_homepage_banner_and_slides_content_width.
 *
 * @param string $class ''.
 */
function productive_passmax_homepage_banner_and_slides_content_width( $class = '' ) {
    return get_theme_mod( 'productive_passmax_homepage_banner_and_slides_content_width', 700 );
}

/**
 * Method productive_passmax_homepage_banner_and_slides_overlay_color.
 *
 * @param string $class ''.
 */
function productive_passmax_homepage_banner_and_slides_overlay_color( $class = '' ) {
    return get_theme_mod( 'productive_passmax_homepage_banner_and_slides_overlay_color', '#000000' );
}

/**
 * Method productive_passmax_homepage_banner_and_slides_overlay_opacity.
 *
 * @param string $class ''.
 */
function productive_passmax_homepage_banner_and_slides_overlay_opacity( $class = '' ) {
    return get_theme_mod( 'productive_passmax_homepage_banner_and_slides_overlay_opacity', 0.001 );
}

/**
 * Method productive_passmax_homepage_banner_border_color.
 *
 * @param string $class ''.
 */
function productive_passmax_homepage_banner_border_color( $class = '' ) {
    return get_theme_mod( 'productive_passmax_homepage_banner_border_color', '#c9c9c9' );
}

/**
 * Method productive_passmax_homepage_banner_alignment_v.
 *
 * @param string $class ''.
 */
function productive_passmax_homepage_banner_alignment_v( $class = '' ) {
    return get_theme_mod( 'productive_passmax_homepage_banner_alignment_v', 'align-content-center' );
}

/**
 * Method productive_passmax_homepage_banner_alignment_h.
 *
 * @param string $class ''.
 */
function productive_passmax_homepage_banner_alignment_h( $class = '' ) {
    return get_theme_mod( 'productive_passmax_homepage_banner_alignment_h', productive_passmax_get_deafult_homepage_banner_alignment_h() );
}

function productive_passmax_get_deafult_homepage_banner_alignment_h() {
    if( is_child_theme() ) {
        return 'justify-items-start';
    } else {
        return 'justify-items-end';
    }
}

