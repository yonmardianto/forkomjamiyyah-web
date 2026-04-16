<?php
/**
 * Title: Banner
 * Slug: profolio-fse/banner
 * Categories: profolio-fse
 * Keywords: banner
 * Block Types: core/post-content
 * Post Types: page, wp_template
 */
?>
<!-- wp:group {"metadata":{"name":"Banner"},"className":"profolio-fse-banner-wrapper","style":{"spacing":{"padding":{"right":"20px","left":"20px","top":"80px","bottom":"0px"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group profolio-fse-banner-wrapper has-primary-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:80px;padding-right:20px;padding-bottom:0px;padding-left:20px"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"padding":{"right":"0","left":"0"},"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="padding-right:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center","className":"wow animate__animated animate__fadeInUp cover-inner"} -->
<div class="wp-block-column is-vertically-aligned-center wow animate__animated animate__fadeInUp cover-inner"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5","fontStyle":"normal","fontWeight":"700","textTransform":"uppercase","letterSpacing":"1px"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"sml-medium"} -->
<p class="has-secondary-color has-text-color has-link-color has-sml-medium-font-size" style="font-style:normal;font-weight:700;letter-spacing:1px;line-height:1.5;text-transform:uppercase"><?php echo esc_html__( 'About Me', 'profolio-fse' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"1.2"},"spacing":{"margin":{"top":"5px","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"xx-large"} -->
<h1 class="wp-block-heading has-white-color has-text-color has-link-color has-xx-large-font-size" style="margin-top:5px;margin-bottom:0;line-height:1.2"><?php echo esc_html__( 'Welcome To My Profile', 'profolio-fse' ); ?> <br><?php echo esc_html__( 'I am', 'profolio-fse' ); ?> <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-secondary-color"><?php echo esc_html__( 'Julia Henderson', 'profolio-fse' ); ?></mark></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"30px","bottom":"30px"}},"typography":{"lineHeight":"1.5"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
<p class="has-white-color has-text-color has-link-color" style="margin-top:0;margin-bottom:0;padding-top:30px;padding-bottom:30px;line-height:1.5"><?php echo esc_html__( 'Mattis pellentesque ex phasellus amet nulla aliquam commodo eu posuere in sit efficitur per libero consectetuer id elit neque condimentum parturient Adipiscing ipsum netus donec erat vivamus congue eget fermentum', 'profolio-fse' ); ?> </p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-buttons" style="margin-top:0;margin-bottom:0"><!-- wp:button {"backgroundColor":"secondary"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-secondary-background-color has-background wp-element-button" href="#"><?php echo esc_html__( 'View my Work', 'profolio-fse' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:social-links {"iconColor":"primary","iconColorValue":"#151515","size":"has-large-icon-size","className":"is-style-logos-only","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
<ul class="wp-block-social-links has-large-icon-size has-icon-color is-style-logos-only" style="margin-top:var(--wp--preset--spacing--30)"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"x"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banner.jpg","id":31,"alt":"portrait-smiling-businesswoman-office","overlayColor":"secondary","isUserOverlayColor":true,"focalPoint":{"x":0.49,"y":0.37},"minHeight":550,"contentPosition":"bottom center","isDark":false,"className":"r-cover","style":{"border":{"radius":{"topLeft":"50%","topRight":"50%","bottomLeft":"0px","bottomRight":"0px"},"width":"0px","style":"none"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center r-cover" style="border-style:none;border-width:0px;border-top-left-radius:50%;border-top-right-radius:50%;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:550px"><img class="wp-block-cover__image-background wp-image-31" alt="portrait-smiling-businesswoman-office" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banner.jpg" style="object-position:49% 37%" data-object-fit="cover" data-object-position="49% 37%"/><span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:image {"id":686,"width":"auto","height":"500px","aspectRatio":"1","scale":"contain","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banner-image.png" alt="" class="wp-image-686" style="aspect-ratio:1;object-fit:contain;width:auto;height:500px"/></figure>
<!-- /wp:image --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->