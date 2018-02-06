<?php 
/* 
Template Name: Blog Posts
*/ 
?>

<?php get_header(); ?>
<main class="main-test">
	<div class="search-completedworks">
<?php get_search_form(); ?>
</div>
<?php $blog_query = new WP_query(array('category_name' => 'blog')); ?>
	
	<?php while($blog_query->have_posts()) : $blog_query->the_post(); ?>

	<div class="flex-container">
		<div class="blog-title">
			<div class="blog-img-container ">
				<img class="blog-img" src="<?php the_field('logo-blogg'); ?>">
			</div>
			<div>
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<p>Skriven Av : <?php the_author(); ?> <?php the_time('F j, Y g:i '); ?></p>
			</div>
		</div>
		<div class="author-content">
			<h3><div><?php the_excerpt(); ?></div></h3>
		</div>
		<div class="blog-picture">
			<?php the_post_thumbnail('home-thumb');?>
		</div>
		<div class="blog-button">
			<button class="button-read" type="button"><a href="<?php the_permalink(); ?>">Läs Mer</a></button>
		</div> 
	</div>	
<?php endwhile; ?>
<?php get_footer();?>
