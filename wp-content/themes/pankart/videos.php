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
        <?php
        $query_images_args = array(
            'post_type'      => 'attachment',
            'post_mime_type' => 'image',
            'post_status'    => 'inherit',
            'posts_per_page' => - 1,
        );

        $query_images = new WP_Query( $query_images_args );

        $images = array();
        foreach ( $query_images->posts as $image ) {
            $images[] = wp_get_attachment_url( $image->ID );
        }
        var_dump($images);
        ?>

    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>