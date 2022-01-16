<?php

// Housekeeping

// Disable Auto<p>
// remove_filter( 'the_content', 'wpautop' );
// remove_filter( 'the_excerpt', 'wpautop' );

// Excerpts for Pages
add_post_type_support( 'page', 'excerpt' );

// Feature Images for Posts
add_theme_support( 'post-thumbnails' );

// Disable Autosave
/*
function disable_autosave() {
  wp_deregister_script('autosave');
}
add_action('wp_print_scripts', 'disable_autosave');
*/

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
  $isCodeBlock = false;
  $content = get_the_content();
  $a = explode("\n", $content);
  foreach($a as &$line) {

    if (substr(trim($line), 0, 3)  == '```') {
      $isCodeBlock = !$isCodeBlock;
    }

    if (!$isCodeBlock) {
      if (trim($line)[0] == "#") {
        $link = h_to_link($line);
        $h = rtrim($line, " \r\n");
        $line = "$h {#$link}\r\n";
      }
    }

  }
  $content = implode("\n", $a);
  $content = $Extra->text($content);
  echo $content;
}



// header to link
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
  return "medium";
}
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute($html) {
  return preg_replace( '/(width|height|alt)="\d*"\s/', "", $html );
}





// Regenerate WP Media from Command Line
// Run from within WP directory
/* wp media regenerate --yes */


function prepare_files() {
  if (empty(get_field('week_id'))) return;

  if (get_field('week_id') == 'final') {
    $week = 'final';
  } else {
    $week = 'w' . get_field('week_id');
  }


  $dir = ABSPATH . 'files/' . $week . '/';
  if (is_dir($dir)) $files = scandir($dir);

  $html = "";

  if (empty($files) OR count($files)<=2) {
    // return "No files.";
  } else {
    $html .= "<aside class='files'>\n";
    $html .= "<ul>\n";
    foreach ($files as $file) {
      if (is_dir($dir.$file)) continue;
      if ($file[0] == '.') continue;
      $url = get_bloginfo('url') . '/files/' . $week . '/'. $file;
      $size = round(filesize($dir . $file) / 1024);
      $sizeString = $size . "K";
      if ($size < 2) {
        $size = filesize($dir . $file);
        $sizeString = $size . "B";
      }

      $html .= "<li><a href='$url'>$file</a> <span class='gray'>($sizeString)</span></li>\n";
    }
    $html .= "</ul>\n";
    $html .= "</aside>\n";
  }
  echo $html;
}

?>
