<?php
	/* 
	Template Name: Home page
	*/
?>
<?php get_header(); ?>
<main>
	<?php
		if(have_posts()) {
			while(have_posts()) {
				
				the_post();
				?>
				<div>
					<p>Home Page</p>
				</div>
				
				<?php
			}
		}
	?>
	
</main>

<?php get_footer(); ?>