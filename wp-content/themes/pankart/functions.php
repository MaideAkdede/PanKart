<?php

/* * * Register navigation menus * * */
add_action('init', 'pk_custom_navigation_menus');
function pk_custom_navigation_menus()
{
    register_nav_menus([
        'main' => 'Navigation principale',
        'footer' => 'Lien du pied de page',
    ]);
}

/* * * Remove media buttons * * */
remove_action('media_buttons', 'media_buttons');

/* * * Register Multiple Custom Post Type * * */
add_action('init', 'pk_custom_post_type');

function pk_custom_post_type()
{
    register_post_type('agenda', [
        'label' => 'Agenda',
        'labels' => [
            'singular_name' => 'agenda',
            'add_new' => 'Ajouter une nouvelle date',
            'add_new_item' => 'Nouvelle date',
        ],
        'description' => 'Liste de toutes nos dates',
        'public' => true,
        'menu_position' => 3,
        'menu_icon' => 'dashicons-calendar-alt',
        'supports' => ['title'],
        'rewrite' => [
            'slug' => 'agenda'
        ]
    ]);
    register_post_type('bio', [
        'label' => 'Bio des membres',
        'labels' => [
            'singular_name' => 'bio',
            'add_new' => 'Ajouter une nouvelle bio',
            'add_new_item' => 'Nouvelle bio',
        ],
        'description' => 'Liste de toutes nos bio membres',
        'public' => true,
        'menu_position' => 3,
        'menu_icon' => 'dashicons-universal-access',
        'supports' => ['title', 'editor'],
        'rewrite' => [
            'slug' => 'bio'
        ]
    ]);
    register_post_type('coup', [
        'label' => 'Coups de coeur/gueule',
        'labels' => [
            'singular_name' => 'coup',
            'add_new' => 'Ajouter un nouveau coup',
            'add_new_item' => 'Nouveau coup',
        ],
        'description' => 'Liste de nos coups coeur/gueule',
        'public' => true,
        'menu_position' => 3,
        'menu_icon' => 'dashicons-welcome-comments',
        'supports' => ['title', 'excerpt'],
        'rewrite' => [
            'slug' => 'coups'
        ]
    ]);
    register_post_type('parole', [
        'label' => 'Paroles',
        'labels' => [
            'singular_name' => 'parole',
            'add_new' => 'Ajouter une nouvelle parole de chanson',
            'add_new_item' => 'Nouvelle parole de chanson',
        ],
        'description' => 'Liste de nos paroles de chanson',
        'public' => true,
        'menu_position' => 3,
        'menu_icon' => 'dashicons-format-audio',
        'supports' => ['title', 'editor'],
        'rewrite' => [
            'slug' => 'paroles'
        ]
    ]);
    register_post_type('presse', [
        'label' => 'Presse',
        'labels' => [
            'singular_name' => 'presse',
            'add_new' => 'Ajouter une nouvelle apparition dans la presse',
            'add_new_item' => 'Nouvelle apparition dans la presse ',
        ],
        'description' => 'Liste de nos apparitions dans la presse',
        'public' => true,
        'menu_position' => 3,
        'menu_icon' => 'dashicons-admin-links',
        'supports' => ['title'],
        'rewrite' => [
            'slug' => 'presse'
        ]
    ]);
    register_post_type('news', [
        'label' => 'News',
        'labels' => [
            'singular_name' => 'news',
            'add_new' => 'Ajouter une nouvelle news',
            'add_new_item' => 'Nouvelle news',
        ],
        'description' => 'Liste de nos news',
        'public' => true,
        'menu_position' => 3,
        'menu_icon' => 'dashicons-admin-site-alt3',
        'supports' => ['title', 'editor'],
        'rewrite' => [
            'slug' => 'news'
        ]
    ]);
    register_post_type('video', [
        'label' => 'Vidéos YT',
        'labels' => [
            'singular_name' => 'video',
            'add_new' => 'Ajouter une vidéo youtube',
            'add_new_item' => 'Nouvelle vidéo YouTube',
        ],
        'description' => 'Liste de nos vidéos youtubes',
        'public' => true,
        'menu_position' => 3,
        'menu_icon' => 'dashicons-video-alt3',
        'supports' => ['title'],
        'rewrite' => [
            'slug' => 'videos'
        ]
    ]);
}

/* * * Return a compiled assets URI * * */
function pk_assets($path)
{
    return rtrim(get_template_directory_uri(), '/') . '/public/' . ltrim($path, '/');
}

/* * * disable the wordpress gutenberg editor * * */
add_filter("use_block_editor_for_post_type", "disable_gutenberg_editor");
function disable_gutenberg_editor()
{
    return false;
}

/* * * Set Locale Lang * * */
setlocale(LC_TIME, "fr_BE");