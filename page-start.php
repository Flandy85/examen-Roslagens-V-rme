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
				<!-- First section on home page -->
				<div class="rvft-img-outer-container">
					<div class="rvft-img-inner-container">
						<img src="<?php the_field('rvftlogga'); ?>" class="rvft-img-logo" alt="Logotype of the company Roslagens Värme & Fastighetsteknik AB" />
						<h2><?php echo get_field('logo-text'); ?></h2>
					</div>
					<!-- This empty div is flexbox positioning for rvft logo -->
					<div class="placeholder-div"></div>
				</div>
				<div class="small-title-container">
					<h4><?php echo get_field('text-title'); ?></h4>
				</div>
				<!-- Second section, Panasonic pumps -->
				<div class="panasonic-container">
					<div class="panasonic-img-container">
						<img src="<?php the_field('panasonic-image'); ?>" class="panasonic-image" alt="Logotype of the company Panasonic" />
						<h3><span class="pana-heating">heating</span> & <span class="pana-cooling">cooling</span> solutions</h3>
					</div>
					<div class="panasonic-menu-container">
						<div class="pana-products-container">
							<h2><?php echo get_field('products-title'); ?></h2>
							<div class="products-line"></div>
						</div>
						<h3><?php wp_nav_menu(array('theme_location' => 'Panasonic menu')); ?></h3>
					</div>
				</div>
				<!-- Third section, LG pumps -->
				<div class="lg-container">
					<div class="lg-image-container">
						<img src="<?php the_field('lg-image'); ?>" class="lg-image" alt="Logotype of the company LG" />
						<h3><?php echo get_field('first-title'); ?></h3>
						<h3><?php echo get_field('second-title'); ?></h3>
					</div>
					<div class="lg-menu-container">
						<div class="lg-products-container">
							<h2><?php echo get_field('lg-products-title'); ?></h2>
							<div class="products-line"></div>
						</div>
						<h3><?php wp_nav_menu(array('theme_location' => 'Lg menu')); ?></h3>
						<h3>
					</div>				
				</div>
				<?php
			}
		}
	?>
	
</main>

<?php get_footer(); ?>