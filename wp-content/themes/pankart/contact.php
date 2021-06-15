<?php /* Template Name: Page de contact */ ?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <main class="contact">
        <h2><?php the_title(); ?></h2>
        <?php if(!empty(get_the_content())): ?>
            <div class="wysiwyg"><?php the_content(); ?></div>
        <?php endif; ?>
        <div class="contact__wrapper">
            <div class="contact__form">
                <?= do_shortcode('[contact-form-7 id="52" title="formualire de contact"]') ?>
            </div>
            <div class="contact__info">
                <a href="<?= get_field('contact_ig') ?>" class="contact__icon contact__ig">
                    <img width="36"
                         src="<?php echo get_template_directory_uri() . '/resources/img/instagram.svg' ?>"
                         alt="Voir PanKart sur Instagram">
                    @<?= get_field('contact_ig-name') ?>
                </a>
                <a href="mailto:<?= get_field('contact_mail') ?>" class="contact__icon contact__mail">
                    <img width="36"
                         src="<?php echo get_template_directory_uri() . '/resources/img/courrier.svg' ?>"
                         alt="Écrire à Pankart par mail">
                    <?= get_field('contact_mail') ?>
                </a>
                <a href="<?= get_field('contact_fb') ?>" class="contact__icon contact__mail">
                    <img width="36"
                         src="<?php echo get_template_directory_uri() . '/resources/img/facebook.svg' ?>"
                         alt="Voir PanKart sur Facebook">
                    <?= get_field('contact_fb-name') ?>
                </a>
            </div>
        </div>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
