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


if ( ! class_exists( 'Productive_Theme_Customiser_404' ) ) { 
    
    /**
     * Productive_Theme_Customiser_404
     * Theme Customiser Class
     */
    class Productive_Theme_Customiser_404 extends Productive_Theme_Customiser_Common {
        
        /**
         * Register the customizer
         *
         * @param WP_Customize_Manager $wp_customise param.
         */
        public static function register( $wp_customise ) {
            
            
            // START: MYACCOUNT
            
            // See common for Panels
            // 
            // Section
            $wp_customise->add_section(
                'productive_passmax_404_options',
                array(
                    'title' => esc_html__( '404 Page Options', 'pass-max' ),
                    'description' => '',
                    'panel' => 'productive_passmax_theme_options',
                    'priority' => 130,
                    'capability' => 'edit_theme_options',
                )
                );
            
            // add a setting for productive_passmax_404_banner_switch_on control, below.
            $wp_customise->add_setting(
                'productive_passmax_404_banner_switch_on',
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
                'productive_passmax_404_banner_switch_on',
                array(
                    'type' => 'checkbox',
                    'priority' => 5,
                    'section' => 'productive_passmax_404_options',
                    'label' => esc_html__( 'Enable Header Banner', 'pass-max' ),
                    'description' => '',
                    // 'active_callback' => 'is_front_page',
                )
                );
            
            // add a setting for productive_passmax_404_banner_image control, below.
            $wp_customise->add_setting(
                'productive_passmax_404_banner_image',
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
                    'productive_passmax_404_banner_image',
                    array(
                        'priority' => 10,
                        'section' => 'productive_passmax_404_options',
                        'label' => esc_html__( 'Header Banner Image (404 page only)', 'pass-max' ),
                        'description' => esc_html__( 'Top banner image for 404 (error page)', 'pass-max' ),
                        // 'active_callback' => 'is_front_page'
                    )
                    )
                );
            
            // add a setting for productive_passmax_404_page_title, below.
            $wp_customise->add_setting(
                'productive_passmax_404_page_title',
                array(
                    'type' => 'theme_mod',
                    'default' => esc_html__( 'Page Not Found', 'pass-max' ),
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_no_html'),
                )
                );
            // add control..
            $wp_customise->add_control(
                'productive_passmax_404_page_title',
                array(
                    'type' => 'text',
                    'priority' => 20,
                    'section' => 'productive_passmax_404_options',
                    'label' => esc_html__( '404 Page Title', 'pass-max' ),
                    'description' => esc_html__( 'The page title, which displays at the top of 404 page', 'pass-max' ),
                )
                );
            
            // add a setting for productive_passmax_404_content_title, below.
            $wp_customise->add_setting(
                'productive_passmax_404_content_title',
                array(
                    'type' => 'theme_mod',
                    'default' => esc_html__( 'You got 404', 'pass-max' ),
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_no_html'),
                )
                );
            // add control..
            $wp_customise->add_control(
                'productive_passmax_404_content_title',
                array(
                    'type' => 'text',
                    'priority' => 30,
                    'section' => 'productive_passmax_404_options',
                    'label' => esc_html__( '404 Large Copy', 'pass-max' ),
                    'description' => esc_html__( 'Displays in the main content area of 404 page', 'pass-max' ),
                )
                );
            
            // add a setting for productive_passmax_404_content_description, below.
            $wp_customise->add_setting(
                'productive_passmax_404_content_description',
                array(
                    'type' => 'theme_mod',
                    'default' => esc_html__( 'No page found matching the request. Please browse to a different page.', 'pass-max' ),
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_html'),
                )
                );
            // add control..
            $wp_customise->add_control(
                'productive_passmax_404_content_description',
                array(
                    'type' => 'textarea',
                    'priority' => 40,
                    'section' => 'productive_passmax_404_options',
                    'label' => esc_html__( '404 Page Information', 'pass-max' ),
                    'description' => esc_html__( 'Smaller information to guide user action.', 'pass-max' ),
                    // 'active_callback' => 'is_front_page'
                )
                );
            
            // add a setting for productive_passmax_404_continue_button_copy, below.
            $wp_customise->add_setting(
                'productive_passmax_404_continue_button_copy',
                array(
                    'type' => 'theme_mod',
                    'default' => esc_html__( 'Continue to Homepage', 'pass-max' ),
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_no_html'),
                )
                );
            // add control..
            $wp_customise->add_control(
                'productive_passmax_404_continue_button_copy',
                array(
                    'type' => 'text',
                    'priority' => 50,
                    'section' => 'productive_passmax_404_options',
                    'label' => esc_html__( 'Go to Homepage copy', 'pass-max' ),
                    'description' => esc_html__( 'Copy for the anchor link that helps user browse away from 404 page', 'pass-max' ),
                )
                );
            
            // add a setting for productive_passmax_404_continue_button_style control, below.
            $wp_customise->add_setting(
                'productive_passmax_404_continue_button_style',
                array(
                    'type' => 'theme_mod',
                    'default' => 'buttoned',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_select'),
                )
            );
            $wp_customise->add_control(
                'productive_passmax_404_continue_button_style',
                array(
                    'type' => 'select',
                    'priority' => 60,
                    'section' => 'productive_passmax_404_options',
                    'label' => esc_html__( 'Back to Homepage Style', 'pass-max' ),
                    'description' => '',
                    'choices' => array(
                        'just_link' => esc_html__( 'Normal', 'pass-max' ),
                        'buttoned' => esc_html__( 'Button', 'pass-max' ),
                    ),
                )
            );
            
            // END: MYACCOUNT
            
        }
        
    } // End of class.
    
    // add hook for the class.
    add_action( 'customize_register', array( 'Productive_Theme_Customiser_404', 'register' ) );
    
} // End of if class exists



// END ============== Productive_Theme_Customiser_404 CUSTOMISERS




/**
 * Method productive_passmax_404_banner_switch_on.
 *
 * @param string $class ''.
 */
function productive_passmax_404_banner_switch_on( $class = '' ) {
    return get_theme_mod( 'productive_passmax_404_banner_switch_on', true );
}

/**
 * Method productive_passmax_404_banner_image.
 *
 * @param string $class ''.
 */
function productive_passmax_404_banner_image() {
    return get_theme_mod( 'productive_passmax_404_banner_image', true );
}

/**
 * Method productive_passmax_404_page_title.
 *
 * @param string $class ''.
 */
function productive_passmax_404_page_title( $class = '' ) {
    return get_theme_mod( 'productive_passmax_404_page_title', esc_html__( 'Page Not Found', 'pass-max' ) );
}

/**
 * Method productive_passmax_404_content_title.
 *
 * @param string $class ''.
 */
function productive_passmax_404_content_title( $class = '' ) {
    return get_theme_mod( 'productive_passmax_404_content_title', esc_html__( 'You got 404', 'pass-max' ) );
}

/**
 * Method productive_passmax_404_content_description.
 *
 * @param string $class ''.
 */
function productive_passmax_404_content_description( $class = '' ) {
    return get_theme_mod( 'productive_passmax_404_content_description', esc_html__( 'No page found matching the request. Please browse to a different page.', 'pass-max' ) );
}

/**
 * Method productive_passmax_404_continue_button_copy.
 *
 * @param string $class ''.
 */
function productive_passmax_404_continue_button_copy( $class = '' ) {
    return get_theme_mod( 'productive_passmax_404_continue_button_copy', esc_html__( 'Continue to Homepage', 'pass-max' ) );
}

/**
 * Method productive_passmax_404_continue_button_style.
 *
 * @param string $class ''.
 */
function productive_passmax_404_continue_button_style( $class = '' ) {
    return get_theme_mod( 'productive_passmax_404_continue_button_style', 'buttoned' );
}
