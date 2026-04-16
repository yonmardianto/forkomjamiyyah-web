<?php
/**
 * Part template
 *
 * @package     pass-max
 * @author      productiveminds.com
 * @copyright   productiveminds.com
 * 
 */
?>
<?php
    
    $prev_next_args = array(
        'default_image_url'                                 => PRODUCTIVE_PASSMAX_PLACEHOLDER_IMAGE_POSTS,
        'section_show_prev_next_buttons_icon_style_prev'    => 'chevron-left',
        'section_show_prev_next_buttons_icon_style_next'    => 'chevron-right',
        'section_show_prev_next_buttons_icon'               => 1,
        'section_show_prev_next_buttons_icon_size'          => 16,
        'section_show_prev_next_thumbnail'                  => 1,
        'section_show_prev_next_post_title'                 => 1,
    );
        
    productive_global_render_post_prev_next_section( $prev_next_args );
