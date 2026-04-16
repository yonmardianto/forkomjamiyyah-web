<?php
/**
 * @package     pass-max
 * @author      productiveminds.com
 * @copyright   productiveminds.com
 * 
 */

?>

<footer class="site-body-container footer-container extra-design-stockist <?php echo esc_attr( productive_passmax_footer_colour_tone() ); ?>">

    <div class="site-body-container_box footer_box_content">
        <div class="site-body-container_box_uno">
            <div class="productiveminds_double_grid column_70_30">
                <div class="blocked">
                    <div class="productiveminds_double_grid column_40_60">
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
                    
                        <div class="productiveminds-alignable-container flexed align-items-flex-start align-content-flex-start justify-content-center justify-items-center">
                            <div class="site-footer-menu">
                                <?php do_action( 'productive_passmax_display_footer_nav', 'site-footer-menu-nav-box' ); ?>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="site-footer-contact-info productiveminds-alignable-container flexed align-items-flex-start align-content-flex-start justify-content-flex-end justify-items-end">
                    <div class="">
                        <?php if ( productive_passmax_is_productive_forms_active() ) { ?>
                            
                            <?php if ( productive_passmax_enable_footer_business_address() ) { ?>
                                <div class="footer_section_container site-address">
                                    <?php do_action( 'productive_global_render_forms_contact_full_address_per_line' ); ?>
                                </div>
                            <?php } ?>
                            
                            <?php if ( productive_passmax_display_footer_phone_whatsapp_email() ) { ?>
                                <div class="footer_section_container tel_email">
                                    <?php do_action( 'productive_global_render_forms_contact_email_themes' ); ?>
                                </div>
                            <?php } ?>
                        <?php } ?>
                        
                        <?php if ( productive_passmax_enable_footer_business_hours() ) { ?>
                            <div class="site-footer-opening-times">
                                <div class="fs-l bolded_500"><?php do_action( 'productive_global_render_forms_contact_business_hours_heading' ); ?></div>
                                <div class=""><?php do_action( 'productive_global_render_forms_contact_business_hours_mon_fri' ); ?></div>
                            </div>
                        <?php } ?>
                        
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