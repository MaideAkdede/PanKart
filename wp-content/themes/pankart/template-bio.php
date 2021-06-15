<div class="bio__wrapper">
    <h2>Membres de Panꓘart</h2>
    <div class="bio__container">
        <?php $p = new WP_Query([
            'post_type' => 'bio',
            'orderby' => 'date',
            'order' => 'desc'
        ]);
        if ($p->have_posts()) : while ($p->have_posts()) : $p->the_post(); ?>
            <div class="bio__content">
                <h3 class="bio__title"><?= get_the_title(); ?></h3>
                <img alt="<?= get_field('bio_img')['alt']; ?>"
                     width="<?= get_field('bio_img')['width']; ?>"
                     src="<?= get_field('bio_img')['sizes']['medium']; ?>">
                <a class="bio__link" href="<?php the_permalink(); ?>" title="Lire la bio de <?= get_the_title(); ?>"><span class="sro">Lire la bio de <?= get_the_title(); ?></span></a>
            </div>
        <?php endwhile; endif; ?>
    </div>
</div>