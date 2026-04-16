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


if ( ! class_exists( 'Productive_Theme_Customiser_Footer' ) ) {
    
    /**
     * Productive_Theme_Customiser_Footer
     * Theme Customiser Class
     */
    class Productive_Theme_Customiser_Footer extends Productive_Theme_Customiser_Common {
        
        /**
         * Register the customizer
         *
         * @param WP_Customize_Manager $wp_customise param.
         */
        public static function register( $wp_customise ) {
            
            $footer_section_desc = esc_html__( 'Footer Options ', 'pass-max' );
            $wp_customise->add_section(
                'productive_passmax_footer_options',
                array(
                    'title' => esc_html__( 'Footer Options', 'pass-max' ),
                    'description' => $footer_section_desc,
                    'panel' => 'productive_passmax_theme_options',
                    'priority' => 140,
                    'capability' => 'edit_theme_options',
                )
                );
            
            $wp_customise->add_setting(
                'productive_passmax_footer_style',
                array(
                    'type' => 'theme_mod',
                    'default' => productive_global_get_theme_default_base_footer_style(),
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_select'),
                )
            );
            $wp_customise->add_control(
                'productive_passmax_footer_style',
                array(
                    'type' => 'select',
                    'priority' => 10,
                    'section' => 'productive_passmax_footer_options',
                    'label' => esc_html__( 'Select Footer Design', 'pass-max' ),
                    'description' => '',
                    'choices' => array(
                        'footer_base_design_01' => esc_html__( 'Productive Business', 'pass-max' ),
                        'footer_base_design_02' => esc_html__( 'Productive eCommerce', 'pass-max' ),
                        'footer_base_design_03' => esc_html__( 'Stockist', 'pass-max' ),
                        'footer_design_1'       => esc_html__( 'Footer Design 01', 'pass-max' ),
                    ),
                )
            );
            
            $wp_customise->add_setting(
                'productive_passmax_footer_colour_tone',
                array(
                    'type' => 'theme_mod',
                    'default' => 'productive_footer_color_tone_default',
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_select'),
                )
            );
            $wp_customise->add_control(
                'productive_passmax_footer_colour_tone',
                array(
                    'type' => 'select',
                    'priority' => 11,
                    'section' => 'productive_passmax_footer_options',
                    'label' => esc_html__( 'Footer Color Tone', 'pass-max' ),
                    'choices' => array(
                        'productive_footer_color_tone_default'  => esc_html__( 'Default', 'pass-max' ),
                        'productive_footer_color_tone_light'    => esc_html__( 'Light', 'pass-max' ),
                        'productive_footer_color_tone_body'     => esc_html__( 'Page Body Color', 'pass-max' ),
                    ),
                )
            );
            
            $wp_customise->add_setting(
                'productive_passmax_the_logo_img_footer',
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
                    'productive_passmax_the_logo_img_footer',
                    array(
                        'priority' => 20,
                        'section' => 'productive_passmax_footer_options',
                        'label' => esc_html__( 'Footer Logo Image', 'pass-max' ),
                    )
                    )
                );
                
            // add a setting for productive_passmax_the_logo_size_footer control, below.
            $wp_customise->add_setting(
                'productive_passmax_the_logo_size_footer',
                array(
                    'type' => 'theme_mod',
                    'default' => 50,
                    'theme_supports' => '',
                    'transport' => 'refresh',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_absint'),
                )
            );
            $wp_customise->add_control(
                'productive_passmax_the_logo_size_footer',
                array(
                    'type' => 'number',
                    'priority' => 30,
                    'section' => 'productive_passmax_footer_options',
                    'label' => esc_html__( 'Footer Logo Width (px)', 'pass-max' ),
                    'description' => esc_html__( 'Increases or decreases width in px - height adjusts automatically.', 'pass-max' ),
                    'input_attrs' => array(
                        'min' => PRODUCTIVE_PASSMAX_THE_LOGO_WIDTH_MIN,
                        'max' => PRODUCTIVE_PASSMAX_THE_LOGO_WIDTH_MAX,
                        'step' => 10,
                    ),
                )
            );
            
            // add a setting for productive_passmax_enable_footer_sitelogo control, below.
            $wp_customise->add_setting(
                'productive_passmax_enable_footer_sitelogo',
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
                'productive_passmax_enable_footer_sitelogo',
                array(
                    'type' => 'checkbox',
                    'priority' => 40,
                    'section' => 'productive_passmax_footer_options',
                    'label' => esc_html__( 'Display Website Logo in Footer?', 'pass-max' ),
                    'description' => esc_html__( 'Display the Logo of your website in the footer?', 'pass-max' ),
                    // 'active_callback' => 'is_front_page',
                )
                );
            
            // add a setting for productive_passmax_enable_footer_sitename control, below.
            $wp_customise->add_setting(
                'productive_passmax_enable_footer_sitename',
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
                'productive_passmax_enable_footer_sitename',
                array(
                    'type' => 'checkbox',
                    'priority' => 50,
                    'section' => 'productive_passmax_footer_options',
                    'label' => esc_html__( 'Show Website Name in Footer?', 'pass-max' ),
                    'description' => esc_html__( 'Display the name of your website in the footer?', 'pass-max' ),
                    // 'active_callback' => 'is_front_page',
                )
                );
            
            // add a setting for productive_passmax_enable_footer_business_hours control, below.
            $wp_customise->add_setting(
                'productive_passmax_enable_footer_business_hours',
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
                'productive_passmax_enable_footer_business_hours',
                array(
                    'type' => 'checkbox',
                    'priority' => 60,
                    'section' => 'productive_passmax_footer_options',
                    'label' => esc_html__( 'Show Business Hours in Footer?', 'pass-max' ),
                    'description' => esc_html__( 'Display business hours (opening hours) in website footer', 'pass-max' ),
                    // 'active_callback' => 'is_front_page',
                )
            );
            
            // add a setting for productive_passmax_enable_footer_business_address control, below.
            $wp_customise->add_setting(
                'productive_passmax_enable_footer_business_address',
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
                'productive_passmax_enable_footer_business_address',
                array(
                    'type' => 'checkbox',
                    'priority' => 70,
                    'section' => 'productive_passmax_footer_options',
                    'label' => esc_html__( 'Show Business Location in Footer?', 'pass-max' ),
                    'description' => esc_html__( 'Display business location (physical address) in website footer', 'pass-max' ),
                    // 'active_callback' => 'is_front_page',
                )
                );
            
            // add a setting for productive_passmax_enable_footer_sitedesc control, below.
            $wp_customise->add_setting(
                'productive_passmax_enable_footer_sitedesc',
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
                'productive_passmax_enable_footer_sitedesc',
                array(
                    'type' => 'checkbox',
                    'priority' => 80,
                    'section' => 'productive_passmax_footer_options',
                    'label' => esc_html__( 'Show Website Description in Footer?', 'pass-max' ),
                    'description' => esc_html__( 'Display the Description of your website in the footer?', 'pass-max' ),
                    // 'active_callback' => 'is_front_page',
                )
            );
            
            $wp_customise->add_setting(
                'productive_passmax_display_footer_phone_whatsapp_email',
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
                'productive_passmax_display_footer_phone_whatsapp_email',
                array(
                    'type' => 'checkbox',
                    'priority' => 90,
                    'section' => 'productive_passmax_footer_options',
                    'label' => esc_html__( 'Display Phone, WhatsApp, and Email?', 'pass-max' ),
                    'description' => esc_html__( 'Display phone number, WhatsApp number, and email address in website footer', 'pass-max' ),
                    // 'active_callback' => 'is_front_page',
                )
                );
            
            if( function_exists( 'productive_global_render_social_media_follow_icons' ) ) {

                $wp_customise->add_setting(
                    'productive_passmax_display_footer_social_media_icons',
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
                    'productive_passmax_display_footer_social_media_icons',
                    array(
                        'type' => 'checkbox',
                        'priority' => 100,
                        'section' => 'productive_passmax_footer_options',
                        'label' => esc_html__( 'Display Social Media Icons?', 'pass-max' ),
                        'description' => esc_html__( 'Display social media icons in website footer', 'pass-max' ),
                        // 'active_callback' => 'is_front_page',
                    )
                    );

                $wp_customise->add_setting(
                    'productive_passmax_display_footer_social_media_icons_title',
                    array(
                        'type' => 'theme_mod',
                        'default' => esc_html__( 'Follow us on', 'pass-max' ),
                        'theme_supports' => '',
                        'transport' => 'refresh',
                        'capability' => 'edit_theme_options',
                        'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_no_html'),
                    )
                    );
                // add control..
                $wp_customise->add_control(
                    'productive_passmax_display_footer_social_media_icons_title',
                    array(
                        'type' => 'text',
                        'priority' => 110,
                        'section' => 'productive_passmax_footer_options',
                        'label' => esc_html__( 'Follow us on copy', 'pass-max' ),
                        'description' => '',
                    )
                    );

                $wp_customise->add_setting(
                    'productive_passmax_enable_footer_social_media_official_icon_color',
                    array(
                        'type' => 'theme_mod',
                        'default' => 'brand_color_around_white_icon',
                        'theme_supports' => '',
                        'transport' => 'refresh',
                        'capability' => 'edit_theme_options',
                        'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_select'),
                    )
                );
                $wp_customise->add_control(
                    'productive_passmax_enable_footer_social_media_official_icon_color',
                    array(
                        'type' => 'select',
                        'priority' => 120,
                        'section' => 'productive_passmax_footer_options',
                        'label' => esc_html__( 'Social media icons colour scheme', 'pass-max' ),
                        'description' => '',
                        'choices' => productive_global_add_social_media_icons_style_options( 1 ),
                    )
                );

                $wp_customise->add_setting(
                    'productive_passmax_social_media_icon_size_footer',
                    array(
                        'type' => 'theme_mod',
                        'default' => 21,
                        'theme_supports' => '',
                        'transport' => 'refresh',
                        'capability' => 'edit_theme_options',
                        'sanitize_callback' => array(__CLASS__, 'productive_passmax_sanitize_absint'),
                    )
                );
                $wp_customise->add_control(
                    'productive_passmax_social_media_icon_size_footer',
                    array(
                        'type' => 'number',
                        'priority' => 130,
                        'section' => 'productive_passmax_footer_options',
                        'label' => esc_html__( 'Footer Social Media Icon Size (px)', 'pass-max' ),
                        'description' => esc_html__( 'Increases or decreases icon width and height.', 'pass-max' ),
                        'input_attrs' => array(
                            'min' => 10,
                            'max' => 200,
                            'step' => 1,
                        ),
                    )
                );

                $wp_customise->add_setting(
                    'productive_passmax_enable_footer_social_media_enable_website_1',
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
                    'productive_passmax_enable_footer_social_media_enable_website_1',
                    array(
                        'type' => 'select',
                        'priority' => 140,
                        'section' => 'productive_passmax_footer_options',
                        'label' => esc_html__( 'Display Website 1', 'pass-max' ),
                        'description' => '',
                        'choices' => productive_global_get_yes_or_no_options(),
                    )
                );

                $wp_customise->add_setting(
                    'productive_passmax_enable_footer_social_media_enable_website_2',
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
                    'productive_passmax_enable_footer_social_media_enable_website_2',
                    array(
                        'type' => 'select',
                        'priority' => 150,
                        'section' => 'productive_passmax_footer_options',
                        'label' => esc_html__( 'Display Website 2', 'pass-max' ),
                        'description' => '',
                        'choices' => productive_global_get_yes_or_no_options(),
                    )
                );

                $wp_customise->add_setting(
                    'productive_passmax_enable_footer_social_media_enable_website_3',
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
                    'productive_passmax_enable_footer_social_media_enable_website_3',
                    array(
                        'type' => 'select',
                        'priority' => 160,
                        'section' => 'productive_passmax_footer_options',
                        'label' => esc_html__( 'Display Website 3', 'pass-max' ),
                        'description' => '',
                        'choices' => productive_global_get_yes_or_no_options(),
                    )
                );

                $wp_customise->add_setting(
                    'productive_passmax_enable_footer_social_media_enable_website_4',
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
                    'productive_passmax_enable_footer_social_media_enable_website_4',
                    array(
                        'type' => 'select',
                        'priority' => 170,
                        'section' => 'productive_passmax_footer_options',
                        'label' => esc_html__( 'Display Website 4', 'pass-max' ),
                        'description' => '',
                        'choices' => productive_global_get_yes_or_no_options(),
                    )
                );

                $wp_customise->add_setting(
                    'productive_passmax_enable_footer_social_media_enable_website_5',
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
                    'productive_passmax_enable_footer_social_media_enable_website_5',
                    array(
                        'type' => 'select',
                        'priority' => 180,
                        'section' => 'productive_passmax_footer_options',
                        'label' => esc_html__( 'Display Website 5', 'pass-max' ),
                        'description' => '',
                        'choices' => productive_global_get_yes_or_no_options(),
                    )
                );

                $wp_customise->add_setting(
                    'productive_passmax_enable_footer_social_media_enable_whatsapp',
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
                    'productive_passmax_enable_footer_social_media_enable_whatsapp',
                    array(
                        'type' => 'select',
                        'priority' => 190,
                        'section' => 'productive_passmax_footer_options',
                        'label' => esc_html__( 'Display WhatsApp', 'pass-max' ),
                        'description' => '',
                        'choices' => productive_global_get_yes_or_no_options(),
                    )
                );

                $wp_customise->add_setting(
                    'productive_passmax_enable_footer_social_media_enable_email',
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
                    'productive_passmax_enable_footer_social_media_enable_email',
                    array(
                        'type' => 'select',
                        'priority' => 200,
                        'section' => 'productive_passmax_footer_options',
                        'label' => esc_html__( 'Display Email', 'pass-max' ),
                        'description' => '',
                        'choices' => productive_global_get_yes_or_no_options(),
                    )
                );

                $wp_customise->add_setting(
                    'productive_passmax_enable_footer_social_media_enable_phone',
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
                    'productive_passmax_enable_footer_social_media_enable_phone',
                    array(
                        'type' => 'select',
                        'priority' => 210,
                        'section' => 'productive_passmax_footer_options',
                        'label' => esc_html__( 'Display Phone', 'pass-max' ),
                        'description' => '',
                        'choices' => productive_global_get_yes_or_no_options(),
                    )
                );
                
            }
                
            
            // start callouts
            if ( !function_exists( 'productiveminds_theme_extra_is_active' ) ) {
                // add a setting for productive_passmax_pro_callout_1, below.
                $productive_passmax_pro_callout_features_label = esc_html__( 'Access more features with PRO', 'pass-max' );
                $productive_passmax_pro_callout_features_url = '<a target="_blank" class="get-pro-button" href="' .
                    esc_url( PRODUCTIVE_PASSMAX_THEME_FEATURES_FREE_VS_PRO_URL ) . '">' .
                    esc_html__( 'Compare Free vs Pro Features', 'pass-max' ) . '</a> ';
                $productive_passmax_pro_callout_demo_url = '<a target="_blank" class="get-pro-button" href="' .
                    esc_url( PRODUCTIVE_PASSMAX_THEME_DEMO_URL ) . '">' . esc_html__( 'See a Live Demo', 'pass-max' ) . '</a>';
                $productive_passmax_pro_callout_docs_url = '<a target="_blank" class="get-pro-button" href="' .
                    esc_url( PRODUCTIVE_PASSMAX_THEME_DOCUMENTATION_URL ) . '">' . esc_html__( 'See the Documentation', 'pass-max' ) . '</a>';
            
                $wp_customise->add_setting(
                    'productive_passmax_pro_callout_header',
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
                    'productive_passmax_pro_callout_header',
                    array(
                        'type' => 'hidden',
                        'priority' => 500,
                        'section' => 'productive_passmax_theme_header',
                        'label' => $productive_passmax_pro_callout_features_label,
                        'description' => $productive_passmax_pro_callout_features_url,
                    )
                    );
                
                $wp_customise->add_setting(
                    'productive_passmax_pro_callout_header_demo',
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
                    'productive_passmax_pro_callout_header_demo',
                    array(
                        'type' => 'hidden',
                        'priority' => 210,
                        'section' => 'productive_passmax_theme_header',
                        'label' => '',
                        'description' => $productive_passmax_pro_callout_demo_url,
                    )
                    );
                
                $wp_customise->add_setting(
                    'productive_passmax_pro_callout_header_docs',
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
                    'productive_passmax_pro_callout_header_docs',
                    array(
                        'type' => 'hidden',
                        'priority' => 220,
                        'section' => 'productive_passmax_theme_header',
                        'label' => '',
                        'description' => $productive_passmax_pro_callout_docs_url,
                    )
                    );
                
                $wp_customise->add_setting(
                    'productive_passmax_pro_callout_slider_options',
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
                    'productive_passmax_pro_callout_slider_options',
                    array(
                        'type' => 'hidden',
                        'priority' => 300,
                        'section' => 'productive_passmax_homepage_options_slider_options',
                        'label' => $productive_passmax_pro_callout_features_label,
                        'description' => $productive_passmax_pro_callout_features_url,
                    )
                    );
                
                $wp_customise->add_setting(
                    'productive_passmax_pro_callout_homepage_options',
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
                    'productive_passmax_pro_callout_homepage_options',
                    array(
                        'type' => 'hidden',
                        'priority' => 200,
                        'section' => 'productive_passmax_homepage_options_banner_background',
                        'label' => $productive_passmax_pro_callout_features_label,
                        'description' => $productive_passmax_pro_callout_demo_url,
                    )
                    );
                
                $wp_customise->add_setting(
                    'productive_passmax_pro_callout_homepage_blog_options',
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
                    'productive_passmax_pro_callout_homepage_blog_options',
                    array(
                        'type' => 'hidden',
                        'priority' => 200,
                        'section' => 'productive_passmax_homepage_blog_options',
                        'label' => $productive_passmax_pro_callout_features_label,
                        'description' => $productive_passmax_pro_callout_features_url,
                    )
                    );
                
                $wp_customise->add_setting(
                    'productive_passmax_pro_callout_commerce_options',
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
                    'productive_passmax_pro_callout_commerce_options',
                    array(
                        'type' => 'hidden',
                        'priority' => 200,
                        'section' => 'productive_passmax_theme_commerce',
                        'label' => $productive_passmax_pro_callout_features_label,
                        'description' => $productive_passmax_pro_callout_demo_url,
                    )
                    );
                
                $wp_customise->add_setting(
                    'productive_passmax_pro_callout_layout_options',
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
                    'productive_passmax_pro_callout_layout_options',
                    array(
                        'type' => 'hidden',
                        'priority' => 200,
                        'section' => 'productive_passmax_layout_options',
                        'label' => $productive_passmax_pro_callout_features_label,
                        'description' => $productive_passmax_pro_callout_demo_url,
                    )
                    );
                
                $wp_customise->add_setting(
                    'productive_passmax_pro_callout_archive_options',
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
                    'productive_passmax_pro_callout_archive_options',
                    array(
                        'type' => 'hidden',
                        'priority' => 200,
                        'section' => 'productive_passmax_archive_options',
                        'label' => $productive_passmax_pro_callout_features_label,
                        'description' => $productive_passmax_pro_callout_features_url,
                    )
                    );
                
                $wp_customise->add_setting(
                    'productive_passmax_pro_callout_social_options_demo',
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
                    'productive_passmax_pro_callout_social_options_demo',
                    array(
                        'type' => 'hidden',
                        'priority' => 200,
                        'section' => 'productive_passmax_social_options',
                        'label' => '',
                        'description' => $productive_passmax_pro_callout_demo_url,
                    )
                    );
                
                $wp_customise->add_setting(
                    'productive_passmax_pro_callout_social_options_docs',
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
                    'productive_passmax_pro_callout_social_options_docs',
                    array(
                        'type' => 'hidden',
                        'priority' => 210,
                        'section' => 'productive_passmax_social_options',
                        'label' => '',
                        'description' => $productive_passmax_pro_callout_docs_url,
                    )
                    );
                
                $wp_customise->add_setting(
                    'productive_passmax_pro_callout_footer_options',
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
                    'productive_passmax_pro_callout_footer_options',
                    array(
                        'type' => 'hidden',
                        'priority' => 200,
                        'section' => 'productive_passmax_footer_options',
                        'label' => $productive_passmax_pro_callout_features_label,
                        'description' => $productive_passmax_pro_callout_features_url,
                    )
                    );
                
                $wp_customise->add_setting(
                    'productive_passmax_pro_callout_copyright_options',
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
                    'productive_passmax_pro_callout_copyright_options',
                    array(
                        'type' => 'hidden',
                        'priority' => 200,
                        'section' => 'productive_passmax_footer_copyright_options',
                        'label' => $productive_passmax_pro_callout_features_label,
                        'description' => $productive_passmax_pro_callout_features_url,
                    )
                    );
            }
            // end callouts
                
                
        }
        
        
    } // End of class.
    
    // add hook for the class.
    add_action( 'customize_register', array( 'Productive_Theme_Customiser_Footer', 'register' ) );
    
} // End of if class exists



/**
 * Method productive_passmax_enable_footer_business_hours.
 *
 * @param string $class ''.
 */
function productive_passmax_enable_footer_business_hours( $class = '' ) {
    return get_theme_mod( 'productive_passmax_enable_footer_business_hours', true );
}

/**
 * Method productive_passmax_enable_footer_business_address.
 *
 * @param string $class ''.
 */
function productive_passmax_enable_footer_business_address( $class = '' ) {
    return get_theme_mod( 'productive_passmax_enable_footer_business_address', true );
}


// FOOTER
/**
 * Method productive_passmax_footer_style.
 *
 * @param string $class ''.
 */
function productive_passmax_footer_style( $class = '' ) {
    return get_theme_mod( 'productive_passmax_footer_style', productive_global_get_theme_default_base_footer_style() );
}

function productive_passmax_enable_footer_sitelogo_enabled() {
    return get_theme_mod( 'productive_passmax_enable_footer_sitelogo', true );
}
/**
 * Method productive_passmax_enable_footer_sitelogo.
 *
 * @param string $class ''.
 */
function productive_passmax_enable_footer_sitelogo( $class = '' ) {
    $sitelogo_thumbnail_id = productive_passmax_the_logo_img_footer();
    if ( productive_passmax_enable_footer_sitelogo_enabled() && ( is_numeric($sitelogo_thumbnail_id) && intval($sitelogo_thumbnail_id) ) ) {
        $sitelogo_thumbnail_url = productive_global_get_attachment_url_by_attachment_id( $sitelogo_thumbnail_id, '' );
        ?>
        <div class="<?php echo esc_attr( $class ); ?>">
            <a href="<?php echo esc_url( home_url() ); ?>">
                <img class="custom-logo" src="<?php echo esc_url( $sitelogo_thumbnail_url ); ?>" alt="<?php echo get_bloginfo( 'name', 'display' ); ?>" />
            </a>
        </div>
        <?php 
    }
}
add_action( 'productive_passmax_display_enable_footer_sitelogo', 'productive_passmax_enable_footer_sitelogo' );


/**
 * Method productive_passmax_footer_colour_tone
 *
 * @param string $class ''.
 */
function productive_passmax_footer_colour_tone( $class = '' ) {
    return get_theme_mod( 'productive_passmax_footer_colour_tone', 'productive_footer_color_tone_default' );
}


/**
 * Method productive_passmax_the_logo_img_footer.
 *
 * @param string $class ''.
 */
function productive_passmax_the_logo_img_footer() {
    return get_theme_mod( 'productive_passmax_the_logo_img_footer', true );
}

/**
 * 
 * Method productive_passmax_the_logo_size_footer.
 *
 * @param string $class ''.
 */
function productive_passmax_the_logo_size_footer( $class = '' ) {
    return get_theme_mod( 'productive_passmax_the_logo_size_footer', 50 );
}

function productive_passmax_enable_footer_sitename_enabled() {
    return get_theme_mod( 'productive_passmax_enable_footer_sitename', true );
}
/**
 * Method productive_passmax_enable_footer_sitename.
 *
 * @param string $class ''.
 */
function productive_passmax_enable_footer_sitename( $class = '' ) {
    if (productive_passmax_enable_footer_sitename_enabled() ) {
        echo '<div class="' . esc_attr( $class ) . '">' .
            '<div class="fs-xl bolded_500">' . get_bloginfo( 'name' ) . '</div>' .
        '</div>';
    }
}
add_action( 'productive_passmax_display_enable_footer_sitename', 'productive_passmax_enable_footer_sitename' );

function productive_passmax_enable_footer_sitedesc_enabled() {
    return get_theme_mod( 'productive_passmax_enable_footer_sitedesc', true );
}
/**
 * Method productive_passmax_enable_footer_sitedesc.
 *
 * @param string $class ''.
 */
function productive_passmax_enable_footer_sitedesc( $class = '' ) {
    if (productive_passmax_enable_footer_sitedesc_enabled() ) {
        echo '<div class="' . esc_attr( $class ) . '">' .
            '<div class="">' . get_bloginfo( 'description' ) . '</div>' .
        '</div>';
    }
}
add_action( 'productive_passmax_display_enable_footer_sitedesc', 'productive_passmax_enable_footer_sitedesc' );


/**
 * Method productive_passmax_enable_footer_social_media_official_icon_color
 *
 * @param string $class ''.
 */
function productive_passmax_enable_footer_social_media_official_icon_color( $class = '' ) {
    return get_theme_mod( 'productive_passmax_enable_footer_social_media_official_icon_color', 'brand_color_around_white_icon' );
}


/**
 * Method productive_passmax_enable_footer_social_media_enable_website_1
 *
 * @param string $class ''.
 */
function productive_passmax_enable_footer_social_media_enable_website_1( $class = '' ) {
    return get_theme_mod( 'productive_passmax_enable_footer_social_media_enable_website_1', '1' );
}


/**
 * Method productive_passmax_enable_footer_social_media_enable_website_2.
 *
 * @param string $class ''.
 */
function productive_passmax_enable_footer_social_media_enable_website_2( $class = '' ) {
    return get_theme_mod( 'productive_passmax_enable_footer_social_media_enable_website_2', '1' );
}


/**
 * Method productive_passmax_enable_footer_social_media_enable_website_3
 *
 * @param string $class ''.
 */
function productive_passmax_enable_footer_social_media_enable_website_3( $class = '' ) {
    return get_theme_mod( 'productive_passmax_enable_footer_social_media_enable_website_3', '1' );
}


/**
 * Method productive_passmax_enable_footer_social_media_enable_website_4
 *
 * @param string $class ''.
 */
function productive_passmax_enable_footer_social_media_enable_website_4( $class = '' ) {
    return get_theme_mod( 'productive_passmax_enable_footer_social_media_enable_website_4', '1' );
}


/**
 * Method productive_passmax_enable_footer_social_media_enable_website_5
 *
 * @param string $class ''.
 */
function productive_passmax_enable_footer_social_media_enable_website_5( $class = '' ) {
    return get_theme_mod( 'productive_passmax_enable_footer_social_media_enable_website_5', '1' );
}


/**
 * Method productive_passmax_enable_footer_social_media_enable_whatsapp
 *
 * @param string $class ''.
 */
function productive_passmax_enable_footer_social_media_enable_whatsapp( $class = '' ) {
    return get_theme_mod( 'productive_passmax_enable_footer_social_media_enable_whatsapp', '0' );
}


/**
 * Method productive_passmax_enable_footer_social_media_enable_email
 *
 * @param string $class ''.
 */
function productive_passmax_enable_footer_social_media_enable_email( $class = '' ) {
    return get_theme_mod( 'productive_passmax_enable_footer_social_media_enable_email', '0' );
}


/**
 * Method productive_passmax_enable_footer_social_media_enable_phone
 *
 * @param string $class ''.
 */
function productive_passmax_enable_footer_social_media_enable_phone( $class = '' ) {
    return get_theme_mod( 'productive_passmax_enable_footer_social_media_enable_phone', '0' );
}

/**
 * 
 * Method productive_passmax_social_media_icon_size_footer.
 *
 * @param string $class ''.
 */
function productive_passmax_social_media_icon_size_footer( $class = '' ) {
    return get_theme_mod( 'productive_passmax_social_media_icon_size_footer', 21 );
}

/**
 * Method productive_passmax_enable_footer_site_logo_and_name.
 * 
 * @param string $class ''.
 */
function productive_passmax_enable_footer_site_logo_and_name( $class = '' ) {
    $theme_mod_enabled_logo = get_theme_mod( 'productive_passmax_enable_footer_sitelogo', true );
    if ( $theme_mod_enabled_logo ) {
        echo '<div class="footer-about-site-name ' . esc_attr( $class ) . '_logo">' .
        get_custom_logo() .
            '</div>';
    }
    
    $theme_mod_enabled = get_theme_mod( 'productive_passmax_enable_footer_sitename', true );
    if ( $theme_mod_enabled ) {
        echo '<div class="footer-about-site-name ' . esc_attr( $class ) . '">' .
            '<div class="footer-about-site-name-text">' . get_bloginfo( 'name' ) . '</div>' .
            '<div class="footer-about-site-desc-text">' . get_bloginfo( 'description' ) . '</div>' .
        '</div>';
    }
}
add_action( 'productive_passmax_display_enable_footer_site_logo_and_name', 'productive_passmax_enable_footer_site_logo_and_name' );


/**
 * Method productive_passmax_display_footer_phone_whatsapp_email.
 *
 * @param string $class ''.
 */
function productive_passmax_display_footer_phone_whatsapp_email( $class = '' ) {
    return get_theme_mod( 'productive_passmax_display_footer_phone_whatsapp_email', true );
}

/**
 * Method productive_passmax_display_footer_social_media_icons.
 *
 * @param string $class ''.
 */
function productive_passmax_display_footer_social_media_icons( $class = '' ) {
    return get_theme_mod( 'productive_passmax_display_footer_social_media_icons', true );
}

/**
 * Method productive_passmax_display_footer_social_media_icons_title.
 *
 * @param string $class ''.
 */
function productive_passmax_display_footer_social_media_icons_title( $class = '' ) {
    return get_theme_mod( 'productive_passmax_display_footer_social_media_icons_title', esc_html__( 'Follow us on', 'pass-max' ) );
}


/**
 * 
 * Method productive_passmax_payment_methods_logos_size.
 *
 * @param string $class ''.
 */
function productive_passmax_payment_methods_logos_size_extra($class = '') {
    if(function_exists( 'productive_passmax_payment_methods_logos_size' ) ) {
        return get_theme_mod('productive_passmax_payment_methods_logos_size', 40);
    } else {
        return 40;
    }
}
