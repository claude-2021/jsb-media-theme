<?php
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}
function p4_custom_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	register_nav_menus(
		array(
//'menu-1' => esc_html__( 'Primary', 'jsb-media' ),
			'menu-case-studies' => esc_html__( 'Primary', 'jsb-media' ),
		)
	);
}
add_action( 'after_setup_theme', 'p4_custom_setup' );
function p4_custom_scripts() {
	wp_enqueue_style( 'p4-custom-style', get_stylesheet_uri(), array(), _S_VERSION );
}
add_action( 'wp_enqueue_scripts', 'p4_custom_scripts' );


require_once get_template_directory() . '/jsbcpt/jsbcpt.php';
require_once get_template_directory() . '/wpbakery-elements/header.php';
require_once get_template_directory() . '/wpbakery-elements/activities.php';
require_once get_template_directory() . '/wpbakery-elements/results.php';

$dir = get_stylesheet_directory() . '/vc_templates';   
vc_set_shortcodes_templates_dir( $dir );

function getMyMnu(){
	$args=array(
		'post_type'=>'casestudy',
		'post_per_page' => -1,
		'status'=>'publish',
		'orderby'=>'ID',
		'order'=>'ASC'

	);
	$res = new WP_Query($args);
	return $res;
}