<?php
if (!is_admin()) {
    function blog_styles() {
        wp_enqueue_style('style', get_template_directory_uri() . '/style.css', ['grid']);
        wp_enqueue_style('grid', get_template_directory_uri() . '/libs/css/grid.css');
    }
    add_action('wp_enqueue_scripts', 'blog_styles');
}

add_theme_support('post-thumbnails');