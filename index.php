<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <?php wp_head();?>
  </head>

  <body>
    <nav></nav>

    <section class="header"></section>

    <main>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article>
          <a>
            <h1>
              <?php the_title(); ?>
            </h1>
          </a>

          <?php echo wp_trim_words( get_the_content(), 50 ); ?>

          <a 
            class="highlight"
            href="<?php the_permalink(); ?>"
            >
            Read More
          </a>

          <hr />

          <div class="extra">
            <?php get_the_date(); ?>
          </div>
        </article>
      <?php endwhile; endif; ?>
    </main>

    <?php wp_footer();?>
  </body>
</html>
