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
			'menu-1' => esc_html__( 'Primary', 'jsb-media' ),
		)
	);
}
add_action( 'after_setup_theme', 'p4_custom_setup' );
function p4_custom_scripts() {
	wp_enqueue_style( 'p4-custom-style', get_stylesheet_uri(), array(), _S_VERSION );
}
add_action( 'wp_enqueue_scripts', 'p4_custom_scripts' );

$menuname = 'JSB-media Main Menu';
$bpmenulocation = 'lblgbpmenu';
// Does the menu exist already?
$menu_exists = wp_get_nav_menu_object( $menuname );

// If it doesn't exist, let's create it.
if( !$menu_exists){
    $menu_id = wp_create_nav_menu($menuname);

    // Set up default BuddyPress links and add them to the menu.
    wp_update_nav_menu_item($menu_id, 0, array(
        'menu-item-title' =>  __('About'),
        'menu-item-classes' => 'about',
        'menu-item-url' => home_url( '/about' ), 
        'menu-item-status' => 'publish'));

    wp_update_nav_menu_item($menu_id, 0, array(
        'menu-item-title' =>  __('Services'),
        'menu-item-classes' => 'services',
        'menu-item-url' => home_url( '/services/' ), 
        'menu-item-status' => 'publish'));

    wp_update_nav_menu_item($menu_id, 0, array(
        'menu-item-title' =>  __('Case Studies'),
        'menu-item-classes' => 'case-studies',
        'menu-item-url' => home_url( '/case-studies/' ), 
        'menu-item-status' => 'publish'));

    wp_update_nav_menu_item($menu_id, 0, array(
        'menu-item-title' =>  __('Contact Us'),
        'menu-item-classes' => 'contactus',
        'menu-item-url' => home_url( '/contact-us/' ), 
        'menu-item-status' => 'publish'));

    if( !has_nav_menu( $bpmenulocation ) ){
        $locations = get_theme_mod('nav_menu_locations');
        $locations[$bpmenulocation] = $menu_id;
        set_theme_mod( 'nav_menu_locations', $locations );
    }
}
