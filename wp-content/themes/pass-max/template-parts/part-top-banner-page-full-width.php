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
$productive_passmax_page_banner_image = productive_passmax_page_banner_image();
$top_banner_title_css_style = productive_passmax_top_banner_title_css_style();
$productive_passmax_page_banner_thumbnail = productive_global_get_attachment_url_by_attachment_id( $productive_passmax_page_banner_image, PRODUCTIVE_PASSMAX_PLACEHOLDER_IMAGE_TOP_BANNER_ALL );
$excerpt_word_count = intval( productive_passmax_posts_excerpt_word_count() );
?>
<?php do_action( 'productive_global_render_content_wrapper_full_full_top' ); ?>
    <div class="productiveminds_banner_container top_banner container_with_bg_image full_width_top_banner full_template_title_on_header page-or-post productiveminds-alignable-container <?php echo productive_passmax_top_banner_alignment_v(); ?>" style="background-image: url(<?php echo esc_url( $productive_passmax_page_banner_thumbnail ); ?>); height: <?php echo esc_attr( productive_passmax_top_banner_height() ); ?>px">
        <div class="productiveminds_banner_container_content_bg_overlay"></div>
        <div class="productiveminds-alignable-container_uno productiveminds_banner_container_content_bg_overlay_content">
            <?php do_action( 'productive_global_render_content_wrapper_full_top', 'top_banner-wrapper ' . productive_passmax_top_banner_alignment_h() ); ?>
            <div class="productiveminds_banner_container_content">
                <h1 class="<?php echo esc_attr($top_banner_title_css_style); ?>"><?php echo wp_kses_post( get_the_title() ); ?></h1>
                <?php if( 'post' == get_post_type() ) { ?>
                <div class="productiveminds_banner_container_content_desc">
                    <?php echo wp_trim_words( get_the_excerpt(), $excerpt_word_count ); ?>
                </div>
                <?php } ?>
            </div>
            <?php do_action('productive_global_render_content_wrapper_full_bottom'); ?>
        </div>
    </div>
<?php do_action('productive_global_render_content_wrapper_full_full_bottom'); ?>

<?php 
    if( 'hide_top_banner' != PRODUCTIVE_PASSMAX_CUSTOMIZER_show_top_banner ) {
        do_action( 'productive_breadcrumb_render' ); 
    }
?>

<?php
