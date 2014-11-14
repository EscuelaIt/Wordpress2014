<section class="comments">
	<h1>Comentarios al post</h1>
	<?php if ( have_comments() ) : ?>
		<ul>
		<?php pinta_comentarios(); ?>
		</ul>
	<?php endif; ?>
	<?php
		$args = array(
		  'id_form'           => 'commentform',
		  'id_submit'         => 'submit',
		  'title_reply'       => 'Dime algo!',
		  'title_reply_to'    => 'Dile algo a %s!',
		  'cancel_reply_link' => __( 'Cancel Reply' ),
		  'label_submit'      => __( 'Post Comment' ),

		  'comment_notes_before' => '',

		  'comment_notes_after' => '',

		  'fields' => apply_filters( 'comment_form_default_fields', array(

		    'author' =>''.
		      '<input id="author" name="author" placeholder="autor" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
		      '" size="30"' . $aria_req . ' /></p>',

		    'email' =>
		      '<input id="email" name="email" placeholder="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
		      '" size="30"' . $aria_req . ' /></p>',

		    'url' =>
		      '<input id="url" name="url" placeholder="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
		      '" size="30" /></p>'
		    )
		  ),
		);
	?>
	<?php comment_form($args); ?>
</section>