<?php
/**
 *
 * @package     pass-max
 * @author      productiveminds.com
 * @copyright   productiveminds.com
 * 
 */

if ( !defined('ABSPATH') ) {
	die();
}

require PRODUCTIVE_PASSMAX_THEME_BASE_PATH . '/admin/common/options/partials/theme-dashboard.php';
require PRODUCTIVE_PASSMAX_THEME_BASE_PATH . '/standard/options/partials/section-go-pro.php';
require PRODUCTIVE_PASSMAX_THEME_BASE_PATH . '/includes/productiveminds-theme-dashboad-items.php';

/**
 * Render Pages and Menus
 */
function productive_passmax_plugin_options_render_page_menu() {
    
    $productive_passmax_admin_navbar_title = PRODUCTIVE_PASSMAX_CURRENT_THEME_NAME . esc_html__( ' Admin Settings and Options', 'pass-max' );
    $productive_passmax_admin_topmenu_title   = esc_html__( 'Productive...', 'pass-max' );
    
    $menu_title         = esc_html__( 'Theme Dashboard', 'pass-max' );
    $capability         = 'manage_options';
    $position           = 100;
    $icon_url           = 'dashicons-carrot';
    $position_global    = 60; // Just after the Appearnce Page Menu
    
    add_theme_page( 
        $productive_passmax_admin_navbar_title, 
        $menu_title, 
        $capability, 
        PRODUCTIVE_PASSMAX_ADMIN_PAGE_REQUEST_URI, 
        'productive_passmax_plugin_options_render_page_menu_html', 
        $position
    );
    
}
add_action( 'admin_menu', 'productive_passmax_plugin_options_render_page_menu' );


function productive_passmax_plugin_options_render_page_menu_html() {
    // check user capabilities
    if ( !current_user_can( 'manage_options' ) ) {
        add_settings_error( 'productive_passmax_admin_messages', 'productive_passmax_admin_message', esc_html__( 'You do not have permission to access this page.', 'pass-max' ), 'error' );
        settings_errors( 'productive_passmax_admin_messages' );
    } else {
            
    // check if the user have submitted the settings
    $is_error_count_section_1 = count( get_settings_errors('productiveminds_section_1_options') );
    if ( isset( $_GET['settings-updated'] ) && $is_error_count_section_1 < 1 ) {
        // add settings saved message with the class of "updated"
        add_settings_error( 'productive_passmax_admin_messages', 'productive_passmax_admin_message', esc_html__( 'Settings Saved', 'pass-max' ), 'updated' );
    }
    settings_errors( 'productive_passmax_admin_messages' );
    
    ?>
    <?php 
        $active_tab = 'section_about_options_tab';
        if( isset( $_GET[ 'tab' ] ) ) {
            $active_tab = sanitize_text_field( $_GET[ 'tab' ] );
        }
        $section_about_options_tab = '';
        if ( $active_tab === 'section_about_options_tab' ) {
            $section_about_options_tab = 'nav-tab-active';
        }
        $section_pro_options_tab_active = '';
        if ( $active_tab === 'section_pro_options_tab' ) {
            $section_pro_options_tab_active = 'nav-tab-active';
        }
    ?>

    <div class="wrap productive-global-options-page-wrapper">
        <div class="page-wrapper-heading-container">
            <div class="page-wrapper-heading">
                <h1>
                    <div class="bolded productiveminds-alignable-container flexed-no-wrap align-items-center align-content-center justify-content-flex-start justify-items-start row-gap-10px column-gap-30px">
                        <div class="bolded productiveminds-alignable-container flexed flexed-no-wrap flexed-in-a-flexed align-items-center align-content-center justify-content-flex-start justify-items-start gap-5px">
                            <img style="vertical-align: middle; margin-right: 10px; border-radius: 5px;" src="<?php echo PRODUCTIVE_PASSMAX_THEME_BASE_URI . '/screenshot.png' ?>" alt="" width="40px" height="auto" />
                            <?php echo PRODUCTIVE_PASSMAX_CURRENT_THEME_NAME; ?>
                        </div>
                        <div>
                            <a href="?page=<?php echo PRODUCTIVE_PASSMAX_ADMIN_PAGE_REQUEST_URI; ?>&tab=section_about_options_tab" class="page-wrapper-heading-get-pro margin-zero <?php echo esc_attr( $section_about_options_tab ); ?>"><?php echo esc_html__( 'Theme Dashboard', 'pass-max' ); ?></a>
                            <a href="?page=<?php echo PRODUCTIVE_PASSMAX_ADMIN_PAGE_REQUEST_URI; ?>&tab=section_pro_options_tab" class="page-wrapper-heading-get-pro margin-zero <?php echo esc_attr( $section_pro_options_tab_active ); ?>"><?php echo esc_html__( 'Free vs Pro', 'pass-max' ); ?></a>
                        </div>
                    </div>
                </h1>
            </div>
            <div class="page-wrapper-heading-version">
                <div><?php echo 'v' . PRODUCTIVE_PASSMAX_VERSION; ?></div>
            </div>
        </div>
        <div class="page-wrapper-body">
                
            <div class="page-wrapper-options-error">
                <?php settings_errors('productiveminds_section_1_options'); ?>
                <?php settings_errors('productiveminds_section_pro_options'); ?>
            </div>
            
            <div class="page-wrapper-body-form">
                
                <?php if ( $active_tab === 'section_about_options_tab' ) { ?>
                    <div class="productiveminds_double_grid column_70_30">
                        <div class="productiveminds_double_grid_content">
                            <?php
                                productive_passmax_theme_dashboard_section_intro();
                                productive_passmax_theme_dashboard_section_customizers();
                            ?>
                        </div>
                        <div class="productiveminds_double_grid_content">
                            <?php
                                $title = esc_html__( 'Harmonious Plugins', 'pass-max' );
                                productive_global_admin_sidebar_our_plugins_section( PRODUCTIVE_GLOBAL_PRODUCTIVE_THEME_PASSMAX_TEXT_DOMAIN, $title );
                                productive_global_admin_sidebar_about_section( PRODUCTIVE_GLOBAL_PRODUCTIVE_THEME_PASSMAX_TEXT_DOMAIN, 'theme' );
                            ?>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="productive-global-item-container">
                        
                        <?php if ( $active_tab === 'section_pro_options_tab' ) { ?>
                            <?php
                                productiveminds_section_get_pro();
                           ?>
                        <?php } ?>
                        
                    </div>
                <?php } ?>
            </div>
            
            <div class="leave-a-review-box">
                <?php echo esc_html__( 'Support our efforts, interact with fellow users, and contribute to enhancing ', 'pass-max' ); ?>
                <?php echo PRODUCTIVE_PASSMAX_CURRENT_THEME_NAME; ?>.
                <a target="_blank" href="<?php echo PRODUCTIVE_PASSMAX_THEME_REVIEW_ON_REPO_URL; ?>">
                    <?php echo esc_html__( 'Kindly submit a review', 'pass-max' ); ?>
               </a>
            </div>

        </div>
    </div>

    <?php
    }
}
