<?php
/**
 * Part template
 *
 * @package     pass-max
 * @author      productiveminds.com
 * @copyright   productiveminds.com
 * 
 */

$hide_page_title = 0;
if( isset( $args['is_no_title'] ) ) {
    if( 1 == $args['is_no_title'] ) {
        $hide_page_title = 1;
    }
}

$productive_passmax_show_top_banner = PRODUCTIVE_PASSMAX_CUSTOMIZER_show_top_banner;
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <section class="page-content-body productive-blockable-element">
        <?php if( !$hide_page_title && ( !PRODUCTIVE_PASSMAX_CUSTOMIZER_show_top_banner || 'hide_top_banner' == $productive_passmax_show_top_banner ) ) { ?>
            <h1><?php the_title(); ?></h1>
        <?php } ?>

        <?php the_content(); ?>
            
        <?php
        $get_the_tag_list = get_the_tag_list();
        if ( !$hide_page_title && ( $get_the_tag_list && !is_wp_error($get_the_tag_list) ) ) { 
        ?>
            <div class="productiveminds_the_tags"><?php the_tags(); ?></div>
        <?php } ?>
    </section>
</article>

<div class="productive-blockable-element">
    <?php
        wp_link_pages(
            array(
                'before'   => '<nav class="page-links" aria-label="' . esc_html__( 'Page', 'pass-max' ) . '">',
                'after'    => '</nav>',
                'pagelink' => esc_html__( 'Page %', 'pass-max' ),
            )
        );
    ?>
</div>

<div class="productive-blockable-element">
    <?php productive_passmax_edit_post_link_for_post_page(); ?>
</div>

<div class="productive-blockable-element">
    <?php productive_passmax_render_comments(); ?>
</div>
