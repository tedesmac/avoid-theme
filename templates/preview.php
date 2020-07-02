<article class="preview">
  <a href="<?php the_permalink(); ?>">
    <h1>
      <?php the_title(); ?>
    </h1>
  </a>

  <p>
    <?php echo wp_trim_words(get_the_content(), 50); ?>

    <a
      class="highlight"
      href="<?php the_permalink(); ?>"
      >
      Read More
    </a>
  </p>

  <hr />

  <div class="extra">
    <?php echo get_the_date(); ?>
    <div>
      <?php the_category(', '); ?>
    </div>
    <?php
      $cn = get_comments_number();
      $cl = '<a href="';
      $cl .= get_comments_link();
      $cl .= '">' . $cn . ' Comments</a>';
      echo $cl;
    ?>
  </div>
</article>
