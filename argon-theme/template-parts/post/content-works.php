<?php

/**
 * Template Name: Home Page
 */

get_header();

?>

<div id="primary">

	<h1><?php the_title(); ?></h1>

<?php if( get_field('works_title') ): ?>
    <h2><?php the_field('works_title'); ?></h2>
<?php endif; ?>

<div class="hero">
    <?php $image = get_field('works_thumb'); ?>
    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
</div>

<?php if( have_rows('event') ): ?>
    <ul>
    <?php while( have_rows('event') ): the_row(); ?>
        <li>
            <a href="<?php the_sub_field('url'); ?>"><?php the_sub_field('title'); ?></a>
        </li>
    <?php endwhile; ?>
    </ul>
<?php endif; ?>
	<div id="content" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<h1><?php the_field('works_title'); ?></h1>

			<img src="<?php the_field('works_thumb'); ?>" />

			<p><?php the_content(); ?></p>

		<?php endwhile; // end of the loop. ?>

	</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>
