<?php 
/* 
Template Name: singel Posts
*/ 
?> <?php 
	get_header(); ?> <main class="main-blog-container"> <?php
	if(have_posts() ){
		while(have_posts()) {
			the_post(); 

		?> <div class="blog-content-singel"><div class="blog-info-singel"><!-- <div class="blog-img-container-singel">
					<img class="" src="<?php the_field('logo-blogg'); ?>">
				</div> --><div><h1><?php the_title(); ?></h1><p>Skriven Av : <?php the_author(); ?> <?php the_time('F j, Y g:i '); ?></p></div></div><div class=""><h3><?php the_content(); ?></h3></div><div class="blog-picture-singelpage"> <?php the_post_thumbnail('home-thumb');?> </div><button class="button-read" type="button"><?php echo "<a href=\"javascript:history.go(-1)\">Tillbaka</a>";?></button></div> <?php	 			
		}
	}
?> </main> <?php get_footer(); ?>