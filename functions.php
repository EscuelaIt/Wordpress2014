<?php

function new_excerpt_length($length) {
	return 12;
}
add_filter('excerpt_length', 'new_excerpt_length');

add_theme_support( 'post-thumbnails' );

// register_sidebars( 2, array( 'name' => 'Zona %d' ) ); //sidebar-1, sidebar-2

register_sidebar( array(
	'name' => 'Barra lateral derecha',
	'id' => 'sidebar-curso-wp',
	'description'   => 'Barra lateral para que pongas lo que te de la gana',
  'class'         => 'clase-1',
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h2 class="rounded">',
	'after_title' => '</h2>',
) );

function callback_comentarios($comment, $args, $depth){
	?>
	<div>
		<article <?php comment_class("comment"); ?> id="comment-<?php comment_ID(); ?>">
			<header class="comment-meta comment-author vcard">
				<?php
					echo get_avatar( $comment, 44 );
					echo "<div>".get_comment_author_link()."</div>";
				?>
			</header><!-- .comment-meta -->

			<?php if ( '0' == $comment->comment_approved ) : ?>
				<p class="comment-awaiting-moderation">Tu comentario está esperando aprobarse, envía un twit al autor para que te lo apruebe</p>
			<?php endif; ?>

			<section class="comment-content comment">
				<?php comment_text(); ?>
			</section><!-- .comment-content -->

			<div class="reply">
				<?php comment_reply_link( array_merge( $args, array( 'reply_text' => "Respóndeme", 'depth' => $depth ) ) ); ?>
			</div><!-- .reply -->

	<?php
}

function pinta_comentarios(){
	$args = array(
			'walker'            => null,
			'max_depth'         => '',
			'style'             => 'div',
			'callback'          => 'callback_comentarios',
			'end-callback'      => null,
			'type'              => 'all',
			'reply_text'        => 'Dame una respuesta',
			'page'              => '',
			'per_page'          => '',
			'avatar_size'       => 32,
			'reverse_top_level' => null,
			'reverse_children'  => '',
			'format'            => 'html5', //or xhtml if no HTML5 theme support
			'short_ping'        => false, // @since 3.6,
		  'echo'     => true // boolean, default is true
		);
		wp_list_comments($args);
}