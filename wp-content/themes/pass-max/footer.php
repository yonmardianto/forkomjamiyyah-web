<?php
/**
 * The footer of the theme
 * This file displays the footer content and includes theme-specific content
 *
 * @package     pass-max
 * @author      productiveminds.com
 * @copyright   productiveminds.com
 * 
 */

        if ( productive_passmax_before_footer_newsletter_required() ) {
            do_action( 'productive_passmax_display_newsletter_section_full_width' );
        }

        get_template_part( 'standard/template-parts/footer-parts' );
        ?>

    </div>
    
    <?php wp_footer(); ?>
    </body>
</html>