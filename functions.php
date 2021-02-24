<?php

// Housekeeping

// Disable Auto<p>
// remove_filter( 'the_content', 'wpautop' );
// remove_filter( 'the_excerpt', 'wpautop' );

// Disable Autosave
function disable_autosave() {
  wp_deregister_script('autosave');
}
// add_action('wp_print_scripts', 'disable_autosave');

// Set JPEG Quality
function set_jpeg_quality() {
  return 70;
}
add_filter('jpeg_quality', 'set_jpeg_quality');

// Include Markdown Parser
include('includes/Parsedown.php');
include('includes/ParsedownExtra.php');
$Parsedown = new Parsedown();
$Extra = new ParsedownExtra();

function the_markdown_content() {
  global $Parsedown;
  global $Extra;
  $content = get_the_content();
  $a = explode("\n", $content);
  foreach($a as &$line) {
    if (trim($line)[0] == "#") {
      $link = h_to_link($line);
      $h = rtrim($line, " \r\n");
      $line = "$h {#$link}\r\n";
    }
  }
  $content = implode("\n", $a);
  $content = $Extra->text($content);
  echo $content;
}


function h_to_link($h) {
  $h = trim($h, "# \r\n");
  $h = strtolower($h);
  $h = preg_replace("/[^a-z]/", '', $h);
  $h = urlencode($h);
  return $h;
}

// clean image inserts
add_filter( 'get_image_tag_class', 'change_image_class' );
function change_image_class($class) {
  return "large";
}
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute($html) {
  return preg_replace( '/(width|height|alt)="\d*"\s/', "", $html );
}





// Regenerate WP Media from Command Line
// Run from within WP directory
/* wp media regenerate --yes */




?>
