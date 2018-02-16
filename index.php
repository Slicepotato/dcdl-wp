<?php get_header(); ?>

	<main>

		<div>

			<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();

				get_template_part( 'content', get_post_format() );

			endwhile; endif;
			?>

		</div> <!-- /.blog-main -->

		<?php get_sidebar(); ?>

	</main> <!-- /.row -->

<?php get_footer(); ?>
