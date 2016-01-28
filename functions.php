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

class Nav_Wrap extends Walker_Nav_Menu
{
    function start_lvl(&$output, $depth = 0, $args = array())
    {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<div class='sub-wrap'><ul class='sub-menu'>\n";
    }
    function end_lvl(&$output, $depth = 0, $args = array())
    {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul></div>\n";
    }
}