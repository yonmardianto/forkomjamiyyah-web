<?php
 /**
  * Title: Archive
  * Slug: profolio-fse/archive
  */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banner.jpg","id":807,"dimRatio":80,"overlayColor":"black","isUserOverlayColor":true,"minHeight":250,"minHeightUnit":"px","style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover" style="margin-top:0;margin-bottom:0;min-height:250px"><img class="wp-block-cover__image-background wp-image-807" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banner.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-80 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:query-title {"type":"archive","textAlign":"center","fontSize":"x-large"} /--></div></div>
<!-- /wp:cover -->

<!-- wp:group {"tagName":"main","className":"r-pad","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"22px","left":"22px","top":"80px","bottom":"80px"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group r-pad" style="margin-top:0;margin-bottom:0;padding-top:80px;padding-right:22px;padding-bottom:80px;padding-left:22px"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"40px","left":"40px"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:query {"queryId":37,"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","columnCount":null,"minimumColumnWidth":"20rem"}} -->
<!-- wp:group {"style":{"border":{"radius":"10px","color":"#e0e0e0","width":"1px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color" style="border-color:#e0e0e0;border-width:1px;border-radius:10px"><!-- wp:post-featured-image {"isLink":true,"style":{"border":{"radius":"10px"}}} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|10","left":"var:preset|spacing|10","bottom":"var:preset|spacing|20","top":"var:preset|spacing|10"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--10)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--10)"><!-- wp:post-author {"showAvatar":false} /-->

<!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"lineHeight":"1.2"}},"fontSize":"mdm-large"} /-->

<!-- wp:post-excerpt {"moreText":"Read More","excerptLength":16} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p class="has-text-align-center"><?php echo esc_html__( 'No posts found', 'profolio-fse' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:template-part {"slug":"sidebar","theme":"profolio-fse","area":"uncategorized"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->