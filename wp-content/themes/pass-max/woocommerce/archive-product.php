<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 8.6.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

$productive_passmax_show_top_banner = PRODUCTIVE_PASSMAX_CUSTOMIZER_show_top_banner;
$productiveminds_theme_layout = PRODUCTIVE_PASSMAX_CUSTOMIZER_template_layout_options;
if( productive_passmax_show_sidebars_always_in_woo_archives() ) {
    // Enfore Woo sidebar
    if( is_active_sidebar( PRODUCTIVE_PASSMAX_WOOCOMMERCE_SIDEBAR_ID ) && 'one_column' == $productiveminds_theme_layout ) {
        $productiveminds_theme_layout = 'two_columns_right';
    }
}
// Ensure to display the WooCommerce Sidebar when not empty
$productiveminds_theme_woocommerce_sidebar = 'none';
if( is_active_sidebar( PRODUCTIVE_PASSMAX_WOOCOMMERCE_SIDEBAR_ID ) ) {
    if( 'two_columns_left' == $productiveminds_theme_layout || 'three_columns' == $productiveminds_theme_layout ) {
        $productiveminds_theme_woocommerce_sidebar = 'productive-sidebar-left';
    } else if( 'two_columns_right' == $productiveminds_theme_layout ) {
        $productiveminds_theme_woocommerce_sidebar = 'productive-sidebar-right';
    }
}
?>

<main class="site-body-container main-container" id="site-content">
    
    <?php 
    if ( apply_filters( 'woocommerce_show_page_title', true ) ) {
        if( 'full_width_top_banner' == $productive_passmax_show_top_banner ) {
            get_template_part( 'woocommerce/part-top-banner-archive-product', 'top' );
        }
    }
    ?>
    
    <?php do_action('productive_global_render_content_wrapper_standard_top'); ?>
        <div class="productiveminds_section-container main-container-box <?php echo esc_attr( $productiveminds_theme_layout ); ?> <?php echo productive_passmax_woo_archives_style(); ?> <?php echo productive_passmax_woo_archives_add_to_cart_style(); ?>">
            <?php
                if( 'productive-sidebar-left' == $productiveminds_theme_woocommerce_sidebar ) {
                    do_action( 'productive_global_render_sidebar_woo_archive', $productiveminds_theme_woocommerce_sidebar . ' hide-below-landscape-mobile' );
                } else {
                    do_action( 'productive_global_render_sidebar_left', $productiveminds_theme_layout ); 
                }
            ?>
            <div class="productive-sidebar-main">
                <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) {
                    if( 'page_width_top_banner' == $productive_passmax_show_top_banner ) {
                        get_template_part( 'woocommerce/part-top-banner-archive-product', 'top' );
                    } else if( 'hide_top_banner' == $productive_passmax_show_top_banner ) { ?>
                        <?php do_action('productive_global_render_content_wrapper_full_top'); ?>
                            <div class="productiveminds_banner_container_content">
                                <h1><?php woocommerce_page_title(); ?></h1>
                                <div class="productiveminds_container_content_desc"><?php do_action( 'woocommerce_archive_description' ); ?></div>
                            </div>
                        <?php do_action('productive_global_render_content_wrapper_full_bottom'); ?>
                    <?php }
                }
                ?>
                <?php get_template_part( 'woocommerce/page-part-archive' ); ?>
            </div>
            <?php
                if( 'productive-sidebar-right' == $productiveminds_theme_woocommerce_sidebar ) {
                    do_action( 'productive_global_render_sidebar_woo_archive', $productiveminds_theme_woocommerce_sidebar );
                } else {
                    if( 'productive-sidebar-left' == $productiveminds_theme_woocommerce_sidebar ) {
                        do_action( 'productive_global_render_sidebar_woo_archive', $productiveminds_theme_woocommerce_sidebar . ' hide-above-landscape-mobile' );
                    }
                    do_action( 'productive_global_render_sidebar_right', $productiveminds_theme_layout ); 
                }
            ?>
        </div>
    <?php do_action('productive_global_render_content_wrapper_standard_bottom'); ?>
</main>  

<?php 
get_footer( 'shop ' );
