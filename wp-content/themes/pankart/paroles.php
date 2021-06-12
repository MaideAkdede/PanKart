<?php /* Template Name: Page Paroles */ ?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <main class="paroles">
        <h2><?php the_title(); ?></h2>

        <div class="paroles__wrapper">
            <?php $p = new WP_Query([
                'post_type' => 'parole',
                'orderby' => 'date',
                'order' => 'desc'
            ]);
            if ($p->have_posts()) : while ($p->have_posts()) : $p->the_post(); ?>
                <div class="accordio__title">
                    <?php the_title(); ?>
                </div>
            <div class="accordion__content">
                <?php $sound = get_field('music');?>
                <audio controls>
                    <source src="<?= $sound['url'];?>" type="<?= $sound['mime_type'];?>">
                    Votre navigateur ne prend pas en charge les fichiers audios.
                </audio>
                <?php the_content(); ?>
                <p>Paroles de : <?= get_field('song_writer'); ?></p>
            </div>
            <?php endwhile; else: ?>
                Aucunes paroles disponible.
            <?php endif;?>
        </div>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>