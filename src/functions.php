<?php



//add_theme_support('post-thumbnails');
set_post_thumbnail_size(800, 480);



add_image_size('vignette', 220, 180, true );
add_image_size('xxl', 2200, 1800, true);

function new_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'new_excerpt_length');

function enregistrer_menu() {

    register_nav_menus( array(
        'menu_principal' => 'Menu principal',
        'menu_footer' => 'Menu du pied de page',
        'menu_sociaux' => 'Menu réseaux sociaux',
    ) );
}

add_action('init', 'enregistrer_menu');

function widgets_initer() {
    register_sidebar(array(
        'name' => 'Ma nouvelle zone de widget',
        'id' => 'zone-widget',
        'before_widget' => '<div class= »zone-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="zone-widget-title">',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'widgets_initer');
