<?php /* Template Name: Page Bio Pankart */ ?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <main class="pankart">
        <h2><?php the_title(); ?></h2>
        <img
                class="pankart__img"
                alt="<?= get_field('pk_photo')['alt']; ?>"
                width="<?= get_field('pk_photo')['width']; ?>"
                sizes="80vw"
                srcset="
                         <?= get_field('pk_photo')['sizes']['thumbnail']; ?> 150w,
                         <?= get_field('pk_photo')['sizes']['medium']; ?> 300w,
                         <?= get_field('pk_photo')['sizes']['medium_large']; ?> 640w,
                         <?= get_field('pk_photo')['sizes']['large']; ?> 1020w"
        >
        <div class="content__wysiwyg"><?php the_content(); ?></div>
        <?php get_template_part('template-bio')?>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>