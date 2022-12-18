<?php
/*
Template Name: Contact Us
*/
get_header()?>
<main id="main">
    <section id="contactUs" class="d-flex align-items-center">
        <div class="inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <h1 class="span2">Life’s too short <span class="span3">to struggle<br />with marketing</span></h1>
                    <div class="desc text-white">
                        Now’s the time to turn your challenges into opportunities,
                         enhance your presence, and grow your business. If you have
                          questions, comments, or desires for a game-changing strategy,
                           we’re here for you. Submit your details below and we’ll be in touch.
                    </div>
                    <div class="zanblu">
                        <img height="23" src="<?php echo get_template_directory_uri() ?>/assets/img/zanblu.svg"/>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="theform">
                    <div class="theformInner">
                        <div class="abs">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/zantouvehorz.png" class="img-fluid" alt="">
                        </div>
                        <h2 class="span1">Submit your details below and we’ll be in touch.</h2>
                        <div class="">
                            <?php echo do_shortcode( '[contact-form-7 id="10916" title="Contact form 1"]' )?>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer()?>