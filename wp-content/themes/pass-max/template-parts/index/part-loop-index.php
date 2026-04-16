<?php
/**
 * Part template
 *
 * @package     pass-max
 * @author      productiveminds.com
 * @copyright   productiveminds.com
 * 
 */

// Remove the Archive Title Prefix such as 'category:' from archives
if ( is_archive() ) {
    add_filter("get_the_archive_title_prefix", "__return_empty_string");
}

$productive_passmax_show_top_banner = PRODUCTIVE_PASSMAX_CUSTOMIZER_show_top_banner;
$productiveminds_theme_layout = productive_passmax_show_sidebars_always_in_blog_archives();
if( 'two_columns_right' == $productiveminds_theme_layout && !is_active_sidebar(PRODUCTIVE_PASSMAX_RIGHT_SIDEBAR_ID) ) {
    $productiveminds_theme_layout = 'one_column';
} else if( ('two_columns_left' == $productiveminds_theme_layout && !is_active_sidebar(PRODUCTIVE_PASSMAX_LEFT_SIDEBAR_ID) ) || ('three_columns' == $productiveminds_theme_layout && (!is_active_sidebar(PRODUCTIVE_PASSMAX_LEFT_SIDEBAR_ID) || !is_active_sidebar(PRODUCTIVE_PASSMAX_RIGHT_SIDEBAR_ID)) ) ) {
    $productiveminds_theme_layout = 'one_column';
}
?>

<?php 
    if( 'full_width_top_banner' == $productive_passmax_show_top_banner ) {
        get_template_part( 'template-parts/part-top-banner-archive-post', 'top' );
    }
?>

<?php do_action('productive_global_render_content_wrapper_standard_top'); ?>
    
    <div class="productiveminds_section-container main-container-box <?php echo esc_attr( $productiveminds_theme_layout ); ?> <?php echo productive_passmax_blog_archives_style(); ?>">
        
        <?php do_action( 'productive_global_render_sidebar_left', $productiveminds_theme_layout ); ?>
        
        <div class="productive-sidebar-main">
            
            <?php 
                if( 'page_width_top_banner' == $productive_passmax_show_top_banner ) {
                    get_template_part( 'template-parts/part-top-banner-archive-post', 'top' );
                } else if( 'hide_top_banner' == $productive_passmax_show_top_banner ) { ?>
                    <?php do_action('productive_global_render_content_wrapper_full_top'); ?>
                        <div class="productiveminds_banner_container_content">
                            <?php if( is_author() ) { ?>
                                <?php productive_passmax_render_post_author_in_archive(); ?>
                            <?php } else { ?>
                                <h1><?php echo wp_kses_post( get_the_archive_title() ); ?></h1>
                                <div class="productiveminds_container_content_desc"><?php echo wp_kses_post(get_the_archive_description() ); ?></div>
                            <?php } ?>
                        </div>
                    <?php do_action('productive_global_render_content_wrapper_full_bottom'); ?>
                <?php }
            ?>
            
            <?php
                $is_blog_block = 1;
                $is_search_result_page = 0;
                $section_show_search_result_post_type = 0;
                $section_show_section_header = 0;
                productive_passmax_render_content_archive_item_blog( $is_blog_block, $is_search_result_page, $section_show_search_result_post_type, $section_show_section_header );
            ?>
            <?php productive_global_paginate_links(); ?>
        </div>
        
        <?php do_action( 'productive_global_render_sidebar_right', $productiveminds_theme_layout ); ?>
        
    </div>
    
<?php do_action('productive_global_render_content_wrapper_standard_bottom');


function productive_passmax_render_post_author_in_archive() {
    ?>
    <div class="productive-author-page-block productiveminds-alignable-container align-items-center align-content-center justify-items-center row-gap-20px">
        <?php 
        if( is_author() && get_option( 'show_avatars' ) ) { ?>
            <div class="author-media">
                <?php $page_author_email_address = get_the_author_meta( 'user_email' ); ?>
                <?php echo get_avatar( $page_author_email_address, 150, '' ); ?>
            </div>
        <?php } ?>

        <div class="author-name"><?php echo wp_kses_post( get_the_archive_title() ); ?></div>

        <div class="productiveminds_container_content_desc author-desc">
            <?php 
            if( is_author() ) {
                echo wp_kses_post( get_the_author_meta( 'user_description' ) );
            } else {
                echo wp_kses_post( get_the_archive_description() );
            } ?>
        </div>
    </div>
    <?php
}

