<?php
/**
 * Productive Plugins checks
 * 
 * @package     pass-max
 * @author      productiveminds.com
 * @copyright   productiveminds.com
 * 
 */

if ( !function_exists( 'productive_passmax_is_productive_forms_active' ) ) {
    
    /**
     * Check if Productive Commerce is installed and activated
     */
    function productive_passmax_is_productive_commerce_active() {
        return function_exists( 'productive_commerce_is_active' );
    }
    /**
     * Check if Productive Commerce Extra is installed and activated
     */
    function productive_passmax_is_productive_commerce_extra_active() {
        return function_exists( 'productive_commerce_extra_is_active' );
    }

    
    /**
     * Check if Productive Forms is installed and activated
     */
    function productive_passmax_is_productive_forms_active() {
        return function_exists( 'productive_forms_is_active' );
    }
    /**
     * Check if Productive Forms Extra is installed and activated
     */
    function productive_passmax_is_productive_forms_extra_active() {
        return function_exists( 'productive_forms_extra_is_active' );
    }


    /**
     * Check if Productive Demo Importer is installed and activated
     */
    function productive_passmax_is_productive_demo_importer_active() {
        return function_exists( 'productive_demo_importer_is_active' );
    }

    
    
    
    function productive_passmax_is_language_switcher_wpml() {
        return class_exists( 'SitePress' );
    }
    
    function productiveminds_is_language_switcher_translate_press() {
        return class_exists( 'TRP_Translate_Press' );
    }
    
    function productiveminds_is_language_switcher_polylang() {
        return defined( 'POLYLANG_VERSION' );
    }
    
    function productiveminds_is_currency_switcher_wcml() {
        return function_exists( 'wcml_loader' );
    }
    
    function productiveminds_is_currency_switcher_woocs() {
        return class_exists( 'WOOCS_STARTER' );
    }
    
    function productiveminds_is_mega_menu_max() {
        return class_exists( 'Mega_Menu' );
    }
    
    
    /**
     * Set whether Productive Commerce  Plugin
     */
    function productiveminds_is_productive_commerce() {
        return true;
    }
    
    /**
     * Set productiveminds_is_productive_content_element is used
     */
    function productiveminds_is_productive_content_element() {
        return true;
    }
    
    /**
     * Set productiveminds_is_productive_home_slider is used
     */
    function productiveminds_is_productive_home_slider() {
        return true;
    }

    /**
     * Set productiveminds_is_productive_faq is used
     */
    function productiveminds_is_productive_faq() {
        return true;
    }

    /**
     * Set productiveminds_is_productive_team is used
     */
    function productiveminds_is_productive_team() {
        return true;
    }

    /**
     * Set productiveminds_is_productive_testimonial is used
     */
    function productiveminds_is_productive_testimonial() {
        return true;
    }
}
