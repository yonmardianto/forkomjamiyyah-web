<?php
/**
 * The function php file for the theme
 *
 * @package     pass-max
 * @author      productiveminds.com
 * @copyright   productiveminds.com
 * 
 */

require_once get_template_directory() . '/includes/start.php';

require PRODUCTIVE_PASSMAX_THEME_BASE_PATH . '/standard/functions-standard.php';

function productiveminds_theme_is_extra() {
    return function_exists( 'productiveminds_theme_extra_is_active' );
}

function productive_passmax_is_extra() {
    return function_exists( 'productive_passmax_extra_is_active' );
}
