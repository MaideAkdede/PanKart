<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <main class="bio">
        <h2><?php the_title(); ?></h2>
        <p>Rôle: <?= get_field('role'); ?>"</p>
        <div class="wysiwyg">
            <?php the_content(); ?>
        </div>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>