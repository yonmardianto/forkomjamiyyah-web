<?php
/**
 * @author      productiveminds.com
 * @copyright   productiveminds.com
 */

if ( !defined('ABSPATH') ) {
    die();
}


if( !function_exists( 'productiveminds_wp_ajax_install_plugin' ) ) {
    function productiveminds_wp_ajax_install_plugin() {
        // Handle for wp_ajax_install_plugin
    }
    add_action( 'wp_ajax_productiveminds_wp_ajax_install_plugin', 'wp_ajax_install_plugin' );
    add_action( 'wp_ajax_nopriv_productiveminds_wp_ajax_install_plugin', 'wp_ajax_install_plugin' );
}


/**
 * Method productive_global_do_activate_plugin_ajax ''.
 */
function productive_global_do_activate_plugin_ajax() {
    $response = array(
        'code'                      => 0,
        'result'                    => esc_html__( 'Error activating plugin.', 'pass-max' ),
        'confirm_action'            => 'display_result_short', // accepts: window_open, location_assign, location_replace, display_result_short, display_result_persist, reload_page
        'confirm_action_delay'      => '3000', // Assign a value always
        'go_to_url'                 => '', // Use only, if confirm_action = window_open, location_assign, location_replace (accepts: a valid URL)
        'go_to_url_target'          => '', // Use only, if confirm_action = window_open (accepts: _parent _blank _self, _top)
    );
    
    if ( isset( $_POST['nonce'] ) && wp_verify_nonce( sanitize_text_field( wp_unslash($_POST['nonce']) ), PRODUCTIVE_GLOBAL_SCRIPTS_NONCE_ADMIN) ) {
        
        if( !isset($_POST['productive_global_plugin_slug']) || !isset($_POST['productive_global_plugin_name']) ||
                !isset($_POST['productive_global_plugin_action']) || !isset($_POST['productive_global_confirm_action']) ||
                !isset($_POST['productive_global_go_to_url']) || !isset($_POST['productive_global_silent_action']) ||
                !isset($_POST['productive_global_confirm_action_delay'])
        ) {
            return;
        }
        
        $plugin_slug            = sanitize_text_field( wp_unslash($_POST['productive_global_plugin_slug']) );
        $plugin_name            = sanitize_text_field( wp_unslash($_POST['productive_global_plugin_name']) );
        $plugin_action          = sanitize_text_field( wp_unslash($_POST['productive_global_plugin_action']) );
        $confirm_action         = sanitize_text_field( wp_unslash($_POST['productive_global_confirm_action']) );
        $go_to_url              = sanitize_text_field( wp_unslash($_POST['productive_global_go_to_url']) );
        $silent_action          = sanitize_text_field( wp_unslash($_POST['productive_global_silent_action']) );
        $confirm_action_delay   = sanitize_text_field( wp_unslash($_POST['productive_global_confirm_action_delay']) );
        
        if( !empty($plugin_slug) && 'activate' == $plugin_action ) {
            $plugin_path = productive_global_get_installed_plugin_path( $plugin_slug );
            if( !empty($plugin_path) ) {
                
                $is_silent_activated = false;
                if( intval($silent_action) ) {
                    $is_silent_activated = true;
                }
                
                ob_start();
                $activated = productive_global_do_activate_plugin( $plugin_path, '', false, $is_silent_activated );
                ob_get_clean();
                
                if( null == $activated ) {
                    $response['code']       = 1;
                    $response['result']     = esc_html__( 'Successfully activated.', 'pass-max' );
                    if( !empty($confirm_action) ) {
                        $response['confirm_action']     = $confirm_action;
                    }
                    if( !empty($confirm_action_delay) ) {
                        $response['confirm_action_delay']     = $confirm_action_delay;
                    }
                    if( !empty($go_to_url) ) {
                        $response['go_to_url']     = esc_url($go_to_url);
                    }
                }
            }
        }
        
    }
    
    wp_send_json_success( $response );
    wp_die();
}
add_action( 'wp_ajax_productive_global_do_activate_plugin_ajax', 'productive_global_do_activate_plugin_ajax' );
add_action( 'wp_ajax_nopriv_productive_global_do_activate_plugin_ajax', 'productive_global_do_activate_plugin_ajax' );

/**
 * Method productive_global_do_notice_dismissal_ajax ''.
 */
function productive_global_do_notice_dismissal_ajax() {
    $response = array(
        'code'                      => 0,
        'result'                    => esc_html__( 'Error activating plugin.', 'pass-max' ),
        'confirm_action'            => '', // accepts: window_open, location_assign, location_replace, display_result_short, display_result_persist, reload_page
        'confirm_action_delay'      => '', // Assign a value always
        'go_to_url'                 => '', // Use only, if confirm_action = window_open, location_assign, location_replace (accepts: a valid URL)
        'go_to_url_target'          => '', // Use only, if confirm_action = window_open (accepts: _parent _blank _self, _top)
    );
    
    if ( isset( $_POST['nonce'] ) && wp_verify_nonce( sanitize_text_field( wp_unslash($_POST['nonce']) ), PRODUCTIVE_GLOBAL_SCRIPTS_NONCE_ADMIN) ) {
        
        if( !isset($_POST['productive_global_dismiss_item_slug']) || !isset($_POST['productive_global_dismiss_option_name']) ||
                !isset($_POST['productive_global_dismiss_option_value']) || !isset($_POST['productive_global_confirm_action']) ||
                !isset($_POST['productive_global_confirm_action_delay']) || !isset($_POST['productive_global_go_to_url'])
        ) {
            return;
        }
        
        $dismiss_item_slug      = sanitize_text_field( wp_unslash($_POST['productive_global_dismiss_item_slug']) );
        $dismiss_option_name    = sanitize_text_field( wp_unslash($_POST['productive_global_dismiss_option_name']) );
        $dismiss_option_value   = sanitize_text_field( wp_unslash($_POST['productive_global_dismiss_option_value']) );
        $confirm_action         = sanitize_text_field( wp_unslash($_POST['productive_global_confirm_action']) );
        $confirm_action_delay   = sanitize_text_field( wp_unslash($_POST['productive_global_confirm_action_delay']) );
        $go_to_url              = sanitize_text_field( wp_unslash($_POST['productive_global_go_to_url']) );
        
        $is_valid_option_params = false;
        if( productive_global_is_a_productive_product( $dismiss_option_name ) && "" != $dismiss_option_value ) {
            $is_valid_option_params = true;
        }
        
        if( $is_valid_option_params && !empty($dismiss_option_name) ) {
            
            $updated = update_option( $dismiss_option_name, $dismiss_option_value );
            
            if( $updated ) {
                $response['code']       = 1;
                $response['result']     = esc_html__( 'Successfully activated.', 'pass-max' );
                if( !empty($confirm_action) ) {
                    $response['confirm_action']     = $confirm_action;
                }
                if( !empty($confirm_action_delay) ) {
                    $response['confirm_action_delay']     = $confirm_action_delay;
                }
                if( !empty($go_to_url) ) {
                    $response['go_to_url']     = esc_url($go_to_url);
                }
            }
        }
        
    }
    
    wp_send_json_success( $response );
    wp_die();
}
add_action( 'wp_ajax_productive_global_do_notice_dismissal_ajax', 'productive_global_do_notice_dismissal_ajax' );
add_action( 'wp_ajax_nopriv_productive_global_do_notice_dismissal_ajax', 'productive_global_do_notice_dismissal_ajax' );
