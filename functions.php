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
			'menu-case-studies' => esc_html__( 'Case Studies', 'jsb-media' ),
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

add_filter( 'wp_get_nav_menu_items', 'cpt_locations_filter', 10, 3 );

function cpt_locations_filter( $items, $menu, $args ) {
  $child_items = array(); 
  $menu_order = count($items); 
  $parent_item_id = 0;

  foreach ( $items as $item ) {
    if ( in_array('menu-case-studies', $item->classes) ){ //add this class to your menu item
        $parent_item_id = $item->ID;
    }
  }

  if($parent_item_id > 0){

      foreach ( get_posts( 'post_type=casestudy&numberposts=-1' ) as $post ) {
        $post->menu_item_parent = $parent_item_id;
        $post->post_type = 'casestudy';
        $post->object = 'casestudy';
        $post->type = 'casestudy';
        $post->menu_order = ++$menu_order;
        $post->title = $post->post_title;
        $post->url = get_permalink( $post->ID );
        array_push($child_items, $post);
      }

  }

  return array_merge( $items, $child_items );
}