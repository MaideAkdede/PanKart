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
    <link rel="icon" sizes="32x32"
          href="<?php echo get_template_directory_uri() . '/resources/favicon/pk-32.png' ?>">
    <link rel="shortcut icon" sizes="32x32"
          href="<?php echo get_template_directory_uri() . '/resources/favicon/pk-32.png' ?>">
    <link rel="apple-touch-icon" sizes="180x180"
          href="<?php echo get_template_directory_uri() . '/resources/favicon/pk-180.png' ?>">
    <link rel="apple-touch-icon-precomposed" sizes="180x180"
          href="<?php echo get_template_directory_uri() . '/resources/favicon/pk-180.png' ?>">
    <link rel="stylesheet" href="<?= pk_assets('css/theme.css') ?>">
    <script src="<?= pk_assets('js/app.js') ?>"></script>
    <!--WORDPRESS-->
    <?php wp_head(); ?>
</head>
<body>
<header class="header">
    <h1 class="sro"><?= is_front_page() ? 'Accueil' : trim(wp_title('Panꓘart •')); ?></h1>
    <nav class="nav">
        <a href="<?= site_url(); ?>" title="Retourner à l‘acceuil" class="nav__logo">
            <img src="<?php echo get_template_directory_uri() . '/resources/img/pankart_petit.png' ?>"
                 alt="Pankart" width="150">
        </a>
        <h2 class="sro">Menu principal</h2>
        <label for="toggleMenu" class="toggleMenu">
            <img src="<?php echo get_template_directory_uri() . '/resources/img/menuBurger.png' ?>"
                 alt="Menu"
                 width="45">
        </label>
        <input type="checkbox" id="toggleMenu" class="sro">
        <div class="control-me">
            <?php wp_nav_menu(['theme_location' => 'main']); ?>
        </div>
    </nav>
    <a href="#" title="Remonter en haut de la page"
    class="up__link">
        <img src="<?php echo get_template_directory_uri() . '/resources/img/up.png' ?>"
             class="up__img"
             width="60"
             alt="Remonter"">
    </a>
</header>