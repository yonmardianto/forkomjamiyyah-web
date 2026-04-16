<?php
/**
 * @package     pass-max
 * @author      productiveminds.com
 * @copyright   productiveminds.com
*/ 

function productive_passmax_render_content_media_standard( $is_search_result_page = false, $section_show_search_result_post_type = 0, $is_link_to_post_page = 1 ) {
?>
    <div class="productiveminds_section-single-item-media productiveminds-alignable-container">
        <?php 
        if ( $is_link_to_post_page && has_post_thumbnail() ) { ?>
            <a href="<?php echo esc_url( get_permalink() ); ?>"><?php _productive_passmax_render_content_media_standard( 0 ); ?></a>
        <?php } else if( !$is_link_to_post_page ) { ?>
            <?php _productive_passmax_render_content_media_standard( 0 ); ?>
        <?php } ?>
        <?php if ( $is_search_result_page && $section_show_search_result_post_type ) { ?>
        <div class="search-result-page-post-type">
            <?php echo _productive_passmax_get_search_result_page_post_type(); ?>
        </div>
        <?php } ?>
    </div>
<?php
}

function _productive_passmax_render_content_media_standard( $render_placeholder = 0 ) {
    if ( has_post_thumbnail() ) {
        $attr = array (
            'alt' => get_the_title(),
        );
        the_post_thumbnail( 'full', $attr );
    } else {
        if( $render_placeholder ) {
            $post_thumbnail_id = productive_passmax_posts_placeholder_image();
            if( !intval( $post_thumbnail_id ) ) {
                return;
            }
            $thumbnail_image = productive_global_get_attachment_url_by_attachment_id( $post_thumbnail_id, PRODUCTIVE_PASSMAX_PLACEHOLDER_IMAGE_POSTS );
            $args = array(
                'post_id'           => get_the_ID(),
                'default_image_url' => $thumbnail_image,
                'alt'               => get_the_title(),
                'type'              => 'full',
            );
            do_action( 'productive_global_render_post_thumbnail', $args );
        }
    }
}

function _productive_passmax_get_search_result_page_post_type() {
    if( 'post' == get_post_type() ) {
        return esc_html__('blog', 'pass-max');
    }
    return get_post_type();
}
