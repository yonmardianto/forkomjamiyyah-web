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


if ( ! class_exists( 'Productive_Theme_Customiser_Global_Popup' ) ) {
    
    /**
     * Productive_Theme_Customiser_Global_Popup
     * Theme Customiser Class
     */
    class Productive_Theme_Customiser_Global_Popup extends Productive_Theme_Customiser_Common {
        
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
                'productive_passmax_theme_global_popup',
                array(
                    'title' => esc_html__( 'Off Canvas Options', 'pass-max' ),
                    'description' => esc_html__( 'Off Canvas Options', 'pass-max' ),
                    'panel' => 'productive_passmax_theme_options',
                    'priority' => 20,
                    'capability' => 'edit_theme_options',
                )
                );
            
            $wp_customise->add_setting(
                'productive_passmax_off_canvas_logo',
                array(
                    'type' => 'theme_mod',
                    'default' => false,
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
                    'productive_passmax_off_canvas_logo',
                    array(
                        'priority' => 55,
                        'section' => 'productive_passmax_theme_global_popup',
                        'label' => esc_html__( 'Off Canvas Logo', 'pass-max' ),
                    )
                    )
                );
                
            $wp_customise->add_setting(
                'productive_passmax_off_canvas_logo_size',
                array(
                    'type' => 'theme_mod',
                    'default' => 40,
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_absint'),
                )
            );
            $wp_customise->add_control(
                'productive_passmax_off_canvas_logo_size',
                array(
                    'type' => 'number',
                    'priority' => 56,
                    'section' => 'productive_passmax_theme_global_popup',
                    'label' => esc_html__( 'Off Canvas Logo Width (px)', 'pass-max' ),
                    'description' => esc_html__( 'Increases or decreases width in px - height adjusts automatically.', 'pass-max' ),
                    'input_attrs' => array(
                        'min' => 25,
                        'max' => 200,
                        'step' => 5,
                    ),
                )
            );
            
            // add a setting for productive_passmax_enable_global_popup_search control, below.
            $wp_customise->add_setting(
                'productive_passmax_enable_global_popup_search',
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
                'productive_passmax_enable_global_popup_search',
                array(
                    'type' => 'checkbox',
                    'priority' => 60,
                    'section' => 'productive_passmax_theme_global_popup',
                    'label' => esc_html__( 'Display Search Box?', 'pass-max' ),
                    'description' => '',
                    // 'active_callback' => 'is_front_page',
                )
                );
            
            // add a setting for productive_passmax_enable_global_popup_account control, below.
            $wp_customise->add_setting(
                'productive_passmax_enable_global_popup_account',
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
                'productive_passmax_enable_global_popup_account',
                array(
                    'type' => 'checkbox',
                    'priority' => 70,
                    'section' => 'productive_passmax_theme_global_popup',
                    'label' => esc_html__( 'Display My Account Icon?', 'pass-max' ),
                    'description' => '',
                    // 'active_callback' => 'is_front_page',
                )
                );

            // add a setting for productive_passmax_enable_global_popup_cart control, below.
            $wp_customise->add_setting(
                'productive_passmax_enable_global_popup_cart',
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
                'productive_passmax_enable_global_popup_cart',
                array(
                    'type' => 'checkbox',
                    'priority' => 80,
                    'section' => 'productive_passmax_theme_global_popup',
                    'label' => esc_html__( 'Display Mini-Cart Icon?', 'pass-max' ),
                    'description' => esc_html__( 'Display Cart icon in the header', 'pass-max' ),
                    // 'active_callback' => 'is_front_page',
                )
                );

                // add a setting for productive_passmax_enable_global_popup_wishlist control, below.
            $wp_customise->add_setting(
                    'productive_passmax_enable_global_popup_wishlist',
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
                    'productive_passmax_enable_global_popup_wishlist',
                    array(
                        'type' => 'checkbox',
                        'priority' => 90,
                        'section' => 'productive_passmax_theme_global_popup',
                        'label' => esc_html__('Display Wishlist Icon?', 'pass-max'),
                        'description' => esc_html__('Display Wishlist icon in the header', 'pass-max'),
                    // 'active_callback' => 'is_front_page',
                    )
            );

            // add a setting for productive_passmax_enable_global_popup_compare control, below.
            $wp_customise->add_setting(
                    'productive_passmax_enable_global_popup_compare',
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
                    'productive_passmax_enable_global_popup_compare',
                    array(
                        'type' => 'checkbox',
                        'priority' => 100,
                        'section' => 'productive_passmax_theme_global_popup',
                        'label' => esc_html__('Display Compare Icon?', 'pass-max'),
                        'description' => esc_html__('Display product compare icon in the header', 'pass-max'),
                    // 'active_callback' => 'is_front_page',
                    )
            );

            if ( function_exists( 'productiveminds_theme_extra_is_active' ) || productive_passmax_power_button_required() ) {
                $wp_customise->add_setting(
                        'productive_passmax_enable_global_popup_power_button',
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
                        'productive_passmax_enable_global_popup_power_button',
                        array(
                            'type' => 'checkbox',
                            'priority' => 110,
                            'section' => 'productive_passmax_theme_global_popup',
                            'label' => esc_html__('Display Power Button?', 'pass-max'),
                            'description' => esc_html__('Note, this option is only effective, if power button is part of the current header design.', 'pass-max'),
                        // 'active_callback' => 'is_front_page',
                        )
                );
            }
            
            // add a setting for productive_passmax_enable_global_popup_fullscreen control, below.
            $wp_customise->add_setting(
                'productive_passmax_enable_global_popup_fullscreen',
                array(
                    'type' => 'theme_mod',
                    'default' => 'default_height',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_select'),
                )
            );
            $wp_customise->add_control(
                'productive_passmax_enable_global_popup_fullscreen',
                array(
                    'type' => 'select',
                    'priority' => 200,
                    'section' => 'productive_passmax_theme_global_popup',
                    'label' => esc_html__( 'Popup Height', 'pass-max' ),
                    'description' => esc_html__( 'Select the preferred height of the popup.', 'pass-max' ),
                    'choices' => array(
                        'default_height' => esc_html__( 'Default Height', 'pass-max' ),
                        'fullscreen_height' => esc_html__( 'Fullscreen Height', 'pass-max' ),
                    ),
                )
            );
            
        }
        
        
    } // End of class.
    
    // add hook for the class.
    add_action( 'customize_register', array( 'Productive_Theme_Customiser_Global_Popup', 'register' ) );
    
} // End of if class exists



/**
 * Method productive_passmax_global_popup_style.
 *
 * @param string $class ''.
 */
function productive_passmax_global_popup_style( $class = '' ) {
    return get_theme_mod( 'productive_passmax_global_popup_style', PRODUCTIVE_PASSMAX_CURRENT_THEME_TEXT_DOMAIN );
}

/**
 * Method productive_passmax_global_popup_colour_mode.
 *
 * @param string $class ''.
 */
function productive_passmax_global_popup_colour_mode( $class = '' ) {
    return get_theme_mod( 'productive_passmax_global_popup_colour_mode', 'global_popup_colour_mode_dark' );
}

/**
 * Method productive_passmax_off_canvas_logo.
 *
 * @param string $class ''.
 */
function productive_passmax_off_canvas_logo() {
    return get_theme_mod( 'productive_passmax_off_canvas_logo', false );
}

function productive_passmax_render_off_canvas_logo( $class = '' ) {
    $thumbnail_id = productive_passmax_off_canvas_logo();
    if ( is_numeric($thumbnail_id) && intval($thumbnail_id) ) {
        $thumbnail_url = productive_global_get_attachment_url_by_attachment_id( $thumbnail_id, '' );
        $logo_size = productive_passmax_off_canvas_logo_size();
        ?>
        <div class="<?php echo esc_attr( $class ); ?>">
            <a href="<?php echo esc_url( home_url() ); ?>">
                <img class="custom-logo" src="<?php echo esc_url( $thumbnail_url ); ?>" width="<?php echo esc_attr($logo_size); ?>px" height="auto" alt="<?php echo get_bloginfo( 'name', 'display' ); ?>" />
            </a>
        </div>
        <?php 
    } else {
        productive_passmax_the_custom_logo();
    }
}
add_action( 'productive_passmax_display_off_canvas_logo', 'productive_passmax_render_off_canvas_logo' );

/**
 * 
 * Method productive_passmax_off_canvas_logo_size.
 *
 * @param string $class ''.
 */
function productive_passmax_off_canvas_logo_size( $class = '' ) {
    return get_theme_mod( 'productive_passmax_off_canvas_logo_size', 40 );
}

/**
 * Method productive_passmax_enable_global_popup_search.
 *
 * @param string $class ''.
 */
function productive_passmax_enable_global_popup_search( $class = '' ) {
    return get_theme_mod( 'productive_passmax_enable_global_popup_search', true );
}
add_action( 'productive_passmax_display_enable_global_popup_search', 'productive_passmax_enable_global_popup_search' );

/**
 * Method productive_passmax_enable_global_popup_account.
 *
 * @param string $class ''.
 */
function productive_passmax_enable_global_popup_account( $class = '' ) {
    return get_theme_mod( 'productive_passmax_enable_global_popup_account', true );
}

/**
 * Method productive_passmax_enable_global_popup_cart.
 *
 * @param string $class ''.
 */
function productive_passmax_enable_global_popup_cart( $class = '' ) {
    return get_theme_mod( 'productive_passmax_enable_global_popup_cart', true );
}

/**
 * Method productive_passmax_enable_global_popup_wishlist.
 *
 * @param string $class ''.
 */
function productive_passmax_enable_global_popup_wishlist( $class = '' ) {
    return get_theme_mod( 'productive_passmax_enable_global_popup_wishlist', true );
}

/**
 * Method productive_passmax_enable_global_popup_compare.
 *
 * @param string $class ''.
 */
function productive_passmax_enable_global_popup_compare( $class = '' ) {
    return get_theme_mod( 'productive_passmax_enable_global_popup_compare', true );
}

/**
 * Method productive_passmax_enable_global_popup_power_button.
 *
 * @param string $class ''.
 */
function productive_passmax_enable_global_popup_power_button( $class = '' ) {
    if( productive_passmax_dispaly_power_button_in_global_popup() ) {
        return get_theme_mod( 'productive_passmax_enable_global_popup_power_button', true );
    } else {
        return false;
    }
}

/**
 * Method productive_passmax_enable_switch_language_global_popup.
 *
 * @param string $class ''.
 */
function productive_passmax_enable_switch_language_global_popup( $class = '' ) {
    return get_theme_mod( 'productive_passmax_enable_switch_language_global_popup', true );
}

/**
 * Method productive_passmax_enable_switch_currency_global_popup.
 *
 * @param string $class ''.
 */
function productive_passmax_enable_switch_currency_global_popup( $class = '' ) {
    return get_theme_mod( 'productive_passmax_enable_switch_currency_global_popup', true );
}

/**
 * Method productive_passmax_enable_global_popup_fullscreen.
 *
 * @param string $class ''.
 */
function productive_passmax_enable_global_popup_fullscreen( $class = '' ) {
    return get_theme_mod( 'productive_passmax_enable_global_popup_fullscreen', 'default_height' );
}