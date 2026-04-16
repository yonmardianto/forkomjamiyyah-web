<?php
/**
 * @package     pass-max
 * @author      productiveminds.com
 * @copyright   productiveminds.com
 * 
 */
    
    $footer_outer_container_split = 'column_50_50';
    $footer_inner_container_split = 'column_90_10';
    $footer_nav_menu_justify = 'justify-content-flex-start justify-items-start';
    if( productive_passmax_is_productive_forms_active() && productive_forms_newsletter_switch_on() ) {
        $footer_outer_container_split = 'column_60_40';
        $footer_inner_container_split = 'column_50_50';
        $footer_nav_menu_justify = 'justify-content-flex-end justify-items-end';
    }
?>

<footer class="site-body-container footer-container theme-default <?php echo esc_attr( productive_passmax_footer_colour_tone() ); ?>">

    <div class="site-body-container_box footer_box_content">
        <div class="site-body-container_box_uno">
            <div class="productiveminds_double_grid <?php echo esc_attr($footer_outer_container_split); ?>">
                <div class="blocked">
                    <div class="productiveminds_double_grid  <?php echo esc_attr($footer_inner_container_split); ?>">
                        <div class="footer-site-identity">
                            <?php if ( productive_passmax_enable_footer_sitelogo_enabled() || productive_passmax_enable_footer_sitename_enabled() || productive_passmax_enable_footer_sitedesc_enabled() ) { ?>
                                <div class="footer_section_container">
                                    <?php do_action( 'productive_passmax_display_enable_footer_sitelogo' ); ?>
                                    <?php do_action( 'productive_passmax_display_enable_footer_sitename' ); ?>
                                    <?php do_action( 'productive_passmax_display_enable_footer_sitedesc' ); ?>
                                </div>
                            <?php } ?>
                            
                            <?php if ( productive_passmax_display_footer_social_media_icons() ) { ?>
                                <div class="footer_section_container social-media">
                                    <?php do_action( 'productive_global_render_social_media_follow_icons_footer', 'top' ); ?>
                                </div>
                            <?php } ?>
                            
                        </div>
                    
                        <div class="site-footer-contact-info productiveminds-alignable-container align-items-flex-start align-content-flex-start justify-content-center justify-items-center row-gap-20px">
                            <?php if ( productive_passmax_is_productive_forms_active() ) { ?>
                                <div class="footer_section_container newsletter">
                                    <?php do_action( 'productive_passmax_display_newsletter_section_inline', array( 'display_email_field_only' => 1 ) ); ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    
                </div>
                <div class="productiveminds-alignable-container flexed align-items-flex-start align-content-flex-start <?php echo esc_attr($footer_nav_menu_justify); ?>">
                    <div class="site-footer-menu">
                        <?php do_action( 'productive_passmax_display_footer_nav', 'site-footer-menu-nav-box' ); ?>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
    <div class="site-body-container_box_full site-body-container_box_copyright">
        <?php do_action('productive_global_render_content_wrapper_standard_top'); ?>
            <?php 
                if ( function_exists( 'productiveminds_theme_extra_is_active' ) ) {
                    do_action( 'productive_passmax_display_enable_footer_copyright_extra' );
                } else {
                    do_action( 'productive_passmax_display_enable_footer_copyright' );
                }
            ?>
        <?php do_action('productive_global_render_content_wrapper_standard_bottom'); ?>
    </div>
    
    <?php do_action('productive_global_render_footer_below_copyright_textarea'); ?>

</footer>