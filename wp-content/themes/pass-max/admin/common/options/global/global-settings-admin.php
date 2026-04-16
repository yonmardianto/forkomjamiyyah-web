<?php
/**
 * @author      productiveminds.com
 * @copyright   productiveminds.com
 */

if ( !defined('ABSPATH') ) {
    die();
}

if( ! function_exists( 'productive_global_plugin_options_render_page_menu_global' ) ) {
    
    define( 'PRODUCTIVE_GLOBAL_SETTINGS_VERSION', '1.0.30' );
    define( 'PRODUCTIVE_GLOBAL_SCRIPTS_NONCE_ADMIN', 'productive_global_the_scripts_nonce_admin' );
    
    define( 'PRODUCTIVE_GLOBAL_ADMIN_OVERVIEW_REQUEST_URI', 'productive_options_overview' ); // Same value as admin overview request URI in plugins
    define( 'PRODUCTIVE_GLOBAL_ADMIN_PAGE_REQUEST_URI', 'productive_global_options_submenu' );
    
    define( 'PRODUCTIVE_GLOBAL_POPUP_SCREEN_POSITION_TOP_RIGHT', 'top_right' );
    define( 'PRODUCTIVE_GLOBAL_POPUP_SCREEN_POSITION_TOP_LEFT', 'top_left' );
    define( 'PRODUCTIVE_GLOBAL_POPUP_SCREEN_POSITION_BOTTOM_RIGHT', 'bottom_right' );
    define( 'PRODUCTIVE_GLOBAL_POPUP_SCREEN_POSITION_BOTTOM_LEFT', 'bottom_left' );
    define( 'PRODUCTIVE_GLOBAL_POPUP_SCREEN_POSITION_CENTRAL', 'central' );
    define( 'PRODUCTIVE_GLOBAL_POPUP_SCREEN_POSITION_LEFT', 'left' );
    define( 'PRODUCTIVE_GLOBAL_POPUP_SCREEN_POSITION_RIGHT', 'right' );
    
    
    define( 'PRODUCTIVE_GLOBAL_WP_REPO_PLUGIN_BASE_URL', 'https://wordpress.org/plugins/' );
    define( 'PRODUCTIVE_GLOBAL_WP_REPO_THEME_BASE_URL', 'https://wordpress.org/themes/' );
    define( 'PRODUCTIVE_GLOBAL_WP_REPO_SUPPORT_BASE_URL', 'https://wordpress.org/support/' );
    
    define( 'PRODUCTIVE_GLOBAL_PRODUCT_DEVELOPER_WEBSITE', 'https://www.productiveminds.com/product/' );
    define( 'PRODUCTIVE_GLOBAL_PRODUCT_DOCS_BASE_URL', 'https://www.productiveminds.com/support/docs/' );
    define( 'PRODUCTIVE_GLOBAL_PRODUCT_REVIEWS_BASE_URL', 'https://www.productiveminds.com/product-reviews/' );
    define( 'PRODUCTIVE_GLOBAL_PRODUCT_SUPPORT_BASE_URL', 'https://www.productiveminds.com/support/' );
    define( 'PRODUCTIVE_GLOBAL_PRODUCT_CHANGELOG_BASE_URL', 'https://www.productiveminds.com/product-changelog/' );
    
    define( 'PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_MINDS_TEXT_DOMAIN', "productive-minds" );
    define( 'PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_MINDS_TITLE', "Productive Minds" );
    define( 'PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_MINDS_REPO_URL', PRODUCTIVE_GLOBAL_WP_REPO_PLUGIN_BASE_URL . PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_MINDS_TEXT_DOMAIN );
    define( 'PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_MINDS_OUR_URL', PRODUCTIVE_GLOBAL_PRODUCT_DEVELOPER_WEBSITE . PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_MINDS_TEXT_DOMAIN );
    define( 'PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_MINDS_ADMIN_OPTIONS_LINK', admin_url( 'admin.php?page=productive_minds_options_submenu' ) );

    
    define( 'PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_PRODUCT_TEXT_DOMAIN', "productive-product" );
    define( 'PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_PRODUCT_TITLE', "Productive Product" );
    define( 'PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_PRODUCT_REPO_URL', PRODUCTIVE_GLOBAL_WP_REPO_PLUGIN_BASE_URL . PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_PRODUCT_TEXT_DOMAIN );
    define( 'PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_PRODUCT_OUR_URL', PRODUCTIVE_GLOBAL_PRODUCT_DEVELOPER_WEBSITE . PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_PRODUCT_TEXT_DOMAIN );
    define( 'PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_PRODUCT_ADMIN_OPTIONS_LINK', admin_url( 'admin.php?page=productive_product_options_submenu' ) );
    
    
    define( 'PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_PASS_ADDONS_TEXT_DOMAIN', "pass-addons" );
    define( 'PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_PASS_ADDONS_TITLE', "PASS Addons" );
    define( 'PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_PASS_ADDONS_REPO_URL', PRODUCTIVE_GLOBAL_WP_REPO_PLUGIN_BASE_URL . PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_PASS_ADDONS_TEXT_DOMAIN );
    define( 'PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_PASS_ADDONS_OUR_URL', PRODUCTIVE_GLOBAL_PRODUCT_DEVELOPER_WEBSITE . PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_PASS_ADDONS_TEXT_DOMAIN );
    define( 'PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_PASS_ADDONS_ADMIN_OPTIONS_LINK', admin_url( 'admin.php?page=pass_addons_options_submenu' ) );
    
    
    define( 'PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_RAVOLAT_ADDONS_TEXT_DOMAIN', "ravolat-addons" );
    define( 'PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_RAVOLAT_ADDONS_TITLE', "Ravolat Addons" );
    define( 'PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_RAVOLAT_ADDONS_REPO_URL', PRODUCTIVE_GLOBAL_WP_REPO_PLUGIN_BASE_URL . PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_RAVOLAT_ADDONS_TEXT_DOMAIN );
    define( 'PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_RAVOLAT_ADDONS_OUR_URL', PRODUCTIVE_GLOBAL_PRODUCT_DEVELOPER_WEBSITE . PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_RAVOLAT_ADDONS_TEXT_DOMAIN );
    define( 'PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_RAVOLAT_ADDONS_ADMIN_OPTIONS_LINK', admin_url( 'admin.php?page=ravolat_addons_options_submenu' ) );
    
    
    define( 'PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_COMMERCE_TEXT_DOMAIN', "productive-commerce" );
    define( 'PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_COMMERCE_TITLE', "Productive Commerce" );
    define( 'PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_COMMERCE_REPO_URL', PRODUCTIVE_GLOBAL_WP_REPO_PLUGIN_BASE_URL . PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_COMMERCE_TEXT_DOMAIN );
    define( 'PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_COMMERCE_OUR_URL', PRODUCTIVE_GLOBAL_PRODUCT_DEVELOPER_WEBSITE . PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_COMMERCE_TEXT_DOMAIN );
    define( 'PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_COMMERCE_ADMIN_OPTIONS_LINK', admin_url( 'admin.php?page=productive_commerce_options_submenu' ) );

    
    define( 'PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_FORMS_TEXT_DOMAIN', "productive-forms" );
    define( 'PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_FORMS_TITLE', "Productive Forms" );
    define( 'PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_FORMS_REPO_URL', PRODUCTIVE_GLOBAL_WP_REPO_PLUGIN_BASE_URL . PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_FORMS_TEXT_DOMAIN );
    define( 'PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_FORMS_OUR_URL', PRODUCTIVE_GLOBAL_PRODUCT_DEVELOPER_WEBSITE . PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_FORMS_TEXT_DOMAIN );
    define( 'PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_FORMS_ADMIN_OPTIONS_LINK', admin_url( 'admin.php?page=productive_forms_options_submenu' ) );

    
    define( 'PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_STYLE_TEXT_DOMAIN', "productive-style" );
    define( 'PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_STYLE_TITLE', "Productive Style" );
    define( 'PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_STYLE_REPO_URL', PRODUCTIVE_GLOBAL_WP_REPO_PLUGIN_BASE_URL . PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_STYLE_TEXT_DOMAIN );
    define( 'PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_STYLE_OUR_URL', PRODUCTIVE_GLOBAL_PRODUCT_DEVELOPER_WEBSITE . PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_STYLE_TEXT_DOMAIN );
    define( 'PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_STYLE_ADMIN_OPTIONS_LINK', admin_url( 'admin.php?page=productive_style_options_submenu' ) );

    
    define( 'PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_DEMO_IMPORTER_TEXT_DOMAIN', "productive-demo-importer" );
    define( 'PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_DEMO_IMPORTER_TITLE', "Productive Demo Importer" );
    define( 'PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_DEMO_IMPORTER_REPO_URL', PRODUCTIVE_GLOBAL_WP_REPO_PLUGIN_BASE_URL . PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_DEMO_IMPORTER_TEXT_DOMAIN );
    define( 'PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_DEMO_IMPORTER_OUR_URL', PRODUCTIVE_GLOBAL_PRODUCT_DEVELOPER_WEBSITE . PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_DEMO_IMPORTER_TEXT_DOMAIN );
    define( 'PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_DEMO_IMPORTER_ADMIN_OPTIONS_LINK', admin_url( 'admin.php?page=productive_demo_importer_options_submenu' ) );
    
    
    define( 'PRODUCTIVE_GLOBAL_PRODUCTIVE_THEME_BUSINESS_TEXT_DOMAIN', "productive-business" );
    define( 'PRODUCTIVE_GLOBAL_PRODUCTIVE_THEME_ECOMMERCE_TEXT_DOMAIN', "productive-ecommerce" );
    define( 'PRODUCTIVE_GLOBAL_PRODUCTIVE_THEME_STOCKIST_TEXT_DOMAIN', "stockist" );
    define( 'PRODUCTIVE_GLOBAL_PRODUCTIVE_THEME_MAGVALO_TEXT_DOMAIN', "magvalo" );
    define( 'PRODUCTIVE_GLOBAL_PRODUCTIVE_THEME_PASSMAX_TEXT_DOMAIN', "pass-max" );
    define( 'PRODUCTIVE_GLOBAL_PRODUCTIVE_THEME_RAVOLAT_TEXT_DOMAIN', "ravolat" );
    define( 'PRODUCTIVE_GLOBAL_PRODUCTIVE_THEME_TRANSACT_TEXT_DOMAIN', "transact" );
    define( 'PRODUCTIVE_GLOBAL_PRODUCTIVE_THEME_PUNDIT_TEXT_DOMAIN', "pundit" );
    define( 'PRODUCTIVE_GLOBAL_PRODUCTIVE_THEME_STOCKIST_MINI_TEXT_DOMAIN', "stockist-mini" );
    
    
    define( 'PRODUCTIVE_GLOBAL_POST_POST_TYPE_SLUG', 'post' );
    define( 'PRODUCTIVE_GLOBAL_PAGE_POST_TYPE_SLUG', 'page' );
    define( 'PRODUCTIVE_GLOBAL_WOO_PRODUCT_POST_TYPE_SLUG', 'product' );
    
    // Files
    define( 'PRODUCTIVE_GLOBAL_ITEM_PATH', plugin_dir_path( __FILE__ ) );
    if( strpos( __FILE__, get_theme_root() ) !== false ) {
        $global_folder_url = str_replace( get_theme_root(), get_theme_root_uri(), PRODUCTIVE_GLOBAL_ITEM_PATH );
        define( 'PRODUCTIVE_GLOBAL_ITEM_URL', $global_folder_url );
    } else {
        define( 'PRODUCTIVE_GLOBAL_ITEM_URL', plugin_dir_url( __FILE__ ) );
    }
    
    $productive_global_d_s = DIRECTORY_SEPARATOR;
    $global_required_files = array(
      'validate_verify_process'             => 'validate-verify-process.php',
      'productiveminds_icons'               => 'productiveminds-icons.php',
      'productive_global_customiser_common'                     => 'customiser'.$productive_global_d_s.'productive-global-customiser-common.php',
      'productive_global_customiser_custom_color_palette'       => 'customiser'.$productive_global_d_s.'productive-global-customiser-custom-color-palette.php',
      'productive_global_customiser_cc_palette_overrides'       => 'customiser'.$productive_global_d_s.'productive-global-customiser-cc-palette-overrides.php',
      'productive_global_db_global_transactions'                => 'db-admin'.$productive_global_d_s.'global-transactions.php',
      'productiveminds_themes'              => 'productiveminds-themes.php',
    );
    
    foreach ( $global_required_files as $key => $global_required_file ) {
        if( 'productive_global_db_global_transactions' == $key ) {
            if( is_admin() ) {
                require_once( PRODUCTIVE_GLOBAL_ITEM_PATH . $global_required_file );
            }
        } else if( 'productiveminds_themes' != $key || ( 'productiveminds_themes' == $key && function_exists( 'productiveminds_theme_is_active' ) ) ) {
            require_once( PRODUCTIVE_GLOBAL_ITEM_PATH . $global_required_file );
        }
    }
    
    function productive_global_is_block_editor_active() {
        return true;
    }
    
    function productive_global_register_pattern_categories() {
        register_block_pattern_category( 'productive_global/productive_minds', array( 
            'label'       => esc_html__( 'ProductiveMinds', 'pass-max' ),
            'description' => esc_html__( 'ProductiveMinds Patterns.', 'pass-max' )
        ) );
    }
    add_action( 'init', 'productive_global_register_pattern_categories' );
    
    function productive_global_is_a_productive_theme() {
        $get_template = get_template();
        return strpos( $get_template, "productive-business") !== false || 
                strpos( $get_template, "productive-ecommerce") !== false || 
                strpos( $get_template, "stockist") !== false || 
                strpos( $get_template, "magvalo") !== false || 
                strpos( $get_template, "pass-max") !== false || 
                strpos( $get_template, "ravolat") !== false;
    }
    
    function productive_global_is_a_productive_theme_extra() {
        $get_template = trim( get_template() );
        return "productive-ecommerce-pro" == $get_template || "productive-business-pro" == $get_template || "stockist-pro" == $get_template || "magvalo-pro" == $get_template || "pass-max-pro" == $get_template || "ravolat-pro" == $get_template;
    }
    
    function productive_global_is_theme_template_productive_business() {
        $get_template = trim( get_template() );
        return "productive-business" == $get_template || "productive-business-pro" == $get_template;
    }
    
    function productive_global_is_theme_template_productive_business_standard() {
        $get_template = trim( get_template() );
        return "productive-business" == $get_template;
    }
    
    function productive_global_is_theme_template_productive_business_extra() {
        $get_template = trim( get_template() );
        return "productive-business-pro" == $get_template;
    }
    
    function productive_global_is_theme_template_productive_ecommerce() {
        $get_template = trim( get_template() );
        return "productive-ecommerce" == $get_template || "productive-ecommerce-pro" == $get_template;
    }
    
    function productive_global_is_theme_template_productive_ecommerce_standard() {
        $get_template = trim( get_template() );
        return "productive-ecommerce" == $get_template;
    }
    
    function productive_global_is_theme_template_productive_ecommerce_extra() {
        $get_template = trim( get_template() );
        return "productive-ecommerce-pro" == $get_template;
    }
    
    function productive_global_is_theme_template_stockist() {
        $get_template = trim( get_template() );
        return "stockist" == $get_template || "stockist-pro" == $get_template;
    }
    
    function productive_global_is_theme_template_stockist_standard() {
        $get_template = trim( get_template() );
        return "stockist" == $get_template;
    }
    
    function productive_global_is_theme_template_stockist_extra() {
        $get_template = trim( get_template() );
        return "stockist-pro" == $get_template;
    }
    
    function productive_global_is_theme_template_magvalo() {
        $get_template = trim( get_template() );
        return "magvalo" == $get_template || "magvalo-pro" == $get_template;
    }
    
    function productive_global_is_theme_template_magvalo_standard() {
        $get_template = trim( get_template() );
        return "magvalo" == $get_template;
    }
    
    function productive_global_is_theme_template_magvalo_extra() {
        $get_template = trim( get_template() );
        return "magvalo-pro" == $get_template;
    }
    
    function productive_global_is_theme_template_passmax() {
        $get_template = trim( get_template() );
        return "pass-max" == $get_template || "pass-max-pro" == $get_template;
    }
    
    function productive_global_is_theme_template_passmax_standard() {
        $get_template = trim( get_template() );
        return "pass-max" == $get_template;
    }
    
    function productive_global_is_theme_template_passmax_extra() {
        $get_template = trim( get_template() );
        return "pass-max-pro" == $get_template;
    }
    
    function productive_global_is_theme_template_ravolat() {
        $get_template = trim( get_template() );
        return "ravolat" == $get_template || "ravolat-pro" == $get_template;
    }
    
    function productive_global_is_theme_template_ravolat_standard() {
        $get_template = trim( get_template() );
        return "ravolat" == $get_template;
    }
    
    function productive_global_is_theme_template_ravolat_extra() {
        $get_template = trim( get_template() );
        return "ravolat-pro" == $get_template;
    }
    
    function productive_global_is_theme_stylesheet_productive_business() {
        $get_stylesheet = trim( get_stylesheet() );
        return "productive-business" == $get_stylesheet || "productive-business-pro" == $get_stylesheet;
    }
    
    function productive_global_is_theme_stylesheet_productive_business_standard() {
        $get_stylesheet = trim( get_stylesheet() );
        return "productive-business" == $get_stylesheet;
    }
    
    function productive_global_is_theme_stylesheet_productive_business_extra() {
        $get_stylesheet = trim( get_stylesheet() );
        return "productive-business-pro" == $get_stylesheet;
    }
    
    function productive_global_is_theme_stylesheet_productive_ecommerce() {
        $get_stylesheet = trim( get_stylesheet() );
        return "productive-ecommerce" == $get_stylesheet || "productive-ecommerce-pro" == $get_stylesheet;
    }
    
    function productive_global_is_theme_stylesheet_productive_ecommerce_standard() {
        $get_stylesheet = trim( get_stylesheet() );
        return "productive-ecommerce" == $get_stylesheet;
    }
    
    function productive_global_is_theme_stylesheet_productive_ecommerce_extra() {
        $get_stylesheet = trim( get_stylesheet() );
        return "productive-ecommerce-pro" == $get_stylesheet;
    }
    
    function productive_global_is_theme_stylesheet_stockist() {
        $get_stylesheet = trim( get_stylesheet() );
        return "stockist" == $get_stylesheet || "stockist-pro" == $get_stylesheet;
    }
    
    function productive_global_is_theme_stylesheet_stockist_standard() {
        $get_stylesheet = trim( get_stylesheet() );
        return "stockist" == $get_stylesheet;
    }
    
    function productive_global_is_theme_stylesheet_stockist_extra() {
        $get_stylesheet = trim( get_stylesheet() );
        return "stockist-pro" == $get_stylesheet;
    }
    
    function productive_global_is_theme_stylesheet_magvalo() {
        $get_stylesheet = trim( get_stylesheet() );
        return "magvalo" == $get_stylesheet || "magvalo-pro" == $get_stylesheet;
    }
    
    function productive_global_is_theme_stylesheet_magvalo_standard() {
        $get_stylesheet = trim( get_stylesheet() );
        return "magvalo" == $get_stylesheet;
    }
    
    function productive_global_is_theme_stylesheet_magvalo_extra() {
        $get_stylesheet = trim( get_stylesheet() );
        return "magvalo-pro" == $get_stylesheet;
    }
    
    function productive_global_is_theme_stylesheet_passmax() {
        $get_stylesheet = trim( get_stylesheet() );
        return "pass-max" == $get_stylesheet || "pass-max-pro" == $get_stylesheet;
    }
    
    function productive_global_is_theme_stylesheet_passmax_standard() {
        $get_stylesheet = trim( get_stylesheet() );
        return "pass-max" == $get_stylesheet;
    }
    
    function productive_global_is_theme_stylesheet_passmax_extra() {
        $get_stylesheet = trim( get_stylesheet() );
        return "pass-max-pro" == $get_stylesheet;
    }
    
    function productive_global_is_theme_stylesheet_ravolat() {
        $get_stylesheet = trim( get_stylesheet() );
        return "ravolat" == $get_stylesheet || "ravolat-pro" == $get_stylesheet;
    }
    
    function productive_global_is_theme_stylesheet_ravolat_standard() {
        $get_stylesheet = trim( get_stylesheet() );
        return "ravolat" == $get_stylesheet;
    }
    
    function productive_global_is_theme_stylesheet_ravolat_extra() {
        $get_stylesheet = trim( get_stylesheet() );
        return "ravolat-pro" == $get_stylesheet;
    }
    
    function productive_global_is_theme_stylesheet_transact() {
        $get_stylesheet = trim( get_stylesheet() );
        return "transact" == $get_stylesheet || "transact-pro" == $get_stylesheet;
    }
    
    function productive_global_is_theme_stylesheet_transact_standard() {
        $get_stylesheet = trim( get_stylesheet() );
        return "transact" == $get_stylesheet;
    }
    
    function productive_global_is_theme_stylesheet_transact_extra() {
        $get_stylesheet = trim( get_stylesheet() );
        return "transact-pro" == $get_stylesheet;
    }
    
    function productive_global_is_theme_stylesheet_pundit() {
        $get_stylesheet = trim( get_stylesheet() );
        return "pundit" == $get_stylesheet || "pundit-pro" == $get_stylesheet;
    }
    
    function productive_global_is_theme_stylesheet_pundit_standard() {
        $get_stylesheet = trim( get_stylesheet() );
        return "pundit" == $get_stylesheet;
    }
    
    function productive_global_is_theme_stylesheet_pundit_extra() {
        $get_stylesheet = trim( get_stylesheet() );
        return "pundit-pro" == $get_stylesheet;
    }
    
    function productive_global_is_theme_stylesheet_stockist_mini() {
        $get_stylesheet = trim( get_stylesheet() );
        return "stockist-mini" == $get_stylesheet || "stockist-mini-pro" == $get_stylesheet;
    }
    
    function productive_global_is_theme_stylesheet_stockist_mini_standard() {
        $get_stylesheet = trim( get_stylesheet() );
        return "stockist-mini" == $get_stylesheet;
    }
    
    function productive_global_is_theme_stylesheet_stockist_mini_extra() {
        $get_stylesheet = trim( get_stylesheet() );
        return "stockist-mini-pro" == $get_stylesheet;
    }

    function productive_global_get_theme_customizers_id_from_content( $customizers_content ) {
        $theme_customizers_id = '';
        if( strpos( $customizers_content, "productive_business") !== false ) {
            $theme_customizers_id = 'productive_business';
        } else if( strpos( $customizers_content, "productive_ecommerce") !== false ) {
            $theme_customizers_id = 'productive_ecommerce';
        } else if( strpos( $customizers_content, "productive_stockist") !== false ) {
            $theme_customizers_id = 'productive_stockist';
        } else if( strpos( $customizers_content, "productive_magvalo") !== false ) {
            $theme_customizers_id = 'productive_magvalo';
        } else if( strpos( $customizers_content, "productive_passmax") !== false ) {
            $theme_customizers_id = 'productive_passmax';
        } else if( strpos( $customizers_content, "productive_ravolat") !== false ) {
            $theme_customizers_id = 'productive_ravolat';
        } 
        return $theme_customizers_id;
    }

    function productive_global_get_active_productive_theme_customizers_id() {
        $customizers_id = '';
        if( productive_global_is_theme_template_productive_business() ) {
            $customizers_id = 'productive_business';
        } else if( productive_global_is_theme_template_productive_ecommerce() ) {
            $customizers_id = 'productive_ecommerce';
        } else if( productive_global_is_theme_template_stockist() ) {
            $customizers_id = 'productive_stockist';
        } else if( productive_global_is_theme_template_magvalo() ) {
            $customizers_id = 'productive_magvalo';
        } else if( productive_global_is_theme_template_passmax() ) {
            $customizers_id = 'productive_passmax';
        } else if( productive_global_is_theme_template_ravolat() ) {
            $customizers_id = 'productive_ravolat';
        } 
        return $customizers_id;
    }
    
    function productive_global_get_child_theme_customizers_id_from_content( $customizers_content ) {
        $theme_customizers_id = '';
        if( strpos( $customizers_content, "transact") !== false ) {
            $theme_customizers_id = 'transact';
        } else if( strpos( $customizers_content, "pundit") !== false ) {
            $theme_customizers_id = 'pundit';
        } else if( strpos( $customizers_content, "stockist-mini") !== false ) {
            $theme_customizers_id = 'stockist-mini';
        }
        return $theme_customizers_id;
    }

    function productive_global_get_active_productive_child_theme_customizers_id() {
        $customizers_id = '';
        if( productive_global_is_theme_stylesheet_transact() ) {
            $customizers_id = 'transact';
        } else if( productive_global_is_theme_stylesheet_pundit() ) {
            $customizers_id = 'pundit';
        } else if( productive_global_is_theme_stylesheet_stockist_mini() ) {
            $customizers_id = 'stockist-mini';
        }
        return $customizers_id;
    }
    
    function productive_global_get_theme_default_base_header_style() {
        $style = "header_base_design_02";
        $get_template = trim( get_template() );
        if( strpos( $get_template, "productive-business") !== false ) {
            $style = "header_base_design_01";
        } else if( strpos( $get_template, "productive-ecommerce") !== false ) {
            $style = "header_base_design_02";
        } else if( strpos( $get_template, "stockist") !== false ) {
            $style = "header_base_design_03";
        } else if( strpos( $get_template, "magvalo") !== false ) {
            $style = "header_base_design_03";
        } else if( strpos( $get_template, "pass-max") !== false ) {
            $style = "header_base_design_03";
        } else if( strpos( $get_template, "ravolat") !== false ) {
            $style = "header_base_design_03";
        } 
        return $style;
    }
    
    function productive_global_get_theme_default_base_footer_style() {
        $style = "footer_base_design_02";
        $get_template = trim( get_template() );
        if( strpos( $get_template, "productive-business") !== false ) {
            $style = "footer_base_design_01";
        } else if( strpos( $get_template, "productive-ecommerce") !== false ) {
            $style = "footer_base_design_02";
        } else if( strpos( $get_template, "stockist") !== false ) {
            $style = "footer_base_design_03";
        } else if( strpos( $get_template, "magvalo") !== false ) {
            $style = "footer_base_design_02";
        } else if( strpos( $get_template, "pass-max") !== false ) {
            $style = "footer_base_design_02";
        } else if( strpos( $get_template, "ravolat") !== false ) {
            $style = "footer_base_design_02";
        } 
        return $style;
    }
    
    function productive_global_is_plugin_active_for_network( $plugin ) {
        if ( ! is_multisite() ) {
            return false;
        }
        $plugins = get_site_option( 'active_sitewide_plugins' );
        if ( isset( $plugins[ $plugin ] ) ) {
            return true;
        }
        return false;
    }
    
    function productive_global_is_productive_ainit_active() {
        $active_plugins_array = apply_filters( 'active_plugins', get_option('active_plugins') );
        return in_array( "productive-ainit/productive-ainit.php", $active_plugins_array ) || 
                productive_global_is_plugin_active_for_network( "productive-ainit/productive-ainit.php" );
    }
    
    function productive_global_is_pass_addons_active() {
        $active_plugins_array = apply_filters( 'active_plugins', get_option('active_plugins') );
        return in_array( "pass-addons/pass-addons.php", $active_plugins_array ) || in_array( "pass-addons-pro/pass-addons.php", $active_plugins_array ) || 
                productive_global_is_plugin_active_for_network( "pass-addons/pass-addons.php" ) || productive_global_is_plugin_active_for_network( "pass-addons-pro/pass-addons.php" );
    }
    
    function productive_global_is_pass_addons_active_standard() {
        $active_plugins_array = apply_filters( 'active_plugins', get_option('active_plugins') );
        return in_array( "pass-addons/pass-addons.php", $active_plugins_array ) || productive_global_is_plugin_active_for_network( "pass-addons/pass-addons.php" );
    }
    
    function productive_global_is_pass_addons_active_extra() {
        $active_plugins_array = apply_filters( 'active_plugins', get_option('active_plugins') );
        return in_array( "pass-addons-pro/pass-addons.php", $active_plugins_array ) || productive_global_is_plugin_active_for_network( "pass-addons-pro/pass-addons.php" );
    }
    
    function productive_global_is_ravolat_addons_active() {
        $active_plugins_array = apply_filters( 'active_plugins', get_option('active_plugins') );
        return in_array( "ravolat-addons/ravolat-addons.php", $active_plugins_array ) || in_array( "ravolat-addons-pro/ravolat-addons.php", $active_plugins_array ) || 
                productive_global_is_plugin_active_for_network( "ravolat-addons/ravolat-addons.php" ) || productive_global_is_plugin_active_for_network( "ravolat-addons-pro/ravolat-addons.php" );
    }
    
    function productive_global_is_ravolat_addons_active_standard() {
        $active_plugins_array = apply_filters( 'active_plugins', get_option('active_plugins') );
        return in_array( "ravolat-addons/ravolat-addons.php", $active_plugins_array ) || productive_global_is_plugin_active_for_network( "ravolat-addons/ravolat-addons.php" );
    }
    
    function productive_global_is_ravolat_addons_active_extra() {
        $active_plugins_array = apply_filters( 'active_plugins', get_option('active_plugins') );
        return in_array( "ravolat-addons-pro/ravolat-addons.php", $active_plugins_array ) || productive_global_is_plugin_active_for_network( "ravolat-addons-pro/ravolat-addons.php" );
    }
    
    function productive_global_is_productive_commerce_active() {
        $active_plugins_array = apply_filters( 'active_plugins', get_option('active_plugins') );
        return in_array( "productive-commerce/productive-commerce.php", $active_plugins_array ) || in_array( "productive-commerce-pro/productive-commerce.php", $active_plugins_array ) || 
                productive_global_is_plugin_active_for_network( "productive-commerce/productive-commerce.php" ) || productive_global_is_plugin_active_for_network( "productive-commerce-pro/productive-commerce.php" );
    }
    
    function productive_global_is_productive_commerce_active_standard() {
        $active_plugins_array = apply_filters( 'active_plugins', get_option('active_plugins') );
        return in_array( "productive-commerce/productive-commerce.php", $active_plugins_array ) || 
                productive_global_is_plugin_active_for_network( "productive-commerce/productive-commerce.php" );
    }
    
    function productive_global_is_productive_commerce_active_extra() {
        $active_plugins_array = apply_filters( 'active_plugins', get_option('active_plugins') );
        return in_array( "productive-commerce-pro/productive-commerce.php", $active_plugins_array ) || 
                productive_global_is_plugin_active_for_network( "productive-commerce-pro/productive-commerce.php" );
    }
    
    function productive_global_is_productive_forms_active() {
        $active_plugins_array = apply_filters( 'active_plugins', get_option('active_plugins') );
        return in_array( "productive-forms/productive-forms.php", $active_plugins_array ) || in_array( "productive-forms-pro/productive-forms.php", $active_plugins_array ) || 
                productive_global_is_plugin_active_for_network( "productive-forms/productive-forms.php" ) || productive_global_is_plugin_active_for_network( "productive-forms-pro/productive-forms.php" );
    }
    
    function productive_global_is_productive_forms_active_standard() {
        $active_plugins_array = apply_filters( 'active_plugins', get_option('active_plugins') );
        return in_array( "productive-forms/productive-forms.php", $active_plugins_array ) || 
                productive_global_is_plugin_active_for_network( "productive-forms/productive-forms.php" );
    }
    
    function productive_global_is_productive_forms_active_extra() {
        $active_plugins_array = apply_filters( 'active_plugins', get_option('active_plugins') );
        return in_array( "productive-forms-pro/productive-forms.php", $active_plugins_array ) || 
                productive_global_is_plugin_active_for_network( "productive-forms-pro/productive-forms.php" );
    }
    
    function productive_global_is_productive_style_active() {
        $active_plugins_array = apply_filters( 'active_plugins', get_option('active_plugins') );
        return in_array( "productive-style/productive-style.php", $active_plugins_array ) || in_array( "productive-style-pro/productive-style.php", $active_plugins_array ) || 
                productive_global_is_plugin_active_for_network( "productive-style/productive-style.php" ) || productive_global_is_plugin_active_for_network( "productive-style-pro/productive-style.php" );
    }
    
    function productive_global_is_productive_style_active_standard() {
        $active_plugins_array = apply_filters( 'active_plugins', get_option('active_plugins') );
        return in_array( "productive-style/productive-style.php", $active_plugins_array ) || 
                productive_global_is_plugin_active_for_network( "productive-style/productive-style.php" );
    }
    
    function productive_global_is_productive_style_active_extra() {
        $active_plugins_array = apply_filters( 'active_plugins', get_option('active_plugins') );
        return in_array( "productive-style-pro/productive-style.php", $active_plugins_array ) || 
                productive_global_is_plugin_active_for_network( "productive-style-pro/productive-style.php" );
    }

    function productive_global_render_missing_required_plugin_pass_addons( $pattern_name = '', $pattern_demo_url = '' ) {
    ?>
        <!-- wp:heading {"className":"wp-block-heading"} -->
        <h2 class="wp-block-heading h3"><?php echo esc_html__( "pass, A Required Plugin for This Pattern, Is Missing", 'pass-max' ); ?></h2>
        <!-- /wp:heading -->
        <!-- wp:paragraph -->
        <p><?php echo esc_html__( "To access this pattern, first activate the PASS Addons plugin: ", 'pass-max' ); ?> <a href="https://wordpress.org/plugins/pass" data-type="link" data-id="https://wordpress.org/plugins/pass">https://wordpress.org/plugins/pass</a></p>
        <!-- /wp:paragraph -->
        <!-- wp:paragraph -->
        <p><span class="bolded"><?php echo esc_html__( "Pattern: ", 'pass-max' ); ?></span> <?php echo esc_html( $pattern_name ); ?></p>
        <!-- /wp:paragraph -->
        <!-- wp:paragraph -->
        <?php if( !empty($pattern_demo_url) ) { ?>
        <p><span class="bolded"><?php echo esc_html__( "Pattern Demo: ", 'pass-max' ); ?></span><a href="<?php echo esc_url( $pattern_demo_url ); ?>" data-type="link" data-id="<?php echo esc_url( $pattern_demo_url ); ?>"><?php echo esc_url( $pattern_demo_url ); ?></a></p>
        <?php } ?>
        <!-- /wp:paragraph -->
    <?php 
    }

    function productive_global_render_missing_required_plugin_ravolat_addons( $pattern_name = '', $pattern_demo_url = '' ) {
    ?>
        <!-- wp:heading {"className":"wp-block-heading"} -->
        <h2 class="wp-block-heading h3"><?php echo esc_html__( "pass, A Required Plugin for This Pattern, Is Missing", 'pass-max' ); ?></h2>
        <!-- /wp:heading -->
        <!-- wp:paragraph -->
        <p><?php echo esc_html__( "To access this pattern, first activate the Ravolat Addons plugin: ", 'pass-max' ); ?> <a href="https://wordpress.org/plugins/pass" data-type="link" data-id="https://wordpress.org/plugins/pass">https://wordpress.org/plugins/pass</a></p>
        <!-- /wp:paragraph -->
        <!-- wp:paragraph -->
        <p><span class="bolded"><?php echo esc_html__( "Pattern: ", 'pass-max' ); ?></span> <?php echo esc_html( $pattern_name ); ?></p>
        <!-- /wp:paragraph -->
        <!-- wp:paragraph -->
        <?php if( !empty($pattern_demo_url) ) { ?>
        <p><span class="bolded"><?php echo esc_html__( "Pattern Demo: ", 'pass-max' ); ?></span><a href="<?php echo esc_url( $pattern_demo_url ); ?>" data-type="link" data-id="<?php echo esc_url( $pattern_demo_url ); ?>"><?php echo esc_url( $pattern_demo_url ); ?></a></p>
        <?php } ?>
        <!-- /wp:paragraph -->
    <?php 
    }

    function productive_global_render_missing_required_plugin_productive_commerce( $pattern_name = '', $pattern_demo_url = '' ) {
    ?>
        <!-- wp:heading {"className":"wp-block-heading"} -->
        <h2 class="wp-block-heading h3"><?php echo esc_html__( "Productive Commerce, A Required Plugin for This Pattern, Is Missing", 'pass-max' ); ?></h2>
        <!-- /wp:heading -->
        <!-- wp:paragraph -->
        <p><?php echo esc_html__( "To access this pattern, first activate the Productive Commerce plugin: ", 'pass-max' ); ?> <a href="https://wordpress.org/plugins/productive-commerce" data-type="link" data-id="https://wordpress.org/plugins/productive-commerce">https://wordpress.org/plugins/productive-commerce</a></p>
        <!-- /wp:paragraph -->
        <!-- wp:paragraph -->
        <p><span class="bolded"><?php echo esc_html__( "Pattern: ", 'pass-max' ); ?></span> <?php echo esc_html( $pattern_name ); ?></p>
        <!-- /wp:paragraph -->
        <!-- wp:paragraph -->
        <?php if( !empty($pattern_demo_url) ) { ?>
        <p><span class="bolded"><?php echo esc_html__( "Pattern Demo: ", 'pass-max' ); ?></span><a href="<?php echo esc_url( $pattern_demo_url ); ?>" data-type="link" data-id="<?php echo esc_url( $pattern_demo_url ); ?>"><?php echo esc_url( $pattern_demo_url ); ?></a></p>
        <?php } ?>
        <!-- /wp:paragraph -->
    <?php 
    }

    function productive_global_render_missing_required_plugin_productive_forms( $pattern_name = '', $pattern_demo_url = '' ) {
    ?>
        <!-- wp:heading {"className":"wp-block-heading"} -->
        <h2 class="wp-block-heading h3"><?php echo esc_html__( "Productive Forms, A Required Plugin for This Pattern, Is Missing", 'pass-max' ); ?></h2>
        <!-- /wp:heading -->
        <!-- wp:paragraph -->
        <p><?php echo esc_html__( "To access this pattern, first activate the Productive Forms plugin: ", 'pass-max' ); ?> <a href="https://wordpress.org/plugins/productive-forms" data-type="link" data-id="https://wordpress.org/plugins/productive-forms">https://wordpress.org/plugins/productive-forms</a></p>
        <!-- /wp:paragraph -->
        <!-- wp:paragraph -->
        <p><span class="bolded"><?php echo esc_html__( "Pattern: ", 'pass-max' ); ?></span> <?php echo esc_html( $pattern_name ); ?></p>
        <!-- /wp:paragraph -->
        <!-- wp:paragraph -->
        <?php if( !empty($pattern_demo_url) ) { ?>
        <p><span class="bolded"><?php echo esc_html__( "Pattern Demo: ", 'pass-max' ); ?></span><a href="<?php echo esc_url( $pattern_demo_url ); ?>" data-type="link" data-id="<?php echo esc_url( $pattern_demo_url ); ?>"><?php echo esc_url( $pattern_demo_url ); ?></a></p>
        <?php } ?>
        <!-- /wp:paragraph -->
    <?php 
    }

    function productive_global_render_missing_required_plugin_productive_style( $pattern_name = '', $pattern_demo_url = '' ) {
    ?>
        <!-- wp:heading {"className":"wp-block-heading"} -->
        <h2 class="wp-block-heading h3"><?php echo esc_html__( "Productive Style, A Required Plugin for This Pattern, Is Missing", 'pass-max' ); ?></h2>
        <!-- /wp:heading -->
        <!-- wp:paragraph -->
        <p><?php echo esc_html__( "To access this pattern, first activate the Productive Style plugin: ", 'pass-max' ); ?> <a href="https://wordpress.org/plugins/productive-style" data-type="link" data-id="https://wordpress.org/plugins/productive-style">https://wordpress.org/plugins/productive-style</a></p>
        <!-- /wp:paragraph -->
        <!-- wp:paragraph -->
        <p><span class="bolded"><?php echo esc_html__( "Pattern: ", 'pass-max' ); ?></span> <?php echo esc_html( $pattern_name ); ?></p>
        <!-- /wp:paragraph -->
        <!-- wp:paragraph -->
        <?php if( !empty($pattern_demo_url) ) { ?>
        <p><span class="bolded"><?php echo esc_html__( "Pattern Demo: ", 'pass-max' ); ?></span><a href="<?php echo esc_url( $pattern_demo_url ); ?>" data-type="link" data-id="<?php echo esc_url( $pattern_demo_url ); ?>"><?php echo esc_url( $pattern_demo_url ); ?></a></p>
        <?php } ?>
        <!-- /wp:paragraph -->
    <?php 
    }
    
    function productive_global_admin_scripts() {
        if ( !function_exists( 'productiveminds_global_js_handle_admin') ) {
            wp_enqueue_script( 'productive_global_admin_js_handle', esc_url(PRODUCTIVE_GLOBAL_ITEM_URL) . 'js/admin-global.js', array('jquery'), esc_html(PRODUCTIVE_GLOBAL_SETTINGS_VERSION), true );
            require_once PRODUCTIVE_GLOBAL_ITEM_PATH . 'js/productiveminds-global-js-handle-admin.php';
            
            $admin_ajax_php_class = array(
                'ajax_admin_url'                        => admin_url( 'admin-ajax.php' ),
                'nonce'                                 => wp_create_nonce(PRODUCTIVE_GLOBAL_SCRIPTS_NONCE_ADMIN),
                'updates_nonce'                         => wp_create_nonce('updates'),
                'import_wordpress_nonce'                => wp_create_nonce('import-wordpress'),
            );
            wp_localize_script(
                'productive_global_admin_js_handle',
                'productive_global_admin_js_url_name',
                $admin_ajax_php_class
            );
        }
    }
    if ( is_admin() ) {
        add_action( 'admin_enqueue_scripts', 'productive_global_admin_scripts' );
    }
    
    $productive_global_popup_transition_easing = '--ease-in-out';
    $productive_global_popup_transition_direction = 'slideFromBottom';
    $is_on_productive_global_popup_use_theme_style = 'use_theme_style';
    $is_on_productive_global_popup_close_with_esc_key_enable = 'can_keyup';
    $is_on_productive_global_popup_close_with_click_elsewhere_enable = 'can_elsewhere';
    
    // Admin SubMenu for Global settings
    function productive_global_plugin_options_render_page_menu_global() {
        if( !function_exists( 'productive_global_menulist_is_includes' ) ) {
            add_submenu_page(
                PRODUCTIVE_GLOBAL_ADMIN_OVERVIEW_REQUEST_URI,
                esc_html__( "Productive Global Settings", 'pass-max' ), // Browser navbar title
                esc_html__( "Global Settings", 'pass-max' ), // Sidebar menu text
                'manage_options', 
                esc_html(PRODUCTIVE_GLOBAL_ADMIN_PAGE_REQUEST_URI), // Unique id
                'productive_global_options_render_page_menu_html' // Callback function for the menu
            );
            require_once( PRODUCTIVE_GLOBAL_ITEM_PATH . 'partials/part-global-more.php' );
        }
    }
    
    // Admin render for Global settings
    function productive_global_options_render_page_menu_html() {
        // check user capabilities
        if ( !current_user_can( 'manage_options' ) ) {
            add_settings_error( 'productive_global_admin_messages', 'productive_global_admin_message', esc_html__( 'You do not have permission to access this resource.', 'pass-max' ), 'error' );
            settings_errors( 'productive_global_admin_messages' );
        } else {
        // check if the user have submitted the settings
        $is_error_count_section_grid = count( get_settings_errors('productive_global_section_grid_options') );
        $is_error_count_section_popup = count( get_settings_errors('productive_global_section_popup_options') );
        $is_error_count_section_slider = count( get_settings_errors('productive_global_section_slider_options') );
        $is_error_count_section_sharing = count( get_settings_errors('productive_global_section_sharing_options') );
        $is_error_count_section_following = count( get_settings_errors('productive_global_section_following_options') );
        $is_error_count_section_misc = count( get_settings_errors('productive_global_section_misc_options') );
        if ( isset( $_GET['settings-updated'] ) && $is_error_count_section_grid < 1 && $is_error_count_section_popup < 1 && $is_error_count_section_slider < 1 && $is_error_count_section_sharing < 1  && $is_error_count_section_following < 1 && $is_error_count_section_misc < 1 ) {
            // add settings saved message with the class of "updated"
            add_settings_error( 'productive_global_admin_messages', 'productive_global_admin_message', esc_html__( 'Settings Saved', 'pass-max' ), 'updated' );
        }
        settings_errors( 'productive_global_admin_messages' );

        $active_tab = 'section_global_grid_options_tab';
        if( isset( $_GET[ 'tab' ] ) ) {
            $active_tab = sanitize_text_field( wp_unslash($_GET[ 'tab' ]) );
        }
        ?>

        <div class="wrap productive-global-options-page-wrapper">
           <div class="page-wrapper-heading-container">
                <div class="page-wrapper-heading">
                    <h1><?php echo esc_html__( "Productive Global Settings", 'pass-max' ); ?></h1>
                </div>
                <div class="page-wrapper-heading-version">
                    <div><?php echo 'v' . esc_html(PRODUCTIVE_GLOBAL_SETTINGS_VERSION); ?></div>
                </div>
           </div>
            <div class="page-wrapper-body">

                <div class="page-wrapper-options-error">
                    <?php settings_errors('productive_global_section_grid_options'); ?>
                    <?php settings_errors('productive_global_section_popup_options'); ?>
                    <?php settings_errors('productive_global_section_slider_options'); ?>
                    <?php settings_errors('productive_global_section_sharing_options'); ?>
                    <?php settings_errors('productive_global_section_following_options'); ?>
                    <?php settings_errors('productive_global_section_misc_options'); ?>
                </div>

                <?php
                    $section_global_grid_options_tab_active = '';
                    if ( $active_tab === 'section_global_grid_options_tab' ) {
                        $section_global_grid_options_tab_active = 'nav-tab-active';
                    }
                    $section_global_popup_options_tab_active = '';
                    if ( $active_tab === 'section_global_popup_options_tab' ) {
                        $section_global_popup_options_tab_active = 'nav-tab-active';
                    }
                    $section_global_slider_options_tab_active = '';
                    if ( $active_tab === 'section_global_slider_options_tab' ) {
                        $section_global_slider_options_tab_active = 'nav-tab-active';
                    }
                    $section_global_sharing_options_tab_active = '';
                    if ( $active_tab === 'section_global_sharing_options_tab' ) {
                        $section_global_sharing_options_tab_active = 'nav-tab-active';
                    }
                    $section_global_following_options_tab_active = '';
                    if ( $active_tab === 'section_global_following_options_tab' ) {
                        $section_global_following_options_tab_active = 'nav-tab-active';
                    }
                    $section_global_misc_options_tab_active = '';
                    if ( $active_tab === 'section_global_misc_options_tab' ) {
                        $section_global_misc_options_tab_active = 'nav-tab-active';
                    }
                ?>
                <h2 class="nav-tab-wrapper">
                    <a href="?page=<?php echo esc_attr(PRODUCTIVE_GLOBAL_ADMIN_PAGE_REQUEST_URI); ?>&tab=section_global_grid_options_tab" class="nav-tab <?php echo esc_attr($section_global_grid_options_tab_active); ?>"><?php echo esc_html__( 'Grids and Breakpoints', 'pass-max' ); ?></a>
                    <a href="?page=<?php echo esc_attr(PRODUCTIVE_GLOBAL_ADMIN_PAGE_REQUEST_URI); ?>&tab=section_global_popup_options_tab" class="nav-tab <?php echo esc_attr($section_global_popup_options_tab_active); ?>"><?php echo esc_html__( 'PopUps', 'pass-max' ); ?></a>
                    <a href="?page=<?php echo esc_attr(PRODUCTIVE_GLOBAL_ADMIN_PAGE_REQUEST_URI); ?>&tab=section_global_slider_options_tab" class="nav-tab <?php echo esc_attr($section_global_slider_options_tab_active); ?>"><?php echo esc_html__( 'Sliders', 'pass-max' ); ?></a>
                    <a href="?page=<?php echo esc_attr(PRODUCTIVE_GLOBAL_ADMIN_PAGE_REQUEST_URI); ?>&tab=section_global_sharing_options_tab" class="nav-tab <?php echo esc_attr($section_global_sharing_options_tab_active); ?>"><?php echo esc_html__( 'Sharing', 'pass-max' ); ?></a>
                    <a href="?page=<?php echo esc_attr(PRODUCTIVE_GLOBAL_ADMIN_PAGE_REQUEST_URI); ?>&tab=section_global_following_options_tab" class="nav-tab <?php echo esc_attr($section_global_following_options_tab_active); ?>"><?php echo esc_html__( 'Follow & Contact', 'pass-max' ); ?></a>
                    <a href="?page=<?php echo esc_attr(PRODUCTIVE_GLOBAL_ADMIN_PAGE_REQUEST_URI); ?>&tab=section_global_misc_options_tab" class="nav-tab <?php echo esc_attr($section_global_misc_options_tab_active); ?>"><?php echo esc_html__( 'Other Settings', 'pass-max' ); ?></a>
                </h2>
                <div class="page-wrapper-body-form">
                    <div class="productive-global-item-container">
                        <form class="productive_global_options_form" name="productive_global_options_form" method="post" action="options.php">   
                            <?php if ( $active_tab == 'section_global_grid_options_tab' ) { ?>
                                <?php
                                    settings_fields( 'productive_global_section_grid_options' );
                                    do_settings_sections( 'productive_global_section_grid_options' );
                                ?>
                                <?php submit_button();?>
                            <?php } else if ( $active_tab == 'section_global_popup_options_tab' ) { ?>
                                <?php
                                    settings_fields( 'productive_global_section_popup_options' );
                                    do_settings_sections( 'productive_global_section_popup_options' );
                                ?>
                                <?php submit_button();?>
                            <?php } else if ( $active_tab == 'section_global_slider_options_tab' ) { ?>
                                <?php
                                    settings_fields( 'productive_global_section_slider_options' );
                                    do_settings_sections( 'productive_global_section_slider_options' );
                                ?>
                                <?php submit_button();?>
                            <?php } else if ( $active_tab == 'section_global_sharing_options_tab' ) { ?>
                                <?php
                                    settings_fields( 'productive_global_section_sharing_options' );
                                    do_settings_sections( 'productive_global_section_sharing_options' );
                                ?>
                                <?php submit_button();?>
                            <?php } else if ( $active_tab == 'section_global_following_options_tab' ) { ?>
                                <?php
                                    settings_fields( 'productive_global_section_following_options' );
                                    do_settings_sections( 'productive_global_section_following_options' );
                                ?>
                                <?php submit_button();?>
                            <?php } else if ( $active_tab == 'section_global_misc_options_tab' ) { ?>
                                <?php
                                    settings_fields( 'productive_global_section_misc_options' );
                                    do_settings_sections( 'productive_global_section_misc_options' );
                                ?>
                                <?php submit_button();?>
                            <?php } ?>
                        </form>
                    </div>
                </div>

            </div>
        </div>

        <?php
        }
    }
    
    /**
     * Assign slider vars
     * 
     * @param type $productiveminds_common_localize_script_vars
     */
    function productive_global_get_common_swiper_localize_script( &$productiveminds_common_localize_script_vars ) {
        $swiper_var_simulateTouch = false;
        $swiper_var_scrollBarEnabled = false;
        $productive_global_slider_user_controls = 'all';
        if ( 'all' == $productive_global_slider_user_controls || 
                'touch_swipe' == $productive_global_slider_user_controls || 
                'touch_swipe_and_arrows' == $productive_global_slider_user_controls || 
                'touch_swipe_and_dots' == $productive_global_slider_user_controls ) {
                $swiper_var_simulateTouch = true;
        }

        $spv_widescreen = '4';
        $spv_desktop = '3';
        $spv_tablet_landscape = '3';
        $spv_tablet_portrait = '2';
        $spv_mobile_landscape = '2';
        $spv_mobile_portrait = '1';
        $spv_slides = $spv_mobile_portrait.','.$spv_mobile_landscape.','.$spv_tablet_portrait . ','.$spv_tablet_landscape . ','.$spv_desktop . ','.$spv_widescreen;

        $bp_widescreen = 1400;
        $bp_desktop = 1280;
        $bp_tablet_landscape = 1024;
        $bp_tablet_portrait = 800;
        $bp_mobile_landscape = 767;
        $bp_mobile_portrait = 600;
        $bp_breakpoints = $bp_mobile_portrait.','.$bp_mobile_landscape.','.$bp_tablet_portrait.','.$bp_tablet_landscape.','.$bp_desktop.','.$bp_widescreen;
        
        $bp_margins = '15,15,20,20,25,25'; // Slide margins

        $productiveminds_common_localize_script_vars['ajax_admin_url'] = admin_url( 'admin-ajax.php' );
        $productiveminds_common_localize_script_vars['nonce'] = wp_create_nonce('productive_global_scripts');
        $productiveminds_common_localize_script_vars['swiper_var_enabled'] = true;
        $productiveminds_common_localize_script_vars['swiper_var_slidesPerView'] = $spv_slides;
        $productiveminds_common_localize_script_vars['swiper_var_slidesBreakPoints'] = $bp_breakpoints;
        $productiveminds_common_localize_script_vars['swiper_var_effect'] = 'slide';
        $productiveminds_common_localize_script_vars['swiper_var_loop'] = 'checked';
        $productiveminds_common_localize_script_vars['swiper_var_direction'] = 'horizontal';
        $productiveminds_common_localize_script_vars['swiper_var_lazyLoading'] = 'checked';
        $productiveminds_common_localize_script_vars['swiper_var_autoplay'] = 'checked';
        $productiveminds_common_localize_script_vars['swiper_var_delay'] = '4000';
        $productiveminds_common_localize_script_vars['swiper_var_pauseOnMouseEnter'] = 'checked';
        $productiveminds_common_localize_script_vars['swiper_var_scrollbar'] = $swiper_var_scrollBarEnabled;
        $productiveminds_common_localize_script_vars['swiper_var_simulateTouch'] = $swiper_var_simulateTouch;
        $productiveminds_common_localize_script_vars['swiper_var_grabCursor'] = $swiper_var_simulateTouch;
        $productiveminds_common_localize_script_vars['swiper_var_slides_margin'] = $bp_margins;
        
    }
    function productive_global_get_common_std_localize_script( &$productiveminds_common_localize_script_vars ) {
        $productiveminds_common_localize_script_vars['productiveminds_global_home_url'] = esc_url( home_url() );
        
        $is_admin = 'no';
        if( is_admin() ) {
            $is_admin = 'yes';
        }
        $productiveminds_common_localize_script_vars['productiveminds_global_is_admin'] = $is_admin;
    }
    
    /**
     * Global inline CSS
     * @return $css
     */
    function productive_global_apply_custom_css() {
        $css_settings = productive_global_get_custom_css();
        $productive_global_slider_nav_control_padding_int = intval( $css_settings['productive_global_slider_nav_control_padding'] ) * 2;
        // Initial Slider Settings
        $css =  '' .
            '.productiveminds-slider-content-container .swiper_container .swiper-button-prev, .productiveminds-slider-content-container .swiper_container .swiper-button-next {
                    color: ' . $css_settings['productive_global_slider_buttons_color_primary'] . ';
                    background: ' . $css_settings['productive_global_slider_buttons_color_secondary'] . ';
                    padding: ' . $css_settings['productive_global_slider_nav_control_padding'] . 'px;
            }.productiveminds-slider-content-container .swiper_container.nav-arrows-top-out {
                    padding-top: calc( var(--swiper-navigation-size) + ' . $productive_global_slider_nav_control_padding_int . 'px );
            }.productiveminds-slider-content-container .swiper_container.nav-arrows-bottom-out {
                    padding-bottom: calc( var(--swiper-navigation-size) * 1.5 );
            }.productiveminds-slider-content-container .swiper_container.nav-arrows-top-out .swiper-button-prev, 
             .productiveminds-slider-content-container .swiper_container.nav-arrows-bottom-out .swiper-button-prev {
                    right: calc( var(--swiper-navigation-size) + ' . $productive_global_slider_nav_control_padding_int . 'px );
            }.productiveminds-slider-content-container .swiper_container .swiper-pagination-bullet {
                    background: ' . $css_settings['productive_global_slider_buttons_color_secondary'] . ';
            }.productiveminds-slider-content-container .swiper_container .swiper-pagination-bullet-active {
                    background: ' . $css_settings['productive_global_slider_buttons_color_primary'] . ';
            }';
            
            if ( !productive_global_is_a_productive_theme() ) {
                $css_settings_custom_palette = productive_global_get_custom_palette_colors();
                $css  .= ':root {';
                if ( !empty($css_settings_custom_palette ) ) {
                    foreach ( $css_settings_custom_palette as $key => $value) {
                       $css .= $value;
                    }
                }
                $css .= '}';
            }
            
            $css .= '';
            
            return trim($css);
    }
    function productive_global_get_custom_css() {
        $local_style_setting = array();
        $local_style_setting['productive_global_slider_buttons_color_primary']                      = '#0a47bb';
        $local_style_setting['productive_global_slider_buttons_color_secondary']                    = '#f7f7f7';
        $local_style_setting['productive_global_slider_nav_control_padding']                        = 25;
        
        return $local_style_setting;
    }
    
    function productive_global_get_custom_palette_colors($important = '') {
        $original_scheme_colors = array();
        if ( !empty(productive_global_custom_color_dom()) ) {
            $original_scheme_colors['dom']                      = '--dom: ' . productive_global_custom_color_dom() . ' ' . $important . '; ';
        }
        if ( !empty(productive_global_custom_color_dom_plus()) ) {
            $original_scheme_colors['dom_plus']                 = '--dom-plus: ' . productive_global_custom_color_dom_plus() . ' ' . $important . '; ';
        }
        if ( !empty(productive_global_custom_color_dom_minus()) ) {
            $original_scheme_colors['dom_minus']                = '--dom-minus: ' . productive_global_custom_color_dom_minus() . ' ' . $important . '; ';
        }
        if ( !empty(productive_global_custom_color_accent_1()) ) {
            $original_scheme_colors['accent_1']                 = '--accent-1: ' . productive_global_custom_color_accent_1() . ' ' . $important . '; ';
        }
        if ( !empty(productive_global_custom_color_accent_2()) ) {
            $original_scheme_colors['accent_2']                 = '--accent-2: ' . productive_global_custom_color_accent_2() . ' ' . $important . '; ';
        }
        if ( !empty(productive_global_custom_color_txt_1()) ) {
            $original_scheme_colors['txt_1']                    = '--txt-1: ' . productive_global_custom_color_txt_1() . ' ' . $important . '; ';
        }
        if ( !empty(productive_global_custom_color_txt_2()) ) {
            $original_scheme_colors['txt_2']                    = '--txt-2: ' . productive_global_custom_color_txt_2() . ' ' . $important . '; ';
        }
        if ( !empty(productive_global_custom_color_neutral()) ) {
            $original_scheme_colors['neutral']                  = '--neutral: ' . productive_global_custom_color_neutral() . ' ' . $important . '; ';
        }
        if ( !empty(productive_global_custom_color_neutral_light()) ) {
            $original_scheme_colors['neutral_light']            = '--neutral-light: ' . productive_global_custom_color_neutral_light() . ' ' . $important . '; ';
        }
        if ( !empty(productive_global_custom_color_white()) ) {
            $original_scheme_colors['dom_white']                = '--dom-white: ' . productive_global_custom_color_white() . ' ' . $important . '; ';
        }
        if ( !empty(productive_global_custom_color_black()) ) {
            $original_scheme_colors['dom_black']                = '--dom-black: ' . productive_global_custom_color_black() . ' ' . $important . '; ';
        }
        if ( !empty(productive_global_custom_color_review_and_rating_stars()) ) {
            $original_scheme_colors['dom_review_star']          = '--productRating_Yes_Color: ' . productive_global_custom_color_review_and_rating_stars() . ' ' . $important . '; ';
        }

        return $original_scheme_colors;
    }
    
    function productive_global_get_custom_palette_overrides($important = '') {
        $color_scheme_overrides = array();
        if ( !empty(productive_global_cc_bg_override()) ) {
            $color_scheme_overrides['body_bg']                      = '--body-bg: ' . productive_global_cc_bg_override() . ' ' . $important . '; ';
        }
        if ( !empty(productive_global_cc_header_item_override()) ) {
            $color_scheme_overrides['header_menu_font_color']                      = '--header-menu-font-color: ' . productive_global_cc_header_item_override() . ' ' . $important . '; ';
        }
        if ( !empty(productive_global_cc_header_item_override_hover()) ) {
            $color_scheme_overrides['header_menu_font_color_hover']                 = '--header-menu-font-color-hover: ' . productive_global_cc_header_item_override_hover() . ' ' . $important . '; ';
        }
        if ( !empty(productive_global_cc_links_override()) ) {
            $color_scheme_overrides['std_link']                = '--std-link: ' . productive_global_cc_links_override() . ' ' . $important . '; ';
        }
        if ( !empty(productive_global_cc_links_override_hover()) ) {
            $color_scheme_overrides['std_link_hover']                 = '--std-link-hover: ' . productive_global_cc_links_override_hover() . ' ' . $important . '; ';
        }
        
        $css = '';
        if ( productive_global_is_a_productive_theme() ) {
            $css  .= ':root {';
            if ( !empty($color_scheme_overrides ) ) {
                foreach ( $color_scheme_overrides as $key => $value) {
                   $css .= $value;
                }
            }
            $css .= '}';
        }

        $css .= '';

        return trim($css);
    }
    
    
    function productive_global_is_elementor_loaded() {
        return did_action( 'elementor/loaded' );
    }
    
    function productive_global_is_elementor_active() {
        $active_plugins_array = apply_filters( 'active_plugins', get_option('active_plugins') );
        return in_array( 'elementor/elementor.php', $active_plugins_array );
    }
    
    function productive_global_is_elementor_pro_active() {
        $active_plugins_array = apply_filters( 'active_plugins', get_option('active_plugins') );
        return in_array( 'elementor-pro/elementor-pro.php', $active_plugins_array );
    }
    
    function productive_global_is_woocommerce_active() {
        $active_plugins_array = apply_filters( 'active_plugins', get_option('active_plugins') );
        return in_array( 'woocommerce/woocommerce.php', $active_plugins_array );
    }
    
    function productive_global_get_woo_product_return_wc_get_product_object( $product ) {
        
        $product_object = null;
        if( !productive_global_is_woocommerce_active() ) {
            return $product_object;
        }
        
        if( null != $product && !is_object( $product ) ) {
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 1,
                'post_status' => 'publish',
                'suppress_filters' => 0,
            );
            if(is_numeric( $product ) ) {
                $args['p'] = $product;
            } else {
                $args['name'] = $product;
            }
            $product_post = new WP_Query( $args );
            $product_object_query = $product_post->found_posts ? $product_post->posts[0] : false;
            if( $product_object_query ) {
                $product_object = wc_get_product( $product_object_query->ID );
            } 
        } else {
            if( $product instanceof WC_Product ) {
                $product_object = $product;
            } else if( null != $product && is_object($product) && $product->ID ) {
                $product_object = wc_get_product( $product->ID );
            }
        }
        return $product_object;
    }

    function productive_global_get_attribute_taxonomies_options() {
        $variation_attributes = array(
            '' => esc_html__( 'None', 'pass-max' ),
        );
        foreach ( wc_get_attribute_taxonomies() as $attribute ) {
            $taxonomy_name = wc_attribute_taxonomy_name( $attribute->attribute_name );
            $variation_name = wc_variation_attribute_name( $taxonomy_name );
            if( !empty($variation_name) ) {
                $variation_attributes[$variation_name] = $attribute->attribute_label;
            }
        }
        return $variation_attributes;
    }
    
    function productive_global_get_category_thumbnail_url( $parent_category_id, $thumbnail_type = 'thumbnail_id' ) {
        $thumbnail_id = get_term_meta($parent_category_id, $thumbnail_type, true );
        $url = wp_get_attachment_url($thumbnail_id);
        return $url;
    }

    function productive_global_setcookie( $name, $value, $expires_in ) {
        $secure = ( 'https' === wp_parse_url( home_url(), PHP_URL_SCHEME ) );
	setcookie( $name, $value, $expires_in, COOKIEPATH, COOKIE_DOMAIN, $secure );
    }
    
    function productive_global_uploads_folder_name() {
        return 'productiveminds';
    }
    
    function productive_global_get_uploads_url() {
        $upload_dir = wp_upload_dir();
        return $upload_dir['baseurl'];
    }
    
    function productive_global_get_uploads_path() {
        $upload_dir = wp_upload_dir();
        return $upload_dir['basedir'];
    }

    function productive_global_get_content_title_case( $content ) {
        $title = str_replace( '-', ' ', $content );
        $title = ucwords( str_replace( '_', ' ', $title ) );    
        return $title;
    }

    function productive_global_get_post_filter_by_types() {
        $args = array();
        if( !productive_global_is_pass_addons_active_extra() && !productive_global_is_ravolat_addons_active_extra() ) {
            $args = array (
                '' => esc_html__( 'Select an Option', 'pass-max' ),
                'latest' => esc_html__( 'Latest Posts', 'pass-max' ),
                'featured' => esc_html__( 'Featured Posts', 'pass-max' ),
                'related' => esc_html__( 'Related Posts', 'pass-max' ),
                'select_a_category' => esc_html__( 'Specific Category', 'pass-max' ),
            );
        } else {
            $args = array (
                '' => esc_html__( 'Select an Option', 'pass-max' ),
                'all_posts_archives' => esc_html__( 'All Post Archives', 'pass-max' ),
                'posts_cat' => esc_html__( 'Post Category - Archive', 'pass-max' ),
                'posts_author' => esc_html__( 'Post Author - Archive', 'pass-max' ),
                'posts_tag' => esc_html__( 'Post Tag - Archive', 'pass-max' ),
                'latest' => esc_html__( 'Latest Posts', 'pass-max' ),
                'featured' => esc_html__( 'Featured Posts', 'pass-max' ),
                'related' => esc_html__( 'Related Posts', 'pass-max' ),
                'select_a_category' => esc_html__( 'Specific Category', 'pass-max' ),
            );
        }
       return $args;
    }

    function productive_global_get_woo_product_filter_by_types() {
       $args = array();
        if( !productive_global_is_pass_addons_active_extra() && !productive_global_is_ravolat_addons_active_extra() ) {
            $args = array (
                '' => esc_html__( 'Select an Option', 'pass-max' ),
                'latest' => esc_html__( 'Latest Products', 'pass-max' ),
                'featured' => esc_html__( 'Featured Products', 'pass-max' ),
                'onsale' => esc_html__( 'On Sale Products', 'pass-max' ),
                'bestsellers' => esc_html__( 'Best Selling Products', 'pass-max' ),
                'top_rated' => esc_html__( 'Top Rated', 'pass-max' ),
                'select_a_category' => esc_html__( 'Specific Category', 'pass-max' ),
            );
        } else {
            $args = array (
                '' => esc_html__( 'Select an Option', 'pass-max' ),
                'product_archive' => esc_html__( 'Product Archive', 'pass-max' ),
                'latest' => esc_html__( 'Latest Products', 'pass-max' ),
                'featured' => esc_html__( 'Featured Products', 'pass-max' ),
                'bestsellers' => esc_html__( 'Best Selling Products', 'pass-max' ),
                'top_rated' => esc_html__( 'Top Rated', 'pass-max' ),
                'onsale' => esc_html__( 'On Sale Products', 'pass-max' ),
                'related' => esc_html__( 'Related Products', 'pass-max' ),
                'upsell' => esc_html__( 'Upsells', 'pass-max' ),
                'cross_sells' => esc_html__( 'Cross Sells', 'pass-max' ),
                'select_a_category' => esc_html__( 'Specific Category', 'pass-max' ),
            );
        }
       return $args;
    }

    function productive_global_get_video_platforms() {
        return array (
            'yt' => esc_html__( 'YouTube', 'pass-max' ),
        );
    }
    
    function productive_global_get_activate_or_deactivate_options() {
        return array (
            '1' => esc_html__( 'Activate', 'pass-max' ),
            '0' => esc_html__( 'De-Activate', 'pass-max' ),
        );
    }
    
    function productive_global_get_enable_or_disable_options() {
        return array (
            '1' => esc_html__( 'Enable', 'pass-max' ),
            '0' => esc_html__( 'Disable', 'pass-max' ),
        );
    }

    function productive_global_get_show_or_hide_options() {
        return array (
            '1' => esc_html__( 'Show', 'pass-max' ),
            '0' => esc_html__( 'Hide', 'pass-max' ),
        );
    }

    function productive_global_get_yes_or_no_options() {
        return array (
            '1' => esc_html__( 'Yes', 'pass-max' ),
            '0' => esc_html__( 'No', 'pass-max' ),
        );
    }

    function productive_global_get_true_or_false_options() {
        return array (
            '1' => esc_html__( 'True', 'pass-max' ),
            '0' => esc_html__( 'False', 'pass-max' ),
        );
    }

    function productive_global_get_start_or_stop_options() {
        return array (
            '1' => esc_html__( 'Start', 'pass-max' ),
            '0' => esc_html__( 'Stop', 'pass-max' ),
        );
    }

    function productive_global_get_show_item_on_the_left_or_right_or_hide_options() {
        return array (
            'hide' => esc_html__( 'Hide', 'pass-max' ),
            'position_left' => esc_html__( 'Left', 'pass-max' ),
            'position_right' => esc_html__( 'Right', 'pass-max' ),
        );
    }

    function productive_global_get_display_post_media_options( $v = 0, $edition = '' ) {
        $options = array (
            'none' => esc_html__( 'None', 'pass-max' ),
            'icon' => esc_html__( 'Icon', 'pass-max' ),
            'image' => esc_html__( 'Image', 'pass-max' ),
        );
        if( $v && $edition == 'free' ) {
            $options['image_and_video'] = esc_html__( 'Image with Video Options (Pro feature)', 'pass-max' );
        } else if( $v ) {
            $options['image_and_video'] = esc_html__( 'Image with Video Options', 'pass-max' );
        }
        
        return $options;
    }

    function productive_global_get_display_post_title_options() {
        return array (
            '0' => esc_html__( 'Hide', 'pass-max' ),
            '1' => esc_html__( 'Text', 'pass-max' ),
            '2' => esc_html__( 'Link, Open In The Same Window', 'pass-max' ),
            '3' => esc_html__( 'Link, Open In New Window', 'pass-max' ),
        );
    }

    function productive_global_get_display_as_link_options_with_hide() {
        return array (
            '0' => esc_html__( 'Hide', 'pass-max' ),
            '1' => esc_html__( 'Yes, Open In The Same Window', 'pass-max' ),
            '2' => esc_html__( 'Yes, Open In New Window', 'pass-max' ),
        );
    }

    function productive_global_get_display_as_link_options_with_no() {
        return array (
            '0' => esc_html__( 'No', 'pass-max' ),
            '1' => esc_html__( 'Yes, Open In The Same Window', 'pass-max' ),
            '2' => esc_html__( 'Yes, Open In New Window', 'pass-max' ),
        );
    }

    function productive_global_get_is_valid_value( $value ) {
        return $value || 'on' == $value || 'true' == $value || 'enabled' == $value || 'active' == $value;
    }
    
    function productive_global_get_basic_alignment_css_class_options() {
        return array (
            'justify-block-content-center'          => esc_html__( 'Center', 'pass-max' ),
            'justify-block-content-left'            => esc_html__( 'Left', 'pass-max' ),
            'justify-block-content-right'           => esc_html__( 'Right', 'pass-max' ),
        );
    }
    
    function productive_global_get_theme_page_layout_options() {
        return array (
            'one_column'            => esc_html__( 'One Column', 'pass-max' ),
            'two_columns_left'      => esc_html__( 'Left Sidebar', 'pass-max' ),
            'two_columns_right'     => esc_html__( 'Right Sidebar', 'pass-max' ),
            'three_columns'         => esc_html__( 'Three Columns', 'pass-max' ),
        );
    }
    
    function productive_global_get_basic_content_box_designs_options( $get_whole_box_only = 0 ) {
        
        $content_box_only = array (
            'shapeable-content-box-default'                             => esc_html__( 'Default', 'pass-max' ),
            'shapeable-content-box-default-with-bg'                     => esc_html__( 'Default, with Background', 'pass-max' ),
            'shapeable-content-box-default-with-border'                 => esc_html__( 'Default, with Border', 'pass-max' ),
            'shapeable-content-box-rounded-corner-with-bg'              => esc_html__( 'Rounded Corner, with Background', 'pass-max' ),
            'shapeable-content-box-rounded-corner-with-border'          => esc_html__( 'Rounded Corner, with Border', 'pass-max' ),
            'shapeable-content-box-ellipsed-with-bg'                    => esc_html__( 'Ellipse, with Background', 'pass-max' ),
            'shapeable-content-box-ellipsed-with-border'                => esc_html__( 'Ellipse, with Border', 'pass-max' ),
        );
        
        $whole_box_only = array (
            'shapeable-content-box-default'                             => esc_html__( 'Default', 'pass-max' ),
            'shapeable-content-whole-box-default-with-bg'               => esc_html__( 'Default, with Background (Box)', 'pass-max' ),
            'shapeable-content-whole-box-default-with-border'           => esc_html__( 'Default, with Border (Box)', 'pass-max' ),
            'shapeable-content-whole-box-rounded-corner-with-bg'        => esc_html__( 'Rounded Corner, with Background (Box)', 'pass-max' ),
            'shapeable-content-whole-box-rounded-corner-with-border'    => esc_html__( 'Rounded Corner, with Border (Box)', 'pass-max' ),
            'shapeable-content-whole-box-ellipsed-with-bg'              => esc_html__( 'Ellipse, with Background (Box)', 'pass-max' ),
            'shapeable-content-whole-box-ellipsed-with-border'          => esc_html__( 'Ellipse, with Border (Box)', 'pass-max' ),
        );
        
        $required_array = array();
        if( !$get_whole_box_only ) {
            $required_array = array_merge( $content_box_only, $whole_box_only ); // array_merge takes care of unique values
        } else {
            $required_array = $whole_box_only;
        }
        
        return $required_array;
    }
    
    function productive_global_get_alignment_with_css_class_options() {
        return array (
            ''                  => esc_html__( 'Default', 'pass-max' ),
            'centered'          => esc_html__( 'Center', 'pass-max' ),
            'lefted'            => esc_html__( 'Start (Left)', 'pass-max' ),
            'righted'           => esc_html__( 'End (Right)', 'pass-max' ),
            'justified'         => esc_html__( 'Justify', 'pass-max' ),
        );
    }
    
    function productive_global_get_vertical_css_align_options() {
        return array (
            'flex-start'        => esc_html__( 'Top', 'pass-max' ),
            'center'            => esc_html__( 'Middle', 'pass-max' ),
            'flex-end'          => esc_html__( 'Bottom', 'pass-max' ),
            'stretch'           => esc_html__( 'Stretch', 'pass-max' ),
            'space-evenly'      => esc_html__( 'Space Evenly', 'pass-max' ),
            'space-between'     => esc_html__( 'Space Between', 'pass-max' ),
        );
    }
    
    function productive_global_get_horizontal_css_align_options() {
        return array (
            'center'            => esc_html__( 'Center', 'pass-max' ),
            'flex-start'        => esc_html__( 'Start (Left)', 'pass-max' ),
            'flex-end'          => esc_html__( 'End (Right)', 'pass-max' ),
            'space-around'      => esc_html__( 'Space Around', 'pass-max' ),
            'space-evenly'      => esc_html__( 'Space Evenly', 'pass-max' ),
            'space-between'     => esc_html__( 'Space Between', 'pass-max' ),
        );
    }
    
    function productive_global_get_vertical_align_items_options() {
        return array (
            'align-items-center'            => esc_html__( 'Middle', 'pass-max' ),
            'align-items-flex-start'        => esc_html__( 'Top', 'pass-max' ),
            'align-items-flex-end'          => esc_html__( 'Bottom', 'pass-max' ),
            'align-items-stretch'           => esc_html__( 'Stretch', 'pass-max' ),
            'align-items-baseline'          => esc_html__( 'Baseline', 'pass-max' ),
            'align-items-initial'           => esc_html__( 'Initial', 'pass-max' ),
        );
    }
    
    function productive_global_get_vertical_align_content_options() {
        return array (
            'align-content-center'              => esc_html__( 'Middle', 'pass-max' ),
            'align-content-flex-start'          => esc_html__( 'Top', 'pass-max' ),
            'align-content-flex-end'            => esc_html__( 'Bottom', 'pass-max' ),
            'align-content-stretch'             => esc_html__( 'Stretch', 'pass-max' ),
            'align-content-space-between'       => esc_html__( 'Space Between', 'pass-max' ),
            'align-content-space-around'        => esc_html__( 'Space Around', 'pass-max' ),
            'align-content-space-evenly'        => esc_html__( 'Space Evenly', 'pass-max' ),
            'align-content-initial'             => esc_html__( 'Initial', 'pass-max' ),
        );
    }
    
    function productive_global_get_horizontal_justify_items_options() {
        return array (
            'justify-items-center'          => esc_html__( 'Center', 'pass-max' ),
            'justify-items-start'           => esc_html__( 'Left (Start)', 'pass-max' ),
            'justify-items-end'             => esc_html__( 'Right (End)', 'pass-max' ),
            'justify-items-stretch'         => esc_html__( 'Stretch', 'pass-max' ),
            'justify-items-normal'          => esc_html__( 'Normal', 'pass-max' ),
            'justify-items-initial'         => esc_html__( 'Initial', 'pass-max' ),
        );
    }
    
    function productive_global_get_horizontal_justify_content_options() {
        return array (
            'justify-content-center'                => esc_html__( 'Center', 'pass-max' ),
            'justify-content-flex-start'            => esc_html__( 'Left (Start)', 'pass-max' ),
            'justify-content-flex-end'              => esc_html__( 'Right (End)', 'pass-max' ),
            'justify-content-space-between'         => esc_html__( 'Space Between', 'pass-max' ),
            'justify-content-space-around'          => esc_html__( 'Space Around', 'pass-max' ),
            'justify-content-space-evenly'          => esc_html__( 'Space Evenly', 'pass-max' ),
            'justify-content-initial'               => esc_html__( 'Initial', 'pass-max' ),
        );
    }
    
    function productive_global_get_colour_schemes_for_contents() {
        return array (
            'no_color_scheme'                   => esc_html__( 'None (no color scheme)', 'pass-max' ),
            'light_color_scheme'                => esc_html__( 'Light Color Scheme', 'pass-max' ),
            'dark_color_scheme'                 => esc_html__( 'Dark Color Scheme', 'pass-max' ),
            'themed_color_scheme'               => esc_html__( 'Theme&#39;s Color Scheme', 'pass-max' ),
        );
    }
    
    function productive_global_get_colour_schemes_for_bg() {
        return array (
            'section_with_no_bg'                    => esc_html__( 'No (no color scheme)', 'pass-max' ),
            'section_with_light_bg'                 => esc_html__( 'Light Background', 'pass-max' ),
            'section_with_dark_bg'                  => esc_html__( 'Dark Background', 'pass-max' ),
            'section_with_light_bg_dark_content'    => esc_html__( 'Light Background, Dark Content', 'pass-max' ),
            'section_with_dark_bg_light_content'    => esc_html__( 'Dark Background, Light Content', 'pass-max' ),
            'section_with_themed_bg'                => esc_html__( 'Theme&#39;s Color Scheme', 'pass-max' ),
        );
    }
    
    function productive_global_get_section_block_max_width() {
        return array (
            'siteMaxWidth_Std'                      => esc_html__( 'Default', 'pass-max' ),
            'siteMaxWidth_Narrow'                   => esc_html__( 'Narrow', 'pass-max' ),
            'siteMaxWidth_Narrow_Align_Left'        => esc_html__( 'Narrow, Align Left', 'pass-max' ),
            'siteMaxWidth_Narrow_Align_Right'       => esc_html__( 'Narrow, Align Right', 'pass-max' ),
            'siteMaxWidth_Thin'                     => esc_html__( 'Thin', 'pass-max' ),
            'siteMaxWidth_Thin_Align_Left'          => esc_html__( 'Thin, Align Left', 'pass-max' ),
            'siteMaxWidth_Thin_Align_Right'         => esc_html__( 'Thin, Align Right', 'pass-max' ),
            'siteMaxWidth_Mini'                     => esc_html__( 'Extra Thin', 'pass-max' ),
            'siteMaxWidth_Mini_Align_Left'          => esc_html__( 'Extra Thin, Align Left', 'pass-max' ),
            'siteMaxWidth_Mini_Align_Right'         => esc_html__( 'Extra Thin, Align Right', 'pass-max' ),
            'siteMaxWidth_Micro'                    => esc_html__( 'Micro Thin', 'pass-max' ),
            'siteMaxWidth_Micro_Align_Left'         => esc_html__( 'Micro Thin, Align Left', 'pass-max' ),
            'siteMaxWidth_Micro_Align_Right'        => esc_html__( 'Micro Thin, Align Right', 'pass-max' ),
            'siteMaxWidth_Wide'                     => esc_html__( 'Wide', 'pass-max' ),
            'siteMaxWidth_Extended'                 => esc_html__( 'Full Width (with padding)', 'pass-max' ),
            'siteMaxWidth_100pc'                    => esc_html__( 'Full Width (100%)', 'pass-max' ),
        );
    }
    
    function productive_global_get_section_block_spacing_options() {
        return array (
            'section_spacing_none'                  => esc_html__( 'No Spacing', 'pass-max' ),
            'section_spacing_default'               => esc_html__( 'Default', 'pass-max' ),
            'section_spacing_x_small'               => esc_html__( 'Extra Small', 'pass-max' ),
            'section_spacing_small'                 => esc_html__( 'Small', 'pass-max' ),
            'section_spacing_large'                 => esc_html__( 'Large', 'pass-max' ),
            'section_spacing_xlarge'                => esc_html__( 'Extra Large', 'pass-max' ),
        );
    }
    
    function productive_global_get_section_page_align_width() {
        return array (
            'align_page_none'                   => esc_html__( 'Default', 'pass-max' ),
            'alignwide'                         => esc_html__( 'Wide Page Width', 'pass-max' ),
            'alignfull'                         => esc_html__( 'Full Page Width', 'pass-max' ),
        );
    }
    
    function productive_global_get_shapeable_icon_shape_options() {
        return array (
            'shapeable-icon-default' => esc_html__( 'Default', 'pass-max' ),
            'shapeable-icon-sharped-corner' => esc_html__( 'Sharp Corner', 'pass-max' ),
            'shapeable-icon-rounded-corner' => esc_html__( 'Rounded Corner', 'pass-max' ),
            'shapeable-icon-ellipsed' => esc_html__( 'Ellipse', 'pass-max' ),
            'shapeable-icon-ovalled' => esc_html__( 'Oval', 'pass-max' ),
        );
    }
    
    function productive_global_get_shapeable_image_shape_options() {
        return array (
            'shapeable-image-default' => esc_html__( 'Default', 'pass-max' ),
            'shapeable-image-sharped-corner' => esc_html__( 'Sharp Corner', 'pass-max' ),
            'shapeable-image-rounded-corner' => esc_html__( 'Rounded Corner', 'pass-max' ),
            'shapeable-image-ellipsed' => esc_html__( 'Ellipse', 'pass-max' ),
            'shapeable-image-ovalled' => esc_html__( 'Oval', 'pass-max' ),
        );
    }
    
    function productive_global_get_grid_section_blocks_ratios( $include_full_width = false ) {
        $bloacks_ratio_array = array (
            'column_90_10' => esc_html__( '90 : 10', 'pass-max' ),
            'column_85_15' => esc_html__( '85 : 15', 'pass-max' ),
            'column_80_20' => esc_html__( '80 : 20', 'pass-max' ),
            'column_75_25' => esc_html__( '75 : 25', 'pass-max' ),
            'column_70_30' => esc_html__( '70 : 30', 'pass-max' ),
            'column_65_35' => esc_html__( '65 : 35', 'pass-max' ),
            'column_60_40' => esc_html__( '60 : 40', 'pass-max' ),
            'column_55_45' => esc_html__( '55 : 45', 'pass-max' ),
            'column_50_50' => esc_html__( '50 : 50', 'pass-max' ),
            'column_45_55' => esc_html__( '45 : 55', 'pass-max' ),
            'column_40_60' => esc_html__( '40 : 60', 'pass-max' ),
            'column_35_65' => esc_html__( '35 : 65', 'pass-max' ),
            'column_30_70' => esc_html__( '30 : 70', 'pass-max' ),
            'column_25_75' => esc_html__( '25 : 75', 'pass-max' ),
            'column_20_80' => esc_html__( '20 : 80', 'pass-max' ),
            'column_15_85' => esc_html__( '15 : 85', 'pass-max' ),
            'column_10_90' => esc_html__( '10 : 90', 'pass-max' ),
        );
        if( $include_full_width ) {
            $bloacks_ratio_array['column_100'] = esc_html__( 'Full Width', 'pass-max' );
        }
        return $bloacks_ratio_array;
    }

    function productive_global_get_popup_screen_positions() {
        return array (
            PRODUCTIVE_GLOBAL_POPUP_SCREEN_POSITION_TOP_RIGHT           => esc_html__( 'Top Right', 'pass-max' ),
            PRODUCTIVE_GLOBAL_POPUP_SCREEN_POSITION_TOP_LEFT            => esc_html__( 'Top Left', 'pass-max' ),
            PRODUCTIVE_GLOBAL_POPUP_SCREEN_POSITION_BOTTOM_RIGHT        => esc_html__( 'Bottom Right', 'pass-max' ),
            PRODUCTIVE_GLOBAL_POPUP_SCREEN_POSITION_BOTTOM_LEFT         => esc_html__( 'Bottom Left', 'pass-max' ),
            PRODUCTIVE_GLOBAL_POPUP_SCREEN_POSITION_CENTRAL             => esc_html__( 'Central', 'pass-max' ),
            PRODUCTIVE_GLOBAL_POPUP_SCREEN_POSITION_LEFT                => esc_html__( 'Left', 'pass-max' ),
            PRODUCTIVE_GLOBAL_POPUP_SCREEN_POSITION_RIGHT               => esc_html__( 'Right', 'pass-max' ),
        );
    }
    
    function productive_global_get_popup_transition_easings() {
        return array (
            '--ease' => esc_html__( 'Ease', 'pass-max' ),
            '--ease-in' => esc_html__( 'Ease In', 'pass-max' ),
            '--ease-out' => esc_html__( 'Ease Out', 'pass-max' ),
            '--ease-in-out' => esc_html__( 'Ease In/Out', 'pass-max' ),
            '--linear' => esc_html__( 'Linear', 'pass-max' ),
            '--cubic-bezier-1' => esc_html__( 'Cubic Bezier Style 1', 'pass-max' ),
            '--cubic-bezier-2' => esc_html__( 'Cubic Bezier Style 2', 'pass-max' ),
        );
    }

    function productive_global_get_popup_transition_directions() {
        return array (
            'slideFromTop' => esc_html__( 'Top', 'pass-max' ),
            'slideFromBottom' => esc_html__( 'Bottom', 'pass-max' ),
            'slideFromLeft' => esc_html__( 'Left', 'pass-max' ),
            'slideFromRight' => esc_html__( 'Right', 'pass-max' ),
        );
    }

    function productive_global_get_popup_transition_directions_customizers() {
        return array (
            'top' => esc_html__( 'Top', 'pass-max' ),
            'bottom' => esc_html__( 'Bottom', 'pass-max' ),
            'left' => esc_html__( 'Left', 'pass-max' ),
            'right' => esc_html__( 'Right', 'pass-max' ),
        );
    }

    function productive_global_get_blog_archives_style_options() {
        return array(
            'blog_archive_design_default' => esc_html__( 'Default Design', 'pass-max' ),
            'blog_archive_design_01' => esc_html__( 'Design 01', 'pass-max' ),
            'blog_archive_design_02' => esc_html__( 'Design 02', 'pass-max' ),
            'blog_archive_design_03' => esc_html__( 'Design 03', 'pass-max' ),
            'blog_archive_design_04' => esc_html__( 'Design 04', 'pass-max' ),
            'blog_archive_design_05' => esc_html__( 'Design 05', 'pass-max' ),
            'blog_archive_design_06' => esc_html__( 'Design 06', 'pass-max' ),
            'blog_archive_design_07' => esc_html__( 'Design 07', 'pass-max' ),
            'blog_archive_design_08' => esc_html__( 'Design 08', 'pass-max' ),
        );
    }

    function productive_global_get_woo_archives_style_options() {
        return array(
            'product_archive_design_01' => esc_html__( 'Design 01', 'pass-max' ),
            'product_archive_design_02' => esc_html__( 'Design 02', 'pass-max' ),
            'product_archive_design_03' => esc_html__( 'Design 03', 'pass-max' ),
            'product_archive_design_04' => esc_html__( 'Design 04', 'pass-max' ),
        );
    }

    function productive_global_get_popup_cols_per_row_values() {
        return array (
            1 => esc_html__( '1 - Default', 'pass-max' ),
            2 => esc_html__( '2', 'pass-max' ),
            3 => esc_html__( '3', 'pass-max' ),
            4 => esc_html__( '4', 'pass-max' ),
            5 => esc_html__( '5', 'pass-max' ),
            6 => esc_html__( '6', 'pass-max' ),
            7 => esc_html__( '7', 'pass-max' ),
            8 => esc_html__( '8', 'pass-max' ),
        );
    }
    
    function productive_global_get_slider_transition_styles() {
        return array (
            'slide' => esc_html__( 'Slide', 'pass-max' ),
            'fade' => esc_html__( 'Fade', 'pass-max' ),
            'flip' => esc_html__( 'Flip', 'pass-max' ),
            'cards' => esc_html__( 'Cards', 'pass-max' ),
        );
    }

    function productive_global_get_slider_transition_delays() {
        return array (
            '1000' => esc_html__( '1 second', 'pass-max' ),
            '2000' => esc_html__( '2 seconds', 'pass-max' ),
            '3000' => esc_html__( '3 seconds', 'pass-max' ),
            '4000' => esc_html__( '4 seconds', 'pass-max' ),
            '5000' => esc_html__( '5 seconds', 'pass-max' ),
            '7500' => esc_html__( '7.5 seconds', 'pass-max' ),
            '10000' => esc_html__( '10 seconds', 'pass-max' ),
            '15000' => esc_html__( '15 seconds', 'pass-max' ),
            '20000' => esc_html__( '20 seconds', 'pass-max' ),
        );
    }

    function productive_global_get_slider_transition_directions() {
        return array (
            'horizontal' => esc_html__( 'Horizontal', 'pass-max' ),
            //'vertical' => esc_html__( 'Vertical', 'pass-max' ),
        );
    }

    function productive_global_get_slider_user_controls() {
        return array (
            'none'                      => esc_html__( 'None', 'pass-max' ),
            'touch_swipe'               => esc_html__( 'Touch Swipe Only', 'pass-max' ),
            'dots'                      => esc_html__( 'Pagination Dots Only', 'pass-max' ),
            'arrows'                    => esc_html__( 'Prev/Next Arrows Only', 'pass-max' ),
            'dots_and_arrows'           => esc_html__( 'Dots &#38; Arrows', 'pass-max' ),
            'touch_swipe_and_arrows'    => esc_html__( 'Touch Swipe &#38; Arrows', 'pass-max' ),
            'touch_swipe_and_dots'      => esc_html__( 'Touch Swipe &#38; Dots', 'pass-max' ),
            'all'                       => esc_html__( 'Allow All Three Actions', 'pass-max' ),
        );
    }
    
    function productive_global_get_slides_per_view_values() {
        return array (
            '1' => esc_html__( '1 - Default', 'pass-max' ),
            '1.5' => esc_html__( '1.5', 'pass-max' ),
            '2' => esc_html__( '2', 'pass-max' ),
            '2.5' => esc_html__( '2.5', 'pass-max' ),
            '3' => esc_html__( '3', 'pass-max' ),
            '3.5' => esc_html__( '3.5', 'pass-max' ),
            '4' => esc_html__( '4', 'pass-max' ),
            '4.5' => esc_html__( '4.5', 'pass-max' ),
            '5' => esc_html__( '5', 'pass-max' ),
            '5.5' => esc_html__( '5.5', 'pass-max' ),
            '6' => esc_html__( '6', 'pass-max' ),
            '6.5' => esc_html__( '6.5', 'pass-max' ),
            '7' => esc_html__( '7', 'pass-max' ),
            '7.5' => esc_html__( '7.5', 'pass-max' ),
            '8' => esc_html__( '8', 'pass-max' ),
        );
    }
    
    function productive_global_get_popup_when_modal_goes_fullscreens() {
        return array (
            'disabled'          => esc_html__( 'Disable', 'pass-max' ),
            'mobile_portrait'   => esc_html__( 'Mobile (portrait)', 'pass-max' ),
            'mobile_landscpe'   => esc_html__( 'Mobile (Landscape)', 'pass-max' ),
            'tablet_portrait'   => esc_html__( 'Tablet (portrait)', 'pass-max' ),
            'tablet_landscpe'   => esc_html__( 'Tablet (Landscape)', 'pass-max' ),
            'desktop'           => esc_html__( 'Desktop', 'pass-max' ),
            'widescreen'        => esc_html__( 'Widescreen', 'pass-max' ),
        );
    }
    
    function productive_global_get_popup_bg_opacity_options() {
        return array (
            '0.1' => esc_html__( '0.1 (transparent)', 'pass-max' ),
            '0.2' => esc_html__( '0.2', 'pass-max' ),
            '0.3' => esc_html__( '0.3', 'pass-max' ),
            '0.4' => esc_html__( '0.4', 'pass-max' ),
            '0.5' => esc_html__( '0.5', 'pass-max' ),
            '0.6' => esc_html__( '0.6', 'pass-max' ),
            '0.7' => esc_html__( '0.7', 'pass-max' ),
            '0.8' => esc_html__( '0.8', 'pass-max' ),
            '0.9' => esc_html__( '0.9', 'pass-max' ),
            '1.0' => esc_html__( '1.0 (opaque)', 'pass-max' ),
        );
    }
    
    function productive_global_get_heading_tag_css_classes() {
        return array (
            'h1' => esc_html__( 'h1 css style', 'pass-max' ),
            'h2' => esc_html__( 'h2 css style', 'pass-max' ),
            'h3' => esc_html__( 'h3 css style', 'pass-max' ),
            'h4' => esc_html__( 'h4 css style', 'pass-max' ),
            'h5' => esc_html__( 'h5 css style', 'pass-max' ),
            'h6' => esc_html__( 'h6 css style', 'pass-max' ),
        );
    }

    function productive_global_get_content_html_tags() {
        return array (
            'h1' => esc_html__( 'h1 html tag', 'pass-max' ),
            'h2' => esc_html__( 'h2 html tag', 'pass-max' ),
            'h3' => esc_html__( 'h3 html tag', 'pass-max' ),
            'h4' => esc_html__( 'h4 html tag', 'pass-max' ),
            'h5' => esc_html__( 'h5 html tag', 'pass-max' ),
            'h6' => esc_html__( 'h6 html tag', 'pass-max' ),
            'div' => esc_html__( 'div html tag', 'pass-max' ),
            'span' => esc_html__( 'span html tag', 'pass-max' ),
        );
    }

    function productive_global_is_valid_html_tag_for_title( $section_title_html_tag ) {
        return $section_title_html_tag == 'h1' || $section_title_html_tag == 'h2' || 
            $section_title_html_tag == 'h3' || $section_title_html_tag == 'h4' ||
            $section_title_html_tag == 'h5' || $section_title_html_tag == 'h6' ||
            $section_title_html_tag == 'div' || $section_title_html_tag == 'span';
    }
    
    function productive_global_get_category_query_order_by( $query = 'title_a_z' ) {
        $query_vars = array();
        switch ($query) {
            case 'slug_a_z':
                $query_vars['orderby'] = 'slug';
                $query_vars['order'] = 'ASC';
                break;
            case 'slug_z_a':
                $query_vars['orderby'] = 'slug';
                $query_vars['order'] = 'DESC';
                break;
            case 'parent_a_z':
                $query_vars['orderby'] = 'parent';
                $query_vars['order'] = 'ASC';
                break;
            case 'parent_z_a':
                $query_vars['orderby'] = 'parent';
                $query_vars['order'] = 'DESC';
                break;
            case 'title_a_z':
                $query_vars['orderby'] = 'name';
                $query_vars['order'] = 'ASC';
                break;
            case 'title_z_a':
                $query_vars['orderby'] = 'name';
                $query_vars['order'] = 'DESC';
                break;
            default:
                $query_vars['orderby'] = 'name';
                $query_vars['order'] = 'ASC';
                break;
        }
        return $query_vars;
    }
    
    function productive_global_get_cpt_query_order_by( $query = 'newest' ) {
        $query_vars = array();
        switch ($query) {
            case 'menu_order':
                $query_vars['orderby'] = 'menu_order';
                $query_vars['order'] = 'ASC';
                break;
            case 'title_a_z':
                $query_vars['orderby'] = 'post_title';
                $query_vars['order'] = 'ASC';
                break;
            case 'title_z_a':
                $query_vars['orderby'] = 'post_title';
                $query_vars['order'] = 'DESC';
                break;
            case 'oldest':
                $query_vars['orderby'] = 'date';
                $query_vars['order'] = 'ASC';
                break;
            case 'popular_most_commented':
                $query_vars['orderby'] = 'comment_count';
                $query_vars['order'] = 'DESC';
                break;
            default:
                $query_vars['orderby'] = 'date';
                $query_vars['order'] = 'DESC';
                break;
        }
        return $query_vars;
    }

    function productive_global_get_comment_query_order_by( $query = 'newest' ) {
        $query_vars = array();
        switch ($query) {
            case 'title_a_z':
                $query_vars['orderby'] = 'comment_content';
                $query_vars['order'] = 'ASC';
                break;
            case 'title_z_a':
                $query_vars['orderby'] = 'comment_content';
                $query_vars['order'] = 'DESC';
                break;
            case 'oldest':
                $query_vars['orderby'] = 'date';
                $query_vars['order'] = 'ASC';
                break;
            default:
                $query_vars['orderby'] = 'date';
                $query_vars['order'] = 'DESC';
                break;
        }
        return $query_vars;
    }

    function productive_global_get_cpt_terms_using_slug($taxonomy, $include_all_option_first = true, $oder_by = 'name', $order = 'ASC' ) {
        $element_terms = array();
        $args = array(
            'taxonomy' => $taxonomy,
            'hide_empty' => false,
            'orderby' => $oder_by,
            'order' => $order,
            'suppress_filters' => 0,
        );

        $terms = get_terms($args);
        if( $include_all_option_first ) {
            $element_terms[''] = esc_html__('All', 'pass-max');
        }
        foreach ( $terms as $term ) {
            if( null != $term && !empty($term) ) {
                $slug = $term->slug;
                $element_terms[$slug] = $term->name;
            }
        }

        return $element_terms;
    }

    function productive_global_get_cpt_terms($taxonomy, $include_all_option_first = true, $oder_by = 'name', $order = 'ASC' ) {
        $element_terms = array();
        $args = array(
            'taxonomy' => $taxonomy,
            'hide_empty' => false,
            'orderby' => $oder_by,
            'order' => $order,
            'suppress_filters' => 0,
        );

        $terms = get_terms($args);
        if( $include_all_option_first ) {
            $element_terms[''] = esc_html__('All', 'pass-max');
        }
        foreach ( $terms as $term ) {
            if( null != $term && !empty($term) ) {
                $term_id = '' . $term->term_id . ' ';
                $element_terms[$term_id] = $term->name;
            }
        }

        return $element_terms;
    }

    function productive_global_get_cpt_terms_multi($taxonomy, $include_all_option_first = true, $oder_by = 'slug', $order = 'ASC' ) {
        $element_terms = array();
        $terms = productive_global_get_cpt_terms( $taxonomy, $include_all_option_first, $oder_by, $order );
        foreach ( $terms as $slug =>  $term ) {
            $integrated_slug = $slug . '||' . $term;
            $element_terms[$integrated_slug] = $term;
        }
        return $element_terms;
    }

    function productive_global_get_select_options_for_cpt_query_order_by() {
        $order_terms = array(
            'newest' => esc_html__( 'Newest First', 'pass-max' ),
            'oldest' => esc_html__( 'Oldest First', 'pass-max' ),
            'menu_order' => esc_html__( 'My Order', 'pass-max' ),
            'title_a_z' => esc_html__( 'Title (a-z)', 'pass-max' ),
            'title_z_a' => esc_html__( 'Title (z-a)', 'pass-max' ),
        );
        return $order_terms;
    }

    function productive_global_get_post_latest_post( $post_type, $limit = 1 ) {
        $args = array(
            'post_type' => $post_type,
            'orderby' => 'date',
            'order' => 'DESC',
            'post_status' => 'publish',
            'posts_per_page' => $limit
        );
        return new WP_Query( $args );
    }

    function productive_global_get_post_query_first_object( $post_query_object ) {
        return $post_query_object->found_posts ? $post_query_object->posts[0] : false;
    }

    function productive_global_get_post_by_post_id( $post_id, $post_type = '' ) {
        if( !empty( $post_type ) ) {
            $args = array(
                'post_type' => $post_type,
                'p' => $post_id,
                'suppress_filters' => 0,
            );
        } else {
            $args = array(
                'p' => $post_id,
                'suppress_filters' => 0,
            );
        }
        return new WP_Query( $args );
    }

    function productive_global_get_post_by_post_name( $post_name, $post_type = '' ) {
        if( !empty( $post_type ) ) {
            $args = array(
                'post_type' => $post_type,
                'name' => $post_name,
                'suppress_filters' => 0,
            );
        } else {
            $args = array(
                'name' => $post_name,
                'suppress_filters' => 0,
            );
        }
        return new WP_Query( $args );
    }
    
    function productive_global_get_post_slug_from_id( $post_id ) {
        $post_slug = '';
        if( $post_id ) {
            $post = get_post( $post_id );
            $post_slug = $post->post_name;
        }
        return trim( $post_slug );
    }
    
    function productive_global_get_button_radius_css( $shape = 'sharp_corners' ) {
        $css_radius = '';
        switch ($shape) {
            case 'round_corners':
                $css_radius = '5px';
                break;
            case 'ellipse':
                $css_radius = '25px';
                break;
            default:
                $css_radius = '0';
                break;
        }
        return $css_radius;
    }

    function productive_global_get_button_radius_shapes() {
        return array (
            'sharp_corners' => esc_html__( 'Sharp Corners', 'pass-max' ),
            'round_corners' => esc_html__( 'Round Corners', 'pass-max' ),
            'ellipse' => esc_html__( 'Ellipse', 'pass-max' ),
        );
    }
    
    function productive_global_get_slider_pagination_control_shapes($show_none = 0) {
        $control_shapes = array (
            'slider_pagination_shape_circle'        => esc_html__( 'Circle', 'pass-max' ),
            'slider_pagination_shape_square'        => esc_html__( 'Square', 'pass-max' ),
            'slider_pagination_shape_rectangle'     => esc_html__( 'Rectangle', 'pass-max' ),
            'slider_pagination_shape_hybrid'        => esc_html__( 'Hybrid', 'pass-max' ),
        );
        if( $show_none ) {
            $control_shapes['none-pagination'] = esc_html__( 'None (hide pagination controls)', 'pass-max' );
        }
        return $control_shapes;
    }
    
    function productive_global_get_slider_nav_control_shapes($show_none = 0) {
        $control_shapes = array (
            'slider_nav_shape_circle' => esc_html__( 'Circle', 'pass-max' ),
            'slider_nav_shape_square' => esc_html__( 'Square', 'pass-max' ),
            'slider_nav_shape_none' => esc_html__( 'Transparent background', 'pass-max' ),
        );
        if( $show_none ) {
            $control_shapes['none-arrow'] = esc_html__( 'None (hide nav controls)', 'pass-max' );
        }
        return $control_shapes;
    }

    function productive_global_render_form_response_info() {
        ?>
        <div class="productiveminds_form_submission_info_box_container noned">
            <div class="productiveminds_form_submission_info_box">
                <?php // Success or error message ?>
            </div>
        </div>
    <?php
    }

    function productive_global_render_form_response_info_admin($css = '') {
        ?>
        <div class="productiveminds_admin_notification_container noned <?php echo esc_attr( $css ); ?>">
            <div class="productiveminds_admin_info_box bolded fs-l">
                <?php // Success or error message ?>
            </div>
        </div>
    <?php
    }

    function productive_global_get_site_logo_url() {
        $image = '';
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        if ( $custom_logo_id ) {
            $image = wp_get_attachment_image_url( $custom_logo_id, 'full' );
        }
        return $image;
    }
    
    function productive_global_featured_media_types() {
        $media_types = array(
            'image' => esc_html__('Image', 'pass-max'),
        );
        if( productive_global_is_productive_style_active_extra() ) {
            $media_types['video'] = esc_html__('Video', 'pass-max');
        } else {
            $media_types['video'] = esc_html__('Video (Pro feature)', 'pass-max');
        }
        return $media_types;
    }
    
    function productive_global_wp_get_registered_image_subsizes() {
        $list_of_all_image_sizes = array();
        $wp_get_registered_image_subsizes = wp_get_registered_image_subsizes();
        if( null != $wp_get_registered_image_subsizes && !empty($wp_get_registered_image_subsizes) ) {
            foreach ( $wp_get_registered_image_subsizes as $key => $wp_get_registered_image_subsize) {
                if( null != $key && !empty($key) ) {
                    $title = productive_global_wp_get_registered_image_subsizes_title( $key, $wp_get_registered_image_subsize );
                    $list_of_all_image_sizes[$key] = $title;
                } else {
                    continue;
                }
            }
        }
        $list_of_all_image_sizes['full'] = esc_html__('Full', 'pass-max');
        return $list_of_all_image_sizes;
    }
    
    function productive_global_wp_get_registered_image_subsizes_title( $key, $wp_get_registered_image_subsize ) {
        $title = '';
        if( null != $wp_get_registered_image_subsize && !empty($wp_get_registered_image_subsize) ) {
            $pre_title = str_replace( '_', ' ', $key);
            $title = ucwords($pre_title) . ' - ' . $wp_get_registered_image_subsize['width'] . ' x ' . $wp_get_registered_image_subsize['height'];
        } else {
            $title = ucfirst($key);
        }
        return $title;
    }
    
    function productive_global_add_social_media_icons_style_options($show_custom_option = 0) {
        $options = array (
            'brand_color_around_white_icon'         => esc_html__( 'Official background with white icon', 'pass-max' ),
            'themed_color_around_white_icon'        => esc_html__( 'Themed background and icon', 'pass-max' ),
            'selected_color_as_icon_color'          => esc_html__( 'Selected colors (in admin)', 'pass-max' ),
            'brand_color_as_icon_color'             => esc_html__( 'Official icon colour', 'pass-max' ),
        );
        if( $show_custom_option ) {
            $options['selected_color_custom'] = esc_html__( 'Custom', 'pass-max' );
        }
        return $options;
    }

    function productive_global_get_items_separator_value( $separator = 'slash' ) {
        $separator_html = '';
        switch ( $separator ) {
            case 'angled':
                $separator_html = '>';
                break;
            case 'pipe':
                $separator_html = '|';
                break;
            case 'hyphen':
                $separator_html = '-';
                break;
            case 'chevron':
                $separator_html = '>>';
                break;
            case 'bullet':
                $separator_html = '&bull;';
                break;
            case 'comma':
                $separator_html = ',';
                break;
            case 'slash':
                $separator_html = '/';
                break;
            default:
                $separator_html = '';
                break;
        }
        return $separator_html;
    }

    function productive_global_render_items_separator( $separator ) {
        $productive_items_separator = productive_global_get_items_separator_value( $separator );
        ?>
            <span class="productive_items_separator"><?php echo esc_html( $productive_items_separator ); ?></span>
        <?php
    }

    function productive_global_get_items_separator( $separator ) {
        $productive_items_separator = productive_global_get_items_separator_value( $separator );
        return '<span class="productive_items_separator">' . $productive_items_separator . '</span>';
    }

    function productive_global_is_compatible_post_type( $selected_post_type ) {
        $is_compatible_post_type = false;
        switch ( $selected_post_type ) {

            case 'post':
                $is_compatible_post_type = get_post_type() == 'post';
                break;

            case 'page':
                $is_compatible_post_type = get_post_type() == 'page';
                break;

            case 'product':
                $is_compatible_post_type = get_post_type() == 'product';
                break;

            default:
                break;
        }
        return $is_compatible_post_type;
    }
    
    function productive_global_get_current_supported_post_type() {
        $post_type = 'post';
        if( ( null != get_post_type() && !empty(get_post_type()) ) &&
               ( 'post' == get_post_type() || 'page' == get_post_type() || 'product' == get_post_type() )
            ) {
            $post_type = get_post_type();
        }
        return $post_type;
    }
    
    function productive_global_get_post_element_supported_post_types( $add_product = true ) {
        $post_types = array(
            'post' => esc_html__('Post', 'pass-max'),
            'page' => esc_html__('Page', 'pass-max'),
        );
        if( $add_product ) {
            $post_types['product'] = esc_html__('Product', 'pass-max');
        }
         return $post_types;
    }
    
    function productive_global_get_post_types( $operator = 'and', $public = true, $show_in_rest = true ) {
        $args = array(
            'can_export' => true, 
            'public' => $public, 
            'show_in_rest' => $show_in_rest, 
        );
        $post_types_data = get_post_types( $args, 'object', $operator );
        
        $post_types = array();
        foreach ( $post_types_data  as $post_type ) {
            $post_types[$post_type->name] = $post_type->labels->singular_name;
         }
         return $post_types;
    }
    
    function productive_global_get_website_domain_name_only( $website ) {
        $domain = str_replace( 'https://', '', $website );
        $domain = str_replace( 'http://', '', $domain );
        $domain = str_replace( 'www.', '', $domain );
        return $domain;
    }
    
    function productive_global_render_std_social_media_share( $share_on = '') {

        $share_url = esc_url( get_permalink() );
        $share_text = get_the_title();
        $share_media = '';
        $get_post_thumbnail_id = get_post_thumbnail_id();
        if( $get_post_thumbnail_id ) {
            $share_media = wp_get_attachment_url( $get_post_thumbnail_id, 'full' );
        }

        $misc = array();
        $misc['section_show_social_media_share_on_copy']                    = $share_on;

        productive_global_render_social_media_share_icons( $misc, $share_url, $share_media, $share_text );
    }

    function productive_global_flip_array_keys_and_values( $array_object ) {
        $fliped_array_object = array();
        foreach ( $array_object as $key => $value) {
            $fliped_array_object[$value] = $key;
        }
        return $fliped_array_object;
    }
    
    function productive_global_render_section_header( $header_misc = array() ) {
        $section_title = '';
        if( isset( $header_misc['section_title'] )) {
            $section_title = $header_misc['section_title'];
        }
        $section_title_suffix = '';
        if( isset( $header_misc['section_title_suffix'] )) {
            $section_title_suffix = $header_misc['section_title_suffix'];
        }
        $section_title_html_tag = 'h2';
        if( isset( $header_misc['section_title_html_tag'] )) {
            $section_title_html_tag = $header_misc['section_title_html_tag'];
        }
        $section_heading_auxiliary = '';
        if( isset( $header_misc['section_heading_auxiliary'] )) {
            $section_heading_auxiliary = $header_misc['section_heading_auxiliary'];
        }
        $section_heading_auxiliary_position = 'bottom';
        if( isset( $header_misc['section_heading_auxiliary_position'] )) {
            $section_heading_auxiliary_position = $header_misc['section_heading_auxiliary_position'];
        }
        $section_intro = '';
        if( isset( $header_misc['section_intro'] )) {
            $section_intro = $header_misc['section_intro'];
        }
        $section_header_alignment = '';
        if( isset( $header_misc['section_header_alignment'] )) {
            $section_header_alignment = $header_misc['section_header_alignment'];
        }
    ?>
        <?php if ( !empty( $section_title ) || !empty( $section_heading_auxiliary ) || !empty( $section_intro ) ) { ?>
        <div class="productiveminds_section-header-container productiveminds-alignable-container">
            <div class="productiveminds_section-header-container_uno productiveminds-alignable-container_uno <?php echo esc_attr( $section_header_alignment ); ?>">
                
                <?php if ( !empty( $section_heading_auxiliary ) && 'top' == $section_heading_auxiliary_position ) {
                    productive_global_render_section_header_auxilliary( $section_heading_auxiliary );
                } ?>
                
                <?php if ( !empty( $section_title ) ) { ?>
                
                    <?php 
                    if ( productive_global_is_valid_html_tag_for_title( $section_title_html_tag ) ) {
                        echo '<' . esc_attr( $section_title_html_tag ) . ' class="section-title">' . 
                                '<span class="section-title-main">' . wp_kses_post( $section_title ) . '</span>' . 
                                wp_kses_post( productive_global_render_section_header_title_suffix( $section_title_suffix ) ) .
                            '</' . esc_attr( $section_title_html_tag ) . '>';
                    } else { 
                    ?>
                        <h2 class="section-title">
                            <span class="section-title-main"><?php echo wp_kses_post( $section_title ) ?></span><?php echo wp_kses_post( productive_global_render_section_header_title_suffix( $section_title_suffix ) ); ?>
                        </h2>
                    <?php } ?>
                <?php } ?>
                <?php if ( !empty( $section_intro ) ) { ?>
                    <div class="section-intro">
                        <?php echo wp_kses_post( $section_intro ) ?>
                    </div>
                <?php } ?>
                
                <?php if ( !empty( $section_heading_auxiliary ) && 'bottom' == $section_heading_auxiliary_position ) {
                    productive_global_render_section_header_auxilliary( $section_heading_auxiliary );
                } ?>
                
            </div>
        </div>
        <?php } ?>
    <?php 
    }
    
    function productive_global_render_section_header_auxilliary( $section_heading_auxiliary ) {
        ?>
            <div class="section-heading-auxiliary-container productiveminds-alignable-container width-autoed align-content-center align-items-center ga-zero">
                <div class="section-heading-auxiliary">
                    <?php echo wp_kses_post( $section_heading_auxiliary ) ?>
                </div>
            </div>
        <?php
    }
    
    function productive_global_render_section_header_title_suffix( $section_title_suffix ) {
        if( !empty( $section_title_suffix ) ) {
            return '<span class="section-title-suffix">' . $section_title_suffix . '</span>';
        }
        return '';
    }
    
    function productive_global_render_read_more_buttons( $misc ) {
        
        $section_show_learn_more_btn_1                          = 0;        
        if( isset($misc['section_show_learn_more_btn_1']) ) {
            $section_show_learn_more_btn_1 = intval( $misc['section_show_learn_more_btn_1'] );
        }
        $section_show_learn_more_btn_2                          = 0;        
        if( isset($misc['section_show_learn_more_btn_2']) ) {
            $section_show_learn_more_btn_2 = intval( $misc['section_show_learn_more_btn_2'] );
        }
        
        if( !$section_show_learn_more_btn_1 && !$section_show_learn_more_btn_2 ) {
            return;
        }
        
        $section_show_learn_more_btn_1_url                      = array();
        if( isset($misc['section_show_learn_more_btn_1_url']) ) {
            $section_show_learn_more_btn_1_url = $misc['section_show_learn_more_btn_1_url'];
        }
        $section_show_learn_more_btn_1_copy                     = $misc['section_show_learn_more_btn_1_copy'];
        if( isset($misc['section_show_learn_more_btn_1_copy']) ) {
            $section_show_learn_more_btn_1_copy = $misc['section_show_learn_more_btn_1_copy'];
        }
        $section_show_learn_more_btn_1_hover_animation          = '';
        if( isset($misc['section_show_learn_more_btn_1_hover_animation']) ) {
            $section_show_learn_more_btn_1_hover_animation = $misc['section_show_learn_more_btn_1_hover_animation'];
        }
        
        $section_show_learn_more_btn_2_url                      = array();
        if( isset($misc['section_show_learn_more_btn_2_url']) ) {
            $section_show_learn_more_btn_2_url = $misc['section_show_learn_more_btn_2_url'];
        }
        $section_show_learn_more_btn_2_copy                     = $misc['section_show_learn_more_btn_2_copy'];
        if( isset($misc['section_show_learn_more_btn_2_copy']) ) {
            $section_show_learn_more_btn_2_copy = $misc['section_show_learn_more_btn_2_copy'];
        }
        $section_show_learn_more_btn_2_hover_animation          = '';
        if( isset($misc['section_show_learn_more_btn_2_hover_animation']) ) {
            $section_show_learn_more_btn_2_hover_animation = $misc['section_show_learn_more_btn_2_hover_animation'];
        }
        
        $section_show_learn_more_btn_1_url_url = '';
        if( isset( $section_show_learn_more_btn_1_url['url'] )) {
            $section_show_learn_more_btn_1_url_url                          = $section_show_learn_more_btn_1_url['url'];
        }
        $section_show_learn_more_btn_1_url_is_external = false;
        if( isset( $section_show_learn_more_btn_1_url['is_external'] )) {
            $section_show_learn_more_btn_1_url_is_external                  = $section_show_learn_more_btn_1_url['is_external'];
        }
        $section_show_learn_more_btn_1_url_nofollow = false;
        if( isset( $section_show_learn_more_btn_1_url['nofollow'] )) {
            $section_show_learn_more_btn_1_url_nofollow                     = $section_show_learn_more_btn_1_url['nofollow'];
        }
        $section_show_learn_more_btn_1_url_custom_attributes = '';
        if( isset( $section_show_learn_more_btn_1_url['custom_attributes'] )) {
            $section_show_learn_more_btn_1_url_custom_attributes            = $section_show_learn_more_btn_1_url['custom_attributes'];
        }
        $section_show_learn_more_btn_1_attributes = '';
        if( !empty($section_show_learn_more_btn_1_url_custom_attributes) ) {
            $section_show_learn_more_btn_1_attributes = productive_global_get_el_url_custom_attributes_values( $section_show_learn_more_btn_1_url_custom_attributes );
        }
        $section_show_learn_more_btn_1_target = '_parent'; 
        if( productive_global_get_is_valid_value( $section_show_learn_more_btn_1_url_is_external ) ) {
            $section_show_learn_more_btn_1_target = '_blank';
        }
        $section_show_learn_more_btn_1_nofollow = ''; 
        if( productive_global_get_is_valid_value( $section_show_learn_more_btn_1_url_nofollow ) ) {
            $section_show_learn_more_btn_1_nofollow = 'nofollow';
        }
        
        $section_show_learn_more_btn_2_url_url = '';
        if( isset( $section_show_learn_more_btn_2_url['url'] )) {
            $section_show_learn_more_btn_2_url_url                          = $section_show_learn_more_btn_2_url['url'];
        }
        $section_show_learn_more_btn_2_url_is_external = false;
        if( isset( $section_show_learn_more_btn_2_url['is_external'] )) {
            $section_show_learn_more_btn_2_url_is_external                  = $section_show_learn_more_btn_2_url['is_external'];
        }
        $section_show_learn_more_btn_2_url_nofollow = false;
        if( isset( $section_show_learn_more_btn_2_url['nofollow'] )) {
            $section_show_learn_more_btn_2_url_nofollow                     = $section_show_learn_more_btn_2_url['nofollow'];
        }
        $section_show_learn_more_btn_2_url_custom_attributes = false;
        if( isset( $section_show_learn_more_btn_2_url['custom_attributes'] )) {
            $section_show_learn_more_btn_2_url_custom_attributes            = $section_show_learn_more_btn_2_url['custom_attributes'];
        }
        $section_show_learn_more_btn_2_attributes = '';
        if( !empty($section_show_learn_more_btn_2_url_custom_attributes) ) {
            $section_show_learn_more_btn_2_attributes = productive_global_get_el_url_custom_attributes_values( $section_show_learn_more_btn_2_url_custom_attributes );
        }
        $section_show_learn_more_btn_2_target = '_parent'; 
        if( productive_global_get_is_valid_value( $section_show_learn_more_btn_2_url_is_external ) ) {
            $section_show_learn_more_btn_2_target = '_blank';
        }
        $section_show_learn_more_btn_2_nofollow = ''; 
        if( productive_global_get_is_valid_value( $section_show_learn_more_btn_2_url_nofollow ) ) {
            $section_show_learn_more_btn_2_nofollow = 'nofollow';
        }

        $section_read_more_btns_alignment = '';

    ?>
        <div class="productiveminds_section-read-more-btns-container productiveminds-alignable-container">
            <div class="productiveminds_section-read-more-btns-container_uno productiveminds-alignable-container_uno productiveminds-alignable-container 
                 align-items-center align-content-center <?php echo esc_attr( $section_read_more_btns_alignment ); ?> flexed row-gap-10px column-gap-30px">
                <?php if ( $section_show_learn_more_btn_1 &&
                        (!empty( $section_show_learn_more_btn_1_url_url ) && !empty( $section_show_learn_more_btn_1_copy )) ) { ?>
                    <div class="single-item-button-container single-item-button-1">
                        <a target="<?php echo esc_attr($section_show_learn_more_btn_1_target); ?>" 
                           rel="<?php echo esc_attr($section_show_learn_more_btn_1_nofollow); ?>" 
                           <?php echo esc_attr( $section_show_learn_more_btn_1_attributes ); ?> 
                           class="single-item-button <?php echo esc_attr( $section_show_learn_more_btn_1_hover_animation ); ?>" 
                           aria-label="<?php echo esc_attr('Read more ', 'pass-max') . wp_kses_post($section_show_learn_more_btn_1_copy); ?>" 
                           href="<?php echo esc_url($section_show_learn_more_btn_1_url_url); ?>">
                                <?php echo wp_kses_post($section_show_learn_more_btn_1_copy); ?>
                                <span class="screen-reader-text"><?php echo esc_html__('Read more ', 'pass-max') . wp_kses_post($section_show_learn_more_btn_1_copy); ?></span>
                        </a>
                    </div>
                <?php } ?>
                <?php if ( $section_show_learn_more_btn_2 &&
                        (!empty( $section_show_learn_more_btn_2_url_url ) && !empty( $section_show_learn_more_btn_2_copy )) ) { ?>
                    <div class="single-item-button-container single-item-button-2">
                        <a target="<?php echo esc_attr($section_show_learn_more_btn_2_target); ?>" 
                           rel="<?php echo esc_attr($section_show_learn_more_btn_2_nofollow); ?>" 
                           <?php echo esc_attr( $section_show_learn_more_btn_2_attributes ); ?> 
                           class="single-item-button <?php echo esc_attr( $section_show_learn_more_btn_2_hover_animation ); ?>" 
                           aria-label="<?php echo esc_attr('Read more ', 'pass-max') . wp_kses_post($section_show_learn_more_btn_2_copy); ?>" 
                           href="<?php echo esc_url($section_show_learn_more_btn_2_url_url); ?>">
                                <?php echo wp_kses_post($section_show_learn_more_btn_2_copy); ?>
                                <span class="screen-reader-text"><?php echo esc_html__('Read more ', 'pass-max') . wp_kses_post($section_show_learn_more_btn_2_copy); ?></span>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    <?php
    }

    function productive_global_get_el_url_custom_attributes_values( $custom_attributes ) {
        $attribute_values = '';
        $custom_attribute_values = explode( ',', trim($custom_attributes) );
        foreach ( $custom_attribute_values as $key => $custom_attribute_value ) {
            $custom_attribute_pairs = explode( '|', trim($custom_attribute_value) );
            if( isset($custom_attribute_pairs[0]) && isset($custom_attribute_pairs[1]) ) {
                $attribute_values .= ' ' . $custom_attribute_pairs[0] . '=' . $custom_attribute_pairs[1] . '';
            }
        }
        return $attribute_values;
    }
    
    function productive_global_render_toggle_section_button( $icon_size = 16, $activate_open_icon = 'angle-down', $activate_close_icon = 'angle-up', $close_icon_size = 'std' ) {
        $productive_global_open_state_icon_args = array(
            'i'=> $activate_open_icon,
            'w'=>$icon_size, 
            'h'=>$icon_size, 
            'css'=> '',
        );
        $productive_activate_close_icon_args = array(
            'i'=> $activate_close_icon,
            'w'=>$icon_size, 
            'h'=>$icon_size, 
            'css'=> '',
        );
        ?>
            <span class="close-productive-display-button-icon">
                <span class="the_close_icon <?php echo esc_attr($close_icon_size); ?>">
                    <span class="activate_open_icon noned">
                        <?php echo wp_kses( productiveminds_get_svg_icon( $productive_global_open_state_icon_args ), 'wp_kses_allowed_html' ); ?>
                    </span>
                    <span class="activate_close_icon noned">
                        <?php echo wp_kses( productiveminds_get_svg_icon( $productive_activate_close_icon_args ), 'wp_kses_allowed_html' ); ?>
                    </span>
                </span>
            </span>
        <?php
    }
    
    function productive_global_render_close_section_button( $icon_size = 16, $use_icon = false, $icon_color_css = 'productive_global_icon_general_color', $transparent_bg = '' ) {
        $productive_global_close_icon_add_to_args = array(
            'i'=> 'close',
            'w'=>$icon_size, 
            'h'=>$icon_size, 
            'css'=> $icon_color_css,
        );
        if( !$use_icon ) {
    ?>
        <span class="close-productive-display-button-icon">
            <span class="the_close_icon textify <?php echo esc_attr($transparent_bg); ?>">X</span>
            <span class="screen-reader-text"><?php echo esc_html__('Close Overlay', 'pass-max'); ?></span>
        </span>
    <?php } else { ?>
        <span class="close-productive-display-button-icon">
            <span class="the_close_icon <?php echo esc_attr($transparent_bg); ?>">
                <?php echo wp_kses( productiveminds_get_svg_icon( $productive_global_close_icon_add_to_args ), 'wp_kses_allowed_html' ); ?>
            </span>
            
        </span>
    <?php }
    }

    function productive_global_render_no_content_found( $content_type, $empty_content_message, $noned = '' ) {
    ?>
        <div class="productiveminds_section_no_content_found <?php echo esc_attr( $content_type ); ?> <?php echo esc_attr( $noned ); ?>"><?php echo esc_html( $empty_content_message ); ?></div>
    <?php
    }
    
    function productive_global_render_no_content_found_data( $content_type, $empty_content_message, $noned = '' ) {
        return '<div class="productiveminds_section_no_content_found ' . $content_type . ' ' . $noned . '">' . $empty_content_message . '.</div>';
    }
    
    function productive_global_render_close_element_button_relative( $icon_size = 16, $use_icon = false, $icon_color_css = 'productive_global_icon_general_color', $font_size = 10, $font_css = 'red ', $transparent_bg = '' ) {
        $productive_global_close_icon_add_to_args = array(
            'i'=> 'close',
            'w'=>$icon_size, 
            'h'=>$icon_size, 
            'css'=> $icon_color_css,
        );
        if( !$use_icon ) { 
    ?>
        <span class="close-productive-display-button-icon on_the_spot">
            <span class="the_close_icon textify <?php echo esc_attr($transparent_bg); ?> <?php echo esc_attr($font_css); ?>" style="font-size: <?php echo esc_attr($font_size); ?>px;">X</span>
            <span class="screen-reader-text"><?php echo esc_html__('Close', 'pass-max'); ?></span>
        </span>
    <?php } else { ?>
        <span class="close-productive-display-button-icon on_the_spot">
            <span class="the_close_icon <?php echo esc_attr($transparent_bg); ?>">
                <?php echo wp_kses( productiveminds_get_svg_icon( $productive_global_close_icon_add_to_args ), 'wp_kses_allowed_html' ); ?>
            </span>
        </span>
    <?php }
    }
    function productive_global_get_close_element_button_relative( $icon_size = 16, $use_icon = false, $icon_color_css = 'productive_global_icon_general_color', $font_size = 10, $font_css = 'red ', $transparent_bg = '' ) {
        $close_element_button = '';
        if( !$use_icon ) {
            $close_element_button .= '<span class="close-productive-display-button-icon on_the_spot">';
            $close_element_button .= '<span class="the_close_icon textify ' . $transparent_bg . ' ' . $font_css . '" style="font-size: ' . esc_attr($font_size) . 'px;">X</span>';
            $close_element_button .= '<span class="screen-reader-text">' . esc_html__('Close', 'pass-max') . '</span>';
            $close_element_button .= '</span>';
        } else {
            $close_element_button .= '<span class="close-productive-display-button-icon on_the_spot">';
            $close_element_button .= '<span class="the_close_icon ' . $transparent_bg . '">';
            $close_element_button .= '<svg class="width="' . $icon_size . '" height="' . $icon_size . '" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path class="productive-icons plugin-general-icons ' . $icon_color_css . '" d="M1490 1322q0 40-28 68l-136 136q-28 28-68 28t-68-28l-294-294-294 294q-28 28-68 28t-68-28l-136-136q-28-28-28-68t28-68l294-294-294-294q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 294 294-294q28-28 68-28t68 28l136 136q28 28 28 68t-28 68l-294 294 294 294q28 28 28 68z"/></svg>';
            $close_element_button .= '</span>';        
            $close_element_button .= '</span>';
        }
        return $close_element_button;
    }
    
    function productive_global_render_is_loading( $dimension = 0, $border_width = 0, $noned = 'noned', $opacity = 1.0 ) {
        if( !$dimension ) {
            $dimension = 25;
        }
        if( !$border_width ) {
            $border_width = 7;
        }
    ?>
        <div class="productiveminds-transformer-overlay <?php echo esc_attr($noned); ?>">
            <div class="transformer-container">
                <div class="transformer" style="width: <?php echo esc_attr($dimension); ?>px; height: <?php echo esc_attr($dimension); ?>px; border-width: <?php echo esc_attr($border_width); ?>px; opacity: <?php echo esc_attr($opacity); ?>;"></div>
            </div>
        </div>
    <?php
    }
    function productive_global_get_is_loading( $dimension = 0, $border_width = 0, $noned = 'noned', $opacity = 1.0 ) {
        if( !$dimension ) {
            $dimension = 25;
        }
        if( !$border_width ) {
            $border_width = 7;
        }
        $is_loading = '<div class="productiveminds-transformer-overlay ' . $noned . '">';
        $is_loading .= '<div class="transformer-container">';
        $is_loading .= '<div class="transformer" style="width:' . $dimension . 'px; height: ' . $dimension . 'px; border-width: ' . $border_width .'px; opacity: ' . $opacity . ';"></div>';
        $is_loading .= '</div>';
        $is_loading .= '</div>';
        return $is_loading;
    }
    
    function productive_global_render_post_default_category_in_archive( $the_post_type = 'post', $linked = 1 ) {
        $content = '';
        $cats = array();
        if( 'post' == $the_post_type ) {
            global $post;
            $cats = wp_get_post_categories( $post->ID );
        } else if( 'product' == $the_post_type ) {
            global $product;
            $product_object = productive_global_get_woo_product_return_wc_get_product_object( $product );
            if( null != $product_object && is_object($product_object) ) {
                $cats = $product_object->get_category_ids();
            }
        }
        if( null != $cats && !empty( $cats ) ) {
            $first_cat_id = $cats[0];
            $first_cat = get_term( $first_cat_id );
            $url = get_term_link( $first_cat_id );
            $title = $first_cat->name;
            if( $linked ) {
                $content = '<a href="' . esc_url( $url ) . '" rel="category">' . $title . '</a>';
            } else {
                $content = $title;
            }
        }
        return $content;
    }
    
    function productive_global_is_woocommerce_product_archive() {
        return productive_global_is_woocommerce_active() && ( is_shop() || is_product_taxonomy() );
    }
    
    function productive_global_is_woocommerce_generic_page() {
        return productive_global_is_woocommerce_active() && ( is_account_page() || is_cart() || is_checkout() );
    }
    
    function productive_global_is_woocommerce_entire_shop() {
        return productive_global_is_woocommerce_product_archive() || productive_global_is_woocommerce_generic_page() || is_product();
    }

    function productive_global_is_compatible_type_for_ONE_single_post( $section_item_active_post_type, $item_type = 'block' ) {
        
        global $post;
        $productive_cpt = null;
        
        if( !(is_single() && PRODUCTIVE_GLOBAL_POST_POST_TYPE_SLUG == get_post_type() ) ) {
            productive_global_render_no_content_found( $item_type, esc_html__('Please ensure you are using a "Single Post" template.', 'pass-max'), '' );
            return;
        } else if( ( null != $post && !empty($post) && (is_single() && PRODUCTIVE_GLOBAL_POST_POST_TYPE_SLUG == get_post_type() ) ) &&
                (  !empty($section_item_active_post_type) && $post->post_type == $section_item_active_post_type )
            ) {
            $productive_cpt = productive_global_get_post_by_post_id( $post->ID, $section_item_active_post_type );
        } else {
            $productive_cpt = productive_global_get_post_latest_post( $section_item_active_post_type );
        }
        
        return $productive_cpt;
    }

    function productive_global_is_compatible_type_for_ONE_single_page( $section_item_active_post_type, $item_type = 'block' ) {
        
        global $post;
        $productive_cpt = null;
        
        if( !is_page() ) {
            productive_global_render_no_content_found( $item_type, esc_html__('Please ensure you are using a "Single Post" template.', 'pass-max'), '' );
            return;
        } else if( ( null != $post && !empty($post) && is_page() ) &&
                (  !empty($section_item_active_post_type) && $post->post_type == $section_item_active_post_type )
            ) {
            $productive_cpt = productive_global_get_post_by_post_id( $post->ID, $section_item_active_post_type );
        } else {
            $productive_cpt = productive_global_get_post_latest_post( $section_item_active_post_type );
        }
        
        return $productive_cpt;
    }

    function productive_global_is_compatible_type_for_ONE_single_product( $section_item_active_post_type, $item_type = 'block' ) {
        
        global $product;
        $productive_cpt = null;
        
        if( !(productive_global_is_woocommerce_active() && is_product()) ) {
            productive_global_render_no_content_found( $item_type, esc_html__('Please ensure you are using a "Single Product" template.', 'pass-max'), '' );
            return;
        } else if( ( null != $product && !empty($product) && productive_global_is_woocommerce_active() && is_product() ) &&
                (  !empty($section_item_active_post_type) && PRODUCTIVE_GLOBAL_WOO_PRODUCT_POST_TYPE_SLUG == $section_item_active_post_type )
            ) {
            $product_obj = productive_global_get_woo_product_return_wc_get_product_object($product);
            if( $product_obj instanceof WC_Product ) {
                $productive_cpt = productive_global_get_post_by_post_id( $product_obj->get_id(), $section_item_active_post_type );
            }
        } else {
            $productive_cpt = productive_global_get_post_latest_post( $section_item_active_post_type );
        }
        
        return $productive_cpt;
    }
    
    function productive_global_is_compatible_type_for_THREE_single_post_AND_page_AND_product($section_item_active_post_type) {
        
        global $post, $product;
        $productive_cpt = null;
        
        if( ((is_single() || is_page()) && null != $post) || 
                ( null != $product && !empty($product) && productive_global_is_woocommerce_active() && is_product() ) ) {
            
            if( ( null != $product && !empty($product) && productive_global_is_woocommerce_active() && is_product() ) &&
                    (  $product instanceof WC_Product )
                ) {
                $productive_cpt = productive_global_get_post_by_post_id( $product->get_id(), PRODUCTIVE_GLOBAL_WOO_PRODUCT_POST_TYPE_SLUG );
            } else if( ( null != $post && !empty($post) && !empty($section_item_active_post_type) && (is_single() || is_page()) ) ) {
                $productive_cpt = productive_global_get_post_by_post_id( $post->ID, $section_item_active_post_type );
            } else if( !empty($section_item_active_post_type) ) {
                $productive_cpt = productive_global_get_post_latest_post( $section_item_active_post_type );
            } else {
                $productive_cpt = productive_global_get_post_latest_post( PRODUCTIVE_GLOBAL_POST_POST_TYPE_SLUG );
            }
            
        }
        
        return $productive_cpt;
    }
    
    /**
     * 
     * @param type $args
     */
    function productive_global_get_content_wrapper_full_full_top( $class = '' ) {
        ?>
        <div class="site-body-container_box_full <?php echo esc_attr($class); ?>">
        <?php
    }
    add_action( 'productive_global_render_content_wrapper_full_full_top', 'productive_global_get_content_wrapper_full_full_top' );
    
    /**
     * 
     * @param type $args
     */
    function productive_global_get_content_wrapper_full_full_bottom() {
        ?>
        </div>
        <?php
    }
    add_action( 'productive_global_render_content_wrapper_full_full_bottom', 'productive_global_get_content_wrapper_full_full_bottom' );


    /**
     * 
     * @param type $args
     */
    function productive_global_get_content_wrapper_full_top( $class = '' ) {
        ?>
        <div class="site-body-container_box_full <?php echo esc_attr($class); ?>">
            <div class="site-body-container_box">
                <div class="site-body-container_box_uno">
        <?php
    }
    add_action( 'productive_global_render_content_wrapper_full_top', 'productive_global_get_content_wrapper_full_top' );

    /**
     * 
     * @param type $args
     */
    function productive_global_get_content_wrapper_full_bottom() {
        ?>
                </div>
            </div>
        </div>
        <?php
    }
    add_action( 'productive_global_render_content_wrapper_full_bottom', 'productive_global_get_content_wrapper_full_bottom' );


    /**
     * 
     * @param type $args
     */
    function productive_global_get_content_wrapper_full_without_uno_top( $class = '' ) {
        ?>
        <div class="site-body-container_box_full <?php echo esc_attr($class); ?>">
            <div class="site-body-container_box">
        <?php
    }
    add_action( 'productive_global_render_content_wrapper_full_without_uno_top', 'productive_global_get_content_wrapper_full_without_uno_top' );

    /**
     * 
     * @param type $args
     */
    function productive_global_get_content_wrapper_full_without_uno_bottom() {
        ?>
            </div>
        </div>
        <?php
    }
    add_action( 'productive_global_render_content_wrapper_full_without_uno_bottom', 'productive_global_get_content_wrapper_full_without_uno_bottom' );


    /**
     * 
     * @param type $args
     */
    function productive_global_get_content_wrapper_standard_top( $class = '' ) {
        ?>
        <div class="site-body-container_box <?php echo esc_attr($class); ?>">
            <div class="site-body-container_box_uno">
        <?php
    }
    add_action( 'productive_global_render_content_wrapper_standard_top', 'productive_global_get_content_wrapper_standard_top' );

    /**
     * 
     * @param type $args
     */
    function productive_global_get_content_wrapper_standard_bottom() {
        ?>
            </div>
        </div>
        <?php
    }
    add_action( 'productive_global_render_content_wrapper_standard_bottom', 'productive_global_get_content_wrapper_standard_bottom' );
    
    /**
     * 
     * @param type $class
     * @return string
     */
    function productive_global_get_content_wrapper_full_full_top_data( $class = '' ) {
        $data = '';
        $data .= '<div class="site-body-container_box_full ' . $class . '">';
        return $data;
    }
    
    /**
     * 
     * @return string
     */
    function productive_global_get_content_wrapper_full_full_bottom_data() {
        $data = '</div>';
        return $data;
    }
    
    /**
     * 
     * @param type $class
     * @return string
     */
    function productive_global_get_content_wrapper_full_top_data( $class = '' ) {
        $data = '';
        $data .= '<div class="site-body-container_box_full ' . $class . '">';
            $data .= '<div class="site-body-container_box">';
                $data .= '<div class="site-body-container_box_uno">';
        return $data;
    }
    
    /**
     * 
     * @return string
     */
    function productive_global_get_content_wrapper_full_bottom_data() {
                $data = '</div>';
            $data .= '</div>';
        $data .= '</div>';
        return $data;
    }
    
    /**
     * 
     * @param type $class
     * @return string
     */
    function productive_global_get_content_wrapper_full_without_uno_top_data( $class = '' ) {
        $data = '';
        $data .= '<div class="site-body-container_box_full ' . $class . '">';
            $data .= '<div class="site-body-container_box">';
        return $data;
    }
    
    /**
     * 
     * @return string
     */
    function productive_global_get_content_wrapper_full_without_uno_bottom_data() {
            $data .= '</div>';
        $data .= '</div>';
        return $data;
    }

    /**
     * 
     * @param type $class
     * @return string
     */
    function productive_global_get_content_wrapper_standard_top_data( $class = '' ) {
        $data = '';
        $data .= '<div class="site-body-container_box ' . $class . '">';
            $data .= '<div class="site-body-container_box_uno">';
        return $data;
    }

    /**
     * 
     * @return string
     */
    function productive_global_get_content_wrapper_standard_bottom_data() {
            $data .= '</div>';
        $data .= '</div>';
        return $data;
    }
    

    function productive_global_hero_content_title( $copy = '' ) {
        if( !empty($copy) ) {
        ?>
            <div class="productiveminds_hero_content_style productiveminds_hero_content_title"><?php echo wp_kses_post( $copy ); ?></div>
        <?php
        }
    }
    add_action( 'productive_global_render_hero_content_title', 'productive_global_hero_content_title' );


    function productive_global_hero_content_main( $copy = '' ) {
        if( !empty($copy) ) {
        ?>
            <div class="productiveminds_hero_content_style productiveminds_hero_content_main"><?php echo wp_kses_post( $copy ); ?></div>
        <?php
        }
    }
    add_action( 'productive_global_render_hero_content_main', 'productive_global_hero_content_main' );


    function productive_global_hero_content_auxiliary( $copy_and_css = '' ) {
        $copy = '';
        $css_class = 'content_auxiliary_bottom';
        if( isset( $copy_and_css['copy'] ) ) {
            $copy = $copy_and_css['copy'];
        }
        if( isset( $copy_and_css['css_class'] ) ) {
            $css_class = $copy_and_css['css_class'];
        }
        
        if( !empty($copy) ) {
    ?>
            <div class="productiveminds_hero_content_style productiveminds_hero_content_auxiliary <?php echo esc_attr( $css_class ); ?>"><?php echo wp_kses_post( $copy ); ?></div>
    <?php
        }
    }
    add_action( 'productive_global_render_hero_content_auxiliary', 'productive_global_hero_content_auxiliary' );


    function productive_global_hero_content_cta( $curl, $copy = '', $css_class = 'cta1' ) {
        if ( !empty($curl) && !empty($copy) ) {
            $copy = wp_kses_post( $copy );
    ?>
        <a class="productiveminds-alignable-container width-autoed align-items-center align-content-center justify-center align-content-center <?php echo esc_attr( $css_class ); ?>" aria-label="<?php echo esc_attr( $copy ); ?>" href="<?php echo esc_url( $curl ); ?>"><?php echo esc_html( $copy ); ?></a>
    <?php
        }
    }
    
    function productive_global_render_post_prev_next_section( $args = array() ) {
        
        if( !isset( $args['default_image_url'] ) || 
                !isset( $args['section_show_prev_next_buttons_icon_style_prev'] ) || 
                !isset( $args['section_show_prev_next_buttons_icon_style_next'] ) || 
                !isset( $args['section_show_prev_next_buttons_icon'] ) || 
                !isset( $args['section_show_prev_next_buttons_icon_size'] ) || 
                !isset( $args['section_show_prev_next_thumbnail'] ) || 
                !isset( $args['section_show_prev_next_post_title'] ) ) 
        {
            return;
        }

        $default_image_url                                  = $args['default_image_url'];
        $section_show_prev_next_buttons_icon_style_prev     = $args['section_show_prev_next_buttons_icon_style_prev'];
        $section_show_prev_next_buttons_icon_style_next     = $args['section_show_prev_next_buttons_icon_style_next'];
        $section_show_prev_next_buttons_icon                = $args['section_show_prev_next_buttons_icon'];
        $section_show_prev_next_buttons_icon_size           = $args['section_show_prev_next_buttons_icon_size'];
        $section_show_prev_next_thumbnail                   = $args['section_show_prev_next_thumbnail'];
        $section_show_prev_next_post_title                  = $args['section_show_prev_next_post_title'];
        
        $prev = get_previous_post();
        $next = get_next_post();
        
        if ($prev || $next) {
            $productive_global_prev_icon_args = array(
                'i' => $section_show_prev_next_buttons_icon_style_prev,
                'w' => $section_show_prev_next_buttons_icon_size,
                'h' => $section_show_prev_next_buttons_icon_size,
                'css' => '',
                'svg_css' => ''
            );
            $productive_global_next_icon_args = array(
                'i' => $section_show_prev_next_buttons_icon_style_next,
                'w' => $section_show_prev_next_buttons_icon_size,
                'h' => $section_show_prev_next_buttons_icon_size,
                'css' => '',
                'svg_css' => ''
            );
            ?>
            <div class="prev-next-post-link-container width-autoed productiveminds-alignable-container flexed-no-wrap align-items-center align-content-center justify-content-space-between justify-items-stretch column-gap-50px row-gap-20px">
                <div class="">
                    <?php if ($prev) {
                        $prev_post_title = $prev->post_title;
                        $prev_thumbnail_args = array(
                            'post_id'               => $prev->ID,
                            'default_image_url'     => $default_image_url,
                            'type'                  => 'thumbnail',
                            'alt'                   => $prev_post_title,
                        );
                        ?>
                        <a class="prev-next-post-link-anchor productiveminds-alignable-container align-items-center align-content-center justify-items-start justify-content-flex-start row-gap-5px" 
                           aria-label="<?php echo esc_attr('Previous', 'pass-max'); ?>" href="<?php echo esc_url(get_permalink($prev->ID)); ?>">
                            <span class="prev-post-link prev-next-post-link-img-and-icon-container">
                                <?php
                                    if ( $section_show_prev_next_buttons_icon ) {
                                        echo wp_kses( productiveminds_get_svg_icon( $productive_global_prev_icon_args ), 'wp_kses_allowed_html' );
                                    }
                                    if ( $section_show_prev_next_thumbnail ) {
                                        do_action( 'productive_global_render_post_thumbnail', $prev_thumbnail_args );
                                    }
                                ?>
                            </span>
                            <span class="fs-xs lefted">
                                <?php if ( $section_show_prev_next_post_title ) { ?> <span class="prev-next-post-link-anchor-span blocked"><?php echo esc_html($prev_post_title); ?></span><?php } ?>
                            </span>
                            <span class="screen-reader-text"><?php echo esc_html__('Previous', 'pass-max'); ?></span>
                        </a>
                    <?php } ?>
                </div>
                <div class="">
                    <?php if ($next) {
                        $next_post_title = $next->post_title;
                        $next_thumbnail_args = array(
                            'post_id'               => $next->ID,
                            'default_image_url'     => $default_image_url,
                            'type'                  => 'thumbnail',
                            'alt'                   => $next_post_title,
                        );
                        ?>
                        <a class="prev-next-post-link-anchor productiveminds-alignable-container align-items-center align-content-center justify-items-end justify-content-flex-end row-gap-5px" 
                           aria-label="<?php echo esc_attr('Next', 'pass-max'); ?>" href="<?php echo esc_url(get_permalink($next->ID)); ?>">
                            <span class="next-post-link prev-next-post-link-img-and-icon-container">
                                <?php
                                    if ( $section_show_prev_next_thumbnail ) {
                                        do_action( 'productive_global_render_post_thumbnail', $next_thumbnail_args );
                                    }
                                    if ( $section_show_prev_next_buttons_icon ) {
                                        echo wp_kses( productiveminds_get_svg_icon( $productive_global_next_icon_args ), 'wp_kses_allowed_html' );
                                    }
                                ?>
                            </span>
                            <span class="fs-xs righted">
                                <?php if ( $section_show_prev_next_post_title ) { ?> <span class="prev-next-post-link-anchor-span blocked"><?php echo esc_html($next_post_title); ?></span><?php } ?>
                            </span>
                            <span class="screen-reader-text"><?php echo esc_html__('Previous', 'pass-max'); ?></span>
                        </a>
                    <?php } ?>
                </div>
            </div>
            <?php
        }
    }

    
    function productive_global_render_post_thumbnail( $args = array() ) {
        $post_id = 0;
        if( isset( $args['post_id'] ) ) {
            $post_id = $args['post_id'];
        } else {
            return;
        }
        $default_image_url = '';
        if( isset( $args['default_image_url'] ) ) {
            $default_image_url = $args['default_image_url'];
        } else {
            return;
        }
        $alt = '';
        if( isset( $args['alt'] ) ) {
            $alt = $args['alt'];
        }
        $type = 'full';
        if( isset( $args['type'] ) ) {
            $type = $args['type'];
        }
        
        if( has_post_thumbnail( $post_id ) ) {
            $attr = array (
                'alt' => $alt,
            );
            echo get_the_post_thumbnail( $post_id, $type, $attr );
        } else {
            $attachment_id = get_post_thumbnail_id($post_id);
            $attachment_url = productive_global_get_attachment_url_by_attachment_id( $attachment_id, $default_image_url, $type );
        ?>
            <img src="<?php echo esc_attr($attachment_url); ?>" alt="<?php echo esc_attr( $alt ); ?>" />
        <?php
        }
    }
    add_action( 'productive_global_render_post_thumbnail', 'productive_global_render_post_thumbnail' );
    
    
    function productive_global_get_post_attachment_url_by_post_id( $post_id, $default_image_url, $type = 'full' ) {
        $attachment_id = get_post_thumbnail_id($post_id);
        return productive_global_get_attachment_url_by_attachment_id( $attachment_id, $default_image_url, $type );
    }
    
    
    function productive_global_get_attachment_url_by_attachment_id( $attachment_id, $default_image_url, $type = 'full' ) {
        $attachment_url = $default_image_url;
        if ( $attachment_id ) {
            $attachment_url_temp = wp_get_attachment_url( $attachment_id, $type );
            if ( !empty( trim($attachment_url_temp)) ) {
                $attachment_url = $attachment_url_temp;
            }
        }
        return $attachment_url;
    }

    function productive_global_the_posts_navigation() {
        the_posts_pagination(
            array(
                'prev_text' => sprintf(
                    '%s <span class="prev-post-link">%s</span>',
                    '<span class="bolded"><</span>',
                    ''
                    ),
                'next_text' => sprintf(
                    '<span class="next-post-link">%s</span> %s',
                    '',
                    '<span class="bolded">></span>',
                    ),
                'screen_reader_text' => esc_html__( 'Page Content Navigation ', 'pass-max' ),
                'class' => 'productiveminds_archive_pagination_nav',
            )
        );
    }
    
    function productive_global_paginate_links( $productive_cpt = array(), $prev_icon = '<', $next_icon = '>', $prev_text = '', $next_text = '', $show_all = false ) {
        if( !empty($productive_cpt) ) {
            $total = $productive_cpt->max_num_pages;
        } else {
            global $wp_query;
            $total = $wp_query->max_num_pages;
        }
        
        $prev_text_copy = esc_html__( 'Previous', 'pass-max' );
        if( '' != $prev_text ) {
            $prev_text_copy = $prev_text;
        }
        
        $next_text_copy = esc_html__( 'Next', 'pass-max' );
        if( '' != $next_text ) {
            $next_text_copy = $next_text;
        }
        
        $prev_text_value = '<span class="screen-reader-text">' . $prev_text_copy . '</span><span class="bolded">' . $prev_icon . '</span>';
        $next_text_value = '<span class="screen-reader-text">' . $next_text_copy . '</span><span class="bolded">' . $next_icon . '</span>';
        
        $too_big = PHP_INT_MAX;
        $paginate_links = paginate_links( array(
            'base' => str_replace( $too_big, '%#%', esc_url( get_pagenum_link( $too_big ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $total,
            'before_page_number' => '<span class="screen-reader-text">' . esc_html__( 'Page ', 'pass-max' ) . ' </span>',
            'prev_text' => $prev_text_value,
            'next_text' => $next_text_value,
            'show_all'  => $show_all,
        ) );
        
        if( null == $paginate_links || !is_string($paginate_links) ) {
            return;
        }
        
        ?>
        <div class="productiveminds_section-query-pagination-nav productiveminds_archive_pagination_nav">
            <div class="nav-links">
                <?php echo wp_kses_post( $paginate_links ); ?>
            </div>
        </div>
        <?php
    }
    
    function productive_global_flush_rewrite_rule( $rewriterle_key ) {
        $productive_global_is_rewrite_rule_flushed = get_option( $rewriterle_key );
        if( !strpos( $rewriterle_key, "productive" ) !== false && !strpos( $rewriterle_key, "pass_addons" ) !== false && !strpos( $rewriterle_key, "ravolat_addons" ) !== false ) {
            return;
        }
        if( null != $productive_global_is_rewrite_rule_flushed && 
                false != $productive_global_is_rewrite_rule_flushed && 
                !empty($productive_global_is_rewrite_rule_flushed) && 
                'no' == $productive_global_is_rewrite_rule_flushed ) {
            flush_rewrite_rules();
            update_option( $rewriterle_key, 'yes' );
        }
    }
    
    function productive_global_get_plugin_repo_url( $plugin_slug ) {
        return 'https://wordpress.org/plugins/'.$plugin_slug;
    }

    function productive_global_get_active_plugin_path( $plugin_slug ) {
        $the_plugin = '';
        validate_active_plugins();
        $the_plugins = apply_filters( 'active_plugins', get_option('active_plugins') );
        foreach ( $the_plugins as $the_plugin_path ) {
            if( strpos( $the_plugin_path, $plugin_slug ) !== false ) {
                $the_plugin = $the_plugin_path;
                break;
            }
        }
        return $the_plugin;
    }

    function productive_global_get_installed_plugin_path( $plugin_slug ) {
        $the_plugin = '';
        if( !function_exists('get_plugins') ) {
            return;
        }
        $plugins = get_plugins();
        foreach ( $plugins as $key => $plugin) {
            $separator_str_pos = strpos( $key, DIRECTORY_SEPARATOR );
            $installed_plugin_slug = substr( $key, 0, $separator_str_pos );
            $plugin_folder_exists = is_dir(WP_PLUGIN_DIR.DIRECTORY_SEPARATOR.$plugin_slug);
            if( $plugin_folder_exists && $plugin_slug == $installed_plugin_slug ) {
                $the_plugin = $key;
                break;
            }
        }
        return $the_plugin;
    }

    function productive_global_do_activate_plugin( $plugin_path, $redirect = '', $network_wide = false, $silent = false ) {
        if( !function_exists('get_plugins') ) {
            return;
        }
        $activated = activate_plugin( $plugin_path, $redirect, $network_wide, $silent );
        
        if( $silent ) {
            validate_active_plugins();
        }
        
        return $activated;
    }

    function productive_global_do_install_plugin( $plugin_slug ) {

        $downloadlink = productive_global_get_plugin_download_link( $plugin_slug );

        if( !class_exists('Plugin_Upgrade') ) {
            return;
        }

        $installer_skin = new Plugin_Upgrader_Skin();
        $installer = new Plugin_Upgrader( $installer_skin );

        $installed = $installer->install( $downloadlink );

        return $installed;
    }

    function productive_global_get_plugin_download_link( $plugin_slug ) {
        $download_link = '';
        $plugins_api_response = productive_global_get_plugin_object_from_wp_api( $plugin_slug );
        if( null != $plugins_api_response ) {
            $download_link = $plugins_api_response->download_link;
        }
        return $download_link;
    }

    function productive_global_get_plugin_object_from_wp_api( $plugin_slug ) {
        if( !function_exists('plugins_api') ) {
            return;
        }

        $args = array(
            'slug'      => $plugin_slug,
            'fields'      => array(
                'sections' => false,
            ),
        );
        $plugins_api_response = plugins_api( 'plugin_information', $args);

        if( is_wp_error($plugins_api_response) ) {
            return null;
        }

        return $plugins_api_response;
    }

    function productive_global_get_theme_repo_url( $theme_slug ) {
        return 'https://wordpress.org/themes/'.$theme_slug;
    }

    function productive_global_is_theme_installed( $theme_stylesheet ) {
        $the_theme = false;
        $theme_root = WP_CONTENT_DIR  . DIRECTORY_SEPARATOR . 'themes';
        $theme_stylesheet_path = $theme_root . DIRECTORY_SEPARATOR . $theme_stylesheet;
        if( is_dir($theme_stylesheet_path) ) {
            $the_theme = true;
        }
        return $the_theme;
    }

    function productive_global_is_theme_active( $theme_stylesheet ) {
        $the_theme = false;
        if( $theme_stylesheet == get_template() || $theme_stylesheet == get_stylesheet() ) {
            $the_theme = true;
        }
        return $the_theme;
    }

    function productive_global_do_activate_theme( $theme_path ) {
        if( !function_exists('switch_theme') ) {
            return;
        }
        $activated = switch_theme( $theme_path );

        return $activated;
    }
    
    function productive_global_account_login_popup_container() {
        global $productive_global_popup_transition_direction, $is_on_productive_global_popup_close_with_esc_key_enable, 
                $is_on_productive_global_popup_close_with_click_elsewhere_enable, $is_on_productive_global_popup_use_theme_style;
        ?>
        <div class="productive_popup std_popup account_login_popup <?php echo esc_attr($is_on_productive_global_popup_use_theme_style); ?> <?php echo esc_attr($is_on_productive_global_popup_close_with_esc_key_enable); ?> <?php echo esc_attr($is_on_productive_global_popup_close_with_click_elsewhere_enable); ?>" id="productive_account_login_popup_id" data-enter-exit-transition-commerce="<?php echo esc_attr($productive_global_popup_transition_direction); ?>">
          <div class="productive_popup-overlay account_login_popup">
            <header class="productive_popup-header noned" id="productive_popup-header-account_login_popup"></header>
            <section class="productive_popup-body">
                <form name="loginform" id="loginform" action="<?php echo esc_url( home_url( 'wp-login.php', 'login_post' ) ); ?>" method="post">
                    <div class="account_login_popup_form_container productiveminds-alignable-container align-items-flex-start align-content-flex-start justify-items-flex-start justify-content-flex-start row-gap-10px column-gap-zero">
                        <p>
                            <label for="user_login fs-s"><?php echo esc_html__( 'Username or Email Address', 'pass-max' ); ?></label>
                            <input type="text" name="log" id="user_login" class="productive_account_login_popup_username_input input" value="" size="20" autocapitalize="off" autocomplete="username" required="required" />
                        </p>

                        <div class="user-pass-wrap">
                            <label for="user_pass fs-s"><?php echo esc_html__( 'Password', 'pass-max' ); ?></label>
                            <div class="wp-pwd productiveminds-alignable-container align-items-center align-content-center justify-items-flex-end justify-content-flex-end row-gap-zero column-gap-zero">
                                <input type="password" name="pwd" id="user_pass" class="productive_account_login_popup_pwd_input input password-input" value="" size="20" autocomplete="current-password" spellcheck="false" required="required" />
                                <button type="button" class="productive_account_login_popup_pwd_viz button button-secondary wp-hide-pw hide-if-no-js" data-toggle="0" aria-label="<?php echo esc_attr__( 'Show password', 'pass-max' ); ?>">
                                    <span class="productive-login-viz productive-login-viz-hidden" aria-hidden="true">
                                        <svg class="productive-login-viz-icon" aria-hidden="true" width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1664 960q-152-236-381-353 61 104 61 225 0 185-131.5 316.5t-316.5 131.5-316.5-131.5-131.5-316.5q0-121 61-225-229 117-381 353 133 205 333.5 326.5t434.5 121.5 434.5-121.5 333.5-326.5zm-720-384q0-20-14-34t-34-14q-125 0-214.5 89.5t-89.5 214.5q0 20 14 34t34 14 34-14 14-34q0-86 61-147t147-61q20 0 34-14t14-34zm848 384q0 34-20 69-140 230-376.5 368.5t-499.5 138.5-499.5-139-376.5-368q-20-35-20-69t20-69q140-229 376.5-368t499.5-139 499.5 139 376.5 368q20 35 20 69z"/></svg>
                                        <svg class="productive-login-viz-hidden-icon" aria-hidden="true" width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M555 1335l78-141q-87-63-136-159t-49-203q0-121 61-225-229 117-381 353 167 258 427 375zm389-759q0-20-14-34t-34-14q-125 0-214.5 89.5t-89.5 214.5q0 20 14 34t34 14 34-14 14-34q0-86 61-147t147-61q20 0 34-14t14-34zm363-191q0 7-1 9-106 189-316 567t-315 566l-49 89q-10 16-28 16-12 0-134-70-16-10-16-28 0-12 44-87-143-65-263.5-173t-208.5-245q-20-31-20-69t20-69q153-235 380-371t496-136q89 0 180 17l54-97q10-16 28-16 5 0 18 6t31 15.5 33 18.5 31.5 18.5 19.5 11.5q16 10 16 27zm37 447q0 139-79 253.5t-209 164.5l280-502q8 45 8 84zm448 128q0 35-20 69-39 64-109 145-150 172-347.5 267t-419.5 95l74-132q212-18 392.5-137t301.5-307q-115-179-282-294l63-112q95 64 182.5 153t144.5 184q20 34 20 69z"/></svg>
                                    </span>
                                </button>
                            </div>
                        </div>
                        <?php

                        /**
                         * Fires following the 'Password' field in the login form.
                         *
                         * @since 2.1.0
                         */
                        do_action( 'login_form' );

                        ?>
                        <p class="forgetmenot productiveminds-alignable-container flexed flexed-no-wrap align-items-center align-content-center justify-items-flex-start justify-content-flex-start row-gap-zero column-gap-5px">
                            <input class="productive_account_login_popup_remember_me_input" name="rememberme" type="checkbox" id="rememberme" value="forever" /> 
                            <label for="rememberme"><?php echo esc_html__( 'Remember Me', 'pass-max' ); ?></label>
                        </p>
                        <p class="submit account_login_popup_submit_btn_container productiveminds-alignable-container align-items-center align-content-center">
                            <input type="submit" name="wp-submit" id="wp-submit" class="productive_account_login_popup_submit_btn button button-primary button-large" value="<?php echo esc_attr__( 'Log In', 'pass-max' ); ?>" />
                            <input type="hidden" name="testcookie" value="1" />
                        </p>

                        <p id="nav">
                                <?php
                                $login_link_separator = apply_filters( 'login_link_separator', ' | ' );
                                if ( get_option( 'users_can_register' ) ) {
                                        $registration_url = sprintf( '<a class="wp-login-register" href="%s">%s</a>', esc_url( wp_registration_url() ), esc_html__( 'Register', 'pass-max' ) );
                                        /** This filter is documented in wp-includes/general-template.php */
                                        echo apply_filters( 'register', $registration_url );
                                        echo esc_html( $login_link_separator );
                                }
                                $html_link = sprintf( '<a class="wp-login-lost-password" href="%s">%s</a>', esc_url( wp_lostpassword_url() ), esc_html__( 'Lost your password?', 'pass-max' ) );
                                /**
                                 * Filters the link that allows the user to reset the lost password.
                                 *
                                 * @since 6.1.0
                                 *
                                 * @param string $html_link HTML link to the lost password form.
                                 */
                                echo apply_filters( 'lost_password_html_link', $html_link );

                                ?>
                        </p>

                    </div>
                </form>
            </section>
            <footer class="productive_popup-footer noned">
            </footer>
            <button aria-label="<?php echo esc_attr('Close Overlay', 'pass-max'); ?>" class="productive-popup-close-button right">
                <?php productive_global_render_close_section_button( 16 ); ?>
                <span class="screen-reader-text"><?php echo esc_html__('Close Overlay', 'pass-max'); ?></span>
            </button>
          </div>
        </div>
    <?php
    }
    add_action('wp_footer', 'productive_global_account_login_popup_container');
    
    function productive_global_account_login_popup_container_v1() {
        global $productive_global_popup_transition_direction, $is_on_productive_global_popup_close_with_esc_key_enable, 
                $is_on_productive_global_popup_close_with_click_elsewhere_enable, $is_on_productive_global_popup_use_theme_style;
        ?>
        <div class="productive_popup std_popup account_login_popup <?php echo esc_attr($is_on_productive_global_popup_use_theme_style); ?> <?php echo esc_attr($is_on_productive_global_popup_close_with_esc_key_enable); ?> <?php echo esc_attr($is_on_productive_global_popup_close_with_click_elsewhere_enable); ?>" id="productive_account_login_popup_id" data-enter-exit-transition-commerce="<?php echo esc_attr($productive_global_popup_transition_direction); ?>">
          <div class="productive_popup-overlay account_login_popup">
            <header class="productive_popup-header noned" id="productive_popup-header-account_login_popup"></header>
            <section class="productive_popup-body">
                <form name="loginform" id="loginform" action="<?php echo esc_url( home_url( 'wp-login.php', 'login_post' ) ); ?>" method="post">
                    <div class="account_login_popup_form_container productiveminds-alignable-container align-items-flex-start align-content-flex-start justify-items-flex-start justify-content-flex-start row-gap-10px column-gap-zero">
                        <p>
                            <label for="user_login fs-s"><?php echo esc_html__( 'Username or Email Address', 'pass-max' ); ?></label>
                            <input type="text" name="log" id="user_login" class="productive_account_login_popup_username_input input" value="" size="20" autocapitalize="off" autocomplete="username" required="required" />
                        </p>

                        <div class="user-pass-wrap">
                            <label for="user_pass fs-s"><?php echo esc_html__( 'Password', 'pass-max' ); ?></label>
                            <div class="wp-pwd productiveminds-alignable-container align-items-center align-content-center justify-items-flex-end justify-content-flex-end row-gap-zero column-gap-zero">
                                <input type="password" name="pwd" id="user_pass" class="productive_account_login_popup_pwd_input input password-input" value="" size="20" autocomplete="current-password" spellcheck="false" required="required" />
                                <button type="button" class="productive_account_login_popup_pwd_viz button button-secondary wp-hide-pw hide-if-no-js" data-toggle="0" aria-label="<?php echo esc_attr__( 'Show password', 'pass-max' ); ?>">
                                        <span class="productive-login-viz productive-login-viz-hidden" aria-hidden="true"></span>
                                </button>
                            </div>
                        </div>
                        <?php

                        /**
                         * Fires following the 'Password' field in the login form.
                         *
                         * @since 2.1.0
                         */
                        do_action( 'login_form' );

                        ?>
                        <p class="forgetmenot productiveminds-alignable-container flexed flexed-no-wrap align-items-center align-content-center justify-items-flex-start justify-content-flex-start row-gap-zero column-gap-5px">
                            <input class="productive_account_login_popup_remember_me_input" name="rememberme" type="checkbox" id="rememberme" value="forever" /> 
                            <label for="rememberme"><?php echo esc_html__( 'Remember Me', 'pass-max' ); ?></label>
                        </p>
                        <p class="submit account_login_popup_submit_btn_container productiveminds-alignable-container align-items-center align-content-center">
                            <input type="submit" name="wp-submit" id="wp-submit" class="productive_account_login_popup_submit_btn button button-primary button-large" value="<?php echo esc_attr__( 'Log In', 'pass-max' ); ?>" />
                            <input type="hidden" name="testcookie" value="1" />
                        </p>

                        <p id="nav">
                                <?php
                                $login_link_separator = apply_filters( 'login_link_separator', ' | ' );
                                if ( get_option( 'users_can_register' ) ) {
                                        $registration_url = sprintf( '<a class="wp-login-register" href="%s">%s</a>', esc_url( wp_registration_url() ), esc_html__( 'Register', 'pass-max' ) );
                                        /** This filter is documented in wp-includes/general-template.php */
                                        echo apply_filters( 'register', $registration_url );
                                        echo esc_html( $login_link_separator );
                                }
                                $html_link = sprintf( '<a class="wp-login-lost-password" href="%s">%s</a>', esc_url( wp_lostpassword_url() ), esc_html__( 'Lost your password?', 'pass-max' ) );
                                /**
                                 * Filters the link that allows the user to reset the lost password.
                                 *
                                 * @since 6.1.0
                                 *
                                 * @param string $html_link HTML link to the lost password form.
                                 */
                                echo apply_filters( 'lost_password_html_link', $html_link );

                                ?>
                        </p>

                    </div>
                </form>
            </section>
            <footer class="productive_popup-footer noned">
            </footer>
            <button aria-label="<?php echo esc_attr('Close Overlay', 'pass-max'); ?>" class="productive-popup-close-button right">
                <?php productive_global_render_close_section_button( 16 ); ?>
                <span class="screen-reader-text"><?php echo esc_html__('Close Overlay', 'pass-max'); ?></span>
            </button>
          </div>
        </div>
    <?php
    }
    
    function productive_global_is_a_pro_edition_plugin_or_theme( $item_slug = '' ) {
        $is_pro = false;
        switch ( $item_slug ) {
            case PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_PASS_ADDONS_TEXT_DOMAIN:
                if( productive_global_is_pass_addons_active_extra() ) {
                    $is_pro = true;
                }
                break;
            case PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_RAVOLAT_ADDONS_TEXT_DOMAIN:
                if( productive_global_is_ravolat_addons_active_extra() ) {
                    $is_pro = true;
                }
                break;
            case PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_COMMERCE_TEXT_DOMAIN:
                if( productive_global_is_productive_commerce_active_extra() ) {
                    $is_pro = true;
                }
                break;
            case PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_FORMS_TEXT_DOMAIN:
                if( productive_global_is_productive_forms_active_extra() ) {
                    $is_pro = true;
                }
                break;
            case PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_STYLE_TEXT_DOMAIN:
                if( productive_global_is_productive_style_active_extra() ) {
                    $is_pro = true;
                }
                break;
            case PRODUCTIVE_GLOBAL_PRODUCTIVE_THEME_BUSINESS_TEXT_DOMAIN:
                if( productive_global_is_theme_template_productive_business_extra() ) {
                    $is_pro = true;
                }
                break;
            case PRODUCTIVE_GLOBAL_PRODUCTIVE_THEME_ECOMMERCE_TEXT_DOMAIN:
                if( productive_global_is_theme_template_productive_ecommerce_extra() ) {
                    $is_pro = true;
                }
                break;
            case PRODUCTIVE_GLOBAL_PRODUCTIVE_THEME_STOCKIST_TEXT_DOMAIN:
                if( productive_global_is_theme_template_stockist_extra() ) {
                    $is_pro = true;
                }
                break;
            case PRODUCTIVE_GLOBAL_PRODUCTIVE_THEME_MAGVALO_TEXT_DOMAIN:
                if( productive_global_is_theme_template_magvalo_extra() ) {
                    $is_pro = true;
                }
                break;
            case PRODUCTIVE_GLOBAL_PRODUCTIVE_THEME_PASSMAX_TEXT_DOMAIN:
                if( productive_global_is_theme_template_passmax_extra() ) {
                    $is_pro = true;
                }
                break;
            case PRODUCTIVE_GLOBAL_PRODUCTIVE_THEME_RAVOLAT_TEXT_DOMAIN:
                if( productive_global_is_theme_template_ravolat_extra() ) {
                    $is_pro = true;
                }
                break;
            case PRODUCTIVE_GLOBAL_PRODUCTIVE_THEME_TRANSACT_TEXT_DOMAIN:
                if( productive_global_is_theme_stylesheet_transact_extra() ) {
                    $is_pro = true;
                }
                break;
            case PRODUCTIVE_GLOBAL_PRODUCTIVE_THEME_PUNDIT_TEXT_DOMAIN:
                if( productive_global_is_theme_stylesheet_pundit_extra() ) {
                    $is_pro = true;
                }
                break;
            case PRODUCTIVE_GLOBAL_PRODUCTIVE_THEME_VERSATILE_TEXT_DOMAIN:
                if( productive_global_is_theme_stylesheet_stockist_mini_extra() ) {
                    $is_pro = true;
                }
                break;
            default:
                break;
        }
        return $is_pro;
    }
    
    function productive_global_admin_sidebar_about_section( $item, $item_type ) {
    ?>
        <div class="productive-global-admin-content-container">
            <div class="productiveminds_double_grid column_100">
                <div class="productiveminds_double_grid_content">
                    <div class="get-pro-features-box-list">
                        <h3 class=""><?php echo esc_html__( 'Leave a Review', 'pass-max' ); ?></h3>
                        <div>
                            <?php echo esc_html__( 'Share Your Insights! Help enhance our effort.', 'pass-max' ); ?>
                        </div>
                        <div class="productive-global-block-link-container">
                            <?php
                                if( productive_global_is_a_pro_edition_plugin_or_theme( $item ) ) { 
                                    $plugin_review_url = PRODUCTIVE_GLOBAL_PRODUCT_REVIEWS_BASE_URL . $item;
                                } else {
                                    $plugin_review_url = PRODUCTIVE_GLOBAL_WP_REPO_SUPPORT_BASE_URL . $item_type . "/" . $item . "/reviews/";
                                }
                            ?>
                            <a target="_blank" class="standard-link" href="<?php echo esc_url( $plugin_review_url ); ?>">
                                <?php echo esc_html__( 'Kindly submit a review', 'pass-max' ); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear_min"></div>
        </div>
        <div class="productive-global-admin-content-container">
            <div class="productiveminds_double_grid column_100">
                <div class="productiveminds_double_grid_content">
                    <div class="get-pro-features-box-list">
                        <h3 class=""><?php echo esc_html__( 'Premium Support', 'pass-max' ); ?></h3>
                        <div>
                            <?php echo esc_html__( 'Submit a support ticket with ease to receive prompt premium assistance with Pro', 'pass-max' ); ?>
                        </div>
                        <div class="productive-global-block-link-container">
                            <a target="_blank" class="standard-link" href="<?php echo esc_url( PRODUCTIVE_GLOBAL_PRODUCT_SUPPORT_BASE_URL ); ?>">
                                <?php echo esc_html__( 'Access Support', 'pass-max' ); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear_min"></div>
        </div>
        <div class="productive-global-admin-content-container">
            <div class="productiveminds_double_grid column_100">
                <div class="productiveminds_double_grid_content">
                    <div class="get-pro-features-box-list">
                        <h3 class=""><?php echo esc_html__( 'Documentation', 'pass-max' ); ?></h3>
                        <div>
                            <?php echo esc_html__( 'Seeking user guides for configuring this plugin on your website?', 'pass-max' ); ?>
                        </div>
                        <div class="productive-global-block-link-container">
                            <a target="_blank" class="standard-link" href="<?php echo esc_url(PRODUCTIVE_GLOBAL_PRODUCT_DOCS_BASE_URL) . esc_attr($item); ?>">
                                <?php echo esc_html__( 'Access documentation', 'pass-max' ); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear_min"></div>
        </div>
    <?php
    }

    function productive_global_admin_sidebar_our_plugins_section( $item, $title, $render_this_item = true ) {
        $active_theme = get_stylesheet();
        
        $action_name = 'productiveminds_wp_ajax_install_plugin';
        $plugin_action = 'install_and_activate';
        $plugin_action_name_normal_cta = esc_html__( 'Install', 'pass-max' );
        $plugin_action_name_notice_cta = esc_html__( 'Installing...', 'pass-max' );
        $plugin_action_name_success_cta = esc_html__( 'Installed', 'pass-max' );
    ?>
        <div class="productive-global-admin-content-container">
            <div class="productiveminds_double_grid column_100">
                <div class="productiveminds_double_grid_content">
                    <div class="get-pro-features-box-list dense">

                        <h3 class=""><?php echo esc_html( $title ); ?></h3>

                        <?php if( PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_PASS_ADDONS_TEXT_DOMAIN != $item || 
                                (PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_PASS_ADDONS_TEXT_DOMAIN == $item && $render_this_item) ) { ?>
                            <div class="items-in-rows">
                                <div class="productiveminds_section-container columns_left_icon-50px closeup">
                                    <div>
                                        <a target="_blank" href="<?php echo esc_url( PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_PASS_ADDONS_OUR_URL ); ?>">
                                            <img src="<?php echo esc_url( PRODUCTIVE_GLOBAL_ITEM_URL ) . 'assets/images/productivemedia/pass-addons.webp' ?>" alt="" width="100%" height="auto" />
                                        </a>
                                    </div>
                                    <div>
                                        <div class="small-heading">
                                            <?php echo esc_html( PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_PASS_ADDONS_TITLE ); ?>
                                        </div>
                                        <div class="small-text">
                                            <?php echo esc_html__( 'Website templates and content...', 'pass-max' ); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="productive-global-block-link-container">
                                    <?php if( !productive_global_is_pass_addons_active() ) {
                                        $productive_item_slug = "pass-addons";
                                        $productive_item_plugin_name = esc_html__( "PASS Addons", 'pass-max' );
                                        $plugin_installed_not_active = productive_global_get_installed_plugin_path( $productive_item_slug );
                                        
                                        if( !empty($plugin_installed_not_active) && !productive_global_is_pass_addons_active() ) {
                                            $action_name = 'productive_global_do_activate_plugin_ajax';
                                            $plugin_action = 'activate';
                                            $plugin_action_name_normal_cta = esc_html__( 'Activate', 'pass-max' );
                                            $plugin_action_name_notice_cta = esc_html__( 'Activating...', 'pass-max' );
                                            $plugin_action_name_success_cta = esc_html__( 'Activated', 'pass-max' );
                                        } 
                                        ?>
                                        <div style="padding: 10px 0 0;" class="productiveminds-alignable-container flexed flexed-in-a-flexed align-items-center align-content-center justify-content-flex-start justify-items-start row-gap-10px column-gap-15px">
                                            <a class="productive_admin_anchor_button global_install_plugin" 
                                                data-theme_slug="<?php echo esc_attr( $active_theme ); ?>" 
                                                data-plugin_slug="<?php echo esc_attr( $productive_item_slug ); ?>" 
                                                data-plugin_name="<?php echo esc_attr( $productive_item_plugin_name ); ?>" 
                                                data-action_name="<?php echo esc_attr( $action_name ); ?>" 
                                                data-plugin_action="<?php echo esc_attr( $plugin_action ); ?>" 
                                                data-item_installtion_normal_cta="<?php echo esc_attr( $plugin_action_name_normal_cta ); ?>" 
                                                data-item_installtion_notice_cta="<?php echo esc_attr( $plugin_action_name_notice_cta ); ?>" 
                                                data-item_installtion_success_cta="<?php echo esc_attr( $plugin_action_name_success_cta ); ?>" 
                                                data-silent_action="1" 
                                                data-confirm_action="location_assign" 
                                                data-confirm_action_delay="1000" 
                                                data-go_to_url="<?php echo esc_url( PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_PASS_ADDONS_ADMIN_OPTIONS_LINK ); ?>" 
                                                href="#">
                                                    <?php echo esc_html( $plugin_action_name_normal_cta ); ?>
                                            </a>
                                            <a style="padding: 0;" target="_blank" class="standard-link" href="<?php echo esc_url( PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_PASS_ADDONS_OUR_URL ); ?>"><?php echo esc_html__( 'Learn more', 'pass-max' ); ?></a>
                                        </div>
                                    <?php } else { ?>
                                        <a class="standard-link" href="<?php echo esc_url( PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_PASS_ADDONS_ADMIN_OPTIONS_LINK ); ?>">
                                            <?php echo esc_html__( 'Customize plugin', 'pass-max' ); ?>
                                        </a>
                                    <?php } ?>
                                </div>
                            </div>
                        <?php } ?>

                        <?php if( (1 == 2 && PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_RAVOLAT_ADDONS_TEXT_DOMAIN != $item) || 
                                (1 == 2 && PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_RAVOLAT_ADDONS_TEXT_DOMAIN == $item && $render_this_item) ) { ?>
                            <div class="items-in-rows">
                                <div class="productiveminds_section-container columns_left_icon-50px closeup">
                                    <div>
                                        <a target="_blank" href="<?php echo esc_url( PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_RAVOLAT_ADDONS_OUR_URL ); ?>">
                                            <img src="<?php echo esc_url( PRODUCTIVE_GLOBAL_ITEM_URL ) . 'assets/images/productivemedia/ravolat-addons.webp' ?>" alt="" width="100%" height="auto" />
                                        </a>
                                    </div>
                                    <div>
                                        <div class="small-heading">
                                            <?php echo esc_html( PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_RAVOLAT_ADDONS_TITLE ); ?>
                                        </div>
                                        <div class="small-text">
                                            <?php echo esc_html__( 'Website templates and content...', 'pass-max' ); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="productive-global-block-link-container">
                                    <?php if( !productive_global_is_ravolat_addons_active() ) {
                                        $productive_item_slug = "ravolat-addons";
                                        $productive_item_plugin_name = esc_html__( "Ravolat Addons", 'pass-max' );
                                        $plugin_installed_not_active = productive_global_get_installed_plugin_path( $productive_item_slug );
                                        
                                        if( !empty($plugin_installed_not_active) && !productive_global_is_ravolat_addons_active() ) {
                                            $action_name = 'productive_global_do_activate_plugin_ajax';
                                            $plugin_action = 'activate';
                                            $plugin_action_name_normal_cta = esc_html__( 'Activate', 'pass-max' );
                                            $plugin_action_name_notice_cta = esc_html__( 'Activating...', 'pass-max' );
                                            $plugin_action_name_success_cta = esc_html__( 'Activated', 'pass-max' );
                                        } 
                                        ?>
                                        <div style="padding: 10px 0 0;" class="productiveminds-alignable-container flexed flexed-in-a-flexed align-items-center align-content-center justify-content-flex-start justify-items-start row-gap-10px column-gap-15px">
                                            <a class="productive_admin_anchor_button global_install_plugin" 
                                                data-theme_slug="<?php echo esc_attr( $active_theme ); ?>" 
                                                data-plugin_slug="<?php echo esc_attr( $productive_item_slug ); ?>" 
                                                data-plugin_name="<?php echo esc_attr( $productive_item_plugin_name ); ?>" 
                                                data-action_name="<?php echo esc_attr( $action_name ); ?>" 
                                                data-plugin_action="<?php echo esc_attr( $plugin_action ); ?>" 
                                                data-item_installtion_normal_cta="<?php echo esc_attr( $plugin_action_name_normal_cta ); ?>" 
                                                data-item_installtion_notice_cta="<?php echo esc_attr( $plugin_action_name_notice_cta ); ?>" 
                                                data-item_installtion_success_cta="<?php echo esc_attr( $plugin_action_name_success_cta ); ?>" 
                                                data-silent_action="1" 
                                                data-confirm_action="location_assign" 
                                                data-confirm_action_delay="1000" 
                                                data-go_to_url="<?php echo esc_url( PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_RAVOLAT_ADDONS_ADMIN_OPTIONS_LINK ); ?>" 
                                                href="#">
                                                    <?php echo esc_html( $plugin_action_name_normal_cta ); ?>
                                            </a>
                                            <a style="padding: 0;" target="_blank" class="standard-link" href="<?php echo esc_url( PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_RAVOLAT_ADDONS_OUR_URL ); ?>"><?php echo esc_html__( 'Learn more', 'pass-max' ); ?></a>
                                        </div>
                                    <?php } else { ?>
                                        <a class="standard-link" href="<?php echo esc_url( PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_RAVOLAT_ADDONS_ADMIN_OPTIONS_LINK ); ?>">
                                            <?php echo esc_html__( 'Customize plugin', 'pass-max' ); ?>
                                        </a>
                                    <?php } ?>
                                </div>
                            </div>
                        <?php } ?>

                        <?php if( class_exists( 'woocommerce' ) && PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_COMMERCE_TEXT_DOMAIN != $item || 
                                (PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_COMMERCE_TEXT_DOMAIN == $item && $render_this_item) ) { ?>
                            <div class="items-in-rows">
                                <div class="productiveminds_section-container columns_left_icon-50px closeup">
                                    <div>
                                        <a target="_blank" href="<?php echo esc_url( PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_COMMERCE_OUR_URL ); ?>">
                                            <img src="<?php echo esc_url( PRODUCTIVE_GLOBAL_ITEM_URL ) . 'assets/images/productivemedia/productive-commerce.webp' ?>" alt="" width="100%" height="auto" />
                                        </a>
                                    </div>
                                    <div>
                                        <div class="small-heading">
                                            <?php echo esc_html( PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_COMMERCE_TITLE ); ?>
                                        </div>
                                        <div class="small-text">
                                            <?php echo esc_html__( 'Wishlist, Compare, Quick View, MiniCart...', 'pass-max' ); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="productive-global-block-link-container">
                                    <?php if( !productive_global_is_productive_commerce_active() ) {
                                        $productive_item_slug = "productive-commerce";
                                        $productive_item_plugin_name = esc_html__( "Productive Commerce", 'pass-max' );
                                        $plugin_installed_not_active = productive_global_get_installed_plugin_path( $productive_item_slug );
                                        
                                        if( !empty($plugin_installed_not_active) && !productive_global_is_productive_commerce_active() ) {
                                            $action_name = 'productive_global_do_activate_plugin_ajax';
                                            $plugin_action = 'activate';
                                            $plugin_action_name_normal_cta = esc_html__( 'Activate', 'pass-max' );
                                            $plugin_action_name_notice_cta = esc_html__( 'Activating...', 'pass-max' );
                                            $plugin_action_name_success_cta = esc_html__( 'Activated', 'pass-max' );
                                        } 
                                        ?>
                                        <div style="padding: 10px 0 0;" class="productiveminds-alignable-container flexed flexed-in-a-flexed align-items-center align-content-center justify-content-flex-start justify-items-start row-gap-10px column-gap-15px">
                                            <a class="productive_admin_anchor_button global_install_plugin" 
                                                data-theme_slug="<?php echo esc_attr( $active_theme ); ?>" 
                                                data-plugin_slug="<?php echo esc_attr( $productive_item_slug ); ?>" 
                                                data-plugin_name="<?php echo esc_attr( $productive_item_plugin_name ); ?>" 
                                                data-action_name="<?php echo esc_attr( $action_name ); ?>" 
                                                data-plugin_action="<?php echo esc_attr( $plugin_action ); ?>" 
                                                data-item_installtion_normal_cta="<?php echo esc_attr( $plugin_action_name_normal_cta ); ?>" 
                                                data-item_installtion_notice_cta="<?php echo esc_attr( $plugin_action_name_notice_cta ); ?>" 
                                                data-item_installtion_success_cta="<?php echo esc_attr( $plugin_action_name_success_cta ); ?>" 
                                                data-silent_action="0" 
                                                data-confirm_action="location_assign" 
                                                data-confirm_action_delay="1000" 
                                                data-go_to_url="<?php echo esc_url( PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_COMMERCE_ADMIN_OPTIONS_LINK ); ?>" 
                                                href="#">
                                                    <?php echo esc_html( $plugin_action_name_normal_cta ); ?>
                                            </a>
                                            <a style="padding: 0;" target="_blank" class="standard-link" href="<?php echo esc_url( PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_COMMERCE_OUR_URL ); ?>"><?php echo esc_html__( 'Learn more', 'pass-max' ); ?></a>
                                        </div>
                                    <?php } else { ?>
                                        <a class="standard-link" href="<?php echo esc_url( PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_COMMERCE_ADMIN_OPTIONS_LINK ); ?>">
                                            <?php echo esc_html__( 'Customize plugin', 'pass-max' ); ?>
                                        </a>
                                    <?php } ?>
                                </div>
                            </div>
                        <?php } ?>

                        <?php if( PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_FORMS_TEXT_DOMAIN != $item || 
                                (PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_FORMS_TEXT_DOMAIN == $item && $render_this_item) ) { ?>
                            <div class="items-in-rows">
                                <div class="productiveminds_section-container columns_left_icon-50px closeup">
                                    <div>
                                        <a target="_blank" href="<?php echo esc_url( PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_FORMS_OUR_URL ); ?>">
                                            <img src="<?php echo esc_url( PRODUCTIVE_GLOBAL_ITEM_URL ) . 'assets/images/productivemedia/productive-forms.webp' ?>" alt="" width="100%" height="auto" />
                                        </a>
                                    </div>
                                    <div>
                                        <div class="small-heading">
                                            <?php echo esc_html( PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_FORMS_TITLE ); ?>
                                        </div>
                                        <div class="small-text">
                                            <?php echo esc_html__( 'Contact forms, Newsletter opt-ins...', 'pass-max' ); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="productive-global-block-link-container">
                                    <?php if( !productive_global_is_productive_forms_active() ) {
                                        $productive_item_slug = "productive-forms";
                                        $productive_item_plugin_name = esc_html__( "Productive Forms", 'pass-max' );
                                        $plugin_installed_not_active = productive_global_get_installed_plugin_path( $productive_item_slug );
                                        
                                        if( !empty($plugin_installed_not_active) && !productive_global_is_productive_forms_active() ) {
                                            $action_name = 'productive_global_do_activate_plugin_ajax';
                                            $plugin_action = 'activate';
                                            $plugin_action_name_normal_cta = esc_html__( 'Activate', 'pass-max' );
                                            $plugin_action_name_notice_cta = esc_html__( 'Activating...', 'pass-max' );
                                            $plugin_action_name_success_cta = esc_html__( 'Activated', 'pass-max' );
                                        }
                                        ?>
                                        <div style="padding: 10px 0 0;" class="productiveminds-alignable-container flexed flexed-in-a-flexed align-items-center align-content-center justify-content-flex-start justify-items-start row-gap-10px column-gap-15px">
                                            <a class="productive_admin_anchor_button global_install_plugin" 
                                                data-theme_slug="<?php echo esc_attr( $active_theme ); ?>" 
                                                data-plugin_slug="<?php echo esc_attr( $productive_item_slug ); ?>" 
                                                data-plugin_name="<?php echo esc_attr( $productive_item_plugin_name ); ?>" 
                                                data-action_name="<?php echo esc_attr( $action_name ); ?>" 
                                                data-plugin_action="<?php echo esc_attr( $plugin_action ); ?>" 
                                                data-item_installtion_normal_cta="<?php echo esc_attr( $plugin_action_name_normal_cta ); ?>" 
                                                data-item_installtion_notice_cta="<?php echo esc_attr( $plugin_action_name_notice_cta ); ?>" 
                                                data-item_installtion_success_cta="<?php echo esc_attr( $plugin_action_name_success_cta ); ?>" 
                                                data-silent_action="0" 
                                                data-confirm_action="location_assign" 
                                                data-confirm_action_delay="1000" 
                                                data-go_to_url="<?php echo esc_url( PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_FORMS_ADMIN_OPTIONS_LINK ); ?>" 
                                                href="#">
                                                    <?php echo esc_html( $plugin_action_name_normal_cta ); ?>
                                            </a>
                                            <a style="padding: 0;" target="_blank" class="standard-link" href="<?php echo esc_url( PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_FORMS_OUR_URL ); ?>"><?php echo esc_html__( 'Learn more', 'pass-max' ); ?></a>
                                        </div>
                                    <?php } else { ?>
                                        <a class="standard-link" href="<?php echo esc_url( PRODUCTIVE_GLOBAL_PRODUCTIVE_PLUGIN_FORMS_ADMIN_OPTIONS_LINK ); ?>">
                                            <?php echo esc_html__( 'Customize plugin', 'pass-max' ); ?>
                                        </a>
                                    <?php } ?>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
            <div class="clear_min"></div>
        </div>
    <?php
    }

    if( productive_global_is_pass_addons_active() || productive_global_is_ravolat_addons_active() || productive_global_is_productive_commerce_active() ) {
        function productive_global_render_search_popup() {
            global $productive_global_popup_transition_direction, $is_on_productive_global_popup_use_theme_style;
            ?>
            <div class="productive_search_button_popup_container productive_popup productive_popup_type_ii std_popup productive_theme_search_popup full_small_screen <?php echo esc_attr($is_on_productive_global_popup_use_theme_style); ?> can_keyup can_elsewhere center" id="productive_global_search_popup_container" data-enter-exit-transition-commerce="<?php echo esc_attr($productive_global_popup_transition_direction); ?>">
                <div class="productive_popup-overlay productive_theme_search_popup productiveminds-alignable-container align-items-center align-content-center justify-content-center justify-items-center">
                    <section class="productive_popup-body">
                        <div class="header-search">
                            <?php get_search_form( array( 'arial_label' => esc_html__( 'Search...', 'pass-max' ), ) ); ?>
                        </div>
                    </section>
                </div>
                <button aria-label="<?php echo esc_attr('Close Overlay', 'pass-max'); ?>" class="productive-popup-close-button productive-popup-close-button-ii right">
                    <?php productive_global_render_close_section_button( 16 ); ?>
                    <span class="screen-reader-text"><?php echo esc_html__('Close Overlay', 'pass-max'); ?></span>
                </button>
            </div>
        <?php
        }
        add_action('wp_footer', 'productive_global_render_search_popup');
    }
    
    function productive_global_is_a_productive_product( $str_name ) {
        if( !empty($str_name) && ( strpos( $str_name, "productive" ) !== false || strpos( $str_name, "pass_addons" ) !== false || strpos( $str_name, "ravolat_addons" ) !== false ||
                 strpos( $str_name, "stockist" ) !== false || strpos( $str_name, "magvalo" ) !== false || strpos( $str_name, "pass-max" ) !== false || strpos( $str_name, "ravolat" ) !== false || strpos( $str_name, "transact" ) !== false )
            ) {
            return true;
        }
        return false;
    }
    

    function productive_global_is_global_theme() {
    }
    
}
