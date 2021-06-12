<?php /* Template Name: Page Bio Pankart */ ?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <main class="bio-pankart">
        <h2><?php the_title(); ?></h2>
        <div class="content__wysiwyg"><?php the_content(); ?></div>
        <div class="agenda__wrapper">
            <h2>Biographies des membres pankart</h2>
            <?php $p = new WP_Query([
                'post_type' => 'bio',
                'orderby' => 'date',
                'order' => 'desc'
            ]);
            if ($p->have_posts()) : while ($p->have_posts()) : $p->the_post(); ?>
                <div class="container">
                    <?php the_title(); ?>
                    <div class="img__container">

                        <img
                                alt="<?= get_field('bio_img')['alt']; ?>"
                                width="<?= get_field('bio_img')['width']; ?>"
                                height="<?= get_field('bio_img')['height']; ?>"
                                srcset="
                         <?= get_field('bio_img')['sizes']['thumbnail']; ?> 150w,
                         <?= get_field('bio_img')['sizes']['medium']; ?> 300w,
                         <?= get_field('bio_img')['sizes']['medium_large']; ?> 640w,
                         <?= get_field('bio_img')['sizes']['large']; ?> 1020w"
                        >
                    </div>
                    <a href=" <?php the_permalink(); ?>">Lire</a>
                </div>
            <?php endwhile; endif; ?>
        </div>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>