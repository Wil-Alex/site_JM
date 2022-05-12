<?php get_header();?>



    <section>
        <div class="banner">
            <div class="banner__mensaje">
                <p>Hello …! 👋 me llamo Jesús pero el mundo me conoce como @vurokrazia en este espacio te explicare las cosa complejas de la programación de manera fácil
                    <br><br>
                    <a href="#nuevo_tema">¿Qué quieres aprender hoy?</a>
                </p>
            </div>
            <div class="banner__img">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/asset/img/vuro_img.png" alt="Jesús Martínez" title="<?php bloginfo('name'); ?>">
            </div>

        </div>
    </section>

    <aside class="novedades">
        <div class="novedades__widget" id="nuevo_tema">
            <?php dynamic_sidebar('categorias'); ?>
        </div>
    </aside>


    <?php get_footer();?>