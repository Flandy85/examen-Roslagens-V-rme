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
		<div class="main-aboutus">
			<div class="row aboutus-box-title">
				<div class="col-xs-12">
					<div class="info-aboutus">
						<h3><?php echo get_field('info-box-title'); ?></h3>
					</div>
				</div>
			</div>
			<div class="row aboutus-info-title">
				<div class="col-xs-12">
					<div class="title-box">
						<h2 class="title-certifierad"><?php echo get_field('certified-title'); ?></h2>
					</div>
				</div>
			</div>
			<div class="row box-company1">
				<div class="col-md-offset-1 col-md-6">
					<div class="">
						<h2 class="title-incert"><?php echo get_field('incert-title'); ?></h2>
						<div class="line-black"></div>
						<p><?php echo get_field('incert-text'); ?></p>
						<div class="col-md-4 col-md-offset-2 incert-imgbox">
							<img class="incert-img" src="<?php the_field('incert-logo'); ?>">
						</div>
					</div>
				</div>
			</div>
			<div class="row box-company2">
				<div class="col-md-offset-6 col-md-6">
					<div class="">
			  		<h2 class="title-incert"><?php echo get_field('panasonic-title'); ?></h2>
						<div class="line-white"></div>
						<p><?php echo get_field('panasonic-text'); ?></p>
						<img class="panasonic-img" src="<?php the_field('panasonic-logo'); ?>">	
					</div>
				</div>
			</div>
			<div class="row box-company3">
			<div class="col-md-offset-1 col-md-6">
				<div class="">
					<h2 class="title-incert"><?php echo get_field('incert-title'); ?></h2>
					<div class="line-black"></div>
					<p><?php echo get_field('incert-text'); ?></p>
					<div class="col-md-4 col-md-offset-2 incert-imgbox">
						<img class="incert-img" src="<?php the_field('incert-logo'); ?>">
					</div>
				</div>
			</div>
			</div>
		</div>









		<?php
		
	}
}
?>
</main>
<?php get_footer();
?>