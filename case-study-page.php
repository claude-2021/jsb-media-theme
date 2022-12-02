<?php
/*
Template Name: Case Study
 */
get_header();

$args=array(
    'post_type'=>'casestudy',
    'post_per_page' => -1,
    'status'=>'publish'
);
$res = new WP_Query($args);
?>
<main id="main">
<?php 
d($res);
?>

    
</main>
<?php get_footer()?>