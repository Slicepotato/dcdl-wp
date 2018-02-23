<?php
/* Template Name: full-width */
?>

<?php get_header(); ?>

	<main>

		<div class="content-wrap">

			<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();

				get_template_part( 'content', get_post_format() );

			endwhile; endif;
			?>

		</div> <!-- /.blog-main -->

	</main> <!-- /.row -->

<?php get_footer(); ?>
