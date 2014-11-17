<?php

// Tamaño del Excertp
function new_excerpt_length($length) {
	return 12;
}
add_filter('excerpt_length', 'new_excerpt_length');

// Añadimos imágenes destacadas
add_theme_support( 'post-thumbnails' );

//Añadimos Menús

register_nav_menus( array(
		'menu-lateral' => "Menú lateral fijo",
		'menu-tabs' => "Tabs horizontales"
	));