<?php /* Template Name: Page de contact */ ?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <main class="contact">
        <h2><?php the_title(); ?></h2>
        <div class="content__wysiwyg"><?php the_content(); ?></div>
        <div class="form">
            <?= do_shortcode('[contact-form-7 id="52" title="formualire de contact"]')?>
        </div>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
