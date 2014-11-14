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

