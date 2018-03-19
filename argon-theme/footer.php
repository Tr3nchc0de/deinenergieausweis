<?php wp_footer(); ?>



<section id="footer">
    <div class="container">
      <div class="row">

        <div class="col-sm-12 col-md-12 text-center">

          <ul>
            <a class="navbar-brand" href="<?php echo get_site_url(); ?>"><img src="/wp-content/themes/argon-theme/public/img/brand/brand-logo.png" class="brand-logo"></a>
            <div class="pt-4">
            <h5>Schnell - Günstig - Garantiert</h5>
            </div>

          </ul>

        </div>

      </div>
    </div>

</section>

<section id="copyright">
    <div class="container-fluid section-grey text-center copyright p-5">
        <a class="btn-scroll-on text-center" href="#top"><i class="fa fa-chevron-up"></i></a>
        <div class="footer-claim text-center mt-3"><p><a href="/impressum">Über uns</a> | <a href="/impressum">Datenschutz</a> | <a href="/impressum">AGB</a> | <a href="/impressum">Impressum</a></p></div>
        <div class="footer-claim text-center mt-3"><p>&copy; All rights reserved 2018 | Dein Energieausweis UG</p></div>
    </div>

    </div>

</section>

<script>
    window.sr = ScrollReveal();

    sr.reveal('.head-main-img-text', {
        duration: 2000,
        origin: 'left',
        distance: '300px'
    });

    sr.reveal('.subnav-list', {
        duration: 2500,
        origin: 'right'
    });

    sr.reveal('.brand-icon', {
        duration: 2000,
        origin: 'bottom'
    });

    sr.reveal('.footer-claim', {
        duration: 2500,
        origin: 'bottom'
    });

    sr.reveal('.copyright', {
        duration: 2500,
        origin: 'bottom'
    });
</script>


</body>
</html>
