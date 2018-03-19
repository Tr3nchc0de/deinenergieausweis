<?php
/*
* Template Name: My Template
*/
get_header(); ?>

<?php

if ( post_type_exists( 'portfolio' ) ) {
echo '<h1 style="color:#000000;">the Portfolio post type exists</h1>';
}

if ( post_type_exists( 'post' ) ) {
echo '<h1 style="color:#000000;">the Post post type exists</h1>';
}

if ( post_type_exists( 'page' ) ) {
echo '<h1 style="color:#000000;">the Page post type exists</h1>';
}

?>

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
