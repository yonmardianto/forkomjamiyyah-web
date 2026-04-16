<?php
/**
 * @package     pass-max
 * @author      productiveminds.com
 * @copyright   productiveminds.com
 * 
 */

if ( !is_active_sidebar( 'sidebar-1' ) ) {
	return;
}

do_action( 'productive_global_render_sidebar_woo_archive', 'productive-sidebar-left' );