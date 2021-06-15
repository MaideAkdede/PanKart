<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <main class="home">
        <div class="home__header">
            <img
                    class="home__img"
                    alt="<?= get_field('home_img')['alt']; ?>"
                    width="<?= get_field('home_img')['width']; ?>"
                    sizes="80vw"
                    srcset="
                         <?= get_field('home_img')['sizes']['thumbnail']; ?> 150w,
                         <?= get_field('home_img')['sizes']['medium']; ?> 300w,
                         <?= get_field('home_img')['sizes']['medium_large']; ?> 640w,
                         <?= get_field('home_img')['sizes']['large']; ?> 1020w"
            >
            <h2 class="home__title"><?php the_title() ?></h2>
        </div>
        <div class="content__wysiwyg"><?php the_content(); ?></div>
        <?php get_template_part('template-bio'); ?>
    </main>
<?php endwhile; else : ?>
    <div class="empty">
        <p class="empty__message">Oups, nous n‘avons rien à afficher.</p>
    </div>
<?php endif; ?>
<?php get_footer(); ?>