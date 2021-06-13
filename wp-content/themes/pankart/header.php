<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if (is_front_page()) {
            echo 'Panꓘart • ';
            echo bloginfo('description');
        } else {
            wp_title('');
            echo ' • Panꓘart';
        }; ?>
    </title>
    <!--ASSETS-->
    <link rel="stylesheet" href="<?= pk_assets('css/theme.css') ?>">
    <script src="<?= pk_assets('js/app.js') ?>"></script>
    <!--WORDPRESS-->
    <?php wp_head(); ?>
</head>
<body>
<header class="">
    <h1 class="sro"><?= is_front_page() ? 'Accueil' : trim(wp_title('Panꓘart •')); ?></h1>
    <nav class="nav">
        <a href="<?= site_url()?>" title="Aller à la page d‘accueil" class="nav__logo">
            <?= wp_get_attachment_image( 103, true, '' );?>
        </a>
        <h2 class="sro">Menu principal</h2>
        <?php wp_nav_menu(['theme_location' => 'main']); ?>
    </nav>
</header>