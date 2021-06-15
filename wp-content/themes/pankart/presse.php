<?php /* Template Name: Page Presse */ ?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <main class="presses">
        <h2><?php the_title(); ?></h2>
        <div class="presses__wrapper">
            <?php $p = new WP_Query([
                'post_type' => 'presse',
                'orderby' => 'date',
                'order' => 'desc'
            ]);
            if ($p->have_posts()) : while ($p->have_posts()) : $p->the_post(); ?>
                <div class="presse">
                    <h3 class="presse__title"><?php the_title(); ?></h3>
                    <?php if(get_field('presse_img')) :?>
                        <img alt="<?= get_field('presse_img')['alt']; ?>"
                             src="<?= get_field('presse_img')['sizes']['thumbnail']; ?>"
                        width="150">
                     <?php endif;?>
                    <p class="presse__name"> <?php the_field('presse_name'); ?></p>
                    <a href="<?= get_field('presse_url'); ?>"
                       class="presse__link"
                       title="Lire sur <?= get_field('presse_name'); ?>"><span class="presse__hidden">Lire cet article sur <?= get_field('presse_name'); ?></span><span class="sro">Lire sur <?= get_field('presse_name'); ?></span></a>
                </div>
            <?php endwhile; endif; ?>
        </div>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>