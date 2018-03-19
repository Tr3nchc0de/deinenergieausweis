<?php
/*
Template Name: One Page
*/
?>
<?php get_header(); ?>

    <section id="section-1" class="slider1">
        <div class="jumbotron jumbotron-fluid">
            <div class="message text-center">
                <img class="text-center img-fluid mb-5" src="/wp-content/themes/wp-theme/public/img/hero-icon.png">
                <h1>Music for Moving Pictures</h1>
                <p>Composing // Engineering // Effects</p><br>
                <a class="btn-scroll-on text-center" href="#works"><i class="fa fa-chevron-down"></i></a>
            </div>
        </div>
    </section>


    <section id="works">
        <div class="headline"><h2>Works</h2></div>
        <div class="container-fluid">
            <div class="row text-center">


				<?php $loop = new WP_Query( array(
					'post_type'      => 'videos',
					'posts_per_page' => 30,
					'order'          => 'DSC',
					'orderby'        => 'menu_order'
				) ); ?>
				<?php $i = 1; //get the number count ?>
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<?php $videoName = get_field( 'videos' ); ?>
                    <!--Button to trigger popup-->
                    <?php echo '<div class="col-sm-6 col-md-4 img-fluid">';?>
                    <a href="#work<?php echo $i; ?>" role="button" data-toggle="modal">


						<?php

						echo '<img class="img-fluid overlay text-center" src="';
						the_field( 'videos_thumb' );
						echo '"/>';

						echo '<h3><a class="videos-title">';
                        the_field('videos_title');
						echo '</a></h3>';
						?>


                    </a>
                    <?php echo '</div>';?>

                    <div id="work<?php echo $i; ?>" class="modal hide fade video-pop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    &times;
                                </button>
                                <div class="modal-body container row">
                                    <div class="col-md-8 videos-wrapper">



                                        <?php

                                        $values = get_field( 'videos' );
                                        if ( $values ) {

	                                        the_field( 'videos' );

                                        } else {
	                                        echo '<img class="img-fluid overlay text-center" src="';
	                                        the_field( 'videos_thumb' );
	                                        echo '"/>';
                                        }
                                         ?>
                                    </div>
                                    <div class="col-md-4 text-left videos-text">

                                        <div class="headline-left"><h2><?php the_field( 'videos_title' ); ?></h2></div>
		                               <p><?php the_field( 'videos_description' ); ?></p>
                                        <p>
	                                        <?php

	                                        $link = get_field('website_link');

	                                        if( $link ): ?>

                                                <a target="_blank" class="button-website" href="<?php echo $link; ?>"><i class="fa fa-globe" aria-hidden="true"></i> Website</a>

	                                        <?php endif; ?>

                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                    <script>
                        jQuery('.close').click(function () {
                            jQuery('#work<?php echo $i; ?>').hide();
                            jQuery('#work<?php echo $i; ?> iframe').attr("src", jQuery("#work<?php echo $i; ?> iframe").attr("src"));
                        });
                    </script>

					<?php $i ++; ?>
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>

    </section>



    <section id="section-2" class="content">
        <div class="container">

			<?php if ( have_posts() ) {
				while ( have_posts() ) {

					the_post(); ?>

					<?php the_content(); ?>

				<?php }
			} ?>
        </div>

    </section>


    <section id="map-fluid">

        <!--
			You need to include this script tag on any page that has a Google Map.

			The following script tag will work when opening this example locally on your computer.
			But if you use this on a localhost server or a live website you will need to include an API key.
			Sign up for one here (it's free for small usage):
				https://developers.google.com/maps/documentation/javascript/tutorial#api_key

			After you sign up, use the following script tag with YOUR_GOOGLE_API_KEY replaced with your actual key.
				<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_API_KEY"></script>
		-->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

        <script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);

            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 11,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(52.486973, 13.430662), // Pannierstrasse 57

                    // How you would like to style the map.
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{
                        "featureType": "administrative",
                        "elementType": "labels.text.fill",
                        "stylers": [{"color": "#444444"}]
                    }, {
                        "featureType": "landscape",
                        "elementType": "all",
                        "stylers": [{"color": "#fff9f3"}]
                    }, {
                        "featureType": "poi",
                        "elementType": "all",
                        "stylers": [{"visibility": "off"}]
                    }, {
                        "featureType": "road",
                        "elementType": "all",
                        "stylers": [{"saturation": -100}, {"lightness": 45}]
                    }, {
                        "featureType": "road.highway",
                        "elementType": "all",
                        "stylers": [{"visibility": "simplified"}]
                    }, {
                        "featureType": "road.arterial",
                        "elementType": "labels.icon",
                        "stylers": [{"visibility": "off"}]
                    }, {
                        "featureType": "transit",
                        "elementType": "all",
                        "stylers": [{"visibility": "off"}]
                    }, {
                        "featureType": "water",
                        "elementType": "all",
                        "stylers": [{"color": "#666666"}, {"visibility": "on"}]
                    }]
                };

                // Get the HTML DOM element that will contain your map
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var image = '/wp-content/themes/wp-theme/public/img/map-icon.png';
                var beachMarker = new google.maps.Marker({
                    position: {lat: 52.486973, lng: 13.430662},
                    map: map,
                    icon: image


                });
            }



        </script>



        <div id="map"></div>

    </section>


<?php get_footer(); ?>