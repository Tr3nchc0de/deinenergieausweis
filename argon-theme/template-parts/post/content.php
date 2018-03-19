<?php

/**
 * Post Template: Single
 */

get_header();

?>

<div class="wpt-header">
	<div class="container">

	<h1><?php the_title(); ?></h1>
	<p><?php the_content(); ?></p>

	</div>

</div><!-- #primary -->

<?php get_footer(); ?>
