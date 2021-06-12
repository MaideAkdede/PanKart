<?php /* Template Name: Page des coups de G et C */ ?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <main class="coups">
        <h2><?php the_title(); ?></h2>
        <div class="agenda__list">
            <?php $p = new WP_Query([
                'post_type' => 'coup',
                'orderby' => 'date',
                'order' => 'desc'
            ]);
            if ($p->have_posts()) : while ($p->have_posts()) : $p->the_post(); ?>
                <?php the_title(); ?>
                <?php the_excerpt(); ?>
                <?php the_field('coups_option'); ?>
                <?php the_field('coups_img'); ?>
            <?php endwhile; endif; ?>
        </div>

    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>