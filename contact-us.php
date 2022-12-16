<?php
/*
Template Name: Contact Us
*/
get_header()?>
<main id="main">
    <section id="contactUs" class="d-flex align-items-center">
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
                </div>

                <div class="col-lg-6">
                    <h2 class="span1 text-center">Submit your details below and we’ll be in touch.</h2>
                    <div class="theform">
                        <?php echo do_shortcode( '[contact-form-7 id="10916" title="Contact form 1"]' )?>
                    </div>
                </div>


            </div>
        </div>
    </section>

</main>
<?php get_footer()?>