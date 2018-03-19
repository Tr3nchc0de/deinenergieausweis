<?php
/**
 * Template Name: Portfolio-Page
 * Description: Portfolio Page on Bootstrap v4 basis
 *
 * @package Wordpack-Theme
 * @since Wordpack 1.0
 */

get_header(); ?>




<section id="section-portfolio">
    <div class="headline"><h2>Cases</h2></div>
    <div class="container-fluid">
        <div class="row ">


    <?php $loop = new WP_Query( array(
      'post_type'      => 'portfolio',
      'posts_per_page' => 30,
      'order'          => 'DSC',
      'orderby'        => 'menu_order'
    ) ); ?>

    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

        <a href=" <?php echo get_post_permalink();?> ">
        <?php
        echo '<div class="col-sm-6 col-md-3 card-fluid">';
        the_post_thumbnail('full', array('class' => 'img-fluid overlay'));
        echo '<div class="card-inner"><h2><a class="works-title">';
        the_title();
        echo '</h2><a class="works-link">WEITERLESEN</a></div>';
        echo '</div></a>';
        ?>
        </a>

    <?php endwhile; ?>
    <?php wp_reset_query(); ?>

</section>

<section id="section-5" class="testimonial">
    <div class="container">
        <div class="row">
          <div class="col-sm-12  work text-center head-center headline">
              <img class="text-center img-fluid p-3" src="/wp-content/themes/wp-theme/public/img/icon-testimonial.png">
            <h3>Neue Herausforderungen spornen uns an. Stetige Weiterentwicklung in Performance &amp; Design sind uns sehr wichtig.</h3>
            <em>Caspar Heinemann | CEO 58STUDIO</em>

          </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
