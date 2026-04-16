<?php
/**
 *
 * @package     pass-max
 * @author      productiveminds.com
 * @copyright   productiveminds.com
 * 
 */

require PRODUCTIVE_PASSMAX_THEME_BASE_PATH . '/standard/options/theme-settings.php';


/**
 * Method productive_passmax_scripts_inline.
 */
function productive_passmax_scripts_inline() {
    $custom_css = productive_passmax_apply_custom_css();
    wp_add_inline_style('productive_parent_theme_main_css_style', $custom_css);
}
if ( !is_admin() ) {
    add_action( 'wp_enqueue_scripts', 'productive_passmax_scripts', 79 );
    add_action( 'wp_enqueue_scripts', 'productive_passmax_scripts_inline', 80 );
    add_action( 'wp_enqueue_scripts', 'productive_passmax_scripts_overrides', 82 );
} else if ( is_admin() ) {
    global $pagenow;
    if( productive_global_is_block_editor_active() && 
            ( 'post.php' == $pagenow || 'post-new.php' == $pagenow || 'comment.php' == $pagenow ) ) {
        add_action( 'enqueue_block_assets', 'productive_passmax_scripts', 79 );
        add_action( 'enqueue_block_assets', 'productive_passmax_scripts_inline', 80 );
    add_action( 'wp_enqueue_scripts', 'productive_passmax_scripts_overrides', 82 );
    }
}

/**
 * Method productive_passmax_set_content_width
 * Sets the content width in pixels
 */
function productive_passmax_set_content_width() {
    if ( ! isset( $content_width ) ) {
        $content_width = PRODUCTIVE_PASSMAX_THEME_CONTENT_DEFAULT_WIDTH;
    }
    if ( ! isset( $GLOBALS['content_width'] ) ) {
        $GLOBALS['content_width'] = apply_filters( 'productive_passmax_set_content_width', $content_width );
    }
}
add_action( 'after_setup_theme', 'productive_passmax_set_content_width', 0 );


/**
 * Method productive_passmax_render_my_account_button
 */
function productive_passmax_render_my_account_button() {
    $url = '#';
    $productive_passmax_all_header_icons_size = productive_passmax_all_header_icons_size();
    if( productive_passmax_is_woocommerce_activated() ) {
        $url = get_permalink( wc_get_page_id( 'myaccount' ) );
    }
    
    $icon = 'user-circle-o';
    $icon_title = esc_html__( 'Account Login', 'pass-max');
    $section_content_login_popup = productive_passmax_enable_header_account_as_popup();
    $item_action_popup_open = '';
    if( !is_user_logged_in() && $section_content_login_popup ) {
        $item_action_popup_open = 'productive_account_login_popup_id';
    } else if( is_user_logged_in() && $section_content_login_popup && !productive_passmax_is_woocommerce_activated() ) {
        $icon = 'sign-out';
        $url = add_query_arg( array( 'action' => 'logout' ), home_url( 'wp-login.php' ) );
        $icon_title = esc_html__( 'Log Out', 'pass-max');
    }
    
    $productive_passmax_my_account_icon_args = array(
        'i'     => $icon, 
        'w'     => $productive_passmax_all_header_icons_size, 
        'h'     => $productive_passmax_all_header_icons_size, 
        'css'   => '',
        'svg_css'   => ''
    );
    ?>
    <span data-open-popup="<?php echo esc_attr($item_action_popup_open); ?>"
        class="productiveminds_standard_header_button account">
        <a title="<?php echo esc_attr( $icon_title ); ?>" 
            aria-label="<?php echo esc_attr( $icon_title ); ?>" 
            class="righted ten_right_padding" 
            href="<?php echo esc_url( $url ); ?>">
            <?php echo wp_kses( productiveminds_get_svg_icon($productive_passmax_my_account_icon_args), 'wp_kses_allowed_html' ); ?>
        </a>
    </span>
    <?php
}
add_action('productive_passmax_render_my_account_header_button', 'productive_passmax_render_my_account_button');
    
function productive_passmax_account_login_redirect( $url, $request_redirect_to, $user ) {
    $redirect_url = home_url();
    if ( productive_global_is_woocommerce_active() ) {
        $redirect_url = get_permalink( wc_get_page_id( 'myaccount' ) );
    }
    if( !wp_http_validate_url( $redirect_url) && wp_http_validate_url( $url) ) {
        $redirect_url = $url;
    } else if( !wp_http_validate_url( $redirect_url) && !wp_http_validate_url( $url) ) {
        $redirect_url = home_url();
    }
    return $redirect_url;
}
if ( productive_passmax_enable_header_account_as_popup() ) {
    add_filter( 'login_redirect', 'productive_passmax_account_login_redirect', 10, 3 );
}


function productive_passmax_dispaly_power_button_in_global_popup() {
    return productive_passmax_power_button_required();
}
