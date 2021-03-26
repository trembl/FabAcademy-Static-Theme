<br />
<?php

global $Parsedown;
global $Extra;

while( have_rows('sidebar') ) : the_row();
  $content = $Extra->text(get_sub_field('textfield'));
  echo $content;
endwhile;



$a = explode("\n", get_the_content());
$isCodeBlock = false;

foreach($a as $line) {
  if (substr(trim($line), 0, 3)  == '```') {
    $isCodeBlock = !$isCodeBlock;
  }

  if (!$isCodeBlock) {
    if (trim($line)[0] == "#") {
      $link = h_to_link($line);
      $title = (trim($line, "# \r\n"));
      $class = substr_count($line, '#');
      echo "      <a href='#$link' class='submenu$class'>" . $title . "</a><br />\n";
    }
  }

}

?>
