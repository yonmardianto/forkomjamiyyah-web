/**
 * @author      productiveminds.com
 * @copyright   productiveminds.com
 */


/* Option Settings */
function productive_global_start_options_action_text_and_select( action_textbox_obj, form_css_id, action_name ) {
    
    if( undefined === action_textbox_obj || null === action_textbox_obj ) {
        return;
    }
    
    /* Info Box */
    let form_report_box_container      = document.querySelector( '.productiveminds_admin_notification_container' );
    let form_report_box                = form_report_box_container.querySelector( '.productiveminds_admin_info_box' );
    
    form_report_box_container.classList.add("noned");
    form_report_box.classList.remove("bordered-left-error", "bordered-left-success", "bordered-left-warning");
    form_report_box.innerHTML = "";
    
    action_textbox_obj.classList.remove("outline-full-error");
    let options_setting_input_name = action_textbox_obj.name;
    let options_setting_input_value = action_textbox_obj.value;
    
    let array_of_params = new Array();
    array_of_params.push(form_report_box_container);
    array_of_params.push(form_report_box);
    array_of_params.push(action_textbox_obj);
    array_of_params.push(options_setting_input_name);
    array_of_params.push(options_setting_input_value);
    
    productive_global_process_options_action_ajax( array_of_params, action_name );
}

function productive_global_start_options_action_checkbox( action_checkbox_obj, form_css_id, action_name ) {
    
    if( undefined === action_checkbox_obj || null === action_checkbox_obj ) {
        return;
    }
    
    /* Info Box */
    let form_report_box_container      = document.querySelector( '.productiveminds_admin_notification_container' );
    let form_report_box                = form_report_box_container.querySelector( '.productiveminds_admin_info_box' );
    
    form_report_box_container.classList.add("noned");
    form_report_box.classList.remove("bordered-left-error", "bordered-left-success", "bordered-left-warning");
    form_report_box.innerHTML = "";
    
    action_checkbox_obj.classList.remove("outline-full-error");
    let options_setting_input_name = action_checkbox_obj.name;
    let options_setting_input_value = 'un_checked';
    if( action_checkbox_obj.checked ) {
        options_setting_input_value = 'checked';
    }
    
    let array_of_params = new Array();
    array_of_params.push(form_report_box_container);
    array_of_params.push(form_report_box);
    array_of_params.push(action_checkbox_obj);
    array_of_params.push(options_setting_input_name);
    array_of_params.push(options_setting_input_value);
    
    productive_global_process_options_action_ajax( array_of_params, action_name );
}

function productive_global_process_options_action_ajax( array_of_params, action_name ) {
    
    if( null === array_of_params || !Array.isArray(array_of_params) || 1 > array_of_params.length ) {
        return;
    }
    
    let form_report_box_container               = array_of_params[0];
    let form_report_box                         = array_of_params[1];
    
    let options_setting_input_object            = array_of_params[2];
    let options_setting_input_name              = array_of_params[3];
    let options_setting_input_value             = array_of_params[4];
    
    let is_async    = true;
    let method      = "POST";
    let url         = productive_global_admin_js_url_name.ajax_admin_url;
    
    let action      = "action="+action_name;
    let nonce       = "&nonce="+productive_global_admin_js_url_name.nonce;
    
    let productive_global_options_setting_input_name           = '&productive_global_options_setting_input_name='+options_setting_input_name;
    let productive_global_options_setting_input_value          = '&productive_global_options_setting_input_value='+options_setting_input_value;
    
    let data = action+nonce+productive_global_options_setting_input_name+productive_global_options_setting_input_value;
    
    const productive_ajax = new XMLHttpRequest();
    productive_ajax.open(method, url, is_async);    
    productive_ajax.setRequestHeader( "Content-Type", "application/x-www-form-urlencoded" );
    productive_ajax.onreadystatechange = function () {
        if (productive_ajax.readyState === XMLHttpRequest.DONE && productive_ajax.status === 200) {
            let responseJSONObject = JSON.parse(productive_ajax.response);
            let response = responseJSONObject.data;
            
            if ( response.code === 1 ) {
                
                form_report_box.classList.add('bordered-left-success');
                form_report_box.innerHTML = ''+response.result;
                form_report_box_container.classList.remove("noned");
                
            } else {
                
                form_report_box.classList.add('bordered-left-error');
                form_report_box.innerHTML = ''+response.result;
                form_report_box_container.classList.remove("noned");
                
            }
            
            if ( response.confirm_action === 'display_result_short' ) {
                setTimeout( productive_global_reset_options_action_ajax, response.confirm_action_delay, array_of_params );
            } else if ( response.confirm_action === 'reload_page' ) {
                window.onbeforeunload = function() {
                    return true;
                };
                setTimeout( productive_global_window_reload_admin_page, response.confirm_action_delay );
            } else if ( response.confirm_action === 'window_open' ) {
                setTimeout( productive_global_window_admin_open, response.confirm_action_delay, response.go_to_url, response.go_to_url_target );
            } else if ( response.confirm_action === 'location_assign' ) {
                setTimeout( productive_global_window_location_admin_assign, response.confirm_action_delay, response.go_to_url );
            } else if ( response.confirm_action === 'location_replace' ) {
                setTimeout( productive_global_window_location_admin_replace, response.confirm_action_delay, response.go_to_url );
            } 
        }
    };
    productive_ajax.send( data );
}
function productive_global_reset_options_action_ajax( array_of_params ) {
    
    let form_report_box_container       = array_of_params[0];
    let form_report_box                 = array_of_params[1];
    
    if( undefined !== form_report_box && null !== form_report_box ) {
        form_report_box.classList.remove('bordered-left-success');
        form_report_box.innerHTML = '';
    }
    
    if( undefined !== form_report_box_container && null !== form_report_box_container ) {
        form_report_box_container.classList.add("noned");
    }
    
}


/* Accordion toggler */
function productive_global_init_admin_accordion_container_toggle_only_selected() {
    const productive_v_toggleable_content_activators = document.querySelectorAll(".productive_v_toggleable_content_activator.toggle_only_selected");
    let i;
    for (i = 0; i < productive_v_toggleable_content_activators.length; i++) {
        let productive_v_toggleable_content_activator = productive_v_toggleable_content_activators[i];
        productive_global_init_admin_accordion_button( productive_v_toggleable_content_activator );
    }
}

function productive_global_init_admin_accordion_button(productive_v_toggleable_content_activator) {
    if( undefined !== productive_v_toggleable_content_activator && null !== productive_v_toggleable_content_activator ) {
        let productive_container_open_close_button      = productive_v_toggleable_content_activator.parentElement.querySelector( "button.productive-popup-close-button" );
        productive_container_open_close_button.classList.remove('noned');
        let activate_open_icon_container                = productive_container_open_close_button.querySelector( ".activate_open_icon" );
        let activate_close_icon_container               = productive_container_open_close_button.querySelector( ".activate_close_icon" );
        activate_open_icon_container.classList.remove('noned');
        
        /* Container responsive to clicks */
        productive_v_toggleable_content_activator.style.cursor = "pointer";
        productive_global_admin_accordion_button_response( productive_v_toggleable_content_activator, productive_v_toggleable_content_activator, activate_open_icon_container, activate_close_icon_container );
        
        /* Button responsive to clicks */
        productive_global_admin_accordion_button_response( productive_container_open_close_button, productive_v_toggleable_content_activator, activate_open_icon_container, activate_close_icon_container );
        
    }
}

function productive_global_admin_accordion_button_response(button, productive_v_toggleable_content_activator, activate_open_icon_container, activate_close_icon_container) {
    button.addEventListener("click", function (e) {
        e.preventDefault();
        e.stopImmediatePropagation();
        
        let productive_v_toggleable_content_container = productive_v_toggleable_content_activator.parentElement.querySelector( ".productive_v_toggleable_content_container" );
        if( undefined !== productive_v_toggleable_content_container && null !== productive_v_toggleable_content_container ) {
            productive_v_toggleable_content_container.classList.toggle('noned');
            activate_open_icon_container.classList.toggle('noned');
            activate_close_icon_container.classList.toggle('noned');
        }
    });
}


/* Install PASS Addons */
function productive_global_init_install_plugin() {
    let productive_init_install_plugin_span      = document.querySelector( '.productive_init_install_plugin_span.clear_min' );
    if( undefined === productive_init_install_plugin_span || null === productive_init_install_plugin_span ) {
        let global_install_plugin_buttons      = document.querySelectorAll( '.productive_admin_anchor_button.global_install_plugin' );
        if( undefined !== global_install_plugin_buttons || null !== global_install_plugin_buttons ) {
            let k;
            for (k = 0; k < global_install_plugin_buttons.length; k++) {
                let global_install_plugin_button = global_install_plugin_buttons[k];
                global_install_plugin_button.addEventListener("click", function (e) {
                    e.preventDefault();
                    e.stopImmediatePropagation();
                    
                    e.stopImmediatePropagation();
                    productive_global_start_install_activate_plugin( global_install_plugin_button );
                });
            }
            let confirmation_p = document.createElement('span');
            confirmation_p.classList.add( 'productive_init_install_plugin_span', 'clear_min' );
            let wpbody_content = document.getElementById( 'wpbody-content' );
            if( undefined !== wpbody_content && null !== wpbody_content ) {
                wpbody_content.appendChild( confirmation_p );
            }
        }
    }
}
function productive_global_start_install_activate_plugin( button_obj ) {
    
    if( undefined === button_obj || null === button_obj ) {
        return;
    }
    
    let plugin_action = button_obj.getAttribute( 'data-plugin_action' );
    if( undefined === plugin_action || null === plugin_action || '' === plugin_action ) {
        return;
    }
    
    if( 'install' === plugin_action || 'install_and_activate' === plugin_action ) {
        productive_global_do_install_plugin( button_obj );
    } else if( 'activate' === plugin_action ) {
        productive_global_do_activate_plugin( button_obj );
    }
}
    
function productive_global_do_install_plugin( button_obj ) {
    
    if( undefined === button_obj || null === button_obj ) {
        return;
    }
    
    let plugin_slug = button_obj.getAttribute( 'data-plugin_slug' );
    let plugin_action = button_obj.getAttribute( 'data-plugin_action' );
    if( (null === plugin_slug || '' === plugin_slug) || (null === plugin_action || '' === plugin_action) ) {
        return;
    }
    
    let action_name = button_obj.getAttribute( 'data-action_name' );
    
    let plugin_name                     = button_obj.getAttribute( 'data-plugin_name' );
    let item_installtion_normal_cta     = button_obj.getAttribute( 'data-item_installtion_normal_cta' );
    let item_installtion_notice_cta     = button_obj.getAttribute( 'data-item_installtion_notice_cta' );
    let item_installtion_success_cta    = button_obj.getAttribute( 'data-item_installtion_success_cta' );
    let silent_action                   = button_obj.getAttribute( 'data-silent_action' );
    
    let confirm_action = button_obj.getAttribute( 'data-confirm_action' );
    let confirm_action_delay = button_obj.getAttribute( 'data-confirm_action_delay' );
    let go_to_url = button_obj.getAttribute( 'data-go_to_url' );
    
    let is_async    = true;
    let method      = "POST";
    let url         = productive_global_admin_js_url_name.ajax_admin_url;
    
    let action      = "action=productiveminds_wp_ajax_install_plugin";
    let nonce       = "&nonce="+productive_global_admin_js_url_name.nonce;
    let _ajax_nonce = "&_ajax_nonce="+productive_global_admin_js_url_name.updates_nonce;
    
    let productive_global_plugin_slug       = '&productive_global_plugin_slug='+plugin_slug;
    let productive_global_plugin_action     = '&productive_global_plugin_action='+plugin_action;
    let productive_global_silent_action     = '&productive_global_silent_action='+silent_action;
    let slug                                = '&slug='+plugin_slug;
    
    let data = action+nonce+_ajax_nonce+productive_global_plugin_slug+productive_global_plugin_action+productive_global_silent_action+slug;
    
    button_obj.innerHTML = item_installtion_notice_cta;
    
    const productive_ajax = new XMLHttpRequest();
    productive_ajax.open(method, url, is_async);    
    productive_ajax.setRequestHeader( "Content-Type", "application/x-www-form-urlencoded" );
    productive_ajax.onreadystatechange = function () {
        if (productive_ajax.readyState === XMLHttpRequest.DONE && productive_ajax.status === 200) {
            let responseJSONObject = JSON.parse(productive_ajax.response);
            let response = responseJSONObject.data;
            
            if ( undefined !== response.activateUrl && null !== response.activateUrl && response.activateUrl.includes('http') ) {
                
                if( 'install_and_activate' === plugin_action ) {
                    button_obj.setAttribute( 'data-plugin_action', 'activate' );
                    button_obj.setAttribute( 'data-action_name', 'productive_global_do_activate_plugin_ajax' );
                    productive_global_do_activate_plugin( button_obj );
                } else if( 'install' === plugin_action ) {
                    button_obj.innerHTML = item_installtion_success_cta;
                    button_obj.setAttribute( 'data-plugin_action', 'activate' );
                    
                    let go_to_url_target = '';
                    productive_global_reset_install_or_activate_plugin( confirm_action, confirm_action_delay, go_to_url, go_to_url_target );
                    
                }
                
            } else {
                button_obj.innerHTML = item_installtion_normal_cta;            
            }
        }
    };
    productive_ajax.send( data );
}

function productive_global_do_activate_plugin( button_obj ) {
    
    if( undefined === button_obj || null === button_obj ) {
        return;
    }
    
    let plugin_slug = button_obj.getAttribute( 'data-plugin_slug' );
    let plugin_action = button_obj.getAttribute( 'data-plugin_action' );
    if( (null === plugin_slug || '' === plugin_slug) || (null === plugin_action || '' === plugin_action) ) {
        return;
    }
    
    let action_name = button_obj.getAttribute( 'data-action_name' );
    
    let plugin_name                     = button_obj.getAttribute( 'data-plugin_name' );
    let item_installtion_normal_cta     = button_obj.getAttribute( 'data-item_installtion_normal_cta' );
    let item_installtion_notice_cta     = button_obj.getAttribute( 'data-item_installtion_notice_cta' );
    let item_installtion_success_cta    = button_obj.getAttribute( 'data-item_installtion_success_cta' );
    let silent_action                   = button_obj.getAttribute( 'data-silent_action' );
    
    let confirm_action = button_obj.getAttribute( 'data-confirm_action' );
    let confirm_action_delay = button_obj.getAttribute( 'data-confirm_action_delay' );
    let go_to_url = button_obj.getAttribute( 'data-go_to_url' );
    
    let is_async    = true;
    let method      = "POST";
    let url         = productive_global_admin_js_url_name.ajax_admin_url;
    
    let action      = "action="+action_name;
    let nonce       = "&nonce="+productive_global_admin_js_url_name.nonce;
    let _ajax_nonce = "&_ajax_nonce="+productive_global_admin_js_url_name.updates_nonce;
    
    let productive_global_plugin_slug           = '&productive_global_plugin_slug='+plugin_slug;
    let productive_global_plugin_name           = '&productive_global_plugin_name='+plugin_name;
    let productive_global_plugin_action         = '&productive_global_plugin_action='+plugin_action;
    let productive_global_confirm_action        = '&productive_global_confirm_action='+confirm_action;
    let productive_global_confirm_action_delay  = '&productive_global_confirm_action_delay='+confirm_action_delay;
    let productive_global_go_to_url             = '&productive_global_go_to_url='+go_to_url;
    let productive_global_silent_action         = '&productive_global_silent_action='+silent_action;
    let slug                                    = '&slug='+plugin_slug;
    
    let data = action+nonce+_ajax_nonce+productive_global_plugin_slug+productive_global_plugin_name+productive_global_plugin_action+
            productive_global_confirm_action+productive_global_confirm_action_delay+productive_global_go_to_url+productive_global_silent_action+slug;
    
    button_obj.innerHTML = item_installtion_notice_cta;
    
    const productive_ajax = new XMLHttpRequest();
    productive_ajax.open(method, url, is_async);    
    productive_ajax.setRequestHeader( "Content-Type", "application/x-www-form-urlencoded" );
    productive_ajax.onreadystatechange = function () {
        if (productive_ajax.readyState === XMLHttpRequest.DONE && productive_ajax.status === 200) {
            
            let responseJSONObject = JSON.parse(productive_ajax.response);
            let response = responseJSONObject.data;
            
            if ( 1 === response.code ) {
                
                button_obj.innerHTML = item_installtion_success_cta;
            } else {
                button_obj.innerHTML = item_installtion_normal_cta;
            }
            
            productive_global_reset_install_or_activate_plugin( response.confirm_action, response.confirm_action_delay, response.go_to_url, response.go_to_url_target );
            
        }
    };
    productive_ajax.send( data );
}

function productive_global_reset_install_or_activate_plugin( confirm_action, confirm_action_delay, go_to_url, go_to_url_target ) {
    if ( confirm_action === 'reload_page' ) {
        setTimeout( productive_global_window_reload_admin_page, confirm_action_delay );
    } else if ( confirm_action === 'window_open' ) {
        setTimeout( productive_global_window_admin_open, confirm_action_delay, go_to_url, go_to_url_target );
    } else if ( confirm_action === 'location_assign' ) {
        setTimeout( productive_global_window_location_admin_assign, confirm_action_delay, go_to_url );
    } else if ( confirm_action === 'location_replace' ) {
        setTimeout( productive_global_window_location_admin_replace, confirm_action_delay, go_to_url );
    } 
}


/* Notice Dismissal */
function productive_global_init_notice_dismissal() {
    let productive_init_notice_dismissal_span      = document.querySelector( '.productive_init_notice_dismissal_span.clear_min' );
    if( undefined === productive_init_notice_dismissal_span || null === productive_init_notice_dismissal_span ) {
        let notice_dismissal_buttons      = document.querySelectorAll( '.productive-process-notice-dismissal button.notice-dismiss' ); 
        if( undefined !== notice_dismissal_buttons || null !== notice_dismissal_buttons ) {
            let k;
            for (k = 0; k < notice_dismissal_buttons.length; k++) {
                let notice_dismissal_button = notice_dismissal_buttons[k];
                notice_dismissal_button.addEventListener("click", function (e) {
                    e.preventDefault();
                    e.stopImmediatePropagation();
                    
                    productive_global_do_notice_dismissal( notice_dismissal_button );
                });
            }
            let confirmation_p = document.createElement('span');
            confirmation_p.classList.add( 'productive_init_notice_dismissal_span', 'clear_min' );
            let wpbody_content = document.getElementById( 'wpbody-content' );
            if( undefined !== wpbody_content && null !== wpbody_content ) {
                wpbody_content.appendChild( confirmation_p );
            }
        }
    }
}
function productive_global_do_notice_dismissal( button_obj ) {
    
    if( undefined === button_obj || null === button_obj ) {
        return;
    }
    
    let button_container = button_obj.parentElement;
    
    if( !button_container.classList.contains("productive-process-notice-dismissal") ) {
        return;
    }
    
    let dismiss_item_slug = button_container.getAttribute( 'data-dismiss_item_slug' );
    let dismiss_option_name = button_container.getAttribute( 'data-dismiss_option_name' );
    if( (null === dismiss_item_slug || '' === dismiss_item_slug) || (null === dismiss_option_name || '' === dismiss_option_name) ) {
        return;
    }
    
    let dismiss_action_name = button_container.getAttribute( 'data-dismiss_action_name' );
    
    let dismiss_option_value = button_container.getAttribute( 'data-dismiss_option_value' );
    
    let confirm_action = button_container.getAttribute( 'data-confirm_action' );
    let confirm_action_delay = button_container.getAttribute( 'data-confirm_action_delay' );
    let go_to_url = button_container.getAttribute( 'data-go_to_url' );
    
    let is_async    = true;
    let method      = "POST";
    let url         = productive_global_admin_js_url_name.ajax_admin_url;
    
    let action      = "action="+dismiss_action_name;
    let nonce       = "&nonce="+productive_global_admin_js_url_name.nonce;
    let _ajax_nonce = "&_ajax_nonce="+productive_global_admin_js_url_name.updates_nonce;
    
    let productive_global_dismiss_item_slug     = '&productive_global_dismiss_item_slug='+dismiss_item_slug;
    let productive_global_dismiss_option_name         = '&productive_global_dismiss_option_name='+dismiss_option_name;
    let productive_global_dismiss_option_value           = '&productive_global_dismiss_option_value='+dismiss_option_value;
    let productive_global_confirm_action        = '&productive_global_confirm_action='+confirm_action;
    let productive_global_confirm_action_delay  = '&productive_global_confirm_action_delay='+confirm_action_delay;
    let productive_global_go_to_url             = '&productive_global_go_to_url='+go_to_url;
    
    let data = action+nonce+_ajax_nonce+productive_global_dismiss_item_slug+productive_global_dismiss_option_name+productive_global_dismiss_option_value+
            productive_global_confirm_action+productive_global_confirm_action_delay+productive_global_go_to_url;
    
    const productive_ajax = new XMLHttpRequest();
    productive_ajax.open(method, url, is_async);    
    productive_ajax.setRequestHeader( "Content-Type", "application/x-www-form-urlencoded" );
    productive_ajax.onreadystatechange = function () {
        if (productive_ajax.readyState === XMLHttpRequest.DONE && productive_ajax.status === 200) {
            
            let responseJSONObject = JSON.parse(productive_ajax.response);
            let response = responseJSONObject.data;
            
            if ( 1 === response.code ) {
                
            } else {
                
            }
            
            productive_global_reset_install_or_activate_plugin( response.confirm_action, response.confirm_action_delay, response.go_to_url, response.go_to_url_target );
            
        }
    };
    productive_ajax.send( data );
}


/* Generics */
function productive_global_window_admin_open(url, target) {
    window.onbeforeunload = null;
    window.open(url, target);
}

function productive_global_window_location_admin_assign(url) {
    window.onbeforeunload = null;
    location.assign(url);
}

function productive_global_window_location_admin_replace(url) {
    window.onbeforeunload = null;
    location.replace(url);
}

function productive_global_window_reload_admin_page() {
    window.onbeforeunload = null;
    location.reload();
}

function productive_global_reset_admin_timeout( timeout_fn ) {
    window.onbeforeunload = null;
    clearTimeout( timeout_fn );
}










function productive_global_execute_global_scripts_admin() {
    let delay = 1000;
    setTimeout( _productive_global_execute_global_scripts_admin, delay );
}
function _productive_global_execute_global_scripts_admin() {
    productive_global_init_admin_accordion_container_toggle_only_selected();
    productive_global_init_install_plugin();
    productive_global_init_notice_dismissal();
}
document.addEventListener( 'DOMContentLoaded', productive_global_execute_global_scripts_admin() );
