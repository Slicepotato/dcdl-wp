<?php
/* Template Name: Splash */
?>

<?php get_header(); ?>

<div id="primary" class="site-content-fullwidth splash">
    <main id="main" class="site-main" role="main">
        <?php while ( have_posts() ) : the_post(); the_content(); endwhile; ?>
    </main><!-- .site-main -->
</div><!-- .content-area -->
