<?php
/*
Template Name: Services Page
*/
?>
<?php get_header(); ?>

<section id="section-1" class="services">
    <div class="jumbotron jumbotron-fluid">
      <div class="container p-vh-30">
        <div class="head-main-img-text">
          <h2 class="head-dash"><?php the_title(); ?></h2>
          <h3><?php the_excerpt(); ?></h3><br>
        </div>


    </div>
    </div>
</section>


<section id="" class="section-white">
  <!--<div class="container pb-4">
    <?php if ( have_posts() ) {
        while ( have_posts() ) {
          the_post(); ?>
          <?php the_content(); ?>
        <?php }
    } ?>
  </div></!-->
  <div class="container-fluid" id="lungenfunktionsdiagnostik">
    <div class="container tb-3">
      <div class="row mt-4 ">
        <div class="col-sm-3 my-auto">
            <img class="img-fluid mx-auto d-block" src="/wp-content/themes/wp-theme/public/img/services/icon-spirometrie.png" alt="Card image cap">
        </div>
        <div class="col-sm-9 my-auto">
          <h3 class="head-dash">Lungenfunktionsdiagnostik</h3>
          <ul class="list-a">
            <li>Spirometrie, Bodyplethysmographie</li>
            <li>Diffusionsmessung</li>
            <li>Reversibilitäts-Test (Bronchospasmolyse)</li>
            <li>Provokations-Test (unspezifische bronchiale Provokation mit Methacholin)</li>
          </ul>

          <div id="accordion" role="tablist" aria-multiselectable="true">
            <div class="card">
              <div class="card-header" role="tab" id="headingOne">
                <p class="mb-0">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    weiterlesen
                  </a>
                </p>
              </div>

              <div id="collapseOne" class="collapse hide" role="tabpanel" aria-labelledby="headingOne">
                <div class="card-block">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid section-grey" id="blutgasanalyse">
    <div class="container tb-3">
      <div class="row mt-4">
        <div class="col-sm-3 my-auto">
            <img class="img-fluid d-block " src="/wp-content/themes/wp-theme/public/img/services/icon-blutgas.png" alt="Card image cap">
        </div>
        <div class="col-sm-9 my-auto">
          <h3 class="head-dash">Blutgasanalyse</h3>
          <ul class="list-a">
            <li>Sauerstoff- und Kohlendioxid-Partialdrücke im Kapillarblut</li>
            <li>Säure-Basen-Haushalt</li>
            <li>CO-Hb</li>
          </ul>

          <div id="accordion" role="tablist" aria-multiselectable="true">
            <div class="card">
              <div class="card-header" role="tab" id="headingOne">
                <p class="mb-0">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
                    weiterlesen
                  </a>
                </p>
              </div>

              <div id="collapseTwo" class="collapse hide" role="tabpanel" aria-labelledby="headingOne">
                <div class="card-block">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid section-white" id="belastungstest">
    <div class="container tb-3">
      <div class="row mt-4">
        <div class="col-sm-3">
            <img class="img-fluid rounded-circle mx-auto d-block img-overlay" src="http://placehold.it/300x300" alt="Card image cap">
        </div>
        <div class="col-sm-7 my-auto">
          <h3 class="head-dash">Belastungstest (Spiroergometrie)</h3>
          <ul class="list-a">
            <li>Bestimmung der maximalen Sauerstoffaufnahme (kardio-pulmonale Leistungsbreite)</li>
            <li>Differenzierung von Lungen- und Herzerkrankungen</li>
          </ul>

        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid section-grey" id="roentgen-thorax-diagnostik">
    <div class="container tb-3">
      <div class="row mt-4">
          <div class="col-sm-3">
              <img class="img-fluid rounded-circle mx-auto d-block img-overlay" src="http://placehold.it/300x300" alt="Card image cap">
          </div>
          <div class="col-sm-7 my-auto">
            <h3 class="head-dash">Digitale Röntgen-Thorax-Diagnostik</h3>
            <ul class="list-a">
              <li>mit Besprechung am Monitor im Sprechzimmer</li>

            </ul>
          </div>
      </div>
    </div>
  </div>


  <div class="container-fluid section-white" id="ekg">
    <div class="container tb-3">
      <div class="row mt-4">
          <div class="col-sm-3">
              <img class="img-fluid rounded-circle mx-auto d-block img-overlay" src="http://placehold.it/300x300" alt="Card image cap">
          </div>
          <div class="col-sm-7 my-auto my-auto">
            <h3 class="head-dash">EKG</h3>
            <ul class="list-a">
              <li>In Ruhe und unter Belastung</li>
            </ul>
          </div>
      </div>
    </div>
  </div>

  <div class="container-fluid section-grey" id="ultraschall">
    <div class="container tb-3">
      <div class="row mt-4">
          <div class="col-sm-3">
              <img class="img-fluid rounded-circle mx-auto d-block img-overlay" src="http://placehold.it/300x300" alt="Card image cap">
          </div>
          <div class="col-sm-7 my-auto">
            <h3 class="head-dash">Ultraschall</h3>
            <ul class="list-a">
              <li>Brustkorb</li>
              <li>Bauch</li>
              <li>Herz (Echokardiographie)</li>
            </ul>
          </div>
      </div>
    </div>
  </div>




  <div class="container-fluid section-white">
    <div class="container tb-3">
      <div class="row mt-4">
          <div class="col-sm-3">
              <img class="img-fluid rounded-circle mx-auto d-block img-overlay" src="http://placehold.it/300x300" alt="Card image cap">
          </div>
          <div class="col-sm-7 my-auto">
            <h3 class="head-dash">Allergologie</h3>
            <ul class="list-a">
              <li>Haut-Prick-Test, Intracutan-Test</li>
              <li>Spezifischer Provokationsstest</li>
              <li>Bestimmung Gesamt- IgE und spezifische IgE</li>
            </ul>
          </div>
      </div>
    </div>
  </div>

  <div class="container-fluid section-grey" id="schlafdiagnostik">
    <div class="container tb-3">
      <div class="row mt-4">
          <div class="col-sm-3">
              <img class="img-fluid rounded-circle mx-auto d-block img-overlay" src="http://placehold.it/300x300" alt="Card image cap">
          </div>
          <div class="col-sm-7 my-auto">
            <h3 class="head-dash">Schlafdiagnostik</h3>
            <ul class="list-a">
              <li>Cardiorespiratorische Polygraphie</li>
            </ul>
          </div>
      </div>
    </div>
  </div>

  <div class="container-fluid section-white" id="labor">
    <div class="container tb-3">
      <div class="row mt-4">
          <div class="col-sm-3">
              <img class="img-fluid rounded-circle mx-auto d-block img-overlay" src="http://placehold.it/300x300" alt="Card image cap">
          </div>
          <div class="col-sm-7 my-auto">
            <h3 class="head-dash">Labor</h3>
            <ul class="list-a">
              <li>Point-of-Care-Labordiagnostik:  Schnelltest in der Praxis innerhalb 15 Min. zur Abklärung bakterielle Infektion, Venenthrombose, Lungenembolie, Herzinfarkt, chronische Herzbelastung</li>
            </ul>
          </div>
      </div>
    </div>
  </div>

  <div class="container-fluid section-grey" id="gutachten">
    <div class="container tb-3">
      <div class="row mt-4">
          <div class="col-sm-3">
              <img class="img-fluid rounded-circle mx-auto d-block img-overlay" src="http://placehold.it/300x300" alt="Card image cap">
          </div>
          <div class="col-sm-7 my-auto">
            <h3 class="head-dash">Gutachten</h3>
            <ul class="list-a">
            </ul>
          </div>
      </div>
    </div>
  </div>



</section>







<?php get_footer(); ?>
