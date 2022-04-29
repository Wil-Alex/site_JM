<?php

    function alex_load_styles(){

        wp_register_style('theme_style', get_stylesheet_uri(), '0.0.1', 'all');
        wp_enqueue_style('theme_style');

    }
    add_action('wp_enqueue_scripts', 'alex_load_styles');

?>