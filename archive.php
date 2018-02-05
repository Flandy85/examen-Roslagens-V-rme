<?php get_header(); ?>
<main>
<section class="title-section">
    <p class="welcome-text">Välkommen Till</p>
    <h1>Arkivet</h1>
    <p class="sub-text">
      <?php
          if(is_category()){
            single_cat_title();
          } else if(is_author()){
            the_post();
            echo 'Arkiv efter författare: ' .get_the_author();
            rewind_posts();
          } else if(is_tag()){
            single_tag_title();
          } else if(is_day()){
            echo 'Arkiv för dag: ' .get_the_date();
          } else if(is_month()){
            echo 'Arkiv efter månad: ' .get_the_date('F Y');
          } else if(is_year()){
            echo 'Arkiv efter År: ' .get_the_date('Y');
          } else {
            echo 'Arkiv';
          }
        ?>
      </h1>
<?php if(have_posts()) : ?>
  <?php while(have_posts()) : the_post(); ?>
    <?php get_template_part('content', get_post_format()); ?>
  <?php endwhile; ?>
<?php else : ?> 
  <?php echo ('Förlåt, Men det finns inte'); ?>
<?php endif; ?>
  </p>
</section>


<?php while(have_posts()) : the_post(); ?>
  <article class="blog-post">
  <div class="">
    
    <div class="meta">
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?> <?php the_time('F j, Y g:i '); ?></p></a></h3>
      <ul>
        <?php if(has_post_thumbnail()) : ?>
      <div class="post-thumbnail">
        <?php the_post_thumbnail(); ?>
      </div>
    <?php endif; ?>
          
        </li>
      </ul>
    </div>

    
  </div>
</article>
</main>
  <?php endwhile; ?>
<?php get_footer(); ?>