<?php

// désactiver l'éditeur de contenu en bloc de wordpress aussi appelée "Gutenberg" pour revenir a une version plus ancienne mais qui nous convient mieux en tant que developer de theme :

// Disable Gutenberg on the back end.
add_filter('use_block_editor_for_post', '__return_false');

// Disable Gutenberg for widgets.
add_filter('use_widgets_block_editor', '__return_false');

// Disable front-end style injections
add_action('wp_enqueue_scripts', function () {
    // Remove CSS on the front end.
    wp_dequeue_style('wp-block-library');

    // Remove Gutenberg theme.
    wp_dequeue_style('wp-block-library-theme');

    // Remove inline global CSS on the front end.
    wp_dequeue_style('global-styles');
}, 20);

// Activer l’utilisation d’images de couvertures sur les post_types custom
add_theme_support( 'post-thumbnails', [ 'recipe' ] );

// Enregistrer de nouveau 'type de contenus' qui seront stockés dans la table 'wp_posts' avec un identifiant de type specifique dansl a colonne 'post_type'
register_post_type('recipe', [
    'label' => 'Recettes',
    'description' => 'Les recettes ramenés de nos périples',
    'public' => true,
    'menu_position' => 6,
    'menu_icon' => 'dashicons-carrot',
    'rewrite' => [
        'slug' => 'recettes',
    ],
    'supports' => ['title','editor','excerpt', 'thumbnail', 'custom-fields'],

]);

add_theme_support( 'post-thumbnails', [ 'trip' ] );

register_post_type( 'trip', [
    'label' => 'Trip',
    'description' => 'Nos différents voyages',
    'public' => true,
    'menu_position' => 7,
    'menu_icon' => 'dashicons-palmtree',
    'rewrite'=> [
        'slug' => 'trip',
    ],
    'supports' => ['title','editor','excerpt', 'thumbnail', 'custom-fields'],
]);