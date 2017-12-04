<?php 
/* 
* Template Name: LG Split pumps
*/ 
?>

<?php get_header(); ?>

<?php
if(have_posts()) { 
	while(have_posts()) {
		
		the_post();
		?>
		<div>LG Split pumpar </div>
		<?php
		
	}
}
get_footer();
?>