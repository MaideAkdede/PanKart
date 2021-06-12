<?php /* Template Name: Page Vidéos */ ?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <main class="video">
        <h2><?php the_title(); ?></h2>
        <?php $p = new WP_Query([
                'post_type' => 'video',
                'orderby' => 'date',
                'order' => 'desc'
            ]);
            if ($p->have_posts()) : while ($p->have_posts()) : $p->the_post(); ?>
                <iframe width="560" height="315"
                        src="<?= get_field('video_url') ?>">
                </iframe>
            <?php endwhile; else: ?>
               Aucune vidéo pour le moment
            <?php endif; ?>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>