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
    </div>
    <div class="box box2">
        <img class="number-img" src="<?php the_field('number2'); ?>">
        <h2><?php echo get_field('placement-title-two'); ?></h2>
        <p><?php echo get_field('placement-text-two'); ?></p>
        <p>Pumpen MÅSTE ha ett jordat uttag alternativt , dosa,elskåp,säkring tar vi kan ta ström från</p> 
        <p>Vi montera EJ utan detta.</p> 
    </div>
    <div class="box box3">
        <img class="number-img" src="<?php the_field('number3'); ?>">   
        <h2><?php echo get_field('placement-title-three'); ?></h2>
        <p><?php echo get_field('placement-text-three'); ?></p>
        <p>På utedelen bildas det frost när kallare säsong kommer , då kommer utedelen att avfrosta sig</p> 
        <p>själv och släppa ut vattnet som bildas, kan inte vattnet få rinna rakt ut på marken</p> 
        <p>måste ett kondensvatten tråg med värmekabel monteras så man kan leda bort vattnet</p> 
    </div>
   
    <div class="box box4">
        <img class="installation-img" src="<?php the_field('insta-picture1'); ?>">
    </div>
    <div class="box box5">
    <img class="installation-img" src="<?php the_field('insta-picture2'); ?>">
    </div>
 
</div>
		<?php
		
	}
}
?>
</main>
<?php get_footer();
?>