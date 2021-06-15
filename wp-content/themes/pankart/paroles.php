<?php /* Template Name: Page Paroles */ ?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <main class="paroles">
        <h2><?php the_title(); ?></h2>

        <div class="paroles__wrapper">
            <?php $p = new WP_Query([
                'post_type' => 'parole',
                'orderby' => 'title',
                'order' => 'asc'
            ]);
            if ($p->have_posts()) : while ($p->have_posts()) : $p->the_post(); ?>
                <div class="accordion">
                    <a href="#" class="accordion__title" title="Lire les paroles de <?= get_the_title(); ?>">
                        <?php the_title(); ?>
                        <img class="accordion__plus"
                             width="36"
                             src="<?php echo get_template_directory_uri() . '/resources/img/plus.png' ?>"
                             alt="Lire Plus">
                    </a>
                    <div class="accordion__content">
                        <?php $sound = get_field('music');
                        if(!empty($sound)):?>
                        <audio controls>
                            <source src="<?= $sound['url']; ?>" type="<?= $sound['mime_type']; ?>">
                            Votre navigateur ne prend pas en charge les fichiers audios.
                        </audio>
                        <?php endif;?>
                        <?php the_content(); ?>
                        <p class="parole-de">Paroles de : <span><?= get_field('song_writer'); ?></span></p>
                    </div>
                </div>
            <?php endwhile; else: ?>
                Aucunes paroles disponible.
            <?php endif; ?>
        </div>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>