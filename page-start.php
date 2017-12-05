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
					<img src="<?php the_field('rvftlogga'); ?>" class="" alt="Bild på företaget Roslagens Värme & Fastighetsteknik logga">
					
				</div>
				<?php
			}
		}
	?>
	
</main>

<?php get_footer(); ?>