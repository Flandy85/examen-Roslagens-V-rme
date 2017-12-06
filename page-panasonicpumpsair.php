<?php 
/* 
* Template Name: Panasonic Air pumps
*/ 
?>

<?php get_header(); ?>
<main class="main-panasonic-air">
<?php
	if(have_posts()) { 
		while(have_posts()) {
			
			the_post();
			?>
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
			<div class="panasonic-support-container">
				<div class="panasonic-support-text-container">
					<h2><?php echo get_field('support-title'); ?></h2>
					<p><?php echo get_field('support-text'); ?></p>
				</div>	
			</div>
			<?php
			
		}
	}
?>
</main>
<?php get_footer(); ?>
