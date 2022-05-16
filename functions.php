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

    add_image_size('destacada', 100, 100, true);


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




    function widgets_social(){
        register_sidebar(array(
            'name'          => __('Enlaces Sociales'),
            'id'            => 'social_link',
            'description'   => __('Adicionar nuevos temas'),
            'before_widget' => '<div id="%1$s" class="widget_social %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>'
        ));
    }

    add_action('widgets_init', 'widgets_social');




    /* Quitar barra administracion*/
    //add_filter('show_admin_bar', '__return_false');

    //show_admin_bar( true );

    add_filter( 'show_admin_bar' , 'barra_admin');
        function barra_admin() {
    return false;
    }






// Deshabilitar el manejo de widgets desde el editor de bloques de Gutenberg
//add_filter( 'gutenberg_use_widgets_block_editor', '__return_false', 100 );

// Deshabilitar el editor de bloques para el manejo de widgets
//add_filter( 'use_widgets_block_editor', '__return_false' );




//cambiar titulo para dejar comentario
add_filter('gettext', function( $tran, $txt, $dom ) {
    if ( 'Leave a Reply' == $txt ) return _e('Comenta esta publicación');
    return $tran;
  }, 10, 3 );


?>