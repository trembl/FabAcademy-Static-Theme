<?php

// Housekeeping

// Disable Auto<p>
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

// Disable Autosave
function disable_autosave() {
  wp_deregister_script('autosave');
}
add_action('wp_print_scripts', 'disable_autosave');

// Set JPEG Quality
function set_jpeg_quality() {
  return 70;
}
add_filter('jpeg_quality', 'set_jpeg_quality');

// Include Markdown Parser
include('includes/Parsedown.php');
$Parsedown = new Parsedown();

function the_markdown_content() {
  global $Parsedown;
  echo $Parsedown->text(get_the_content());
}


// Regenerate WP Media from Command Line
// Run from within WP directory
/* wp media regenerate --yes */




?>
