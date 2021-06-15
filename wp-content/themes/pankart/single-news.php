<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <main class="news-single">
        <h2 class="news-single__title"><?php the_title(); ?></h2>
        <div class="content__wysiwyg">
            <?php the_content(); ?>
            <a href="../" class="cta news__back" title="Voir toutes les news">Voir toutes les news</a>
        </div>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>