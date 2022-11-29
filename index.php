<?php
/*
Template Name: Home
 */
get_header()?>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png" class="img-fluid animated"
                    alt=""></a></h1>
        <nav id="navbar" class="navbar">
            <ul>
                <?php //wp_nav_menu(array('theme_location' => 'menu-1','menu_id'=> 'primary-menu',));?>
                <li><a class="nav-link scrollto active" href="#hero">About</a></li>
                <li><a class="nav-link scrollto" href="#services">Services</a></li>
                <li><a class="nav-link scrollto" href="<?php echo esc_url(home_url('/portfolio')); ?>">Portfolio</a>
                </li>
                <li><a class="nav-link scrollto" href="#services">Case Studies</a></li>
                <li><a class="nav-link scrollto" href="#portfolio">Contact Us</a></li>
                </li>
                <li><a class="getstarted scrollto" href="#about">Get Started</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row relative">
            <div class="leftBlueArrow"><img
                    src="<?php echo get_template_directory_uri() ?>/assets/img/left_arrow_blue.svg" /></div>
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                data-aos="fade-up" data-aos-delay="200">
                <h1>Your <span class="hero3">growth</span><span class="hero2">-driven media</span> <span
                        class="hero3">partner</span></h1>
                <h2><span class="hero4">No one leverages art and data like JSB</span></h2>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <a href="#about" class="btn-get-started scrollto">Let's go</a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/top.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>

</section><!-- End Hero -->

<main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="vanityMetrics">
        <div class="container" data-aos="fade-left">

            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1">
                    <div class="left-conti">
                        <div class="left-conti-inner">

                            <h2><span class="span1">More than vanity</span> <span class="span2">metrics</span></h2>
                            <div class="desc">
                                We’re expert brand builders who design<br />
                                modern media strategies to drive results<br />
                                and grow your business.
                            </div>
                            <div class="d-flex justify-content-center justify-content-lg-start">
                                <a href="#about" class="btn-get-started scrollto">Our Story</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    
    <section id="services" class="services">
        <div class="container flex-column" data-aos="fade-up">
            <h2 class="span1">Everything you need,<br />to <span class="span2">achieve</span> what you want</h2>
            <div class="desc">
                We assess your goals for growth, and<br />
                customize our services to meet and<br />
                exceed them.
            </div>
            <div class="d-flex justify-content-center justify-content-lg-start">
                <a href="#services" class="btn-get-started scrollto">Our services</a>
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
                <a href="#services" class="btn-get-started scrollto">Our impact</a>
            </div>
        </div>
    </section>
    
    <section id="skills" class="skills">
        <div class="container text-center" data-aos="fade-down">

      <div class="row">
        <h2 class="span1">Meet our <span class="span2">friends</span></h2>
      <div class="desc mt-2">
        We help brands break out of their insular thinking<br />
         patterns and look to unrelated categories for inspiration.
        </div>
      </div>

        </div>
    </section>

</main><!-- End #main -->

<?php get_footer()?>