<?php 
/* 
* Template Name: Contact us
*/ 
?> <?php get_header(); ?> <main class="main-contactus-container"> <?php
if(have_posts()) { 
	while(have_posts()) {
		
		the_post();
		?> <section><div class="contactus-flexbox-container"><div class="contactus-container"><div class="contactus-header-container"><h3 class="contactus-title"><?php echo get_field('contactus-title'); ?></h3><div class="contactus-line"></div><p><?php echo get_field('contactus-text1'); ?><a href="tel: 08-201201"><?php echo get_field('contactus-phonenumber'); ?></a></p><p><?php echo get_field('contactus-text2'); ?></p></div><!-- .contactus-header-container --><!-- Contact form container for short code from WP-Form plugin --><div class="contact-form-container"><!-- <?php //echo do_shortcode("[wpforms id='377']"); ?> --> <?php echo do_shortcode("[ninja_form id=2]") ?> </div><!-- .contact-form-container --></div><!-- .contactus-container --><div class="visitor-container"><div class="visitor-header-container"><h3 class="visitor-title"><?php echo get_field('visitor-title'); ?></h3><div class="visitor-line"></div></div><!-- .visitor-header-container --><div class="streetadress-container"><div class="streetadress-image-container"><img src="<?php the_field('visitor-image'); ?>" class="visitor-image" alt="Photograph of Roslagens Värme & Fastighetsteknik HQ"></div><!-- .streetadress-image-container --><div class="streetadress-adress-container"><p><?php echo get_field('visitor-text'); ?><a href="tel: 08-201201"><?php echo get_field('visitor-phonenumber'); ?></a></p></div><!-- .streetadress-adress-container --></div><!-- .streetadress-container --></div><!-- .visitor-container --></div><!-- .contactus-flexbox-container --></section> <?php	
	}
}
?> </main> <?php get_footer(); ?>