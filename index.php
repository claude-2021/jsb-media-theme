<?php
/*
Template Name: Home
 */
get_header()?>
<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row relative">
            <div class="leftBlueArrow"><img
                    src="<?php echo get_template_directory_uri() ?>/assets/img/left_arrow_blue.svg" /></div>
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                data-aos="fade-up" data-aos-delay="200">
                <h1>Your <span class="hero3">growth</span><span class="hero2">-driven media</span> <span
                        class="hero3">partner</span></h1>
                <h2><span class="hero4">No one leverages art and data like JSB Media</span></h2>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <a href="contact-us" class="btn-get-started scrollto">Let's go</a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/top.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>

</section>

<main id="main">

    <section id="vanityMetrics">
        <div class="container" data-aos="fade-left">

            <div class="row">
                <div class="col-lg-6">
                    <div class="left-conti">
                        <div class="left-conti-inner">

                            <h2><span class="span1">More than vanity</span> <span class="span2">metrics</span></h2>
                            <div class="desc">
                                We’re expert brand builders who design<br />
                                modern media strategies to drive results<br />
                                and grow your business.
                            </div>
                            <div class="d-flex justify-content-center justify-content-lg-start">
                                <a href="about/" class="btn-get-started scrollto">Our Story</a>
                            </div>
                        </div>
                    </div>
                </div>
<div class="col-lg-6 flxrgt">
</div>
            </div>

        </div>
    </section>

    <section id="services" class="services">
        <div class="container flex-column" data-aos="fade-up">
            <h2 class="span1">Everything you need,<br />to <span class="span2">achieve</span> what you want</h2>
            <div class="desc">
                We assess your goals for growth, and<br />
                customize our services to meet and exceed them<br />
               
            </div>
            <div class="d-flex justify-content-center justify-content-lg-start">
                <a href="services" class="btn-get-started scrollto">Our services</a>
            </div>

        </div>
    </section>

    <section id="why-us" class="why-us section-bg">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div>
                    <h2>Proof is in the<br /><span class="span2">performance</span></h2>
                    <div class="desc">
                        Every business has a thriving brand<br />
                        inside of it. See how we’ve helped our<br />
                        clients unlock theirs.
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center justify-content-lg-start">
                <a href="casestudy/a-recipe-for-success/" class="btn-get-started scrollto">Our impact</a>
            </div>
        </div>
    </section>

    <section id="skills" class="skills">
        <div class="container text-center" data-aos="fade-down">

            <div class="row">
                <h2 class="span1">Meet our <span class="span2">friends</span></h2>
                <div class="desc">
                    We help brands break out of their insular thinking<br />
                    patterns and look to unrelated categories for inspiration.
                </div>
            </div>
        </div>
    </section>

    <section id="clients">
        <div class="container">
            <div class="row">
                <div class="cl-brdrs"><img src="<?php echo get_template_directory_uri() ?>/assets/img/sponsors.png"
                        class="img-fluid" alt=""></div>
            </div>
        </div>
    </section>
    <section id="brand">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <h2 class="span1">Take <span class="span2">the biggest step</span> for your brand</h2>
            <div class="desc">Discover what’s possible with a fresh perspective and a<br />
                 wealth of data used wisely.</div>                 
                 <div class="d-flex justify-content-center">
                <a href="contact-us" class="btn-get-started scrollto">Start here</a>
            </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer()?>