<?php
/**
 * Part template
 *
 * @package     pass-max
 * @author      productiveminds.com
 * @copyright   productiveminds.com
 * 
 */

$productive_passmax_show_top_banner = PRODUCTIVE_PASSMAX_CUSTOMIZER_show_top_banner;
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <section class="page-content-body">
        <?php if( !PRODUCTIVE_PASSMAX_CUSTOMIZER_show_top_banner || 'hide_top_banner' == $productive_passmax_show_top_banner ) { ?>
            <h1><?php the_title(); ?></h1>
        <?php } ?>

        <?php the_content(); ?>
            
        <?php if ( get_the_tag_list() && !is_wp_error( get_the_tag_list() ) ) { ?>
            <div class="productiveminds_the_tags"><?php the_tags(); ?></div>
        <?php } ?>
    </section>
</article>

<?php 
    productive_passmax_render_comments();
