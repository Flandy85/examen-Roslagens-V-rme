<?php
/**************************************************************
				Theme settings
**************************************************************/
require "theme_setting.php";
/**************************************************************
				Hooks Setup
**************************************************************/
add_action( 'after_setup_theme', 'rvft_blog_setup' );

/**************************************************************
				Roslagensvarme Setup
**************************************************************/
function rvft_blog_setup() {
	wp_enqueue_style( 'main', get_template_directory_uri() . '/dist/css/style.css', null, '1.0', 'all' );
	// Make sure to not write http in googlefont link, secerutiy protocall for SSL will not work otherwise
	wp_enqueue_style('googlefonts', '//fonts.googleapis.com/css?family=Josefin+Sans:400,600');
	wp_enqueue_script('main', get_template_directory_uri() . '/dist/js/bundle.js', array('jquery'), '1.0', true);
	register_nav_menu( 'mainmenu', 'Website main navigation' );
	register_nav_menu( 'footer', 'Website footer navigation' );

	// Custom Logo
	add_theme_support('custom-logo', array(
		'width'		=> 600,
		'height'	=> 85,
		'flex-width'	=> true,
		'flex-height'	=> true
		) );
	
}