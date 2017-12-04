<?php
/*************************************************
		Roslagens Värme Setup
**************************************************/
functions roslagensvarme_script_enque() {
	wp_enqueue_style('customstyle', get_template_directory_uri() . 'dist/css/style.css', null, '1.0', 'all' );
	// Dont use http/https when linking in google fonts, http/https will bug with SSL 
	wp_enqueue_style('googlefonts', '//fonts.googleapis.com/css?family=Josefin+Sans');
	wp_enqueue_script('main', get_template_directory_uri() . '/dist/js/bundle.js', array('jquery'), '1.0', true);
}
add_action( 'wp_enqueue_script', 'roslagensvarme_script_enque');