<?php
/**
 * 
 * @package     pass-max
 * @author      productiveminds.com
 * @copyright   productiveminds.com
 * 
 */

function productive_passmax_render_theme_search_popup() {
    global $productive_global_popup_transition_direction, $is_on_productive_global_popup_use_theme_style;
    ?>
    <div class="productive_popup productive_popup_type_ii std_popup productive_theme_search_popup full_small_screen <?php echo esc_attr($is_on_productive_global_popup_use_theme_style); ?> can_keyup can_elsewhere center" id="productive_theme_search_popup_container" data-enter-exit-transition-commerce="<?php echo esc_attr($productive_global_popup_transition_direction); ?>">
        <div class="productive_popup-overlay productive_theme_search_popup productiveminds-alignable-container align-items-center align-content-center justify-content-center justify-items-center">
            <section class="productive_popup-body">
                <div class="header-search">
                    <?php get_search_form( array( 'arial_label' => esc_html__( 'Search...', 'pass-max' ), ) ); ?>
                </div>
            </section>
        </div>
        <button aria-label="<?php echo esc_attr('Close Overlay', 'pass-max'); ?>" class="productive-popup-close-button productive-popup-close-button-ii right">
            <?php productive_global_render_close_section_button( 16 ); ?>
            <span class="screen-reader-text"><?php echo esc_html__('Close Overlay', 'pass-max'); ?></span>
        </button>
    </div>
<?php
}
add_action('wp_footer', 'productive_passmax_render_theme_search_popup');
