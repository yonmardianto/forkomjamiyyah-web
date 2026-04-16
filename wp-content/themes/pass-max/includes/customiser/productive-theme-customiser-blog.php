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


if ( ! class_exists( 'Productive_Theme_Customiser_Homepage_Blog' ) ) {
    
    /**
     * Productive_Theme_Customiser_Homepage_Blog
     * Theme Customiser Class
     */
    class Productive_Theme_Customiser_Homepage_Blog extends Productive_Theme_Customiser_Common {
        
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
                'productive_passmax_homepage_blog_options',
                array(
                    'title' => esc_html__( 'Blog Archives', 'pass-max' ),
                    'description' => esc_html__( 'Blog Archives (Categories) Options', 'pass-max' ),
                    'panel' => 'productive_passmax_theme_options',
                    'priority' => 100,
                    'capability' => 'edit_theme_options',
                )
                );
                
            // add a setting for productive_passmax_show_sidebars_always_in_blog_archives control, below.
            $wp_customise->add_setting(
                'productive_passmax_show_sidebars_always_in_blog_archives',
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
                'productive_passmax_show_sidebars_always_in_blog_archives',
                array(
                    'type' => 'select',
                    'priority' => 10,
                    'section' => 'productive_passmax_homepage_blog_options',
                    'label' => esc_html__( 'Blog Categories Layout', 'pass-max' ),
                    'description' => '',
                    'choices' => productive_global_get_theme_page_layout_options(),
                )
            );
            
            // add a setting for productive_passmax_items_per_row_to_display, below.
            $wp_customise->add_setting(
                'productive_passmax_items_per_row_to_display',
                array(
                    'type' => 'theme_mod',
                    'default' => 3,
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_absint'),
                )
                );
            $wp_customise->add_control(
                'productive_passmax_items_per_row_to_display',
                array(
                    'type' => 'number',
                    'priority' => 20, 
                    'section' => 'productive_passmax_homepage_blog_options',
                    'label' => esc_html__( 'Number of Blog Posts Per Row', 'pass-max' ),
                    'description' => esc_html__( 'Use 3 or more for best result', 'pass-max' ),
                    'input_attrs' => array(
                        'min' => 2,
                        'max' => 5,
                        'step' => 1,
                    ),
                )
                );
            
            // add a setting for productive_passmax_posts_placeholder_image control, below.
            $wp_customise->add_setting(
                'productive_passmax_posts_placeholder_image',
                array(
                    'type' => 'theme_mod',
                    'default' => true,
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
                    'productive_passmax_posts_placeholder_image',
                    array(
                        'priority' => 30, // 30 is used in extra. So this will be 40
                        'section' => 'productive_passmax_homepage_blog_options',
                        'label' => esc_html__( 'Blog Post Placeholder Thumbnail', 'pass-max' ),
                        'description' => esc_html__( 'An image that shows as thumbnail if a blog post does not have one', 'pass-max' ),
                        // 'active_callback' => 'is_front_page'
                    )
                    )
                );
            
            $wp_customise->add_setting(
                'productive_passmax_blog_archives_style',
                array(
                    'type' => 'theme_mod',
                    'default' => 'blog_archive_design_01',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_select'),
                )
            );
            $wp_customise->add_control(
                'productive_passmax_blog_archives_style',
                array(
                    'type' => 'select',
                    'priority' => 40,
                    'section' => 'productive_passmax_homepage_blog_options',
                    'label' => esc_html__( 'Blog Archives Style', 'pass-max' ),
                    'description' => '',
                    'choices' => productive_global_get_blog_archives_style_options(),
                )
            );
            
            if( function_exists('pass_addons_is_active') ) {
                // add a setting for productive_passmax_post_display_read_time control, below.
                $wp_customise->add_setting(
                    'productive_passmax_post_display_read_time',
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
                    'productive_passmax_post_display_read_time',
                    array(
                        'type' => 'select',
                        'priority' => 50,
                        'section' => 'productive_passmax_homepage_blog_options',
                        'label' => esc_html__( 'Display Post Reading Time', 'pass-max' ),
                        'description' => '',
                        'choices' => productive_global_get_show_or_hide_options(),
                    )
                );
            }
            
            // add a setting for productive_passmax_post_display_category control, below.
            $wp_customise->add_setting(
                'productive_passmax_post_display_category',
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
                'productive_passmax_post_display_category',
                array(
                    'type' => 'select',
                    'priority' => 60,
                    'section' => 'productive_passmax_homepage_blog_options',
                    'label' => esc_html__( 'Display Category', 'pass-max' ),
                    'description' => '',
                    'choices' => productive_global_get_show_or_hide_options(),
                )
            );
            
            // add a setting for productive_passmax_post_display_excerpt control, below.
            $wp_customise->add_setting(
                'productive_passmax_post_display_excerpt',
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
                'productive_passmax_post_display_excerpt',
                array(
                    'type' => 'select',
                    'priority' => 70,
                    'section' => 'productive_passmax_homepage_blog_options',
                    'label' => esc_html__( 'Display Excerpt', 'pass-max' ),
                    'description' => '',
                    'choices' => productive_global_get_show_or_hide_options(),
                )
            );

            // add a setting for productive_passmax_posts_excerpt_word_count, below.
            $wp_customise->add_setting(
                'productive_passmax_posts_excerpt_word_count',
                array(
                    'type' => 'theme_mod',
                    'default' => 20,
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_absint'),
                )
                );
            $wp_customise->add_control(
                'productive_passmax_posts_excerpt_word_count',
                array(
                    'type' => 'number',
                    'priority' => 80, 
                    'section' => 'productive_passmax_homepage_blog_options',
                    'label' => esc_html__( 'Excerpt Word Count', 'pass-max' ),
                    'description' => esc_html__( 'Number of words to display in post excerpts.', 'pass-max' ),
                    'input_attrs' => array(
                        'min' => 5,
                        'max' => 50,
                        'step' => 1,
                    ),
                )
                );
            
            // add a setting for productive_passmax_show_post_author control, below.
            $wp_customise->add_setting(
                'productive_passmax_show_post_author',
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
                'productive_passmax_show_post_author',
                array(
                    'type' => 'select',
                    'priority' => 90,
                    'section' => 'productive_passmax_homepage_blog_options',
                    'label' => esc_html__( 'Display Post Author', 'pass-max' ),
                    'description' => '',
                    'choices' => productive_global_get_show_or_hide_options(),
                )
            );
            
            // add a setting for productive_passmax_post_display_date control, below.
            $wp_customise->add_setting(
                'productive_passmax_post_display_date',
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
                'productive_passmax_post_display_date',
                array(
                    'type' => 'select',
                    'priority' => 90,
                    'section' => 'productive_passmax_homepage_blog_options',
                    'label' => esc_html__( 'Display Last Updated Date', 'pass-max' ),
                    'description' => '',
                    'choices' => productive_global_get_show_or_hide_options(),
                )
            );
            
            // add a setting for productive_passmax_post_display_comment control, below.
            $wp_customise->add_setting(
                'productive_passmax_post_display_comment',
                array(
                    'type' => 'theme_mod',
                    'default' => '0',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_select'),
                )
            );
            $wp_customise->add_control(
                'productive_passmax_post_display_comment',
                array(
                    'type' => 'select',
                    'priority' => 100,
                    'section' => 'productive_passmax_homepage_blog_options',
                    'label' => esc_html__( 'Display Comment Count', 'pass-max' ),
                    'description' => '',
                    'choices' => productive_global_get_show_or_hide_options(),
                )
            );
            
            // add a setting for productive_passmax_post_display_read_more_button control, below.
            $wp_customise->add_setting(
                'productive_passmax_post_display_read_more_button',
                array(
                    'type' => 'theme_mod',
                    'default' => '0',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_select'),
                )
            );
            $wp_customise->add_control(
                'productive_passmax_post_display_read_more_button',
                array(
                    'type' => 'select',
                    'priority' => 110,
                    'section' => 'productive_passmax_homepage_blog_options',
                    'label' => esc_html__( 'Display Read More Button', 'pass-max' ),
                    'description' => '',
                    'choices' => productive_global_get_show_or_hide_options(),
                )
            );
            
            
        }
        
    } // End of class.
    
    // add hook for the class.
    add_action( 'customize_register', array( 'Productive_Theme_Customiser_Homepage_Blog', 'register' ) );
    
} // End of if class exists




/**
 * Method productive_passmax_show_sidebars_always_in_blog_archives.
 *
 * @param string $class ''.
 */
function productive_passmax_show_sidebars_always_in_blog_archives( $class = '' ) {
    return get_theme_mod( 'productive_passmax_show_sidebars_always_in_blog_archives', 'two_columns_right' );
}

/**
 * Method productive_passmax_items_per_row_to_display.
 *
 * @param string $class ''.
 */
function productive_passmax_items_per_row_to_display( $class = '' ) {
    return get_theme_mod( 'productive_passmax_items_per_row_to_display', 3 );
}

/**
 * Method productive_passmax_posts_placeholder_image.
 *
 * @param string $class ''.
 */
function productive_passmax_posts_placeholder_image( $class = '' ) {
    return get_theme_mod( 'productive_passmax_posts_placeholder_image' );
}

/**
 * Method productive_passmax_blog_archives_style.
 *
 * @param string $class ''.
 */
function productive_passmax_blog_archives_style( $class = '' ) {
    return get_theme_mod( 'productive_passmax_blog_archives_style', 'blog_archive_design_01' );
}

/**
 * Method productive_passmax_post_display_read_time.
 *
 * @param string $class ''.
 */
function productive_passmax_post_display_read_time( $class = '' ) {
    return get_theme_mod( 'productive_passmax_post_display_read_time', '1' );
}

/**
 * Method productive_passmax_post_display_category.
 *
 * @param string $class ''.
 */
function productive_passmax_post_display_category( $class = '' ) {
    return get_theme_mod( 'productive_passmax_post_display_category', '1' );
}

/**
 * Method productive_passmax_post_display_excerpt.
 *
 * @param string $class ''.
 */
function productive_passmax_post_display_excerpt( $class = '' ) {
    return get_theme_mod( 'productive_passmax_post_display_excerpt', '1' );
}

/**
 * Method productive_passmax_posts_excerpt_word_count.
 *
 * @param string $class ''.
 */
function productive_passmax_posts_excerpt_word_count( $class = '' ) {
    return get_theme_mod( 'productive_passmax_posts_excerpt_word_count', 20 );
}

/**
 * Method productive_passmax_show_post_author.
 *
 * @param string $class ''.
 */
function productive_passmax_show_post_author( $class = '' ) {
    return get_theme_mod( 'productive_passmax_show_post_author', '1' );
}

/**
 * Method productive_passmax_post_display_date.
 *
 * @param string $class ''.
 */
function productive_passmax_post_display_date( $class = '' ) {
    return get_theme_mod( 'productive_passmax_post_display_date', '1' );
}

/**
 * Method productive_passmax_post_display_comment.
 *
 * @param string $class ''.
 */
function productive_passmax_post_display_comment( $class = '' ) {
    return get_theme_mod( 'productive_passmax_post_display_comment', '0' );
}

/**
 * Method productive_passmax_post_display_read_more_button.
 *
 * @param string $class ''.
 */
function productive_passmax_post_display_read_more_button( $class = '' ) {
    return get_theme_mod( 'productive_passmax_post_display_read_more_button', '0' );
}
