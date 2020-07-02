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

        <hr />
      </article>

      <?php
        if (comments_open()) {
          comment_form();
          comments_template();
        }
      ?>
    </main>

    <?php get_footer(); ?>
  </body>
</html>
