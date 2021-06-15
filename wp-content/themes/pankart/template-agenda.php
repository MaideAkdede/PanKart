<div class="agenda__wrapper">
    <table class="table">
        <thead>
        <tr>
            <th>Date</th>
            <th>Titre</th>
            <th>Lieu</th>
            <th>Réserver</th>
        </tr>
        </thead>
        <tbody>
        <?php $p = new WP_Query([
            'post_type' => 'agenda',
            'posts_per_page' => '5',
            'orderby' => 'date',
            'order' => 'desc'
        ]);
        if ($p->have_posts()) : while ($p->have_posts()) : $p->the_post(); ?>
            <tr>
                <td class="date" data-label="Date"> <?= get_field('date'); ?></td>
                <td class="title" data-label="Titre"> <?= get_the_title(); ?></td>
                <td class="country" data-label="Lieu"><?= get_field('city'); ?> (<?= get_field('country'); ?>)</td>
                <td class="address"><a href="../contact" class="cta"
                                       title="Nous contacter pour réserver">Réserver</a></td>
            </tr>
        <?php endwhile; endif; ?>
        </tbody>
    </table>
</div>