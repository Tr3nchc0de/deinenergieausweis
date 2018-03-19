<?php
/*
Template Name: Times Page
*/
?>
<?php get_header(); ?>


<section id="section-1" class="times">
    <div class="jumbotron jumbotron-fluid">
      <div class="container p-vh-30">
        <div class="head-main-img-text">
          <h2 class="head-dash"><?php the_title(); ?></h2>
          <h3><?php the_excerpt(); ?></h3><br>
        </div>


    </div>
    </div>
</section>

<section id="section-2" class="section-space section-white">
  <!--<div class="container pb-4">
    <?php if ( have_posts() ) {
        while ( have_posts() ) {
          the_post(); ?>
          <?php the_content(); ?>
        <?php }
    } ?>
  </div></!-->
  <div class="container">
    <div class="row mt-4">
        <div class="col-sm-4">
          <img class="img-fluid rounded-circle mx-auto d-block img-overlay" src="/wp-content/themes/wp-theme/public/img/header/frank-heinemann-portrait.jpg" alt="Card image cap">
        </div>
        <div class="col-sm-7">
          <h5 class="head-dash">Sprechstunden Dr. Heinemann</h5>
            <table class="table">

              <tbody>
                <tr>
                  <th scope="row">Montag</th>
                  <td>8.00 - 12.00</td>
                  <td>14.00 - 16.00</td>

                </tr>
                <tr>
                  <th scope="row">Dienstag</th>
                  <td>8.00 - 12.00</td>
                  <td>16.00 - 18.00</td>
                </tr>
                <tr>
                  <th scope="row">Mittwoch</th>
                  <td>8.00 - 12.00</th>
                </tr>
                <tr>
                  <th scope="row">Donnerstag</th>
                  <td>8.00 - 12.00</td>

                </tr>
                <tr>
                  <th scope="row">Freitag</th>
                  <td>8.00 - 12.00</td>

                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>


      <div class="container">
        <div class="row mt-4">
            <div class="col-sm-4">
              <img class="img-fluid rounded-circle mx-auto d-block img-overlay" src="/wp-content/themes/wp-theme/public/img/header/frank-heinemann-portrait.jpg" alt="Card image cap">
            </div>
            <div class="col-sm-7">
              <h5 class="head-dash">Sprechstunden Dr. Reuter</h5>
                <table class="table">

                  <tbody>
                    <tr>
                      <th scope="row">Montag</th>
                      <td>8.00 - 12.00</td>
                      <td>14.00 - 16.00</td>

                    </tr>
                    <tr>
                      <th scope="row">Dienstag</th>
                      <td>8.00 - 12.00</td>
                      <td>14.00 - 16.00</td>
                    </tr>
                    <tr>
                      <th scope="row">Mittwoch</th>
                      <td>8.00 - 12.00</th>
                    </tr>
                    <tr>
                      <th scope="row">Donnerstag</th>
                      <td>8.00 - 12.00</td>
                      <td>15.30 - 18.30</td>

                    </tr>
                    <tr>
                      <th scope="row">Freitag</th>
                      <td>8.00 - 12.00</td>

                    </tr>
                  </tbody>
                </table>
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



<?php get_footer(); ?>
