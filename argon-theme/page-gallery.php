<?php
/**
 * Template Name: Gallery Themes
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



<section id="section-cases">
        <?php
          $args = array(
          'post_type' => 'works',
          'posts_per_page' => 4,
          'orderby' =>'date',
          'order' => 'DESC' );
          $loop = new WP_Query( $args );
          while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

            <div class="container sh-b mb-5">
              <div class="row">
                <div class="col-md-4 my-auto">
                  <div class="wps-box-overlay-2 p-3">
                    <div class="wps-box-desc-1">
                      <h3><?php the_title(); ?></h3>
                        <p><?php the_excerpt(); ?></p>
                      <span class="btn btn-brand p-3" >View Template</span>
                    </div><!-- /span3 -->
                  </div><!-- /span3 -->
                </div><!-- /span3 -->
                <div class="col-md-8">
                  <? if( has_post_thumbnail( $post_id ) ): ?>
                      <div class="post-image">
                          <img title="image title" alt="thumb image" class="wp-post-image"
                               src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" style="width:100%; height:auto;">
                      </div>
                  <? endif; ?>
                </div>
              </div><!-- /span3 -->
              </div><!-- /span3 -->

          <?php endwhile; ?>
          <?php wp_reset_query(); ?>

          <div class="text-center m-5">
            <a class="btn btn-brand" href="#">See more</a>
          </div>
</section>




<section>
  <?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = array(
    'post_type'=>'works', // Your post type name
    'posts_per_page' => 1,
    'paged' => $paged,
);

$loop = new WP_Query( $args );
if ( $loop->have_posts() ) {
    while ( $loop->have_posts() ) : $loop->the_post();

             // YOUR CODE
             the_title();


    endwhile;

    $total_pages = $loop->max_num_pages;

    if ($total_pages > 1){

        $current_page = max(1, get_query_var('paged'));

        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => '/page/%#%',
            'current' => $current_page,
            'total' => $total_pages,
            'prev_text'    => __('« prev'),
            'next_text'    => __('next »'),
        ));
    }
}
wp_reset_postdata();
?>
</section>


<section class="section-second p-4">
  <div class="container">
    <div class="row justify-content-md-center">

      <div class="col-12 col-md-4 text-center">
        <h3 class="pt-4"><i class="fa fa-check pb-4" aria-hidden="true"></i><br> Sign Up today</h3>
        <p>Join Thousands of customers and build amazing Websites</p>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-white mb-4" data-toggle="modal" data-target="#exampleModalLong">
          Join Us Now
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog justify-content-md-center mx-auto" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLongTitle"></h4>
                  <button type="button" class="display-3 btn-brand mt-3" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                <div class="container">
                  <div class="headline">
                    <h2>All Themes for one low Price</h2>
                    <h4>Our Rocksolid Templates will make your project awesome</h4>
                  </div>
                  <div class="row justify-content-md-center">
                    <div class="col-md-5 package-box sh-b text-center p-5">
                      <h2>Yearly Access</h2>
                        <div class="price-desc">
                          <h4>89$</h4><small>per Year</small>
                        </div>
                      <ul class="list">
                        <li>Access to <a class="p-primary">All Themes</a></li>
                        <li>Access To <a class="p-second">All Plugins</a></li>
                        <li>Premium Support for 1 Year</li>
                        <li>Theme Updates</li>
                        <li>Unlimited Website Usage</li>
                      </ul>
                      <button type="button" class="btn btn-brand mt-4" data-dismiss="modal">Join to Download</button>
                      <div class="package_popular">Most<br>Popular</div>
                    </div>
                    <div class="col-md-5 package-box sh-b text-center p-5">
                      <h2>Lifetime Access</h2>
                      <h4>289$</h4>
                      <ul class="list">
                            <li>Access to <a class="p-primary">All Themes</a></li>
                            <li>Access To <a class="p-second">All Plugins</a></li>
                            <li>Premium Support for 1 Year</li>
                            <li>Theme Updates</li>
                            <li>Unlimited Website Usage</li>

                      </ul>
                      <button type="button" class="btn btn-brand mt-4" data-dismiss="modal">Join to Download</button>
                      <div class="package_popular">Most<br>Popular</div>

                    </div>
                  </div>
                </div>

              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
