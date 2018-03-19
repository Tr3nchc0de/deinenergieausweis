<?php
/*
Template Name: Impressum Page
*/
?>
<?php get_header(); ?>

<section id="section-studio-1" class="header-services">
    <div class="container-fluid head-main-img headline">
        <div class="row">
              <div class="head-main-img-text">
                <h1 class="head-dash"><?php the_title(); ?></h1>
                <h3><?php the_excerpt(); ?></h3><br>
                <a class="btn-scroll-on" href="#section-studio-2"><i class="fa fa-long-arrow-down"></i></a>
              </div>
              <img class="text-center img-fluid" src="/wp-content/themes/wp-theme/public/img/header/header.jpg">
          </div>

    </div>
</section>

    <section id="section-contact-2" class="section-space section-white">
      <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12">
              <?php if ( have_posts() ) {
                    while ( have_posts() ) {
                      the_post(); ?>

              <?php the_content(); ?>
    <?php }
} ?>

            </div>



          				<div class="col-sm-12 col-md-12">

          				</div>

            </div>
          </div>
      </div>
    </section>







    <?php get_footer(); ?>
