<?php
  $home_link = get_bloginfo('wpurl');
  $name = get_bloginfo('name');
  $pages = get_pages();
  $size = count($pages);
?>

<nav>
  <div>
    <?php
      $link = '<a href="' . $home_link . '">';
      $link .= $name;
      $link .= '</a>';
      echo $link;
    ?>
  </div>

  <div>
    <?php
      $link = '<a href="' . $home_link . '">';
      $link .= 'Home';
      $link .= '</a>';
      if ($size > 0) {
        $link .= '<span>/</span>';
      }
      echo $link;
      
      for($i = 0; $i < $size; $i++) {
        $page = $pages[$i];
        $link = '<a href="' . get_page_link( $page->ID ) . '">';
        $link .= $page->post_title;
        $link .= '</a>';
        if ($i < $size - 1) {
          $link .= '<span>/</span>';
        }
        echo $link;
      }
    ?>
  </div>
</nav>