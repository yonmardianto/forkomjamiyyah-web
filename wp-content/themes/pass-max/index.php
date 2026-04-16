<?php
/**
 * Index Page
 *
 * @package     pass-max
 * @author      productiveminds.com
 * @copyright   productiveminds.com
 * 
 */

?>

<?php get_header(); ?>
<main class="site-body-container main-container" id="site-content">
    <?php
        if ( is_home() ) {
            // Reading Settings is set to "Your latest posts"
            do_action( 'productive_global_display_blog_posts_homepage');
        } else {
            // Posts Archive
            get_template_part( 'template-parts/index/part-loop-index' );
        }
    ?>
</main>
<?php 
get_footer();