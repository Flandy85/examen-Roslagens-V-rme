<?php 
/* 
* Template Name: Employees 
*/ 
?>

<?php get_header(); ?>
<main>
<?php
if(have_posts()) { 
	while(have_posts()) {
		
		the_post();
		?>
        <!-- This section are constructed with Bootstrap -->
        <div class="employees-grid center">
            <div class="grid-cell">
            	<div class="profile">
            		<img class="profile-pic profile-pic-odd" src="<?php the_field('employees-pic-one'); ?>">
            	</div><!-- .profile -->
            </div><!-- .grid-cell -->
            <div class="grid-cell grid-cell-info">
            	<div class="">
                    <h2><?php echo get_field('employees-name-one'); ?></h2>
                </div><!-- ."" -->
            	<div class="">
                    <h3><i class="fa fa-phone" aria-hidden="true"></i><?php echo get_field('employees-phone-one');?></h3>
                </div><!-- ."" -->
            	<div class="">
                    <h3><i class="fa fa-envelope-o" aria-hidden="true"></i><?php echo get_field('employees-mail-one');?></h3>
                </div><!-- ."" -->
            </div><!-- .grid-cell grid-cell-info -->
            <div class="grid-cell">
            	<div class="profile">
        		  <img class="profile-pic profile-pic-even" src="<?php the_field('employees-pic-two'); ?>">
            	</div><!-- .profile -->
            </div><!-- .grid-cell -->
            <div class="grid-cell grid-cell-info">
            	<div class="">
                    <h2><?php echo get_field('employees-name-two'); ?></h2>
                </div><!-- ."" -->
            	<div class="">
                    <h3><i class="fa fa-phone" aria-hidden="true"></i><?php echo get_field('employees-phone-two');?></h3>
                </div><!-- ."" -->
            	<div class="">
                    <h3><i class="fa fa-envelope-o" aria-hidden="true"></i><?php echo get_field('employees-mail-two');?></h3>
                </div><!-- ."" -->
            </div>
        </div><!-- .employees-grid center -->
        <div class="employees-grid center">
            <div class="grid-cell">
            	<div class="profile">
        		<img class="profile-pic profile-pic-odd" src="<?php the_field('employees-pic-three'); ?>">
            	</div>
            </div><!-- .grid-cell -->
            <div class="grid-cell grid-cell-info">
            	<div class="">
                    <h2><?php echo get_field('employees-name-three'); ?></h2>
                </div><!-- ."" -->
            	<div class="">
                    <h3><i class="fa fa-phone" aria-hidden="true"></i><?php echo get_field('employees-phone-three');?></h3>
                </div><!-- ."" -->
            	<div class="">
                    <h3><i class="fa fa-envelope-o" aria-hidden="true"></i><?php echo get_field('employees-mail-three');?></h3>
                </div><!-- ."" -->
            </div>
            <div class="grid-cell">
            	<div class="profile">
        		  <img class="profile-pic profile-pic-even" src="<?php the_field('employees-pic-four'); ?>">
            	</div><!-- .profile -->
            </div><!-- .grid-cell -->
            <div class="grid-cell grid-cell-info">
            	<div class="">
                    <h2><?php echo get_field('employees-name-four'); ?></h2>
                </div><!-- ."" -->
            	<div class="">
                    <h3><i class="fa fa-phone" aria-hidden="true"></i><?php echo get_field('employees-phone-four');?></h3>
                </div><!-- ."" -->
            	<div class="">
                    <h3><i class="fa fa-envelope-o" aria-hidden="true"></i><?php echo get_field('employees-mail-four');?></h3>
                </div><!-- ."" -->
            </div><!-- .grid-cell grid-cell-info -->
        </div><!-- .employees-grid center --> 
		<?php
		
	}
}
?>
</main>
<?php get_footer();
?>