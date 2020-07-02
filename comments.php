
<?php

if (have_comments()) {
  if (is_singular() && (get_option('thread_comments') == 1)) {
    wp_enqueue_script(
      'comment-reply',
      'wp-includes/js/comment-reply',
      array(),
      false,
      true
    );
  }

  ?>
    <div class="comment-list" id="comments">
      <?php wp_list_comments(); ?>
    </div>
  <?php
}
