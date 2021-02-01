<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<h1><?php the_title(); ?></h1>

<?php

if (get_field('enable_markdown_filter')) {
  the_markdown_content();
} else {
  the_content();
}






?>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
