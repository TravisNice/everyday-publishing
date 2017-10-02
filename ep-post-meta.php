<?php
  echo '<div class="ep-post-meta">';
  echo '<small>';
  echo '<time itemprop="datePublished" content="'. get_the_time("Y-m-d") .'">';
  echo get_the_time("F jS, Y");
  echo '</time>';
  echo ' by <span itemprop="author">';
  echo the_author_posts_link();
  echo '</span>';
  echo '</small>';
  echo '</div>';
