/**
 * Download admin js
 *
 * @package     pass-max
 * @author      productiveminds.com
 * @copyright   productiveminds.com
 * 
 */

function productive_passmax_execute_plugin_admin_scripts() {
    
    let productive_global_options_page_wrapper_page_wrapper_body = document.querySelector(".productive-global-options-page-wrapper .page-wrapper-body");
    if( null !== productive_global_options_page_wrapper_page_wrapper_body && undefined !== productive_global_options_page_wrapper_page_wrapper_body ) {
        let i;
        const productive_global_options_page_wrapper_notices = document.querySelectorAll(".productive-global-options-page-wrapper .notice");
        for (i = 0; i < productive_global_options_page_wrapper_notices.length; i++) {
            let productive_global_options_page_wrapper = productive_global_options_page_wrapper_notices[i];
            productive_global_options_page_wrapper_page_wrapper_body.prepend( productive_global_options_page_wrapper );
        }
        
        const productive_global_options_page_wrapper_infos = document.querySelectorAll(".productive-global-options-page-wrapper .info");
        for (i = 0; i < productive_global_options_page_wrapper_infos.length; i++) {
            let productive_global_options_page_wrapper = productive_global_options_page_wrapper_infos[i];
            productive_global_options_page_wrapper_page_wrapper_body.prepend( productive_global_options_page_wrapper );
        }
        
        const productive_global_options_page_wrapper_warnings = document.querySelectorAll(".productive-global-options-page-wrapper .warning");
        for (i = 0; i < productive_global_options_page_wrapper_warnings.length; i++) {
            let productive_global_options_page_wrapper = productive_global_options_page_wrapper_warnings[i];
            productive_global_options_page_wrapper_page_wrapper_body.prepend( productive_global_options_page_wrapper );
        }
        
        const productive_global_options_page_wrapper_errors = document.querySelectorAll(".productive-global-options-page-wrapper .error");
        for (i = 0; i < productive_global_options_page_wrapper_errors.length; i++) {
            let productive_global_options_page_wrapper = productive_global_options_page_wrapper_errors[i];
            productive_global_options_page_wrapper_page_wrapper_body.prepend( productive_global_options_page_wrapper );
        }
    }
}
document.addEventListener( 'DOMContentLoaded', productive_passmax_execute_plugin_admin_scripts() );
