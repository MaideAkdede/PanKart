<?php /* Template Name: Page News */ ?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <main class="new">
        <h2><?php the_title(); ?></h2>
        <div class="news__wrapper"><?php $p = new WP_Query([
                'post_type' => 'news',
                'orderby' => 'date',
                'order' => 'desc'
            ]);
            if ($p->have_posts()) : while ($p->have_posts()) : $p->the_post(); ?>
               <div class="news">
                   <h3 class="news__title"><?php the_title(); ?></h3>
                   <div class="content__wysiwyg">
                       <?= wp_trim_words(get_the_content(), 30, "...");?>
                       <a class="news__link" href="<?php the_permalink(); ?>" title="Lire la news : <?= get_the_title(); ?>">
                           Lire plus <span class="sro">sur  <?= get_the_title(); ?></span>
                       </a>
                   </div>

               </div>
            <?php endwhile; else: ?>
               Aucune News pour le moment.
            <?php endif; ?>
        </div>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>