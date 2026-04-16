<?php
/**
 * Default Page
 *
 * @package     pass-max
 * @author      productiveminds.com
 * @copyright   productiveminds.com
 * 
 */

get_header();

$productive_passmax_show_top_banner = PRODUCTIVE_PASSMAX_CUSTOMIZER_show_top_banner;
$productiveminds_theme_layout = PRODUCTIVE_PASSMAX_CUSTOMIZER_template_layout_options;
while ( have_posts() ) {
    the_post();
?>
    <main class="site-body-container main-container" id="site-content">
        <?php
            if( 'full_width_top_banner' == $productive_passmax_show_top_banner ) {
                get_template_part( 'template-parts/part-top-banner-page', 'top' );
            }
        ?>
        <?php do_action( 'productive_global_render_content_wrapper_standard_top', $productiveminds_theme_layout ); ?>
            <div class="productiveminds_section-container main-container-box <?php echo esc_attr( $productiveminds_theme_layout ); ?>">

                <?php do_action( 'productive_global_render_sidebar_left', $productiveminds_theme_layout ); ?>

                <div class="productive-sidebar-main">
                    <?php if( 'page_width_top_banner' == $productive_passmax_show_top_banner ) { ?>
                        <div class="productive-blockable-element">
                            <?php get_template_part( 'template-parts/part-top-banner-page', 'top' ); ?>
                        </div>
                    <?php } ?>
                    <?php 
                    if ( 'post' === get_post_type() ) {
                        get_template_part( 'template-parts/part-page-single-post' ); 
                    } else {
                        get_template_part( 'template-parts/part-page' ); 
                    }
                    ?>
                </div>

                <?php do_action( 'productive_global_render_sidebar_right', $productiveminds_theme_layout ); ?>

            </div>
        <?php do_action('productive_global_render_content_wrapper_standard_bottom'); ?>
    </main>
<?php
}
wp_reset_postdata();

get_footer();
