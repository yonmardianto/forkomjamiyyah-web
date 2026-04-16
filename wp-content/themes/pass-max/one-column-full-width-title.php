<?php
/**
 * Template Name: Full Width, With Title on Top Banner
 * Template Post Type: post, page
 *
 * @package     pass-max
 * @author      productiveminds.com
 * @copyright   productiveminds.com
 * 
 */

get_header();

$productive_passmax_show_top_banner = PRODUCTIVE_PASSMAX_CUSTOMIZER_show_top_banner;

while ( have_posts() ) {
    the_post();
?>
    <main class="site-body-container main-container" id="site-content">
        <?php get_template_part( 'template-parts/part-top-banner-page-full-width', 'top' ); ?>
        <?php 
            if ( 'post' === get_post_type() ) {
                get_template_part( 'template-parts/part-page-single-post' ); 
            } else {
                $part_page_args = array(
                    'is_no_title' => 1,
                );
                get_template_part( 'template-parts/part-page', '', $part_page_args );
            }
        ?>
    </main>
<?php
}
wp_reset_postdata();

get_footer();
