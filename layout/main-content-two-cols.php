			<div class="main__content">
                <div class="main__content__section">
                	<h1>Contenido Principal</h1>
                	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto soluta blanditiis ipsam modi explicabo alias, quos suscipit, neque commodi, minus aperiam illo magnam. Sint, alias quidem, cupiditate laborum nostrum reprehenderit.
                </div>
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