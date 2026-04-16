<?php
/**
 * Part template
 *
 * @package     pass-max
 * @author      productiveminds.com
 * @copyright   productiveminds.com
 * 
 */

?>
	
<?php
if ( woocommerce_product_loop() ) {

        if ( function_exists( 'productiveminds_theme_extra_is_active' ) ) {
            // Display productive theme's subcategories
            do_action( 'productive_passmax_display_woocommerce_before_shop_loop' );
        }

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	do_action( 'woocommerce_before_shop_loop' );

	woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
			do_action( 'woocommerce_shop_loop' );

			wc_get_template_part( 'content', 'product' );
		}
	}
	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );

} else {
	?>
	<div class="search-result-number">
		<?php get_template_part( 'template-parts/part-page-none' ); ?>
	</div>
	<?php
}
