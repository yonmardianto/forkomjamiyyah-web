<?php
/**
 *
 * @package     pass-max
 * @author      productiveminds.com
 * @copyright   productiveminds.com
 * 
 */


function productive_passmax_theme_dashboard_section_intro() {
    ?>
    <h2 class="">
        <?php echo esc_html__( 'Customize ', 'pass-max' ) . PRODUCTIVE_PASSMAX_CURRENT_THEME_NAME; ?>
    </h2>
<?php
}

function productive_passmax_theme_dashboard_section_customizers() {
    $productive_passmax_get_per_row_to_display = 3;
    $productive_passmax_theme_dash_customizers_heading_icon_args = array(
        'i'     => 'settings', 
        'w'     => 20,
        'h'     => 20,
        'css'   => 'darkgreen',
        'svg_css'   => ''
    );
    ?>
    <div class="productive-global-admin-content-container">
        <h3 class=""><?php echo esc_html__( 'Instant Customizers for Your Website', 'pass-max' ); ?></h3>
        <div class="productiveminds_section-container closeup to_one grid columns-<?php echo esc_attr( $productive_passmax_get_per_row_to_display ); ?>">
            <?php 
                $dashboard_items = productive_theme_dashboard_items_customizer();
                foreach ( $dashboard_items as $key => $dashboard_item ) {
                    $customizer         = $dashboard_item['customizer'];
                    $slug               = $dashboard_item['slug'];
                    $plugin             = $dashboard_item['plugin'];
                    $plugin_exists      = $dashboard_item['plugin_exists'];
                    $content            = $dashboard_item['content'];
                    $url                = $dashboard_item['url'];
                    $is_extra           = function_exists( 'productiveminds_theme_extra_is_active' ) || function_exists( 'productiveminds_theme_extra_is_active' );
            ?>
            <div class="productiveminds_section-container-column bordered_as_bg padding_1_rem">
                <div class="productiveminds_section-container-column-content">
                    <div class="productiveminds_section-container-column-content-body">
                        <div class="the_content">
                            <div class="the_title small-heading productiveminds-alignable-container flexed align-items-center align-content-center justify-content-flex-start justify-items-start column-gap-5px">
                                <?php echo wp_kses( productiveminds_get_svg_icon($productive_passmax_theme_dash_customizers_heading_icon_args), 'wp_kses_allowed_html' ); ?>
                                <?php echo esc_html( $customizer ); ?>
                            </div>
                            <div class="small-text">
                                <?php echo esc_html( $content ); ?>
                            </div>
                            <div class="the_content_link">
                                <?php if ( 'in_theme' != $plugin && !$plugin_exists ) { ?>
                                <a target="_blank" href="<?php echo esc_url( $url ); ?>">
                                        <?php echo esc_html__('Install Plugin', 'pass-max'); ?>
                                    </a>
                                <?php } else { ?>
                                    <?php if ( !$dashboard_item['is_extra'] || ( $dashboard_item['is_extra'] && $is_extra ) ) { ?>
                                        <a href="<?php echo esc_url( $url ); ?>">
                                            <?php echo esc_html__('customize', 'pass-max'); ?>
                                        </a>
                                    <?php } else { ?>
                                        <a class="bolded green" style="text-decoration: none !important" target="_blank" href="<?php echo PRODUCTIVE_PASSMAX_THEME_FEATURES_OR_BUY_URL; ?>">
                                            <?php echo esc_html__('Pro feature, Upgrade', 'pass-max'); ?>
                                        </a>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            <div class="clear_min"></div>
        </div>
    </div>
<?php
}
