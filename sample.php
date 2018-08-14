// Include the wp-load.php
require './wp-load.php';
// Get the recent posts
$getrecent_posts = wp_get_recent_posts(array(
'numberposts' => -1
));
foreach($getrecent_posts as $post) {
echo '<a href="', get_permalink($post['ID']), '">', $post['post_title'], '</a>';
}