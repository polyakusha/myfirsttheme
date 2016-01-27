<?php
if (!is_admin()) {
    function blog_styles() {
        wp_enqueue_style('style', get_template_directory_uri() . '/style.css', ['normalize', 'skeleton', 'menu']);
        wp_enqueue_style('normalize', get_template_directory_uri() . '/libs/css/normalize.css');
        wp_enqueue_style('skeleton', get_template_directory_uri() . '/libs/css/skeleton.css');
        wp_enqueue_style('menu', get_template_directory_uri() . '/libs/css/menu.css');
    }
    add_action('wp_enqueue_scripts', 'blog_styles');
}

add_theme_support('post-thumbnails');

register_nav_menus([
    'main_menu' => 'Main Menu',
]);