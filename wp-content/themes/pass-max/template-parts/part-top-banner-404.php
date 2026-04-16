<?php
/**
 * Part template
 *
 * @package     pass-max
 * @author      productiveminds.com
 * @copyright   productiveminds.com
 * 
 */
?>

<?php
$switch_on_404_banner = productive_passmax_404_banner_switch_on();
if( $switch_on_404_banner ) {
    $post_thumbnail_id = productive_passmax_404_banner_image();
    $top_banner_title_css_style = productive_passmax_top_banner_title_css_style();
    $thumbnail_image = productive_global_get_attachment_url_by_attachment_id( $post_thumbnail_id, PRODUCTIVE_PASSMAX_PLACEHOLDER_IMAGE_TOP_BANNER_404 );
    ?>
    <?php do_action('productive_global_render_content_wrapper_full_full_top'); ?>
        <div class="productiveminds_banner_container top_banner container_with_bg_image four-zero-four-banner productiveminds-alignable-container <?php echo productive_passmax_top_banner_alignment_v(); ?>" style="background-image: url(<?php echo esc_url( $thumbnail_image ); ?>); height: <?php echo esc_attr( productive_passmax_top_banner_height() ); ?>px">
            <div class="productiveminds_banner_container_content_bg_overlay"></div>
            <div class="productiveminds-alignable-container_uno productiveminds_banner_container_content_bg_overlay_content">
                <?php do_action( 'productive_global_render_content_wrapper_full_top', 'top_banner-wrapper ' . productive_passmax_top_banner_alignment_h() ); ?>
                <div class="productiveminds_banner_container_content">
                    <h1 class="<?php echo esc_attr($top_banner_title_css_style); ?>"><?php echo productive_passmax_404_page_title(); ?></h1>
                </div>
                <?php do_action('productive_global_render_content_wrapper_full_bottom'); ?>
            </div>
        </div>
    <?php do_action('productive_global_render_content_wrapper_full_full_bottom');
}
