<?php 
/* 
* Template Name: Panasonic Water pumps
*/ 
?>

<?php get_header(); ?>
<main class="main-panasonic-water">
<?php
if(have_posts()) { 
	while(have_posts()) {
		
		the_post();
		?>
		<!-- First section, Panasonic and menu -->
		<div class="panasonic-container">
			<div class="panasonic-img-container">
				<img src="<?php the_field('panasonic-waterpump-image'); ?>" class="panasonic-image" alt="Logotype of the company Panasonic" />
				<h3><span class="pana-heating">heating</span> & <span class="pana-cooling">cooling</span> solutions</h3>
			</div><!-- panasonic-img-container -->
			<div class="panasonic-menu-container">
				<div class="pana-products-container">
					<h2><?php echo get_field('products-title'); ?></h2>
					<div class="products-line"></div>
				</div><!-- .pana-products-container -->
				<h3><?php wp_nav_menu(array('theme_location' => 'Panasonic menu')); ?></h3>
			</div><!-- .panasonic-menu-container -->
			<div class="page-title-container-water">
				<h2><?php echo get_field('panasonic-waterpump-title'); ?></h2>
			</div><!-- .page-title-container-water -->
		</div><!-- .panasonic-container -->

		<!-- Second section, Panasonic infotext and supportlink -->
		<div class="panasonic-support-container">
			<div class="panasonic-support-text-container">
				<h2 class="support-title"><?php echo get_field('support-title-waterpumps'); ?></h2>
				<p><?php echo get_field('support-text-waterpumps'); ?></p>
			</div><!-- .panasonic-support-text-container -->
			<div class="panasonic-propartners-container">
				<h2 class="propartners-title"><?php echo get_field('propartners-title'); ?></h2>
				<img src="<?php the_field('panasonic-propartners-image'); ?>" class="panasonic-propartners-image" alt="Logotype of the company Panasonic" />
			</div><!-- .panasonic-propartners-container -->	
		</div><!-- .panasonic-support-container -->

		<!-- Third section, Panasonic waterpumps products -->
		<div class="panasonic-waterpump-products-container">
			<div class="panasonic-waterpump-products-inner-container">
				<div class="pana-products">
					<img src="<?php the_field('waterpump-image1'); ?>" class="waterpump-image" alt="Image of an Panasonic heating air pump" />
					<div class="pana-products-text">
						<h3><?php echo get_field('panawater-product-title1'); ?></h3>
						<p><?php echo get_field('panawater-product-text1'); ?></p>
						<p class="panasonic-link-tag"><?php echo get_field('panawater-product-link1'); ?></p>
						<p class="panasonic-link-tag"><?php echo get_field('pana-product-sales1'); ?></p>
					</div><!-- .pana-products-text -->
				</div><!-- .pana-products -->
				<div class="pana-products">
					<img src="<?php the_field('waterpump-image2'); ?>" class="waterpump-image2" alt="Image of an Panasonic heating air pump" />
					<div class="pana-products-text">
						<h3><?php echo get_field('panawater-product-title2'); ?></h3>
						<p><?php echo get_field('panawater-product-text2'); ?></p>
						<p class="panasonic-link-tag"><?php echo get_field('panawater-product-link2'); ?></p>
						<p class="panasonic-link-tag"><?php echo get_field('pana-product-sales2'); ?></p>
					</div><!-- .pana-products-text -->
				</div><!-- .pana-products -->
			</div><!-- .panasonic-waterpump-products-inner-container -->
		</div><!-- .panasonic-waterpump-products-container -->
		<?php
		
	}
}
?>
</main>
<?php get_footer();?>