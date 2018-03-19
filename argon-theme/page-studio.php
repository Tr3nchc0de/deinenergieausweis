<?php
/*
Template Name: Studio Page
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
                  <img class="text-center img-fluid" src="/wp-content/themes/wp-theme/public/img/header/header-studio.jpg">
              </div>

        </div>
    </section>

    <section id="section-studio-2" class="section-space section-white">
      <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-6">
              <img src="/wp-content/themes/public/img/services/service-icon-1.png">
            </div>
            <div class="col-sm-6 col-md-6 head-dash-sub">
              <h3>Websites</h3>
              <p>Lorem Ipsum dantes waros gollem.</p>
            </div>
          </div>
      </div>
    </section>

    <section id="section-studio-3" class="section-space section-grey">
        <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-6">
                <img src="/wp-content/themes/public/img/services/service-icon-1.png">
              </div>
              <div class="col-sm-6 col-md-6 head-dash-sub">
                <h3>Websites</h3>
                <p>Lorem Ipsum dantes waros gollem.</p>
              </div>
            </div>
        </div>
    </section>

    <section id="section-studio-4" class="section-space section-white">
        <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-6 head-dash-sub">
                <h3>Websites</h3>
                <p>Lorem Ipsum dantes waros gollem.</p>
              </div>
              <div class="col-sm-6 col-md-6">
                <img src="/wp-content/themes/public/img/services/service-icon-1.png">
              </div>
            </div>
        </div>
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

    <section id="section-6" class="logos">
        <div class="container">
            <div id="logo-slider" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item active text-center">
                      <div class="col-md-3 col-sm-6 col-xs-6 align-self-center">
                          <img class="img-fluid d-flex align-self-center" src="/wp-content/themes/wp-theme/public/img/logo-1.png">
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-6 align-self-center">
                          <img class="img-fluid" src="/wp-content/themes/wp-theme/public/img/logo-2.png">
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-6 align-self-center">
                          <img class="img-fluid" src="/wp-content/themes/wp-theme/public/img/logo-3.png">
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-6 align-self-center">
                          <img class="img-fluid" src="/wp-content/themes/wp-theme/public/img/logo-4.png">
                      </div>
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
