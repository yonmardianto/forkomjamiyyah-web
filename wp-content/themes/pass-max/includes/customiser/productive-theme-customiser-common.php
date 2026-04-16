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


if ( ! class_exists( 'Productive_Theme_Customiser_Common' ) ) {
    
    /**
     * Productive_Theme_Customiser_Common
     * Theme Customiser Class
     */
    class Productive_Theme_Customiser_Common {
        
        /**
         * Register the customizer
         *
         * @param WP_Customize_Manager $wp_customise Param.
         */
        public static function register( $wp_customise ) {
            
            // Theme General Options                                        10
            // Theme Homepage Options (either from style plugin or theme)   11
            // Theme Typography Options (from plugin)                       12
            // Pages Component Options                                      13
            // Theme WooCommerce Options                                    14
            // Panel for productive_passmax_theme_options
            $panel_title = PRODUCTIVE_PASSMAX_CURRENT_THEME_NAME . esc_html__( ' Theme', 'pass-max' ); 
            $panel_desc = esc_html__( 'Customisable Options for', 'pass-max' ) . PRODUCTIVE_PASSMAX_CURRENT_THEME_NAME; 
            $wp_customise->add_panel(
                'productive_passmax_theme_options',
                array(
                    'title' => $panel_title,
                    'description' => $panel_desc,
                    'priority' => 10,
                )
            );
            
            // Panel for productive_passmax_theme_homepage_options
            $panel_title2 = esc_html__( 'Homepage (theme options)', 'pass-max' ); 
            $panel_desc2 = esc_html__( 'Homepage Customisable Options for', 'pass-max' ) . PRODUCTIVE_PASSMAX_CURRENT_THEME_NAME; 
            $wp_customise->add_panel(
                'productive_passmax_theme_homepage_options',
                array(
                    'title' => $panel_title2,
                    'description' => $panel_desc2,
                    'priority' => 11,
                )
            );
            
            // Panel for productive_passmax_theme_homepage_options
            $panel_title3 = esc_html__( 'Page Components (theme options)', 'pass-max' ); 
            $panel_desc3 = esc_html__( 'Components and modules displayed on pages across the site', 'pass-max' ); 
            $wp_customise->add_panel(
                'productive_passmax_theme_page_component_options',
                array(
                    'title' => $panel_title3,
                    'description' => $panel_desc3,
                    'priority' => 13,
                )
            );
            
            // Panel for productive_passmax_theme_woocommerce_options
            $panel_title4 = esc_html__( 'WooCommerce (theme options)', 'pass-max' ); 
            $panel_desc4 = esc_html__( 'WooCommerce Customisable Options for', 'pass-max' ) . PRODUCTIVE_PASSMAX_CURRENT_THEME_NAME; 
            $wp_customise->add_panel(
                'productive_passmax_theme_woocommerce_options',
                array(
                    'title' => $panel_title4,
                    'description' => $panel_desc4,
                    'priority' => 14,
                )
            );
        }
        
        /**
         * Method productive_passmax_sanitize_checkbox ''.
         *
         * @param boolean $checked ''.
         *
         * @return boolean ''.
         */
        public static function productive_passmax_sanitize_checkbox( $checked ) {
            return ( ( isset( $checked ) && true == $checked ) ?  true : false );
        }
        
        /**
         * Method productive_passmax_sanitize_select ''.
         *
         * @param string $input ''.
         * @param object $setting ''.
         *
         * @return string Input or default.
         */
        public static function productive_passmax_sanitize_select( $input, $setting ) {
            $input = sanitize_key( $input );
            $choices = $setting->manager->get_control( $setting->id )->choices;
            return ( ( array_key_exists( $input, $choices ) ) ? $input : $setting->default );
        }
        
        /**
         * Method productive_passmax_sanitize_html ''.
         *
         * @param string $html ''.
         *
         * @return string Sanitized version of the $html param.
         */
        public static function productive_passmax_sanitize_html( $html ) {
            return wp_filter_post_kses( $html );
        }
        
        /**
         * Method productive_passmax_sanitize_no_html ''.
         *
         * @param string $text ''.
         *
         * @return string ''.
         */
        public static function productive_passmax_sanitize_no_html( $text ) {
            return wp_filter_nohtml_kses( $text );
        }
        
        /**
         * Method productive_passmax_sanitize_url ''.
         *
         * @param string $url ''.
         *
         * @return string Sanitized version of the $url param.
         */
        public static function productive_passmax_sanitize_url( $url ) {
            return esc_url_raw( $url );
        }
        
        /**
         * Method productive_passmax_sanitize_absint ''.
         *
         * @param int $number ''.
         * @param object $setting ''.
         *
         * @return string Sanitized version of the $number or setting default.
         */
        public static function productive_passmax_sanitize_absint( $number, $setting ) {
            $number = absint( $number );
            
            return ( $number ? $number : $setting->default );
        }
        
        /**
         * Method productive_passmax_sanitize_float ''.
         *
         * @param int $value ''.
         * @param object $setting ''.
         *
         * @return string Sanitized version of the $value or setting default.
         */
        public static function productive_passmax_sanitize_float( $float, $setting ) {
            $value = floatval( $float );
            return ( $value ? $value : $setting->default );
        }
        
        /**
         * Method productive_passmax_sanitize_image ''.
         *
         * @param string $image ''.
         * @param object $setting ''.
         *
         * @return string ''.
         */
        public static function productive_passmax_sanitize_image( $image, $setting ) {
            
            $mimes = array(
                'jpg|jpeg|jpe'    => 'image/jpeg',
                'png'             => 'image/png',
                'gif'             => 'image/gif',
                'bmp'             => 'image/bmp',
                'tif/tiff'        => 'image/tiff',
                'ico'             => 'image/x-icon'
            );
            
            $file = wp_check_filetype( $image, $mimes );
            
            if ( null != $file && array_key_exists('ext', $file) ) {
                return $image;
            } else {
                return $setting->default;
            }
            
        }
        
        
        /**
         * Method productive_passmax_sanitize_color ''.
         *
         * @param string $color ''.
         *
         * @return string ''.
         */
        public static function productive_passmax_sanitize_color( $color ) {
            if ( 'blank' === $color || empty( trim($color) ) ) {
                return '';
            }
            $color_sani = sanitize_hex_color( $color );
            if ( empty( $color_sani ) ) {
                $color_sani = '#000000';
            }
            return $color_sani;
        }
        
        
    } // end of class.
    
    // add hook for the class.
    add_action( 'customize_register', array( 'Productive_Theme_Customiser_Common', 'register' ) );
    
}
