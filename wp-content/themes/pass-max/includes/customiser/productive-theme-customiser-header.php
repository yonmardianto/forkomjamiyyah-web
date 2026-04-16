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


if ( ! class_exists( 'Productive_Theme_Customiser_Header' ) ) {
    
    /**
     * Productive_Theme_Customiser_Header
     * Theme Customiser Class
     */
    class Productive_Theme_Customiser_Header extends Productive_Theme_Customiser_Common {
        
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
                'productive_passmax_theme_header',
                array(
                    'title' => esc_html__( 'Header Options', 'pass-max' ),
                    'description' => esc_html__( 'Header Options', 'pass-max' ),
                    'panel' => 'productive_passmax_theme_options',
                    'priority' => 10,
                    'capability' => 'edit_theme_options',
                )
                );
            $wp_customise->add_setting(
                'productive_passmax_header_style',
                array(
                    'type' => 'theme_mod',
                    'default' => productive_global_get_theme_default_base_header_style(),
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_select'),
                )
            );
            $wp_customise->add_control(
                'productive_passmax_header_style',
                array(
                    'type' => 'select',
                    'priority' => 10,
                    'section' => 'productive_passmax_theme_header',
                    'label' => esc_html__( 'Select Header Design', 'pass-max' ),
                    'description' => '',
                    'choices' => array(
                        'header_base_design_01' => esc_html__( 'Productive Business', 'pass-max' ),
                        'header_base_design_02' => esc_html__( 'Productive eCommerce', 'pass-max' ),
                        'header_base_design_03' => esc_html__( 'Stockist', 'pass-max' ),
                        'header_design_1'       => esc_html__( 'Header Design 01', 'pass-max' ),
                        'header_design_10'      => esc_html__( 'Transact', 'pass-max' ),
                    ),
                )
            );
            
            if( productive_passmax_transparent_header_required() ) {
                $wp_customise->add_setting(
                    'productive_passmax_enable_header_home_header_as_overlay',
                    array(
                        'type' => 'theme_mod',
                        'default' => 'pro_std_home_header',
                        'theme_supports' => '',
                        'transport' => 'refresh',
                        'capability' => 'edit_theme_options',
                        'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_select'),
                    )
                );
                $wp_customise->add_control(
                    'productive_passmax_enable_header_home_header_as_overlay',
                    array(
                        'type' => 'select',
                        'priority' => 15,
                        'section' => 'productive_passmax_theme_header',
                        'label' => esc_html__( 'Transparent Home Header?', 'pass-max' ),
                        'description' => esc_html__( 'Utilize the Home Header of the site as a transparent overlay', 'pass-max' ),
                        'choices' => array(
                            'pro_transp_home_header' => esc_html__( 'Yes, Transparent Home Header', 'pass-max' ),
                            'pro_std_home_header' => esc_html__( 'No', 'pass-max' ),
                        ),
                    )
                );
            }
            
            // add a setting for productive_passmax_the_logo_size control, below.
            $wp_customise->add_setting(
                'productive_passmax_the_logo_size',
                array(
                    'type' => 'theme_mod',
                    'default' => PRODUCTIVE_PASSMAX_THE_LOGO_WIDTH_DEFAULT,
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_absint'),
                )
            );
            $wp_customise->add_control(
                'productive_passmax_the_logo_size',
                array(
                    'type' => 'number',
                    'priority' => 30,
                    'section' => 'productive_passmax_theme_header',
                    'label' => esc_html__( 'Logo Width (px)', 'pass-max' ),
                    'description' => esc_html__( 'Increases or decreases width in px - height adjusts automatically.', 'pass-max' ),
                    'input_attrs' => array(
                        'min' => PRODUCTIVE_PASSMAX_THE_LOGO_WIDTH_MIN,
                        'max' => PRODUCTIVE_PASSMAX_THE_LOGO_WIDTH_MAX,
                        'step' => 10,
                    ),
                )
            );
            
            // add a setting for vertical_spacing control, below.
            $wp_customise->add_setting(
                'productive_passmax_the_logo_vertical_spacing',
                array(
                    'type' => 'theme_mod',
                    'default' => 10,
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_absint'),
                )
            );
            $wp_customise->add_control(
                'productive_passmax_the_logo_vertical_spacing',
                array(
                    'type' => 'number',
                    'priority' => 40,
                    'section' => 'productive_passmax_theme_header',
                    'label' => esc_html__( 'Logo Vertical Spacing (px)', 'pass-max' ),
                    'description' => esc_html__( 'Increases or decreases the spacing above and below the logo.', 'pass-max' ),
                    'input_attrs' => array(
                        'min' => 10,
                        'max' => 100,
                        'step' => 5,
                    ),
                )
            );
            
            // add a setting for productive_passmax_enable_header_search control, below.
            $wp_customise->add_setting(
                'productive_passmax_enable_header_search',
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
                'productive_passmax_enable_header_search',
                array(
                    'type' => 'checkbox',
                    'priority' => 60,
                    'section' => 'productive_passmax_theme_header',
                    'label' => esc_html__( 'Show Header Search Option?', 'pass-max' ),
                    'description' => esc_html__( 'Display search box in the header', 'pass-max' ),
                    // 'active_callback' => 'is_front_page',
                )
                );
            
            // add a setting for productive_passmax_enable_header_account control, below.
            $wp_customise->add_setting(
                'productive_passmax_enable_header_account',
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
                'productive_passmax_enable_header_account',
                array(
                    'type' => 'checkbox',
                    'priority' => 70,
                    'section' => 'productive_passmax_theme_header',
                    'label' => esc_html__( 'Show My Account Icon in Header?', 'pass-max' ),
                    'description' => esc_html__( 'Show login/logout icon in the header', 'pass-max' ),
                    // 'active_callback' => 'is_front_page',
                )
                );
            
            // add a setting for productive_passmax_enable_header_account_as_popup control, below.
            $wp_customise->add_setting(
                'productive_passmax_enable_header_account_as_popup',
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
                'productive_passmax_enable_header_account_as_popup',
                array(
                    'type' => 'checkbox',
                    'priority' => 71,
                    'section' => 'productive_passmax_theme_header',
                    'label' => esc_html__( 'Account Icon Opens Login Popup?', 'pass-max' ),
                    'description' => esc_html__( 'Open login popup when icon is clicked', 'pass-max' ),
                    // 'active_callback' => 'is_front_page',
                )
                );
            
            // add a setting for productive_passmax_all_header_icons_size control, below.
            $wp_customise->add_setting(
                'productive_passmax_all_header_icons_size',
                array(
                    'type' => 'theme_mod',
                    'default' => 30,
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_absint'),
                )
            );
            $wp_customise->add_control(
                'productive_passmax_all_header_icons_size',
                array(
                    'type' => 'number',
                    'priority' => 80,
                    'section' => 'productive_passmax_theme_header',
                    'label' => esc_html__( 'Header Icons Width (px)', 'pass-max' ),
                    'description' => esc_html__( 'Increases or decreases width of all header icons - height adjusts automatically.', 'pass-max' ),
                    'input_attrs' => array(
                        'min' => 10,
                        'max' => 100,
                        'step' => 1,
                    ),
                )
            );
            
            // add a setting for productive_passmax_header_navicon_style control, below.
            $wp_customise->add_setting(
                'productive_passmax_header_navicon_style',
                array(
                    'type' => 'theme_mod',
                    'default' => 'standard_navicon',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_select'),
                )
            );
            $wp_customise->add_control(
                'productive_passmax_header_navicon_style',
                array(
                    'type' => 'select',
                    'priority' => 90,
                    'section' => 'productive_passmax_theme_header',
                    'label' => esc_html__( 'Header NavIcon Style', 'pass-max' ),
                    'description' => '',
                    'choices' => array(
                        'contemporary_navicon' => esc_html__( 'Contemporary', 'pass-max' ),
                        'contemporary_navicon_bordered' => esc_html__( 'Contemporary With Border', 'pass-max' ),
                        'standard_navicon' => esc_html__( 'Standard', 'pass-max' ),
                        'standard_navicon_bordered' => esc_html__( 'Standard With Border', 'pass-max' ),
                        //'hide_navicon' => esc_html__( 'Hide NavIcon', 'pass-max' ),
                    ),
                )
            );

            $wp_customise->add_setting(
                'productive_passmax_header_menu_more_icon',
                array(
                    'type' => 'theme_mod',
                    'default' => 'angled',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_select'),
                )
            );
            $wp_customise->add_control(
                'productive_passmax_header_menu_more_icon',
                array(
                    'type' => 'select',
                    'priority' => 100,
                    'section' => 'productive_passmax_theme_header',
                    'label' => esc_html__( 'Header Menu more icon style', 'pass-max' ),
                    'description' => '',
                    'choices' => array(
                        'angled' => esc_html__( 'Angled bracket (>)', 'pass-max' ),
                        'plus_minus' => esc_html__( 'Plus and Minus (+/--)', 'pass-max' ),
                    ),
                )
            );
            
            // add a setting for productive_passmax_header_megamenu_option control, below.
            $wp_customise->add_setting(
                'productive_passmax_header_megamenu_option',
                array(
                    'type' => 'theme_mod',
                    'default' => 'default',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_select'),
                )
            );
            $wp_customise->add_control(
                'productive_passmax_header_megamenu_option',
                array(
                    'type' => 'select',
                    'priority' => 110,
                    'section' => 'productive_passmax_theme_header',
                    'label' => esc_html__( 'Select Header Menu Option', 'pass-max' ),
                    'description' => esc_html__( 'Select third party mega menu, if a mega menu is implemented to avoid loading the default menu scripts.', 'pass-max' ),
                    'choices' => array(
                        'default' => esc_html__( 'Theme&#39;s Default Menu', 'pass-max' ),
                        'megamenu' => esc_html__( 'Third Party Mega Menu', 'pass-max' ),
                    ),
                )
            );
            
        }
        
        
    } // End of class.
    
    // add hook for the class.
    add_action( 'customize_register', array( 'Productive_Theme_Customiser_Header', 'register' ) );
    
} // End of if class exists



/**
 * Method productive_passmax_header_style.
 *
 * @param string $class ''.
 */
function productive_passmax_header_style( $class = '' ) {
    return get_theme_mod( 'productive_passmax_header_style', productive_global_get_theme_default_base_header_style() );
}        

/**
 * Method productive_passmax_enable_header_home_header_as_overlay.
 *
 * @param string $class ''.
 */
function productive_passmax_enable_header_home_header_as_overlay( $class = '' ) {
    return get_theme_mod( 'productive_passmax_enable_header_home_header_as_overlay', 'pro_std_home_header' );
}

/**
 * 
 * Method productive_passmax_the_logo_size.
 *
 * @param string $class ''.
 */
function productive_passmax_the_logo_size( $class = '' ) {
    return get_theme_mod( 'productive_passmax_the_logo_size', PRODUCTIVE_PASSMAX_THE_LOGO_WIDTH_DEFAULT );
}

/**
 * 
 * Method productive_passmax_the_logo_vertical_spacing.
 *
 * @param string $class ''.
 */
function productive_passmax_the_logo_vertical_spacing( $class = '' ) {
    return get_theme_mod( 'productive_passmax_the_logo_vertical_spacing', 10 );
}

/**
 * Method productive_passmax_enable_header_search.
 *
 * @param string $class ''.
 */
function productive_passmax_enable_header_search( $class = '' ) {
    return get_theme_mod( 'productive_passmax_enable_header_search', true );
}
add_action( 'productive_passmax_display_enable_header_search', 'productive_passmax_enable_header_search' );

/**
 * Method productive_passmax_enable_header_account.
 *
 * @param string $class ''.
 */
function productive_passmax_enable_header_account( $class = '' ) {
    return get_theme_mod( 'productive_passmax_enable_header_account', true );
}

/**
 * Method productive_passmax_enable_header_account_as_popup.
 *
 * @param string $class ''.
 */
function productive_passmax_enable_header_account_as_popup( $class = '' ) {
    return get_theme_mod( 'productive_passmax_enable_header_account_as_popup', true );
}

/**
 * 
 * Method productive_passmax_all_header_icons_size.
 *
 * @param string $class ''.
 */
function productive_passmax_all_header_icons_size( $class = '' ) {
    return get_theme_mod( 'productive_passmax_all_header_icons_size', 30 );
}

/**
 * Method productive_passmax_header_navicon_style.
 *
 * @param string $class ''.
 */
function productive_passmax_header_navicon_style( $class = '' ) {
    return get_theme_mod( 'productive_passmax_header_navicon_style', 'standard_navicon' );
}

/**
 * Method productive_passmax_header_menu_more_icon.
 *
 * @param string $class ''.
 */
function productive_passmax_header_menu_more_icon( $class = '' ) {
    return get_theme_mod( 'productive_passmax_header_menu_more_icon', 'angled' );
}

/**
 * Method productive_passmax_header_megamenu_option.
 *
 * @param string $class ''.
 */
function productive_passmax_header_megamenu_option( $class = '' ) {
    return get_theme_mod( 'productive_passmax_header_megamenu_option', 'default' );
}