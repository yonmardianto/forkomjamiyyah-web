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


if ( ! class_exists( 'Productive_Theme_Customiser_Layout' ) ) {
    
    /**
     * Productive_Theme_Customiser_Layout
     * Theme Customiser Class
     */
    class Productive_Theme_Customiser_Layout extends Productive_Theme_Customiser_Common {
        
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
                'productive_passmax_layout_options',
                array(
                    'title' => esc_html__( 'Pages Layout and Design Options', 'pass-max' ),
                    'description' => esc_html__( 'Layout Options affecting all website pages', 'pass-max' ),
                    'panel' => 'productive_passmax_theme_options',
                    'priority' => 30,
                    'capability' => 'edit_theme_options',
                )
                );
                
            // add a setting for productive_passmax_template_layout_options control, below.
            $wp_customise->add_setting(
                'productive_passmax_template_layout_options',
                array(
                    'type' => 'theme_mod',
                    'default' => 'one_column',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_select'),
                )
            );
            $wp_customise->add_control(
                'productive_passmax_template_layout_options',
                array(
                    'type' => 'select',
                    'priority' => 10,
                    'section' => 'productive_passmax_layout_options',
                    'label' => esc_html__( 'Site-wide Page Layout Options', 'pass-max' ),
                    'description' => '',
                    'choices' => array(
                        'one_column' => esc_html__( 'One Column', 'pass-max' ),
                        'two_columns_left' => esc_html__( 'Left Sidebar', 'pass-max' ),
                        'two_columns_right' => esc_html__( 'Right Sidebar', 'pass-max' ),
                        'three_columns' => esc_html__( 'Three columns', 'pass-max' ),
                    ),
                )
            );
            
        }
        
    } // End of class.
    
    // add hook for the class.
    add_action( 'customize_register', array( 'Productive_Theme_Customiser_Layout', 'register' ) );
    
}// End of if class exists



/**
 * Method productive_passmax_template_layout_options.
 *
 * @param string $class ''.
 */
function productive_passmax_template_layout_options( $class = '' ) {
    return get_theme_mod( 'productive_passmax_template_layout_options', 'one_column' );
}

/**
 * Method productive_passmax_display_layout_fullwidth.
 *
 * @param string $class ''.
 */
function productive_passmax_layout_fullwidth( $class = '' ) {
    return get_theme_mod( 'productive_passmax_layout_fullwidth', false );
}
add_action( 'productive_passmax_display_layout_fullwidth', 'productive_passmax_layout_fullwidth' );

/**
 * Method productive_passmax_layout_content_width.
 *
 * @param string $class ''.
 */
function productive_passmax_layout_content_width( $class = '' ) {
    return get_theme_mod( 'productive_passmax_layout_content_width', 0 );
}

