<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container inner">
        <div class="row">
            <div class="col-lg-6 lfaclr">
                <div class="rowftr">
                    <div class="bld">Email:</div>
                    <div class="vlu"><a href="mailto:jordan@jsbmedia.io">Jordan@jsbmedia.io</a></div>
                </div>
                <div class="rowftr">
                    <div class="bld">Phone:</div>
                    <div class="vlu"><a href="tel:+954.903.1655">954.903.1655</a></div>
                </div>
                <a target="_blank" class="rowftr" href="https://www.google.com/maps/place/11555+Heron+Bay+Blvd,+Coral+Springs,+FL+33076,+USA/@26.3103176,-80.2892294,15.25z/data=!4m5!3m4!1s0x88d91076dafcdf53:0x77749aef87ce7a!8m2!3d26.3094582!4d-80.2815225">
                    <div class="bld">Address:</div>
                    <div class="vlu">
                        11555 heron Bay Blvd<br />
                        Suite 200<br />
                        Coral Springs, FL 33076
                    </div>
                </a>
            </div>
            <div class="col-lg-6 mnu-php">
                <div class="row flex-row">
                <ul class="mnuphpfrt navbar">
    <li><a class="nav-link" href="<?php echo site_url('/about')?>">About</a></li>
    <li><a class="nav-link" href="<?php echo site_url('/services')?>">Services</a></li>
    <li class="dropdown"><a href="#"><span>Case Studies</span><i class=""></i></a>
        <ul>
        <?php 
        $mnu='';
        $res=getMyMnu();
        //wp_nav_menu(array('theme_location' => 'menu-case-studies','container'=>false));
        foreach($res->posts as $mn){
            $mnu.= '<li>';
            $mnu.= '<a href="'.get_permalink( $mn->ID ).'">'.$mn->post_title.'</a>';
            $mnu.= '</li>';
        }
        echo $mnu;
        ?>
        </ul>
    </li>
    <li><a class="nav-link" href="<?php echo site_url('/contact-us')?>">Contact Us</a></li>
</ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="logo-ftr flex justify-content-end">
                <img width="230" src="<?php echo get_template_directory_uri()?>/assets/img/logo-footer1.png" class="img-fluid" alt="">
            </div>
        </div>
        <div class="row pp-and-social-1">
            <div>JSB Media - all rights reserved</div>
        </div>
        <div class="pp-and-social-2">
            <div><a href="privacy_policy" class="privacy under"> </a> <a href="terms-use"
                    class="terms under"></a></div>
            <div>
                <div class="socials">
                    <ul>
                        <li><a class="soc soc-fb" target="_blank" href="https://www.facebook.com/jsbmedia.io?mibextid=LQQJ4d"></a></li>
                        <li><a class="soc soc-tw" target="_blank" href="https://twitter.com/jsbmedia_us?s=21&t=bN_hegV0-2elWENmDb1MNg"></a></li> 
						<li><a class="soc soc-yt" target="_blank" href="https://www.linkedin.com/company/jsbmedia/"></a></li>										
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>
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