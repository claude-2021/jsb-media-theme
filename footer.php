<!-- ======= Footer ======= -->
<footer id="footer">

<div class="container inner">
  <div class="row">
    <div class="col-6">

    <div class="rowftr">
      <div class="bld">Email:</div>
      <div class="vlu"><a href="mailto:jordan@jsbmedia.io">Jordan@jsbmedia.io</a></div>
    </div>
    <div class="rowftr">
      <div class="bld">Phone:</div>
      <div class="vlu"><a href="tel:+954.903.1655">954.903.1655</a></div>
    </div>
    <div class="rowftr">
      <div class="bld">Address:</div>
      <div class="vlu">
11555 heron Bay Blvd<br/>
Suite 200<br/>
Coral Springs, FL 33076
      </div>
    </div>
    



    </div>
    <div class="col-6 mnu-php">
      <div class="row flex-row">
      <?php wp_nav_menu(array('theme_location' => 'lblgbpmenu', 'menu_id'=> 'primary-menu',));?>
      </div>


    
    </div>
  </div>
  <div class="row">
    <div class="logo-ftr flex justify-content-end">
    <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo-footer.png" class="img-fluid" alt="">
    </div>
  </div>

<div class="row pp-and-social-1">
  <div>JSB Media - all rights reserved</div>
</div>
<div class="row pp-and-social-2">
  <div class="col-6"><a href="privacy_policy" class="privacy under">Privacy Policy</a>  <a href="terms-use" class="terms under">Terms of Use</a></div>
  <div class="col-6">
    <div class="socials">
      <ul>
        <li><a class="soc soc-fb" href="#"></a></li>
        <li><a class="soc soc-tw" href="#"></a></li>
        <li><a class="soc soc-yt" href="#"></a></li>
      </ul>
    </div>
  </div>

</div>

</div>
</footer>

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="<?php echo get_template_directory_uri() ?>/assets/vendor/aos/aos.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/main.js"></script>

<?php wp_footer(); ?>
</body>

</html>