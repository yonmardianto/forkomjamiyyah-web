<?php
/**
 * Title: Articles
 * Slug: profolio-fse/articles
 * Categories: profolio-fse
 * Keywords: articles
 * Block Types: core/post-content
 * Post Types: page, wp_template
 */
?>
<!-- wp:group {"metadata":{"name":"Articles"},"className":"r-pad","style":{"spacing":{"padding":{"right":"20px","left":"20px","top":"80px","bottom":"80px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group r-pad" style="margin-top:0;margin-bottom:0;padding-top:80px;padding-right:20px;padding-bottom:80px;padding-left:20px"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"0","top":"0"},"margin":{"bottom":"40px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom:40px;padding-top:0;padding-bottom:0"><!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5","fontStyle":"normal","fontWeight":"700","textTransform":"uppercase","letterSpacing":"1px"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"sml-medium"} -->
<p class="has-text-align-center has-secondary-color has-text-color has-link-color has-sml-medium-font-size" style="font-style:normal;font-weight:700;letter-spacing:1px;line-height:1.5;text-transform:uppercase"><?php echo esc_html__( 'INsights and articles', 'profolio-fse' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"lineHeight":"1.2"},"spacing":{"margin":{"top":"5px","bottom":"0"}}},"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="margin-top:5px;margin-bottom:0;line-height:1.2"><?php echo esc_html__( 'Recent Blog Posts', 'profolio-fse' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"wow animate__animated animate__fadeInUp cover-inner","layout":{"type":"constrained"}} -->
<div class="wp-block-group wow animate__animated animate__fadeInUp cover-inner"><!-- wp:query {"queryId":33,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"style":{"border":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"10px","bottomRight":"10px"}}},"backgroundColor":"contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-contrast-background-color has-background" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;margin-top:0;margin-bottom:0;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} /-->

<!-- wp:post-title {"isLink":true,"fontSize":"mdm-large"} /-->

<!-- wp:post-excerpt {"moreText":"Read More","excerptLength":16} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->