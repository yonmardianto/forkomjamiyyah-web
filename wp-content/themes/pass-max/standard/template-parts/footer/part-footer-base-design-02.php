<?php
/**
 * @package     pass-max
 * @author      productiveminds.com
 * @copyright   productiveminds.com
 * 
 */

?>

<footer class="site-body-container footer-container theme-default <?php echo esc_attr( productive_passmax_footer_colour_tone() ); ?>">

    <div class="site-body-container_box footer_box_content">
        <div class="site-body-container_box_uno">
            <div class="productiveminds_double_grid column_65_35">
                <div class="site-footer-menu">
                    <?php do_action( 'productive_passmax_display_footer_nav', 'site-footer-menu-nav-box' ); ?>
                </div>
                <div class="footer-site-identity">
                    <?php if ( productive_passmax_enable_footer_sitelogo_enabled() || productive_passmax_enable_footer_sitename_enabled() || productive_passmax_enable_footer_sitedesc_enabled() ) { ?>
                        <div class="footer_section_container">
                            <?php do_action( 'productive_passmax_display_enable_footer_sitelogo' ); ?>
                            <?php do_action( 'productive_passmax_display_enable_footer_sitename' ); ?>
                            <?php do_action( 'productive_passmax_display_enable_footer_sitedesc' ); ?>
                        </div>
                    <?php } ?>
                    
                    <?php if ( productive_passmax_is_productive_forms_active() && productive_passmax_display_footer_phone_whatsapp_email() ) { ?>
                        <div class="footer_section_container tel_email">
                            <?php do_action( 'productive_forms_render_contact_email_and_phone_themes' ); ?>
                        </div>
                    <?php } ?>
                    
                    <?php if ( productive_passmax_display_footer_social_media_icons() ) { ?>
                        <div class="footer_section_container social-media">
                            <?php do_action( 'productive_global_render_social_media_follow_icons_footer', 'top' ); ?>
                        </div>
                    <?php } ?>
                    
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