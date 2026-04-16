<?php
/**
 * Header page.
 *
 * @package     pass-max
 * @author      productiveminds.com
 * @copyright   productiveminds.com
 * 
 */
    $top_banner_and_breadcrumb_body_css = PRODUCTIVE_PASSMAX_CUSTOMIZER_show_top_banner;
    $productive_passmax_enable_header_home_header_as_overlay = '';
    if( productive_passmax_transparent_header_required() ) {
        $productive_passmax_enable_header_home_header_as_overlay = productive_passmax_enable_header_home_header_as_overlay();
    }
    if( function_exists('pass_addons_is_active') ) {
        $top_banner_and_breadcrumb_body_css .= ' ' . pass_addons_render_breadcrumb_is_active_on_page() . ' ' . $productive_passmax_enable_header_home_header_as_overlay;
    }
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php echo bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class( $top_banner_and_breadcrumb_body_css ); ?>>
    
    <?php
        wp_body_open();
        do_action( 'productive_passmax_body_open' );
    ?>
    
    <div class="site-body-flex-wrapper">
    
    <?php
        get_template_part( 'standard/template-parts/header-parts' );
