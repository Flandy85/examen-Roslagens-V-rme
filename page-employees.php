<?php 
/* 
* Template Name: Employees 
*/ 
?>

<?php get_header(); ?>

<?php
if(have_posts()) { 
	while(have_posts()) {
		
		the_post();
		?>
		<div>Anställda </div>
		<?php
		
	}
}
get_footer();
?>