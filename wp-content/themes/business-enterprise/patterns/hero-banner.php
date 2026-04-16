<?php
/**
 * Title: Hero Banner
 * Slug: business-enterprise/hero-banner
 * Categories: theme
 * Keywords: hero banner
 */
?>

<!-- wp:group {"align":"full","className":"banner-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group alignfull banner-section" style="padding-top:var(--wp--preset--spacing--x-large)"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","className":"banner-content-col"} -->
<div class="wp-block-column is-vertically-aligned-center banner-content-col"><!-- wp:group {"className":"banner-content","layout":{"type":"constrained"}} -->
<div class="wp-block-group banner-content"><!-- wp:heading {"style":{"typography":{"fontSize":"55px","fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|pure-white"}}}},"textColor":"pure-white","fontFamily":"nunito"} -->
<h2 class="wp-block-heading has-pure-white-color has-text-color has-link-color has-nunito-font-family" style="font-size:55px;font-style:normal;font-weight:700"><?php esc_html_e( 'Grow Your ', 'business-enterprise' ); ?><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-secondary-color"><?php esc_html_e( 'Business', 'business-enterprise' ); ?></mark> <?php esc_html_e( 'with Confidence', 'business-enterprise' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px"},"elements":{"link":{"color":{"text":"var:preset|color|pure-white"}}},"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|medium"}}},"textColor":"pure-white","fontFamily":"mulish"} -->
<p class="has-pure-white-color has-text-color has-link-color has-mulish-font-family" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:var(--wp--preset--spacing--medium);font-size:18px"><?php esc_html_e( 'We help companies streamline operations, boost profitability, and make smarter decisions through expert business consulting.', 'business-enterprise' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"secondary","textColor":"pure-white","style":{"elements":{"link":{"color":{"text":"var:preset|color|pure-white"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600"},"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"},"width":"1px"}},"fontFamily":"nunito","borderColor":"secondary"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-pure-white-color has-secondary-background-color has-text-color has-background has-link-color has-border-color has-secondary-border-color has-nunito-font-family has-custom-font-size wp-element-button" href="#" style="border-width:1px;border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;font-size:16px;font-style:normal;font-weight:600"><?php esc_html_e( 'Get A Consultation', 'business-enterprise' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"pure-white","textColor":"secondary","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600"},"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"},"width":"1px"}},"fontFamily":"nunito","borderColor":"secondary"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-secondary-color has-pure-white-background-color has-text-color has-background has-link-color has-border-color has-secondary-border-color has-nunito-font-family has-custom-font-size wp-element-button" href="#" style="border-width:1px;border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;font-size:16px;font-style:normal;font-weight:600"><?php esc_html_e( 'View Our Solutions', 'business-enterprise' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":1923,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/banner-img.png" alt="" class="wp-image-1923"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->