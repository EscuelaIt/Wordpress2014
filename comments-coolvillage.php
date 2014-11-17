<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Comments Template
 *
 *
 * @file           comments.php
 * @package        Responsive 
 * @author         Emil Uzelac 
 * @copyright      2010 - 2012 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/comments.php
 * @link           http://codex.wordpress.org/Theme_Development#Comments_.28comments.php.29
 * @since          available since Release 1.0
 */
?>
<?php if (post_password_required()) { ?>
    <p class="nocomments"><?php _e('This post is password protected. Enter the password to view any comments.', 'responsive'); ?></p>
    
	<?php return; } ?>

<?php if (have_comments()) : ?>
    <h6 id="comments">
			<?php
				printf( _n('Un comentario', '%1$s comentarios', get_comments_number(), 'responsive'),
					number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>');
			?>
             - <a href="#commentform">¿Quieres opinar?</a>
    </h6>

    <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
    <div class="navigation">
        <div class="previous"><?php previous_comments_link(__( '&#8249; Older comments','responsive' )); ?></div><!-- end of .previous -->
        <div class="next"><?php next_comments_link(__( 'Newer comments &#8250;','responsive', 0 )); ?></div><!-- end of .next -->
    </div><!-- end of.navigation -->
    <?php endif; ?>

    <ol class="commentlist">
        <?php wp_list_comments('avatar_size=60&type=comment&callback=mytheme_comment'); ?>
    </ol>
    
    <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
    <div class="navigation">
        <div class="previous"><?php previous_comments_link(__( '&#8249; Older comments','responsive' )); ?></div><!-- end of .previous -->
        <div class="next"><?php next_comments_link(__( 'Newer comments &#8250;','responsive', 0 )); ?></div><!-- end of .next -->
    </div><!-- end of.navigation -->
    <?php endif; ?>

<?php else : ?>

<?php endif; ?>

<?php
if (!empty($comments_by_type['pings'])) : // let's seperate pings/trackbacks from comments
    $count = count($comments_by_type['pings']);
    ($count !== 1) ? $txt = __('Pings&#47;Trackbacks','responsive') : $txt = __('Pings&#47;Trackbacks','responsive');
?>

    <h6 id="pings"><?php echo $count . " " . $txt; ?> <?php _e('for','responsive'); ?> "<?php the_title(); ?>"</h6>

    <ol class="commentlist">
        <?php wp_list_comments('type=pings&max_depth=<em>'); ?>
    </ol>


<?php endif; ?>

<?php if (comments_open()) : ?>

<?php $comment_args = array( 'title_reply'=>'Opiniones y preguntas:','fields' => apply_filters( 'comment_form_default_fields', 
    array('author' => 
        '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' placeholder="Nombre '. ( $req ? '*' : '' ) . '"  />',   

    'email'  => '<p class="comment-form-email"><input id="email" name="email" type="email" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' placeholder="Email '. ( $req ? '*' : '' ) . '" />',

    'url'    => '' ) ),

    'comment_field' => '<p>' .

                '<label for="comment">' . __( 'Qué te cuentas:' ) . '</label>' .

                '<textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>',

    'comment_notes_after' => '',

);

comment_form($comment_args); ?>


    <?php endif; ?>
