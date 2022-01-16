<?php

global $Parsedown;
global $Extra;

while( have_rows('sidebar') ) : the_row();
  $content = $Extra->text(get_sub_field('textfield'));
  echo $content;
endwhile;

$links = [];
while( have_rows('links') ) : the_row();
  $links[] = get_sub_field('name').'<a href="'.get_sub_field('link').'">↗︎</a>';
endwhile;

if( have_rows('links') ) :
  echo "<span class='lightgray'>";
  echo implode(', ', $links);
  echo "</span><br />";
endif;

/*
if (have_rows('eval_questions')):
  echo "<br /><div class='eval'>";
  echo "<em>Evaluation Helper</em>\n";
  while( have_rows('eval_questions') ) : the_row();
    echo '<a href="'.get_sub_field('eval_answer').'">'.get_sub_field('eval_question')."</a><br />\n";
  endwhile;
  echo "</div><br />";
endif;
*/

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
