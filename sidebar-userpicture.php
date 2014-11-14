				<div class="main__content__sidebar">
	      	<figure>
	      		<?php echo get_avatar(get_the_author_meta("user_email")); ?>
	      		<figcaption><?php the_author(); ?></figcaption>
	      	</figure>

	      	<?php if ( is_active_sidebar( 'sidebar-curso-wp' ) ) : ?>
	      		<!-- #start primary-sidebar -->
	      		<div class="widgets main__content__widgets">
							<?php dynamic_sidebar( 'sidebar-curso-wp' ); ?>
						</div>
						<!-- #end primary-sidebar -->
					<?php endif; ?>
	      </div>