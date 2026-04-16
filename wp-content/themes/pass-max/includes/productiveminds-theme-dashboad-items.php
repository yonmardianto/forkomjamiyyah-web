<?php
/**
 * @package     pass-max
 * @author      productiveminds.com
 * @copyright   productiveminds.com
 * 
 */

if ( !function_exists('productive_theme_dashboard_items') ) {
    
    function productive_theme_dashboard_items_customizer() {
        
        $items = array();
        $is_forms = function_exists('productive_forms_is_active');
        $is_pass_addons = function_exists('pass_addons_is_active');
        $is_pass_addons_extra = function_exists('pass_addons_extra_is_active');
        
        $url1 = admin_url( 'customize.php?autofocus[section]=title_tagline' );
        $customizer_1 = array(
            'customizer' => esc_html__( 'Site Identity', 'pass-max' ),
            'slug' => 'identity',
            'plugin' => 'in_theme',
            'plugin_exists' => true,
            'content' => esc_html__( 'Logo, site name, favicon', 'pass-max' ),
            'url' => $url1,
            'is_extra' => 0,
        );
        $items['identity'] = $customizer_1;
        
        if( $is_pass_addons ) {
            $url3a = admin_url( 'customize.php?autofocus[section]=pass_addons_all_headings_font_typography_options' );
        } else {
            $url3a = PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_PASS_ADDONS_REPO_URL;
        }
        $customizer_3a = array(
            'customizer' => esc_html__( 'Headings Typography', 'pass-max' ),
            'slug' => 'typography_headings',
            'plugin' => 'pass_addons',
            'plugin_exists' => $is_pass_addons,
            'content' => esc_html__( 'Fonts typography for h1, h2, h3, h4...', 'pass-max' ),
            'url' => $url3a,
            'is_extra' => 0,
        );
        $items['typography_headings'] = $customizer_3a;
        
        if( $is_pass_addons ) {
            $url3b = admin_url( 'customize.php?autofocus[section]=pass_addons_body_font_typography_options' );
        } else {
            $url3b = PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_PASS_ADDONS_REPO_URL;
        }
        $customizer_3b = array(
            'customizer' => esc_html__( 'Site Body Typography', 'pass-max' ),
            'slug' => 'typography_body',
            'plugin' => 'pass_addons',
            'plugin_exists' => $is_pass_addons,
            'content' => esc_html__( 'Control site-wide typography', 'pass-max' ),
            'url' => $url3b,
            'is_extra' => 0,
        );
        $items['typography_body'] = $customizer_3b;
        
        $url3c = admin_url( 'customize.php?autofocus[section]=productive_passmax_color_scheme_options' );
        $customizer_3c = array(
            'customizer' => esc_html__( 'Switch Colour Schemes', 'pass-max' ),
            'slug' => 'colour_scheme',
            'plugin' => 'in_theme',
            'plugin_exists' => true,
            'content' => esc_html__( 'With one-click, change all colours', 'pass-max' ),
            'url' => $url3c,
            'is_extra' => 1,
        );
        $items['colour_scheme'] = $customizer_3c;
        
        $url3d = admin_url( 'customize.php?autofocus[section]=productive_passmax_sitewide_colors_options' );
        $customizer_3d = array(
            'customizer' => esc_html__( 'Individual Colours', 'pass-max' ),
            'slug' => 'sitewide_colors',
            'plugin' => 'in_theme',
            'plugin_exists' => true,
            'content' => esc_html__( 'Customize specific colour', 'pass-max' ),
            'url' => $url3d,
            'is_extra' => 1,
        );
        $items['sitewide_colors'] = $customizer_3d;
        
        if( $is_pass_addons ) {
            $url3_plus_1 = admin_url( 'customize.php?autofocus[section]=pass_addons_breadcrumb_options' );
        } else {
            $url3_plus_1 = PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_PASS_ADDONS_REPO_URL;
        }
        $customizer_3_plus_1 = array(
            'customizer' => esc_html__( 'Breadcrumb Options', 'pass-max' ),
            'slug' => 'breadcrumb',
            'plugin' => 'pass_addons',
            'plugin_exists' => $is_pass_addons,
            'content' => esc_html__( 'ontrol site-wide Breadcrumbs', 'pass-max' ),
            'url' => $url3_plus_1,
            'is_extra' => 0,
        );
        $items['breadcrumb'] = $customizer_3_plus_1;
        
        if( $is_forms ) {
            $url3_plus_2 = admin_url( 'customize.php?autofocus[section]=productive_forms_newsletter_options' );
        } else {
            $url3_plus_2 = PRODUCTIVE_PASSMAX_PRODUCTIVE_PLUGIN_FORMS_REPO_URL;
        }
        $customizer_3_plus_2 = array(
            'customizer' => esc_html__( 'Newsletter Opt Ins', 'pass-max' ),
            'slug' => 'newsletter',
            'plugin' => 'productive_forms',
            'plugin_exists' => $is_forms,
            'content' => esc_html__( 'Activate newsletter opt-ins', 'pass-max' ),
            'url' => $url3_plus_2,
            'is_extra' => 0,
        );
        $items['newsletter'] = $customizer_3_plus_2;
        
        if( $is_forms ) {
            $url3_plus_3 = admin_url( 'customize.php?autofocus[section]=productive_forms_header_contact_section_options' );
        } else {
            $url3_plus_3 = PRODUCTIVE_PASSMAX_PRODUCTIVE_PLUGIN_FORMS_REPO_URL;
        }
        $customizer_3_plus_3 = array(
            'customizer' => esc_html__( 'Header Contact Section', 'pass-max' ),
            'slug' => 'header_contact_section',
            'plugin' => 'productive_forms',
            'plugin_exists' => $is_forms,
            'content' => esc_html__( 'Body color and background', 'pass-max' ),
            'url' => $url3_plus_3,
            'is_extra' => 0,
        );
        $items['header_contact_section'] = $customizer_3_plus_3;
        
        $url4 = admin_url( 'customize.php?autofocus[section]=productive_passmax_layout_options' );
        $customizer_4 = array(
            'customizer' => esc_html__( 'Website Layout', 'pass-max' ),
            'slug' => 'layout',
            'plugin' => 'in_theme',
            'plugin_exists' => true,
            'content' => esc_html__( '1 column, left or right sidebars, 3 columns', 'pass-max' ),
            'url' => $url4,
            'is_extra' => 0,
        );
        $items['layout'] = $customizer_4;
        
        if( productive_passmax_is_woocommerce_activated() ) {
            /*
            $url5 = admin_url( 'customize.php?autofocus[section]=productive_passmax_theme_commerce_product_page' );
            $customizer_5 = array(
                'customizer' => esc_html__( 'Product Page', 'pass-max' ),
                'slug' => 'woo_product_page',
                'plugin' => 'in_theme',
                'plugin_exists' => true,
                'content' => esc_html__( 'Customize Product Page', 'pass-max' ),
                'url' => $url5,
                'is_extra' => 1,
            );
            $items['woo_product_page'] = $customizer_5;
            */
            
            $url6a = admin_url( 'customize.php?autofocus[section]=productive_passmax_theme_commerce_categories' );
            $customizer_6a = array(
                'customizer' => esc_html__( 'Product Archives', 'pass-max' ),
                'slug' => 'woo_product_archive',
                'plugin' => 'in_theme',
                'plugin_exists' => true,
                'content' => esc_html__( 'Shop and Product categories', 'pass-max' ),
                'url' => $url6a,
                'is_extra' => 1,
            );
            $items['woo_product_archive'] = $customizer_6a;

            $url6b = admin_url( 'customize.php?autofocus[section]=productive_passmax_theme_commerce_generic' );
            $customizer_6b = array(
                'customizer' => esc_html__( 'WooCommerce Options', 'pass-max' ),
                'slug' => 'woo_generic_options',
                'plugin' => 'in_theme',
                'plugin_exists' => true,
                'content' => esc_html__( 'General WooCommerce options', 'pass-max' ),
                'url' => $url6b,
                'is_extra' => 0,
            );
            $items['woo_generic_options'] = $customizer_6b;

            $url6c = admin_url( 'customize.php?autofocus[section]=productive_passmax_theme_commerce_payment_methods' );
            $customizer_6c = array(
                'customizer' => esc_html__( 'Payment Methods', 'pass-max' ),
                'slug' => 'woo_payment_method_options',
                'plugin' => 'in_theme',
                'plugin_exists' => true,
                'content' => esc_html__( 'Accepted payment method logos', 'pass-max' ),
                'url' => $url6c,
                'is_extra' => 1,
            );
            $items['woo_payment_method_options'] = $customizer_6c;
        }
        
        $url7a = admin_url( 'customize.php?autofocus[section]=productive_passmax_theme_header' );
        $customizer_7a = array(
            'customizer' => esc_html__( 'Header Option', 'pass-max' ),
            'slug' => 'header',
            'plugin' => 'in_theme',
            'plugin_exists' => true,
            'content' => esc_html__( 'Website header  style and content', 'pass-max' ),
            'url' => $url7a,
            'is_extra' => 0,
        );
        $items['header'] = $customizer_7a;
        
        $url7b = admin_url( 'customize.php?autofocus[section]=productive_passmax_theme_header' );
        $customizer_7b = array(
            'customizer' => esc_html__( 'Switch Header Design', 'pass-max' ),
            'slug' => 'header_design',
            'plugin' => 'in_theme',
            'plugin_exists' => true,
            'content' => esc_html__( 'Change design and colour mode', 'pass-max' ),
            'url' => $url7b,
            'is_extra' => 0,
        );
        $items['header_design'] = $customizer_7b;
        
        $url7c = admin_url( 'customize.php?autofocus[section]=productive_passmax_localization_options' );
        $customizer_7c = array(
            'customizer' => esc_html__( 'Localization', 'pass-max' ),
            'slug' => 'header_localisation',
            'plugin' => 'in_theme',
            'plugin_exists' => true,
            'content' => esc_html__( 'Language & Currency switcher options', 'pass-max' ),
            'url' => $url7c,
            'is_extra' => 1,
        );
        $items['header_localisation'] = $customizer_7c;
        
        $url8a = admin_url( 'customize.php?autofocus[section]=productive_passmax_footer_options' );
        $customizer_8a = array(
            'customizer' => esc_html__( 'Footer Options', 'pass-max' ),
            'slug' => 'footer',
            'plugin' => 'in_theme',
            'plugin_exists' => true,
            'content' => esc_html__( 'Website footer style and content', 'pass-max' ),
            'url' => $url8a,
            'is_extra' => 0,
        );
        $items['footer'] = $customizer_8a;
        
        $url8b = admin_url( 'customize.php?autofocus[section]=productive_passmax_footer_options' );
        $customizer_8b = array(
            'customizer' => esc_html__( 'Switch Footer Design', 'pass-max' ),
            'slug' => 'footer_design',
            'plugin' => 'in_theme',
            'plugin_exists' => true,
            'content' => esc_html__( 'Change design and colour mode', 'pass-max' ),
            'url' => $url8b,
            'is_extra' => 0,
        );
        $items['footer_design'] = $customizer_8b;
        
        $url8c = admin_url( 'customize.php?autofocus[section]=productive_passmax_footer_copyright_options' );
        $customizer_8c = array(
            'customizer' => esc_html__( 'Switch Copyright Design', 'pass-max' ),
            'slug' => 'copyright_design',
            'plugin' => 'in_theme',
            'plugin_exists' => true,
            'content' => esc_html__( 'Change copyright section design', 'pass-max' ),
            'url' => $url8c,
            'is_extra' => 1,
        );
        $items['copyright_design'] = $customizer_8c;
        
        $url9 = admin_url( 'customize.php?autofocus[section]=productive_passmax_404_options' );
        $customizer_9 = array(
            'customizer' => esc_html__( '404 Page', 'pass-max' ),
            'slug' => 'page_404',
            'plugin' => 'in_theme',
            'plugin_exists' => true,
            'content' => esc_html__( 'Make page 404 interesting', 'pass-max' ),
            'url' => $url9,
            'is_extra' => 0,
        );
        $items['page_404'] = $customizer_9;
        
        $url12 = admin_url( 'customize.php?autofocus[section]=productive_passmax_homepage_blog_options' );
        $customizer_12 = array(
            'customizer' => esc_html__( 'Blog Archive', 'pass-max' ),
            'slug' => 'blog_archive',
            'plugin' => 'in_theme',
            'plugin_exists' => true,
            'content' => esc_html__( 'Content and controls options', 'pass-max' ),
            'url' => $url12,
            'is_extra' => 0,
        );
        $items['blog_archive'] = $customizer_12;
        
        $url13 = admin_url( 'customize.php?autofocus[section]=productive_passmax_homepage_blog_single_options' );
        $customizer_13 = array(
            'customizer' => esc_html__( 'Blog Page', 'pass-max' ),
            'slug' => 'blog_signle',
            'plugin' => 'in_theme',
            'plugin_exists' => true,
            'content' => esc_html__( 'Content and controls options', 'pass-max' ),
            'url' => $url13,
            'is_extra' => 0,
        );
        $items['blog_signle'] = $customizer_13;
        
        $url13b = admin_url( 'customize.php?autofocus[section]=productive_passmax_homepage_blog_single_options' );
        $customizer_13b = array(
            'customizer' => esc_html__( 'Blog Page Width', 'pass-max' ),
            'slug' => 'blog_signle_extra',
            'plugin' => 'in_theme',
            'plugin_exists' => true,
            'content' => esc_html__( 'Be specific about blog page width', 'pass-max' ),
            'url' => $url13b,
            'is_extra' => 1,
        );
        $items['blog_signle_extra'] = $customizer_13b;
        
        return $items;
    }
    
}
