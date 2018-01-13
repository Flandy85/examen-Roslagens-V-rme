<?php 
/* 
* Template Name: Installation
*/ 
?>

<?php get_header(); ?>
<main>
<?php
if(have_posts()) { 
	while(have_posts()) {
		
		the_post();
		?>
		<div class="main-installation">
            <div class="box box1">
                <img class="number-img" src="<?php the_field('number1'); ?>">
                <h2><?php echo get_field('placement-title-one'); ?></h2>
                <p><?php echo get_field('placement-text-one'); ?></p>
            </div><!-- .box box1 -->
            <div class="box box-installation-pictures ">

                <!-- Customers hasn't made an desicion yet if they want this function, date: 10/1 2018. Leaving this until futher notice -->

                <!-- This is because if we want to open the image in a new window
                <a href="<?php //the_field('insta-picture1'); ?>" target="_blank">
                <img class="installation-img installation-img-one" src="<?php //the_field('insta-picture1'); ?>"></a> -->
                <div class="container-gridinstallation">
                    <img class="installation-img installation-img-one" src="<?php the_field('insta-picture1'); ?>">
                    <img class="installation-img installation-img-one" src="<?php the_field('insta-picture2'); ?>">
                </div><!-- .container-gridinstallation -->
                <div class="container-gridinstallation">
                    <img class="installation-img installation-img-one" src="<?php the_field('insta-picture3'); ?>">
                    <img class="installation-img installation-img-one" src="<?php the_field('insta-picture4'); ?>">
                 </div><!-- .container-gridinstallation -->
            </div><!-- .box box-installation-pictures -->
            <div class="box box2">
                <img class="number-img" src="<?php the_field('number2'); ?>">
                <h2><?php echo get_field('placement-title-two'); ?></h2>
                <p><?php echo get_field('placement-text-two'); ?></p>
            </div><!-- .box box2-->
            <div class="box box-installation-pictures ">
                <img class="installation-img installation-img-one" src="<?php the_field('insta-picture5'); ?>">
                <img class="installation-img installation-img-one" src="<?php the_field('insta-picture6'); ?>">
            </div><!-- .box box-installation-pictures -->
            <div class="box box3">
                <img class="number-img" src="<?php the_field('number3'); ?>">   
                <h2><?php echo get_field('placement-title-three'); ?></h2>
                <p><?php echo get_field('placement-text-three'); ?></p>
            </div><!-- .box box3 -->
            <div class="box box-installation-pictures ">
                <div class="container-gridinstallation">
                    <img class="installation-img installation-img-one" src="<?php the_field('insta-picture7'); ?>">
                    <img class="installation-img installation-img-one" src="<?php the_field('insta-picture8'); ?>">
                </div><!-- .container-gridinstallation -->
                <div class="container-gridinstallation">
                    <img class="installation-img installation-img-one" src="<?php the_field('insta-picture9'); ?>">
                    <img class="installation-img installation-img-one" src="<?php the_field('insta-picture10'); ?>">
                </div><!-- .container-gridinstallation -->  
            </div><!-- .box box-installation-pictures -->
        </div><!-- .main-installation -->
		<?php
		
	}
}
?>
</main>
<?php get_footer();?>