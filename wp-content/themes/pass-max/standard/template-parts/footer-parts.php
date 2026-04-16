<?php
/**
 * The footer of the theme
 * This file displays the footer content and includes theme-specific content
 *
 * @package     pass-max
 * @author      productiveminds.com
 * @copyright   productiveminds.com
 * 
 */

$productive_passmax_footer_style = productive_passmax_footer_style();
if ( 'footer_base_design_01' == $productive_passmax_footer_style ) {
    get_template_part( 'standard/template-parts/footer/part-footer-base-design-01' );
} else if ( 'footer_base_design_02' == $productive_passmax_footer_style ) {
    get_template_part( 'standard/template-parts/footer/part-footer-base-design-02' );
} else if ( 'footer_base_design_03' == $productive_passmax_footer_style ) {
    get_template_part( 'standard/template-parts/footer/part-footer-base-design-03' );
} else if ( 'footer_design_1' == $productive_passmax_footer_style ) {
    get_template_part( 'standard/template-parts/footer/part-footer-design-1' );
}
