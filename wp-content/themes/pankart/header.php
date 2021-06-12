<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if (is_front_page()){
            echo 'PanKart • ';
            echo bloginfo('description');
        } else {
            wp_title('PanKart • ');
        } ;?>
    </title>
    <!--ASSETS-->
    <link rel="stylesheet" href="<?= pk_assets('css/theme.css') ?>">
    <script src="<?= pk_assets('js/app.js') ?>"></script>
    <!--WORDPRESS-->
    <?php wp_head(); ?>
</head>
<body>
<header class="top">
    <h1 class="top__title sro"><?= is_front_page() ? 'Accueil' : trim(wp_title('Pankart •')); ?></h1>

    <nav class="header__menu menu">
        <h2 class="sro">Menu principal</h2>
            <?php wp_nav_menu(['theme_location' => 'main']); ?>
    </nav>


</header>