    <div class="main">
        <?php include (TEMPLATEPATH . '/layout/nav-main.php'); ?>

        <section role="main">

						<?php get_template_part( 'layout/content', 'slide' ); ?>

            <?php include (TEMPLATEPATH . '/layout/main-options.php') ?>

            <?php include (TEMPLATEPATH . '/layout/main-tabs.php') ?>

            <?php include (TEMPLATEPATH . '/layout/main-content-two-cols.php') ?>

        </section>
    </div>