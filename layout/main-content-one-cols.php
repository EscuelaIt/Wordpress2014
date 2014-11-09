			<div class="main__content--fullwidth">
                <section class="main__content__section">
                    <?php 
                        if(is_home()) {
                            query_posts("cat=-3&order=ASC");
                        } 
                        ?>
                    
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                     <!-- post -->
                     <article class="main__article">
                         <header>
                            <h2> <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                                </a>
                                <small>Fecha: <?php the_date(); ?> por: <a href="http://twitter.com/<?php the_author_meta("twitter"); ?>"> <?php the_author(); ?></a></small>
                            </h2>
                         </header>
                         <p>
                             <?php the_excerpt(); ?>
                         </p>
                         <footer>
                             <?php the_tags(); ?>
                         </footer>
                     </article>  

                     <?php endwhile; ?>
                     <!-- post navigation -->
                     <?php else: ?>
                     <!-- no posts found -->
                     <h3>No hemos encontrado entradas.</h3>
                     <?php endif; ?> 
                	

                </section>
            </div>