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
$productive_passmax_single_post_display_category = intval( productive_passmax_single_post_display_category() );
$productive_passmax_single_post_display_author_name = intval( productive_passmax_single_post_display_author_name() );
$productive_passmax_single_post_display_which_date = trim( productive_passmax_single_post_display_which_date() );
?>

<article class="productive-blog-article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <section class="productive-blog-article-section productive-blog-article-content productive-blockable-element">
        
        <?php if( !PRODUCTIVE_PASSMAX_CUSTOMIZER_show_top_banner || 'hide_top_banner' == $productive_passmax_show_top_banner ) { ?>
            <h1><?php the_title(); ?></h1>
        <?php } ?>
            
        <?php if( 'full_width_top_banner' == $productive_passmax_show_top_banner ) { ?>
            
            <?php
                $productive_cpt_id = get_the_ID();
                $productive_cpt_title = get_the_title();
                $is_render_video = productive_passmax_render_post_video_single( $productive_cpt_id, $productive_cpt_title, "blog-post-featured-image" ); 
            ?>
            
            <?php if( !$is_render_video && has_post_thumbnail() ) { ?>
                <div class="blog-post-featured-image">
                    <?php
                    $attr = array (
                        'alt' => get_the_title(),
                    );
                    the_post_thumbnail( 'full', $attr );
                    ?>
                </div>
            <?php } ?>
        <?php } ?>
            
        <div class="blog-post-single-metadata-container productiveminds-alignable-container flexed justify-content-space-between column-gap-20px row-gap-5px">
            <?php if ( $productive_passmax_single_post_display_category && has_category() ) { ?>
                <div class="blog-post-attributes-category">
                    <?php echo esc_html__( 'Posted in ', 'pass-max' ); ?>
                    <span><?php the_category( ' &bull; ' ); ?></span>
                </div>
            <?php } ?>
            
            <?php if ( $productive_passmax_single_post_display_author_name || 'hide_posted_date' != $productive_passmax_single_post_display_which_date ) { ?>
                <div class="blog-post-attributes-author">    			

                    <?php if ( $productive_passmax_single_post_display_author_name ) { ?>
                        <?php echo esc_html__( 'By ', 'pass-max' ); ?> 
                        <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" >
                            <span><?php echo esc_html( get_the_author() ); ?></span>
                        </a>
                    <?php } ?>

                    <?php if ( $productive_passmax_single_post_display_author_name && 'hide_posted_date' != $productive_passmax_single_post_display_which_date ) { ?>
                    <span>&bull;</span>
                    <?php } ?>

                    <?php if ( 'hide_posted_date' != $productive_passmax_single_post_display_which_date ) { ?>
                        <span class="blog-post-date">
                            <?php if ( 'original_posted_date' == $productive_passmax_single_post_display_which_date ) { ?>
                                <span><?php echo esc_html__( 'Posted on: ', 'pass-max' ); ?></span>
                                <span><?php esc_html( the_date() ); ?></span>
                            <?php } ?>

                            <?php if ( 'last_updated_date' == $productive_passmax_single_post_display_which_date ) { ?>
                                <span><?php echo esc_html__( 'last updated: ', 'pass-max' ); ?></span>
                                <span><?php esc_html( the_modified_date() ); ?></span>
                            <?php } ?>
                        </span>
                     <?php } ?>
                </div>
            <?php } ?>
            
        </div>
            
        <?php do_action( 'productive_passmax_display_single_post_author_bio_top' ); ?>
            
        <?php if( 'full_width_top_banner' != $productive_passmax_show_top_banner ) { ?>
            
            <?php
                $productive_cpt_id = get_the_ID();
                $productive_cpt_title = get_the_title();
                $is_render_video = productive_passmax_render_post_video_single( $productive_cpt_id, $productive_cpt_title, "blog-post-featured-image" ); 
            ?>
            
            <?php if( !$is_render_video && has_post_thumbnail() ) { ?>
                <div class="blog-post-featured-image">
                    <?php
                    $attr = array (
                        'alt' => get_the_title(),
                    );
                    the_post_thumbnail( 'full', $attr );
                    ?>
                </div>
            <?php } ?>
        <?php } ?>
        
        <?php the_content(); ?>
            
        <?php if ( get_the_tag_list() && !is_wp_error( get_the_tag_list( '', wp_get_list_item_separator() ) ) ) { ?>
            <div class="productiveminds_the_tags"><?php the_tags( null, '' ); ?></div>
        <?php } ?>
            
    </section>
</article>

<div class="productive-blog-article-content productive-blog-article-below-article productive-blockable-element productiveminds-alignable-container">
    <?php do_action( 'productive_passmax_display_single_post_author_bio_bottom' ); ?>

    <?php
        if( function_exists( 'productive_global_render_social_media_share_icons' ) ) {
            $share_on = esc_html__('Share on: ', 'pass-max');
            productive_global_render_std_social_media_share( $share_on ); 
        }
    ?>
    
    <?php 
        if(function_exists( 'productiveminds_theme_extra_is_active' ) ) {
            do_action( 'productive_passmax_display_post_related_posts', get_the_ID() ); 
        }
    ?>

    <?php do_action('productive_passmax_display_single_post_disclaimer_bottom'); ?>
    
    <?php 
        if ( is_single() ) {
            get_template_part( 'template-parts/part-page-prev-next' );
        }
    ?>

</div>

<div class="productive-blog-article-content productive-blog-article-comment productive-blockable-element">
    <?php productive_passmax_render_comments(); ?>
</div>
