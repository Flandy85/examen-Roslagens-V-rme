<?php 
/* 
* Template Name: Employees 
*/ 
?>

<?php get_header(); ?>
<main class="main-employees">
<?php
if(have_posts()) { 
	while(have_posts()) {
		
		the_post();
		?>
        <div class="flexbox-container">
            <div class="employee-container">
                <div class="employee-img-container">
                    <img src="<?php the_field('employees-pic-one'); ?>" alt="Bild på en av företagets anställda">
                </div><!-- .employee-img-container -->
                <div class="employee-info-container">
                    <h2><?php echo get_field('employees-name-one'); ?></h2>
                    <h3><i class="fa fa-phone" aria-hidden="true"></i><?php echo get_field('employees-phone-one');?></h3>
                    <h3><i class="fa fa-envelope-o" aria-hidden="true"></i><?php echo get_field('employees-mail-one');?></h3>
                </div><!-- .employee-info-container -->
            </div><!-- .employee-container -->
            <div class="employee-container">
                <div class="employee-img-container">
                    <img src="<?php the_field('employees-pic-two'); ?>" class="pic-two" alt="Bild på en av företagets anställda">
                </div><!-- .employee-img-container -->
                <div class="employee-info-container">
                    <h2><?php echo get_field('employees-name-two'); ?></h2>
                    <h3><i class="fa fa-phone" aria-hidden="true"></i><?php echo get_field('employees-phone-two');?></h3>
                    <h3><i class="fa fa-envelope-o" aria-hidden="true"></i><?php echo get_field('employees-mail-two');?></h3>
                </div><!-- .employee-info-container -->
            </div><!-- .employee-container -->
            <div class="employee-container">
                <div class="employee-img-container">
                    <img src="<?php the_field('employees-pic-three'); ?>" alt="Bild på en av företagets anställda">
                </div><!-- .employee-img-container -->
                <div class="employee-info-container">
                    <h2><?php echo get_field('employees-name-three'); ?></h2>
                    <h3><i class="fa fa-phone" aria-hidden="true"></i><?php echo get_field('employees-phone-three');?></h3>
                    <h3><i class="fa fa-envelope-o" aria-hidden="true"></i><?php echo get_field('employees-mail-three');?></h3>
                </div><!-- .employee-info-container -->
            </div><!-- .employee-container -->
            <div class="employee-container">
                <div class="employee-img-container">
                    <img src="<?php the_field('employees-pic-four'); ?>" alt="Bild på en av företagets anställda">
                </div><!-- .employee-img-container -->
                <div class="employee-info-container">
                    <h2><?php echo get_field('employees-name-four'); ?></h2>
                    <h3><i class="fa fa-phone" aria-hidden="true"></i><?php echo get_field('employees-phone-four');?></h3>
                    <h3><i class="fa fa-envelope-o" aria-hidden="true"></i><?php echo get_field('employees-mail-four');?></h3>
                </div><!-- .employee-info-container -->
            </div><!-- .employee-container -->
        </div><!-- .flexbox-container --> 
		<?php
		
	}
}
?>
</main>
<?php get_footer();
?>