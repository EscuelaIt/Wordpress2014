			<div class="main__content">
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
                         <figure><?php

                        // $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
                        $default_attr = array(
                            'alt'   => the_title_attribute( 'echo=0' ),
                            'title'   => the_title_attribute( 'echo=0' )
                        );

                        the_post_thumbnail('thumbnail',  $default_attr  );
                         ?></figure>
                         <div>
                            <?php if(is_home()): ?>
                                <?php the_excerpt(); ?>
                            <?php else: ?>
                                <?php the_content(); ?>
                            <?php endif; ?>
                         </div>
                         <footer>
                             <?php the_tags(); ?>
                         </footer>
                     </article>

                    <?php comments_template(); ?>

                    <?php endwhile; ?>
                    <!-- post navigation -->
                    <?php else: ?>
                    <!-- no posts found -->
                    <h3>No hemos encontrado entradas.</h3>
                    <?php endif; ?>
                </section>
                <?php
                    if ( is_home() ) :
                     get_sidebar();
                    elseif ( is_404() ) :
                     get_sidebar( '404' );
                    else :
                     get_sidebar( 'userpicture' );
                    endif;
                ?>
            </div>