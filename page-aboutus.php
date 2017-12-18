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
<div class="info-box">
	<div class="infoo">
		<h3><?php echo get_field('info-box-title'); ?></h3>
	</div>
</div>
<div class="title-box">
	<h2 class="title-certifierad"><?php echo get_field('certified-title'); ?></h2>
</div>
<div class="row incert-box">
	<div class="col-md-4 col-md-offset-2 col-md-offset-2 col-xs-offset-2 ">
		<div class="main-company">
			<div class="box-incert">
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
<div class="row pro-partners">
  <div class="col-md-4 col-md-offset-8 col-md-offset-6 col-xs-offset-1">
  	<h2 class="title-incert"><?php echo get_field('panasonic-title'); ?></h2>
		<div class="line-white"></div>
		<p><?php echo get_field('panasonic-text'); ?></p>
		<img class="panasonic-img" src="<?php the_field('panasonic-logo'); ?>">
  </div>
</div>
		<?php
		
	}
}
?>
</main>
<?php get_footer();
?>