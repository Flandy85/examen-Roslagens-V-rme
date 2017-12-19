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
<div class="employees-grid center">
    <div class="grid-cell">
    	<div class="profile">
    		<img class="profile-pic profile-pic-odd" src="<?php the_field('employees-pic-one'); ?>">
    	</div>
    </div>
    <div class="grid-cell grid-cell-info">
    	<div class=""><h2><?php echo get_field('employees-name-one'); ?></h2></div>
    	<div class=""><h3><i class="fa fa-phone" aria-hidden="true"></i><?php echo get_field('employees-phone-one');?></h3></div>
    	<div class=""><h3><i class="fa fa-envelope-o" aria-hidden="true"></i><?php echo get_field('employees-mail-one');?></h3></div>
    </div>
    <div class="grid-cell">
    	<div class="profile">
		<img class="profile-pic profile-pic-even" src="<?php the_field('employees-pic-two'); ?>">
    	</div>
    </div>
    <div class="grid-cell grid-cell-info">
	<div class=""><h2><?php echo get_field('employees-name-two'); ?></h2></div>
	<div class=""><h3><i class="fa fa-phone" aria-hidden="true"></i><?php echo get_field('employees-phone-two');?></h3></div>
	<div class=""><h3><i class="fa fa-envelope-o" aria-hidden="true"></i><?php echo get_field('employees-mail-two');?></h3></div>
    </div>
</div>
 <div class="employees-grid center">
    <div class="grid-cell">
    	<div class="profile">
		<img class="profile-pic profile-pic-odd" src="<?php the_field('employees-pic-three'); ?>">
    	</div>
    </div>
    <div class="grid-cell grid-cell-info">
	<div class=""><h2><?php echo get_field('employees-name-three'); ?></h2></div>
	<div class=""><h3><i class="fa fa-phone" aria-hidden="true"></i><?php echo get_field('employees-phone-three');?></h3></div>
	<div class=""><h3><i class="fa fa-envelope-o" aria-hidden="true"></i><?php echo get_field('employees-mail-three');?></h3></div>
    </div>
    <div class="grid-cell">
    	<div class="profile">
		<img class="profile-pic profile-pic-even" src="<?php the_field('employees-pic-four'); ?>">
    	</div>
    </div>
    <div class="grid-cell grid-cell-info">
	<div class=""><h2><?php echo get_field('employees-name-four'); ?></h2></div>
	<div class=""><h3><i class="fa fa-phone" aria-hidden="true"></i><?php echo get_field('employees-phone-four');?></h3></div>
	<div class=""><h3><i class="fa fa-envelope-o" aria-hidden="true"></i><?php echo get_field('employees-mail-four');?></h3></div>
    </div>
</div> 
		<?php
		
	}
}
?>
</main>
<?php get_footer();
?>