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


if ( ! class_exists( 'Productive_Theme_Customiser_Homepage_Banner_Text_Auxiliary' ) ) {
    
    /**
     * Productive_Theme_Customiser_Homepage_Banner_Text_Auxiliary
     * Theme Customiser Class
     */
    class Productive_Theme_Customiser_Homepage_Banner_Text_Auxiliary extends Productive_Theme_Customiser_Common {
        
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
            $title = esc_html__( 'Banner Auxiliary Options', 'pass-max' );
            if ( function_exists('pass_addons_is_active') ) {
                $panel = 'pass_addons_theme_options_homepage';
                $title = esc_html__( 'Banner Auxiliary Options', 'pass-max' );
            }
            $wp_customise->add_section(
                'productive_passmax_homepage_options_slide_auxiliary',
                array(
                    'title' => $title,
                    'description' => esc_html__( 'Customize the auxiliary copy on home banner and slides.', 'pass-max' ),
                    'panel' => $panel,
                    'priority' => 60,
                    'capability' => 'edit_theme_options',
                )
                );
            
            // add a setting for productive_passmax_homepage_slide_auxiliary_color control, below.
            $wp_customise->add_setting(
                'productive_passmax_homepage_slide_auxiliary_color',
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
                    'productive_passmax_homepage_slide_auxiliary_color',
                    array(
                        'priority' => 10,
                        'label' => esc_html__( 'Color', 'pass-max' ),
                        'section' => 'productive_passmax_homepage_options_slide_auxiliary',
                    )
                    )
                );
            
            $wp_customise->add_setting(
                'productive_passmax_homepage_banner_auxiliary_location',
                array(
                    'type' => 'theme_mod',
                    'default' => 'content_auxiliary_top',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_select'),
                )
            );
            $wp_customise->add_control(
                'productive_passmax_homepage_banner_auxiliary_location',
                array(
                    'type' => 'select',
                    'priority' => 12,
                    'section' => 'productive_passmax_homepage_options_slide_auxiliary',
                    'label' => esc_html__( 'Location of Auxiliary Copy', 'pass-max' ),
                    'description' => '',
                    'choices' => array(
                        'content_auxiliary_top' => esc_html__( 'Above main content', 'pass-max' ),
                        'content_auxiliary_bottom' => esc_html__( 'Below main content', 'pass-max' ),
                    ),
                )
            );
            
            
            if ( function_exists('pass_addons_is_active') ) {
                // add a setting for productive_passmax_slider_auxiliary_font_family control, below.
                $wp_customise->add_setting(
                    'productive_passmax_slider_auxiliary_font_family',
                    array(
                        'type' => 'theme_mod',
                        'default' => '',
                        'theme_supports' => '',
                        'transport' => 'refresh',
                        'capability' => 'edit_theme_options',
                        'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_select'),
                    )
                );

                // add control...
                $wp_customise->add_control(
                    'productive_passmax_slider_auxiliary_font_family',
                    array(
                        'type' => 'select',
                        'priority' => 20,
                        'section' => 'productive_passmax_homepage_options_slide_auxiliary',
                        'label' => esc_html__( 'Font Family', 'pass-max' ),
                        'description' => '',
                        'choices' => pass_addons_customiser_get_font_families(),
                    )
                );

                // add a setting for productive_passmax_slider_auxiliary_font_style control, below.
                $wp_customise->add_setting(
                    'productive_passmax_slider_auxiliary_font_style',
                    array(
                        'type' => 'theme_mod',
                        'default' => '',
                        'theme_supports' => '',
                        'transport' => 'refresh',
                        'capability' => 'edit_theme_options',
                        'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_select'),
                    )
                );

                // add control...
                $wp_customise->add_control(
                    'productive_passmax_slider_auxiliary_font_style',
                    array(
                        'type' => 'select',
                        'priority' => 30,
                        'section' => 'productive_passmax_homepage_options_slide_auxiliary',
                        'label' => esc_html__( 'Font Style', 'pass-max' ),
                        'description' => '',
                        'choices' => pass_addons_customiser_get_font_styles()
                    )
                );

                // add a setting for productive_passmax_slider_auxiliary_font_size control, below.
                $wp_customise->add_setting(
                    'productive_passmax_slider_auxiliary_font_size',
                    array(
                        'type' => 'theme_mod',
                        'default' => '',
                        'theme_supports' => '',
                        'transport' => 'refresh',
                        'capability' => 'edit_theme_options',
                        'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_float'),
                    )
                );
                $wp_customise->add_control(
                    'productive_passmax_slider_auxiliary_font_size', 
                    array(
                        'type' => 'number',
                        'priority' => 40,
                        'section' => 'productive_passmax_homepage_options_slide_auxiliary',
                        'label' => esc_html__( 'Font Size (rem)', 'pass-max' ),
                        'description' => esc_html__( 'This size is scaled relatively across the various elements of the website.', 'pass-max' ),
                        'input_attrs' => array(
                            'min' => 1.2,
                            'max' => PASS_ADDONS_FONT_SIZE_MAX,
                            'step' => PASS_ADDONS_FONT_SIZE_STEP,
                        ),
                    )
                );

                // add a setting for productive_passmax_slider_auxiliary_font_weight control, below.
                $wp_customise->add_setting(
                    'productive_passmax_slider_auxiliary_font_weight',
                    array(
                        'type' => 'theme_mod',
                        'default' => '',
                        'theme_supports' => '',
                        'transport' => 'refresh',
                        'capability' => 'edit_theme_options',
                        'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_select'),
                    )
                );

                // add control...
                $wp_customise->add_control(
                    'productive_passmax_slider_auxiliary_font_weight',
                    array(
                        'type' => 'select',
                        'priority' => 50,
                        'section' => 'productive_passmax_homepage_options_slide_auxiliary',
                        'label' => esc_html__( 'Font Weight', 'pass-max' ),
                        'description' => '',
                        'choices' => pass_addons_customiser_get_font_weights(),
                    )
                );

                // add a setting for productive_passmax_slider_auxiliary_line_height control, below.
                $wp_customise->add_setting(
                    'productive_passmax_slider_auxiliary_line_height',
                    array(
                        'type' => 'theme_mod',
                        'default' => '',
                        'theme_supports' => '',
                        'transport' => 'refresh',
                        'capability' => 'edit_theme_options',
                        'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_float'),
                    )
                );

                // add control...
                $wp_customise->add_control(
                    'productive_passmax_slider_auxiliary_line_height',
                    array(
                        'type' => 'number',
                        'priority' => 60,
                        'section' => 'productive_passmax_homepage_options_slide_auxiliary',
                        'label' => esc_html__( 'Line Height', 'pass-max' ),
                        'description' => '',
                        'input_attrs' => array(
                            'min' => PASS_ADDONS_LINE_HEIGHT_SIZE_MIN,
                            'max' => PASS_ADDONS_LINE_HEIGHT_SIZE_MAX,
                            'step' => PASS_ADDONS_LINE_HEIGHT_SIZE_STEP,
                        ),
                    )
                );

                // add a setting for productive_passmax_slider_auxiliary_text_transform control, below.
                $wp_customise->add_setting(
                    'productive_passmax_slider_auxiliary_text_transform',
                    array(
                        'type' => 'theme_mod',
                        'default' => '',
                        'theme_supports' => '',
                        'transport' => 'refresh',
                        'capability' => 'edit_theme_options',
                        'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_select'),
                    )
                );

                // add control...
                $wp_customise->add_control(
                    'productive_passmax_slider_auxiliary_text_transform',
                    array(
                        'type' => 'select',
                        'priority' => 70,
                        'section' => 'productive_passmax_homepage_options_slide_auxiliary',
                        'label' => esc_html__( 'Text Transformation', 'pass-max' ),
                        'description' => '',
                        'choices' => pass_addons_customiser_get_font_transforms()
                    )
                );

                // add a setting for productive_passmax_slider_auxiliary_text_decoration control, below.
                $wp_customise->add_setting(
                    'productive_passmax_slider_auxiliary_text_decoration',
                    array(
                        'type' => 'theme_mod',
                        'default' => '',
                        'theme_supports' => '',
                        'transport' => 'refresh',
                        'capability' => 'edit_theme_options',
                        'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_select'),
                    )
                );

                // add control...
                $wp_customise->add_control(
                    'productive_passmax_slider_auxiliary_text_decoration',
                    array(
                        'type' => 'select',
                        'priority' => 80,
                        'section' => 'productive_passmax_homepage_options_slide_auxiliary',
                        'label' => esc_html__( 'Text Decoration', 'pass-max' ),
                        'description' => '',
                        'choices' => pass_addons_customiser_get_font_decorations()
                    )
                );
            }
        }
        
    } // End of class.
    
    // add hook for the class.
    if( function_exists('pass_addons_is_active') ) {
        add_action( 'customize_register', array( 'Productive_Theme_Customiser_Homepage_Banner_Text_Auxiliary', 'register' ) );
    }
    
} // End of if class exists


// START ============== Productive_Theme_Customiser_Homepage_Banner CUSTOMISERS
/**
 * Method productive_passmax_homepage_slide_auxiliary_color.
 *
 * @param string $class ''.
 */
function productive_passmax_homepage_slide_auxiliary_color( $class = '' ) {
    return get_theme_mod( 'productive_passmax_homepage_slide_auxiliary_color', '#000000' );
}

/**
 * Method productive_passmax_homepage_banner_auxiliary_location.
 *
 * @param string $class ''.
 */
function productive_passmax_homepage_banner_auxiliary_location( $class = '' ) {
    return get_theme_mod( 'productive_passmax_homepage_banner_auxiliary_location', 'content_auxiliary_top' );
}

/**
 * Method productive_passmax_slider_auxiliary_font_family.
 *
 * @param string $class ''.
 */
function productive_passmax_slider_auxiliary_font_family( $class = '' ) {
    return get_theme_mod( 'productive_passmax_slider_auxiliary_font_family', '' );
}

/**
 * Method productive_passmax_slider_auxiliary_font_style.
 *
 * @param string $class ''.
 */
function productive_passmax_slider_auxiliary_font_style( $class = '' ) {
    return get_theme_mod( 'productive_passmax_slider_auxiliary_font_style', '' );
}

/**
 * Method productive_passmax_slider_auxiliary_font_size.
 *
 * @param string $class ''.
 */
function productive_passmax_slider_auxiliary_font_size( $class = '' ) {
    return get_theme_mod( 'productive_passmax_slider_auxiliary_font_size', '' );
}

/**
 * Method productive_passmax_slider_auxiliary_font_weight.
 *
 * @param string $class ''.
 */
function productive_passmax_slider_auxiliary_font_weight( $class = '' ) {
    return get_theme_mod( 'productive_passmax_slider_auxiliary_font_weight', '' );
}

/**
 * Method productive_passmax_slider_auxiliary_line_height.
 *
 * @param string $class ''.
 */
function productive_passmax_slider_auxiliary_line_height( $class = '' ) {
    return get_theme_mod( 'productive_passmax_slider_auxiliary_line_height', '' );
}

/**
 * Method productive_passmax_slider_auxiliary_text_transform.
 *
 * @param string $class ''.
 */
function productive_passmax_slider_auxiliary_text_transform( $class = '' ) {
    return get_theme_mod( 'productive_passmax_slider_auxiliary_text_transform', '' );
}

/**
 * Method productive_passmax_slider_auxiliary_text_decoration.
 *
 * @param string $class ''.
 */
function productive_passmax_slider_auxiliary_text_decoration( $class = '' ) {
    return get_theme_mod( 'productive_passmax_slider_auxiliary_text_decoration', '' );
}
