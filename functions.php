<?php
/**************************************************************
				Theme settings
**************************************************************/
require "theme_setting.php";
/**************************************************************
				Hooks Setup
**************************************************************/
add_action( 'after_setup_theme', 'rvft_blog_setup' );
// Register Custom Navigation Walker
require_once get_template_directory() . '/wp-bootstrap-navwalker.php';
/**************************************************************
				Roslagensvarme Setup
**************************************************************/
function rvft_blog_setup() {

	// Loads css for bootstrap and custom css
	wp_enqueue_style( 'bootstrap_css',get_template_directory_uri() . '/src/bootstrap-3.3.7-dist/css/bootstrap.min.css' );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/dist/css/style.css', null, '1.0', 'all' );
	// Make sure to not write http/https in googlefont link, security protocall for SSL will not work otherwise
	wp_enqueue_style('googlefonts', '//fonts.googleapis.com/css?family=Josefin+Sans:400,600');

	// Loads Javascript and cdn for Bootstrap js
	wp_enqueue_script('main', get_template_directory_uri() . '/dist/js/bundle.js', array('jquery'), '1.0', true);
	wp_enqueue_script( 'bootstrap_js',get_template_directory_uri() . '/src/bootstrap-3.3.7-dist/js/bootstrap.min.js' );

	// Enables use of navigation menu.
	register_nav_menu( 'mainmenu', 'Website main navigation' );
	

	// Custom Logo
	add_theme_support('custom-logo', array(
		'width'		=> 600,
		'height'	=> 85,
		'flex-width'	=> true,
		'flex-height'	=> true
		) );
	
}