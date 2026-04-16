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


if ( ! class_exists( 'Productive_Theme_Customiser_Homepage_Banner_Content' ) ) {
    
    /**
     * Productive_Theme_Customiser_Homepage_Banner_Content
     * Theme Customiser Class
     */
    class Productive_Theme_Customiser_Homepage_Banner_Content extends Productive_Theme_Customiser_Common {
        
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
                'productive_passmax_homepage_options_banner_content',
                array(
                    'title' => esc_html__( 'Banner Content', 'pass-max' ),
                    'description' => '',
                    'panel' => $panel,
                    'priority' => 30,
                    'capability' => 'edit_theme_options',
                )
                );
            
            // add a setting for productive_passmax_homepage_usp_image control, below.
            $wp_customise->add_setting(
                'productive_passmax_homepage_usp_image',
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
                    'productive_passmax_homepage_usp_image',
                    array(
                        'priority' => 10,
                        'section' => 'productive_passmax_homepage_options_banner_content',
                        'label' => esc_html__( 'Background Image', 'pass-max' ),
                        'description' => esc_html__( 'The main background image in the homepage', 'pass-max' ),
                    )
                    )
                );
                
                // add a setting for productive_passmax_homepage_banner_content_container_bg_color control, below.
                $wp_customise->add_setting(
                    'productive_passmax_homepage_banner_content_container_bg_color',
                    array(
                        'type' => 'theme_mod',
                        'theme_supports' => '',
                        'transport' => 'refresh',
                        'default'              => '',
                        'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_color'),
                    )
                );
                $wp_customise->add_control(
                    new WP_Customize_Color_Control(
                        $wp_customise,
                        'productive_passmax_homepage_banner_content_container_bg_color',
                        array(
                            'priority' => 20,
                            'label' => esc_html__( 'Banner/Slider Content Container Background', 'pass-max' ),
                            'section' => 'productive_passmax_homepage_options_banner_content',
                        )
                    )
                );
            
            // add a setting for productive_passmax_homepage_usp_textarea_1, below.
            $wp_customise->add_setting(
                'productive_passmax_homepage_usp_textarea_1',
                array(
                    'type' => 'theme_mod',
                    'default' => esc_html__( 'Simple Project Ideas', 'pass-max' ),
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_html'),
                )
                );
            // add control..
            $wp_customise->add_control(
                'productive_passmax_homepage_usp_textarea_1',
                array(
                    'type' => 'textarea',
                    'priority' => 30,
                    'section' => 'productive_passmax_homepage_options_banner_content',
                    'label' => esc_html__( 'Banner Title Copy', 'pass-max' ),
                    'description' => esc_html__( 'Leave empty to disable', 'pass-max' ),
                    // 'active_callback' => 'is_front_page'
                )
                );
            
            // add a setting for productive_passmax_homepage_usp_textarea_2, below.
            $wp_customise->add_setting(
                'productive_passmax_homepage_usp_textarea_2',
                array(
                    'type' => 'theme_mod',
                    'default' => esc_html__( 'Communicate your ideas clearly, using simple terms. Make your message easy to understand.', 'pass-max' ),
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_html'),
                )
                );
            // add control..
            $wp_customise->add_control(
                'productive_passmax_homepage_usp_textarea_2',
                array(
                    'type' => 'textarea',
                    'priority' => 40,
                    'section' => 'productive_passmax_homepage_options_banner_content',
                    'label' => esc_html__( 'Banner Explainer Copy', 'pass-max' ),
                    'description' => esc_html__( 'Leave empty to disable.', 'pass-max' ),
                )
                );
            
            // add a setting for productive_passmax_homepage_banner_auxiliary, below.
            $wp_customise->add_setting(
                'productive_passmax_homepage_banner_auxiliary',
                array(
                    'type' => 'theme_mod',
                    'default' => esc_html__( 'About Our Website', 'pass-max' ),
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_html'),
                )
                );
            // add control..
            $wp_customise->add_control(
                'productive_passmax_homepage_banner_auxiliary',
                array(
                    'type' => 'textarea',
                    'priority' => 50,
                    'section' => 'productive_passmax_homepage_options_banner_content',
                    'label' => esc_html__( 'Banner Auxiliary Copy', 'pass-max' ),
                    'description' => esc_html__( 'Leave empty to disable.', 'pass-max' ),
                )
                );
            
        }
    } // End of class.
    
    // add hook for the class.
    add_action( 'customize_register', array( 'Productive_Theme_Customiser_Homepage_Banner_Content', 'register' ) );
    
} // End of if class exists



/**
 * Method productive_passmax_homepage_usp_image.
 *
 * @param string $class ''.
 */
function productive_passmax_homepage_usp_image( $class = '' ) {
    return get_theme_mod( 'productive_passmax_homepage_usp_image', false );
}

/**
 * Method productive_passmax_homepage_banner_content_container_bg_color.
 *
 * @param string $class ''.
 */
function productive_passmax_homepage_banner_content_container_bg_color( $class = '' ) {
    return get_theme_mod( 'productive_passmax_homepage_banner_content_container_bg_color', '' );
}

/**
 * Method productive_passmax_homepage_usp_textarea_1.
 *
 * @param string $class ''.
 */
function productive_passmax_homepage_usp_textarea_1( $class = '' ) {
    $theme_mod_value = get_theme_mod( 'productive_passmax_homepage_usp_textarea_1', esc_html__( 'Simple Project Ideas', 'pass-max' ) );
    do_action( 'productive_global_render_hero_content_title', $theme_mod_value );
}
add_action( 'productive_passmax_display_homepage_usp_textarea_1', 'productive_passmax_homepage_usp_textarea_1' );


/**
 * Method productive_passmax_homepage_usp_textarea_2.
 *
 * @param string $class ''.
 */
function productive_passmax_homepage_usp_textarea_2( $class = '' ) {
    $theme_mod_value = get_theme_mod( 'productive_passmax_homepage_usp_textarea_2', esc_html__( 'Communicate your ideas clearly, using simple terms. Make your message easy to understand.', 'pass-max' ) );
    do_action( 'productive_global_render_hero_content_main', $theme_mod_value );
}
add_action( 'productive_passmax_display_homepage_usp_textarea_2', 'productive_passmax_homepage_usp_textarea_2' );


/**
 * Method productive_passmax_homepage_banner_auxiliary.
 *
 * @param string $class ''.
 */
function productive_passmax_homepage_banner_auxiliary( $class = '' ) {
    $theme_mod_value = get_theme_mod( 'productive_passmax_homepage_banner_auxiliary', esc_html__( 'About Our Website', 'pass-max' ) );
    $copy_and_css = array(
        'css_class' => $class,
        'copy' => $theme_mod_value,
    );
    do_action( 'productive_global_render_hero_content_auxiliary', $copy_and_css );
}
add_action( 'productive_passmax_display_homepage_banner_auxiliary', 'productive_passmax_homepage_banner_auxiliary' );
