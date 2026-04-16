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


if ( ! class_exists( 'Productive_Theme_Customiser_Announcement' ) ) { 
    
    /**
     * Productive_Theme_Customiser_Announcement
     * Theme Customiser Class
     */
    class Productive_Theme_Customiser_Announcement extends Productive_Theme_Customiser_Common {
        
        /**
         * Register the customizer
         *
         * @param WP_Customize_Manager $wp_customise param.
         */
        public static function register( $wp_customise ) {
            
            
            // START: ANNOUNCEMENT
            
            // See common for Panels
            // 
            // Section
            $wp_customise->add_section(
                'productive_passmax_announcement_options',
                array(
                    'title' => esc_html__( 'Header Announcement', 'pass-max' ),
                    'description' => '',
                    'panel' => 'productive_passmax_theme_options',
                    'priority' => 50,
                    'capability' => 'edit_theme_options',
                )
                );
            
            // add a setting for productive_passmax_announcement_switch_on control, below.
            $wp_customise->add_setting(
                'productive_passmax_announcement_switch_on',
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
                'productive_passmax_announcement_switch_on',
                array(
                    'type' => 'checkbox',
                    'priority' => 1,
                    'section' => 'productive_passmax_announcement_options',
                    'label' => esc_html__( 'Enable Header Announcement', 'pass-max' ),
                    'description' => '',
                    // 'active_callback' => 'is_front_page',
                )
                );
            
            // add a setting for productive_passmax_announcement_intro_1, below.
            $wp_customise->add_setting(
                'productive_passmax_announcement_copy',
                array(
                    'type' => 'theme_mod',
                    'default' => esc_html__( 'Announcement to site visitors (prebuilt, fully customizable) ', 'pass-max' ),
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_html'),
                )
                );
            // add control..
            $wp_customise->add_control(
                'productive_passmax_announcement_copy',
                array(
                    'type' => 'textarea',
                    'priority' => 20,
                    'section' => 'productive_passmax_announcement_options',
                    'label' => esc_html__( 'Announcement copy', 'pass-max' ),
                    'description' => '',
                )
                );
            
            // add a setting for productive_passmax_announcement_copy_text_color control, below.
            $wp_customise->add_setting(
                'productive_passmax_announcement_copy_text_color',
                array(
                    'type' => 'theme_mod',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'default'   => '#eeeeee',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_color'),
                )
                );
            
            $wp_customise->add_control(
                new WP_Customize_Color_Control(
                    $wp_customise,
                    'productive_passmax_announcement_copy_text_color',
                    array(
                        'priority' => 30,
                        'label' => esc_html__( 'Announcement copy colour', 'pass-max' ),
                        'section' => 'productive_passmax_announcement_options',
                    )
                    )
                );
            
            // add a setting for productive_passmax_announcement_cta_text, below.
            $wp_customise->add_setting(
                'productive_passmax_announcement_cta_text',
                array(
                    'type' => 'theme_mod',
                    'default' => esc_html__('Read now!', 'pass-max'),
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_no_html'),
                )
                );
            // add control..
            $wp_customise->add_control(
                'productive_passmax_announcement_cta_text',
                array(
                    'type' => 'text',
                    'priority' => 50,
                    'section' => 'productive_passmax_announcement_options',
                    'label' => esc_html__( 'CTA text', 'pass-max' ),
                    'description' => '',
                )
                );
            
            // add a setting for productive_passmax_announcement_cta_url, below.
            $wp_customise->add_setting(
                'productive_passmax_announcement_cta_url',
                array(
                    'type' => 'theme_mod',
                    'default' => esc_url(home_url()),
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_no_html'),
                )
                );
            // add control..
            $wp_customise->add_control(
                'productive_passmax_announcement_cta_url',
                array(
                    'type' => 'text',
                    'priority' => 60,
                    'section' => 'productive_passmax_announcement_options',
                    'label' => esc_html__( 'CTA Url', 'pass-max' ),
                    'description' => '',
                )
                );
            
            // add a setting for productive_passmax_announcement_cta_position control, below.
            $wp_customise->add_setting(
                'productive_passmax_announcement_cta_position',
                array(
                    'type' => 'theme_mod',
                    'default' => 'right',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_select'),
                )
            );
            $wp_customise->add_control(
                'productive_passmax_announcement_cta_position',
                array(
                    'type' => 'select',
                    'priority' => 62,
                    'section' => 'productive_passmax_announcement_options',
                    'label' => esc_html__( 'Location of the CTA', 'pass-max' ),
                    'description' => '',
                    'choices' => array(
                        'left' => esc_html__( 'Left', 'pass-max' ),
                        'right' => esc_html__( 'Right', 'pass-max' ),
                    ),
                )
            );
            
            // add a setting for productive_passmax_announcement_cta_text_color control, below.
            $wp_customise->add_setting(
                'productive_passmax_announcement_cta_text_color',
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
                    'productive_passmax_announcement_cta_text_color',
                    array(
                        'priority' => 70,
                        'label' => esc_html__( 'CTA Text Colour', 'pass-max' ),
                        'section' => 'productive_passmax_announcement_options',
                    )
                    )
                );
            
            // add a setting for productive_passmax_announcement_cta_bg_color control, below.
            $wp_customise->add_setting(
                'productive_passmax_announcement_cta_bg_color',
                array(
                    'type' => 'theme_mod',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'default'              => '#7906c8', // dark red
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_color'),
                )
                );
            
            $wp_customise->add_control(
                new WP_Customize_Color_Control(
                    $wp_customise,
                    'productive_passmax_announcement_cta_bg_color',
                    array(
                        'priority' => 80,
                        'label' => esc_html__( 'CTA background', 'pass-max' ),
                        'section' => 'productive_passmax_announcement_options',
                    )
                    )
                );
            
            // add a setting for productive_passmax_announcement_cta_bg_color_hover control, below.
            $wp_customise->add_setting(
                'productive_passmax_announcement_cta_bg_color_hover',
                array(
                    'type' => 'theme_mod',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'default'              => '#30b309', // dark red
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_color'),
                )
                );
            
            $wp_customise->add_control(
                new WP_Customize_Color_Control(
                    $wp_customise,
                    'productive_passmax_announcement_cta_bg_color_hover',
                    array(
                        'priority' => 90,
                        'label' => esc_html__( 'CTA background (on hover)', 'pass-max' ),
                        'section' => 'productive_passmax_announcement_options',
                    )
                    )
                );
            
            // add a setting for productive_passmax_announcement_cta_shape control, below.
            $wp_customise->add_setting(
                'productive_passmax_announcement_cta_shape',
                array(
                    'type' => 'theme_mod',
                    'default' => 'ellipse',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_select'),
                )
            );
            $wp_customise->add_control(
                'productive_passmax_announcement_cta_shape',
                array(
                    'type' => 'select',
                    'priority' => 100,
                    'section' => 'productive_passmax_announcement_options',
                    'label' => esc_html__( 'CTA Shape', 'pass-max' ),
                    'description' => '',
                    'choices' => productive_global_get_button_radius_shapes(),
                )
            );
            
            // add a setting for productive_passmax_announcement_close_btn_color control, below.
            $wp_customise->add_setting(
                'productive_passmax_announcement_close_btn_color',
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
                    'productive_passmax_announcement_close_btn_color',
                    array(
                        'priority' => 110,
                        'label' => esc_html__( 'Close Button color', 'pass-max' ),
                        'section' => 'productive_passmax_announcement_options',
                    )
                    )
                );
            
            // add a setting for productive_passmax_announcement_banner_alignment control, below.
            $wp_customise->add_setting(
                'productive_passmax_announcement_banner_alignment',
                array(
                    'type' => 'theme_mod',
                    'default' => 'justify-content-center',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_select'),
                )
            );
            $wp_customise->add_control(
                'productive_passmax_announcement_banner_alignment',
                array(
                    'type' => 'select',
                    'priority' => 120,
                    'section' => 'productive_passmax_announcement_options',
                    'label' => esc_html__( 'Banner Alignment', 'pass-max' ),
                    'description' => '',
                    'choices' => productive_global_get_horizontal_justify_content_options(),
                )
            );

            // add a setting for productive_passmax_announcement_banner_border_color control, below.
            $wp_customise->add_setting(
                'productive_passmax_announcement_banner_border_color',
                array(
                    'type' => 'theme_mod',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'default'   => '#bfdaef',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_color'),
                )
                );

            $wp_customise->add_control(
                new WP_Customize_Color_Control(
                    $wp_customise,
                    'productive_passmax_announcement_banner_border_color',
                    array(
                        'priority' => 130,
                        'label' => esc_html__( 'Bottom Border color', 'pass-max' ),
                        'section' => 'productive_passmax_announcement_options',
                    )
                    )
                );
            
            // add a setting for productive_passmax_announcement_banner_bg_color control, below.
            $wp_customise->add_setting(
                'productive_passmax_announcement_banner_bg_color',
                array(
                    'type' => 'theme_mod',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'default'              => '#4f0582',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_color'),
                )
                );
            $wp_customise->add_control(
                new WP_Customize_Color_Control(
                    $wp_customise,
                    'productive_passmax_announcement_banner_bg_color',
                    array(
                        'priority' => 140,
                        'label' => esc_html__( 'Banner background color', 'pass-max' ),
                        'section' => 'productive_passmax_announcement_options',
                    )
                    )
                );
            
            // add a setting for productive_passmax_announcement_banner_bg_image control, below.
            $wp_customise->add_setting(
                'productive_passmax_announcement_banner_bg_image',
                array(
                    'type' => 'theme_mod',
                    'default' => false,
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_image'),
                )
                );
            // add control..
            $wp_customise->add_control(
                new WP_Customize_Media_Control(
                    $wp_customise,
                    'productive_passmax_announcement_banner_bg_image',
                        array(
                            'priority' => 150,
                            'section' => 'productive_passmax_announcement_options',
                            'label' => esc_html__( 'Banner background Image', 'pass-max' ),
                            'description' => esc_html__( 'If set, the image overrides the background color.', 'pass-max' ),
                        )
                    )
                );
            
            // END: ANNOUNCEMENT
            
        }
        
    } // End of class.
    
    // add hook for the class.
    add_action( 'customize_register', array( 'Productive_Theme_Customiser_Announcement', 'register' ) );
    
} // End of if class exists




// START ============== Productive_Theme_Customiser_Announcement CUSTOMISERS
/**
 * Method productive_passmax_announcement_switch_on.
 *
 * @param string $class ''.
 */
function productive_passmax_announcement_switch_on( $class = '' ) {
    return get_theme_mod( 'productive_passmax_announcement_switch_on', false );
}

/**
 * Method productive_passmax_announcement_copy.
 *
 * @param string $class ''.
 */
function productive_passmax_announcement_copy( $class = '' ) {
    return get_theme_mod( 'productive_passmax_announcement_copy', esc_html__('Announcement to site visitors (prebuilt, fully customizable) ', 'pass-max') );
}

/**
 * Method productive_passmax_announcement_copy_text_color.
 *
 * @param string $class ''.
 */
function productive_passmax_announcement_copy_text_color( $class = '' ) {
    return get_theme_mod( 'productive_passmax_announcement_copy_text_color', '#eeeeee' );
}

/**
 * Method productive_passmax_announcement_cta_text.
 *
 * @param string $class ''.
 */
function productive_passmax_announcement_cta_text( $class = '' ) {
    $theme_mod_value = get_theme_mod( 'productive_passmax_announcement_cta_text', esc_html__('Read now!', 'pass-max') );
    $cta_url = productive_passmax_announcement_cta_url();
    if ( !empty( $theme_mod_value ) && !empty( $cta_url ) ) {
        echo '<a class="' . esc_attr($class) . '" href="'. esc_url($cta_url) .'">' .
            wp_specialchars_decode(stripslashes($theme_mod_value) ) .
            '</a>';
    }
}
add_action( 'productive_passmax_display_announcement_cta_text', 'productive_passmax_announcement_cta_text' );

/**
 * Method productive_passmax_announcement_cta_position.
 *
 * @param string $class ''.
 */
function productive_passmax_announcement_cta_position( $class = '' ) {
    return get_theme_mod( 'productive_passmax_announcement_cta_position', 'right' );
}

/**
 * Method productive_passmax_announcement_cta_url.
 *
 * @param string $class ''.
 */
function productive_passmax_announcement_cta_url( $class = '' ) {
    // text html
    $theme_mod_value = get_theme_mod( 'productive_passmax_announcement_cta_url', esc_url(home_url()) );
    return wp_specialchars_decode( esc_url( $theme_mod_value ) );
} 
add_action( 'productive_passmax_display_announcement_cta_url', 'productive_passmax_announcement_cta_url' );

/**
 * Method productive_passmax_announcement_cta_text_color.
 *
 * @param string $class ''.
 */
function productive_passmax_announcement_cta_text_color( $class = '' ) {
    return get_theme_mod( 'productive_passmax_announcement_cta_text_color', '#ffffff' );
}

/**
 * Method productive_passmax_announcement_cta_bg_color.
 *
 * @param string $class ''.
 */
function productive_passmax_announcement_cta_bg_color( $class = '' ) {
    return get_theme_mod( 'productive_passmax_announcement_cta_bg_color', '#7906c8' );
}

/**
 * Method productive_passmax_announcement_cta_bg_color.
 *
 * @param string $class ''.
 */
function productive_passmax_announcement_cta_bg_color_hover( $class = '' ) {
    return get_theme_mod( 'productive_passmax_announcement_cta_bg_color_hover', '#30b309' );
}

/**
 * Method productive_passmax_announcement_close_btn_color.
 *
 * @param string $class ''.
 */
function productive_passmax_announcement_close_btn_color( $class = '' ) {
    return get_theme_mod( 'productive_passmax_announcement_close_btn_color', '#ffffff' );
}

/**
 * Method productive_passmax_announcement_cta_shape.
 *
 * @param string $class ''.
 */
function productive_passmax_announcement_cta_shape( $class = '' ) {
    return get_theme_mod( 'productive_passmax_announcement_cta_shape', 'ellipse' );
}

/**
 * Method productive_passmax_announcement_banner_alignment.
 *
 * @param string $class ''.
 */
function productive_passmax_announcement_banner_alignment( $class = '' ) {
    return get_theme_mod( 'productive_passmax_announcement_banner_alignment', 'justify-content-center' );
}

/**
 * Method productive_passmax_announcement_banner_border_color.
 *
 * @param string $class ''.
 */
function productive_passmax_announcement_banner_border_color( $class = '' ) {
    return get_theme_mod( 'productive_passmax_announcement_banner_border_color', '#bfdaef' );
}

/**
 * Method productive_passmax_announcement_banner_bg_color.
 *
 * @param string $class ''.
 */
function productive_passmax_announcement_banner_bg_color( $class = '' ) {
    return get_theme_mod( 'productive_passmax_announcement_banner_bg_color', '#4f0582' );
}

/**
 * Method productive_passmax_announcement_banner_bg_image.
 *
 * @param string $class ''.
 */
function productive_passmax_announcement_banner_bg_image( $class = '' ) {
    return get_theme_mod( 'productive_passmax_announcement_banner_bg_image', false );
}

// END ============== Productive_Theme_Customiser_Announcement CUSTOMISERS
