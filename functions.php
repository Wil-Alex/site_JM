<?php
    function theme_scripts(){
        wp_enqueue_style('style', get_stylesheet_uri());
    }

    add_action('wp_enqueue_scripts', 'theme_scripts');


    /* MENU */
    register_nav_menus(array(
                'menu_principal' => __('Menu Principal', 'vuro')
    ));


    /* imagen destacada */
    add_theme_support('post-thumbnails');

    add_image_size('destacada', 200, 200, true);


    /*widgets */

    function theme_widgets(){
        register_sidebar(array(
            'name'          => __('Novedades y videos'),
            'id'            => 'categorias',
            'description'   => __('Adicionar nuevos temas'),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>'
        ));
    }

    add_action('widgets_init', 'theme_widgets');




    /* Quitar barra administracion*/
    add_filter('show_admin_bar', '__return_false');




/* // Deshabilitar el manejo de widgets desde el editor de bloques de Gutenberg
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false', 100 );

// Deshabilitar el editor de bloques para el manejo de widgets
add_filter( 'use_widgets_block_editor', '__return_false' );
 */


?>