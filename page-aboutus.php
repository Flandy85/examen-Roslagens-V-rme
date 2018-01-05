<?php 
/* 
* Template Name: About us
*/ 
?>

<?php get_header(); ?>
<main>
<?php
if(have_posts()) { 
	while(have_posts()) {
		
		the_post();
		?>
		<!-- This page is constructed with Bootstrap -->
		<div class="main-aboutus">
			<div class="aboutus-box-title">
				<div class="">
					<div class="info-aboutus">
						<h3><?php echo get_field('info-box-title'); ?></h3>
					</div><!-- .info-aboutus -->
				</div><!--  -->
			</div><!-- aboutus-box-title -->
			<div class="aboutus-info-title">
				<div class="">
					<div class="title-box">
						<h2 class="title-certifierad"><?php echo get_field('certified-title'); ?></h2>
					</div><!-- .title-box -->
				</div><!--  -->
			</div><!-- aboutus-info-title -->
			<div class="box-company1">
				<div class="container-box-aboutus-left">
					<div class="aboutus-content">
						<h2 class="title-box-aboutus"><?php echo get_field('incert-title'); ?></h2>
						<div class="line-black"></div>
						<div class="aboutus-text">
							<p><?php echo get_field('incert-text'); ?></p>
						</div>
						<div class="imgbox-aboutus">
							<img class="aboutus-img" src="<?php the_field('incert-logo'); ?>">
						</div><!-- . -->
					</div><!-- ."" -->
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
						</div>
						<div class="imgbox-aboutus">
							<img class="aboutus-img" src="<?php the_field('panasonic-logo'); ?>">	
						</div>
					</div><!-- ."" -->
				</div><!-- container-box-aboutus-right -->
			</div><!-- box-company2 -->
			<div class="box-company1">
				<div class="container-box-aboutus-left">
					<div class="aboutus-content">
						<h2 class="title-box-aboutus"><?php echo get_field('incert-title'); ?></h2>
						<div class="line-black"></div>
						<div class="aboutus-text">
							<p><?php echo get_field('incert-text'); ?></p>
						</div>
						<div class="imgbox-aboutus">
							<img class="aboutus-img" src="<?php the_field('incert-logo'); ?>">
						</div><!-- . -->
					</div><!-- ."" -->
				</div><!-- container-box-aboutus-left -->
				<div class="layoutbox"></div>
				</div><!-- box-company1 -->
		<?php
		
	}
}
?>
</main>
<?php get_footer();
?>