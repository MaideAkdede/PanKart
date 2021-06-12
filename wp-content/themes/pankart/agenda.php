<?php /* Template Name: Page Agenda */ ?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <main class="agenda">
    <h2><?php the_title(); ?></h2>

    <div class="agenda__wrapper">
        <?php $p = new WP_Query([
            'post_type' => 'agenda',
            'orderby' => 'date',
            'order' => 'desc'
        ]);
        if ($p->have_posts()) : while ($p->have_posts()) : $p->the_post(); ?>
            <div class="container">
                <?php the_title(); ?>
                <?php the_field('date'); ?>
                <?php the_field('city'); ?>
                <?php the_field('country'); ?>
            </div>
        <?php endwhile; endif; ?>
    </div>

<?php endwhile; else: ?>
    <p class="empty">Aucune revue de presses n'a été ajouté</p>
<?php endif; ?>
    </main>
<?php get_footer(); ?>