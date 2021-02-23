<p />
<?php

$a = explode("\n", get_the_content());
foreach($a as $line) {
  if (trim($line)[0] == "#") {
    $link = h_to_link($line);
    $title = (trim($line, "# \r\n"));
    $class = substr_count($line, '#');
    echo "      <a href='#$link' class='submenu$class'>" . $title . "</a><br />\n";
  }
}

?>
