<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/asset/icon/icono.png" sizes="32x32">
    <?php wp_head(); ?>
    <title><?php wp_title('');?><?php if(wp_title('', false)) {echo ' || ' ; }?><?php bloginfo('name'); ?></title>

    <meta name="description" content="<?php bloginfo('description'); ?>">
</head>

<body>
    <header>
        <div class="head">
            <div class="head__logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/asset/img/avatar.png" alt="Logo Vurokrazia" title="Twitter @vurokrazia"></a>
            </div>
            <nav class="head__menu">
                    <div class="head__menu--enlace">

                        <?php wp_nav_menu(array('theme_location' => 'menu_principal')); ?>
                    </div>
                


            </nav>
        </div>
    </header>
