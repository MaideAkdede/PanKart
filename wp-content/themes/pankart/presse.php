<?php /* Template Name: Page Presse */ ?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <main class="presse">
        <h2><?php the_title(); ?></h2>
        <div class="presse__wrapperr">
            <?php $p = new WP_Query([
                'post_type' => 'presse',
                'orderby' => 'date',
                'order' => 'desc'
            ]);
            if ($p->have_posts()) : while ($p->have_posts()) : $p->the_post(); ?>
                <div class="container">
                    <?php the_title(); ?>
                    <?php the_field('presse_name'); ?>
                    <a href="<?= get_field('presse_url'); ?>" title="Lire sur <?= get_field('presse_name'); ?>">Lire sur <?= get_field('presse_name'); ?></a>
                </div>
            <?php endwhile; endif; ?>
        </div>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>