<?php
/**
 * 404 Page
 *
 * @package     pass-max
 * @author      productiveminds.com
 * @copyright   productiveminds.com
 */

get_header();

?>

<main class="site-body-container main-container page-404" id="site-content">
    
    <?php get_template_part( 'template-parts/part-top-banner-404', 'top' ); ?>
    
    <?php do_action('productive_global_render_content_wrapper_standard_top'); ?>
        <div class="productiveminds_section-container main-container-box">
            <div class="productive-sidebar-main productiveminds-alignable-container">
                <div class="productiveminds-alignable-container_uno">
                    <div class="four-zero-four">
                        <h1><?php echo productive_passmax_404_content_title(); ?></h1>
                        <div class="four-zero-four-content">
                            <div><?php echo productive_passmax_404_content_description(); ?></div>
                            <div class="clear_min"></div>
                            <a class="<?php echo productive_passmax_404_continue_button_style(); ?>" href="<?php echo esc_url( home_url() ); ?>"><?php echo productive_passmax_404_continue_button_copy(); ?></a>
                        </div>
                    </div>
                </div>
                
                <?php get_template_part( 'template-parts/part-page-placeholder' ); ?>
                
            </div>
        </div>
    <?php do_action('productive_global_render_content_wrapper_standard_bottom'); ?>
</main>

<?php 
get_footer();
