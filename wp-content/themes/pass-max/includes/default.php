<?php
/**
 * @package     pass-max
 * @author      productiveminds.com
 * @copyright   productiveminds.com
 * 
 */

/**
* Method for productive_passmax_the_home_section_bestsellers
*/
function productive_passmax_the_home_section_bestsellers($source = 'theme') {
    $is_plugin_origin = 'plugin' == $source || 'productive_style' == $source || 'pass_addons' == $source;
    $is_enabled = productive_passmax_homepage_products_bestsellers_enable() || $is_plugin_origin;
    if ( productive_passmax_is_woocommerce_activated() && $is_enabled ) {
        $misc = array(
            'source'                        => $source,
            'section_content_type'          => 'productive_global_display_homepage_bestsellers',
            'limit'                         => 1,
            'section_bg_color_scheme'       => 'page_main_section_container home ' . productive_passmax_homepage_products_bestsellers_section_bg_color_scheme(),
        );
        productive_passmax_the_home_section_design_standard( $misc );
    }
}
add_action( 'productive_global_render_home_section_bestsellers', 'productive_passmax_the_home_section_bestsellers');


/**
* Method for productive_passmax_the_home_section_latest
*/
function productive_passmax_the_home_section_latest($source = 'theme') {
    $is_plugin_origin = 'plugin' == $source || 'productive_style' == $source || 'pass_addons' == $source;
    $is_enabled = productive_passmax_homepage_products_latest_enable() || $is_plugin_origin;
    if ( productive_passmax_is_woocommerce_activated() && $is_enabled ) {
        $misc = array(
            'source'                        => $source,
            'section_content_type'          => 'productive_global_display_homepage_latest',
            'limit'                         => 1,
            'section_bg_color_scheme'       => 'page_main_section_container home ' . productive_passmax_homepage_products_latest_section_bg_color_scheme(),
        );
        productive_passmax_the_home_section_design_standard( $misc );
    }
}
add_action( 'productive_global_render_home_section_latest', 'productive_passmax_the_home_section_latest');


/**
* Method for productive_passmax_the_home_section_featured
*/
function productive_passmax_the_home_section_featured($source = 'theme') {
    $is_plugin_origin = 'plugin' == $source || 'productive_style' == $source || 'pass_addons' == $source;
    $is_enabled = productive_passmax_homepage_products_featured_enable() || $is_plugin_origin;
    if ( productive_passmax_is_woocommerce_activated() && $is_enabled ) {
        $misc = array(
            'source'                        => $source,
            'section_content_type'          => 'productive_global_display_homepage_featured',
            'limit'                         => 1,
            'section_bg_color_scheme'       => 'page_main_section_container home ' . productive_passmax_homepage_products_featured_section_bg_color_scheme(),
        );
        productive_passmax_the_home_section_design_standard( $misc );
    }
}
add_action( 'productive_global_render_home_section_featured', 'productive_passmax_the_home_section_featured');





function productive_passmax_the_home_section_design_select( $misc = array() ) {
    $section_design = $misc['section_design'];
    switch ( $section_design ) {
        case 'design_01':
            productive_passmax_the_home_section_design_01( $misc );
            break;

        case 'design_02':
            productive_passmax_the_home_section_design_02( $misc );
            break;

        default:
            productive_passmax_the_home_section_design_standard( $misc );
            break;
    }
}
add_action( 'productive_theme_homepage_woo_product_element_render', 'productive_passmax_the_home_section_design_select');

function productive_passmax_the_home_section_design_standard( $misc = array() ) {
    $source                         = $misc['source'];
    $section_content_type           = $misc['section_content_type'];
    $section_bg_color_scheme        = $misc['section_bg_color_scheme'];
    ?>
    <?php do_action( 'productive_global_render_content_wrapper_full_full_top', $section_bg_color_scheme ); ?>
    <?php do_action('productive_global_render_content_wrapper_full_top'); ?>
        <div class="section_hero">
            <?php do_action( $section_content_type, $source ); ?>
         </div>
    <?php do_action('productive_global_render_content_wrapper_full_bottom'); ?>
    <?php do_action('productive_global_render_content_wrapper_full_full_bottom'); ?>
    <?php
}

function productive_passmax_the_home_section_design_01( $misc = array() ) {
    $source                         = $misc['source'];
    $section_content_type           = $misc['section_content_type'];
    $section_bg_color_scheme        = $misc['section_bg_color_scheme'];
    $section_blocks_ratio           = $misc['section_blocks_ratio'];
    ?>
    <?php do_action( 'productive_global_render_content_wrapper_full_full_top', $section_bg_color_scheme ); ?>
        <?php do_action('productive_global_render_content_wrapper_full_top'); ?>
            <div class="section_hero productiveminds_double_grid <?php echo esc_attr($section_blocks_ratio); ?> gap-50px">
                <div class="height-100pc"><?php productive_passmax_display_homepage_content_element_hero_beside_product( $misc ); ?></div>
                <div><?php do_action( $section_content_type, $source ); ?></div>
            </div>
        <?php do_action('productive_global_render_content_wrapper_full_bottom'); ?>
    <?php do_action('productive_global_render_content_wrapper_full_full_bottom'); ?>
    <?php
}

function productive_passmax_the_home_section_design_02( $misc = array() ) {
    $source                         = $misc['source'];
    $section_content_type           = $misc['section_content_type'];
    $section_bg_color_scheme        = $misc['section_bg_color_scheme'];
    $section_blocks_ratio           = $misc['section_blocks_ratio'];
    ?>
    <?php do_action( 'productive_global_render_content_wrapper_full_full_top', $section_bg_color_scheme ); ?>
        <?php do_action('productive_global_render_content_wrapper_full_top'); ?>
            <div class="section_hero productiveminds_double_grid <?php echo esc_attr($section_blocks_ratio); ?> gap-50px">
                <div><?php do_action( $section_content_type, $source ); ?></div>
                <div class="section_hero"><?php productive_passmax_display_homepage_content_element_hero_beside_product( $misc ); ?></div>
            </div>
        <?php do_action('productive_global_render_content_wrapper_full_bottom'); ?>
    <?php do_action('productive_global_render_content_wrapper_full_full_bottom'); ?>
    <?php
}

function productive_passmax_display_homepage_content_element_hero_beside_product( $misc = array() ) {
    $source = $misc['source'];
    if( 'pass_addons' == $source ) {
        _productive_passmax_display_homepage_content_element_hero_beside_product_pass( $misc );
    } else if( 'productive_style' == $source ) {
        _productive_passmax_display_homepage_content_element_hero_beside_product_style( $misc );
    } else {
        ?>
            <div class="productiveminds-alignable-container align-content-center justify-content-center width-100pc height-100pc">
                    <?php productive_global_render_no_content_found( 'pass-max', esc_html__('Missing content? To resolve this, please install the PASS Addons plugin and add the relevant data.', 'pass-max'), 'fs-xs' ); ?>
            </div>
        <?php
    }
}

function _productive_passmax_display_homepage_content_element_hero_beside_product_pass( $misc = array() ) {
    
    $terms                  = $misc['terms'];
    $limit                  = $misc['limit'];
    $cta_style              = $misc['cta_style'];
    $content_alignment_v    = $misc['content_alignment_v'];
    $content_alignment_h    = $misc['content_alignment_h'];
    $hero_color_scheme      = $misc['hero_color_scheme'];
    
    $taxonomy_args = array(
        array(
            'taxonomy' => 'pass_ao_c_element-category',
            'field' => 'slug',
            'terms' => $terms,
        )
    );
    $args = array(
        'post_type' => 'pass_ao_c_element',
        'posts_per_page' => $limit,
        'orderby' => 'menu_order ASC',
        'order' => 'DESC',
        'suppress_filters' => 0,
        'tax_query' => $taxonomy_args,
    );
    $productive_cpt = new WP_Query( $args );
    if ( function_exists('pass_addons_is_active') && $productive_cpt->have_posts() ) {
        
        while( $productive_cpt->have_posts() ) {
            
            $productive_cpt->the_post();
            $productive_cpt_id = get_the_ID();

            $pass_addons_render_content_get_loop_data_cpt = pass_addons_render_content_get_loop_data_cpt( $productive_cpt_id, '_pass_ao_c_element' );
            
            $content_element_thumbnail_url      = get_the_post_thumbnail_url();
            $productive_cpt_url                 = $pass_addons_render_content_get_loop_data_cpt['productive_cpt_url'];
            $productive_cpt_url_text            = $pass_addons_render_content_get_loop_data_cpt['productive_cpt_url_text'];
        ?>
            <div class="productiveminds_banner_container container_with_bg_image inner_hero width-100pc height-100pc" style="background-image: url(<?php echo esc_url( $content_element_thumbnail_url ); ?>)">
                <div class="productiveminds_banner_container_content_bg_overlay"></div>
                <div class="productiveminds-alignable-container_inner_hero_box productiveminds-alignable-container width-100pc height-100pc <?php echo esc_attr($content_alignment_v); ?> <?php echo esc_attr($content_alignment_h); ?> <?php echo esc_attr($hero_color_scheme); ?>">
                    <div class="h6">
                        <?php the_title(); ?>
                    </div>
                    <div class="fs-normal">
                        <?php the_content(); ?>
                    </div>
                    <div class="cta spacious align-content-center justify-content-center">
                        <?php productive_global_hero_content_cta( $productive_cpt_url, $productive_cpt_url_text, $cta_style ); ?>
                    </div>
                </div>
            </div>
        <?php
        }
        wp_reset_postdata();
    } else if ( productive_global_is_woocommerce_active() && !function_exists('pass_addons_is_active') ) {
        ?>
            <div class="productiveminds-alignable-container align-content-center justify-content-center width-100pc height-100pc">
                    <?php productive_global_render_no_content_found( 'pass-max', esc_html__('Missing content? To resolve this, please install the Productive Style plugin and add the relevant data.', 'pass-max'), 'fs-xs' ); ?>
            </div>
        <?php
    }
}


function _productive_passmax_display_homepage_content_element_hero_beside_product_style( $misc = array() ) {
    
    $terms                  = $misc['terms'];
    $limit                  = $misc['limit'];
    $cta_style              = $misc['cta_style'];
    $content_alignment_v    = $misc['content_alignment_v'];
    $content_alignment_h    = $misc['content_alignment_h'];
    $hero_color_scheme      = $misc['hero_color_scheme'];
    
    $taxonomy_args = array(
        array(
            'taxonomy' => PRODUCTIVE_PASSMAX_PLUGIN_CONTENT_ELEMENT_TAXONOMY_SLUG,
            'field' => 'slug',
            'terms' => $terms,
        )
    );
    $args = array(
        'post_type' => PRODUCTIVE_PASSMAX_PLUGIN_CONTENT_ELEMENT_SLUG,
        'posts_per_page' => $limit,
        'orderby' => 'menu_order ASC',
        'order' => 'DESC',
        'suppress_filters' => 0,
        'tax_query' => $taxonomy_args,
    );
    $productive_cpt = new WP_Query( $args );
    if ( productive_global_is_productive_style_active() && $productive_cpt->have_posts() ) {
        
        while( $productive_cpt->have_posts() ) {
            
            $productive_cpt->the_post();
            $productive_cpt_id = get_the_ID();

            $productive_style_render_content_get_loop_data_cpt = productive_style_render_content_get_loop_data_cpt( $productive_cpt_id, PRODUCTIVE_PASSMAX_PLUGIN_CONTENT_ELEMENT_POST_TYPE_META_KEY );
            
            $content_element_thumbnail_url      = get_the_post_thumbnail_url();
            $productive_cpt_url                 = $productive_style_render_content_get_loop_data_cpt['productive_cpt_url'];
            $productive_cpt_url_text            = $productive_style_render_content_get_loop_data_cpt['productive_cpt_url_text'];
        ?>
            <div class="productiveminds_banner_container container_with_bg_image inner_hero width-100pc height-100pc" style="background-image: url(<?php echo esc_url( $content_element_thumbnail_url ); ?>)">
                <div class="productiveminds_banner_container_content_bg_overlay"></div>
                <div class="productiveminds-alignable-container_inner_hero_box productiveminds-alignable-container width-100pc height-100pc <?php echo esc_attr($content_alignment_v); ?> <?php echo esc_attr($content_alignment_h); ?> <?php echo esc_attr($hero_color_scheme); ?>">
                    <div class="h3">
                        <?php the_title(); ?>
                    </div>
                    <div class="fs-normal">
                        <?php the_content(); ?>
                    </div>
                    <div class="cta spacious align-content-center justify-content-center">
                        <?php productive_global_hero_content_cta( $productive_cpt_url, $productive_cpt_url_text, $cta_style ); ?>
                    </div>
                </div>
            </div>
        <?php
        }
        wp_reset_postdata();
    } else if ( productive_global_is_woocommerce_active() && !productive_passmax_is_productive_style_active() ) {
        ?>
            <div class="productiveminds-alignable-container align-content-center justify-content-center width-100pc height-100pc">
                    <?php productive_global_render_no_content_found( 'pass-max', esc_html__('Missing content? To resolve this, please install the Productive Style plugin and add the relevant data.', 'pass-max'), 'fs-xs' ); ?>
            </div>
        <?php
    }
}




// ================= start: woo_product_home_sections ====================

/**
* Method for productive_passmax_the_homepage_bestsellers
*/
function productive_passmax_the_homepage_bestsellers($source = 'theme') {
    $is_plugin_origin = 'plugin' == $source || 'productive_style' == $source || 'pass_addons' == $source;
    $is_enabled = productive_passmax_homepage_products_bestsellers_enable() || $is_plugin_origin;
    if ( productive_passmax_is_woocommerce_activated() && $is_enabled ) {
        $args = array(
            'numberposts'    => 1,
            'posts_per_page' => '1',
	);
        $product_exists = wc_get_products($args);
        if ( count($product_exists) ) {
            $section_title = productive_passmax_homepage_products_bestsellers_section_title();
            $section_go_to_shop_copy = productive_passmax_homepage_products_bestsellers_section_go_to_shop_copy();
            $section_cols = productive_passmax_homepage_products_bestsellers_num_cols();
            $section_rows = productive_passmax_homepage_products_bestsellers_num_rows();
            $limit = $section_cols * $section_rows;
            ?>
            <?php do_action('productive_global_render_content_wrapper_full_top'); ?>
                <div class="productiveminds_widget_container_home <?php echo productive_passmax_woo_archives_style(); ?> <?php echo productive_passmax_woo_archives_add_to_cart_style(); ?>">
                    <div class="productiveminds-alignable-container flexed align-content-center align-items-center justify-content-space-between justify-items-normal">
                        <h2 class="section-title"><?php echo esc_html($section_title); ?></h2>
                        <div class="section_anchor">
                            <a class="" aria-label="<?php echo esc_attr( $section_go_to_shop_copy ); ?>" href="<?php echo get_permalink( wc_get_page_id( 'Shop' ) ); ?>">
                                 <?php echo esc_html( $section_go_to_shop_copy ); ?>
                             </a>
                        </div>
                    </div>
                    <div><?php echo do_shortcode('[products limit="' . esc_attr($limit) . '" columns="' . esc_attr($section_cols) . '" best_selling="true"]'); ?></div>
                </div>
            <?php do_action('productive_global_render_content_wrapper_full_bottom'); ?>
            <?php
        }
    }
}
add_action( 'productive_global_display_homepage_bestsellers', 'productive_passmax_the_homepage_bestsellers');


/**
* Method for productive_passmax_the_homepage_latest
*/
function productive_passmax_the_homepage_latest($source = 'theme') {
    $is_plugin_origin = 'plugin' == $source || 'productive_style' == $source || 'pass_addons' == $source;
    $is_enabled = productive_passmax_homepage_products_latest_enable() || $is_plugin_origin;
    if ( productive_passmax_is_woocommerce_activated() && $is_enabled ) {
        $args = array(
            'numberposts'    => 1,
            'posts_per_page' => '1',
	);
        $product_exists = wc_get_products($args);
        if ( count($product_exists) ) {
            $section_title = productive_passmax_homepage_products_latest_section_title();
            $section_go_to_shop_copy = productive_passmax_homepage_products_latest_section_go_to_shop_copy();
            $section_cols = productive_passmax_homepage_products_latest_num_cols();
            $section_rows = productive_passmax_homepage_products_latest_num_rows();
            $limit = $section_cols * $section_rows;
            ?>
            <?php do_action('productive_global_render_content_wrapper_full_top'); ?>
                <div class="productiveminds_widget_container_home <?php echo productive_passmax_woo_archives_style(); ?> <?php echo productive_passmax_woo_archives_add_to_cart_style(); ?>">
                    <div class="productiveminds-alignable-container flexed align-content-center align-items-center justify-content-space-between justify-items-normal">
                        <h2 class="section-title"><?php echo esc_html($section_title); ?></h2>
                        <div class="section_anchor">
                            <a class="" aria-label="<?php echo esc_attr( $section_go_to_shop_copy ); ?>" href="<?php echo get_permalink( wc_get_page_id( 'Shop' ) ); ?>">
                                 <?php echo esc_html( $section_go_to_shop_copy ); ?>
                             </a>
                        </div>
                    </div>
                    <div><?php echo do_shortcode('[products limit="' . esc_attr($limit) . '" columns="' . esc_attr($section_cols) . '" orderby="id" order="DESC" visibility="visible"]'); ?></div>
                </div>
            <?php do_action('productive_global_render_content_wrapper_full_bottom'); ?>
            <?php
        }
    }
}
add_action( 'productive_global_display_homepage_latest', 'productive_passmax_the_homepage_latest');


/**
* Method for productive_passmax_the_homepage_featured
*/
function productive_passmax_the_homepage_featured($source = 'theme') {
    $is_plugin_origin = 'plugin' == $source || 'productive_style' == $source || 'pass_addons' == $source;
    $is_enabled = productive_passmax_homepage_products_featured_enable() || $is_plugin_origin;
    if ( productive_passmax_is_woocommerce_activated() && $is_enabled ) {
        $args = array(
            'numberposts'    => 1,
            'posts_per_page' => '1',
	);
        $product_exists = wc_get_products($args);
        if ( count($product_exists) ) {
            $section_title = productive_passmax_homepage_products_featured_section_title();
            $section_go_to_shop_copy = productive_passmax_homepage_products_featured_section_go_to_shop_copy();
            $section_cols = productive_passmax_homepage_products_featured_num_cols();
            $section_rows = productive_passmax_homepage_products_featured_num_rows();
            $limit = $section_cols * $section_rows;
            ?>
            <?php do_action('productive_global_render_content_wrapper_full_top'); ?>
                <div class="productiveminds_widget_container_home <?php echo productive_passmax_woo_archives_style(); ?> <?php echo productive_passmax_woo_archives_add_to_cart_style(); ?>">
                    <div class="productiveminds-alignable-container flexed align-content-center align-items-center justify-content-space-between justify-items-normal">
                        <h2 class="section-title"><?php echo esc_html($section_title); ?></h2>
                        <div class="section_anchor">
                            <a class="" aria-label="<?php echo esc_attr( $section_go_to_shop_copy ); ?>" href="<?php echo get_permalink( wc_get_page_id( 'Shop' ) ); ?>">
                                 <?php echo esc_html( $section_go_to_shop_copy ); ?>
                             </a>
                        </div>
                    </div>
                    <div><?php echo do_shortcode('[products limit="' . esc_attr($limit) . '" columns="' . esc_attr($section_cols) . '" orderby="title" order="DESC" visibility="featured"]'); ?></div>
                </div>
            <?php do_action('productive_global_render_content_wrapper_full_bottom'); ?>
            <?php
        }
    }
}
add_action( 'productive_global_display_homepage_featured', 'productive_passmax_the_homepage_featured');


/**
* Method for productive_passmax_the_homepage_on_sale
*/
function productive_passmax_the_homepage_on_sale($source = 'theme') {
    $is_plugin_origin = 'plugin' == $source || 'productive_style' == $source || 'pass_addons' == $source;
    $is_enabled = productive_passmax_homepage_products_on_sale_enable() || $is_plugin_origin;
    if ( productive_passmax_is_woocommerce_activated() && $is_enabled ) {
        $args = array(
            'numberposts'    => 1,
            'posts_per_page' => '1',
	);
        $product_exists = wc_get_products($args);
        if ( count($product_exists) ) {
            $section_title = productive_passmax_homepage_products_on_sale_section_title();
            $section_go_to_shop_copy = productive_passmax_homepage_products_on_sale_section_go_to_shop_copy();
            $section_cols = productive_passmax_homepage_products_on_sale_num_cols();
            $section_rows = productive_passmax_homepage_products_on_sale_num_rows();
            $limit = $section_cols * $section_rows;
            ?>
            <?php do_action('productive_global_render_content_wrapper_full_top'); ?>
                <div class="productiveminds_widget_container_home <?php echo productive_passmax_woo_archives_style(); ?> <?php echo productive_passmax_woo_archives_add_to_cart_style(); ?>">
                    <div class="productiveminds-alignable-container flexed align-content-center align-items-center justify-content-space-between justify-items-normal">
                        <h2 class="section-title"><?php echo esc_html($section_title); ?></h2>
                        <div class="section_anchor">
                            <a class="" aria-label="<?php echo esc_attr( $section_go_to_shop_copy ); ?>" href="<?php echo get_permalink( wc_get_page_id( 'Shop' ) ); ?>">
                                 <?php echo esc_html( $section_go_to_shop_copy ); ?>
                             </a>
                        </div>
                    </div>
                    <div><?php echo do_shortcode('[products limit="' . esc_attr($limit) . '" columns="' . esc_attr($section_cols) . '" orderby="popularity" on_sale="true"]'); ?></div>
                </div>
            <?php do_action('productive_global_render_content_wrapper_full_bottom'); ?>
            <?php
        }
    }
}
add_action( 'productive_global_display_homepage_on_sale', 'productive_passmax_the_homepage_on_sale');
