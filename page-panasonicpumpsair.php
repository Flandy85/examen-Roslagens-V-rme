<?php 
/* 
* Template Name: Panasonic Air pumps
*/ 
?>

<?php get_header(); ?>

<?php
if(have_posts()) { 
	while(have_posts()) {
		
		the_post();
		?>
		<div>Panasonic Luft värmepumpar </div>
		<?php
		
	}
}
get_footer();
?>