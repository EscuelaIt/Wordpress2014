<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h2>Esto es una categoría</h2>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h3> <?php the_title(); ?></h3>
     <!-- post -->
     <?php endwhile; ?>
     <!-- post navigation -->
     <?php else: ?>
     <!-- no posts found -->
     <?php endif; ?>
</body>
</html>