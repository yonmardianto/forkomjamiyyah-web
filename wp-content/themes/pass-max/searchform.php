<?php
/**
 * Search form
 *
 * @package     pass-max
 * @author      productiveminds.com
 * @copyright   productiveminds.com
 * 
 */

$search_unique_id1 = productive_passmax_get_a_unique_id( 'search_form' );
$search_unique_id2 = productive_passmax_get_a_unique_id( 'search_form' );
$productive_passmax_search_icon_args = array(
    'i'     => 'search', 
    'w'     => 20, 
    'h'     => 20, 
    'css'   => '',
    'svg_css'   => ''
);
?>
<form class="searchform search-form" role="search" method="get" id="<?php echo esc_attr( $search_unique_id1 ); ?>" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="searchform-inner">
        <input class="search-field" placeholder="<?php echo esc_attr( 'Search...', 'pass-max' ); ?>" type="search" name="s" id="<?php echo esc_attr( $search_unique_id2 ); ?>" value="<?php echo get_search_query(); ?>"/>
        <button aria-label="<?php echo esc_attr('Search', 'pass-max'); ?>" class="searchsubmit" type="submit" value="" >
            <?php echo wp_kses( productiveminds_get_svg_icon($productive_passmax_search_icon_args), 'wp_kses_allowed_html' ); ?>
            <span class="screen-reader-text"><?php echo esc_html__('Search', 'pass-max'); ?></span>
        </button>
    </div>
</form>