<?php
/**
 * Header page.
 *
 * @package     pass-max
 * @author      productiveminds.com
 * @copyright   productiveminds.com
 * 
 */

$productive_passmax_customiser_show_search            = productive_passmax_enable_header_search();
$productive_passmax_customiser_show_account_icon      = productive_passmax_enable_header_account();
$productive_passmax_is_any_productive_commerce_plugin_header_button_active = productive_passmax_is_any_productive_commerce_plugin_header_button_active();

$is_productive_passmax_has_custom_logo = has_custom_logo();
$productive_passmax_is_custom_logo_text = '';
if( !$is_productive_passmax_has_custom_logo ) {
    $productive_passmax_is_custom_logo_text = 'is_custom_logo_text';
}

?>

<header class="site-body-container header-container theme-default">
        
    <?php do_action( 'productive_passmax_render_site_announcement' ); ?>
    
    <?php
        if( productive_passmax_is_productive_forms_active() && PRODUCTIVE_PASSMAX_CUSTOMIZER_header_contact_section_switch_on ) {
            do_action('productive_forms_actn_header_contact_section');
        }
    ?>
    <div class="site-body-container_box align-items-center">
        <div class="site-body-container_box_uno relatived">
            
            <div class="productiveminds-alignable-container header-container-box align-items-center align-content-center column-gap-50px <?php echo esc_attr( $productive_passmax_is_custom_logo_text ); ?>">
                <div class="header-logo header-site-identity productiveminds-alignable-container align-items-center align-content-center">
                    <?php if ( ! $is_productive_passmax_has_custom_logo ) { ?>
                        <a class="logo-text" href="<?php echo esc_url( home_url() ); ?>" >
                            <span class="logo-text-name"><?php bloginfo( 'name' ); ?></span><span class="logo-text-desc"><?php bloginfo( 'description' ); ?></span>
                        </a>
                    <?php } else { ?>
                        <?php productive_passmax_the_custom_logo(); ?>
                    <?php } ?>
                </div>
                <div class="productiveminds-alignable-container header-container-inner-box align-items-center align-content-center">
                    <div class="header-search hide-below-landscape-mobile productiveminds-alignable-container place-items-center place-content-center">
                        <?php
                            if ( $productive_passmax_customiser_show_search ) {
                                get_search_form(
                                    array(
                                        'arial_label' => esc_html__( 'Search...', 'pass-max' ),
                                    )
                               );
                            }
                        ?>
                    </div>
                    <div class="header-icons">
                        <div class="header-icons-items productiveminds-alignable-container flexed justify-content-flex-end justify-items-end row-gap-5px column-gap-20px">
                            
                            <?php if ( $productive_passmax_customiser_show_account_icon ) { ?>
                                <?php do_action('productive_passmax_render_my_account_header_button'); ?>
                            <?php } ?>
                              
                            <?php
                                if( 'hide_navicon' != productive_passmax_header_navicon_style() ) {
                                    do_action( 'productive_passmax_render_theme_navicon_std', 'hide-above-landscape-mobile' );
                                }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-body-container_box_full header-site-menu-bar-bg hide-below-landscape-mobile">
        <div class="site-body-container_box">
            <div class="site-body-container_box_uno">
                <div class="productiveminds-alignable-container flexed align-items-center align-content-center column-gap-20px justify-content-flex-end justify-items-end row-gap-5px">
                    <div class="site-header-menu flexed-autoed">
                        <?php do_action( 'productive_passmax_render_header_nav', 'site-header-menu-nav site_header_nav_big_screen' ); ?>
                    </div>
                    <?php if ( $productive_passmax_is_any_productive_commerce_plugin_header_button_active ) { ?>
                    <div class="header-icons-items productiveminds-alignable-container flexed flexed-in-a-flexed justify-content-flex-end justify-items-end row-gap-5px column-gap-10px">
                        <?php do_action( 'productive_passmax_render_our_commerce_header_buttons', 'smaller_icon_location' ); ?>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    
    <?php
        $productive_passmax_is_breadcrumb_active = ( function_exists('pass_addons_is_active') && PRODUCTIVE_PASSMAX_CUSTOMIZER_breadcrumb_switch_on );
        $productive_passmax_is_hide_top_banner_sitewide = 'hide_top_banner' == PRODUCTIVE_PASSMAX_CUSTOMIZER_show_top_banner;
        $productive_passmax_is_hide_top_banner_on_product_page = (!productive_passmax_show_top_banner_product_details() && productive_passmax_is_product() );
        if( $productive_passmax_is_breadcrumb_active && ($productive_passmax_is_hide_top_banner_sitewide || $productive_passmax_is_hide_top_banner_on_product_page) ) {
            do_action('productive_breadcrumb_render');
        }
    ?>
</header>
