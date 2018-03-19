<?php
/*
Template Name: Kontakt Boxed Page
*/
?>
<?php get_header(); ?>

<section id="section-services-1" class="header-services">
    <div class="head-main">
            <?php if ( has_post_thumbnail() ) : ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <?php the_post_thumbnail('', array('class' => 'img-fluid')); ?>
                </a>
            <?php endif; ?>
            <div class="text-left text-head">
            <h1 class="head-dash"><?php the_title(); ?></h1>
            <h3><?php the_excerpt(); ?></h3>
            <a class="btn-scroll-on text-center" href="#section-services-2"><i class="fa fa-chevron-down"></i></a>
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






    <section id="section-7">

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
                    zoom: 13,

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
                        "stylers": [{"color": "#ECECEC"}]
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
                        "stylers": [{"color": "#434f5b"}, {"visibility": "on"}]
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
