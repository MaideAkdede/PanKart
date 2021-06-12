<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <main class="content">
        <h2><?php the_title(); ?></h2>
        <div class="content__wysiwyg"><?php the_content(); ?></div>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>