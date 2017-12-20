<?php 
/* 
* Template Name: Completed Jobs
*/ 
?>

<?php get_header(); ?>
<main>
<?php
if(have_posts()) { 
	while(have_posts()) {
		
		the_post();
		?>
		<div>Inläggssida </div>
		<?php
		
	}
}
?>
</main>
<?php get_footer();?>
