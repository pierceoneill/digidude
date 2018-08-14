<?php

    include('blog/wp-load.php'); // Blog path

    // Get the last 5 posts
    $recent_posts = wp_get_recent_posts(array(
      'numberposts' => 3,
      'post_type' => 'post',
      'post_status' => 'publish'
    ));

    // Display them as list
    echo '<ul>';
    foreach($recent_posts as $post) {
      echo '<li><a href="', get_permalink($post['ID']), '">', $post['post_title'], '</a></li>';
    }
    echo '</ul>';

?>