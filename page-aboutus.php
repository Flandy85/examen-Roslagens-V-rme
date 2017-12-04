<?php 
/* 
* Template Name: About us
*/ 
?>

<?php get_header(); ?>

<?php
if(have_posts()) { 
	while(have_posts()) {
		
		the_post();
		?>
		<div>Om Företaget </div>
		<?php
		
	}
}
get_footer();
?>