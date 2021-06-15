<?php /* Template Name: Page News */ ?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <main class="new">
        <h2><?php the_title(); ?></h2>
        <div class="news__wrapper"><?php $p = new WP_Query([
                'post_type' => 'news',
                'orderby' => 'date',
                'order' => 'desc'
            ]);
            if ($p->have_posts()) : while ($p->have_posts()) : $p->the_post(); ?>
                <?php the_title(); ?>
                <a href=""></a>
            <?php endwhile; else: ?>
               Aucune News pour le moment.
            <?php endif; ?>
        </div>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>