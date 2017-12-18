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
        <img class="number-img" src="img/number2.png">
        <h2>El</h2>
        <p>Pumpen MÅSTE ha ett jordat uttag alternativt , dosa,elskåp,säkring tar vi kan ta ström från</p> 
        <p>Vi montera EJ utan detta.</p> 
    </div>
    <div class="box box3">
        <img class="number-img" src="img/number3.png">
        <h2>Utedel</h2>
        <p>På utedelen bildas det frost när kallare säsong kommer , då kommer utedelen att avfrosta sig</p> 
        <p>själv och släppa ut vattnet som bildas, kan inte vattnet få rinna rakt ut på marken</p> 
        <p>måste ett kondensvatten tråg med värmekabel monteras så man kan leda bort vattnet</p> 
    </div>
   
    <div class="box box4">
        <img class="installation-img" src="<?php the_field('insta-picture1'); ?>">
    </div>
    <div class="box box5">
        <img class="installation-img" src="img/brev4.png">
    </div>
 
</div>
		<?php
		
	}
}
?>
</main>
<?php get_footer();
?>