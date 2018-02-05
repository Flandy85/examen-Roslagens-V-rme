<?php 
/* 
* Template Name: About us
*/ 
?>

<?php get_header(); ?>
<main class="main-aboutus-container">
<?php
if(have_posts()) { 
	while(have_posts()) {
		
		the_post();
		?>
		<!-- This page is constructed with flexbox -->
		<div class="main-aboutus">
			<div class="aboutus-box-title">	
				<div class="info-aboutus">
					<h3><?php echo get_field('info-box-title'); ?></h3>
					<p><?php echo get_field('info-box-text'); ?></p>
				</div><!-- .info-aboutus -->
				<div class="info-aboutus-img-container">
					<img src="<?php the_field('company-picture'); ?>" alt="Bild av företaget Roslagens Värme & Fastighetsteknik" class="company-pic">
				</div>	
			</div><!-- aboutus-box-title -->
			<div class="aboutus-info-title">
					<h2 class="title-certifierad"><?php echo get_field('certified-title'); ?></h2>
			</div><!-- aboutus-info-title -->
			<div class="box-company1">
				<div class="container-box-aboutus-left">
					<div class="aboutus-content">
						<h2 class="title-box-aboutus"><?php echo get_field('lgt-title'); ?></h2>
						<div class="line-black"></div>
						<div class="aboutus-text">
							<p><?php echo get_field('lg-text'); ?></p>
						</div> <!--aboutus-text -->
						<div class="imgbox-aboutus">
							<img class="aboutus-img" src="<?php the_field('lg-logo'); ?>">
						</div><!-- imgbox-aboutus -->
					</div><!-- aboutus-content -->
				</div><!-- container-box-aboutus-left -->
				<div class="layoutbox"></div>
			</div><!-- box-company1 -->
			<div class="box-company2">
				<div class="layoutbox"></div>
				<div class="container-box-aboutus-right">
					<div class="aboutus-content">
			  			<h2 class="title-box-aboutus"><?php echo get_field('panasonic-title'); ?></h2>
						<div class="line-white"></div>
						<div class="aboutus-text">
							<p><?php echo get_field('panasonic-text'); ?></p>
						</div><!--aboutus-text -->
						<div class="imgbox-aboutus">
							<img class="aboutus-img" src="<?php the_field('panasonic-logo'); ?>">	
						</div><!-- imgbox-aboutus -->
					</div><!-- aboutus-content -->
				</div><!-- container-box-aboutus-right -->
			</div><!-- box-company2 -->
			<div class="box-company1">
				<div class="container-box-aboutus-left">
					<div class="aboutus-content">
						<h2 class="title-box-aboutus"><?php echo get_field('incert-title'); ?></h2>
						<div class="line-black"></div>
						<div class="aboutus-text">
							<p><?php echo get_field('incert-text'); ?></p>
						</div><!--aboutus-text -->
						<div class="imgbox-aboutus">
							<img class="aboutus-img-incert" src="<?php the_field('incert-logo'); ?>">
						</div><!-- . -->
					</div><!-- aboutus-content -->
				</div><!-- container-box-aboutus-left -->
				<div class="layoutbox"></div>
				</div><!-- box-company1 -->
		</div> <!-- main-aboutus -->
		<?php
		
	}
}
?>
</main>
<?php get_footer();
?>