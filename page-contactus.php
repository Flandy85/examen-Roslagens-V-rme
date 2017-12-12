<?php 
/* 
* Template Name: Contact us
*/ 
?>

<?php get_header(); ?>
<main class="main-contactus-container">
<?php
if(have_posts()) { 
	while(have_posts()) {
		
		the_post();
		?>
		<section>
			<div class="contactus-flexbox-container">
				<div class="contactus-container">
					<div class="contactus-header-container">
						<h3 class="contactus-title"><?php echo get_field('contactus-title'); ?></h3>
						<div class="contactus-line"></div>
					</div>
					<p><?php echo get_field('contactus-text1'); ?><a href="tel: 08-201201"><?php echo get_field('contactus-phonenumber'); ?></a></p>
					<p><?php echo get_field('contactus-text2'); ?></p>
					<!-- Contact form short code from plugin -->
					<div class="contact-form-container">
						<?php echo do_shortcode("[wpforms id='158']"); ?>
					</div>
				</div>
				<div class="visitor-container">
					<div class="visitor-header-container">
						<h3 class="visitor-title"><?php echo get_field('visitor-title'); ?></h3>
						<div class="visitor-line"></div>
					</div>
					<div class="streetadress-container">
						<img src="<?php the_field('visitor-image'); ?>" class="visitor-image" alt="Photograph of Roslagens Värme & Fastighetsteknik HQ" />
						<p><?php echo get_field('visitor-text'); ?><a href="tel: 08-201201"><?php echo get_field('visitor-phonenumber'); ?></a></p>
					</div>
				</div>
			</div>
		</section>
		<?php	
	}
}
?>
</main>
<?php get_footer(); ?>