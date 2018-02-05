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
			<!-- First section, Panasonic and menu -->
			<div class="panasonic-container">
				<div class="panasonic-img-container">
					<img src="<?php the_field('panasonic-image'); ?>" class="panasonic-image" alt="Logotype of the company Panasonic" />
					<h3><span class="pana-heating">heating</span> & <span class="pana-cooling">cooling</span> solutions</h3>
				</div><!-- .panasonic-img-container -->
				<div class="panasonic-menu-container">
					<div class="pana-products-container">
						<h2><?php echo get_field('products-title'); ?></h2>
						<div class="products-line"></div>
					</div><!-- .pana-products-container -->
					<h3><?php wp_nav_menu(array('theme_location' => 'Panasonic menu')); ?></h3>
				</div><!-- .panasonic-menu-container -->
				<div class="page-title-container-air">
					<h2><?php echo get_field('panasonic-airpump-title'); ?></h2>
				</div><!-- .page-title-container-air -->
			</div><!-- .panasonic-container -->

			<!-- Second section, Panasonic infotext and supportlink -->
			<div class="panasonic-support-container">
				<div class="panasonic-support-text-container">
					<h2 class="support-title"><?php echo get_field('support-title'); ?></h2>
					<p><?php echo get_field('support-text'); ?></p>
				</div><!-- .panasonic-support-text-container -->
				<div class="panasonic-propartners-container">
					<h2 class="propartners-title"><?php echo get_field('propartners-title'); ?></h2>
					<img src="<?php the_field('panasonic-propartners-image'); ?>" class="panasonic-propartners-image" alt="Logotype of the company Panasonic" />
				</div><!--.panasonic-propartners-container -->	
			</div><!-- .panasonic-support-container -->

			<!-- Third section, Panasonic products -->
			<div class="panasonic-products-container">
				<div class="panasonic-products-inner-container">
					<div class="pana-products">
						<img src="<?php the_field('airpump-image1'); ?>" class="airpump-image" alt="Image of an Panasonic heating air pump" />
						<div class="pana-products-text">
							<h3><?php echo get_field('pana-product-title1'); ?></h3>
							<p><?php echo get_field('pana-product-text1'); ?></p>
							<p class="panasonic-link-tag"><?php echo get_field('pana-product-link1'); ?></p>
							<p class="panasonic-link-tag"><?php echo get_field('pana-product-sales1'); ?></p>
						</div><!-- .pana-products-text -->
					</div><!-- .pana-products -->
					<div class="pana-products">
						<img src="<?php the_field('airpump-image2'); ?>" class="airpump-image" alt="Image of an Panasonic heating air pump" />
						<div class="pana-products-text">
							<h3><?php echo get_field('pana-product-title2'); ?></h3>
							<p><?php echo get_field('pana-product-text2'); ?></p>
							<p class="panasonic-link-tag"><?php echo get_field('pana-product-link2'); ?></p>
							<p class="panasonic-link-tag"><?php echo get_field('pana-product-sales2'); ?></p>
						</div><!-- .pana-products-text -->
					</div><!-- .pana-products -->
					<div class="pana-products">
						<img src="<?php the_field('airpump-image3'); ?>" class="airpump-image" alt="Image of an Panasonic heating air pump" />
						<div class="pana-products-text">
							<h3><?php echo get_field('pana-product-title3'); ?></h3>
							<p><?php echo get_field('pana-product-text3'); ?></p>
							<p class="panasonic-link-tag"><?php echo get_field('pana-product-sales3'); ?></p>
						</div><!-- .pana-products-text -->
					</div><!-- .pana-products -->
					<div class="pana-products">
						<img src="<?php the_field('airpump-image4'); ?>" class="airpump-image" alt="Image of an Panasonic heating air pump" />
						<div class="pana-products-text">
							<h3><?php echo get_field('pana-product-title4'); ?></h3>
							<p><?php echo get_field('pana-product-text4'); ?></p>
							<p class="panasonic-link-tag"><?php echo get_field('pana-product-link4'); ?></p>
							<p class="panasonic-link-tag"><?php echo get_field('pana-product-sales4'); ?></p>
						</div><!-- .pana-products-text -->
					</div><!-- .pana-products -->
					<div class="pana-products">
						<img src="<?php the_field('airpump-image5'); ?>" class="airpump-image" alt="Image of an Panasonic heating air pump" />
						<div class="pana-products-text">
							<h3><?php echo get_field('pana-product-title5'); ?></h3>
							<p><?php echo get_field('pana-product-text5'); ?></p>
							<p class="panasonic-link-tag"><?php echo get_field('pana-product-link5'); ?></p>
							<p class="panasonic-link-tag"><?php echo get_field('pana-product-sales5'); ?></p>
						</div><!-- .pana-products-text -->
					</div><!-- .pana-products -->
					<div class="pana-products">
						<img src="<?php the_field('airpump-image6'); ?>" class="airpump-image" alt="Image of an Panasonic heating air pump" />
						<div class="pana-products-text">
							<h3><?php echo get_field('pana-product-title6'); ?></h3>
							<p><?php echo get_field('pana-product-text6'); ?></p>
							<p class="panasonic-link-tag"><?php echo get_field('pana-product-link6'); ?></p>
							<p class="panasonic-link-tag"><?php echo get_field('pana-product-sales6'); ?></p>
						</div><!-- .pana-products-text -->
					</div><!-- .pana-products -->	
				</div><!-- .panasonic-products-inner-container -->

				<!-- Fourth Section, Accessories section -->
				<div class="accessories-container">
					<div class="pana-products-container">
						<h2><?php echo get_field('accessories-title'); ?></h2>
						<div class="products-line"></div>
					</div>
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
				</div><!-- accessories-container -->
			</div><!-- .panasonic-products-container -->
			<?php
			
		}
	}
?>
</main>
<?php get_footer(); ?>
