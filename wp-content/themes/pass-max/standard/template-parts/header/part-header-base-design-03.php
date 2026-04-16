<?php
/**
 * Header page.
 *
 * @package     pass-max
 * @author      productiveminds.com
 * @copyright   productiveminds.com
 * 
 */

$is_productive_passmax_has_custom_logo = has_custom_logo();
$productive_passmax_is_custom_logo_text = '';
if( !$is_productive_passmax_has_custom_logo ) {
    $productive_passmax_is_custom_logo_text = 'is_custom_logo_text';
}
$productive_passmax_customiser_show_search            = productive_passmax_enable_header_search();
$productive_passmax_customiser_show_account_icon      = productive_passmax_enable_header_account();
?>

<header class="site-body-container header-container extra-base-design-03">
        
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
                <div class="productiveminds-alignable-container header-container-inner-box flexed align-items-center align-content-center justify-content-flex-end justify-items-end column-gap-20px row-gap-5px">
                    <div class="site-header-menu flexed-autoed hide-below-landscape-mobile">
                        <div class="productiveminds-alignable-container flexed flexed-in-a-flexed align-items-center align-content-center justify-content-flex-start justify-items-start column-gap-50px row-gap-5px">
                            <?php do_action( 'productive_passmax_render_header_nav', 'site-header-menu-nav site_header_nav_big_screen' ); ?>
                        </div>
                    </div>
                    <div class="header-icons">
                        <div class="header-icons-items productiveminds-alignable-container flexed flexed-in-a-flexed justify-content-flex-end row-gap-5px column-gap-10px righted">
                            
                            <?php do_action( 'productive_passmax_display_power_button_title', 'hide-below-landscape-mobile' ); ?>
                                
                            <?php if( $productive_passmax_customiser_show_account_icon ) { ?>
                                <span class="header-icons-items-space-left productiveminds-alignable-container flexed flexed-in-a-flexed justify-content-flex-end row-gap-5px column-gap-20px">
                                    
                                    <?php if ( $productive_passmax_customiser_show_account_icon ) { ?>
                                        <?php do_action('productive_passmax_render_my_account_header_button'); ?>
                                    <?php } ?>
                                </span>
                            <?php } ?>
                            
                            <?php if ( $productive_passmax_customiser_show_search ) { ?>
                                <span class="productiveminds_standard_header_button search search_icon_righted hide-below-landscape-mobile">
                                    <?php do_action('productive_global_display_theme_search_icon', 'search_icon_right'); ?>
                                </span>
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
    
    <?php
        if( ( function_exists('pass_addons_is_active') && PRODUCTIVE_PASSMAX_CUSTOMIZER_breadcrumb_switch_on ) && 'hide_top_banner' == PRODUCTIVE_PASSMAX_CUSTOMIZER_show_top_banner ) {
            do_action('productive_breadcrumb_render');
        }
    ?>
</header>
