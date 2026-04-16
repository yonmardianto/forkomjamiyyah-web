<?php
/**
 * 
 * @package     pass-max
 * @author      productiveminds.com
 * @copyright   productiveminds.com
 * 
 */

function productive_passmax_render_theme_global_popup() {
    global $productive_global_popup_transition_direction, $is_on_productive_global_popup_close_with_esc_key_enable, $is_on_productive_global_popup_close_with_click_elsewhere_enable, $is_on_productive_global_popup_use_theme_style;
    $productive_commerce_global_theme_popup_screen_position = 'top_right';
    $fullscreen_height = productive_passmax_enable_global_popup_fullscreen();
    
    $productive_passmax_customiser_show_search            = productive_passmax_enable_global_popup_search();
    $productive_passmax_customiser_show_account_icon      = productive_passmax_enable_global_popup_account();
    $productive_passmax_enable_global_popup_power_button  = productive_passmax_enable_global_popup_power_button();
    $productive_passmax_dispaly_power_button_in_global_popup = productive_passmax_dispaly_power_button_in_global_popup();
    $productive_passmax_is_any_productive_commerce_plugin_header_button_active_global = productive_passmax_is_any_productive_commerce_plugin_header_button_active_global();
    
    ?>
    <div class="productive_popup std_popup productive_theme_global_popup full_small_screen <?php echo esc_attr($is_on_productive_global_popup_use_theme_style); ?> <?php echo esc_attr($fullscreen_height); ?> <?php echo esc_attr($is_on_productive_global_popup_close_with_esc_key_enable); ?> <?php echo esc_attr($is_on_productive_global_popup_close_with_click_elsewhere_enable); ?> <?php echo esc_attr($productive_commerce_global_theme_popup_screen_position); ?>" id="productive_theme_global_popup_container" data-enter-exit-transition-commerce="<?php echo esc_attr($productive_global_popup_transition_direction); ?>">
    <?php $show_productive_theme_global_popup_footer = 'noned';?>
        <div class="productive_popup-overlay productive_theme_global_popup">
            <header class="productive_popup-header" id="productive_popup-header-productive_theme_global_popup">
                <div class="the-productive_popup-the-header">
                    <div class="header-icons-items productiveminds-alignable-container flexed align-items-center align-content-center justify-content-flex-start row-gap-5px column-gap-20px">
                        <?php do_action( 'productive_passmax_display_off_canvas_logo', '' ); ?>
                        <?php do_action( 'productive_passmax_render_language_and_currency_buttons_global_popup', '' ); ?>
                        <?php if ( $productive_passmax_customiser_show_account_icon ) { ?>
                            <?php do_action('productive_passmax_render_my_account_header_button'); ?>
                        <?php } else { ?>
                        <span>&nbsp;</span>
                        <?php } ?>
                    </div>
                </div>
            </header>
            <section class="productive_popup-body">
                
                <?php if ( $productive_passmax_is_any_productive_commerce_plugin_header_button_active_global ) { ?>
                <div class="the-productive_popup-the-header">
                    <div class="header-icons-items productiveminds-alignable-container flexed row-gap-5px column-gap-20px">
                        <?php do_action( 'productive_passmax_render_our_commerce_header_buttons_global_popup', 'smaller_icon_location' ); ?>
                    </div>
                </div>
                <?php } ?>
                <?php if ( $productive_passmax_customiser_show_search ) { ?>
                    <div class="header-search">
                        <div class="productiveminds-alignable-container justify-content-space-evenly align-items-stretch">
                            <div class="productiveminds-alignable-container_uno">
                                <?php get_search_form( array( 'arial_label' => esc_html__( 'Search...', 'pass-max' ), ) ); ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <div class="site-body-container_box">
                    <div class="site-body-container_box_uno">
                        <div class="site-header-menu theme-global-popup-menu">
                            <?php do_action( 'productive_passmax_render_header_nav', 'site-header-menu-nav site_header_nav_global_screen' ); ?>
                        </div>
                        <?php if( $productive_passmax_dispaly_power_button_in_global_popup && $productive_passmax_enable_global_popup_power_button ) { ?>
                            <div class="theme-global-popup-power-button productiveminds-alignable-container flexed justify-content-flex-start hide-above-landscape-mobile">
                                <?php do_action( 'productive_passmax_display_power_button_title' ); ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </section>
            <footer class="productive_popup-footer <?php echo esc_attr( $show_productive_theme_global_popup_footer ); ?>">
            </footer>
            <button aria-label="<?php echo esc_attr('Close Overlay', 'pass-max'); ?>" class="productive-popup-close-button right">
                <?php productive_global_render_close_section_button( 16 ); ?>
                <span class="screen-reader-text"><?php echo esc_html__('Close Overlay', 'pass-max'); ?></span>
            </button>
        </div>
    </div>
<?php
}
add_action('wp_footer', 'productive_passmax_render_theme_global_popup');
