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

//class Nav_Wrap extends Walker_Nav_Menu
//{
//    function start_lvl(&$output, $depth = 0, $args = array())
//    {
//        $indent = str_repeat("\t", $depth);
//        $output .= "\n$indent<div class='sub-wrap'><ul class='sub-menu'>\n";
//    }
//    function end_lvl(&$output, $depth = 0, $args = array())
//    {
//        $indent = str_repeat("\t", $depth);
//        $output .= "$indent</ul></div>\n";
//    }
//}

function pagination( $query=null ) {

    global $wp_query;
    $query = $query ? $query : $wp_query;
    $big = 999999999;

    $paginate = paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'type' => 'array',
            'total' => $query->max_num_pages,
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'prev_text' => __('&laquo;'),
            'next_text' => __('&raquo;'),
        )
    );

    if ($query->max_num_pages > 1) :
        ?>
        <ul class="pagination">
            <?php
            foreach ( $paginate as $page ) {
                echo '<li>' . $page . '</li>';
            }
            ?>
        </ul>
        <?php
    endif;
}