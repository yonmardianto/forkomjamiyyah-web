<?php
/**
 * Global Customiser
 *
 * @package     productive-global
 * @author      productiveminds.com
 * @copyright   productiveminds.com
 */

if ( ! defined( 'ABSPATH' ) ) {
    die();
}

if ( ! class_exists( 'Productive_Global_Customiser_Site_Colors_Overrides' ) ) {
    
    /**
     * Productive_Global_Customiser_Site_Colors_Overrides
     * Global Customiser Class
     */
    class Productive_Global_Customiser_Site_Colors_Overrides extends Productive_Global_Customiser_Common {
        
        /**
         * Register the customizer
         *
         * @param WP_Customize_Manager $wp_customise param.
         */
        public static function register( $wp_customise ) {
            
            // See common for Panels
            // 
            
            $panel = '';
            if ( productive_global_is_a_productive_theme() ) {
                $panel = 'productive_theme_style_options_typography';
            } else if( productive_global_is_pass_addons_active() ) {
                $panel = 'pass_addons_plugin_customizers';
            } else if( productive_global_is_ravolat_addons_active() ) {
                $panel = 'ravolat_addons_plugin_customizers';
            } else {
                $panel = 'productive_global_customizers';
            }
            
            // Section
            $wp_customise->add_section(
                'productive_global_custom_color_options_overrides',
                array(
                    'title' => esc_html__( 'Colour Palette OVERRIDES', 'pass-max' ),
                    'description' => esc_html__( 'Override specific colors already set as part of the active global color palette.', 'pass-max' ),
                    'panel' => $panel,
                    'priority' => 60,
                    'capability' => 'edit_theme_options',
                )
                );
            
            // add a setting for productive_global_cc_bg_override control, below.
            $wp_customise->add_setting(
                'productive_global_cc_bg_override',
                array(
                    'type' => 'theme_mod',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'default'              => '',
                    'sanitize_callback' => array(__CLASS__, 'productive_global_sanitize_color'),
                )
                );
            
            $wp_customise->add_control(
                new WP_Customize_Color_Control(
                    $wp_customise,
                    'productive_global_cc_bg_override',
                    array(
                        'priority' => 10,
                        'label' => esc_html__( 'Site Background', 'pass-max' ),
                        'section' => 'productive_global_custom_color_options_overrides',
                    )
                    )
                );
            
            // add a setting for productive_global_cc_header_item_override control, below.
            $wp_customise->add_setting(
                'productive_global_cc_header_item_override',
                array(
                    'type' => 'theme_mod',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'default'              => '',
                    'sanitize_callback' => array(__CLASS__, 'productive_global_sanitize_color'),
                )
                );
            
            $wp_customise->add_control(
                new WP_Customize_Color_Control(
                    $wp_customise,
                    'productive_global_cc_header_item_override',
                    array(
                        'priority' => 20,
                        'label' => esc_html__( 'Header Menu & Icons', 'pass-max' ),
                        'description' => esc_html__( 'Header menu, hyperlinks, and icons', 'pass-max' ),
                        'section' => 'productive_global_custom_color_options_overrides',
                    )
                    )
                );
            
            // add a setting for productive_global_cc_header_item_override_hover control, below.
            $wp_customise->add_setting(
                'productive_global_cc_header_item_override_hover',
                array(
                    'type' => 'theme_mod',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'default'              => '',
                    'sanitize_callback' => array(__CLASS__, 'productive_global_sanitize_color'),
                )
                );
            
            $wp_customise->add_control(
                new WP_Customize_Color_Control(
                    $wp_customise,
                    'productive_global_cc_header_item_override_hover',
                    array(
                        'priority' => 30,
                        'label' => esc_html__( 'Header Menu & Icons (on Hover)', 'pass-max' ),
                        'section' => 'productive_global_custom_color_options_overrides',
                    )
                    )
                );
            
            // add a setting for productive_global_cc_links_override control, below.
            $wp_customise->add_setting(
                'productive_global_cc_links_override',
                array(
                    'type' => 'theme_mod',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'default'              => '',
                    'sanitize_callback' => array(__CLASS__, 'productive_global_sanitize_color'),
                )
                );
            
            $wp_customise->add_control(
                new WP_Customize_Color_Control(
                    $wp_customise,
                    'productive_global_cc_links_override',
                    array(
                        'priority' => 40,
                        'label' => esc_html__( 'Hyperlinks', 'pass-max' ),
                        'description' => esc_html__( 'Sitewide hyperlinks', 'pass-max' ),
                        'section' => 'productive_global_custom_color_options_overrides',
                    )
                    )
                );
            
            // add a setting for productive_global_cc_links_override_hover control, below.
            $wp_customise->add_setting(
                'productive_global_cc_links_override_hover',
                array(
                    'type' => 'theme_mod',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'default'              => '',
                    'sanitize_callback' => array(__CLASS__, 'productive_global_sanitize_color'),
                )
                );
            
            $wp_customise->add_control(
                new WP_Customize_Color_Control(
                    $wp_customise,
                    'productive_global_cc_links_override_hover',
                    array(
                        'priority' => 50,
                        'label' => esc_html__( 'Hyperlinks (on Hover)', 'pass-max' ),
                        'section' => 'productive_global_custom_color_options_overrides',
                    )
                    )
                );
            
        }
        
        
    } // End of class.
    add_action( 'customize_register', array( 'Productive_Global_Customiser_Site_Colors_Overrides', 'register' ) );
    
    
    
    
    /**
     * Method productive_global_cc_bg_override.
     *
     * @param string $class ''.
     */
    function productive_global_cc_bg_override( $class = '' ) {
        return get_theme_mod( 'productive_global_cc_bg_override', '' );
    }
    
    /**
     * Method productive_global_cc_header_item_override.
     *
     * @param string $class ''.
     */
    function productive_global_cc_header_item_override( $class = '' ) {
        return get_theme_mod( 'productive_global_cc_header_item_override', '' );
    }
    
    /**
     * Method productive_global_cc_header_item_override_hover.
     *
     * @param string $class ''.
     */
    function productive_global_cc_header_item_override_hover( $class = '' ) {
        return get_theme_mod( 'productive_global_cc_header_item_override_hover', '' );
    }
    
    /**
     * Method productive_global_cc_links_override.
     *
     * @param string $class ''.
     */
    function productive_global_cc_links_override( $class = '' ) {
        return get_theme_mod( 'productive_global_cc_links_override', '' );
    }
    
    /**
     * Method productive_global_cc_links_override_hover.
     *
     * @param string $class ''.
     */
    function productive_global_cc_links_override_hover( $class = '' ) {
        return get_theme_mod( 'productive_global_cc_links_override_hover', '' );
    }

    
} // End of if class exists
