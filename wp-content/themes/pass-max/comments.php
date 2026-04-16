<?php
/**
 * Comments Page
 *
 * @package     pass-max
 * @author      productiveminds.com
 * @copyright   productiveminds.com
 */

if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments-area">
    <?php
    if ( have_comments() ) {
        ?>
        <h2 class="comments-title">
        <?php
        $comments_number = get_comments_number();
        if ( '1' === $comments_number ) {
            printf( _x( 'One Reply to &ldquo;%s&rdquo;', 'comments title', 'pass-max' ), get_the_title() );
        } else {
            printf(
                _nx( '%1$s Reply to &ldquo;%2$s&rdquo;', '%1$s Replies to &ldquo;%2$s&rdquo;', $comments_number, 'comments title', 'pass-max' ),
                number_format_i18n( $comments_number ),
                get_the_title()
            );
        }
        ?>
        </h2>

        <ol class="comment-list">
        <?php
            wp_list_comments(
                array(
                    'avatar_size' => 45,
                    'style'       => 'ol',
                    'short_ping'  => true,
                    'reply_text'  => esc_html__( 'Reply', 'pass-max' ),
                )
            );
        ?>
        </ol>
        <?php
        the_comments_pagination(
            array(
                /* translators: Hidden accessibility text. */
                'prev_text' => '<span class="prev-next"><</span><span class="screen-reader-text">' . esc_html__( 'Previous', 'pass-max' ) . '</span>',
                /* translators: Hidden accessibility text. */
                'next_text' => '<span class="prev-next">></span><span class="screen-reader-text">' . esc_html__( 'Next', 'pass-max' ) . '</span>',
            )
        );
    }
    if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) {
            ?>
            <p class="no-comments"><?php echo esc_html__( 'Comments are closed.', 'pass-max' ); ?></p>
            <?php
    }
    comment_form();
    ?>
</div>
