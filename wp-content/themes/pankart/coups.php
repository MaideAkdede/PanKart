<?php /* Template Name: Page des coups de G et C */ ?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <main class="coups">
        <h2><?php the_title(); ?></h2>
        <div class="coups__list">
            <?php $p = new WP_Query([
                'post_type' => 'coup',
                'orderby' => 'date',
                'order' => 'desc'
            ]);
            if ($p->have_posts()) : while ($p->have_posts()) : $p->the_post(); ?>
                <div class="coup">
                    <h3 class="coup__title"><?php the_title(); ?></h3>
                    <p class="coup__msg"><?= get_the_excerpt(); ?></p>
                    <?php the_field('coups_img'); ?>
                    <p class="coup__date"><?= strftime('%A, %e %B %G', strtotime(get_the_date())); ?></p>
                    <img src="<?= get_template_directory_uri() . '/resources/img/'.get_field('coups_option').'.png' ?>"
                         alt="<?php the_field('coups_option'); ?>"
                         class="coup__option coup__<?=get_field('coups_option');?>"
                         width="60"
                    >
                </div>

            <?php endwhile; endif; ?>
        </div>

    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>