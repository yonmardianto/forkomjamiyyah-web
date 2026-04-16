<?php
/**
 * Theme Customiser Base
 *
 * @package     pass-max
 * @author      productiveminds.com
 * @copyright   productiveminds.com
 * 
*/

if ( ! defined( 'ABSPATH' ) ) {
    die();
}

// Load first
require PRODUCTIVE_PASSMAX_THEME_BASE_PATH . '/includes/customiser/productive-theme-customiser-common.php';

require PRODUCTIVE_PASSMAX_THEME_BASE_PATH . '/includes/customiser/productive-theme-customiser-announcement.php';

require PRODUCTIVE_PASSMAX_THEME_BASE_PATH . '/includes/customiser/productive-theme-customiser-header.php';
require PRODUCTIVE_PASSMAX_THEME_BASE_PATH . '/includes/customiser/productive-theme-customiser-global-popup.php';
require PRODUCTIVE_PASSMAX_THEME_BASE_PATH . '/includes/customiser/productive-theme-customiser-top-banner.php';
require PRODUCTIVE_PASSMAX_THEME_BASE_PATH . '/includes/customiser/productive-theme-customiser-layout-and-design.php';
require PRODUCTIVE_PASSMAX_THEME_BASE_PATH . '/includes/customiser/productive-theme-customiser-footer.php';
require PRODUCTIVE_PASSMAX_THEME_BASE_PATH . '/includes/customiser/productive-theme-customiser-footer-copyright.php';
require PRODUCTIVE_PASSMAX_THEME_BASE_PATH . '/includes/customiser/productive-theme-customiser-404.php';

require PRODUCTIVE_PASSMAX_THEME_BASE_PATH . '/includes/customiser/productive-theme-customiser-homepage-banner-and-slider-options.php';
require PRODUCTIVE_PASSMAX_THEME_BASE_PATH . '/includes/customiser/productive-theme-customiser-homepage-banner-content.php';
require PRODUCTIVE_PASSMAX_THEME_BASE_PATH . '/includes/customiser/productive-theme-customiser-homepage-banner-text-title.php';
require PRODUCTIVE_PASSMAX_THEME_BASE_PATH . '/includes/customiser/productive-theme-customiser-homepage-banner-text-explainer.php';
require PRODUCTIVE_PASSMAX_THEME_BASE_PATH . '/includes/customiser/productive-theme-customiser-homepage-banner-text-auxiliary.php';
require PRODUCTIVE_PASSMAX_THEME_BASE_PATH . '/includes/customiser/productive-theme-customiser-homepage-banner-ctas.php';
require PRODUCTIVE_PASSMAX_THEME_BASE_PATH . '/includes/customiser/productive-theme-customiser-homepage-products-bestsellers.php';
require PRODUCTIVE_PASSMAX_THEME_BASE_PATH . '/includes/customiser/productive-theme-customiser-homepage-products-latest.php';
require PRODUCTIVE_PASSMAX_THEME_BASE_PATH . '/includes/customiser/productive-theme-customiser-homepage-products-featured.php';
require PRODUCTIVE_PASSMAX_THEME_BASE_PATH . '/includes/customiser/productive-theme-customiser-homepage-products-on-sale.php';

require PRODUCTIVE_PASSMAX_THEME_BASE_PATH . '/includes/customiser/productive-theme-customiser-blog.php';
require PRODUCTIVE_PASSMAX_THEME_BASE_PATH . '/includes/customiser/productive-theme-customiser-blog-single.php';

require PRODUCTIVE_PASSMAX_THEME_BASE_PATH . '/includes/customiser/productive-theme-customiser-commerce-generic.php';
require PRODUCTIVE_PASSMAX_THEME_BASE_PATH . '/includes/customiser/productive-theme-customiser-commerce-categories.php';
require PRODUCTIVE_PASSMAX_THEME_BASE_PATH . '/includes/customiser/productive-theme-customiser-commerce-product-page.php';

require PRODUCTIVE_PASSMAX_THEME_BASE_PATH . '/includes/customiser/productive-theme-customiser-power-button.php';
