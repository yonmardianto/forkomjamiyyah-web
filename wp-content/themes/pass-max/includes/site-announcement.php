<?php
/**
 * Header page.
 * 
 * @package     pass-max
 * @author      productiveminds.com
 * @copyright   productiveminds.com
 */

function productive_passmax_render_site_announcement() {
    if( !productive_passmax_announcement_switch_on() ) {
        return;
    }
    $productive_passmax_announcement_banner_alignment = productive_passmax_announcement_banner_alignment();

    $attachment_id = productive_passmax_announcement_banner_bg_image();
    $productive_passmax_announcement_banner_bg_image = '';
    if( $attachment_id ) {
        $productive_passmax_announcement_banner_bg_image = productive_global_get_attachment_url_by_attachment_id( $attachment_id, PRODUCTIVE_PASSMAX_HOMEPAGE_USP_IMAGE_REMOTE );
    }

    $productive_passmax_announcement_cta_position = productive_passmax_announcement_cta_position();

    ?>

    <?php if( $attachment_id && !empty($productive_passmax_announcement_banner_bg_image) ) { ?>
    <div class="site-body-container_box_full header-announcement-container container_with_bg_image" style="background-image: url(<?php echo esc_url( $productive_passmax_announcement_banner_bg_image ); ?>)">
    <?php } else { ?> 
    <div class="site-body-container_box_full header-announcement-container">
    <?php } ?> 
        <div class="site-body-container_box">
            <div class="site-body-container_box_uno">
                <div class="announcement-container announcement-text-container productiveminds-alignable-container flexed align-items-center align-content-center <?php echo esc_attr($productive_passmax_announcement_banner_alignment) ?>">
                    <?php if( 'left' == $productive_passmax_announcement_cta_position ) { ?>
                        <?php do_action( 'productive_passmax_display_announcement_cta_text'); ?>
                    <?php } ?>

                    <?php echo productive_passmax_announcement_copy(); ?> 

                    <?php if( 'right' == $productive_passmax_announcement_cta_position ) { ?>
                        <?php do_action( 'productive_passmax_display_announcement_cta_text'); ?>
                    <?php } ?>
                </div>
            </div>
        </div>
        <button aria-label="<?php echo esc_attr('Close Overlay', 'pass-max'); ?>" class="productive-block-close-button right">
            <?php productive_global_render_close_section_button( 16, false, '', 'no-bg' ); ?>
            <span class="screen-reader-text"><?php echo esc_html__('Close Overlay', 'pass-max'); ?></span>
        </button>
    </div>
    <?php
}
add_action( 'productive_passmax_render_site_announcement', 'productive_passmax_render_site_announcement' );
