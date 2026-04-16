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


if ( ! class_exists( 'Productive_Theme_Customiser_Footer_Copyright' ) ) {
    
    /**
     * Productive_Theme_Customiser_Footer_Copyright
     * Theme Customiser Class
     */
    class Productive_Theme_Customiser_Footer_Copyright extends Productive_Theme_Customiser_Common {
        
        /**
         * Register the customizer
         *
         * @param WP_Customize_Manager $wp_customise param.
         */
        public static function register( $wp_customise ) {
            
            $footer_section_desc = esc_html__( 'Customize Footer Copyright Options ', 'pass-max' );
            $wp_customise->add_section(
                'productive_passmax_footer_copyright_options',
                array(
                    'title' => esc_html__( 'Footer Copyright Options', 'pass-max' ),
                    'description' => $footer_section_desc,
                    'panel' => 'productive_passmax_theme_options',
                    'priority' => 150,
                    'capability' => 'edit_theme_options',
                )
                );
            
            // add a setting for productive_passmax_enable_footer_copyright control, below.
            $wp_customise->add_setting(
                'productive_passmax_enable_footer_copyright',
                array(
                    'type' => 'theme_mod',
                    'default' => true,
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_checkbox'),
                )
                );
            // add control.
            $wp_customise->add_control(
                'productive_passmax_enable_footer_copyright',
                array(
                    'type' => 'checkbox',
                    'priority' => 10,
                    'section' => 'productive_passmax_footer_copyright_options',
                    'label' => esc_html__( 'Show Footer Copyright?', 'pass-max' ),
                    'description' => esc_html__( 'Display the copyright section (below footer)?', 'pass-max' ),
                    // 'active_callback' => 'is_front_page',
                )
                );
            
            // add a setting for productive_passmax_footer_copyright_textarea control, below.
            $wp_customise->add_setting(
                'productive_passmax_footer_copyright_textarea',
                array(
                    'type' => 'theme_mod',
                    'default' => productive_passmax_get_footer_copyright_textarea_placeholder(),
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_html'),
                )
                );
                // add control..
                $wp_customise->add_control(
                    'productive_passmax_footer_copyright_textarea',
                    array(
                        'type' => 'textarea',
                        'priority' => 20,
                        'section' => 'productive_passmax_footer_copyright_options',
                        'label' => esc_html__( 'Footer copyright content', 'pass-max' ),
                        'description' => esc_html__( 'Leave blank for no copyright info', 'pass-max' ),
                    )
                    );
            
            $wp_customise->add_setting(
                'productive_passmax_footer_below_copyright_textarea',
                array(
                    'type' => 'theme_mod',
                    'default' => '',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_html'),
                )
                );
                // add control..
                $wp_customise->add_control(
                    'productive_passmax_footer_below_copyright_textarea',
                    array(
                        'type' => 'textarea',
                        'priority' => 100,
                        'section' => 'productive_passmax_footer_copyright_options',
                        'label' => esc_html__( 'Display Content Below Copyright', 'pass-max' ),
                        'description' => esc_html__( 'Leave blank, if there is nothing to display.', 'pass-max' ),
                    )
                    );
                
        }
        
        
    } // End of class.
    
    // add hook for the class.
    add_action( 'customize_register', array( 'Productive_Theme_Customiser_Footer_Copyright', 'register' ) );
    
} // End of if class exists

/**
 * Method productive_passmax_enable_footer_copyright.
 *
 * @param string $class ''.
 */
function productive_passmax_enable_footer_copyright( $class = '' ) {
    $theme_mod_enabled = get_theme_mod( 'productive_passmax_enable_footer_copyright', true );
    if ( $theme_mod_enabled ) {
?>
    <div class="site-container-copyright">
        <div class="copyright">
            <div class="productiveminds-alignable-container flexed-no-wrap align-items-center align-content-center justify-content-center justify-items-center column-gap-50px row-gap-5px">
                <div class="">
                    <?php echo wp_specialchars_decode( stripslashes(productive_passmax_footer_copyright_textarea()) ) ?>
                </div>
                <div class="site-copyright-menu">
                    <?php do_action( 'productive_passmax_display_secondary_nav', 'site-footer-secondary-menu-nav-box' ); ?>
                </div>
            </div>
        </div>
    </div>
<?php
    }
}
add_action( 'productive_passmax_display_enable_footer_copyright', 'productive_passmax_enable_footer_copyright' );

/**
 * Method productive_passmax_footer_copyright_textarea.
 *
 * @param string $class ''.
 */
function productive_passmax_footer_copyright_textarea( $class = '' ) {
    $footer_copyright_copy = productive_passmax_get_footer_copyright_textarea_placeholder();
    $footer_copyright = get_theme_mod( 'productive_passmax_footer_copyright_textarea', $footer_copyright_copy );
    return $footer_copyright;
}
add_action( 'productive_passmax_display_footer_copyright_textarea', 'productive_passmax_footer_copyright_textarea' );

function productive_passmax_get_footer_copyright_textarea_placeholder() {
    return esc_html__( '&copy; ', 'pass-max' ) . '<a class="underlined" target="_blank" href="' . esc_url( PRODUCTIVE_PASSMAX_THEME_FEATURES_OR_BUY_URL ) . '">'. PRODUCTIVE_PASSMAX_CURRENT_THEME_NAME .'</a>' . esc_html__( ' WordPress Theme ', 'pass-max' );
}

/**
 * Method productive_passmax_enable_footer_sitename.
 *
 * @param string $class ''.
 */
function productive_passmax_footer_below_copyright_textarea( $class = '' ) {
    $content = get_theme_mod( 'productive_passmax_footer_below_copyright_textarea', '' );
    if ( !empty( $content ) ) {
    ?>
        <div class="site-body-container_box_full site-body-container_box_below_copyright_copy <?php echo esc_attr($class); ?>">
            <?php do_action('productive_global_render_content_wrapper_standard_top'); ?>
                <div class="site-container-below_copyright">
                    <div class="below_copyright">
                        <div class="productiveminds-alignable-container align-items-center align-content-center">
                            <div>
                                <?php echo wp_specialchars_decode( stripslashes( $content ) ) ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php do_action('productive_global_render_content_wrapper_standard_bottom'); ?>
        </div>
    <?php
    }
}
add_action( 'productive_global_render_footer_below_copyright_textarea', 'productive_passmax_footer_below_copyright_textarea' );
