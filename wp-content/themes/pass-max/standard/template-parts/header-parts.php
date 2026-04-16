<?php
/**
 * Header page.
 *
 * @package     pass-max
 * @author      productiveminds.com
 * @copyright   productiveminds.com
 * 
 */

$productive_passmax_header_style = productive_passmax_header_style();
if ( 'header_base_design_01' == $productive_passmax_header_style ) {
    get_template_part( 'standard/template-parts/header/part-header-base-design-01' );
} else if ( 'header_base_design_02' == $productive_passmax_header_style ) {
    get_template_part( 'standard/template-parts/header/part-header-base-design-02' );
} else if ( 'header_base_design_03' == $productive_passmax_header_style ) {
    get_template_part( 'standard/template-parts/header/part-header-base-design-03' );
} else if ( 'header_design_1' == $productive_passmax_header_style ) {
    get_template_part( 'standard/template-parts/header/part-header-design-1' );
} else if ( 'header_design_10' == $productive_passmax_header_style ) {
    get_template_part( 'standard/template-parts/header/part-header-design-10' );
}

