<?php 
/* 
* Template Name: Panasonic Water pumps
*/ 
?>

<?php get_header(); ?>

<?php
if(have_posts()) { 
	while(have_posts()) {
		
		the_post();
		?>
		<div>Panasonic Luft-vatten värmepumpar </div>
		<?php
		
	}
}
get_footer();
?>