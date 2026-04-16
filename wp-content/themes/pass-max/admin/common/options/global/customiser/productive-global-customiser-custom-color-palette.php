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

if ( ! class_exists( 'Productive_Global_Customiser_Site_Colors' ) ) {
    
    /**
     * Productive_Global_Customiser_Site_Colors
     * Global Customiser Class
     */
    class Productive_Global_Customiser_Site_Colors extends Productive_Global_Customiser_Common {
        
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
                'productive_global_custom_color_options',
                array(
                    'title' => esc_html__( 'Set Custom Colour Palette', 'pass-max' ),
                    'description' => esc_html__( 'Set productiveminds colour palette to control site-wide colour scheme.', 'pass-max' ),
                    'panel' => $panel,
                    'priority' => 50,
                    'capability' => 'edit_theme_options',
                )
                );
            
            // add a setting for productive_global_custom_color_dom control, below.
            $wp_customise->add_setting(
                'productive_global_custom_color_dom',
                array(
                    'type' => 'theme_mod',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'default'              => Productive_Global_Customiser_Site_Color_Values::get_a_color_value( 'productive_global_custom_color_dom', '#0066CC' ),
                    'sanitize_callback' => array(__CLASS__, 'productive_global_sanitize_color'),
                )
                );
            
            $wp_customise->add_control(
                new WP_Customize_Color_Control(
                    $wp_customise,
                    'productive_global_custom_color_dom',
                    array(
                        'priority' => 10,
                        'label' => esc_html__( 'Dominant Colour (--dom)', 'pass-max' ),
                        'description' => esc_html__( 'The dominant colour used in header navbar, hyperlinks, buttons background etc', 'pass-max' ),
                        'section' => 'productive_global_custom_color_options',
                    )
                    )
                );
            
            // add a setting for productive_global_custom_color_dom_plus control, below.
            $wp_customise->add_setting(
                'productive_global_custom_color_dom_plus',
                array(
                    'type' => 'theme_mod',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'default'              => Productive_Global_Customiser_Site_Color_Values::get_a_color_value( 'productive_global_custom_color_dom_plus', '#003275' ),
                    'sanitize_callback' => array(__CLASS__, 'productive_global_sanitize_color'),
                )
                );
            
            $wp_customise->add_control(
                new WP_Customize_Color_Control(
                    $wp_customise,
                    'productive_global_custom_color_dom_plus',
                    array(
                        'priority' => 20,
                        'label' => esc_html__( 'Dark dominant colour (--dom-plus)', 'pass-max' ),
                        'description' => esc_html__( 'Darker shade of dominant colour', 'pass-max' ),
                        'section' => 'productive_global_custom_color_options',
                    )
                    )
                );
            
            // add a setting for productive_global_custom_color_dom_minus control, below.
            $wp_customise->add_setting(
                'productive_global_custom_color_dom_minus',
                array(
                    'type' => 'theme_mod',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'default'              => Productive_Global_Customiser_Site_Color_Values::get_a_color_value( 'productive_global_custom_color_dom_minus', '#E6F6FF' ),
                    'sanitize_callback' => array(__CLASS__, 'productive_global_sanitize_color'),
                )
                );
            
            $wp_customise->add_control(
                new WP_Customize_Color_Control(
                    $wp_customise,
                    'productive_global_custom_color_dom_minus',
                    array(
                        'priority' => 30,
                        'label' => esc_html__( 'Light dominant colour (--minus)', 'pass-max' ),
                        'description' => esc_html__( 'A very light shade of dominant colour', 'pass-max' ),
                        'section' => 'productive_global_custom_color_options',
                    )
                    )
                );
            
            // add a setting for productive_global_custom_color_accent_1 control, below.
            $wp_customise->add_setting(
                'productive_global_custom_color_accent_1',
                array(
                    'type' => 'theme_mod',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'default'              => Productive_Global_Customiser_Site_Color_Values::get_a_color_value( 'productive_global_custom_color_accent_1', '#A82800' ),
                    'sanitize_callback' => array(__CLASS__, 'productive_global_sanitize_color'),
                )
                );
            
            $wp_customise->add_control(
                new WP_Customize_Color_Control(
                    $wp_customise,
                    'productive_global_custom_color_accent_1',
                    array(
                        'priority' => 40,
                        'label' => esc_html__( 'Dark Accent Colour (--accent-1)', 'pass-max' ),
                        'description' => esc_html__( 'Dark colour, which contrasts the dominant colour. Used for footer background.', 'pass-max' ),
                        'section' => 'productive_global_custom_color_options',
                    )
                    )
                );
            
            // add a setting for productive_global_custom_color_accent_2 control, below.
            $wp_customise->add_setting(
                'productive_global_custom_color_accent_2',
                array(
                    'type' => 'theme_mod',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'default'              => Productive_Global_Customiser_Site_Color_Values::get_a_color_value( 'productive_global_custom_color_accent_2', '#FDDAAB' ),
                    'sanitize_callback' => array(__CLASS__, 'productive_global_sanitize_color'),
                )
                );
            
            $wp_customise->add_control(
                new WP_Customize_Color_Control(
                    $wp_customise,
                    'productive_global_custom_color_accent_2',
                    array(
                        'priority' => 42,
                        'label' => esc_html__( 'Light Accent Colour (--accent-2)', 'pass-max' ),
                        'description' => esc_html__( 'A "very" light shade of accent 1, which equally contrasts text colour 1', 'pass-max' ),
                        'section' => 'productive_global_custom_color_options',
                    )
                    )
                );
            
            // add a setting for productive_global_custom_color_txt_1 control, below.
            $wp_customise->add_setting(
                'productive_global_custom_color_txt_1',
                array(
                    'type' => 'theme_mod',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'default'              => Productive_Global_Customiser_Site_Color_Values::get_a_color_value( 'productive_global_custom_color_txt_1', '#45567A' ),
                    'sanitize_callback' => array(__CLASS__, 'productive_global_sanitize_color'),
                )
                );
            
            $wp_customise->add_control(
                new WP_Customize_Color_Control(
                    $wp_customise,
                    'productive_global_custom_color_txt_1',
                    array(
                        'priority' => 44,
                        'label' => esc_html__( 'Text Colour 1 (--txt-1)', 'pass-max' ),
                        'description' => esc_html__( 'Used for all content site-wide', 'pass-max' ),
                        'section' => 'productive_global_custom_color_options',
                    )
                    )
                );
            
            // add a setting for productive_global_custom_color_txt_2 control, below.
            $wp_customise->add_setting(
                'productive_global_custom_color_txt_2',
                array(
                    'type' => 'theme_mod',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'default'              => Productive_Global_Customiser_Site_Color_Values::get_a_color_value( 'productive_global_custom_color_txt_2', '#111827' ),
                    'sanitize_callback' => array(__CLASS__, 'productive_global_sanitize_color'),
                )
                );
            
            $wp_customise->add_control(
                new WP_Customize_Color_Control(
                    $wp_customise,
                    'productive_global_custom_color_txt_2',
                    array(
                        'priority' => 50,
                        'label' => esc_html__( 'Text Colour 2 (--txt-2)', 'pass-max' ),
                        'description' => esc_html__( 'Ideally, a darker shade of text colour 1', 'pass-max' ),
                        'section' => 'productive_global_custom_color_options',
                    )
                    )
                );
            
            // add a setting for productive_global_custom_color_neutral control, below.
            $wp_customise->add_setting(
                'productive_global_custom_color_neutral',
                array(
                    'type' => 'theme_mod',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'default'              => Productive_Global_Customiser_Site_Color_Values::get_a_color_value( 'productive_global_custom_color_neutral', '#B3CAE9' ),
                    'sanitize_callback' => array(__CLASS__, 'productive_global_sanitize_color'),
                )
                );
            
            $wp_customise->add_control(
                new WP_Customize_Color_Control(
                    $wp_customise,
                    'productive_global_custom_color_neutral',
                    array(
                        'priority' => 60,
                        'label' => esc_html__( 'Neutral', 'pass-max' ),
                        'description' => esc_html__( 'A light neutral colour - used for forms border etc', 'pass-max' ),
                        'section' => 'productive_global_custom_color_options',
                    )
                    )
                );
            
            // add a setting for productive_global_custom_color_neutral_light control, below.
            $wp_customise->add_setting(
                'productive_global_custom_color_neutral_light',
                array(
                    'type' => 'theme_mod',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'default'              => Productive_Global_Customiser_Site_Color_Values::get_a_color_value( 'productive_global_custom_color_neutral_light', '#f8f9f9' ),
                    'sanitize_callback' => array(__CLASS__, 'productive_global_sanitize_color'),
                )
                );
            
            $wp_customise->add_control(
                new WP_Customize_Color_Control(
                    $wp_customise,
                    'productive_global_custom_color_neutral_light',
                    array(
                        'priority' => 70,
                        'label' => esc_html__( 'Light neutral (--neutral-light)', 'pass-max' ),
                        'description' => esc_html__( 'A "very" light shade of neutral colour', 'pass-max' ),
                        'section' => 'productive_global_custom_color_options',
                    )
                    )
                );
            
            // add a setting for productive_global_custom_color_white control, below.
            $wp_customise->add_setting(
                'productive_global_custom_color_white',
                array(
                    'type' => 'theme_mod',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'default'              => Productive_Global_Customiser_Site_Color_Values::get_a_color_value( 'productive_global_custom_color_white', '#FEFEFE' ),
                    'sanitize_callback' => array(__CLASS__, 'productive_global_sanitize_color'),
                )
                );
            
            $wp_customise->add_control(
                new WP_Customize_Color_Control(
                    $wp_customise,
                    'productive_global_custom_color_white',
                    array(
                        'priority' => 80,
                        'label' => esc_html__( 'White (--dom-white)', 'pass-max' ),
                        'description' => esc_html__( 'A shade of white', 'pass-max' ),
                        'section' => 'productive_global_custom_color_options',
                    )
                    )
                );
            
            // add a setting for productive_global_custom_color_black control, below.
            $wp_customise->add_setting(
                'productive_global_custom_color_black',
                array(
                    'type' => 'theme_mod',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'default'              => Productive_Global_Customiser_Site_Color_Values::get_a_color_value( 'productive_global_custom_color_black', '#13161d' ),
                    'sanitize_callback' => array(__CLASS__, 'productive_global_sanitize_color'),
                )
                );
            
            $wp_customise->add_control(
                new WP_Customize_Color_Control(
                    $wp_customise,
                    'productive_global_custom_color_black',
                    array(
                        'priority' => 90,
                        'label' => esc_html__( 'Black (--dom-black)', 'pass-max' ),
                        'description' => esc_html__( 'A shade of black', 'pass-max' ),
                        'section' => 'productive_global_custom_color_options',
                    )
                    )
                );
            
            // add a setting for productive_global_custom_color_review_and_rating_stars control, below.
            $wp_customise->add_setting(
                'productive_global_custom_color_review_and_rating_stars',
                array(
                    'type' => 'theme_mod',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'default'   => Productive_Global_Customiser_Site_Color_Values::get_a_color_value( 'productive_global_custom_color_review_and_rating_stars', '#cf122c' ),
                    'sanitize_callback' => array(__CLASS__, 'productive_global_sanitize_color'),
                )
                );

            $wp_customise->add_control(
                new WP_Customize_Color_Control(
                    $wp_customise,
                    'productive_global_custom_color_review_and_rating_stars',
                    array(
                        'priority' => 200,
                        'label' => esc_html__( 'Product Rating Stars (productRating_Yes_Color)', 'pass-max' ),
                        'description' => esc_html__( 'Used for product ratings stars etc', 'pass-max' ),
                        'section' => 'productive_global_custom_color_options',
                    )
                    )
                );
            
        }
        
        
    } // End of class.
    add_action( 'customize_register', array( 'Productive_Global_Customiser_Site_Colors', 'register' ) );
    
    
    
    
    /**
     * Method productive_global_custom_color_dom.
     *
     * @param string $class ''.
     */
    function productive_global_custom_color_dom( $class = '' ) {
        $color = Productive_Global_Customiser_Site_Color_Values::get_a_color_value( 'productive_global_custom_color_dom', '#0066CC' );
        return get_theme_mod( 'productive_global_custom_color_dom', $color );
    }
    
    /**
     * Method productive_global_custom_color_dom_plus.
     *
     * @param string $class ''.
     */
    function productive_global_custom_color_dom_plus( $class = '' ) {
        $color = Productive_Global_Customiser_Site_Color_Values::get_a_color_value( 'productive_global_custom_color_dom_plus', '#003275' );
        return get_theme_mod( 'productive_global_custom_color_dom_plus', $color );
    }
    
    /**
     * Method productive_global_custom_color_dom_minus.
     *
     * @param string $class ''.
     */
    function productive_global_custom_color_dom_minus( $class = '' ) {
        $color = Productive_Global_Customiser_Site_Color_Values::get_a_color_value( 'productive_global_custom_color_dom_minus', '#E6F6FF' );
        return get_theme_mod( 'productive_global_custom_color_dom_minus', $color );
    }
    
    /**
     * Method productive_global_custom_color_accent_1.
     *
     * @param string $class ''.
     */
    function productive_global_custom_color_accent_1( $class = '' ) {
        $color = Productive_Global_Customiser_Site_Color_Values::get_a_color_value( 'productive_global_custom_color_accent_1', '#A82800' );
        return get_theme_mod( 'productive_global_custom_color_accent_1', $color );
    }
    
    /**
     * Method productive_global_custom_color_accent_2.
     *
     * @param string $class ''.
     */
    function productive_global_custom_color_accent_2( $class = '' ) {
        $color = Productive_Global_Customiser_Site_Color_Values::get_a_color_value( 'productive_global_custom_color_accent_2', '#FDDAAB' );
        return get_theme_mod( 'productive_global_custom_color_accent_2', $color );
    }
    
    /**
     * Method productive_global_custom_color_txt_1.
     *
     * @param string $class ''.
     */
    function productive_global_custom_color_txt_1( $class = '' ) {
        $color = Productive_Global_Customiser_Site_Color_Values::get_a_color_value( 'productive_global_custom_color_txt_1', '#45567A' );
        return get_theme_mod( 'productive_global_custom_color_txt_1', $color );
    }
    
    /**
     * Method productive_global_custom_color_txt_2.
     *
     * @param string $class ''.
     */
    function productive_global_custom_color_txt_2( $class = '' ) {
        $color = Productive_Global_Customiser_Site_Color_Values::get_a_color_value( 'productive_global_custom_color_txt_2', '#111827' );
        return get_theme_mod( 'productive_global_custom_color_txt_2', $color );
    }
    
    /**
     * Method productive_global_custom_color_neutral.
     *
     * @param string $class ''.
     */
    function productive_global_custom_color_neutral( $class = '' ) {
        $color = Productive_Global_Customiser_Site_Color_Values::get_a_color_value( 'productive_global_custom_color_neutral', '#B3CAE9' );
        return get_theme_mod( 'productive_global_custom_color_neutral', $color );
    }
    
    /**
     * Method productive_global_custom_color_neutral_light.
     *
     * @param string $class ''.
     */
    function productive_global_custom_color_neutral_light( $class = '' ) {
        $color = Productive_Global_Customiser_Site_Color_Values::get_a_color_value( 'productive_global_custom_color_neutral_light', '#f8f9f9' );
        return get_theme_mod( 'productive_global_custom_color_neutral_light', $color );
    }
    
    /**
     * Method productive_global_custom_color_white.
     *
     * @param string $class ''.
     */
    function productive_global_custom_color_white( $class = '' ) {
        $color = Productive_Global_Customiser_Site_Color_Values::get_a_color_value( 'productive_global_custom_color_white', '#FEFEFE' );
        return get_theme_mod( 'productive_global_custom_color_white', $color );
    }
    
    /**
     * Method productive_global_custom_color_black.
     *
     * @param string $class ''.
     */
    function productive_global_custom_color_black( $class = '' ) {
        $color = Productive_Global_Customiser_Site_Color_Values::get_a_color_value( 'productive_global_custom_color_black', '#13161d' );
        return get_theme_mod( 'productive_global_custom_color_black', $color );
    }
    
    /**
     * Method productive_global_custom_color_review_and_rating_stars.
     *
     * @param string $class ''.
     */
    function productive_global_custom_color_review_and_rating_stars( $class = '' ) {
        $color = Productive_Global_Customiser_Site_Color_Values::get_a_color_value( 'productive_global_custom_color_review_and_rating_stars', '#cf122c' );
        return get_theme_mod( 'productive_global_custom_color_review_and_rating_stars', $color );
    }
    
    function productive_global_custom_color_dom_default( $stylesheet ) {
        switch ($stylesheet) {
            case 'transact':
                return '#50006C';
            case 'pundit':
                return '#50006C';
            case 'stockist-mini':
                return '#9e5656';
            default:
                return '#0066CC';
        }
    }
    
    function productive_global_custom_color_dom_plus_default( $stylesheet ) {
        switch ($stylesheet) {
            case 'transact':
                return '#3d0052';
            case 'pundit':
                return '#3d0052';
            case 'stockist-mini':
                return '#574e6d';
            default:
                return '#003275';
        }
    }
    
    function productive_global_custom_color_dom_minus_default( $stylesheet ) {
        switch ($stylesheet) {
            case 'transact':
                return '#fbefff';
            case 'pundit':
                return '#fbefff';
            case 'stockist-mini':
                return '#f6e9e8';
            default:
                return '#E6F6FF';
        }
    }
    
    function productive_global_custom_color_accent_1_default( $stylesheet ) {
        switch ($stylesheet) {
            case 'transact':
                return '#0A6533';
            case 'pundit':
                return '#0A6533';
            case 'stockist-mini':
                return '#0A6533';
            default:
                return '#A82800';
        }
    }
    
    function productive_global_custom_color_accent_2_default( $stylesheet ) {
        switch ($stylesheet) {
            case 'transact':
                return '#EAFDF2';
            case 'pundit':
                return '#EAFDF2';
            case 'stockist-mini':
                return '#EAFDF2';
            default:
                return '#FDDAAB';
        }
    }
    
    function productive_global_custom_color_txt_1_default( $stylesheet ) {
        switch ($stylesheet) {
            case 'transact':
                return '#47385E';
            case 'pundit':
                return '#47385E';
            case 'stockist-mini':
                return '#111827';
            default:
                return '#45567A';
        }
    }
    
    function productive_global_custom_color_txt_2_default( $stylesheet ) {
        switch ($stylesheet) {
            case 'transact':
                return '#2C233D';
            case 'pundit':
                return '#2C233D';
            case 'stockist-mini':
                return '#45567a';
            default:
                return '#111827';
        }
    }
    
    function productive_global_custom_color_neutral_default( $stylesheet ) {
        switch ($stylesheet) {
            case 'transact':
                return '#E3E0E5';
            case 'pundit':
                return '#E3E0E5';
            case 'stockist-mini':
                return '#e2ccca';
            default:
                return '#B3CAE9';
        }
    }
    
    function productive_global_custom_color_neutral_light_default( $stylesheet ) {
        switch ($stylesheet) {
            case 'transact':
                return '#FDFDFD';
            case 'pundit':
                return '#FDFDFD';
            case 'stockist-mini':
                return '#fffefe';
            default:
                return '#f8f9f9';
        }
    }
    
    function productive_global_custom_color_white_default( $stylesheet ) {
        switch ($stylesheet) {
            case 'transact':
                return '#FFFFFF';
            case 'pundit':
                return '#FFFFFF';
            case 'stockist-mini':
                return '#fff9f3';
            default:
                return '#FEFEFE';
        }
    }
    
    function productive_global_custom_color_black_default( $stylesheet ) {
        switch ($stylesheet) {
            case 'transact':
                return '#17131C';
            case 'pundit':
                return '#17131C';
            case 'stockist-mini':
                return '#17131C';
            default:
                return '#13161d';
        }
    }
    
    function productive_global_custom_color_review_and_rating_stars_default( $stylesheet ) {
        switch ($stylesheet) {
            case 'transact':
                return '#cf122c';
            case 'pundit':
                return '#cf122c';
            case 'stockist-mini':
                return '#cf122c';
            default:
                return '#cf122c';
        }
    }
    
    class Productive_Global_Customiser_Site_Color_Values {
    
        public static $all_custom_colors;
        
        public static function get_color_values() {
            if( !empty( Productive_Global_Customiser_Site_Color_Values::$all_custom_colors ) ) {
                return Productive_Global_Customiser_Site_Color_Values::$all_custom_colors;
            }
            
            $stylesheet = get_stylesheet();
            $custom_colors = array();
            
            $custom_colors['productive_global_custom_color_dom']            = productive_global_custom_color_dom_default( $stylesheet );
            $custom_colors['productive_global_custom_color_dom_plus']       = productive_global_custom_color_dom_plus_default( $stylesheet );
            $custom_colors['productive_global_custom_color_dom_minus']      = productive_global_custom_color_dom_minus_default( $stylesheet );
            $custom_colors['productive_global_custom_color_accent_1']       = productive_global_custom_color_accent_1_default( $stylesheet );
            $custom_colors['productive_global_custom_color_accent_2']       = productive_global_custom_color_accent_2_default( $stylesheet );
            $custom_colors['productive_global_custom_color_txt_1']          = productive_global_custom_color_txt_1_default( $stylesheet );
            $custom_colors['productive_global_custom_color_txt_2']          = productive_global_custom_color_txt_2_default( $stylesheet );
            $custom_colors['productive_global_custom_color_neutral']        = productive_global_custom_color_neutral_default( $stylesheet );
            $custom_colors['productive_global_custom_color_neutral_light']  = productive_global_custom_color_neutral_light_default( $stylesheet );
            $custom_colors['productive_global_custom_color_white']          = productive_global_custom_color_white_default( $stylesheet );
            $custom_colors['productive_global_custom_color_black']          = productive_global_custom_color_black_default( $stylesheet );
            $custom_colors['productive_global_custom_color_review_and_rating_stars'] = productive_global_custom_color_review_and_rating_stars_default( $stylesheet );
            
            Productive_Global_Customiser_Site_Color_Values::$all_custom_colors = $custom_colors;

            return Productive_Global_Customiser_Site_Color_Values::$all_custom_colors;
        }
        
        public static function get_a_color_value( $item, $default = '' ) {
            $all_items = Productive_Global_Customiser_Site_Color_Values::get_color_values();
            $item_value = $default;
            if( isset($all_items[$item]) ) {
                $item_value = $all_items[$item];
            }
            return $item_value;
        }
        
    }

    
} // End of if class exists
