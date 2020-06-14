<!DOCTYPE html>

<html lang="en">
  <?php get_template_part('templates/head'); ?>

  <body>
    <?php get_header(); ?>

    <main>
      <?php 
        if ( have_posts() ) : while ( have_posts() ) : the_post();
          get_template_part('templates/preview');
        endwhile; endif; 
      ?>
    </main>

    <?php get_footer(); ?>
  </body>
</html>