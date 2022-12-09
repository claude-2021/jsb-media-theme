<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>JSB - Media</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="<?php echo get_template_directory_uri() ?>/assets/img/favicon.png" rel="icon">
  <link href="<?php echo get_template_directory_uri() ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="<?php echo get_template_directory_uri() ?>/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri() ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri() ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri() ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri() ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri() ?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri() ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="<?php echo get_template_directory_uri() ?>/assets/css/style.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri() ?>/assets/css/style-mobile.css" rel="stylesheet">
  <!-- =======================================================
  * Template Name: Arsha - v4.9.1
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <?php wp_head();
  $args=array(
    'post_type'=>'casestudy',
    'post_per_page' => -1,
    'status'=>'publish'
);
$res = new WP_Query($args);


global $wp;
$ex = explode( '/', home_url( $wp->request ));
$end = end($ex);
?>
</head>
<body <?php body_class();?>>
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">
        <h1 class="logo me-auto"><a href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo-jsb-media.png" class="img-fluid animated" alt=""></a></h1>
        <nav id="navbar" class="navbar">
                <?php //wp_nav_menu(array('theme_location' => 'Primary',));?>

 <ul>
    <li><a class="nav-link<?php if($end =='about') echo ' currr'?>" href="<?php echo site_url('/about')?>">About</a></li>
    <li><a class="nav-link<?php if($end =='services') echo ' currr'?>" href="<?php echo site_url('/services')?>">Services</a></li>
    <li class="dropdown case-studies-parent"><a href="#" class="csadf"><span>Case Studies</span> 
        <i class="bi bi-chevron-down"></i></a>
        <ul>
        <?php 
        $mnu='';
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
    <li><a class="nav-link<?php if($end =='contact-us') echo ' currr'?>" href="<?php echo site_url('/contact-us')?>">Contact Us</a></li>

</ul>

            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    </div>
</header>