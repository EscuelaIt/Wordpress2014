<section class="main__content__slide">
	<?php query_posts(array('category_name' => 'Slide', 'orderby' => 'rand', 'showposts' => '3')); ?>
	<div id="mask">
		<ul>
			<?php
				$estilos = array(
					"firstanimation",
					"secondanimation",
					"thirdanimation"
				);
				$i = 0;
			?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<!-- post -->
			<li class="<?php echo $estilos[$i++]; ?>">
				<a href="<?php the_permalink(); ?>">
					<figure>
						<?php the_post_thumbnail(); ?>
						<figcaption><?php the_title(); ?></figcaption>
					</figure>
				</a>

			</li>
			<?php endwhile; ?>
			<!-- post navigation -->
			<?php else: ?>
			<!-- no posts found -->
			<?php endif; ?>
		</ul>
	</div>
</section>