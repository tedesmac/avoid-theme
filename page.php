<html lang="en">
  <?php get_template_part('templates/head'); ?>

  <body>
    <?php get_header(); ?>

    <main>
      <article>
        <?php
          the_post(); 
          the_content(); 
        ?>
      </article>
    </main>

    <?php get_footer(); ?>
  </body>
</html>
