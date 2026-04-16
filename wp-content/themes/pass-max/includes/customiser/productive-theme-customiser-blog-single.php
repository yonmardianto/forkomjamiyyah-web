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


if ( ! class_exists( 'Productive_Theme_Customiser_Homepage_Blog_Single' ) ) {
    
    /**
     * Productive_Theme_Customiser_Homepage_Blog_Single
     * Theme Customiser Class
     */
    class Productive_Theme_Customiser_Homepage_Blog_Single extends Productive_Theme_Customiser_Common {
        
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
                'productive_passmax_homepage_blog_single_options',
                array(
                    'title' => esc_html__( 'Single Post Page', 'pass-max' ),
                    'description' => esc_html__( 'Single Post Page Options', 'pass-max' ),
                    'panel' => 'productive_passmax_theme_options',
                    'priority' => 110,
                    'capability' => 'edit_theme_options',
                )
                );
                
            // add a setting for productive_passmax_show_sidebars_always_in_blog_single control, below.
            $wp_customise->add_setting(
                'productive_passmax_show_sidebars_always_in_blog_single',
                array(
                    'type' => 'theme_mod',
                    'default' => 'two_columns_right',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_select'),
                )
            );
            $wp_customise->add_control(
                'productive_passmax_show_sidebars_always_in_blog_single',
                array(
                    'type' => 'select',
                    'priority' => 10,
                    'section' => 'productive_passmax_homepage_blog_single_options',
                    'label' => esc_html__( 'Blog Pages Layout', 'pass-max' ),
                    'description' => '',
                    'choices' => productive_global_get_theme_page_layout_options(),
                )
            );
            
            $wp_customise->add_setting(
                'productive_passmax_single_post_use_video',
                array(
                    'type' => 'theme_mod',
                    'default' => false,
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_checkbox'),
                )
                );
            $wp_customise->add_control(
                'productive_passmax_single_post_use_video',
                array(
                    'type' => 'checkbox',
                    'priority' => 11,
                    'section' => 'productive_passmax_homepage_blog_single_options',
                    'label' => esc_html__( 'If available, display video in the place of featured image?', 'pass-max' ),
                    // 'active_callback' => 'is_front_page',
                )
            );
                        
            // add a setting for productive_passmax_single_post_use_drop_caps control, below.
            $wp_customise->add_setting(
                'productive_passmax_single_post_use_drop_caps',
                array(
                    'type' => 'theme_mod',
                    'default' => false,
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_checkbox'),
                )
                );
            $wp_customise->add_control(
                'productive_passmax_single_post_use_drop_caps',
                array(
                    'type' => 'checkbox',
                    'priority' => 12,
                    'section' => 'productive_passmax_homepage_blog_single_options',
                    'label' => esc_html__( 'Use Drop Caps', 'pass-max' ),
                    'description' => esc_html__( 'Use Drop Caps on Post & Pages', 'pass-max' ),
                    // 'active_callback' => 'is_front_page',
                )
                );
            
            // add a setting for productive_passmax_single_post_content_container_width control, below.
            $wp_customise->add_setting(
                'productive_passmax_single_post_content_container_width',
                array(
                    'type' => 'theme_mod',
                    'default' => 800,
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_absint'),
                )
            );
            $wp_customise->add_control(
                'productive_passmax_single_post_content_container_width',
                array(
                    'type' => 'number',
                    'priority' => 20,
                    'section' => 'productive_passmax_homepage_blog_single_options',
                    'label' => esc_html__( 'Blog Page Content Area Width (px)', 'pass-max' ),
                    'description' => esc_html__( 'The width of the content area on Blog page. Only effective when using One-Column layout. Set to 1 for default width.', 'pass-max' ),
                    'input_attrs' => array(
                        'min' => 0,
                        'max' => 2000,
                        'step' => 20,
                    ),
                )
            );
            
            // add a setting for productive_passmax_single_post_content_alignment control, below.
            $wp_customise->add_setting(
                'productive_passmax_single_post_content_alignment',
                array(
                    'type' => 'theme_mod',
                    'default' => 'left',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_select'),
                )
            );
            $wp_customise->add_control(
                'productive_passmax_single_post_content_alignment',
                array(
                    'type' => 'select',
                    'priority' => 30,
                    'section' => 'productive_passmax_homepage_blog_single_options',
                    'label' => esc_html__( 'Blog Page Content Alignment', 'pass-max' ),
                    'description' => '',
                    'choices' => array(
                        'left' => esc_html__( 'Left', 'pass-max' ),
                        'right' => esc_html__( 'Rigt', 'pass-max' ),
                        'center' => esc_html__( 'Center', 'pass-max' ),
                        'justify' => esc_html__( 'Justify', 'pass-max' ),
                    ),
                )
            );
            
            // add a setting for productive_passmax_single_post_display_category control, below.
            $wp_customise->add_setting(
                'productive_passmax_single_post_display_category',
                array(
                    'type' => 'theme_mod',
                    'default' => '1',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_select'),
                )
            );
            $wp_customise->add_control(
                'productive_passmax_single_post_display_category',
                array(
                    'type' => 'select',
                    'priority' => 40,
                    'section' => 'productive_passmax_homepage_blog_single_options',
                    'label' => esc_html__( 'Display Category', 'pass-max' ),
                    'description' => '',
                    'choices' => productive_global_get_show_or_hide_options(),
                )
            );
            
            // add a setting for productive_passmax_single_post_display_author_name control, below.
            $wp_customise->add_setting(
                'productive_passmax_single_post_display_author_name',
                array(
                    'type' => 'theme_mod',
                    'default' => '1',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_select'),
                )
            );
            $wp_customise->add_control(
                'productive_passmax_single_post_display_author_name',
                array(
                    'type' => 'select',
                    'priority' => 50,
                    'section' => 'productive_passmax_homepage_blog_single_options',
                    'label' => esc_html__( 'Display Post Author Name', 'pass-max' ),
                    'description' => '',
                    'choices' => productive_global_get_show_or_hide_options(),
                )
            );
            
            // add a setting for productive_passmax_single_post_display_author_bio control, below.
            $wp_customise->add_setting(
                'productive_passmax_single_post_display_author_bio',
                array(
                    'type' => 'theme_mod',
                    'default' => 'author_bio_location_bottom',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_select'),
                )
            );
            $wp_customise->add_control(
                'productive_passmax_single_post_display_author_bio',
                array(
                    'type' => 'select',
                    'priority' => 60,
                    'section' => 'productive_passmax_homepage_blog_single_options',
                    'label' => esc_html__( 'Display Post Author Bio', 'pass-max' ),
                    'description' => '',
                    'choices' => array(
                        'author_bio_location_top' => esc_html__( 'Above Content', 'pass-max' ),
                        'author_bio_location_bottom' => esc_html__( 'Below Content', 'pass-max' ),
                        'author_bio_location_both' => esc_html__( 'Both Above and Below Content', 'pass-max' ),
                        'author_bio_location_hide' => esc_html__( 'Hide Blog Author Bio', 'pass-max' ),
                    ),
                )
            );
            
            $wp_customise->add_setting(
                'productive_passmax_single_post_author_bio_about_copy',
                array(
                    'type' => 'theme_mod',
                    'default' => esc_html__( 'About ', 'pass-max' ),
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_no_html'),
                )
                );
            // add control..
            $wp_customise->add_control(
                'productive_passmax_single_post_author_bio_about_copy',
                array(
                    'type' => 'text',
                    'priority' => 65,
                    'section' => 'productive_passmax_homepage_blog_single_options',
                    'label' => esc_html__( 'Copy Before Author Name ', 'pass-max' ),
                    'description' => esc_html__( 'Leave empty to disable copy before Author name.', 'pass-max' ),
                )
                );
            
            // add a setting for productive_passmax_single_post_display_author_bio_section_bg_color_scheme control, below.
            $wp_customise->add_setting(
                'productive_passmax_single_post_display_author_bio_section_bg_color_scheme',
                array(
                    'type' => 'theme_mod',
                    'default' => 'section_with_light_bg_dark_content',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_select'),
                )
            );
            $wp_customise->add_control(
                'productive_passmax_single_post_display_author_bio_section_bg_color_scheme',
                array(
                    'type' => 'select',
                    'priority' => 70,
                    'section' => 'productive_passmax_homepage_blog_single_options',
                    'label' => esc_html__( 'Author Bio Background Color Scheme', 'pass-max' ),
                    'description' => '',
                    'choices' => productive_global_get_colour_schemes_for_bg(),
                )
            );
            
            // add a setting for productive_passmax_single_post_display_which_date control, below.
            $wp_customise->add_setting(
                'productive_passmax_single_post_display_which_date',
                array(
                    'type' => 'theme_mod',
                    'default' => 'last_updated_date',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_select'),
                )
            );
            $wp_customise->add_control(
                'productive_passmax_single_post_display_which_date',
                array(
                    'type' => 'select',
                    'priority' => 80,
                    'section' => 'productive_passmax_homepage_blog_single_options',
                    'label' => esc_html__( 'Display Post Date', 'pass-max' ),
                    'description' => '',
                    'choices' => array(
                        'original_posted_date' => esc_html__( 'Original Posted Date', 'pass-max' ),
                        'last_updated_date' => esc_html__( 'Last Updated  Date', 'pass-max' ),
                        'hide_posted_date' => esc_html__( 'Hide Posted Date', 'pass-max' ),
                    ),
                )
            );
            
            $wp_customise->add_setting(
                'productive_passmax_single_post_disclaimer',
                array(
                    'type' => 'theme_mod',
                    'default' => esc_html__( '<span class="bolded">Customizable Disclaimer Section: </span>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'pass-max' ),
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_html'),
                )
                );
            // add control..
            $wp_customise->add_control(
                'productive_passmax_single_post_disclaimer',
                array(
                    'type' => 'textarea',
                    'priority' => 90,
                    'section' => 'productive_passmax_homepage_blog_single_options',
                    'label' => esc_html__( 'Disclaimer Copy', 'pass-max' ),
                    'description' => esc_html__( 'Leave empty to disable (html tags allowed)', 'pass-max' ),
                    // 'active_callback' => 'is_front_page'
                )
                );
            
            $wp_customise->add_setting(
                'productive_passmax_single_post_disclaimer_title',
                array(
                    'type' => 'theme_mod',
                    'default' => '',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_no_html'),
                )
                );
            // add control..
            $wp_customise->add_control(
                'productive_passmax_single_post_disclaimer_title',
                array(
                    'type' => 'text',
                    'priority' => 100,
                    'section' => 'productive_passmax_homepage_blog_single_options',
                    'label' => esc_html__( 'Disclaimer Title', 'pass-max' ),
                    'description' => esc_html__( 'Leave empty to disable disclaimer title.', 'pass-max' ),
                )
                );
            
            // add a setting for productive_passmax_single_post_disclaimer_section_bg_color_scheme control, below.
            $wp_customise->add_setting(
                'productive_passmax_single_post_disclaimer_section_bg_color_scheme',
                array(
                    'type' => 'theme_mod',
                    'default' => 'section_with_light_bg_dark_content',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_select'),
                )
            );
            $wp_customise->add_control(
                'productive_passmax_single_post_disclaimer_section_bg_color_scheme',
                array(
                    'type' => 'select',
                    'priority' => 110,
                    'section' => 'productive_passmax_homepage_blog_single_options',
                    'label' => esc_html__( 'Disclaimer Background Color Scheme', 'pass-max' ),
                    'description' => '',
                    'choices' => productive_global_get_colour_schemes_for_bg(),
                )
            );
            
        }
        
    } // End of class.
    
    // add hook for the class.
    add_action( 'customize_register', array( 'Productive_Theme_Customiser_Homepage_Blog_Single', 'register' ) );
    
} // End of if class exists





/**
 * Method productive_passmax_show_sidebars_always_in_blog_single.
 *
 * @param string $class ''.
 */
function productive_passmax_show_sidebars_always_in_blog_single( $class = '' ) {
    return get_theme_mod( 'productive_passmax_show_sidebars_always_in_blog_single', 'two_columns_right' );
}

/**
 * Method productive_passmax_single_post_use_video.
 *
 * @param string $class ''.
 */
function productive_passmax_single_post_use_video( $class = '' ) {
    return get_theme_mod( 'productive_passmax_single_post_use_video', false );
}

/**
 * Method productive_passmax_single_post_use_drop_caps.
 *
 * @param string $class ''.
 */
function productive_passmax_single_post_use_drop_caps( $class = '' ) {
    return get_theme_mod( 'productive_passmax_single_post_use_drop_caps', false );
}

/**
 * 
 * Method productive_passmax_single_post_content_container_width.
 *
 * @param string $class ''.
 */
function productive_passmax_single_post_content_container_width( $class = '' ) {
    return get_theme_mod( 'productive_passmax_single_post_content_container_width', 800 );
}

/**
 * Method productive_passmax_single_post_content_alignment.
 *
 * @param string $class ''.
 */
function productive_passmax_single_post_content_alignment( $class = '' ) {
    return get_theme_mod( 'productive_passmax_single_post_content_alignment', 'left' );
}

/**
 * Method productive_passmax_single_post_display_category.
 *
 * @param string $class ''.
 */
function productive_passmax_single_post_display_category( $class = '' ) {
    return get_theme_mod( 'productive_passmax_single_post_display_category', '1' );
}

/**
 * Method productive_passmax_single_post_display_author_name.
 *
 * @param string $class ''.
 */
function productive_passmax_single_post_display_author_name( $class = '' ) {
    return get_theme_mod( 'productive_passmax_single_post_display_author_name', '1' );
}

/**
 * Method productive_passmax_single_post_display_author_bio.
 *
 * @param string $class ''.
 */
function productive_passmax_single_post_display_author_bio( $class = '' ) {
    return get_theme_mod( 'productive_passmax_single_post_display_author_bio', 'author_bio_location_bottom' );
}

/**
 * Method productive_passmax_single_post_display_author_bio_top.
 *
 * @param string $class ''.
 */
function productive_passmax_single_post_display_author_bio_top() {
    $section_show_post_author = productive_passmax_single_post_display_author_bio();
    if( 'author_bio_location_top' == $section_show_post_author || 'author_bio_location_both' == $section_show_post_author ) {
        productive_passmax_render_post_author_in_single( 'top' );
    }
}
add_action( 'productive_passmax_display_single_post_author_bio_top', 'productive_passmax_single_post_display_author_bio_top' );

/**
 * Method productive_passmax_single_post_display_author_bio_bottom.
 *
 * @param string $class ''.
 */
function productive_passmax_single_post_display_author_bio_bottom() {
    $section_show_post_author = productive_passmax_single_post_display_author_bio();
    if( 'author_bio_location_bottom' == $section_show_post_author || 'author_bio_location_both' == $section_show_post_author ) {
        productive_passmax_render_post_author_in_single( 'top' );
    }
}
add_action( 'productive_passmax_display_single_post_author_bio_bottom', 'productive_passmax_single_post_display_author_bio_bottom' );

/**
 * Method productive_passmax_single_post_author_bio_about_copy.
 *
 * @param string $class ''.
 */
function productive_passmax_single_post_author_bio_about_copy() {
    return get_theme_mod( 'productive_passmax_single_post_author_bio_about_copy', esc_html__( 'About ', 'pass-max' ) );
}

/**
 * Method productive_passmax_single_post_display_author_bio_section_bg_color_scheme.
 *
 * @param string $class ''.
 */
function productive_passmax_single_post_display_author_bio_section_bg_color_scheme( $class = '' ) {
    return get_theme_mod( 'productive_passmax_single_post_display_author_bio_section_bg_color_scheme', 'section_with_light_bg_dark_content' );
}

/**
 * Method productive_passmax_single_post_display_which_date.
 *
 * @param string $class ''.
 */
function productive_passmax_single_post_display_which_date( $class = '' ) {
    return get_theme_mod( 'productive_passmax_single_post_display_which_date', 'last_updated_date' );
}

/**
 * Method productive_passmax_single_post_disclaimer.
 *
 * @param string $class ''.
 */
function productive_passmax_single_post_disclaimer( $theme_mod_value, $location ) {
    $disclaimer_title = productive_passmax_single_post_disclaimer_title();
    $colour_scheme_bg = productive_passmax_single_post_disclaimer_section_bg_color_scheme();
?>
    <div class="productiveminds_post_disclaimer_container std page_main_section_container <?php echo esc_attr($colour_scheme_bg); ?>">
        <?php if( !empty( $disclaimer_title ) ) { ?>
            <div class="productiveminds_post_disclaimer_title h5 productiveminds_no_top_margin"><?php echo wp_specialchars_decode( stripslashes($disclaimer_title) ); ?></div>
        <?php } ?>
        <div class="productiveminds_post_disclaimer_content <?php echo esc_attr($location); ?>">
            <?php echo wp_specialchars_decode( stripslashes($theme_mod_value) ); ?>
        </div>
    </div>
<?php
}

/**
 * Method productive_passmax_single_post_disclaimer_title.
 *
 * @param string $class ''.
 */
function productive_passmax_single_post_disclaimer_title() {
    return get_theme_mod( 'productive_passmax_single_post_disclaimer_title', '' );
}

/**
 * Method productive_passmax_single_post_disclaimer_bottom.
 *
 * @param string $class ''.
 */
function productive_passmax_single_post_disclaimer_bottom() {
    $theme_mod_value = get_theme_mod( 'productive_passmax_single_post_disclaimer', esc_html__( '<span class="bolded">Customizable Disclaimer Section: </span>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'pass-max' ) );
    $location = 'disclaimer_location_bottom';
    if( !empty( $theme_mod_value ) && 'disclaimer_location_bottom' == $location ) {
        productive_passmax_single_post_disclaimer( $theme_mod_value, $location );
    }
}
add_action( 'productive_passmax_display_single_post_disclaimer_bottom', 'productive_passmax_single_post_disclaimer_bottom' );

/**
 * Method productive_passmax_single_post_disclaimer_section_bg_color_scheme.
 *
 * @param string $class ''.
 */
function productive_passmax_single_post_disclaimer_section_bg_color_scheme( $class = '' ) {
    return get_theme_mod( 'productive_passmax_single_post_disclaimer_section_bg_color_scheme', 'section_with_light_bg_dark_content' );
}
