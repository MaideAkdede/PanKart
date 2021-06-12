<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <main class="content">
        <div class="wysiwyg">

            <?php the_title(); ?>
            <?php the_content(); ?>
        </div>
    </main>
<?php endwhile; else : ?>
    <?php get_template_part('template-404'); ?>
<?php endif; ?>
<?php get_footer(); ?>