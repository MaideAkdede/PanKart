<?php /* Template Name: Page Photos */ ?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="photo__big">
        <a href="" class="close" title="fermer l‘image">
            <img src="<?php echo get_template_directory_uri() . '/resources/img/plus.png' ?>"
                 alt="fermer" width="75">
        </a>
        <img class="img" src="" alt="" >
    </div>
    <main class="photo">
        <h2><?php the_title(); ?></h2>
        <?php if (!empty(get_the_content())): ?>
            <div class="content__wysiwyg">
                <?php the_content(); ?>
            </div>
        <?php endif; ?>
        <?php
        $query_images_args = array(
            'post_type' => 'attachment',
            'post_mime_type' => 'image',
            'post_status' => 'inherit',
            'posts_per_page' => -1,
        );
        $query_images = new WP_Query($query_images_args);
        $images = $query_images->posts;
        ?>
        <div class="photo__gallery">
            <?php   foreach ($images as $image):?>
            <div class="photo__div">
                <img
                        class="photo__img"
                     src="<?= wp_get_attachment_url($image->ID)?>"
                     srcset="<?= wp_get_attachment_image_srcset($image->ID)?>"
                     sizes="<?= wp_get_attachment_image_sizes($image->ID)?>"
                     width="300"
                     alt="<?= get_post_meta($image->ID, '_wp_attachment_image_alt', true); ?>">
                <a href="" title="Voir la photo en grand" class="photo__link"></a>
            </div>
            <?php endforeach;?>
        </div>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>