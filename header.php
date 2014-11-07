<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
		<?php 
			wp_title( '|', true, 'right' );
			// Add the blog name.
		 	bloginfo( 'name' ); 
	 	?>
 	</title>
	<link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>">
	<link href='http://fonts.googleapis.com/css?family=Julius+Sans+One' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
</head>

<!-- Aquí acaba el head de mi web -->
<body <?php body_class(["unaclase", "otraclase"]); ?>>