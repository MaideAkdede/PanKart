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
            <h2 class="home__title sro"><?php the_title() ?></h2>
            <p class="header__sub">Nous sommes un groupe de <span class="header__sub-span">Rock Celtique</span></p>
            <p class="header__sub2">Engagé <span class="header__sub-span">&</span> Dénonciateur</p>
            <?php if (get_the_content()): ?>
                <div class="content__wysiwyg"><?php the_content(); ?></div>
            <?php endif; ?>
        </div>
        <?php get_template_part('template-punchline');?>
        <div class="home__agenda">
            <div class="home__agenda-header">
                <a href="./agenda"><h2>Agenda</h2></a>
                <a href="./agenda" class="cta">Voir toutes les dates</a>
            </div>
            <?php get_template_part('template-agenda'); ?>
        </div>
        <div class="home__video home__agenda">
            <div class="home__agenda-header">
                <a href="./videos"><h2>Vidéo</h2></a>
                <a href="./videos" class="cta">Voir toutes les vidéos</a>
            </div>
            <?php get_template_part('template-video'); ?>
        </div>
        <div class="home__video home__agenda">
            <div class="home__agenda-header">
                <a href="./coups"><h2>Le dernier coup ! </h2></a>
                <a href="./coups" class="cta">Voir tout</a>
            </div>
            <?php get_template_part('template-coup'); ?>
        </div>
        <?php get_template_part('template-bio'); ?>
    </main>
<?php endwhile; else : ?>
    <div class="empty">
        <p class="empty__message">Oups, nous n‘avons rien à afficher.</p>
    </div>
<?php endif; ?>
<?php get_footer(); ?>