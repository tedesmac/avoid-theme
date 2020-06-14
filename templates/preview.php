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