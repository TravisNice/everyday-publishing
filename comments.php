<?php
  $number_of_comments = get_comments_number();

  if ($number_of_comments == 1) {
      echo '<h3>One comment on "'. get_the_title() .'"</h3>';
  } else {
      echo '<h3>'. $number_of_comments .' comments on "'. get_the_title() .'"</h3>';
  }

  wp_list_comments();

  comment_form();
