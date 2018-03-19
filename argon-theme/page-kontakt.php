<?php
/*
Template Name: Kontakt Page
*/
?>
<?php get_header(); ?>


<section id="section-1" class="contact">
    <div class="jumbotron jumbotron-fluid">
      <div class="container p-vh-30">
        <div class="head-main-img-text">
          <h2 class="head-dash"><?php the_title(); ?></h2>

        </div>


    </div>
    </div>
</section>

    <section id="section-contact-2" class="section-space section-white">

      <div class="container pb-4">
        <?php if ( have_posts() ) {
            while ( have_posts() ) {
              the_post(); ?>
              <?php the_content(); ?>
            <?php }
        } ?>
      </div>
      <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-4 p-4">
              <img class="img-fluid mx-auto d-block img-overlay" src="/wp-content/themes/argon-theme/public/img/reception.jpg" alt="Card image cap">
            </div>
            <div class="col-sm-6 col-md-7 p-4">
              <h3 class="head-dash-sub">Adresse</h3>
              <ul class="wpt-contact">
                <li><h3>Dein Energieausweis UG</h3></li>
                <li><h5>Armin Burghauser<br>Lutz Neumann Henneberg</h5></li>
                <li><ol class="wpt-contact-address"><li>Hochweg 2</li></li>93053 Regensburg</li><li>Deutschland</li></ol></li>
                <li><i class="fa fa-phone"></i><a href="tel:+499415956090"> (0941) - 0</a></li>
                <li><i class="fa fa-fax"></i><a href=""> (0941) - 99</a></li>
                <li><i class="fa fa-envelope"></i><a href="mailto:kontakt@dein-energieausweis.de"> kontakt@dein-energieausweis.de</a></li>
                <li><i class="fa fa-globe"></i><a href="http://www.dein-energieausweis.de"> www.dein-energieausweis.de</a></li>

              </ul>
            </div>
          </div>
      </div>
    </section>

    <section class="section-primary p-4">
      <div class="container">
        <div class="row justify-content-md-center">

          <div class="col-12 col-md-4 text-center">
            <h3 class="pt-4"><i class="fa fa-check pb-4" aria-hidden="true"></i><br> Bitte mitbringen</h3>
            <p>Damit wir Ihren Behandlung bestmöglich nachkommen können, beachten Sie bitte unseren Hinweis.</p>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-white mb-4" data-toggle="modal" data-target="#exampleModalLong">
              Ihre Checkliste
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog justify-content-md-center" role="document">
                <div class="modal-content  text-left">
                  <div class="modal-header p-vh-10">
                    <h4 class="modal-title" id="exampleModalLongTitle"></h4>

                  </div>
                  <div class="modal-body">
                    <div class="container"><div class="row justify-content-md-center">
                    <div class="col-md-8"><ul class="list-check">
                      <h4>Ihre Checkliste<br><span>Was sollten Sie zum nächsten Arztbesuch mitbringen?</span></h4>
                      <li>Wichtige Vorbefunde (Arztbriefe)</li>
                      <li>Medikamenten-Plan</li>
                      <li>Medikamente zur Inhalation (Dosier-Aerosole, Pulver-Inhalatoren)</li>
                      <li>Frühere Röntgen- Aufnahme oder Computertomographie der Lungen</li>
                      <li>Versichertenkarte</li>
                      <li>Überweisung</li>
                      <li>Ausreichendes Zeitfenster:  bei aufwendigen technischen Untersuchungen bei Erst-Untersuchung Zeitaufwand bis zu zwei Stunden möglich</li>
                      <button type="button" class="btn btn-brand mt-4" data-dismiss="modal">Schließen</button>

                    </ul></div></div></div>

                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<!--
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
-->


    <?php get_footer(); ?>
