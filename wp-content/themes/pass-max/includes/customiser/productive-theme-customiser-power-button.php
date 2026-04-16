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


if ( ! class_exists( 'Productive_Theme_Customiser_Homepage_Power_Button' ) ) {
    
    /**
     * Productive_Theme_Customiser_Homepage_Power_Button
     * Theme Customiser Class
     */
    class Productive_Theme_Customiser_Homepage_Power_Button extends Productive_Theme_Customiser_Common {
        
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
                'productive_passmax_homepage_power_button_options',
                array(
                    'title' => esc_html__( 'Power Button', 'pass-max' ),
                    'description' => esc_html__( 'Power Button Styles', 'pass-max' ),
                    'panel' => 'productive_passmax_theme_options',
                    'priority' => 14,
                    'capability' => 'edit_theme_options',
                )
                );
            
            
            // add a setting for productive_passmax_power_button_title, below.
            $wp_customise->add_setting(
                'productive_passmax_power_button_title',
                array(
                    'type' => 'theme_mod',
                    'default' => esc_html__( 'Get Started', 'pass-max' ),
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_no_html'),
                )
                );
            // add control..
            $wp_customise->add_control(
                'productive_passmax_power_button_title',
                array(
                    'type' => 'text',
                    'priority' => 10,
                    'section' => 'productive_passmax_homepage_power_button_options',
                    'label' => esc_html__( 'Button Text', 'pass-max' ),
                    'description' => '',
                )
                );
            
            // add a setting for productive_passmax_power_button_url, below.
            $wp_customise->add_setting(
                'productive_passmax_power_button_url',
                array(
                    'type' => 'theme_mod',
                    'default' => '#',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_url'),
                )
                );
            // add control..
            $wp_customise->add_control(
                'productive_passmax_power_button_url',
                array(
                    'type' => 'text',
                    'priority' => 20,
                    'section' => 'productive_passmax_homepage_power_button_options',
                    'label' => esc_html__( 'Url', 'pass-max' ),
                    'description' => esc_html__( 'Full Url starting with &#39;http&#39; (leave empty to disable button)', 'pass-max' ),
                )
                );
            
            // add a setting for productive_passmax_power_button_font_color control, below.
            $wp_customise->add_setting(
                'productive_passmax_power_button_font_color',
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
                    'productive_passmax_power_button_font_color',
                    array(
                        'priority' => 30,
                        'label' => esc_html__( 'Text Color', 'pass-max' ),
                        'section' => 'productive_passmax_homepage_power_button_options',
                    )
                    )
                );
            
            // add a setting for productive_passmax_power_button_font_color_hover control, below.
            $wp_customise->add_setting(
                'productive_passmax_power_button_font_color_hover',
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
                    'productive_passmax_power_button_font_color_hover',
                    array(
                        'priority' => 32,
                        'label' => esc_html__( 'Text Color (on hover)', 'pass-max' ),
                        'section' => 'productive_passmax_homepage_power_button_options',
                    )
                    )
                );
            
            // add a setting for productive_passmax_power_button_bg_color control, below.
            $wp_customise->add_setting(
                'productive_passmax_power_button_bg_color',
                array(
                    'type' => 'theme_mod',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'default'              => '#9d153e',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_color'),
                )
                );
            
            $wp_customise->add_control(
                new WP_Customize_Color_Control(
                    $wp_customise,
                    'productive_passmax_power_button_bg_color',
                    array(
                        'priority' => 40,
                        'label' => esc_html__( 'Background Color', 'pass-max' ),
                        'section' => 'productive_passmax_homepage_power_button_options',
                    )
                    )
                );
            
            // add a setting for productive_passmax_power_button_bg_color_hover control, below.
            $wp_customise->add_setting(
                'productive_passmax_power_button_bg_color_hover',
                array(
                    'type' => 'theme_mod',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'default'              => '#a40564',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_color'),
                )
                );
            
            $wp_customise->add_control(
                new WP_Customize_Color_Control(
                    $wp_customise,
                    'productive_passmax_power_button_bg_color_hover',
                    array(
                        'priority' => 42,
                        'label' => esc_html__( 'Background Color (on hover)', 'pass-max' ),
                        'section' => 'productive_passmax_homepage_power_button_options',
                    )
                    )
                );
            
            // add a setting for productive_passmax_power_button_shape control, below.
            $wp_customise->add_setting(
                'productive_passmax_power_button_shape',
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
                'productive_passmax_power_button_shape',
                array(
                    'type' => 'select',
                    'priority' => 50,
                    'section' => 'productive_passmax_homepage_power_button_options',
                    'label' => esc_html__( 'Button Shape', 'pass-max' ),
                    'description' => '',
                    'choices' => productive_global_get_button_radius_shapes(),
                )
            );
            
            
            
            if ( function_exists('pass_addons_is_active') ) {
                // add a setting for productive_passmax_power_button_font_family control, below.
                $wp_customise->add_setting(
                    'productive_passmax_power_button_font_family',
                    array(
                        'type' => 'theme_mod',
                        'default' => '',
                        'theme_supports' => '',
                        'transport' => 'refresh',
                        'capability' => 'edit_theme_options',
                        'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_select'),
                    )
                );

                // add control...
                $wp_customise->add_control(
                    'productive_passmax_power_button_font_family',
                    array(
                        'type' => 'select',
                        'priority' => 70,
                        'section' => 'productive_passmax_homepage_power_button_options',
                        'label' => esc_html__( 'Font Family', 'pass-max' ),
                        'description' => '',
                        'choices' => pass_addons_customiser_get_font_families(),
                    )
                );

                // add a setting for productive_passmax_power_button_font_style control, below.
                $wp_customise->add_setting(
                    'productive_passmax_power_button_font_style',
                    array(
                        'type' => 'theme_mod',
                        'default' => '',
                        'theme_supports' => '',
                        'transport' => 'refresh',
                        'capability' => 'edit_theme_options',
                        'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_select'),
                    )
                );

                // add control...
                $wp_customise->add_control(
                    'productive_passmax_power_button_font_style',
                    array(
                        'type' => 'select',
                        'priority' => 80,
                        'section' => 'productive_passmax_homepage_power_button_options',
                        'label' => esc_html__( 'Font Style', 'pass-max' ),
                        'description' => '',
                        'choices' => pass_addons_customiser_get_font_styles()
                    )
                );

                // add a setting for productive_passmax_power_button_font_size control, below.
                $wp_customise->add_setting(
                    'productive_passmax_power_button_font_size',
                    array(
                        'type' => 'theme_mod',
                        'default' => '',
                        'theme_supports' => '',
                        'transport' => 'refresh',
                        'capability' => 'edit_theme_options',
                        'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_float'),
                    )
                );
                $wp_customise->add_control(
                    'productive_passmax_power_button_font_size', 
                    array(
                        'type' => 'number',
                        'priority' => 90,
                        'section' => 'productive_passmax_homepage_power_button_options',
                        'label' => esc_html__( 'Font Size (rem)', 'pass-max' ),
                        'description' => esc_html__( 'This size is scaled relatively across the various elements of the website.', 'pass-max' ),
                        'input_attrs' => array(
                            'min' => PASS_ADDONS_FONT_SIZE_MIN,
                            'max' => PASS_ADDONS_FONT_SIZE_MAX,
                            'step' => PASS_ADDONS_FONT_SIZE_STEP,
                        ),
                    )
                );

                // add a setting for productive_passmax_power_button_font_weight control, below.
                $wp_customise->add_setting(
                    'productive_passmax_power_button_font_weight',
                    array(
                        'type' => 'theme_mod',
                        'default' => '',
                        'theme_supports' => '',
                        'transport' => 'refresh',
                        'capability' => 'edit_theme_options',
                        'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_select'),
                    )
                );

                // add control...
                $wp_customise->add_control(
                    'productive_passmax_power_button_font_weight',
                    array(
                        'type' => 'select',
                        'priority' => 100,
                        'section' => 'productive_passmax_homepage_power_button_options',
                        'label' => esc_html__( 'Font Weight', 'pass-max' ),
                        'description' => '',
                        'choices' => pass_addons_customiser_get_font_weights(),
                    )
                );

                // add a setting for productive_passmax_power_button_line_height control, below.
                $wp_customise->add_setting(
                    'productive_passmax_power_button_line_height',
                    array(
                        'type' => 'theme_mod',
                        'default' => '',
                        'theme_supports' => '',
                        'transport' => 'refresh',
                        'capability' => 'edit_theme_options',
                        'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_float'),
                    )
                );

                // add control...
                $wp_customise->add_control(
                    'productive_passmax_power_button_line_height',
                    array(
                        'type' => 'number',
                        'priority' => 110,
                        'section' => 'productive_passmax_homepage_power_button_options',
                        'label' => esc_html__( 'Line Height', 'pass-max' ),
                        'description' => '',
                        'input_attrs' => array(
                            'min' => PASS_ADDONS_LINE_HEIGHT_SIZE_MIN,
                            'max' => PASS_ADDONS_LINE_HEIGHT_SIZE_MAX,
                            'step' => PASS_ADDONS_LINE_HEIGHT_SIZE_STEP,
                        ),
                    )
                );

                // add a setting for productive_passmax_power_button_text_transform control, below.
                $wp_customise->add_setting(
                    'productive_passmax_power_button_text_transform',
                    array(
                        'type' => 'theme_mod',
                        'default' => '',
                        'theme_supports' => '',
                        'transport' => 'refresh',
                        'capability' => 'edit_theme_options',
                        'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_select'),
                    )
                );

                // add control...
                $wp_customise->add_control(
                    'productive_passmax_power_button_text_transform',
                    array(
                        'type' => 'select',
                        'priority' => 120,
                        'section' => 'productive_passmax_homepage_power_button_options',
                        'label' => esc_html__( 'Text Transformation', 'pass-max' ),
                        'description' => '',
                        'choices' => pass_addons_customiser_get_font_transforms()
                    )
                );

                // add a setting for productive_passmax_power_button_text_decoration control, below.
                $wp_customise->add_setting(
                    'productive_passmax_power_button_text_decoration',
                    array(
                        'type' => 'theme_mod',
                        'default' => '',
                        'theme_supports' => '',
                        'transport' => 'refresh',
                        'capability' => 'edit_theme_options',
                        'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_select'),
                    )
                );

                // add control...
                $wp_customise->add_control(
                    'productive_passmax_power_button_text_decoration',
                    array(
                        'type' => 'select',
                        'priority' => 130,
                        'section' => 'productive_passmax_homepage_power_button_options',
                        'label' => esc_html__( 'Text Decoration', 'pass-max' ),
                        'description' => '',
                        'choices' => pass_addons_customiser_get_font_decorations()
                    )
                );
            }
        }
        
    } // End of class.
    
    if ( productive_passmax_power_button_required() ) {
        // add hook for the class.
        add_action( 'customize_register', array( 'Productive_Theme_Customiser_Homepage_Power_Button', 'register' ) );
    }
    
} // End of if class exists

/**
 * Method productive_passmax_power_button_title.
 *
 * @param string $class ''.
 */
function productive_passmax_power_button_title( $class = '' ) {
    $productive_passmax_theme_power_button_icon_args = array(
        'i'     => 'long-arrow-right', 
        'w'     => 16,
        'h'     => 16,
        'css'   => '',
        'svg_css'   => ''
    );
    $theme_mod_value = get_theme_mod( 'productive_passmax_power_button_title', esc_html__( 'Get Started', 'pass-max' ) );
    $cta_url = productive_passmax_power_button_url();
    if ( $theme_mod_value != '' && $cta_url != '' ) {
        $theme_mod_value = wp_specialchars_decode(stripslashes($theme_mod_value) );
    ?>
        <a aria-label="<?php echo esc_attr($theme_mod_value); ?>" 
           class="header-power-button-anchor <?php echo esc_attr($class); ?> productiveminds-alignable-container flexed-no-wrap width-autoed place-items-center place-content-center column-gap-10px"
           href="<?php echo esc_url($cta_url); ?>">
            <?php echo esc_html($theme_mod_value) ?>
            <?php echo wp_kses( productiveminds_get_svg_icon($productive_passmax_theme_power_button_icon_args), 'wp_kses_allowed_html' ); ?>
        </a>
    <?php
    }
} 
add_action( 'productive_passmax_display_power_button_title', 'productive_passmax_power_button_title' );

/**
 * Method productive_passmax_power_button_url.
 *
 * @param string $class ''.
 */
function productive_passmax_power_button_url( $class = '' ) {
    // text html
    $theme_mod_value = get_theme_mod( 'productive_passmax_power_button_url', '#' );
    return wp_specialchars_decode( esc_url( $theme_mod_value ) );
}

/**
 * Method productive_passmax_power_button_font_color.
 *
 * @param string $class ''.
 */
function productive_passmax_power_button_font_color( $class = '' ) {
    return get_theme_mod( 'productive_passmax_power_button_font_color', '#ffffff' );
}

/**
 * Method productive_passmax_power_button_font_color_hover.
 *
 * @param string $class ''.
 */
function productive_passmax_power_button_font_color_hover( $class = '' ) {
    return get_theme_mod( 'productive_passmax_power_button_font_color_hover', '#ffffff' );
}

/**
 * Method productive_passmax_power_button_bg_color.
 *
 * @param string $class ''.
 */
function productive_passmax_power_button_bg_color( $class = '' ) {
    return get_theme_mod( 'productive_passmax_power_button_bg_color', '#9d153e' );
}

/**
 * Method productive_passmax_power_button_bg_color_hover.
 *
 * @param string $class ''.
 */
function productive_passmax_power_button_bg_color_hover( $class = '' ) {
    return get_theme_mod( 'productive_passmax_power_button_bg_color_hover', '#a40564' );
}

/**
 * Method productive_passmax_power_button_shape.
 *
 * @param string $class ''.
 */
function productive_passmax_power_button_shape( $class = '' ) {
    return get_theme_mod( 'productive_passmax_power_button_shape', 'ellipse' );
}

/**
 * Method productive_passmax_power_button_font_family.
 *
 * @param string $class ''.
 */
function productive_passmax_power_button_font_family( $class = '' ) {
    return get_theme_mod( 'productive_passmax_power_button_font_family', '' );
}

/**
 * Method productive_passmax_power_button_font_style.
 *
 * @param string $class ''.
 */
function productive_passmax_power_button_font_style( $class = '' ) {
    return get_theme_mod( 'productive_passmax_power_button_font_style', '' );
}

/**
 * Method productive_passmax_power_button_font_size.
 *
 * @param string $class ''.
 */
function productive_passmax_power_button_font_size( $class = '' ) {
    return get_theme_mod( 'productive_passmax_power_button_font_size', '' );
}

/**
 * Method productive_passmax_power_button_font_weight.
 *
 * @param string $class ''.
 */
function productive_passmax_power_button_font_weight( $class = '' ) {
    return get_theme_mod( 'productive_passmax_power_button_font_weight', '' );
}

/**
 * Method productive_passmax_power_button_line_height.
 *
 * @param string $class ''.
 */
function productive_passmax_power_button_line_height( $class = '' ) {
    return get_theme_mod( 'productive_passmax_power_button_line_height', '' );
}

/**
 * Method productive_passmax_power_button_text_transform.
 *
 * @param string $class ''.
 */
function productive_passmax_power_button_text_transform( $class = '' ) {
    return get_theme_mod( 'productive_passmax_power_button_text_transform', '' );
}

/**
 * Method productive_passmax_power_button_text_decoration.
 *
 * @param string $class ''.
 */
function productive_passmax_power_button_text_decoration( $class = '' ) {
    return get_theme_mod( 'productive_passmax_power_button_text_decoration', '' );
}
