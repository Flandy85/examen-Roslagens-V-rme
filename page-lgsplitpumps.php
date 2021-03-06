<?php 
/* 
* Template Name: LG Split pumps
*/ 
?>

<?php get_header(); ?>
<main class="main-lg-split-pumps">
<?php
if(have_posts()) { 
	while(have_posts()) {
		
		the_post();
		?>
		<!-- First section, LG logotype and menu container -->
		<div class="lg-container">
			<div class="lg-image-container">
				<img src="<?php the_field('lg-image'); ?>" class="lg-image" alt="Logotype of the company LG" />
				<h3><?php echo get_field('first-title'); ?></h3>
				<h3><?php echo get_field('second-title'); ?></h3>
			</div><!-- .lg-image-container -->
			<div class="lg-menu-container">
				<h3><?php wp_nav_menu(array('theme_location' => 'Lg menu')); ?></h3>
				<div class="products-line"></div>
			</div><!-- .lg-menu-container -->				
		</div><!-- .lg-container -->

		<!-- Second section, LG infotext and supportlink container -->
		<div class="lg-support-container">
			<div class="lg-support-text-container">
				<h2 class="lg-support-title"><?php echo get_field('support-title-splitpumps'); ?></h2>
				<p><?php echo get_field('support-text-lg-pumps'); ?><?php echo get_field('support-text2-splitpumps'); ?></p>
				<p><a href="tel: 08-201201"> <?php echo get_field('support-tel-link-lgpumps'); ?></a></p>
			</div><!-- .lg-support-text-container -->
			<div class="lg-businesspartners-container">
				<h2 class="businesspartners-title"><?php echo get_field('businesspartners-title'); ?></h2>
				<img src="<?php the_field('lg-partners-image'); ?>" class="lg-businesspartners-image" alt="Logotype of the company LG" />
			</div>	
		</div><!-- .lg-support-container -->

		<!-- Third section, LG SPLIT airpumps products container and Accessories container -->
		<div class="lg-splitpumps-products-container">
			<div class="lg-splitpumps-products-inner-container">
				<div class="lg-products">
					<img src="<?php the_field('lg-splitpump-image1'); ?>" class="splitpump-image" alt="Image of an LG Split system heating air pump" />
					<div class="lg-products-text">
						<h3><?php echo get_field('lgsplit-product-title1'); ?></h3>
						<p><?php echo get_field('lgsplit-product-text1'); ?></p>
						<p class="lg-link-tag"><?php echo get_field('lgsplit-product-link1'); ?></p>
					</div><!-- .lg-products-text -->
				</div><!-- .lg-products -->
				<div class="lg-products">
					<img src="<?php the_field('lg-splitpump-image2'); ?>" class="splitpump-image" alt="Image of an LG Split system heating air pump" />
					<div class="lg-products-text">
						<h3><?php echo get_field('lgsplit-product-title2'); ?></h3>
						<p><?php echo get_field('lgsplit-product-text2'); ?></p>
						<p class="lg-link-tag"><?php echo get_field('lgsplit-product-link2'); ?></p>
					</div><!-- .lg-products-text -->
				</div><!-- .lg-products -->
				<div class="lg-products">
					<img src="<?php the_field('lg-splitpump-image3'); ?>" class="splitpump-image" alt="Image of an LG Split system heating air pump" />
					<div class="lg-products-text">
						<h3><?php echo get_field('lgsplit-product-title3'); ?></h3>
						<p><?php echo get_field('lgsplit-product-text3'); ?></p>
						<p class="lg-link-tag"><?php echo get_field('lgsplit-product-link3'); ?></p>
					</div><!-- .lg-products-text -->
				</div><!-- .lg-products -->
			</div><!-- . lg-splitpumps-products-inner-container -->

			<!-- Accessories container -->
			<div class="accessories-container">
				<div class="lg-products-container">
					<h2><?php echo get_field('accessories-title'); ?></h2>
					<div class="products-line"></div>
				</div><!-- .lg-products-container -->
				<div class="accesories-products">
					<img src="<?php the_field('accesories-image1'); ?>" class="accessories-image" alt="Bild på tillbehör till värmepumpskydd. Trälåda" />
					<div class="accessories-products-text">
						<h3><?php echo get_field('accesories-product-title1'); ?></h3>
						<p><?php echo get_field('accessories-product-text1'); ?></p>
					</div><!-- .accessories-products-text -->
				</div><!-- .accesories-products -->
				<div class="accesories-products">
					<img src="<?php the_field('accesories-image2'); ?>" class="accessories-image" alt="Bild på tillbehör till värmepumptak. Plåttak" />
					<div class="accessories-products-text">
						<h3><?php echo get_field('accesories-product-title2'); ?></h3>
						<p><?php echo get_field('accessories-product-text2'); ?></p>
					</div><!-- .accessories-products-text -->
				</div><!-- .accesories-products -->
				<div class="accesories-products">
					<img src="<?php the_field('accesories-image3'); ?>" class="accessories-image" alt="Bild på tillbehör till värmepump. Droppskål med värmekabel" />
					<div class="accessories-products-text">
						<h3><?php echo get_field('accesories-product-title3'); ?></h3>
						<p><?php echo get_field('accessories-product-text3'); ?></p>
					</div><!-- .accessories-products-text -->
				</div><!-- .accesories-products -->
				<div class="accesories-products">
					<img src="<?php the_field('accesories-image4'); ?>" class="accessories-image" alt="Bild på tillbehör till värmepump. Elektronisk styrdosa för wifi" />
					<div class="accessories-products-text">
						<h3><?php echo get_field('accesories-product-title4'); ?></h3>
						<p><?php echo get_field('accessories-product-text4'); ?></p>
					</div><!-- .accessories-products-text -->
				</div><!-- .accesories-products -->
				<div class="accesories-products">
					<img src="<?php the_field('accesories-image5'); ?>" class="accessories-image" alt="Bild på tillbehör till värmepump. Elektronisk styrdosa för sms" />
					<div class="accessories-products-text">
						<h3><?php echo get_field('accesories-product-title5'); ?></h3>
						<p><?php echo get_field('accessories-product-text5'); ?></p>
					</div><!-- .accessories-products-text -->
				</div><!-- .accesories-products -->
			</div><!-- .accessories-container -->
		</div><!-- .lg-splitpumps-products-container -->
		<?php
		
	}
}
?>
</main>
<?php get_footer(); ?>