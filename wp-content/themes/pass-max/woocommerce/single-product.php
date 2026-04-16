<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; 
}

get_header( 'shop' );

$productive_passmax_show_top_banner_product_details = productive_passmax_show_top_banner_product_details();
$productive_passmax_show_top_banner = PRODUCTIVE_PASSMAX_CUSTOMIZER_show_top_banner;
$productiveminds_theme_layout = PRODUCTIVE_PASSMAX_CUSTOMIZER_template_layout_options;
if( productive_passmax_show_sidebars_always_in_woo_product_details() ) {
    // Enfore Woo sidebar
    if( is_active_sidebar( PRODUCTIVE_PASSMAX_WOOCOMMERCE_PRODUCT_PAGE_SIDEBAR_ID ) && 'one_column' == $productiveminds_theme_layout ) {
        $productiveminds_theme_layout = 'two_columns_right';
    }
}
// Ensure to display the WooCommerce Sidebar when not empty
$productiveminds_theme_woocommerce_sidebar = 'none';
if( is_active_sidebar( PRODUCTIVE_PASSMAX_WOOCOMMERCE_PRODUCT_PAGE_SIDEBAR_ID ) ) {
    if( 'two_columns_left' == $productiveminds_theme_layout ) {
        $productiveminds_theme_woocommerce_sidebar = 'productive-sidebar-left';
    } else if( 'two_columns_right' == $productiveminds_theme_layout || 'three_columns' == $productiveminds_theme_layout ) {
        $productiveminds_theme_woocommerce_sidebar = 'productive-sidebar-right';
    }
}

$productive_sidebar_main_no_top_margin = '';
if( !$productive_passmax_show_top_banner_product_details && 'full_width_top_banner' == $productive_passmax_show_top_banner ) {
    $productive_sidebar_main_no_top_margin = 'full_width_top_banner_do_not_show_on_product_page';
}
?>

<main class="site-body-container main-container" id="site-content">
    
    <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) {
        if( $productive_passmax_show_top_banner_product_details && 'full_width_top_banner' == $productive_passmax_show_top_banner ) {
            get_template_part( 'template-parts/part-top-banner-page', 'top' );
        }
    }
    ?>
    
    <?php do_action('productive_global_render_content_wrapper_standard_top'); ?>
        <div class="productiveminds_section-container main-container-box <?php echo esc_attr( $productiveminds_theme_layout ); ?> <?php echo productive_passmax_woo_archives_style(); ?> <?php echo productive_passmax_woo_archives_add_to_cart_style(); ?>">
            <?php
                if( 'productive-sidebar-left' == $productiveminds_theme_woocommerce_sidebar ) {
                    do_action( 'productive_global_render_sidebar_woo_product_page', $productiveminds_theme_woocommerce_sidebar . ' hide-below-landscape-mobile' );
                } else {
                    do_action( 'productive_global_render_sidebar_left', $productiveminds_theme_layout ); 
                }
            ?>
            <div class="productive-sidebar-main productiveminds-product-single <?php echo esc_attr( $productive_sidebar_main_no_top_margin ); ?>">
                <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) {
                    if( $productive_passmax_show_top_banner_product_details && 'page_width_top_banner' == $productive_passmax_show_top_banner ) {
                        get_template_part( 'template-parts/part-top-banner-page', 'top' );
                    } else {
                        // See header
                    }
                }
                ?>
                <?php // 'woocommerce_before_main_content' is switch off. See includes/woocommerce.php & content-single-product ?>
                <?php 
                    while ( have_posts() ) {
                        the_post(); 
                        wc_get_template_part( 'content', 'single-product' );
                    }
                ?>
                <?php
                    /**
                     * woocommerce_after_main_content hook.
                     *
                     * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
                     */
                    do_action( 'woocommerce_after_main_content' );
                ?>
                
                <?php
                    if ( is_single() && productive_passmax_show_prev_next_woo_product_details() ) {
                        get_template_part( 'template-parts/part-page-prev-next' );
                    }
                ?>
    
            </div>
            <?php
                if( 'productive-sidebar-right' == $productiveminds_theme_woocommerce_sidebar ) {
                    do_action( 'productive_global_render_sidebar_woo_product_page', $productiveminds_theme_woocommerce_sidebar );
                } else {
                    if( 'productive-sidebar-left' == $productiveminds_theme_woocommerce_sidebar ) {
                        do_action( 'productive_global_render_sidebar_woo_product_page', $productiveminds_theme_woocommerce_sidebar . ' hide-above-landscape-mobile' );
                    }
                    do_action( 'productive_global_render_sidebar_right', $productiveminds_theme_layout ); 
                }
            ?>
        </div>
    <?php do_action('productive_global_render_content_wrapper_standard_bottom'); ?>
</main>  

<?php
get_footer( 'shop' );
