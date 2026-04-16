<?php
/**
 * The woocommerce php file contain all woocommerce-based customisation and functions
 *
 * @package     pass-max
 * @author      productiveminds.com
 * @copyright   productiveminds.com
 * 
 */


/**
 * Method productive_passmax_is_woocommerce_activated
 *
 * @return boolean
 */
function productive_passmax_is_woocommerce_activated() {
    return class_exists( 'woocommerce' );
}

/**
 * Method
 *
 * @return boolean
 */
function productive_passmax_is_shop() {
    if ( productive_passmax_is_woocommerce_activated() ) {
        return is_shop();
    } else {
        return false;
    }
}

/**
 * Method productive_passmax_is_product.
 *
 * @return boolean
 */
function productive_passmax_is_product() {
    if ( productive_passmax_is_woocommerce_activated() ) {
        return is_product();
    } else {
        return false;
    }
}


/**
 * Method productive_passmax_is_product_category.
 *
 * @return boolean
 */
function productive_passmax_is_product_category() {
    if ( productive_passmax_is_woocommerce_activated() ) {
        return is_product_category();
    } else {
        return false;
    }
}

/**
 * Method productive_passmax_is_woocommerce_page.
 *
 * @return boolean ''
 */
function productive_passmax_is_woocommerce_page() {
    if ( productive_passmax_is_woocommerce_activated() ) {
        return is_shop() || is_product() || is_product_category();
    } else {
        return false;
    }
}


if ( productive_passmax_is_woocommerce_activated() ) {
    
    /**
     * Breadcrumb
     */
    function productive_passmax__woocommerce_breadcrumbs() {
        return array(
                'delimiter'   => ' &#47; ',
                'wrap_before' => '<nav class="woocommerce-breadcrumb" itemprop="breadcrumb">',
                'wrap_after'  => '</nav>',
                'before'      => '',
                'after'       => '',
                'home'        => _x( 'Home', 'breadcrumb', 'pass-max' ),
            );
    }
    add_filter( 'woocommerce_breadcrumb_defaults', 'productive_passmax__woocommerce_breadcrumbs' );
    
    
    if ( ! function_exists( 'productive_passmax_get_output_related_products_args' ) ) {
        /**
         * Method get products - change number of related products to show.
         *
         * @param array $args ''.
         *
         * @return array
         */
        function productive_passmax_get_output_related_products_args( $args ) {
            
            $args['posts_per_page'] = wc_get_default_products_per_row(); // total number of related products to get.
            $args['columns'] = wc_get_default_products_per_row(); // number of column.
            return $args;
        }
    }
    add_action( 'woocommerce_output_related_products_args', 'productive_passmax_get_output_related_products_args', 20 );
    
    
    if ( ! function_exists( 'productive_passmax_get_woocommerce_upsell_display_args' ) ) {
        /**
         *
         * Method get products - change number of upsell products to show.
         *
         * @param array $args ''.
         *
         * @return array
         */
        function productive_passmax_get_woocommerce_upsell_display_args( $args ) {
            
            $args['posts_per_page'] = wc_get_default_products_per_row(); // total number of related products to get.
            $args['columns'] = wc_get_default_products_per_row(); // number of columns.
            return $args;
        }
    }
    add_action( 'woocommerce_upsell_display_args', 'productive_passmax_get_woocommerce_upsell_display_args', 20 );
    
    /**
     * Method enable featured image.
     */
    function productive_passmax_setup_woocommerce() {
        add_theme_support( 'woocommerce' );
        add_theme_support( 'wc-product-gallery-zoom' );
        add_theme_support( 'wc-product-gallery-lightbox' );
        add_theme_support( 'wc-product-gallery-slider' );
    }
    add_action( 'after_setup_theme', 'productive_passmax_setup_woocommerce' );

    remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
    remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
    
    
    add_action('woocommerce_before_main_content', 'productive_passmax_woocommerce_output_content_wrapper', 10);
    add_action('woocommerce_after_main_content', 'productive_passmax_woocommerce_output_content_wrapper_end', 10);

    function productive_passmax_woocommerce_output_content_wrapper() {
        //
    }
    function productive_passmax_woocommerce_output_content_wrapper_end() {
        //
    }
    
    remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );
    add_action( 'woocommerce_before_shop_loop_item_title', 'productiveminds_woocommerce_template_loop_product_thumbnail', 10 );
    function productiveminds_woocommerce_template_loop_product_thumbnail() {
        ?>
            <div class="attachment-woocommerce_thumbnail_container">
            <?php echo woocommerce_get_product_thumbnail(); ?>
            </div>
        <?php
    }
    
    function productive_passmax_woocommerce_get_image_size_thumbnail( $size ) {
        return array(
            'width'     => 700,
            'height'    => 0,
            'crop'      => 1,
        );
    }
    add_filter( 'woocommerce_get_image_size_thumbnail', 'productive_passmax_woocommerce_get_image_size_thumbnail');
    
    function productive_passmax_woocommerce_get_image_size_gallery_thumbnail( $size ) {
        return array(
            'width'     => 150,
            'height'    => 0,
            'crop'      => 1,
        );
    }
    add_filter( 'woocommerce_get_image_size_gallery_thumbnail', 'productive_passmax_woocommerce_get_image_size_gallery_thumbnail');
}


function productive_passmax_do_header_menu_categories( $children_depth = 0 ) {
    $productive_passmax_angle_down_icon_args = array(
        'i'     => 'angle-down', 
        'w'     => 20, 
        'h'     => 20, 
        'css'   => '',
        'svg_css'   => ''
    );
    ?>
    <div class="header-catalog-vertical-menu-container-wrapper productiveminds-alignable-container">
        <div class="header-catalog-vertical-menu-container productiveminds-alignable-container align-items-center align-content-center column-gap-10px">
            <div class="header-catalog-vertical-menu-navicon" style="line-height: 0">
                <?php do_action( 'productive_global_render_theme_navicon_catalog', 'navicon_mode_light' ); ?>
            </div>
            <div class="header-catalog-vertical-menu-anchor-copy">
                <?php echo esc_html__('Browse Our Catalog', 'pass-max'); ?>
            </div>
            <div class="header-catalog-vertical-menu-arrow productiveminds-alignable-container align-items-center align-content-center">
                <?php echo wp_kses( productiveminds_get_svg_icon($productive_passmax_angle_down_icon_args), 'wp_kses_allowed_html' ); ?>
            </div>
        </div>
        <?php if ( productive_passmax_is_woocommerce_activated() ) { ?>
        <div class="header-catalog-vertical-menu-category-container noned">
            <div class="header-catalog-vertical-menu-content productiveminds-alignable-container">
                <?php
                $args = array(
                    'taxonomy' => 'product_cat',
                    'hide_empty' => true,
                    'parent' => 0
                );
                $categories = get_terms( $args );
                if ( !empty( $categories ) && !is_wp_error( $categories ) ) {
                    foreach ( $categories as $category ) {
                    $cat_name = $category->name;
                    $thumbnail_url = productive_global_get_category_thumbnail_url($category->term_id);
                ?>
                    <a aria-lable="<?php echo esc_attr($cat_name); ?>"
                        href="<?php echo esc_url( get_term_link( $category ) ); ?>"
                        class="header-catalog-vertical-menu-category productiveminds-alignable-container align-items-center align-content-center column-gap-10px">
                        <img src="<?php echo esc_attr($thumbnail_url); ?>" alt="<?php echo esc_attr($cat_name); ?>" />
                        <span><?php echo esc_html($cat_name); ?></span>
                    </a>
                <?php
                    }
                }
                ?>

            </div>
        </div>
        <?php } ?>
    </div>
    <?php
}
add_action( 'productive_passmax_display_do_header_menu_categories', 'productive_passmax_do_header_menu_categories' );

