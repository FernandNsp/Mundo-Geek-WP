<?php get_header(); ?>      
   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
   
   <?php endwhile; else: ?>
      <section class="container">
         <p class="px-3 text-danger"><?php _e('Esta página não existe :/'); ?></p>
      </section>
   <?php endif; ?>
<?php get_footer(); ?>