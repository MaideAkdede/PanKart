<?php $p = new WP_Query([
    'post_type' => 'punchline',
    'posts_per_page' => 1,
    'orderby' => 'date',
    'order' => 'desc'
]);
if ($p->have_posts()) : while ($p->have_posts()) : $p->the_post(); ?>
<div class="punchline">
    <div class="punchline__msg"><?php the_title();?></div>
</div>
<?php endwhile; endif; ?>