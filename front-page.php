<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <h1><?php the_title(); edit_post_link(' 𝓔𝓭𝓲𝓽'); ?></h1>

    <article class="home">

<?php the_markdown_content(); ?>
    </article>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
