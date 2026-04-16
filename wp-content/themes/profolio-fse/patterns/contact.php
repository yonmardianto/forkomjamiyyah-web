<?php
/**
 * Title: Contact
 * Slug: profolio-fse/contact
 * Categories: profolio-fse
 * Keywords: contact
 * Block Types: core/post-content
 * Post Types: page, wp_template
 */
?>
<!-- wp:group {"metadata":{"name":"Contact"},"className":"r-pad","style":{"spacing":{"padding":{"right":"20px","left":"20px","top":"80px","bottom":"80px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group r-pad has-primary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:80px;padding-right:20px;padding-bottom:80px;padding-left:20px"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"padding":{"right":"0","left":"0"},"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="padding-right:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center","className":"wow animate__animated animate__fadeInUp cover-inner"} -->
<div class="wp-block-column is-vertically-aligned-center wow animate__animated animate__fadeInUp cover-inner"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5","fontStyle":"normal","fontWeight":"700","textTransform":"uppercase","letterSpacing":"1px"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"sml-medium"} -->
<p class="has-secondary-color has-text-color has-link-color has-sml-medium-font-size" style="font-style:normal;font-weight:700;letter-spacing:1px;line-height:1.5;text-transform:uppercase"><?php echo esc_html__( 'Get in touch', 'profolio-fse' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"1.2"},"spacing":{"margin":{"top":"5px","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"xx-large"} -->
<h1 class="wp-block-heading has-white-color has-text-color has-link-color has-xx-large-font-size" style="margin-top:5px;margin-bottom:0;line-height:1.2"><?php echo esc_html__( 'Let\'s Work Together', 'profolio-fse' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"20px","bottom":"20px"}},"typography":{"lineHeight":"1.5"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
<p class="has-white-color has-text-color has-link-color" style="margin-top:20px;margin-bottom:20px;line-height:1.5"><?php echo esc_html__( 'Mattis pellentesque ex phasellus amet nulla aliquam commodo eu posuere in sit efficitur per libero consectetuer id elit.', 'profolio-fse' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"contact-form","layout":{"type":"constrained"}} -->
<div class="wp-block-group contact-form"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
<p class="has-white-color has-text-color has-link-color"><?php echo esc_html__( 'Add yours from shortcode', 'profolio-fse' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/projects-3.jpg","id":583,"dimRatio":40,"overlayColor":"base","isUserOverlayColor":true,"minHeight":620,"contentPosition":"bottom left","sizeSlug":"large","className":"r-cover","style":{"border":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"10px","bottomRight":"10px"}},"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left r-cover" style="border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px;min-height:620px"><img class="wp-block-cover__image-background wp-image-583 size-large" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/projects-3.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-base-background-color has-background-dim-40 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"typography":{"lineHeight":"1"}},"fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size" style="line-height:1"><?php echo esc_html__( 'New York, USA', 'profolio-fse' ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->