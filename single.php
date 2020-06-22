<?php
  the_post();
?>

<!DOCTYPE html>

<html lang="en">
  <?php get_template_part('templates/head'); ?>

  <body>
    <?php get_header(); ?>

    <main>
      <article>
        <h1>
          <?php the_title(); ?>
        </h1>

        <?php the_content(); ?>
      </article>
    </main>

    <?php get_footer(); ?>
  </body>
</html>
