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
				<div class="rvft-img-outer-container">
					<div class="rvft-img-inner-container">
						<img src="<?php the_field('rvftlogga'); ?>" class="rvft-img-logo" alt="Logotype of the company Roslagens Värme & Fastighetsteknik AB" />
						<h2><?php  echo get_field('logo-text'); ?></h2>
					<div>
				</div>
				<div>
					
				</div>
				<?php
			}
		}
	?>
	
</main>

<?php get_footer(); ?>