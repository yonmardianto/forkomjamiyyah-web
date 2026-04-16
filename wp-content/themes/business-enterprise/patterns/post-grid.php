<?php
/**
 * Title: Post Grid
 * Slug: business-enterprise/post-grid
 * Categories: theme
 * Keywords: post grid
 */
?>

<!-- wp:group {"align":"full","className":"blog-section","style":{"spacing":{"margin":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|x-large"},"padding":{"right":"0","left":"0"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group alignfull blog-section" style="margin-top:var(--wp--preset--spacing--xx-large);margin-bottom:var(--wp--preset--spacing--x-large);padding-right:0;padding-left:0"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"40px","fontStyle":"normal","fontWeight":"700","textTransform":"capitalize"}},"fontFamily":"nunito"} -->
<h3 class="wp-block-heading has-text-align-center has-nunito-font-family" style="font-size:40px;font-style:normal;font-weight:700;text-transform:capitalize"><?php esc_html_e( 'Latest from the Blog', 'business-enterprise' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|body"}}},"typography":{"fontSize":"20px"},"spacing":{"margin":{"bottom":"var:preset|spacing|x-large"}}},"textColor":"body","fontFamily":"mulish"} -->
<p class="has-text-align-center has-body-color has-text-color has-link-color has-mulish-font-family" style="margin-bottom:var(--wp--preset--spacing--x-large);font-size:20px"><?php esc_html_e( 'Lorem Ipsum is simply dummy text industry.', 'business-enterprise' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query {"queryId":42,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"animated animated-fadeInUp"} -->
<div class="wp-block-query animated animated-fadeInUp"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small","padding":{"top":"var:preset|spacing|xx-small","bottom":"var:preset|spacing|medium","right":"0"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--xx-small);padding-right:0;padding-bottom:var(--wp--preset--spacing--medium)"><!-- wp:group {"className":"blog-img","layout":{"type":"constrained"}} -->
<div class="wp-block-group blog-img"><!-- wp:post-featured-image {"isLink":true,"style":{"border":{"radius":"6px"}}} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"textAlign":"left","level":5,"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|xx-small"}},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"}},"textColor":"heading","fontFamily":"nunito"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:post-author {"textAlign":"left","avatarSize":24,"showAvatar":false,"style":{"elements":{"link":{"color":{"text":"var:preset|color|body"}}},"typography":{"fontSize":"16px"}},"textColor":"body","fontFamily":"mulish"} /-->

<!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size">·</p>
<!-- /wp:paragraph -->

<!-- wp:post-date {"format":"M j, Y","metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"style":{"elements":{"link":{"color":{"text":"var:preset|color|body"}}},"typography":{"fontSize":"16px"}},"textColor":"body","fontFamily":"mulish"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->