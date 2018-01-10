<?php 
/* 
* Template Name: LG Multi pumps
*/ 
?> <?php get_header(); ?> <?php
if(have_posts()) { 
	while(have_posts()) {
		
		the_post();
		?> <div>LG Multi pumpar</div> <?php
		
	}
}
get_footer();
?>