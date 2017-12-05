<?php
	/* 
	Template Name: Front page
	*/
?>
<?php get_header(); ?>
<main>
	<?php
		if(have_posts()) {
			while(have_posts()) {
				
				the_post();
				?>
				<div class="rvft-img-container">
					<img src="<?php the_field('rvftlogga'); ?>" class="rvft-img-logo" alt="Logotype of the company Roslagens Värme & Fastighetsteknik AB" />
					
				</div>
				<?php
			}
		}
	?>
	
</main>

<?php get_footer(); ?>