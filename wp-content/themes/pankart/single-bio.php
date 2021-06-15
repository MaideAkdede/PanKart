<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <main class="bio-member">
        <h2 class="bio-member__title"><?php the_title(); ?></h2>
        <p>Rôle: <span class="bio-member__role"><?= get_field('role'); ?></span></p>
        <div class="bio-member__wrapper">
            <div class="bio-member__img">
                <img
                        alt="<?= get_field('bio_img')['alt']; ?>"
                        width="<?= get_field('bio_img')['width']; ?>"
                        sizes="80vw"
                        srcset="
                         <?= get_field('bio_img')['sizes']['thumbnail']; ?> 150w,
                         <?= get_field('bio_img')['sizes']['medium']; ?> 300w,
                         <?= get_field('bio_img')['sizes']['medium_large']; ?> 640w,
                         <?= get_field('bio_img')['sizes']['large']; ?> 1020w"
                >
            </div>
            <div class="content__wysiwyg">
                <?php the_content(); ?>
            </div>
        </div>
        <?php get_template_part('template-bio');?>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>