<?php
/**
 * Template Name: Login
 * Description: Portfolio Page on Bootstrap v4 basis
 *
 * @package Wordpack-Theme
 * @since Wordpack 1.0
 */

get_header(); ?>

<section id="top" class="section-top section-white">
  <div class="container pt-5">
    <?php if ( have_posts() ) {
        while ( have_posts() ) {
          the_post(); ?>
          <?php the_content(); ?>
        <?php }
    } ?>
  </div>
</section>

<section>
  <div class="container">

  <div class="row justify-content-md-center">


  <div class="col-12 col-sm-5 p-0 m-0">
    <div class="text-center">
      <div class="sh-b p-5">

        <h4 class="text-center">Already a member? Or Join Now</h4>
        <p class="card-text">Login</p>
        <a href="/login" class="btn btn-brand mr-2">Login</a>

      </div>
    </div>
  </div>
    </div>
      </div>
</section>




<?php get_footer(); ?>
