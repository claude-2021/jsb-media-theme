<?php
/*
Template Name: Contact Us
*/
get_header()?>
<main id="main">
    <section id="contactUs" class="d-flex align-items-center">
        <div class="container">
            <div class="row relative">
                <div class="flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1 class="span2">Life’s too short <span class="span3">to struggle<br />with marketing</span></h1>
                    <div class="desc text-white">
                        Now’s the time to turn your challenges into opportunities,<br />
                         enhance your presence, and grow your business. If you have<br />
                          questions, comments, or desires for a game-changing strategy,<br />
                           we’re here for you. Submit your details below and we’ll be in touch.
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <section class="contact-form">
        <h2 class="span3 text-center">Submit your details below<br />and <span class="span2">we’ll be in touch.</span></h2>
        <div class="container">
        <div class="inner">
        
        <div class="theform">
            <?php echo do_shortcode( '[contact-form-7 id="10916" title="Contact form 1"]' )?>
        </div>
    </div>
    <div class="h-20">&nbsp;</div>
        </div>
    </section>

</main>
<?php get_footer()?>