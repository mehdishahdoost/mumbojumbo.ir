<?php
// Place this in your functions.php file
function return_num_comments() {

// Setup global variables
global $wpdb;
global $post;

// SQL query to fetch the number of comments based on the current posts ID from the comments tables. Don’t forget to fetch only the approved comments!
$comment_number = $wpdb->get_var("SELECT COUNT(*) FROM $wpdb->comments WHERE comment_post_ID='$post->ID' && comment_approved='1'");

// Return the variable
return $comment_number;

}
?>