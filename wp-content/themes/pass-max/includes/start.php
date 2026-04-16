<?php
/**
 *
 * @package     pass-max
 * @author      productiveminds.com
 * @copyright   productiveminds.com
 */

define( 'PRODUCTIVE_PASSMAX_THEME_BASE_PATH', get_template_directory() );
define( 'PRODUCTIVE_PASSMAX_THEME_BASE_URI', get_template_directory_uri() );

require_once PRODUCTIVE_PASSMAX_THEME_BASE_PATH . '/includes/productiveminds-is-active.php';

define( 'PRODUCTIVE_PASSMAX_SITE_HOME_URL', home_url() );
define( 'PRODUCTIVE_PASSMAX_OPTION_EXTRAS_KEY', 'productive_passmax_extras_version' );
define( 'PRODUCTIVE_PASSMAX_OPTION_EXTRAS_LAST_UPDATE_TIME', 'productive_passmax_extras_last_update_time' );

$productive_passmax_theme_version_obj = wp_get_theme();
$productive_passmax_theme_version = $productive_passmax_theme_version_obj->get( 'Version' );

$productiveminds_base_demo_url = 'https://demo.productiveminds.com';
$productiveminds_base_support_url = 'https://www.productiveminds.com/support';
$productiveminds_base_documentation_url = 'https://www.productiveminds.com/support/docs';

$theme_slug = $productive_passmax_theme_version_obj->get( 'TextDomain' );
$theme_name = $productive_passmax_theme_version_obj->get( 'Name' );
$theme_url = $productive_passmax_theme_version_obj->get( 'ThemeURI' );
$author_url = $productive_passmax_theme_version_obj->get( 'AuthorURI' );
$theme_demo_url = $productiveminds_base_demo_url . '/' . $theme_slug;
$theme_support_url = $productiveminds_base_support_url;
$theme_documentation_url = $productiveminds_base_documentation_url . '/' . $theme_slug;
$theme_repo_url = 'https://wordpress.org/themes/' . $theme_slug;
$theme_review_repo_url = 'https://wordpress.org/support/theme/' . $theme_slug . '/reviews';
$theme_review_pro_url  = $author_url . '/product-reviews/' . $theme_slug;
$theme_demo_importer_plugin_url = 'https://wordpress.org/plugins/' . 'productive-demo-importer';

define( 'PRODUCTIVE_PASSMAX_VERSION', $productive_passmax_theme_version );
define( 'PRODUCTIVE_PASSMAX_ADMIN_PAGE_REQUEST_URI', 'productive_passmax_admin_options' );
define( 'PRODUCTIVE_PASSMAX_WOO_SIDEBAR_TEXT', 'is_woo_sidebar' );

define( 'PRODUCTIVE_PASSMAX_THEME_DEVELOPER_NAME', 'productiveminds.com' );
define( 'PRODUCTIVE_PASSMAX_THEME_DEVELOPER_WEBSITE', $author_url );
define( 'PRODUCTIVE_PASSMAX_CURRENT_THEME_NAME', $theme_name );

if( is_child_theme() ) {
    define( 'PRODUCTIVE_PASSMAX_CURRENT_PARENT_THEME_NAME', $productive_passmax_theme_version_obj->parent()->get( 'Name' ) );
} else {
    define( 'PRODUCTIVE_PASSMAX_CURRENT_PARENT_THEME_NAME', PRODUCTIVE_PASSMAX_CURRENT_THEME_NAME );
}

define( 'PRODUCTIVE_PASSMAX_CURRENT_THEME_TEXT_DOMAIN', $theme_slug );
define( 'PRODUCTIVE_PASSMAX_THEME_DEMO_URL', $theme_demo_url . '?utm_source=dash_' . $theme_slug );

define( 'PRODUCTIVE_PASSMAX_THEME_SUPPORT_URL', $theme_support_url . '?utm_source=dash_' . $theme_slug );
define( 'PRODUCTIVE_PASSMAX_THEME_DOCUMENTATION_URL', $theme_documentation_url . '?utm_source=dash_' . $theme_slug );
define( 'PRODUCTIVE_PASSMAX_THEME_DEMO_IMPORTER_PLUGIN_URL', $theme_demo_importer_plugin_url );

define( 'PRODUCTIVE_PASSMAX_THEME_REVIEW_ON_REPO_URL', $theme_review_repo_url );
define( 'PRODUCTIVE_PASSMAX_THEME_REVIEW_ON_PRO_URL', $theme_review_pro_url . '?utm_source=dash_' . $theme_slug );

$theme_url_utm_source = '?utm_source=user_' . $theme_slug;
if( is_admin() ) {
    $theme_url_utm_source = '?utm_source=dash_' . $theme_slug;
}
define( 'PRODUCTIVE_PASSMAX_THEME_REPO_URL', $theme_repo_url );

define( 'PRODUCTIVE_PASSMAX_THEME_FEATURES_OR_BUY_URL', $theme_url . $theme_url_utm_source );
define( 'PRODUCTIVE_PASSMAX_THEME_FEATURES_FREE_VS_PRO_URL', $theme_url . '#free-vs-pro' );

define( 'PRODUCTIVE_PASSMAX_ADMIN_OVERVIEW_REQUEST_URI', 'productive_options_overview' );

define( 'PRODUCTIVE_PASSMAX_PRODUCTIVE_PLUGIN_COMMERCE_REPO_URL', 'https://wordpress.org/plugins/productive-commerce' );
define( 'PRODUCTIVE_PASSMAX_PRODUCTIVE_PLUGIN_COMMERCE_OUR_URL', PRODUCTIVE_PASSMAX_THEME_DEVELOPER_WEBSITE . '/product/productive-commerce' . '?utm_source=dash_' . $theme_slug );
define( 'PRODUCTIVE_PASSMAX_PRODUCTIVE_PLUGIN_COMMERCE_ADMIN_OPTIONS_LINK', admin_url( 'admin.php?page=productive_commerce_options_submenu' ) );

define( 'PRODUCTIVE_PASSMAX_PRODUCTIVE_PLUGIN_FORMS_REPO_URL', 'https://wordpress.org/plugins/productive-forms' );
define( 'PRODUCTIVE_PASSMAX_PRODUCTIVE_PLUGIN_FORMS_OUR_URL', PRODUCTIVE_PASSMAX_THEME_DEVELOPER_WEBSITE . '/product/productive-forms' . '?utm_source=dash_' . $theme_slug );
define( 'PRODUCTIVE_PASSMAX_PRODUCTIVE_PLUGIN_FORMS_ADMIN_OPTIONS_LINK', admin_url( 'admin.php?page=productive_forms_options_submenu' ) );

define( 'PRODUCTIVE_PASSMAX_PRODUCTIVE_PLUGIN_STYLE_REPO_URL', 'https://wordpress.org/plugins/productive-style' );
define( 'PRODUCTIVE_PASSMAX_PRODUCTIVE_PLUGIN_STYLE_OUR_URL', PRODUCTIVE_PASSMAX_THEME_DEVELOPER_WEBSITE . '/product/productive-style' . '?utm_source=dash_' . $theme_slug );

define( 'PRODUCTIVE_PASSMAX_PRODUCTIVE_PLUGIN_DEMO_IMPORTER_REPO_URL', 'https://wordpress.org/plugins/productive-demo-importer' );
define( 'PRODUCTIVE_PASSMAX_PRODUCTIVE_PLUGIN_DEMO_IMPORTER_OUR_URL', PRODUCTIVE_PASSMAX_THEME_DEVELOPER_WEBSITE . '/product/productive-demo-importer' . '?utm_source=dash_' . $theme_slug );
define( 'PRODUCTIVE_PASSMAX_PRODUCTIVE_PLUGIN_DEMO_IMPORTER_ADMIN_OPTIONS_LINK', admin_url( 'admin.php?page=productive_demo_importer_options_submenu' ) );

define( 'PRODUCTIVE_PASSMAX_THE_LOGO_WIDTH_DEFAULT', 100 );
define( 'PRODUCTIVE_PASSMAX_THE_LOGO_WIDTH_MIN', 60 );
define( 'PRODUCTIVE_PASSMAX_THE_LOGO_WIDTH_MAX', 300 );

define( 'PRODUCTIVE_PASSMAX_DEFAULT_BANNER_HEIGHT_IMAGE', 700 );
define( 'PRODUCTIVE_PASSMAX_THE_BANNER_HEIGHT_MIN', 350 );
define( 'PRODUCTIVE_PASSMAX_THE_BANNER_HEIGHT_MAX', 1000 );
define( 'PRODUCTIVE_PASSMAX_DEFAULT_BANNER_HEIGHT_SLIDER', 700 );

define( 'PRODUCTIVE_PASSMAX_THEME_CONTENT_MIN_WIDTH', 700 );
define( 'PRODUCTIVE_PASSMAX_THEME_CONTENT_DEFAULT_WIDTH', 1280 );
define( 'PRODUCTIVE_PASSMAX_THEME_CONTENT_CUSTOMIZER_STEPS', 100 );

define( 'PRODUCTIVE_PASSMAX_THEME_SCRIPTS_NONCE', 'productive_passmax_theme_scripts_nonce' );

define( 'PRODUCTIVE_PASSMAX_PLUGIN_SLIDER_POST_TYPE_SLUG' , 'pro_slider');
define( 'PRODUCTIVE_PASSMAX_PLUGIN_SLIDER_POST_TYPE_META_KEY' , '_pro_slider');
define( 'PRODUCTIVE_PASSMAX_PLUGIN_SLIDER_TAXONOMY_SLUG' , 'pro-slider-type');
define( 'PRODUCTIVE_PASSMAX_PLUGIN_SLIDER_SLUG_FRONTPAGE_SLIDER_TYPE_1' , 'h-e-slider-type1');

define( 'PRODUCTIVE_PASSMAX_PLUGIN_CONTENT_ELEMENT_SLUG' , 'pro_content_element');
define( 'PRODUCTIVE_PASSMAX_PLUGIN_CONTENT_ELEMENT_POST_TYPE_META_KEY', '_pro_content_element' );
define( 'PRODUCTIVE_PASSMAX_PLUGIN_CONTENT_ELEMENT_TAXONOMY_SLUG' , 'content-element-type');
define( 'PRODUCTIVE_PASSMAX_PLUGIN_CONTENT_ELEMENT_TYPE_HOMEPAGE_ELEMENTS_SMALL_BANNER' , 'homepage-elements-for-small-banners');

define( 'PRODUCTIVE_PASSMAX_PLUGIN_HOME_SECTION_HERO_TAXONOMY_SLUG_BESTSELLERS' , 'home-section-hero-bestsellers');
define( 'PRODUCTIVE_PASSMAX_PLUGIN_HOME_SECTION_HERO_TAXONOMY_SLUG_LATEST' , 'home-section-hero-latest');
define( 'PRODUCTIVE_PASSMAX_PLUGIN_HOME_SECTION_HERO_TAXONOMY_SLUG_FEATURED' , 'home-section-hero-featured');
define( 'PRODUCTIVE_PASSMAX_PLUGIN_HOME_SECTION_HERO_TAXONOMY_SLUG_ON_SALE' , 'home-section-hero-on-sale');

define( 'PRODUCTIVE_PASSMAX_THEME_WIDGET_TYPE_BLOG_ELEMENT', 'blog_element' );
define( 'PRODUCTIVE_PASSMAX_THEME_BLOG_ELEMENT_POST_TYPE_SLUG', 'post' );
define( 'PRODUCTIVE_PASSMAX_THEME_BLOG_ELEMENT_POST_TYPE_META_KEY', '_post' );

define( 'PRODUCTIVE_PASSMAX_PLUGIN_FAQ_TAXONOMY_SLUG', 'faq-category' );

define( 'PRODUCTIVE_PASSMAX_LEFT_SIDEBAR_ID', 'sidebar_left' );
define( 'PRODUCTIVE_PASSMAX_RIGHT_SIDEBAR_ID', 'sidebar_right' );
define( 'PRODUCTIVE_PASSMAX_WOOCOMMERCE_SIDEBAR_ID', 'sidebar-1' );
define( 'PRODUCTIVE_PASSMAX_WOOCOMMERCE_PRODUCT_PAGE_SIDEBAR_ID', 'sidebar-product-page' );

define( 'PRODUCTIVE_PASSMAX_THEME_PAGE_SLUG_ABOUT' , 'thisisaboutuspage');
define( 'PRODUCTIVE_PASSMAX_THEME_PAGE_QUERY_PARAM_ABOUT' , 'p_about');

define( 'PRODUCTIVE_PASSMAX_HOMEPAGE_USP_IMAGE_REMOTE', get_stylesheet_directory_uri() . '/assets/images/hero-1.webp' );
define( 'PRODUCTIVE_PASSMAX_PLACEHOLDER_IMAGE_POSTS', PRODUCTIVE_PASSMAX_THEME_BASE_URI . '/assets/images/posts-placeholder.webp' );
define( 'PRODUCTIVE_PASSMAX_PLACEHOLDER_IMAGE_TOP_BANNER_ALL', PRODUCTIVE_PASSMAX_THEME_BASE_URI . '/assets/images/top-banner-all.webp' );
define( 'PRODUCTIVE_PASSMAX_PLACEHOLDER_IMAGE_TOP_BANNER_404', PRODUCTIVE_PASSMAX_THEME_BASE_URI . '/assets/images/top-banner-all.webp' );
define( 'PRODUCTIVE_PASSMAX_PLACEHOLDER_IMAGE_PRODUCT_ASSURANCE', PRODUCTIVE_PASSMAX_THEME_BASE_URI . '/assets/images/satisfaction-guarantee.png' );

require PRODUCTIVE_PASSMAX_THEME_BASE_PATH . '/admin/common/options/global/global-settings-admin.php';

// Ensure to include customiser before WooCommerce includes
require PRODUCTIVE_PASSMAX_THEME_BASE_PATH . '/includes/productive-theme-customiser.php';

require PRODUCTIVE_PASSMAX_THEME_BASE_PATH . '/includes/productive-theme-render-functions.php';

require PRODUCTIVE_PASSMAX_THEME_BASE_PATH . '/includes/site-announcement.php';

define( 'PRODUCTIVE_PASSMAX_CUSTOMIZER_show_top_banner' , productive_passmax_show_top_banner() );
define( 'PRODUCTIVE_PASSMAX_CUSTOMIZER_template_layout_options' , productive_passmax_template_layout_options() );

if( productive_passmax_is_productive_forms_active() ) {
    define( 'PRODUCTIVE_PASSMAX_CUSTOMIZER_header_contact_section_switch_on' , productive_forms_header_contact_section_switch_on() );
}

if( function_exists('pass_addons_is_active') && !function_exists('productive_style_is_active') ) {
    define( 'PRODUCTIVE_PASSMAX_CUSTOMIZER_breadcrumb_switch_on' , pass_addons_breadcrumb_switch_on() );
    define( 'PRODUCTIVE_PASSMAX_CUSTOMIZER_breadcrumb_disable_on_pages' , pass_addons_breadcrumb_disable_on_pages() );

    function pass_addons_render_breadcrumb_is_active_on_page() {
        $pass_addons_breadcrumb_css_class = '';
        if( is_page() && (PRODUCTIVE_PASSMAX_CUSTOMIZER_breadcrumb_switch_on && !PRODUCTIVE_PASSMAX_CUSTOMIZER_breadcrumb_disable_on_pages) || (!is_page() && PRODUCTIVE_PASSMAX_CUSTOMIZER_breadcrumb_switch_on) ) {
            $pass_addons_breadcrumb_css_class = 'productive_breadcrumb_is_active_on_page';
        }
        return $pass_addons_breadcrumb_css_class;
    }
} else {
    define( 'PRODUCTIVE_PASSMAX_CUSTOMIZER_breadcrumb_switch_on' , 0 );
    define( 'PRODUCTIVE_PASSMAX_CUSTOMIZER_breadcrumb_disable_on_pages' , 0 );
    function pass_addons_render_breadcrumb_is_active_on_page() {
        return '';
    }
}

if( is_child_theme() ) {
    define( 'PRODUCTIVE_PASSMAX_THEME_SHOW_WELCOME_NOTICE' , productive_global_get_active_productive_child_theme_customizers_id().'_show_theme_welcome_notice');
} else {
    define( 'PRODUCTIVE_PASSMAX_THEME_SHOW_WELCOME_NOTICE' , productive_global_get_active_productive_theme_customizers_id().'_show_theme_welcome_notice');
}

/**
 * WooCommerce includes
 */
require_once PRODUCTIVE_PASSMAX_THEME_BASE_PATH . '/includes/woocommerce.php';

require PRODUCTIVE_PASSMAX_THEME_BASE_PATH . '/includes/theme-global-popup.php';
require PRODUCTIVE_PASSMAX_THEME_BASE_PATH . '/includes/theme-search-popup.php';

$productive_passmax_is_wc_activated = productive_global_is_woocommerce_active();
$is_productive_commerce = productive_passmax_is_productive_commerce_active();
$productive_passmax_customiser_show_search_icon    = productive_passmax_enable_header_search();
$productive_passmax_customiser_show_account_icon   = productive_passmax_enable_header_account() && $productive_passmax_is_wc_activated;
$productive_passmax_customiser_show_cart_icon      = productive_passmax_enable_header_cart() && $productive_passmax_is_wc_activated;
$productive_passmax_customiser_show_wishlist_icon  = productive_passmax_enable_header_wishlist() && $is_productive_commerce && $productive_passmax_is_wc_activated;
$productive_passmax_customiser_show_compare_icon   = productive_passmax_enable_header_compare() && $is_productive_commerce && $productive_passmax_is_wc_activated;

/**
 * Method productiveminds_theme_is_active.
 */
function productiveminds_theme_is_active() {}

function productive_passmax_is_active() {}

/**
 * Method productive_passmax_body_open_action.
 *
 */
function productive_passmax_body_open_action() {
    echo '<a class="skip-link screen-reader-text" href="#site-content">' . esc_html__( 'Skip to content', 'pass-max' ) . '</a>';
}
add_action( 'productive_passmax_body_open', 'productive_passmax_body_open_action' );


/**
 * Register sidebar widgets
 */
function productive_passmax_productiveminds_widgets() {
    
    register_sidebar(
        array(
            'name' => esc_html__('Left Sidebar', 'pass-max'),
            'id' => PRODUCTIVE_PASSMAX_LEFT_SIDEBAR_ID,
            'before_widget' => '<div class="productive_theme_widget_container_sidebar">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        )
    );
    
    register_sidebar(
        array(
            'name' => esc_html__('Right Sidebar', 'pass-max'),
            'id' => PRODUCTIVE_PASSMAX_RIGHT_SIDEBAR_ID,
            'before_widget' => '<div class="productive_theme_widget_container_sidebar">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        )
    );
    
    register_sidebar(
        array(
            'name' => esc_html__('WooCommerce Sidebar (Archive)', 'pass-max'),
            'id' => PRODUCTIVE_PASSMAX_WOOCOMMERCE_SIDEBAR_ID,
            'before_widget' => '<div class="productive_theme_widget_container_sidebar">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        )
    );
    
    register_sidebar(
        array(
            'name' => esc_html__('WooCommerce Sidebar (Product Page)', 'pass-max'),
            'id' => PRODUCTIVE_PASSMAX_WOOCOMMERCE_PRODUCT_PAGE_SIDEBAR_ID,
            'before_widget' => '<div class="productive_theme_widget_container_sidebar">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        )
    );
    
}
add_action( 'widgets_init', 'productive_passmax_productiveminds_widgets' );


/**
 * Method productive_passmax_scripts.
 */
function productive_passmax_scripts() {
    
    global $productive_passmax_is_wc_activated, $productive_passmax_theme_version;
    
    wp_enqueue_style( 'productive_passmax_normalize', PRODUCTIVE_PASSMAX_THEME_BASE_URI . '/libraries/css/normalize.css', array(), $productive_passmax_theme_version );
    
    $productiveminds_theme_pre_parent_handle_css = array( 'productive_passmax_normalize' );
    if ( !function_exists('pass_addons_is_active') ) {
        wp_enqueue_style( 'productive_theme_local_fonts_styles', PRODUCTIVE_PASSMAX_THEME_BASE_URI . '/assets/fonts/google-fonts.min.css', $productiveminds_theme_pre_parent_handle_css, $productive_passmax_theme_version );
        $productiveminds_theme_pre_parent_handle_css = array( 'productive_theme_local_fonts_styles' );
    }
    
    // Swiper
    if ( !function_exists( 'productiveminds_library_swiper') ) {
        wp_enqueue_style( 'productiveminds_library_swiper_css', PRODUCTIVE_PASSMAX_THEME_BASE_URI . '/libraries/swiper/11-2-10/swiper-bundle.min.css', $productiveminds_theme_pre_parent_handle_css, $productive_passmax_theme_version );
        wp_enqueue_script( 'productiveminds_library_swiper_js', PRODUCTIVE_PASSMAX_THEME_BASE_URI . '/libraries/swiper/11-2-10/swiper-bundle.min.js', array(), $productive_passmax_theme_version, true );
        
        $productiveminds_theme_pre_parent_handle_css = array( 'productiveminds_library_swiper_css' );
        
        require_once PRODUCTIVE_PASSMAX_THEME_BASE_PATH . '/libraries/swiper/productiveminds-library-swiper.php';
    }
    
    $wp_scripts = wp_scripts();
    
    // Common assets
    $productiveminds_library_swiper_js = array();
    if( isset( $wp_scripts->registered['productiveminds_library_swiper_js'] ) && !empty($wp_scripts->registered['productiveminds_library_swiper_js']) ) {
        $productiveminds_library_swiper_js[] = 'productiveminds_library_swiper_js';
    }
    if ( !function_exists( 'productiveminds_common_asset') ) {
        if( function_exists( 'productive_global_get_common_swiper_localize_script' ) ) {
            wp_enqueue_style( 'productiveminds_common_css', PRODUCTIVE_PASSMAX_THEME_BASE_URI . '/assets/css/mini/productiveminds-common-css.min.css', $productiveminds_theme_pre_parent_handle_css, $productive_passmax_theme_version );
            wp_style_add_data( 'productiveminds_common_css', 'rtl', 'replace' );
            
            wp_enqueue_script( 'productiveminds_common_js_handle', PRODUCTIVE_PASSMAX_THEME_BASE_URI . '/assets/js/productiveminds-common-js.min.js', $productiveminds_library_swiper_js, $productive_passmax_theme_version, true );
            
            $productiveminds_theme_pre_parent_handle_css = array( 'productiveminds_common_css' );
        
            $productiveminds_global_localize_script_vars = array();
            productive_global_get_common_swiper_localize_script( $productiveminds_global_localize_script_vars );
            // Assign others
            productive_global_get_common_std_localize_script( $productiveminds_global_localize_script_vars );
            wp_localize_script(
                'productiveminds_common_js_handle',
                'productiveminds_common_js_name',
                $productiveminds_global_localize_script_vars
                );
            
            $custom_css_global = productive_global_apply_custom_css();
            if( !empty( $custom_css_global ) ) {
                wp_add_inline_style('productiveminds_common_css', $custom_css_global);
            }
            
            require_once PRODUCTIVE_PASSMAX_THEME_BASE_PATH . '/includes/common/productiveminds-common-asset.php';
        }
    }
    
    // wp style
    wp_enqueue_style( 'productive_parent_theme_wp_css_style', PRODUCTIVE_PASSMAX_THEME_BASE_URI . '/style.css', $productiveminds_theme_pre_parent_handle_css, $productive_passmax_theme_version );
    
    // Generics
    $productive_parent_theme_main_css_style_array = array( 'productive_parent_theme_wp_css_style' );
    if ( !is_admin() ) {
        wp_enqueue_style( 'productive_generics_theme_main_css_style', PRODUCTIVE_PASSMAX_THEME_BASE_URI . '/assets/css/mini/style.generics.min.css', $productive_parent_theme_main_css_style_array, $productive_passmax_theme_version );
        wp_style_add_data( 'productive_generics_theme_main_css_style', 'rtl', 'replace' );
        $productive_parent_theme_main_css_style_array[] = 'productive_generics_theme_main_css_style';
    }
    
    $productive_parent_theme_main_css_style = 'productive_parent_theme_main_css_style';
    if( $productive_passmax_is_wc_activated ) {
        // WooCommerce activated
        wp_enqueue_style( $productive_parent_theme_main_css_style, PRODUCTIVE_PASSMAX_THEME_BASE_URI . '/assets/css/mini/style.bundle.with.woocommerce.min.css', $productive_parent_theme_main_css_style_array, $productive_passmax_theme_version );
        wp_style_add_data( $productive_parent_theme_main_css_style, 'rtl', 'replace' );
    } else {
        wp_enqueue_style( $productive_parent_theme_main_css_style, PRODUCTIVE_PASSMAX_THEME_BASE_URI . '/assets/css/mini/style.bundle.min.css', $productive_parent_theme_main_css_style_array, $productive_passmax_theme_version );
        wp_style_add_data( $productive_parent_theme_main_css_style, 'rtl', 'replace' );
    }
    
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
    
    // theme's JS.
    $productiveminds_common_js_handle = array();
    if( isset( $wp_scripts->registered['productiveminds_common_js_handle'] ) && !empty($wp_scripts->registered['productiveminds_common_js_handle']) ) {
        $productiveminds_common_js_handle[] = 'productiveminds_common_js_handle';
    }
    wp_enqueue_script( 'productive_parent_theme_js_handle', PRODUCTIVE_PASSMAX_THEME_BASE_URI . '/assets/js/theme.min.js', $productiveminds_common_js_handle, $productive_passmax_theme_version, true );
    
    $productive_passmax_header_megamenu_option = productive_passmax_header_megamenu_option();
    $admin_ajax_php_class = array(
        'text_submenu' => esc_html__( 'Sub Menu', 'pass-max' ),
        'productive_passmax_header_megamenu_option' => $productive_passmax_header_megamenu_option,
        'productive_passmax_header_menu_more_icon' => productive_passmax_header_menu_more_icon(),
        'productive_nav_more_icon' => '<svg class="productive_nav_more_icon" width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path class="productive_nav_more_icon_path" d="M1395 736q0 13-10 23l-466 466q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l393 393 393-393q10-10 23-10t23 10l50 50q10 10 10 23z"/></svg>',
        'productive_nav_more_icon_right' => '<svg class="productive_nav_more_icon right" width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path class="productive_nav_more_icon_path" d="M1395 736q0 13-10 23l-466 466q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l393 393 393-393q10-10 23-10t23 10l50 50q10 10 10 23z"/></svg>',
    );
    wp_localize_script(
    'productive_parent_theme_js_handle',
    'productive_parent_theme_js_handle_name',
    $admin_ajax_php_class
    );
}


/**
 * Method productive_passmax_scripts_overrides.
 */
function productive_passmax_scripts_overrides() {
    if( function_exists( 'productive_global_get_custom_palette_overrides' ) ) {
        $custom_css_global_overrides = productive_global_get_custom_palette_overrides();
        if( !empty( $custom_css_global_overrides ) ) {
            wp_add_inline_style('productive_parent_theme_main_css_style', $custom_css_global_overrides);
        }
    }
}


/**
 * Load (wp_enqueue_script) admin css * JS files.
 */
function productive_passmax_admin_scripts() {
    global $productive_passmax_theme_version;
    // Admin Common assets
    if ( !function_exists( 'productiveminds_common_asset_admin') ) {
        wp_enqueue_style( 'wp-color-picker' );
        wp_enqueue_style( 'productive_passmax_admin_css', PRODUCTIVE_PASSMAX_THEME_BASE_URI . '/admin/css/admin-style.css', array(), $productive_passmax_theme_version );
        require_once PRODUCTIVE_PASSMAX_THEME_BASE_PATH . '/admin/common/productiveminds-common-asset-admin.php';
    }
    wp_enqueue_script( 'productive_passmax_admin_js_handle', PRODUCTIVE_PASSMAX_THEME_BASE_URI . '/admin/js/admin-theme-ajax.js', array('jquery','wp-color-picker'), $productive_passmax_theme_version, true );
    
    $admin_ajax_php_class = array(
        'ajax_admin_url' => admin_url( 'admin-ajax.php' ),
    );
    wp_localize_script(
    'productive_passmax_admin_js_handle',
    'productive_passmax_admin_js_url_name',
    $admin_ajax_php_class
    );
}
if( is_admin() ) {
    add_action( 'admin_enqueue_scripts', 'productive_passmax_admin_scripts' );
}


/**
 * Method enable featured image.
 */
function productive_passmax_after_setup_theme() {
    
    // Add support for WP to manage rendering of <title> tag in html document head
    add_theme_support( 'title-tag' );
    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );
    // Add support for Post Thumbnails on posts and pages.
    add_theme_support('post-thumbnails');
    // Add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );
    // Add support for Block Styles.
    add_theme_support('wp-block-styles');
    // Add support for full and wide align images.
    add_theme_support( 'align-wide' );
    // Add support for editor styles.
    add_theme_support( 'editor-styles' );
    // Enqueue editor styles.
    add_editor_style( './assets/css/style-editor.css' );
    // Add support for responsive embedded content.
    add_theme_support('responsive-embeds');
    // Upgrades widget areas to allow using blocks alongside widgets
    add_theme_support('widgets-block-editor');
    // Set core markup for search form, comment form, comments etc to output valid HTML5.
    $args = array(
        'style',
        'gallery',
        'caption',
        'script',
        'search-form',
        'comment-form',
        'comment-list',
        'navigation-widgets',
    );
    add_theme_support( 'html5', $args );
    /*
    * @link https://codex.wordpress.org/Theme_Logo
    */
    $logo_width  = productive_passmax_the_logo_size();
    $logo_height = 48;
    add_theme_support(
        'custom-logo',
        array(
            'height'               => $logo_height,
            'width'                => $logo_width,
            'flex-width'           => true,
            'flex-height'          => true,
            'unlink-homepage-logo' => false,
        )
    );
    
    // initiate text-domain.
    load_theme_textdomain( 'pass-max', PRODUCTIVE_PASSMAX_THEME_BASE_PATH . '/languages' );

}
add_action( 'after_setup_theme', 'productive_passmax_after_setup_theme' );

function productive_passmax_after_switch_theme( $old_theme ) {
    update_option( PRODUCTIVE_PASSMAX_THEME_SHOW_WELCOME_NOTICE, '1' );
}
add_action( 'after_switch_theme', 'productive_passmax_after_switch_theme' );

function productive_passmax_switch_theme( $new_theme ) {
    delete_option( PRODUCTIVE_PASSMAX_THEME_SHOW_WELCOME_NOTICE );
}
add_action( 'switch_theme', 'productive_passmax_switch_theme' );

function productive_passmax_render_welcome_to_the_theme() {
    
    $productive_passmax_show_theme_welcome_notice = get_option( PRODUCTIVE_PASSMAX_THEME_SHOW_WELCOME_NOTICE, '0' );
    if( !function_exists('pass_addons_is_active') && 1 == intval($productive_passmax_show_theme_welcome_notice) ) {
        global $pagenow;
        if( 'themes.php' == $pagenow || 'plugins.php' == $pagenow || 'comment.php' == $pagenow ) {
           
        $active_theme = get_stylesheet();

        $pass_addons_slug = "pass-addons";
        $pass_addons_pro_slug = "pass-pro";

        $pass_addons_plugin_fullname = esc_html__( 'PASS Addons', 'pass-max' );

        $pass_addons_plugin_name = esc_html__( 'PASS Addons', 'pass-max' );
        $pass_addons_pro_plugin_name = esc_html__( 'PASS Addons Pro', 'pass-max' );

        ?>
            <div style="box-sizing: border-box" class="productive-process-notice-dismissal productiveminds-alignable-container flexed flexed-no-wrap align-items-center align-content-center notice notice-info is-dismissible"
                 data-dismiss_action_name="productive_global_do_notice_dismissal_ajax" 
                 data-dismiss_item_slug="<?php echo esc_attr( $active_theme ); ?>" 
                 data-dismiss_option_name="<?php echo esc_attr( PRODUCTIVE_PASSMAX_THEME_SHOW_WELCOME_NOTICE ); ?>" 
                 data-dismiss_option_value="0" 
                 data-confirm_action="" 
                 data-confirm_action_delay="" 
                 data-go_to_url="" 
                 >
                <div style="padding: 25px" class="width-100pc flexed-autoed">
                    <h2 style="font-size: 25px; line-height: 1.3; margin-bottom: 1rem;">
                        <?php echo esc_html__( "Thanks for choosing ", 'pass-max' ); ?> <?php echo PRODUCTIVE_PASSMAX_CURRENT_THEME_NAME; ?> <?php echo esc_html__( " Theme", 'pass-max' ); ?>
                    </h2>
                    <div style="line-height: 1.8;" class="fs-normal">
                        <?php echo esc_html__( 'This theme comes loaded with many awesome features, including prebuilt starter sites you can set up in just a few clicks. ', 'pass-max' ); ?>
                        <?php echo esc_html__( 'However, many of these features rely on our free plugin, ', 'pass-max' ); ?>
                        <a class="bolded" target="_blank" href="<?php echo esc_url(PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_PASS_ADDONS_REPO_URL); ?>">
                            <?php echo esc_html( $pass_addons_plugin_fullname ); ?>
                        </a>
                        <div style="margin: 20px 0;">
                            <?php echo esc_html__( 'To unleash the full potential of this theme, ', 'pass-max' ); ?>
                        </div>
                    </div>
                    <div style="margin: 20px 0;" class="productiveminds-alignable-container flexed align-items-center align-content-center row-gap-10px column-gap-30px">
                        <?php if( function_exists('pass_addons_is_extra') ) { ?>
                            <a class="productive_admin_anchor_button" href="<?php echo esc_url( PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_PASS_ADDONS_ADMIN_OPTIONS_LINK ); ?>">
                                <?php echo esc_html__( 'Configure ', 'pass-max' ); ?> <?php echo esc_html( $pass_addons_pro_plugin_name ); ?>
                            </a>
                        <?php } else if( function_exists('pass_addons_is_active') ) { ?>
                            <a class="productive_admin_anchor_button" href="<?php echo esc_url( PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_PASS_ADDONS_ADMIN_OPTIONS_LINK ); ?>">
                                <?php echo esc_html__( 'Configure ', 'pass-max' ); ?> <?php echo esc_html( $pass_addons_plugin_name ); ?>
                            </a>
                        <?php } else {

                            $available_pass_version = array();

                            // Free or Pro installed but not activated
                            $pass_pro_installed_not_active = productive_global_get_installed_plugin_path( $pass_addons_pro_slug );
                            $pass_installed_not_active = productive_global_get_installed_plugin_path( $pass_addons_slug );
                            if( !empty($pass_pro_installed_not_active) && !function_exists('pass_addons_is_active') ) {
                                // Pro
                                $available_pass_version['plugin_name'] = $pass_addons_pro_plugin_name;
                                $available_pass_version['plugin_slug'] = $pass_addons_pro_slug;
                            } else if( !empty($pass_installed_not_active) && !function_exists('pass_addons_is_active') ) {
                                // Free
                                $available_pass_version['plugin_name'] = $pass_addons_plugin_name;
                                $available_pass_version['plugin_slug'] = $pass_addons_slug;
                            }

                            if( isset($available_pass_version['plugin_slug']) && !empty($available_pass_version['plugin_slug']) ) { ?>
                                <a style="padding: 10px 25px; text-decoration: none;" class="productive_admin_anchor_button global_install_plugin bolded" 
                                    data-theme_slug="<?php echo esc_attr( $active_theme ); ?>" 
                                    data-plugin_slug="<?php echo esc_attr( $available_pass_version['plugin_slug'] ); ?>" 
                                    data-plugin_name="<?php echo esc_attr( $available_pass_version['plugin_name'] ); ?>" 
                                    data-action_name="productive_global_do_activate_plugin_ajax" 
                                    data-plugin_action="activate" 
                                    data-item_installtion_normal_cta="<?php echo esc_attr( 'Activate ', 'pass-max' ); ?> <?php echo esc_attr( $available_pass_version['plugin_name'] ); ?>" 
                                    data-item_installtion_notice_cta="<?php echo esc_attr( 'Activating...', 'pass-max' ); ?>" 
                                    data-item_installtion_success_cta="<?php echo esc_attr( 'Activated', 'pass-max' ); ?>" 
                                    data-silent_action="0" 
                                    data-confirm_action="location_assign" 
                                    data-confirm_action_delay="1000" 
                                    data-go_to_url="" 
                                    href="#">
                                        <?php echo esc_html__( 'Activate ', 'pass-max' ); ?> <?php echo esc_html( $available_pass_version['plugin_name'] ); ?>
                                </a>
                            <?php } else { ?>
                                <a style="padding: 10px 25px; text-decoration: none;" class="productive_admin_anchor_button global_install_plugin bolded" 
                                    data-theme_slug="<?php echo esc_attr( $active_theme ); ?>" 
                                    data-plugin_slug="<?php echo esc_attr( $pass_addons_slug ); ?>" 
                                    data-plugin_name="<?php echo esc_attr( $pass_addons_plugin_name ); ?>" 
                                    data-action_name="productiveminds_wp_ajax_install_plugin" 
                                    data-plugin_action="install_and_activate" 
                                    data-item_installtion_normal_cta="<?php echo esc_attr( 'Install ', 'pass-max' ); ?> <?php echo esc_attr( $pass_addons_plugin_name ); ?>" 
                                    data-item_installtion_notice_cta="<?php echo esc_attr( 'Installing...', 'pass-max' ); ?>" 
                                    data-item_installtion_success_cta="<?php echo esc_attr( 'Installed', 'pass-max' ); ?>" 
                                    data-silent_action="0" 
                                    data-confirm_action="location_assign" 
                                    data-confirm_action_delay="1000" 
                                    data-go_to_url="" 
                                    href="#">
                                        <?php echo esc_html__( 'Install ', 'pass-max' ); ?> <?php echo esc_html( $pass_addons_plugin_name ); ?>
                                </a>
                            <?php } ?>

                        <?php } ?>

                        <a style="padding: 10px 5px; text-decoration: underline;" class="fs-normal bolded" target="_blank" href="<?php echo esc_url(PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_PASS_ADDONS_REPO_URL); ?>">
                            <?php echo esc_html__( 'Learn More', 'pass-max' ); ?>
                        </a>

                    </div>
                </div>
                <div style="padding: 25px;" class="width-100pc flexed-autoed">
                    <img style="width: 100%; max-width: 700px;" src="<?php echo PRODUCTIVE_PASSMAX_THEME_BASE_URI; ?>/assets/images/welcome-notice.webp" alt="<?php echo PRODUCTIVE_PASSMAX_CURRENT_THEME_NAME; ?>" height="auto">
                </div>
            </div>
        <?php
        }
    }
}
if( is_admin() ) {
    add_action( 'admin_notices', 'productive_passmax_render_welcome_to_the_theme' );
}


function productive_passmax_is_any_productive_commerce_plugin_header_button_active() {
    global $productive_passmax_is_wc_activated;
    $is_productive_commerce                                 = productive_passmax_is_productive_commerce_active();
    $productive_passmax_is_wc_activated                   = productive_passmax_is_woocommerce_activated();
    $productive_passmax_customiser_show_cart_icon         = productive_passmax_enable_header_cart() && $productive_passmax_is_wc_activated;
    $productive_passmax_customiser_show_wishlist_icon     = productive_passmax_enable_header_wishlist() && $is_productive_commerce && $productive_passmax_is_wc_activated;
    $productive_passmax_customiser_show_compare_icon      = productive_passmax_enable_header_compare() && $is_productive_commerce && $productive_passmax_is_wc_activated;
    
    return $productive_passmax_customiser_show_cart_icon || $productive_passmax_customiser_show_wishlist_icon || $productive_passmax_customiser_show_compare_icon;
}

function productive_passmax_is_any_productive_commerce_plugin_header_button_active_global() {
    global $productive_passmax_is_wc_activated;
    $is_productive_commerce                                 = productive_passmax_is_productive_commerce_active();
    $productive_passmax_is_wc_activated                   = productive_passmax_is_woocommerce_activated();
    $productive_passmax_customiser_show_cart_icon         = productive_passmax_enable_global_popup_cart() && $productive_passmax_is_wc_activated;
    $productive_passmax_customiser_show_wishlist_icon     = productive_passmax_enable_global_popup_wishlist() && $is_productive_commerce && $productive_passmax_is_wc_activated;
    $productive_passmax_customiser_show_compare_icon      = productive_passmax_enable_global_popup_compare() && $is_productive_commerce && $productive_passmax_is_wc_activated;
    
    return $productive_passmax_customiser_show_cart_icon || $productive_passmax_customiser_show_wishlist_icon || $productive_passmax_customiser_show_compare_icon;
}


/**
 * Method productive_passmax_render_productive_commerce_plugin_header_buttons
 */
function productive_passmax_render_productive_commerce_plugin_header_buttons( $location = 'std' ) {
    global $productive_passmax_is_wc_activated;
    $is_productive_commerce                                 = productive_passmax_is_productive_commerce_active();
    $productive_passmax_is_wc_activated                   = productive_passmax_is_woocommerce_activated();
    $productive_passmax_customiser_show_cart_icon         = productive_passmax_enable_header_cart() && $productive_passmax_is_wc_activated;
    $productive_passmax_customiser_show_wishlist_icon     = productive_passmax_enable_header_wishlist() && $is_productive_commerce && $productive_passmax_is_wc_activated;
    $productive_passmax_customiser_show_compare_icon      = productive_passmax_enable_header_compare() && $is_productive_commerce && $productive_passmax_is_wc_activated;
    
    $productive_passmax_all_header_icons_size = productive_passmax_get_header_buttons_adjusted_size( $location );
    
    
    productive_passmax_render_productive_commerce_plugin_header_buttons_content( $productive_passmax_customiser_show_cart_icon, $productive_passmax_customiser_show_wishlist_icon, $productive_passmax_customiser_show_compare_icon, $productive_passmax_all_header_icons_size );
}
add_action( 'productive_passmax_render_our_commerce_header_buttons', 'productive_passmax_render_productive_commerce_plugin_header_buttons' );

/**
 * Method productive_passmax_render_productive_commerce_plugin_header_buttons_global_popup
 */
function productive_passmax_render_productive_commerce_plugin_header_buttons_global_popup( $location = 'std' ) {
    global $productive_passmax_is_wc_activated;
    $is_productive_commerce                                 = productive_passmax_is_productive_commerce_active();
    $productive_passmax_is_wc_activated                   = productive_passmax_is_woocommerce_activated();
    $productive_passmax_all_header_icons_size             = productive_passmax_get_header_buttons_adjusted_size( $location );
    
    $productive_passmax_customiser_show_cart_icon         = productive_passmax_enable_global_popup_cart() && $productive_passmax_is_wc_activated;
    $productive_passmax_customiser_show_wishlist_icon     = productive_passmax_enable_global_popup_wishlist() && $is_productive_commerce && $productive_passmax_is_wc_activated;
    $productive_passmax_customiser_show_compare_icon      = productive_passmax_enable_global_popup_compare() && $is_productive_commerce && $productive_passmax_is_wc_activated;
    
    productive_passmax_render_productive_commerce_plugin_header_buttons_content( $productive_passmax_customiser_show_cart_icon, $productive_passmax_customiser_show_wishlist_icon, $productive_passmax_customiser_show_compare_icon, $productive_passmax_all_header_icons_size );
}
add_action( 'productive_passmax_render_our_commerce_header_buttons_global_popup', 'productive_passmax_render_productive_commerce_plugin_header_buttons_global_popup' );

/**
 * Method productive_passmax_render_productive_commerce_plugin_header_buttons_content
 */
function productive_passmax_render_productive_commerce_plugin_header_buttons_content( $productive_passmax_customiser_show_cart_icon, $productive_passmax_customiser_show_wishlist_icon, $productive_passmax_customiser_show_compare_icon, $productive_passmax_all_header_icons_size ) {
    
    $cpt_section_args = array(
        'section_content_icon_size' => $productive_passmax_all_header_icons_size,
    );
    if ( $productive_passmax_customiser_show_cart_icon ) {
        if ( productive_passmax_is_productive_commerce_active() && 'checked' == is_on_productive_commerce_minicart_enable() ) {
            do_action( 'productive_minicart_button', $cpt_section_args ); 
        }
    }
    if ( $productive_passmax_customiser_show_wishlist_icon ) {
        do_action( 'productive_wishlist_button', $cpt_section_args );
    }
    if ( $productive_passmax_customiser_show_compare_icon ) {
        do_action( 'productive_compare_button', $cpt_section_args );
    }
}


/**
 * Method productive_passmax_the_custom_logo
 */
function productive_passmax_the_custom_logo() {
    if ( function_exists( 'the_custom_logo' ) ) {
        the_custom_logo();
    }
}

/**
 * Method productive_passmax_the_meta_description_header.
 */
function productive_passmax_the_meta_description_header() {
    $name = get_bloginfo( 'name' );
    $desc = get_bloginfo( 'description' );
    if( empty( $desc ) ) {
        $desc = $name;
    } 
    echo '<meta name="description" content="' . esc_attr($desc) . '">';
}
add_action( 'wp_head', 'productive_passmax_the_meta_description_header', 0 );

/**
 * Method productive_passmax_the_pingback_header.
 * Adds pingback url auto-discovery header.
 */
function productive_passmax_the_pingback_header() {
    if ( is_singular() && pings_open() ) {
            echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
    }
}
add_action( 'wp_head', 'productive_passmax_the_pingback_header' );


/**
 * 
 * @param type $productiveminds_theme_layout
 */
function productive_passmax_get_left_sidebar( $productiveminds_theme_layout = '' ) {
    if ( 'two_columns_left' == $productiveminds_theme_layout || 'three_columns' == $productiveminds_theme_layout ) {
    ?>
        <aside class="productive-sidebar productive-sidebar-left hide-below-landscape-mobile">
            <?php dynamic_sidebar( PRODUCTIVE_PASSMAX_LEFT_SIDEBAR_ID ); ?>
        </aside>
    <?php 
    }
}
add_action( 'productive_global_render_sidebar_left', 'productive_passmax_get_left_sidebar' );


/**
 * 
 * @param type $productiveminds_theme_layout
 */
function productive_passmax_get_sidebar_right( $productiveminds_theme_layout = '' ) {
    if ( 'two_columns_left' == $productiveminds_theme_layout || 'two_columns_right' == $productiveminds_theme_layout || 'three_columns' == $productiveminds_theme_layout ) {
    ?>
        <aside class="productive-sidebar productive-sidebar-right">
            <?php if ( !productive_passmax_is_woocommerce_page() && ('two_columns_left' == $productiveminds_theme_layout || 'three_columns' == $productiveminds_theme_layout) ) { ?>
                <div class="hide-above-landscape-mobile">
                    <?php dynamic_sidebar( PRODUCTIVE_PASSMAX_LEFT_SIDEBAR_ID ); ?>
                </div>
            <?php } ?>
            <?php if ( 'two_columns_right' == $productiveminds_theme_layout || 'three_columns' == $productiveminds_theme_layout ) { ?>
                <div>
                    <?php dynamic_sidebar( PRODUCTIVE_PASSMAX_RIGHT_SIDEBAR_ID ); ?>
                </div>
            <?php } ?>
        </aside>
    <?php
    }
}
add_action( 'productive_global_render_sidebar_right', 'productive_passmax_get_sidebar_right' );

/**
 * 
 */
function productive_passmax_get_sidebar_woocommerce_sidebar( $productiveminds_theme_woocommerce_sidebar = '' ) {
    ?>
        <aside class="productive-sidebar <?php echo esc_attr( $productiveminds_theme_woocommerce_sidebar ); ?> productive-sidebar-woocommerce_sidebar">
            <?php dynamic_sidebar( PRODUCTIVE_PASSMAX_WOOCOMMERCE_SIDEBAR_ID ); ?>
        </aside>
    <?php
}
add_action( 'productive_global_render_sidebar_woo_archive', 'productive_passmax_get_sidebar_woocommerce_sidebar' );

/**
 * 
 */
function productive_passmax_get_sidebar_woocommerce_product_page_sidebar( $productiveminds_theme_woocommerce_product_page_sidebar = '' ) {
    ?>
        <aside class="productive-sidebar <?php echo esc_attr( $productiveminds_theme_woocommerce_product_page_sidebar ); ?> productive-sidebar-woocommerce_sidebar">
            <?php dynamic_sidebar( PRODUCTIVE_PASSMAX_WOOCOMMERCE_PRODUCT_PAGE_SIDEBAR_ID ); ?>
        </aside>
    <?php
}
add_action( 'productive_global_render_sidebar_woo_product_page', 'productive_passmax_get_sidebar_woocommerce_product_page_sidebar' );

/**
 * 
 * @param type $number_of_posts
 * @param type $post_type
 * @return type
 */
function productive_passmax_get_site_posts( $number_of_posts = 10, $post_type = 'post' ) {
    $args = array(
        'numberposts' => $number_of_posts,
        'post_type' => $post_type,
        'suppress_filters' => 0,
    );
    return get_posts( $args );
}

function productive_passmax_render_comments() {
    if ( comments_open() && !post_password_required() ) {
?>
    <div class="productiveminds-comments-container">
        <?php comments_template( '/comments.php' ); ?>
    </div>
<?php
    }
}

/**
 * Method productive_passmax_render_search_result_title
 */
function productive_passmax_render_search_result_title( $top_banner_title_css_style = '') {
    global $wp_query;
    ?>
    <?php do_action('productive_global_render_content_wrapper_full_top'); ?>
        <div class="productiveminds_banner_container_content">
            <h1 class="<?php echo esc_attr($top_banner_title_css_style); ?>"><?php echo esc_html__( 'Search result for ', 'pass-max' ) . get_search_query(); ?></h1>
            <div class="productiveminds_container_content_desc">
                <?php if ( trim( get_search_query() ) != '' && $wp_query->found_posts > 0 ) { ?>
                    <div class="search-result-number">
                        <?php
                        $found_posts = $wp_query->found_posts;
                        if ( $found_posts > 1 ) {
                            echo esc_attr( $found_posts ) . esc_html__( ' matches found for your search. Your searched for: ', 'pass-max' );
                        } else {
                            echo esc_attr( $found_posts ) . esc_html__( ' match found for your search. Your searched for: ', 'pass-max' );
                        }
                        echo '"' . get_search_query(). '"';
                        ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    <?php do_action('productive_global_render_content_wrapper_full_bottom'); ?>
    <?php
}
add_action('productive_global_render_search_result_title', 'productive_passmax_render_search_result_title');


/**
 * Method productive_passmax_use_full_width_video
 */
function productive_passmax_use_full_width_video( $html ) {
    return '<div class="embedded_content_css">' . $html . '</div>';
}
add_filter( 'embed_oembed_html', 'productive_passmax_use_full_width_video', 1, 2 );


function productive_passmax_get_a_unique_id( $prefix = '' ) {
    if ( function_exists( 'wp_unique_id' ) ) {
            return wp_unique_id( $prefix );
    } else {
            static $id_counter;
            return $prefix . (string) ++$id_counter;
    }
}
add_action( 'productive_global_display_unique_id', 'productive_passmax_get_a_unique_id', 1 );


/**
 * Method productive_passmax_menu_navs.
 */
function productive_passmax_menu_navs() {
	$theme_menus = array(
		'primary' => 'Primary (Header Menu)',
		'footer_menu' => 'Primary Footer Menu',
		'header_secondary_menu' => 'Secondary Header Menu',
		'footer_secondary_menu' => 'Secondary Footer Menu',
	);
	register_nav_menus( $theme_menus );
}
add_action( 'init', 'productive_passmax_menu_navs' );


function productive_passmax_render_theme_navicon_std( $visibility = 'hide-above-landscape-mobile' ) {
    $productive_passmax_header_navicon_style = productive_passmax_header_navicon_style();
    ?>
    <button data-open-popup="productive_theme_global_popup_container" 
            aria-label="<?php echo esc_attr('Menu', 'pass-max'); ?>" 
            class="productiveminds-navicon-button header-navicon-std-button <?php echo esc_attr($visibility); ?> <?php echo esc_attr($productive_passmax_header_navicon_style); ?>">
        <span class="productiveminds-navicon-container productiveminds-alignable-container justify-content-flex-end justify-items-end width-100pc">
            <span class="productiveminds-navicon-item-1"></span>
            <span class="productiveminds-navicon-item-2"></span>
            <span class="productiveminds-navicon-item-3"></span>
            <span class="productiveminds-navicon-item-4"></span>
        </span>
        <span class="screen-reader-text"><?php echo esc_html__('Menu', 'pass-max'); ?></span>
    </button>
    <?php
}
add_action( 'productive_passmax_render_theme_navicon_std', 'productive_passmax_render_theme_navicon_std' );


function productive_passmax_render_theme_navicon_left( $brightness_mode = '' ) {
    $productive_passmax_header_navicon_style = productive_passmax_header_navicon_style();
    ?>
    <button data-open-popup="productive_theme_global_popup_container" 
            aria-label="<?php echo esc_attr('Menu', 'pass-max'); ?>" 
            class="productiveminds-navicon-button header-navicon-std-button <?php echo esc_attr($brightness_mode); ?> <?php echo esc_attr($productive_passmax_header_navicon_style); ?>">
        <span class="productiveminds-navicon-container productiveminds-alignable-container align-items-center align-content-center justify-content-flex-start justify-items-start width-100pc">
            <span class="productiveminds-navicon-item-1"></span>
            <span class="productiveminds-navicon-item-2"></span>
            <span class="productiveminds-navicon-item-3"></span>
            <span class="productiveminds-navicon-item-4"></span>
        </span>
        <span class="screen-reader-text"><?php echo esc_html__('Menu', 'pass-max'); ?></span>
    </button>
    <?php
}
add_action( 'productive_global_render_theme_navicon_left', 'productive_passmax_render_theme_navicon_left' );

function productive_passmax_render_theme_navicon_catalog( $brightness_mode = '' ) {
    ?>
    <button aria-label="<?php echo esc_attr('Menu', 'pass-max'); ?>" 
            class="productiveminds-navicon-button header-menu-navicon-catalog-button standard_navicon <?php echo esc_attr($brightness_mode); ?>">
        <span class="productiveminds-navicon-container productiveminds-alignable-container align-items-center align-content-center justify-content-flex-start justify-items-start width-100pc">
            <span class="productiveminds-navicon-item-1"></span>
            <span class="productiveminds-navicon-item-2"></span>
            <span class="productiveminds-navicon-item-3"></span>
            <span class="productiveminds-navicon-item-4"></span>
        </span>
        <span class="screen-reader-text"><?php echo esc_html__('Menu', 'pass-max'); ?></span>
    </button>
    <?php
}
add_action( 'productive_global_render_theme_navicon_catalog', 'productive_passmax_render_theme_navicon_catalog' );


function productive_passmax_render_theme_search_icon( $position = '' ) {
    $section_content_text = '';
    
    $location = 'std';
    if( strpos( $position, 'smaller_icon_location') !== false ) {
        $location = 'smaller_icon_location';
        $position = str_replace( 'smaller_icon_location', '', $position );
    }
    
    $productive_passmax_all_header_icons_size = productive_passmax_get_header_buttons_adjusted_size( $location );
    
    $productive_passmax_theme_search_icon_args = array(
        'i'     => 'search', 
        'w'     => $productive_passmax_all_header_icons_size, 
        'h'     => $productive_passmax_all_header_icons_size, 
        'css'   => '',
        'svg_css'   => ''
    );
    ?>
    <a data-open-popup="productive_theme_search_popup_container" 
       title="<?php echo esc_attr( 'Search', 'pass-max'); ?>"
        aria-label="<?php echo esc_attr('Search', 'pass-max'); ?>"
        class="header_button_icon_container_anchor cursored <?php echo esc_attr( $position ); ?> productiveminds-alignable-container flexed-no-wrap align-items-flex-end align-content-flex-end gap-5px"
        href="<?php echo esc_url(home_url() ); ?>">
         <span class="productiveminds-alignable-container flexed-no-wrap flexed-in-a-flexed align-items-center align-content-center gap-5px">
             <span class="header_button_icon_and_counter productiveminds-alignable-container">
                 <span class="header_button_icon productiveminds-alignable-container">
                     <?php echo wp_kses( productiveminds_get_svg_icon($productive_passmax_theme_search_icon_args), 'wp_kses_allowed_html' ); ?>
                 </span>
             </span>
             <?php if( !empty( $section_content_text ) ) { ?>
                 <span class="header_button_text">
                     <?php echo esc_html( $section_content_text ); ?>
                 </span>
             <?php } ?>
         </span>
     </a>
    <?php
}
add_action( 'productive_global_display_theme_search_icon', 'productive_passmax_render_theme_search_icon' );

function productive_passmax_get_header_buttons_adjusted_size( $location ) {
    $productive_passmax_all_header_icons_size = productive_passmax_all_header_icons_size();
    if( 'smaller_icon_location' == $location ) {
        $productive_passmax_all_header_icons_size = ( $productive_passmax_all_header_icons_size - (0.2 * $productive_passmax_all_header_icons_size) );
    }
    return $productive_passmax_all_header_icons_size;
}

/**
 * 
 * @param type $class
 */
function productive_passmax_get_productive_passmax_header_nav( $class = '' ) {
    ?>
        <div class="<?php echo esc_attr($class); ?>">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'primary',
                    'menu' => 'productiveminds-header-nav',
                    'menu_id' => 'productiveminds-header-nav',
                    'container' => 'nav',
                    'menu_class' => 'header-navbar-nav',
                    'containder-class' => 'productiveminds-header-nav',
                    'container_aria_label' => 'Header Menu',
                ));
            ?>
        </div>
    <?php
}
add_action( 'productive_passmax_render_header_nav', 'productive_passmax_get_productive_passmax_header_nav' );

/**
 * 
 * @param type $class
 */
function productive_passmax_get_productive_passmax_header_secondary_nav( $class = '' ) {
    if ( has_nav_menu( 'header_secondary_menu' ) ) {
    ?>
        <div class="<?php echo esc_attr($class); ?>">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'header_secondary_menu',
                    'menu' => 'productiveminds-secondary-header-nav',
                    'menu_id' => 'productiveminds-header-nav',
                    'container' => 'nav',
                    'menu_class' => 'header-navbar-nav secondary-menu-header',
                    'containder-class' => 'productiveminds-header-nav secondary-menu-header',
                    'container_aria_label' => 'Secondary Header Menu',
                ));
            ?>
        </div>
    <?php
    }
}
add_action( 'productive_passmax_display_header_secondary_nav', 'productive_passmax_get_productive_passmax_header_secondary_nav' );

/**
 * 
 * @param type $class
 */
function productive_passmax_get_productive_passmax_footer_nav( $class = '' ) {
    if ( has_nav_menu( 'footer_menu' ) ) {
    ?>
        <div class="<?php echo esc_attr($class); ?>">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'footer_menu',
                    'menu' => 'productiveminds-footer-nav',
                    'menu_id' => 'productiveminds-footer-nav',
                    'container' => 'nav',
                    'menu_class' => 'footer-menu',
                    'containder-class' => 'footer-menu',
                    'container_aria_label' => 'Primary Footer Menu',
                ));
            ?>
        </div>
    <?php
    }
}
add_action( 'productive_passmax_display_footer_nav', 'productive_passmax_get_productive_passmax_footer_nav' );

/**
 * 
 * @param type $class
 */
function productive_passmax_get_productive_passmax_secondary_nav( $class = '' ) {
    if ( has_nav_menu( 'footer_secondary_menu' ) ) {
    ?>
        <div class="<?php echo esc_attr($class); ?>">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'footer_secondary_menu',
                    'menu' => 'productiveminds-secondary-footer-nav',
                    'menu_id' => 'productiveminds-secondary-footer-nav',
                    'container' => 'nav',
                    'menu_class' => 'secondary-menu',
                    'containder-class' => 'secondary-menu',
                    'container_aria_label' => 'Secondary Footer Menu',
                ));
            ?>
        </div>
    <?php
    }
}
add_action( 'productive_passmax_display_secondary_nav', 'productive_passmax_get_productive_passmax_secondary_nav' );


function productive_passmax_render_post_share_on() {
    $misc = array();
    $share_url = get_permalink( get_the_ID() );
    
    $section_content_social_media_share_media = '';
    $get_post_thumbnail_id = get_post_thumbnail_id();
    if( $get_post_thumbnail_id ) {
        $section_content_social_media_share_media = wp_get_attachment_url( $get_post_thumbnail_id, 'full' );
    }
    
    $misc['section_show_social_media_share_on_copy']                    = esc_html__('Share on: ', 'pass-max');
    $misc['section_show_social_media_share_on_copy_location']           = 'inline';
    $misc['section_content_social_media_share_icon_size']               = productive_global_sharing_icon_size();
    $misc['section_content_social_media_share_email_subject']           = esc_html__('Read ', 'pass-max') . get_the_title() . esc_html__(' on ', 'pass-max') . get_bloginfo( 'name' );
    $misc['section_content_social_media_share_desc_for_pinterest']      = esc_html__('Read ', 'pass-max') . get_the_title() . esc_html__(' on ', 'pass-max') . get_bloginfo( 'name' );
    $misc['section_content_social_media_share_media']                   = $section_content_social_media_share_media;
    
    productive_global_do_social_shares( $misc, $share_url );
}


function productive_passmax_render_social_media_follow_icons_footer( $params_str = '' ) {
    
    if( !function_exists( 'productive_global_render_social_media_follow_icons' ) ) {
        return;
    }
    
    $copy_location = 'top';
    $show_follow_on_copy = 1;
    if( null != $params_str && !empty($params_str) ) {
        $params_args = explode( ',', $params_str);
        $copy_location = trim( $params_args[0] );
        if( isset($params_args[1]) ) {
            $params_args_1_value = trim( $params_args[1] );
            $show_follow_on_copy = intval( $params_args_1_value );
        }
    }
    
    $misc = array(
        'section_hierarchy'                                     => 'child',
        'section_show_social_media_follow_on_copy_location'     => $copy_location,
        'display_contact_social_media_icons_style'              => productive_passmax_enable_footer_social_media_official_icon_color(),
        'section_content_social_media_follow_icon_size'         => productive_passmax_social_media_icon_size_footer(),
    );
    
    if( $show_follow_on_copy ) {
        $misc['section_show_social_media_follow_on_copy'] = productive_passmax_display_footer_social_media_icons_title();
    }
    
    $productive_passmax_enable_footer_social_media_enable_website_1   = productive_passmax_enable_footer_social_media_enable_website_1();
    $productive_passmax_enable_footer_social_media_enable_website_2   = productive_passmax_enable_footer_social_media_enable_website_2();
    $productive_passmax_enable_footer_social_media_enable_website_3   = productive_passmax_enable_footer_social_media_enable_website_3();
    $productive_passmax_enable_footer_social_media_enable_website_4   = productive_passmax_enable_footer_social_media_enable_website_4();
    $productive_passmax_enable_footer_social_media_enable_website_5   = productive_passmax_enable_footer_social_media_enable_website_5();
    $productive_passmax_enable_footer_social_media_enable_whatsapp    = productive_passmax_enable_footer_social_media_enable_whatsapp();
    $productive_passmax_enable_footer_social_media_enable_email       = productive_passmax_enable_footer_social_media_enable_email();
    $productive_passmax_enable_footer_social_media_enable_phone       = productive_passmax_enable_footer_social_media_enable_phone();

    if( !$productive_passmax_enable_footer_social_media_enable_website_1 ) {
        $misc['productive_global_following_url_site_1'] = '';
    }
    if( !$productive_passmax_enable_footer_social_media_enable_website_2 ) {
        $misc['productive_global_following_url_site_2'] = '';
    }
    if( !$productive_passmax_enable_footer_social_media_enable_website_3 ) {
        $misc['productive_global_following_url_site_3'] = '';
    }
    if( !$productive_passmax_enable_footer_social_media_enable_website_4 ) {
        $misc['productive_global_following_url_site_4'] = '';
    }
    if( !$productive_passmax_enable_footer_social_media_enable_website_5 ) {
        $misc['productive_global_following_url_site_5'] = '';
    }
    if( !$productive_passmax_enable_footer_social_media_enable_whatsapp ) {
        $misc['productive_global_following_value_whatsapp'] = '';
    }
    if( !$productive_passmax_enable_footer_social_media_enable_email ) {
        $misc['productive_global_following_value_email'] = '';
    }
    if( !$productive_passmax_enable_footer_social_media_enable_phone ) {
        $misc['productive_global_following_value_phone'] = '';
    }

    productive_global_render_social_media_follow_icons( $misc );
}
add_action( 'productive_global_render_social_media_follow_icons_footer', 'productive_passmax_render_social_media_follow_icons_footer' );


function productive_passmax_render_post_author_in_single( $location = 'bottom' ) {
    $section_post_author_avatar_size = 120;
    $author_id = get_the_author_meta( 'ID' );
    
    $author_pre_name_copy = productive_passmax_single_post_author_bio_about_copy();
    $colour_scheme_bg = productive_passmax_single_post_display_author_bio_section_bg_color_scheme();
?>
<div class="productive-blog-author-container post_author_in_single std page_main_section_container productiveminds-alignable-container <?php echo esc_attr($colour_scheme_bg); ?>" id="productive-blog-author-container">
        <div class="productive-blog-author-container-box width-100pc">
            
            <div class="productive-content-generic-container">
                <div class="productive-author-section-container productiveminds-alignable-container align-items-flex-start align-content-flex-start column-gap-15px">
                    <?php 
                    if( get_option( 'show_avatars' ) ) {
                    ?>
                        <div class="author-media">
                            <?php echo get_avatar( $author_id, $section_post_author_avatar_size, null ); ?>
                        </div>
                    <?php } ?>
                    <div class="author-details">
                        <div class="productiveminds-alignable-container flexed align-items-center align-content-center justify-content-space-between gap-10px">
                            <div class="author">
                                <div class="author-name fs-l">
                                    <?php if( !empty( $author_pre_name_copy ) ) { ?>
                                    <span class=""><?php echo esc_html( $author_pre_name_copy ); ?> </span>
                                    <?php } ?>
                                    <a class="fs-l productiveminds_no_top_margin"  aria-label="<?php echo esc_attr('View posts by author of ', 'pass-max') . the_title(); ?>" 
                                        href="<?php echo esc_url( get_author_posts_url( $author_id ) ); ?>" >
                                         <span><?php echo get_the_author(); ?></span>
                                         <span class="screen-reader-text"><?php echo esc_html__('View posts by author of ', 'pass-max') . the_title(); ?></span>
                                     </a>
                                </div>
                            </div>
                        </div>

                        <div class="author-bio-description">
                            <?php the_author_meta( 'description' ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php 
}

function productive_passmax_render_content_archive_item_blog( $is_blog_block = 1, $is_search_result_page = 0, $section_show_search_result_post_type = 0, $section_show_section_header = 0, $section_is_home = 0 ) {
    $productive_passmax_get_items_per_row_to_display = productive_passmax_items_per_row_to_display();
    if( $section_is_home ) {
        do_action( 'productive_global_render_content_wrapper_full_top', 'page_main_section_container home ' . productive_passmax_blog_archives_style() );
    } else {
        do_action( 'productive_global_render_content_wrapper_full_top', productive_passmax_blog_archives_style() );
    }
    ?>
        <?php if( $section_is_home ) { ?>
            <div class="productiveminds_widget_container_home">
        <?php } ?>
            
        <div class="productiveminds_section-container productiveminds-standard-content-container blog-element grid columns-<?php echo esc_attr( $productive_passmax_get_items_per_row_to_display ); ?>">
        <?php $counter = 0; ?>
        <?php while ( have_posts() ) {
            the_post();
            $section_show_content_title = 1;
            $section_show_content_text = 1;
            $section_content_show_url_button = intval( productive_passmax_post_display_read_more_button() );
            $section_content_button_hover_animation = '';
            $productive_passmax_posts_excerpt_word_count = intval( productive_passmax_posts_excerpt_word_count() );
            $productive_passmax_post_display_excerpt = intval( productive_passmax_post_display_excerpt() );
            $section_show_post_author = productive_passmax_show_post_author();
            $section_show_post_comments_count = intval( productive_passmax_post_display_comment() );
            $section_show_post_date = intval( productive_passmax_post_display_date() );
            $section_show_post_date_copy = '';
            $section_show_post_date_original = 0;
            $section_show_post_date_original_copy = '';
            $section_show_reading_time = intval( productive_passmax_post_display_read_time() );
            $section_show_post_category = intval( productive_passmax_post_display_category() );

            $misc = array(
                'section_content_show_url_button'                   => $section_content_show_url_button,
                'section_content_button_hover_animation'            => $section_content_button_hover_animation,
                'section_show_content_title'                        => $section_show_content_title,
                'section_show_content_text'                         => $section_show_content_text,
                'productive_passmax_posts_excerpt_word_count'       => $productive_passmax_posts_excerpt_word_count,
                'productive_passmax_post_display_excerpt'           => $productive_passmax_post_display_excerpt,
                'section_show_post_author'                          => $section_show_post_author,
                'section_show_post_comments_count'                  => $section_show_post_comments_count,
                'section_show_post_date'                            => $section_show_post_date,
                'section_show_post_date_copy'                       => $section_show_post_date_copy,
                'section_show_post_date_original'                   => $section_show_post_date_original,
                'section_show_post_date_original_copy'              => $section_show_post_date_original_copy,
                'section_show_reading_time'                         => $section_show_reading_time,
                'section_show_post_category'                        => $section_show_post_category,
            );

        ?>
            <div class="productiveminds_section-container-column">
                <div class="productiveminds_section-container-column-content">
                    <div class="productiveminds_section-container-column-content-body no-box">
                        <div class="productiveminds_section-single-item productiveminds-alignable-container row-gap-10px">
                            <?php
                                productive_passmax_render_content_media_standard( $is_search_result_page, $section_show_search_result_post_type );
                                productive_passmax_render_content_text_blog_archive_item( $misc, $is_blog_block );
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php 
            $counter++;
        }
        wp_reset_postdata();
        ?>
        </div>
    <?php if( $section_is_home ) { ?>
        </div>
        
        <?php productive_global_paginate_links(); ?>

    <?php } ?>

    <?php wp_reset_postdata(); ?>

    <?php do_action('productive_global_render_content_wrapper_full_bottom');
}
add_action( 'productive_global_display_archive_item_blog', 'productive_passmax_render_content_archive_item_blog' );


/**
 * Display main content
 * 
 * @param int $misc
 */
function productive_passmax_render_content_text_blog_archive_item( $misc, $is_blog_block = false ) {
    
    $section_content_show_url_button                        = $misc['section_content_show_url_button'];
    $section_content_button_hover_animation                 = $misc['section_content_button_hover_animation'];
    $section_show_content_text                              = $misc['section_show_content_text'];
    $productive_passmax_posts_excerpt_word_count            = $misc['productive_passmax_posts_excerpt_word_count'];
    $productive_passmax_post_display_excerpt                = $misc['productive_passmax_post_display_excerpt'];
    $section_show_post_author                               = $misc['section_show_post_author'];
    $section_show_post_comments_count                       = $misc['section_show_post_comments_count'];
    $section_show_post_date                                 = $misc['section_show_post_date'];
    $section_show_post_date_copy                            = $misc['section_show_post_date_copy'];
    $section_show_post_date_original                        = $misc['section_show_post_date_original'];
    $section_show_post_date_original_copy                   = $misc['section_show_post_date_original_copy'];
    $section_show_reading_time                              = $misc['section_show_reading_time'];
    $section_show_post_category                             = $misc['section_show_post_category']; 
    $section_show_content_title                             = $misc['section_show_content_title']; 
    
    $section_content_show_url_button_target = '_parent'; 
    if( 2 == $section_content_show_url_button ) {
        $section_content_show_url_button_target = '_blank';
    }
    
    $post_id = get_the_ID();
    $the_post_type = get_post_type();
?>
    <?php if( $section_show_post_category || $section_show_reading_time || $section_show_content_title || $section_show_content_text || 
            $section_show_post_comments_count || $section_show_post_date_original || $section_show_post_date || $section_content_show_url_button ) { ?>
    <div class="productiveminds_section-single-item-text productiveminds-alignable-container row-gap-10px productive-blog-element">
        
        <?php if( $section_show_post_category || $section_show_reading_time ) { ?>
            <div class="productive-blog-element-cat-and-read-time productiveminds-alignable-container flexed-no-wrap justify-content-space-between gap-10px">
                <?php if( $section_show_post_category && 'post' == $the_post_type ) { ?>
                    <div class="section_show_post_category righted">
                        <?php echo productive_global_render_post_default_category_in_archive( $the_post_type ); ?>
                    </div>
                <?php } ?>
                <?php if( function_exists('pass_addons_is_active') && $section_show_reading_time && 'post' == $the_post_type ) { ?>
                    <div class="section_show_reading_time lefted">
                        <?php echo pass_addons_get_blog_read_time( get_the_content() ); ?>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
        
        <?php if( $section_show_content_title ) { ?>
            <div class="single-item-title">
                <a aria-label="<?php echo esc_attr('Read ', 'pass-max') . the_title(); ?>" 
                   href="<?php echo esc_url( get_permalink() ); ?>">
                        <?php the_title(); ?>
                        <span class="screen-reader-text"><?php echo esc_html__('Read ', 'pass-max') . the_title(); ?></span>
                </a>
            </div>
        <?php } ?>
        
        <?php 
        $post_format = get_post_format();
        if( $productive_passmax_post_display_excerpt && $section_show_content_text && 'status' != $post_format && 'aside' != $post_format ) { ?>
            <div class="single-item-desc">
                <?php echo wp_trim_words( get_the_excerpt(), $productive_passmax_posts_excerpt_word_count ); ?>
            </div>
        <?php } ?>
        
        <?php
            productive_passmax_render_post_author_via_avatar( $misc );
        ?>
        
        <?php if( (!$section_show_post_author && ($section_show_post_date_original || $section_show_post_date) ) || $section_show_post_comments_count ) { ?>
            <div class="productive-blog-element-date productiveminds-alignable-container flexed justify-content-space-between gap-10px">
                <?php if( !$section_show_post_author && $section_show_post_date && $section_show_post_date != 4 ) { ?>
                    <div class="section_show_post_date">
                        <?php if( !empty( $section_show_post_date_copy ) ) { ?>
                            <span class="section_show_post_date_copy"><?php echo esc_html( $section_show_post_date_copy ); ?></span>
                        <?php } ?>
                        <?php echo get_the_modified_date(); ?>
                    </div>
                <?php } else if( !$section_show_post_author && $section_show_post_date_original && $section_show_post_date_original != 4 ) { ?>
                    <div class="section_show_post_date_original">
                        <?php if( !empty( $section_show_post_date_original_copy ) ) { ?>
                            <span class="section_show_post_date_original_copy"><?php echo esc_html( $section_show_post_date_original_copy ); ?></span>
                        <?php } ?>
                        <?php echo get_the_date(); ?>
                    </div>
                <?php } ?>
                
                <?php if( $section_show_post_comments_count ) { ?>
                    <div class="section_show_post_comments_count righted">
                        <?php
                            $get_comment_count = get_comment_count( $post_id );
                            $approved_comments_count = $get_comment_count['approved'];
                            echo esc_html($approved_comments_count) . esc_html__( ' comments', 'pass-max' );
                        ?>
                    </div>
                <?php } ?>

            </div>
        <?php } ?>
        
        <?php if( $section_content_show_url_button ) { ?>
            <div class="productive-blog-element-read-more-btn">
                <a target="<?php echo esc_attr($section_content_show_url_button_target); ?>" class="single-item-button <?php echo esc_attr( $section_content_button_hover_animation ); ?>" 
                    aria-label="<?php echo esc_attr('Read more about ', 'pass-max') . the_title(); ?>" 
                    href="<?php echo esc_url( get_permalink() ); ?>">
                         <?php echo esc_html__( 'Read more', 'pass-max' ); ?>
                         <span class="screen-reader-text"><?php echo esc_html__('Read more ', 'pass-max') . the_title(); ?></span>
                 </a>
            </div>
        <?php } ?>
        
    </div>
    <?php } ?>
<?php 
}


function productive_passmax_render_post_author_via_avatar( $misc ) {
    
    $section_show_post_author                   = intval( $misc['section_show_post_author'] );
    $section_show_post_author_by_copy           = esc_html__('By ', 'pass-max');
    $section_show_post_author_avatar            = 1;
    $section_post_author_avatar_size            = 60;
    $section_show_post_author_url               = 0;
    
    $section_author_horizontal_alignment = 'justify-content-space-between';
    if( isset( $misc['section_author_horizontal_alignment'] )) {
        $section_author_horizontal_alignment                     = $misc['section_author_horizontal_alignment'];
    }
    
    $author_id = get_the_author_meta( 'ID' );
    $author_url = get_the_author_meta( 'user_url' );
    
    if( $section_show_post_author ) {
    
        $section_show_post_date                                 = $misc['section_show_post_date'];
        $section_show_post_date_copy                            = $misc['section_show_post_date_copy'];
        $section_show_post_date_original                        = $misc['section_show_post_date_original'];
        $section_show_post_date_original_copy                   = $misc['section_show_post_date_original_copy'];

        $author_width = 'width-100pc';
        if( $section_show_post_date || $section_show_post_date_original ) {
            $author_width = 'width-autoed';
        }
        
        $section_author_horizontal_alignment = 'justify-content-flex-start';
    
?>
    <div class="productive-author-container productiveminds-alignable-container">
        <div class="productive-author-container-box theme_default productiveminds-alignable-container flexed align-items-center align-content-center justify-content-space-between row-gap-5px column-gap-20px">            
            <div class="productive-author-container-all productiveminds-alignable-container flexed-no-wrap align-items-center align-content-center <?php echo esc_attr($author_width); ?> justify-content-flex-start row-gap-5px column-gap-10px">
                <?php if( $section_show_post_author_avatar && get_option( 'show_avatars' ) ) { ?>
                    <div class="productive-author-container-media">
                        <?php echo get_avatar( $author_id, $section_post_author_avatar_size, null ); ?>
                    </div>
                <?php } ?>
                <div class="productive-author-container-details productiveminds-alignable-container width-autoed gap-10px">
                    <div class="productiveminds-alignable-container width-autoed gap-zero">
                        <div class="productive-author-container-name">
                            <?php if( !empty( $section_show_post_author_by_copy ) ) { ?>
                            <span><?php echo esc_html( $section_show_post_author_by_copy ); ?></span>
                            <?php } ?>
                            <a aria-label="<?php echo get_the_author(); ?>" 
                                href="<?php echo esc_url( get_author_posts_url( $author_id ) ); ?>" >
                                 <span><?php echo get_the_author(); ?></span>
                             </a>
                        </div>
                        <?php
                        if( 1 == $section_show_post_author_url && !empty( $author_url ) ) { ?>
                            <div class="productive-author-container-url">
                                <a target="_blank" aria-label="<?php echo get_the_author(); ?>" href="<?php echo esc_url( $author_url ); ?>">
                                     <?php echo esc_html( productive_global_get_website_domain_name_only( $author_url ) ); ?>
                                 </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            
            <?php if( $section_show_post_date && $section_show_post_date != 4 ) { ?>
                <div class="section_show_post_date">
                    <?php if( !empty( $section_show_post_date_copy ) ) { ?>
                        <span class="section_show_post_date_copy"><?php echo esc_html( $section_show_post_date_copy ); ?></span>
                    <?php } ?>
                    <?php echo esc_html(get_the_modified_date()); ?>
                </div>
            <?php } else if( $section_show_post_date_original && $section_show_post_date_original != 4 ) { ?>
                <div class="section_show_post_date_original">
                    <?php if( !empty( $section_show_post_date_original_copy ) ) { ?>
                        <span class="section_show_post_date_original_copy"><?php echo esc_html( $section_show_post_date_original_copy ); ?></span>
                    <?php } ?>
                    <?php echo get_the_date(); ?>
                </div>
            <?php } ?>
            
            
        </div>
    </div>
<?php 
    }
}


/**
 * 
 * @param type $class
 */
function productive_passmax_posts_homepage() {
    productive_passmax_render_content_archive_item_blog( 1, 0, 0, 0, 1 );
}
add_action( 'productive_global_display_blog_posts_homepage', 'productive_passmax_posts_homepage' );


 function productive_passmax_edit_post_link_for_post_page() {
    
    if( !productive_passmax_is_woocommerce_activated() ) {
        _productive_passmax_edit_post_link_for_post_page();
    } else {
        global $post;
        $page_id = 0;
        if( null != $post && !empty($post) ) {
            $page_id = $post->ID;
        }
        $wc_my_account_page_id = wc_get_page_id( 'myaccount' );
        if( $page_id != $wc_my_account_page_id ) {
            _productive_passmax_edit_post_link_for_post_page();
        }
    }
}

 function _productive_passmax_edit_post_link_for_post_page() {
    edit_post_link(
        sprintf(
            wp_kses(
                __( 'Edit <span class="screen-reader-text">%s</span>', 'pass-max' ),
                array(
                    'span' => array(
                        'class' => array(),
                    ),
                )
            ),
            get_the_title()
        ),
        '<div class="get-access-to-page-feature-link-container edit-link">',
        '</div>'
    );
}

function productive_passmax_transparent_header_required() {
    $productive_passmax_header_style_pb = productive_passmax_header_style();
    return ( 'header_design_14' == $productive_passmax_header_style_pb || 'header_design_15' == $productive_passmax_header_style_pb );
}

function productive_passmax_power_button_required() {
    $productive_passmax_header_style_pb = productive_passmax_header_style();
    return ( 'header_base_design_01' == $productive_passmax_header_style_pb || 'header_base_design_03' == $productive_passmax_header_style_pb || 
        'header_design_2' == $productive_passmax_header_style_pb || 'header_design_3' == $productive_passmax_header_style_pb ||
        'header_design_4' == $productive_passmax_header_style_pb || 'header_design_6' == $productive_passmax_header_style_pb ||
        'header_design_7' == $productive_passmax_header_style_pb || 'header_design_8' == $productive_passmax_header_style_pb ||
        'header_design_9' == $productive_passmax_header_style_pb || 'header_design_10' == $productive_passmax_header_style_pb ||
        'header_design_11' == $productive_passmax_header_style_pb || 'header_design_13' == $productive_passmax_header_style_pb );
}

function productive_passmax_before_footer_newsletter_required() {
    $productive_passmax_footer_style_pb = productive_passmax_footer_style();
    return ( 'footer_base_design_02' == $productive_passmax_footer_style_pb || 
        'footer_base_design_03' == $productive_passmax_footer_style_pb || 'footer_design_1' == $productive_passmax_footer_style_pb ||
        'footer_design_5' == $productive_passmax_footer_style_pb || 'footer_design_6' == $productive_passmax_footer_style_pb ||
        'footer_design_7' == $productive_passmax_footer_style_pb || 'footer_design_8' == $productive_passmax_footer_style_pb ||
        'footer_design_9' == $productive_passmax_footer_style_pb );
}

function productive_passmax_get_default_homepage_hero_type() {
    return 'hero_theme_default_option';
}

function productive_passmax_newsletter_section_full_width() {
    if( productive_passmax_is_productive_forms_active() && productive_forms_newsletter_switch_on() ) {
        $productive_forms_homepage_newsletter_section_bg_color_scheme = productive_forms_homepage_newsletter_section_bg_color_scheme();
        
        $cpt_section_args = array(
            'section_initiator'                                     => 'std',
            'productive_forms_newsletter_form_style'                => productive_forms_newsletter_layout(),
            'newsletter_how_to_display_contact_name_field'          => productive_forms_newsletter_how_to_display_contact_name_field(),
            'display_email_field_only'                              => productive_forms_newsletter_show_only_email_field(),
            'request_data_privacy_consent'                          => productive_forms_newsletter_request_data_privacy_consent(),
            'submission_verify_type'                                => productive_forms_newsletter_submission_verify_type(),
            'section_header_alignment'                              => 'centered',
            'slider_swiper_css_class_from_elementor'                => 'via_std',
        );

        $section_block_max_width = 'siteMaxWidth_Mini';
        $section_bg_color_scheme        = 'productive-paddable-section page_main_section_container newsletter_block_section ' . $productive_forms_homepage_newsletter_section_bg_color_scheme . ' ' . $section_block_max_width;
        
        do_action( 'productive_global_render_content_wrapper_full_full_top', $section_bg_color_scheme );
            do_action('productive_global_render_content_wrapper_full_top');
                productive_forms_render_newsletter_element( $cpt_section_args );
            do_action('productive_global_render_content_wrapper_full_bottom');
        do_action('productive_global_render_content_wrapper_full_full_bottom');
    }
}
add_action( 'productive_passmax_display_newsletter_section_full_width', 'productive_passmax_newsletter_section_full_width' );


function productive_passmax_newsletter_section_inline( $display_email_field_only = array() ) {
    if( productive_passmax_is_productive_forms_active() && productive_forms_newsletter_switch_on() ) {
        $cpt_section_args = array(
            'section_initiator'                                     => 'std',
            'productive_forms_newsletter_form_style'                => productive_forms_newsletter_layout(),
            'newsletter_how_to_display_contact_name_field'          => productive_forms_newsletter_how_to_display_contact_name_field(),
            'display_email_field_only'                              => 1,
            'request_data_privacy_consent'                          => productive_forms_newsletter_request_data_privacy_consent(),
            'submission_verify_type'                                => productive_forms_newsletter_submission_verify_type(),
            'section_header_alignment'                              => 'none',
            'slider_swiper_css_class_from_elementor'                => 'via_std',
        );
        
        $section_block_max_width = 'siteMaxWidth_Mini';
        $section_bg_color_scheme        = 'productive-paddable-section page_main_section_container newsletter_block_inline ' . $section_block_max_width;
        
        do_action( 'productive_global_render_content_wrapper_full_full_top', $section_bg_color_scheme );
            do_action('productive_global_render_content_wrapper_full_top');
                productive_forms_render_newsletter_element( $cpt_section_args );
            do_action('productive_global_render_content_wrapper_full_bottom');
        do_action('productive_global_render_content_wrapper_full_full_bottom');
    }
}
add_action( 'productive_passmax_display_newsletter_section_inline', 'productive_passmax_newsletter_section_inline' );


/**
 * Method productive_passmax_render_post_video_single
 */
function productive_passmax_render_post_video_single( $productive_cpt_id, $productive_cpt_title, $css = 'blog-post-featured-image' ) {
    $is_render_video = false;
    if ( function_exists('pass_addons_is_active') && productive_passmax_single_post_use_video() ) {
        $productiveminds_section_meta_key = PASS_ADDONS_PLUGIN_BLOG_ELEMENT_POST_TYPE_META_KEY;
        $productive_post_meta = pass_addons_render_content_get_loop_data_cpt( $productive_cpt_id, $productiveminds_section_meta_key);
        $productive_cpt_video = $productive_post_meta['productive_cpt_video'];
    ?>
        <?php if( "" != $productive_cpt_video ) { ?>
            <div class="<?php echo esc_attr($css); ?>">
            <?php
                $is_render_video = true;
            ?>
            <iframe class="productive_video_player_yt widescreen"
                    src="https://www.youtube.com/embed/<?php echo esc_attr($productive_cpt_video); ?>" title="<?php echo esc_attr( $productive_cpt_title ); ?>" 
                    frameborder="0" allowfullscreen></iframe>
            </div>
        <?php } ?>
    <?php }
    
    return $is_render_video;
}


require PRODUCTIVE_PASSMAX_THEME_BASE_PATH . '/includes/productive-theme-customiser-inline.php';
require_once PRODUCTIVE_PASSMAX_THEME_BASE_PATH . '/includes/default.php';
require_once PRODUCTIVE_PASSMAX_THEME_BASE_PATH . '/includes/theme.php';
