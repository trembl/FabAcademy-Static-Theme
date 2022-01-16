<!doctype html>
<html<?php if (!empty(get_query_var('rootClass'))) echo ' class="' . get_query_var('rootClass') . '"'; ?>>
<head>
  <title>FabAcademy 2021 - Georg Tremmel - FabLab Kamakura</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link rel="icon" href="<?php echo get_site_url(); ?>/favicon.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
  <link rel="stylesheet" href="https://use.typekit.net/mhw5cxw.css">
</head>
<!--

 __  __     __        __   __     ______     __     __
/\ \_\ \   /\ \      /\ "-.\ \   /\  ___\   /\ \   /\ \
\ \  __ \  \ \ \     \ \ \-.  \  \ \  __\   \ \ \  \ \ \____
 \ \_\ \_\  \ \_\     \ \_\\"\_\  \ \_____\  \ \_\  \ \_____\
  \/_/\/_/   \/_/      \/_/ \/_/   \/_____/   \/_/   \/_____/


-->
<?php

function is_active($name, $front=false) {
  if (is_page($name) OR (is_front_page() AND $front)) {
    echo " class=\"active\"";
  }
}


?>
<body>
  <div class="page">
    <header>
      <div class="overline">
        <a href="<?php echo get_site_url(); ?>/"<?php is_active('index', true) ?>>𝙸𝚗𝚍𝚎𝚡</a>
        <a href="<?php echo get_site_url(); ?>/about/"<?php is_active('about'); ?>>𝓐𝓫𝓸𝓾𝓽 𝓖𝓮𝓸𝓻𝓰 𝓣𝓻𝓮𝓶𝓶𝓮𝓵</a>
        <a href="<?php echo get_site_url(); ?>/final/"<?php is_active('final'); ?>>𝔽𝕚𝕟𝕒𝕝 ℙ𝕣𝕠𝕛ⅇ𝕔𝕥</a>
      </div>
      <div class="overline2">
        <a href="<?php echo get_site_url(); ?>/weekly/"<?php is_active('weekly'); ?>>Weekly</a><br />
        <a href="<?php echo get_site_url(); ?>/weekly/w1/"<?php is_active('w1'); ?>>1 - Personal Project, Git & Project Management</a><br />
        <a href="<?php echo get_site_url(); ?>/weekly/w2/"<?php is_active('w2'); ?>>2 - CAD <em>Computer Aided Design</em></a><br />
        <a href="<?php echo get_site_url(); ?>/weekly/w3/"<?php is_active('w3'); ?>>3 - Computer Controlled Cutting</a><br />
        <a href="<?php echo get_site_url(); ?>/weekly/w4/"<?php is_active('w4'); ?>>4 - Electronics Production - <em>"Shiny & Smooth!"</em></a><br />
        <a href="<?php echo get_site_url(); ?>/weekly/w5/"<?php is_active('w5'); ?>>5 - 3D</a><br />
        <a href="<?php echo get_site_url(); ?>/weekly/w6/"<?php is_active('w6'); ?>>6 - Electronics Design</a><br />
        <a href="<?php echo get_site_url(); ?>/weekly/w7/"<?php is_active('w7'); ?>>7 - ShopBot!</a><br />
        <a href="<?php echo get_site_url(); ?>/weekly/w8/"<?php is_active('w8'); ?>>8 - Embedded Programming – <em>"Cheap and Cheerful!""</em></a><br />
        <a href="<?php echo get_site_url(); ?>/weekly/w9-10/"<?php is_active('w9-10'); ?>>9 & 10 - Machine Week - <em>"Fruity Secret Messenger"</em></a><br />
        <a href="<?php echo get_site_url(); ?>/weekly/w11/"<?php is_active('w11'); ?>>11 - Input Devices - Thermistor(s) and Temperature</a><br />
        <a href="<?php echo get_site_url(); ?>/weekly/w12/"<?php is_active('w12'); ?>>12 - Molding & Casting - Camera Lens</a><br />
        <a href="<?php echo get_site_url(); ?>/weekly/w13/"<?php is_active('w13'); ?>>13 - Output Devices - OLED & Peltier</a><br />
        <a href="<?php echo get_site_url(); ?>/weekly/w14/"<?php is_active('w14'); ?>>14 - Networking & Communications - You can not <em>not</em> communicate!</a><br />
        <a href="<?php echo get_site_url(); ?>/weekly/w15/"<?php is_active('w15'); ?>>15 - Interface and Application Programming</a><br />
        <a href="<?php echo get_site_url(); ?>/weekly/w16/"<?php is_active('w16'); ?>>16 - <em>Wild</em> Wildcard Week - DIY Micro-fluidics</a><br />
        <a href="<?php echo get_site_url(); ?>/weekly/w17/"<?php is_active('w17'); ?>>17 - Applications & Implications - Propose a Final <em>Masterpiece</em></a><br />
        <a href="<?php echo get_site_url(); ?>/weekly/w18/"<?php is_active('w18'); ?>>18 - Invention, IP, and Income</a><br />
        <a href="<?php echo get_site_url(); ?>/weekly/w19/"<?php is_active('w19'); ?>>19 - Project Development</a>, <a href="<?php echo get_site_url(); ?>/final/"<?php is_active('final'); ?>>𝔽𝕚𝕟𝕒𝕝 ℙ𝕣𝕠𝕛ⅇ𝕔𝕥</a><br />
        <br />
        <a href="<?php echo get_site_url(); ?>/student-agreement/"<?php is_active('student-agreement'); ?>>Student Agreement</a>
        <a href="http://fabacademy.org/2021/">FabAcademy 2021</a>
        <a href="http://127.0.0.1/fab/fablab-kamakura/">FabLab Kamakura</a></a>
      </div>
    </header>
