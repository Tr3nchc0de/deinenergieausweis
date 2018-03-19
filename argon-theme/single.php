<?php





	while ( have_posts() ) : the_post();

 		get_template_part( 'template-parts/post/content', 'single' );

	 endwhile; // end of the loop.



?>


<?php get_footer(); ?>
