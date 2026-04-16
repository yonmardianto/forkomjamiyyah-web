<?php
/**
 * Productive Plugins checks
 * 
 * @package     pass-max
 * @author      productiveminds.com
 * @copyright   productiveminds.com
 * 
 */

function productive_passmax_apply_custom_css() {
    $css_settings = productive_passmax_get_custom_css();
    $productive_passmax_the_logo_size_value = intval( $css_settings['productive_passmax_the_logo_size'] );
    $css =  '' .
        '.header-site-identity img.custom-logo {
            width: ' . $productive_passmax_the_logo_size_value . 'px;
            padding-top: ' . $css_settings['productive_passmax_the_logo_vertical_spacing'] . 'px;
            padding-bottom: ' . $css_settings['productive_passmax_the_logo_vertical_spacing'] . 'px;
        }.footer-site-identity img.custom-logo {
            width: ' . $css_settings['productive_passmax_the_logo_size_footer'] . 'px;
        }.the-productive_popup-the-header img.custom-logo {
            width: ' . $css_settings['productive_passmax_off_canvas_logo_size'] . 'px;
        }.announcement-container.announcement-text-container {
            color: ' . $css_settings['productive_passmax_announcement_copy_text_color'] . ';
        }.announcement-container a {
            color: ' . $css_settings['productive_passmax_announcement_cta_text_color'] . ';
            border-radius: ' . $css_settings['productive_passmax_announcement_cta_shape'] . ';
            background: ' . $css_settings['productive_passmax_announcement_cta_bg_color'] . ';
        }.announcement-container a:hover {
            background: ' . $css_settings['productive_passmax_announcement_cta_bg_color_hover'] . ';
        }.site-body-container_box_full.header-announcement-container .close-productive-display-button-icon span.the_close_icon {
            color: ' . $css_settings['productive_passmax_announcement_close_btn_color'] . ';
        }.site-body-container_box_full.header-announcement-container {
            border-bottom: 1px solid ' . $css_settings['productive_passmax_announcement_banner_border_color'] . ';
        }.productiveminds_banner_container.home {
            height: ' . $css_settings['productive_passmax_homepage_banner_height'] . 'px;
        }.productiveminds_banner_container.home.type2 {
            height: auto;
        }.productiveminds_banner_container.home .flex-content-container-section {
            height: ' . $css_settings['productive_passmax_homepage_banner_height'] . 'px;
        }.productiveminds_banner_container.home .productiveminds_banner_container_content {
            max-width: ' . $css_settings['productive_passmax_homepage_banner_and_slides_content_width'] . 'px;
        }.productiveminds_banner_container.home .productiveminds_banner_container_content_bg_overlay {
            background: ' . $css_settings['productive_passmax_homepage_banner_and_slides_overlay_color'] . ';
            opacity: ' . $css_settings['productive_passmax_homepage_banner_and_slides_overlay_opacity'] . ';
        }.homepage-content-element-small-banner .productiveminds_banner_container,
            .productiveminds_banner_container.home-type-two-left,
            .productiveminds_banner_container.home-type-two-right {
            border-color: ' . $css_settings['productive_passmax_homepage_banner_border_color'] . ';
        }.productiveminds_banner_container.top_banner .productiveminds_banner_container_content_bg_overlay {
            background: ' . $css_settings['productive_passmax_top_banner_overlay_color'] . ';
            opacity: ' . $css_settings['productive_passmax_top_banner_overlay_opacity'] . ';
        }.productiveminds_banner_container.home .productiveminds_hero_content_title, body.home .banner-slider.std .productiveminds_hero_content_title {
            color: ' . $css_settings['productive_passmax_homepage_usp_textarea_1_color'] . ';
        }.productiveminds_banner_container.home .productiveminds_hero_content_main, body.home .banner-slider.std .productiveminds_hero_content_main {
            color: ' . $css_settings['productive_passmax_homepage_usp_textarea_2_color'] . ';
        }.productiveminds_banner_container.home .productiveminds_hero_content_auxiliary, body.home .banner-slider.std .productiveminds_hero_content_auxiliary {
            color: ' . $css_settings['productive_passmax_homepage_slide_auxiliary_color'] . ';
        }.cta a.cta1 {
            color: ' . $css_settings['cta_1_text_color'] . ';
            border-radius: ' . $css_settings['productive_passmax_homepage_cta_1_shape'] . ';
            background: ' . $css_settings['cta_1_bg_color'] . ';
        }.cta a.cta2 {
            color: ' . $css_settings['cta_2_text_color'] . ';
            border-radius: ' . $css_settings['productive_passmax_homepage_cta_2_shape'] . ';
            background: ' . $css_settings['cta_2_bg_color'] . ';
        }.cta a.cta1:hover {
            color: ' . $css_settings['cta_1_bg_color'] . ';
            background: ' . $css_settings['cta_1_text_color'] . ';
        }.cta a.cta2:hover {
            color: ' . $css_settings['cta_2_bg_color'] . ';
            background: ' . $css_settings['cta_2_text_color'] . ';
        }a.header-power-button-anchor, .productive_popup-overlay a.header-power-button-anchor {
            color: ' . $css_settings['productive_passmax_power_button_font_color'] . ';
            border-radius: ' . $css_settings['productive_passmax_power_button_shape'] . ';
            background: ' . $css_settings['productive_passmax_power_button_bg_color'] . ';
        }a.header-power-button-anchor:hover, .productive_popup-overlay a.header-power-button-anchor:hover {
            color: ' . $css_settings['productive_passmax_power_button_font_color_hover'] . ';
            background: ' . $css_settings['productive_passmax_power_button_bg_color_hover'] . ';
        }a.header-power-button-anchor svg path, .productive_popup-overlay a.header-power-button-anchor svg path {
            fill: ' . $css_settings['productive_passmax_power_button_font_color'] . ';
        }a.header-power-button-anchor:hover svg path, .productive_popup-overlay a.header-power-button-anchor:hover svg path {
            fill: ' . $css_settings['productive_passmax_power_button_font_color_hover'] . ';
        }.productive-blog-article .productive-blog-article-content {
            text-align: ' . $css_settings['productive_passmax_single_post_content_alignment'] . ';
        }.footer-container .productiveminds_payment_methods_logos_global svg {
            width: ' . $css_settings['productive_passmax_payment_methods_logos_size_extra'] . 'px;
            height: ' . $css_settings['productive_passmax_payment_methods_logos_size_extra'] . 'px;
        }';
    
    // }.productiveminds_banner_container.home .productiveminds-alignable-container_uno {
    if( isset( $css_settings['productive_passmax_homepage_banner_content_container_bg_color'] ) && !empty( $css_settings['productive_passmax_homepage_banner_content_container_bg_color'] ) ) {
        $css .=  '' .
        '.productiveminds_banner_container.home.main_banner .productiveminds_banner_container_content {
            background: ' . $css_settings['productive_passmax_homepage_banner_content_container_bg_color'] . ';
        }';
    }
    
    if( isset( $css_settings['productive_passmax_social_media_icon_size_footer'] ) ) {
        $css .=  '' .
        '.footer_section_container a.brand_color_around_white_icon svg {
            width: ' . $css_settings['productive_passmax_social_media_icon_size_footer'] . 'px;
            height: ' . $css_settings['productive_passmax_social_media_icon_size_footer'] . 'px;
        }';
    }
        
    $productive_passmax_the_logo_container_value = $productive_passmax_the_logo_size_value + 2;
    $productive_passmax_the_logo_container_value_plus_navicon = $productive_passmax_the_logo_size_value + 45; // Considering navicon max width = 25px
    $css .=  '' .
        '.header-container-box {
            grid-template-columns: ' . $productive_passmax_the_logo_container_value . 'px auto;
        }.extra-base-design-01 .header-container-box, .extra-design-4 .header-container-box, .extra-design-17 .header-container-box {
            grid-template-columns: ' . $productive_passmax_the_logo_container_value_plus_navicon . 'px auto;
        }';
    
    if ( ( 'one-column.php' == get_page_template_slug() || 'one_column' == productive_passmax_template_layout_options() ) && 1 < intval( $css_settings['productive_passmax_single_post_content_container_width'] ) ) {
        $blog_page_width_value = $css_settings['productive_passmax_single_post_content_container_width'];
        $css .= '
            :root {
                --inline-raw-side-space: calc( 100vw - ' . $blog_page_width_value . 'px );
                --inline-side-space: clamp(0px, var(--inline-raw-side-space), 2000px);
                --inline-third-of-side-space: calc( var(--inline-side-space) / 3 );
                --inline-half-of-side-space: calc( var(--inline-side-space) / 2 );
            }
            .site-body-container .site-body-container_box.one_column .productive-blog-article-content.productive-blockable-element > *:not(.alignwide):not(.alignfull):not(blockquote):not(.siteMaxWidth_Wide):not(.siteMaxWidth_Extended):not(.siteMaxWidth_100pc):not(.elementor) {
                max-width: ' . $blog_page_width_value . 'px;
            }
            .site-body-container .site-body-container_box.one_column .productive-blog-article-content.productive-blockable-element > .alignwide,
            .site-body-container .site-body-container_box.one_column .productive-blog-article-content.productive-blockable-element > .siteMaxWidth_Wide,
            .site-body-container .site-body-container_box.one_column .productive-blog-article-content.productive-blockable-element > .elementor .siteMaxWidth_Wide {
                padding-left: 10px;
                padding-right: 10px;
                max-width: calc( ' . $blog_page_width_value . 'px + var(--inline-third-of-side-space) );
            }
            .site-body-container .site-body-container_box.one_column .productive-blog-article-content.productive-blockable-element > .alignfull {
                max-width: calc( ' . $blog_page_width_value . 'px + var(--inline-half-of-side-space) );
            }
            .site-body-container .site-body-container_box.one_column .productive-blog-article-content.productive-blockable-element > .siteMaxWidth_Extended,
            .site-body-container .site-body-container_box.one_column .productive-blog-article-content.productive-blockable-element > .elementor .siteMaxWidth_Extended,
            .site-body-container .site-body-container_box.one_column .productive-blog-article-content.productive-blockable-element > .siteMaxWidth_100pc,
            .site-body-container .site-body-container_box.one_column .productive-blog-article-content.productive-blockable-element > .elementor .siteMaxWidth_100pc {
                max-width: calc( ' . $blog_page_width_value . 'px + var(--inline-half-of-side-space) );
            }
            .site-body-container .site-body-container_box.one_column .productive-blog-article-content.productive-blockable-element > blockquote {
                max-width: calc( ' . $blog_page_width_value . 'px - var(--margin_or_padding_spacing_s) );
            }
        ';
    }

    if ( ! productive_passmax_announcement_banner_bg_image() ) {
        $css .= '.site-body-container_box_full.header-announcement-container {
            background: ' . $css_settings['productive_passmax_announcement_banner_bg_color'] . ';
        }';
    }

    if ( $css_settings['productive_passmax_single_post_use_drop_caps'] ) {
        $css .= '.productive-blog-article .productive-blog-article-content p:first-letter {
            float: left;
            line-height: 90%;
            font-size: 360%;
            margin: 0.5rem 0.5rem 0 0;
        }';
    }
    
    $important = '';
    
    if ( function_exists('pass_addons_is_active') ) {

        $css_settings_banner_text_large = productive_passmax_get_custom_css_in_style_banner_title($important);
        if ( !empty($css_settings_banner_text_large ) ) {
            $css .= '.productiveminds_banner_container.home .productiveminds_hero_content_title, body.home .banner-slider.std .productiveminds_hero_content_title {';
            foreach ( $css_settings_banner_text_large as $key => $value) {
               $css .= $value;
            }
            $css .= '}';
        }
        $css_settings_banner_text_small = productive_passmax_get_custom_css_in_style_banner_explainer($important);
        if ( !empty($css_settings_banner_text_small ) ) {
            $css .= '.productiveminds_banner_container.home .productiveminds_hero_content_main, body.home .banner-slider.std .productiveminds_hero_content_main {';
            foreach ( $css_settings_banner_text_small as $key => $value) {
               $css .= $value;
            }
            $css .= '}';
        }
        $css_settings_banner_text_auxiliary = productive_passmax_get_custom_css_in_style_banner_auxiliary($important);
        if ( !empty($css_settings_banner_text_auxiliary ) ) {
            $css .= '.productiveminds_banner_container.home .productiveminds_hero_content_auxiliary, body.home .banner-slider.std .productiveminds_hero_content_auxiliary {';
            foreach ( $css_settings_banner_text_auxiliary as $key => $value) {
               $css .= $value;
            }
            $css .= '}';
        }
        $css_settings_banner_ctas = productive_passmax_get_custom_css_in_style_banner_ctas($important);
        if ( !empty($css_settings_banner_ctas ) ) {
            $css .= '.cta a, '
                    . '.cta a.cta2 {';
            foreach ( $css_settings_banner_ctas as $key => $value) {
               $css .= $value;
            }
            $css .= '}';
        }

        $css_settings_power_button = productive_passmax_get_custom_css_in_style_power_button($important);
        if ( !empty($css_settings_power_button ) ) {
            $css .= 'a.header-power-button-anchor {';
            foreach ( $css_settings_power_button as $key => $value) {
               $css .= $value;
            }
            $css .= '}';
        }
        
        if ( !function_exists( 'productiveminds_theme_extra_is_active' ) ) {
            $css_settings_custom_palette = productive_global_get_custom_palette_colors($important);
            $css  .= ':root {';
            if ( !empty($css_settings_custom_palette ) ) {
                foreach ( $css_settings_custom_palette as $key => $value) {
                   $css .= $value;
                }
            }
            $css .= '}';
        }

    }
    
    return trim($css); 
}
function productive_passmax_get_custom_css($important = '') {
    $local_style_setting = array();
    
    $local_style_setting['productive_passmax_the_logo_size'] = productive_passmax_the_logo_size();
    $local_style_setting['productive_passmax_the_logo_vertical_spacing'] = productive_passmax_the_logo_vertical_spacing();
    $local_style_setting['productive_passmax_the_logo_size_footer'] = productive_passmax_the_logo_size_footer();
    $local_style_setting['productive_passmax_off_canvas_logo_size'] = productive_passmax_off_canvas_logo_size();
    
    $local_style_setting['productive_passmax_announcement_copy_text_color'] = productive_passmax_announcement_copy_text_color();
    $local_style_setting['productive_passmax_announcement_cta_text_color'] = productive_passmax_announcement_cta_text_color();
    $local_style_setting['productive_passmax_announcement_cta_bg_color'] = productive_passmax_announcement_cta_bg_color();
    $local_style_setting['productive_passmax_announcement_cta_bg_color_hover'] = productive_passmax_announcement_cta_bg_color_hover();
    $local_style_setting['productive_passmax_announcement_close_btn_color'] = productive_passmax_announcement_close_btn_color();
    $local_style_setting['productive_passmax_announcement_cta_shape'] = productive_global_get_button_radius_css ( productive_passmax_announcement_cta_shape() );
    $local_style_setting['productive_passmax_announcement_banner_bg_color'] = productive_passmax_announcement_banner_bg_color();
    $local_style_setting['productive_passmax_announcement_banner_border_color'] = productive_passmax_announcement_banner_border_color();
    
    $local_style_setting['productive_passmax_homepage_banner_height'] = productive_passmax_homepage_banner_height();
        
    $local_style_setting['productive_passmax_homepage_banner_and_slides_content_width']    = productive_passmax_homepage_banner_and_slides_content_width();
    $local_style_setting['productive_passmax_homepage_usp_textarea_1_color']                  = productive_passmax_homepage_usp_textarea_1_color();
    $local_style_setting['productive_passmax_homepage_usp_textarea_2_color']                  = productive_passmax_homepage_usp_textarea_2_color();
    $local_style_setting['productive_passmax_homepage_slide_auxiliary_color']                 = productive_passmax_homepage_slide_auxiliary_color();
    
    $local_style_setting['productive_passmax_homepage_banner_and_slides_overlay_color']       = productive_passmax_homepage_banner_and_slides_overlay_color();
    $local_style_setting['productive_passmax_homepage_banner_and_slides_overlay_opacity']     = productive_passmax_homepage_banner_and_slides_overlay_opacity();
    
    $local_style_setting['productive_passmax_homepage_banner_border_color']                   = productive_passmax_homepage_banner_border_color();
    
    $local_style_setting['productive_passmax_top_banner_overlay_color']                       = productive_passmax_top_banner_overlay_color();
    $local_style_setting['productive_passmax_top_banner_overlay_opacity']                     = productive_passmax_top_banner_overlay_opacity();
    
    $local_style_setting['productive_passmax_homepage_banner_content_container_bg_color']     = productive_passmax_homepage_banner_content_container_bg_color();
    $local_style_setting['productive_passmax_enable_footer_social_media_official_icon_color'] = productive_passmax_enable_footer_social_media_official_icon_color();
    $local_style_setting['productive_passmax_social_media_icon_size_footer'] = productive_passmax_social_media_icon_size_footer();
    
    $local_style_setting['cta_1_text_color'] = productive_passmax_homepage_cta_1_text_color();
    $local_style_setting['cta_1_bg_color'] = productive_passmax_homepage_cta_1_bg_color();
    $local_style_setting['cta_2_text_color'] = productive_passmax_homepage_cta_2_text_color();
    $local_style_setting['cta_2_bg_color'] = productive_passmax_homepage_cta_2_bg_color();
    $local_style_setting['productive_passmax_homepage_cta_1_shape'] = productive_global_get_button_radius_css ( productive_passmax_homepage_cta_1_shape() );
    $local_style_setting['productive_passmax_homepage_cta_2_shape'] = productive_global_get_button_radius_css ( productive_passmax_homepage_cta_2_shape() );
    
    $local_style_setting['productive_passmax_power_button_font_color'] = productive_passmax_power_button_font_color();
    $local_style_setting['productive_passmax_power_button_font_color_hover'] = productive_passmax_power_button_font_color_hover();
    $local_style_setting['productive_passmax_power_button_bg_color'] = productive_passmax_power_button_bg_color();
    $local_style_setting['productive_passmax_power_button_bg_color_hover'] = productive_passmax_power_button_bg_color_hover();
    $local_style_setting['productive_passmax_power_button_shape'] = productive_global_get_button_radius_css ( productive_passmax_power_button_shape() );
    
    $local_style_setting['productive_passmax_single_post_content_container_width'] = productive_passmax_single_post_content_container_width();
    $local_style_setting['productive_passmax_single_post_content_alignment'] = productive_passmax_single_post_content_alignment();
    
    $local_style_setting['productive_passmax_payment_methods_logos_size_extra'] = productive_passmax_payment_methods_logos_size_extra();
    
    $local_style_setting['productive_passmax_single_post_use_drop_caps'] = productive_passmax_single_post_use_drop_caps();
        
    return $local_style_setting;
}

function productive_passmax_get_custom_css_in_style_banner_title( $important = '' ) {
    $local_style_setting = array();
    if ( !empty(productive_passmax_banner_text_large_font_family()) ) {
        $local_style_setting['productive_passmax_banner_text_large_font_family'] = 'font-family: var(' . productive_passmax_banner_text_large_font_family() . ') ' . $important . '; ';
    }
    if ( !empty(productive_passmax_banner_text_large_font_style()) ) {
        $local_style_setting['productive_passmax_banner_text_large_font_style'] = 'font-style: ' . productive_passmax_banner_text_large_font_style() . ' ' . $important . '; ';
    }
    if ( !empty(productive_passmax_banner_text_large_font_size()) ) {
        $local_style_setting['productive_passmax_banner_text_large_font_size'] = 'font-size: ' . productive_passmax_banner_text_large_font_size() . 'rem ' . $important . '; ';
    }
    if ( !empty(productive_passmax_banner_text_large_font_weight()) ) {
        $local_style_setting['productive_passmax_banner_text_large_font_weight'] = 'font-weight: ' . productive_passmax_banner_text_large_font_weight() . ' ' . $important . '; ';
    }
    if ( !empty(productive_passmax_banner_text_large_line_height()) ) {
        $local_style_setting['productive_passmax_banner_text_large_line_height'] = 'line-height: ' . productive_passmax_banner_text_large_line_height() . ' ' . $important . '; ';
    }
    if ( !empty(productive_passmax_banner_text_large_text_transform()) ) {
        $local_style_setting['productive_passmax_banner_text_large_text_transform'] = 'text-transform: ' . productive_passmax_banner_text_large_text_transform() . ' ' . $important . '; ';
    }
    if ( !empty(productive_passmax_banner_text_large_text_decoration()) ) {
        $local_style_setting['productive_passmax_banner_text_large_text_decoration'] = 'text-decoration: ' . str_replace('_', ' ', productive_passmax_banner_text_large_text_decoration()) . ' ' . $important . '; ';
    }

    return $local_style_setting;
}

function productive_passmax_get_custom_css_in_style_banner_explainer( $important = '' ) {
    $local_style_setting = array();
    if ( !empty(productive_passmax_banner_text_small_font_family()) ) {
        $local_style_setting['productive_passmax_banner_text_small_font_family'] = 'font-family: var(' . productive_passmax_banner_text_small_font_family() . ') ' . $important . '; ';
    }
    if ( !empty(productive_passmax_banner_text_small_font_style()) ) {
        $local_style_setting['productive_passmax_banner_text_small_font_style'] = 'font-style: ' . productive_passmax_banner_text_small_font_style() . ' ' . $important . '; ';
    }
    if ( !empty(productive_passmax_banner_text_small_font_size()) ) {
        $local_style_setting['productive_passmax_banner_text_small_font_size'] = 'font-size: ' . productive_passmax_banner_text_small_font_size() . 'rem ' . $important . '; ';
    }
    if ( !empty(productive_passmax_banner_text_small_font_weight()) ) {
        $local_style_setting['productive_passmax_banner_text_small_font_weight'] = 'font-weight: ' . productive_passmax_banner_text_small_font_weight() . ' ' . $important . '; ';
    }
    if ( !empty(productive_passmax_banner_text_small_line_height()) ) {
        $local_style_setting['productive_passmax_banner_text_small_line_height'] = 'line-height: ' . productive_passmax_banner_text_small_line_height() . ' ' . $important . '; ';
    }
    if ( !empty(productive_passmax_banner_text_small_text_transform()) ) {
        $local_style_setting['productive_passmax_banner_text_small_text_transform'] = 'text-transform: ' . productive_passmax_banner_text_small_text_transform() . ' ' . $important . '; ';
    }
    if ( !empty(productive_passmax_banner_text_small_text_decoration()) ) {
        $local_style_setting['productive_passmax_banner_text_small_text_decoration'] = 'text-decoration: ' . str_replace('_', ' ', productive_passmax_banner_text_small_text_decoration()) . ' ' . $important . '; ';
    }
    return $local_style_setting;
}

function productive_passmax_get_custom_css_in_style_banner_auxiliary( $important = '' ) {
    $local_style_setting = array();
    if ( !empty(productive_passmax_slider_auxiliary_font_family()) ) {
        $local_style_setting['productive_passmax_slider_auxiliary_font_family'] = 'font-family: var(' . productive_passmax_slider_auxiliary_font_family() . ') ' . $important . '; ';
    }
    if ( !empty(productive_passmax_slider_auxiliary_font_style()) ) {
        $local_style_setting['productive_passmax_slider_auxiliary_font_style'] = 'font-style: ' . productive_passmax_slider_auxiliary_font_style() . ' ' . $important . '; ';
    }
    if ( !empty(productive_passmax_slider_auxiliary_font_size()) ) {
        $local_style_setting['productive_passmax_slider_auxiliary_font_size'] = 'font-size: ' . productive_passmax_slider_auxiliary_font_size() . 'rem ' . $important . '; ';
    }
    if ( !empty(productive_passmax_slider_auxiliary_font_weight()) ) {
        $local_style_setting['productive_passmax_slider_auxiliary_font_weight'] = 'font-weight: ' . productive_passmax_slider_auxiliary_font_weight() . ' ' . $important . '; ';
    }
    if ( !empty(productive_passmax_slider_auxiliary_line_height()) ) {
        $local_style_setting['productive_passmax_slider_auxiliary_line_height'] = 'line-height: ' . productive_passmax_slider_auxiliary_line_height() . ' ' . $important . '; ';
    }
    if ( !empty(productive_passmax_slider_auxiliary_text_transform()) ) {
        $local_style_setting['productive_passmax_slider_auxiliary_text_transform'] = 'text-transform: ' . productive_passmax_slider_auxiliary_text_transform() . ' ' . $important . '; ';
    }
    if ( !empty(productive_passmax_slider_auxiliary_text_decoration()) ) {
        $local_style_setting['productive_passmax_slider_auxiliary_text_decoration'] = 'text-decoration: ' . str_replace('_', ' ', productive_passmax_slider_auxiliary_text_decoration()) . ' ' . $important . '; ';
    }
    return $local_style_setting;
}

function productive_passmax_get_custom_css_in_style_banner_ctas( $important = '' ) {
    $local_style_setting = array();
    if ( !empty(productive_passmax_banner_ctas_font_family()) ) {
        $local_style_setting['productive_passmax_banner_ctas_font_family'] = 'font-family: var(' . productive_passmax_banner_ctas_font_family() . ') ' . $important . '; ';
    }
    if ( !empty(productive_passmax_banner_ctas_font_style()) ) {
        $local_style_setting['productive_passmax_banner_ctas_font_style'] = 'font-style: ' . productive_passmax_banner_ctas_font_style() . ' ' . $important . '; ';
    }
    if ( !empty(productive_passmax_banner_ctas_font_size()) ) {
        $local_style_setting['productive_passmax_banner_ctas_font_size'] = 'font-size: ' . productive_passmax_banner_ctas_font_size() . 'rem ' . $important . '; ';
    }
    if ( !empty(productive_passmax_banner_ctas_font_weight()) ) {
        $local_style_setting['productive_passmax_banner_ctas_font_weight'] = 'font-weight: ' . productive_passmax_banner_ctas_font_weight() . ' ' . $important . '; ';
    }
    if ( !empty(productive_passmax_banner_ctas_line_height()) ) {
        $local_style_setting['productive_passmax_banner_ctas_line_height'] = 'line-height: ' . productive_passmax_banner_ctas_line_height() . ' ' . $important . '; ';
    }
    if ( !empty(productive_passmax_banner_ctas_text_transform()) ) {
        $local_style_setting['productive_passmax_banner_ctas_text_transform'] = 'text-transform: ' . productive_passmax_banner_ctas_text_transform() . ' ' . $important . '; ';
    }
    if ( !empty(productive_passmax_banner_ctas_text_decoration()) ) {
        $local_style_setting['productive_passmax_banner_ctas_text_decoration'] = 'text-decoration: ' . str_replace('_', ' ', productive_passmax_banner_ctas_text_decoration()) . ' ' . $important . '; ';
    }
    return $local_style_setting;
}

function productive_passmax_get_custom_css_in_style_power_button( $important = '' ) {
    $local_style_setting = array();
    if ( !empty(productive_passmax_power_button_font_family()) ) {
        $local_style_setting['productive_passmax_power_button_font_family'] = 'font-family: var(' . productive_passmax_power_button_font_family() . ') ' . $important . '; ';
    }
    if ( !empty(productive_passmax_power_button_font_style()) ) {
        $local_style_setting['productive_passmax_power_button_font_style'] = 'font-style: ' . productive_passmax_power_button_font_style() . ' ' . $important . '; ';
    }
    if ( !empty(productive_passmax_power_button_font_size()) ) {
        $local_style_setting['productive_passmax_power_button_font_size'] = 'font-size: ' . productive_passmax_power_button_font_size() . 'rem ' . $important . '; ';
    }
    if ( !empty(productive_passmax_power_button_font_weight()) ) {
        $local_style_setting['productive_passmax_power_button_font_weight'] = 'font-weight: ' . productive_passmax_power_button_font_weight() . ' ' . $important . '; ';
    }
    if ( !empty(productive_passmax_power_button_line_height()) ) {
        $local_style_setting['productive_passmax_power_button_line_height'] = 'line-height: ' . productive_passmax_power_button_line_height() . ' ' . $important . '; ';
    }
    if ( !empty(productive_passmax_power_button_text_transform()) ) {
        $local_style_setting['productive_passmax_power_button_text_transform'] = 'text-transform: ' . productive_passmax_power_button_text_transform() . ' ' . $important . '; ';
    }
    if ( !empty(productive_passmax_power_button_text_decoration()) ) {
        $local_style_setting['productive_passmax_power_button_text_decoration'] = 'text-decoration: ' . str_replace('_', ' ', productive_passmax_power_button_text_decoration()) . ' ' . $important . '; ';
    }
    return $local_style_setting;
}
