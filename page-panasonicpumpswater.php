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
			</div>
			<div class="panasonic-menu-container">
				<div class="pana-products-container">
					<h2><?php echo get_field('products-title'); ?></h2>
					<div class="products-line"></div>
				</div>
				<h3><?php wp_nav_menu(array('theme_location' => 'Panasonic menu')); ?></h3>
			</div>
			<div class="page-title-container-water">
				<h2><?php echo get_field('panasonic-waterpump-title'); ?></h2>
			</div>
		</div>
		<!-- Second section, Panasonic infotext and supportlink -->
		<div class="panasonic-support-container">
			<div class="panasonic-support-text-container">
				<h2 class="support-title"><?php echo get_field('support-title-waterpumps'); ?></h2>
				<p><?php echo get_field('support-text-waterpumps'); ?><a href="https://www.aircon.panasonic.eu/SE_sv/contact/" rel="noopener" target="blank"> <span class="Panasonic">Panasonics</span> <span class="pan-customer">kund</span><span class="pan-customer-service">tjänst</span></a> <?php echo get_field('support-text2-waterpumps'); ?></p>
			</div>	
		</div>
		<?php
		
	}
}
?>
</main>
<?php get_footer();?>