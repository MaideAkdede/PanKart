<div class="videos__wrapper">
    <?php $p = new WP_Query([
        'post_type' => 'video',
        'posts_per_page' => 1,
        'orderby' => 'date',
        'order' => 'desc'
    ]);
    if ($p->have_posts()) : while ($p->have_posts()) : $p->the_post(); ?>
        <iframe width="560" height="315" class="videos__iframe"
                src="<?= get_field('video_url') ?>">
        </iframe>
    <?php endwhile; else: ?>
        Aucune vidéo pour le moment
    <?php endif; ?>
</div>