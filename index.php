<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <h1><?php the_title(); edit_post_link('*'); ?></h1>

    <div class="submenu">
<?php get_sidebar(); ?>
    </div>

    <article>
<?php // the_markdown_content(); ?>
<?php the_content(); ?>
    </article>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
