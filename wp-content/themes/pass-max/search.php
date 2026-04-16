<?php
/**
 * Search page.
 *
 * @package     pass-max
 * @author      productiveminds.com
 * @copyright   productiveminds.com
 * 
 */

get_header();

$productive_passmax_show_top_banner = PRODUCTIVE_PASSMAX_CUSTOMIZER_show_top_banner;
$productiveminds_theme_layout = PRODUCTIVE_PASSMAX_CUSTOMIZER_template_layout_options;
?>

<main class="site-body-container main-container" id="site-content">
    
    <?php 
        if( 'full_width_top_banner' == $productive_passmax_show_top_banner ) {
            get_template_part( 'template-parts/part-top-banner-search-result', 'top' );
        }
    ?>

    <?php do_action('productive_global_render_content_wrapper_standard_top'); ?>
    
    <div class="productiveminds_section-container main-container-box <?php echo esc_attr( $productiveminds_theme_layout ); ?>">

        <?php do_action( 'productive_global_render_sidebar_left', $productiveminds_theme_layout ); ?>

        <div class="productive-sidebar-main">
            <?php 
                if( 'page_width_top_banner' == $productive_passmax_show_top_banner ) {
                    get_template_part( 'template-parts/part-top-banner-search-result', 'top' );
                } else if( 'hide_top_banner' == $productive_passmax_show_top_banner ) {
                    do_action('productive_global_render_search_result_title');
                }
            ?>
            <?php if ( trim( get_search_query() ) != '' && $wp_query->found_posts > 0 ) { ?>
                <?php
                    $is_blog_block = 0;
                    $is_search_result_page = 1;
                    $section_show_search_result_post_type = 1;
                    $section_show_section_header = 0;
                    productive_passmax_render_content_archive_item_blog( $is_blog_block, $is_search_result_page, $section_show_search_result_post_type, $section_show_section_header );
                ?>					
                <?php productive_global_paginate_links(); ?>
            <?php } else { ?>
                    <?php // no result. ?>
                    <div>
                            <?php get_template_part( 'template-parts/part-page-none' ); ?>
                    </div>
            <?php } ?>
        </div>

        <?php do_action( 'productive_global_render_sidebar_right', $productiveminds_theme_layout ); ?>

    </div>
    
    <?php do_action('productive_global_render_content_wrapper_standard_bottom'); ?>
    
</main>  

<?php
get_footer();