<?php
/**
 * Title: Header
 * Slug: profolio-fse/header
 * Categories: header, profolio-fse
 * Keywords: header
 * Block Types: core/template-part/header
 */
?>
<!-- wp:group {"tagName":"header","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}},"border":{"bottom":{"color":"#4f4f4f","width":"1px"},"top":[],"right":[],"left":[]}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<header id="sticky-header" class="wp-block-group has-primary-background-color has-background" style="border-bottom-color:#4f4f4f;border-bottom-width:1px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"30px"}},"textColor":"white"} /--></div>
<!-- /wp:group -->

<!-- wp:navigation {"textColor":"white","icon":"menu","overlayBackgroundColor":"white-text-color","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account","woocommerce/mini-cart"]},"style":{"spacing":{"blockGap":"40px"},"typography":{"fontStyle":"normal","fontWeight":"600"}}} /-->

<!-- wp:buttons {"className":"header-btn"} -->
<div class="wp-block-buttons header-btn"><!-- wp:button {"backgroundColor":"secondary","className":"is-style-fill","style":{"spacing":{"padding":{"left":"20px","right":"20px","top":"10px","bottom":"10px"}}}} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-secondary-background-color has-background wp-element-button" href="#" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><?php echo esc_html__( 'Get Started', 'profolio-fse' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></header>
<!-- /wp:group -->