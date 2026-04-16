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


if ( ! class_exists( 'Productive_Theme_Customiser_Homepage_Banner_Cta' ) ) {
    
    /**
     * Productive_Theme_Customiser_Homepage_Banner_Cta
     * Theme Customiser Class
     */
    class Productive_Theme_Customiser_Homepage_Banner_Cta extends Productive_Theme_Customiser_Common {
        
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
            $title = esc_html__( 'Banner CTAs Options', 'pass-max' );
            if ( function_exists('pass_addons_is_active') ) {
                $panel = 'pass_addons_theme_options_homepage';
                $title = esc_html__( 'Banner CTAs Options', 'pass-max' );
            }
            $wp_customise->add_section(
                'productive_passmax_homepage_cta_options',
                array(
                    'title' => $title,
                    'description' => esc_html__( 'Customize the Call To Actions on home banner and slides', 'pass-max' ),
                    'panel' => $panel,
                    'priority' => 70,
                    'capability' => 'edit_theme_options',
                )
                );
            
            
            // add a setting for productive_passmax_homepage_cta_1_title, below.
            $wp_customise->add_setting(
                'productive_passmax_homepage_cta_1_title',
                array(
                    'type' => 'theme_mod',
                    'default' => esc_html__( 'Learn More', 'pass-max' ),
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_no_html'),
                )
                );
            // add control..
            $wp_customise->add_control(
                'productive_passmax_homepage_cta_1_title',
                array(
                    'type' => 'text',
                    'priority' => 10,
                    'section' => 'productive_passmax_homepage_cta_options',
                    'label' => esc_html__( 'CTA 1 Copy', 'pass-max' ),
                    'description' => '',
                )
                );
            
            // add a setting for productive_passmax_homepage_cta_1_url, below.
            $wp_customise->add_setting(
                'productive_passmax_homepage_cta_1_url',
                array(
                    'type' => 'theme_mod',
                    'default' => '#',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_url'),
                )
                );
            // add control..
            $wp_customise->add_control(
                'productive_passmax_homepage_cta_1_url',
                array(
                    'type' => 'text',
                    'priority' => 20,
                    'section' => 'productive_passmax_homepage_cta_options',
                    'label' => esc_html__( 'CTA 1 Url', 'pass-max' ),
                    'description' => esc_html__( 'Full Url starting with &#39;http&#39; (leave empty to disable)', 'pass-max' ),
                )
                );
            
            // add a setting for productive_passmax_homepage_cta_1_shape control, below.
            $wp_customise->add_setting(
                'productive_passmax_homepage_cta_1_shape',
                array(
                    'type' => 'theme_mod',
                    'default' => 'round_corners',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_select'),
                )
            );
            $wp_customise->add_control(
                'productive_passmax_homepage_cta_1_shape',
                array(
                    'type' => 'select',
                    'priority' => 22,
                    'section' => 'productive_passmax_homepage_cta_options',
                    'label' => esc_html__( 'CTA 1 Shape', 'pass-max' ),
                    'description' => '',
                    'choices' => productive_global_get_button_radius_shapes(),
                )
            );
            
            // add a setting for productive_passmax_homepage_cta_1_text_color control, below.
            $wp_customise->add_setting(
                'productive_passmax_homepage_cta_1_text_color',
                array(
                    'type' => 'theme_mod',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'default'              => '#ffffff',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_color'),
                )
                );
            
            $wp_customise->add_control(
                new WP_Customize_Color_Control(
                    $wp_customise,
                    'productive_passmax_homepage_cta_1_text_color',
                    array(
                        'priority' => 30,
                        'label' => esc_html__( 'CTA 1 Text Color', 'pass-max' ),
                        'section' => 'productive_passmax_homepage_cta_options',
                    )
                    )
                );
            
            // add a setting for productive_passmax_homepage_cta_1_bg_color control, below.
            $wp_customise->add_setting(
                'productive_passmax_homepage_cta_1_bg_color',
                array(
                    'type' => 'theme_mod',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'default'              => '#A82800',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_color'),
                )
                );
            
            $wp_customise->add_control(
                new WP_Customize_Color_Control(
                    $wp_customise,
                    'productive_passmax_homepage_cta_1_bg_color',
                    array(
                        'priority' => 40,
                        'label' => esc_html__( 'CTA 1 Background Color', 'pass-max' ),
                        'section' => 'productive_passmax_homepage_cta_options',
                    )
                    )
                );
            
            
            // add a setting for productive_passmax_homepage_cta_1_title, below.
            $wp_customise->add_setting(
                'productive_passmax_homepage_cta_2_title',
                array(
                    'type' => 'theme_mod',
                    'default' => esc_html__( 'Get Started', 'pass-max' ),
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_no_html'),
                )
                );
            // add control..
            $wp_customise->add_control(
                'productive_passmax_homepage_cta_2_title',
                array(
                    'type' => 'text',
                    'priority' => 50,
                    'section' => 'productive_passmax_homepage_cta_options',
                    'label' => esc_html__( 'CTA 2 Copy', 'pass-max' ),
                    'description' => '',
                )
                );
            
            // add a setting for productive_passmax_homepage_cta_2_url, below.
            $wp_customise->add_setting(
                'productive_passmax_homepage_cta_2_url',
                array(
                    'type' => 'theme_mod',
                    'default' => '#',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_url'),
                )
                );
            // add control..
            $wp_customise->add_control(
                'productive_passmax_homepage_cta_2_url',
                array(
                    'type' => 'text',
                    'priority' => 60,
                    'section' => 'productive_passmax_homepage_cta_options',
                    'label' => esc_html__( 'CTA 2 Url', 'pass-max' ),
                    'description' => '',
                )
                );
            
            // add a setting for productive_passmax_homepage_cta_2_shape control, below.
            $wp_customise->add_setting(
                'productive_passmax_homepage_cta_2_shape',
                array(
                    'type' => 'theme_mod',
                    'default' => 'round_corners',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_select'),
                )
            );
            $wp_customise->add_control(
                'productive_passmax_homepage_cta_2_shape',
                array(
                    'type' => 'select',
                    'priority' => 62,
                    'section' => 'productive_passmax_homepage_cta_options',
                    'label' => esc_html__( 'CTA 2 Shape', 'pass-max' ),
                    'description' => '',
                    'choices' => productive_global_get_button_radius_shapes(),
                )
            );
            
            // add a setting for productive_passmax_homepage_cta_2_text_color control, below.
            $wp_customise->add_setting(
                'productive_passmax_homepage_cta_2_text_color',
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
                    'productive_passmax_homepage_cta_2_text_color',
                    array(
                        'priority' => 70,
                        'label' => esc_html__( 'CTA 2 Text & Border Color', 'pass-max' ),
                        'section' => 'productive_passmax_homepage_cta_options',
                    )
                    )
                );
            
            // add a setting for productive_passmax_homepage_cta_2_bg_color control, below.
            $wp_customise->add_setting(
                'productive_passmax_homepage_cta_2_bg_color',
                array(
                    'type' => 'theme_mod',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'default'              => '#ffffff',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_color'),
                )
                );
            
            $wp_customise->add_control(
                new WP_Customize_Color_Control(
                    $wp_customise,
                    'productive_passmax_homepage_cta_2_bg_color',
                    array(
                        'priority' => 80,
                        'label' => esc_html__( 'CTA 2 Background Color', 'pass-max' ),
                        'section' => 'productive_passmax_homepage_cta_options',
                    )
                    )
                );
            
            
            
            
            if ( function_exists('pass_addons_is_active') ) {
                // add a setting for productive_passmax_banner_ctas_font_family control, below.
                $wp_customise->add_setting(
                    'productive_passmax_banner_ctas_font_family',
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
                    'productive_passmax_banner_ctas_font_family',
                    array(
                        'type' => 'select',
                        'priority' => 90,
                        'section' => 'productive_passmax_homepage_cta_options',
                        'label' => esc_html__( 'Font Family', 'pass-max' ),
                        'description' => '',
                        'choices' => pass_addons_customiser_get_font_families(),
                    )
                );

                // add a setting for productive_passmax_banner_ctas_font_style control, below.
                $wp_customise->add_setting(
                    'productive_passmax_banner_ctas_font_style',
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
                    'productive_passmax_banner_ctas_font_style',
                    array(
                        'type' => 'select',
                        'priority' => 100,
                        'section' => 'productive_passmax_homepage_cta_options',
                        'label' => esc_html__( 'Font Style', 'pass-max' ),
                        'description' => '',
                        'choices' => pass_addons_customiser_get_font_styles()
                    )
                );

                // add a setting for productive_passmax_banner_ctas_font_size control, below.
                $wp_customise->add_setting(
                    'productive_passmax_banner_ctas_font_size',
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
                    'productive_passmax_banner_ctas_font_size', 
                    array(
                        'type' => 'number',
                        'priority' => 110,
                        'section' => 'productive_passmax_homepage_cta_options',
                        'label' => esc_html__( 'Font Size (rem)', 'pass-max' ),
                        'description' => esc_html__( 'This size is scaled relatively across the various elements of the website.', 'pass-max' ),
                        'input_attrs' => array(
                            'min' => PASS_ADDONS_FONT_SIZE_MIN,
                            'max' => PASS_ADDONS_FONT_SIZE_MAX,
                            'step' => PASS_ADDONS_FONT_SIZE_STEP,
                        ),
                    )
                );

                // add a setting for productive_passmax_banner_ctas_font_weight control, below.
                $wp_customise->add_setting(
                    'productive_passmax_banner_ctas_font_weight',
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
                    'productive_passmax_banner_ctas_font_weight',
                    array(
                        'type' => 'select',
                        'priority' => 120,
                        'section' => 'productive_passmax_homepage_cta_options',
                        'label' => esc_html__( 'Font Weight', 'pass-max' ),
                        'description' => '',
                        'choices' => pass_addons_customiser_get_font_weights(),
                    )
                );

                // add a setting for productive_passmax_banner_ctas_line_height control, below.
                $wp_customise->add_setting(
                    'productive_passmax_banner_ctas_line_height',
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
                    'productive_passmax_banner_ctas_line_height',
                    array(
                        'type' => 'number',
                        'priority' => 130,
                        'section' => 'productive_passmax_homepage_cta_options',
                        'label' => esc_html__( 'Line Height', 'pass-max' ),
                        'description' => '',
                        'input_attrs' => array(
                            'min' => PASS_ADDONS_LINE_HEIGHT_SIZE_MIN,
                            'max' => PASS_ADDONS_LINE_HEIGHT_SIZE_MAX,
                            'step' => PASS_ADDONS_LINE_HEIGHT_SIZE_STEP,
                        ),
                    )
                );

                // add a setting for productive_passmax_banner_ctas_text_transform control, below.
                $wp_customise->add_setting(
                    'productive_passmax_banner_ctas_text_transform',
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
                    'productive_passmax_banner_ctas_text_transform',
                    array(
                        'type' => 'select',
                        'priority' => 140,
                        'section' => 'productive_passmax_homepage_cta_options',
                        'label' => esc_html__( 'Text Transformation', 'pass-max' ),
                        'description' => '',
                        'choices' => pass_addons_customiser_get_font_transforms()
                    )
                );

                // add a setting for productive_passmax_banner_ctas_text_decoration control, below.
                $wp_customise->add_setting(
                    'productive_passmax_banner_ctas_text_decoration',
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
                    'productive_passmax_banner_ctas_text_decoration',
                    array(
                        'type' => 'select',
                        'priority' => 150,
                        'section' => 'productive_passmax_homepage_cta_options',
                        'label' => esc_html__( 'Text Decoration', 'pass-max' ),
                        'description' => '',
                        'choices' => pass_addons_customiser_get_font_decorations()
                    )
                );
            }
        }
    } // End of class.
    
    // add hook for the class.
    add_action( 'customize_register', array( 'Productive_Theme_Customiser_Homepage_Banner_Cta', 'register' ) );
    
} // End of if class exists


/**
 * Method productive_passmax_homepage_cta_1_title.
 *
 * @param string $class ''.
 */
function productive_passmax_homepage_cta_1_title( $class = '' ) {
    $theme_mod_value = get_theme_mod( 'productive_passmax_homepage_cta_1_title', esc_html__( 'Learn More', 'pass-max' ) );
    $cta_url = productive_passmax_homepage_cta_1_url();
    if ( !empty($theme_mod_value) && !empty($cta_url) ) {
        productive_global_hero_content_cta( $cta_url, $theme_mod_value, $class );
    }
} 
add_action( 'productive_passmax_display_homepage_cta_1_title', 'productive_passmax_homepage_cta_1_title' );

/**
 * Method productive_passmax_homepage_cta_1_url.
 *
 * @param string $class ''.
 */
function productive_passmax_homepage_cta_1_url( $class = '' ) {
    // text html
    $theme_mod_value = get_theme_mod( 'productive_passmax_homepage_cta_1_url', '#' );
    return wp_specialchars_decode( esc_url( $theme_mod_value ) );
}
add_action( 'productive_passmax_display_homepage_cta_1_url', 'productive_passmax_homepage_cta_1_url' );

/**
 * Method productive_passmax_homepage_cta_1_shape.
 *
 * @param string $class ''.
 */
function productive_passmax_homepage_cta_1_shape( $class = '' ) {
    return get_theme_mod( 'productive_passmax_homepage_cta_1_shape', 'round_corners' );
}

/**
 * Method productive_passmax_homepage_cta_1_text_color.
 *
 * @param string $class ''.
 */
function productive_passmax_homepage_cta_1_text_color( $class = '' ) {
    return get_theme_mod( 'productive_passmax_homepage_cta_1_text_color', '#ffffff' );
}

/**
 * Method productive_passmax_homepage_cta_1_bg_color.
 *
 * @param string $class ''.
 */
function productive_passmax_homepage_cta_1_bg_color( $class = '' ) {
    return get_theme_mod( 'productive_passmax_homepage_cta_1_bg_color', '#A82800' );
}


/**
 * Method productive_passmax_homepage_cta_2_title.
 *
 * @param string $class ''.
 */
function productive_passmax_homepage_cta_2_title( $class = '' ) {
    $theme_mod_value = get_theme_mod( 'productive_passmax_homepage_cta_2_title', esc_html__( 'Get Started', 'pass-max' ) );
    $cta_url = productive_passmax_homepage_cta_2_url();
    if ( !empty($theme_mod_value) && !empty($cta_url) ) {
        productive_global_hero_content_cta( $cta_url, $theme_mod_value, $class );
    }
} 
add_action( 'productive_passmax_display_homepage_cta_2_title', 'productive_passmax_homepage_cta_2_title' );

/**
 * Method productive_passmax_homepage_cta_2_url.
 *
 * @param string $class ''.
 */
function productive_passmax_homepage_cta_2_url( $class = '' ) {
    $theme_mod_value = get_theme_mod( 'productive_passmax_homepage_cta_2_url', '#' );
    return wp_specialchars_decode( esc_url( $theme_mod_value ) );
}
add_action( 'productive_passmax_display_homepage_cta_2_url', 'productive_passmax_homepage_cta_2_url' );

/**
 * Method productive_passmax_homepage_cta_2_shape.
 *
 * @param string $class ''.
 */
function productive_passmax_homepage_cta_2_shape( $class = '' ) {
    return get_theme_mod( 'productive_passmax_homepage_cta_2_shape', 'round_corners' );
}


/**
 * Method productive_passmax_homepage_cta_2_text_color.
 *
 * @param string $class ''.
 */
function productive_passmax_homepage_cta_2_text_color( $class = '' ) {
    return get_theme_mod( 'productive_passmax_homepage_cta_2_text_color', '#000000' );
}

/**
 * Method productive_passmax_homepage_cta_2_bg_color.
 *
 * @param string $class ''.
 */
function productive_passmax_homepage_cta_2_bg_color( $class = '' ) {
    return get_theme_mod( 'productive_passmax_homepage_cta_2_bg_color', '#ffffff' );
}


/**
 * Method productive_passmax_banner_ctas_font_family.
 *
 * @param string $class ''.
 */
function productive_passmax_banner_ctas_font_family( $class = '' ) {
    return get_theme_mod( 'productive_passmax_banner_ctas_font_family', '' );
}

/**
 * Method productive_passmax_banner_ctas_font_style.
 *
 * @param string $class ''.
 */
function productive_passmax_banner_ctas_font_style( $class = '' ) {
    return get_theme_mod( 'productive_passmax_banner_ctas_font_style', '' );
}

/**
 * Method productive_passmax_banner_ctas_font_size.
 *
 * @param string $class ''.
 */
function productive_passmax_banner_ctas_font_size( $class = '' ) {
    return get_theme_mod( 'productive_passmax_banner_ctas_font_size', '' );
}

/**
 * Method productive_passmax_banner_ctas_font_weight.
 *
 * @param string $class ''.
 */
function productive_passmax_banner_ctas_font_weight( $class = '' ) {
    return get_theme_mod( 'productive_passmax_banner_ctas_font_weight', '' );
}

/**
 * Method productive_passmax_banner_ctas_line_height.
 *
 * @param string $class ''.
 */
function productive_passmax_banner_ctas_line_height( $class = '' ) {
    return get_theme_mod( 'productive_passmax_banner_ctas_line_height', '' );
}

/**
 * Method productive_passmax_banner_ctas_text_transform.
 *
 * @param string $class ''.
 */
function productive_passmax_banner_ctas_text_transform( $class = '' ) {
    return get_theme_mod( 'productive_passmax_banner_ctas_text_transform', '' );
}

/**
 * Method productive_passmax_banner_ctas_text_decoration.
 *
 * @param string $class ''.
 */
function productive_passmax_banner_ctas_text_decoration( $class = '' ) {
    return get_theme_mod( 'productive_passmax_banner_ctas_text_decoration', '' );
}
