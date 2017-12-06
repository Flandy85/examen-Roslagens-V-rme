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
				</div>
				<div class="panasonic-menu-container">
					<div class="pana-products-container">
						<h2><?php echo get_field('products-title'); ?></h2>
						<div class="products-line"></div>
					</div>
					<h3><?php wp_nav_menu(array('theme_location' => 'Panasonic menu')); ?></h3>
				</div>
			</div>
			<!-- Second section, Panasonic infotext and supportlink -->
			<div class="panasonic-support-container">
				<div class="panasonic-support-text-container">
					<h2 class="support-title"><?php echo get_field('support-title'); ?></h2>
					<p><?php echo get_field('support-text'); ?><a href="https://www.aircon.panasonic.eu/SE_sv/contact/" rel="noopener" target="blank"> <span class="Panasonic">Panasonics</span> <span class="pan-customer">kund</span><span class="pan-customer-service">tjänst</span></a> <?php echo get_field('support-text2'); ?></p>
				</div>	
			</div>
			<!-- Third section, Panasonic products -->
			<div class="panasonic-products-container">
				<div class="panasonic-products-inner-container">
					<div class="pana-products">
						<img src="<?php the_field('airpump-image1'); ?>" class="airpump-image" alt="Image of an Panasonic heating air pump" />
						<div class="pana-products-text">
							<h3><?php echo get_field('pana-product-title1'); ?></h3>
							<p><?php echo get_field('pana-product-text1'); ?></p>
							<p class="panasonic-link-tag"><a href="https://www.aircon.panasonic.eu/SE_sv/product/panasonic-vz9ske-heatcharge/" rel="noopener" target="blank"><?php echo get_field('pana-product-link1'); ?></a></p>
						</div>
					</div>
					<div class="pana-products">
						<img src="<?php the_field('airpump-image2'); ?>" class="airpump-image" alt="Image of an Panasonic heating air pump" />
						<div class="pana-products-text">
							<h3><?php echo get_field('pana-product-title2'); ?></h3>
							<p><?php echo get_field('pana-product-text2'); ?></p>
							<p class="panasonic-link-tag"><a href="https://www.aircon.panasonic.eu/SE_sv/product/panasonic-hz9rke-hz25tke-flagship/" rel="noopener" target="blank"><?php echo get_field('pana-product-link2'); ?></a></p>
						</div>
					</div>
					<div class="pana-products">
						<img src="<?php the_field('airpump-image3'); ?>" class="airpump-image" alt="Image of an Panasonic heating air pump" />
						<div class="pana-products-text">
							<h3><?php echo get_field('pana-product-title3'); ?></h3>
							<p><?php echo get_field('pana-product-text3'); ?></p>
						</div>
					</div>
					<div class="pana-products">
						<img src="<?php the_field('airpump-image4'); ?>" class="airpump-image" alt="Image of an Panasonic heating air pump" />
						<div class="pana-products-text">
							<h3><?php echo get_field('pana-product-title4'); ?></h3>
							<p><?php echo get_field('pana-product-text4'); ?></p>
						</div>
					</div>
					<div class="pana-products">
						<img src="<?php the_field('airpump-image5'); ?>" class="airpump-image" alt="Image of an Panasonic heating air pump" />
						<div class="pana-products-text">
							<h3><?php echo get_field('pana-product-title5'); ?></h3>
							<p><?php echo get_field('pana-product-text5'); ?></p>
						</div>
					</div>
					<div class="pana-products">
						<img src="<?php the_field('airpump-image6'); ?>" class="airpump-image" alt="Image of an Panasonic heating air pump" />
						<div class="pana-products-text">
							<h3><?php echo get_field('pana-product-title6'); ?></h3>
							<p><?php echo get_field('pana-product-text6'); ?></p>
						</div>
					</div>
					
				</div>
				<div class="accessories-container">
					
				</div>
				
			</div>
			<?php
			
		}
	}
?>
</main>
<?php get_footer(); ?>
