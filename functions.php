<?php
// Load Styles & Scripts
function theme_files()
{
  // CSS
  wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'theme_files');

?>
