<div class="post">
	<?php if(!is_page()) { ?>

	<h2 class="post-title"><?php the_title(); ?></h2>
	<p class="post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>

	<?php } ?>

 <?php the_content(); ?>

</div><!-- /.blog-post -->
