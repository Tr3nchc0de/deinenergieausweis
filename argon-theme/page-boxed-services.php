<?php
/*
Template Name: Services Boxed Page
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
                <h5><em><?php the_excerpt(); ?></em></h5>
                <a class="btn-scroll-on text-center" href="#section-services-2"><i class="fa fa-chevron-down"></i></a>
            </div>
        </div>
    </section>

    <section id="section-services-2" class="section-space section-white">
      <div class="container">
          <div class="row h-100">
            <div class="col-sm-12 col-md-6 my-auto">
              <h3 class="head-dash-sub">Handlungsanleitungen</h3>
              <p>Wir erstellen Handlungsanleitungen zur Vertragsgestaltung, Vorbereitung und Ausführung von Bauvorhaben, Liefer- und Dienstleistungen.
In zahlreichen Vergabegesetzen der Länder ergeben sich vielfältige Neuerungen, die von den öffentlichen Auftraggebern zu beachten sind. Hierzu zählen u. a. die</p>
<ul class="list-arrow"><li>Tariftreue</li>
<li>ökologische und</li>
<li>soziale Kriterien</li>
<li>Sanktions- und Kontrollmöglichkeiten</li>
<li>Dokumentationspflichten sowie</li>
<li>Informations- und Bekanntmachungspflichten.</li></ul>
<p>Hierzu bieten wir als Unterstützungsmöglichkeit insbesondere die Einarbeitung von Standards in bestehende Dienstanweisungen, Handlungsanleitungen bzw. die Erstellung oder Angleichung von Musterformularen an.</p>            </div>
            <div class="col-sm-12 col-md-6 d-flex align-items-center ">
              <img class="img-fluid d-block mx-auto align-middle" src="/wp-content/themes/wp-theme/public/img/services/icon-1.jpg">
            </div>
          </div>
      </div>
    </section>

    <section id="section-services-3" class="section-space section-grey">
        <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-6  d-flex align-items-center">
                <img class="img-fluid d-block mx-auto" src="/wp-content/themes/wp-theme/public/img/services/icon-2.jpg">
              </div>
              <div class="col-sm-6 col-md-6 my-auto">
                <h3 class="head-dash-sub">Begleitung von Vergaben</h3>
                <p>Im Dialog mit unseren Mandanten erstellen wir Konzepte, Verdingungsunterlagen und erarbeiten Vertragswerke und unterstützen Sie bei der Prüfung und Wertung von Angeboten. Wir bieten unseren Mandanten auch an, bereits abgeschlossene Vergabeverfahren auf ihre Rechtmäßigkeit zu überprüfen, um für die Zukunft Verbesserungspotentiale auszuschöpfen.</p>
              </div>
            </div>
        </div>
    </section>

    <section id="section-services-4" class="section-space section-white">
        <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-6">
                <h3 class="head-dash-sub">Vergabetaktik</h3>
                <p>Schon Heraklit hat geschrieben, man könne nicht zwei Mal in denselben Fluss steigen. Auf Vergaberecht bezogen könnte man das vereinfacht so interpretieren: jeder Fall ist anders oder Vergabetaktik kann man nicht aus Lehrbüchern lernen. Dennoch ist gerade im Vergaberecht die Vergabetaktik häufig wesentlich für den Erfolg. Unser Ansatz ist daher aufbauend auf unsere langjährigen Erfahrungen, im Rahmen der rechtlichen Möglichkeiten kreative Ansätze zu bieten, die auch Nachprüfungsverfahren standhalten. Bei der Entwicklung derartiger Ansätze spielt aus unserer Sicht die Kommunikation zwischen Rechtsberater und Fachabteilung eine entscheidende Rolle.</p>
              </div>
              <div class="col-sm-12 col-md-6 d-flex align-items-center">
                <img class="img-fluid d-block mx-auto" src="/wp-content/themes/wp-theme/public/img/services/icon-3.jpg">
              </div>
            </div>
        </div>
    </section>

    <section id="section-services-5" class="section-space section-grey">
        <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-6 d-flex align-items-center">
                <img class="img-fluid d-block mx-auto" src="/wp-content/themes/wp-theme/public/img/services/icon-4.jpg">
              </div>
              <div class="col-sm-6 col-md-6">
                <h3 class="head-dash-sub">Verhandlungsverfahren</h3>
                <p>Wir begleiten unsere Mandanten in Verhandlungsverfahren in den Bereichen der Sektoren (Wasser, Energie, Verkehr), den Ausschreibungen von Planungsleistungen sowie bei Privatisierungen von Teilbetrieben. Dabei stellen wir immer wieder fest, wie wichtig es ist, auch in Verhandlungsverfahren schon in der Vorbereitung der Ausschreibung die Weichen zu stellen. Unsere Inhouseschulungen im Vorfeld zu umfangreichen Verhandlungsverfahren haben sich bewährt, um gerade in der Strukturierung und Dokumentation der Verhandlungen sowie bei der Ausarbeitung der maßgebenden Kriterien vergaberechtskonform zu handeln.
              </div>
            </div>
        </div>
    </section>

    <section id="section-5" class="testimonial">
        <div class="container">
            <div class="row">
              <div class="col-sm-12  work text-center head-center headline p-5">
                  <img class="text-center img-fluid p-3" src="/wp-content/themes/wp-theme/public/img/icon-testimonial.png">
                <h3>Neue Herausforderungen spornen uns an. Weiterentwicklung ist uns wichtig.</h3>
                <em>SH-Partner</em>

              </div>
            </div>
        </div>
    </section>
    <section id="section-contact-person" class="section-space section-grey">
        <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-4 text-center">
              <img class="rounded-circle mx-auto d-block p-2" src="/wp-content/themes/wp-theme/public/img/huenemoerder.jpg">
              </div>
              <div class="col-sm-12 col-md-4">
                <h3 class="head-dash-sub">Ihr Ansprechpartner</h3>
                <p>Haben Sie Fragen oder Anregungen? <br>Melden Sie sich gerne bei uns. </p>
                  <ul class="contact-person">
                    <li>Olaf Hünemörder<br><em>Rechtsanwalt | SH-Partner</em></li>
                    <li><i class="fa fa-envelope"></i><a href="mailto:dbr@sh-partner.de"> dbr@sh-partner.de</a></li>
                    <li><i class="fa fa-phone"></i><a href="+493820377690"> +49 38203-77690</a></li>
                  </ul>
              </div>
              <div class="col-sm-12 col-md-4">
                <h3 class="head-dash-sub">Anfrage stellen</h3>
                <p>Haben Sie Fragen oder Anregungen? <br>Melden Sie sich gerne bei uns. </p>
                  <ul class="contact-person">
                    <li><em>Zum Anfrageformular</em></li>
                    <a class="btn text-center" href="#inquiryModal" data-sr-id="4"><i class="fa fa-chevron-right"><strong> Anfrage stellen</strong></i></a>
                  </ul>
              </div>

            </div>
        </div>
    </section>




<?php get_footer(); ?>
