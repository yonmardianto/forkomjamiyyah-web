<?php
/**
 * Global Color Customiser
 *
 * @package     productive-global
 * @author      productiveminds.com
 * @copyright   productiveminds.com
 * 
 */

if ( ! defined( 'ABSPATH' ) ) {
    die();
}


if ( ! class_exists( 'Productive_Global_Customiser_Common' ) ) {
    
    /**
     * Productive_Global_Customiser_Common
     * Global Customiser Class
     */
    class Productive_Global_Customiser_Common {
        
        
        /**
         * Register the customizer
         *
         * @param WP_Customize_Manager $wp_customise Param.
         */
        public static function register( $wp_customise ) {
            
            // Global General Options                                        10
            // Global Homepage Options (either from style plugin or theme)   11
            // Global Typography Options (from plugin)                       12
            // Pages Component Options                                       13
            // Global WooCommerce Options                                    14
            // Panel for productive_ecommerce_theme_options
            
            $panel_title = esc_html__( 'Typography Options', 'pass-max' ); 
            $panel_desc = $panel_title; 
            $wp_customise->add_panel(
                'productive_global_customizers',
                array(
                    'title' => $panel_title,
                    'description' => $panel_desc,
                    'priority' => 12,
                )
            );
            
        }
        
        /**
         * Method productive_global_sanitize_checkbox ''.
         *
         * @param boolean $checked ''.
         *
         * @return boolean ''.
         */
        public static function productive_global_sanitize_checkbox( $checked ) {
            return ( ( isset( $checked ) && true == $checked ) ?  true : false );
        }
        
        /**
         * Method productive_global_sanitize_select ''.
         *
         * @param string $input ''.
         * @param object $setting ''.
         *
         * @return string Input or default.
         */
        public static function productive_global_sanitize_select( $input, $setting ) {
            $input = sanitize_key( $input );
            $choices = $setting->manager->get_control( $setting->id )->choices;
            return ( ( array_key_exists( $input, $choices ) ) ? $input : $setting->default );
        }
        
        /**
         * Method productive_global_sanitize_html ''.
         *
         * @param string $html ''.
         *
         * @return string Sanitized html of the $html param.
         */
        public static function productive_global_sanitize_html( $html ) {
            return wp_filter_post_kses( $html );
        }
        
        /**
         * Method productive_global_sanitize_no_html ''.
         *
         * @param string $text ''.
         *
         * @return string ''.
         */
        public static function productive_global_sanitize_no_html( $text ) {
            return wp_filter_nohtml_kses( $text );
        }
        
        /**
         * Method productive_global_sanitize_url ''.
         *
         * @param string $url ''.
         *
         * @return string Sanitized url of the $url param.
         */
        public static function productive_global_sanitize_url( $url ) {
            return esc_url_raw( $url );
        }
        
        /**
         * Method productive_global_sanitize_absint ''.
         *
         * @param int $number ''.
         * @param object $setting ''.
         *
         * @return string Sanitized number of the $number or setting default.
         */
        public static function productive_global_sanitize_absint( $number, $setting ) {
            $number = absint( $number );
            
            return ( $number ? $number : $setting->default );
        }
        
        /**
         * Method productive_global_sanitize_float ''.
         *
         * @param int $value ''.
         * @param object $setting ''.
         *
         * @return string Sanitized float of the $value or setting default.
         */
        public static function productive_global_sanitize_float( $float, $setting ) {
            $value = floatval( $float );
            return ( $value ? $value : $setting->default );
        }
        
        /**
         * Method productive_global_sanitize_image ''.
         *
         * @param string $image ''.
         * @param object $setting ''.
         *
         * @return string ''.
         */
        public static function productive_global_sanitize_image( $image, $setting ) {
            
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
         * Method productive_global_sanitize_color ''.
         *
         * @param string $color ''.
         *
         * @return string ''.
         */
        public static function productive_global_sanitize_color( $color ) {
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
    add_action( 'customize_register', array( 'Productive_Global_Customiser_Common', 'register' ) );
    
}
