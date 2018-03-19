<?php
/*
Template Name: Default Page
*/
?>
<?php get_header(); ?>

<section id="section-1" class="services">
    <div class="jumbotron jumbotron-fluid">
      <div class="container p-vh-30">
        <div class="head-main-img-text">
          <h2 class="head-dash"><?php the_title(); ?></h2>
          
        </div>


    </div>
    </div>
</section>

    <section id="section-studio-2" class="section-space section-white">
      <div class="container pb-4">
        <?php if ( have_posts() ) {
            while ( have_posts() ) {
              the_post(); ?>
              <?php the_content(); ?>
            <?php }
        } ?>
      </div>

    </section>







    <?php get_footer(); ?>
