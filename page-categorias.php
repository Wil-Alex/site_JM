

<?php 

/*
Template Name: Plantillas categorias
*/



get_header();?>

<h1>vengo de plantilla</h1>
<div class="primary" id="primary">

    <?php while(have_posts() ): the_post(); ?>

            
             <?php the_content(); ?>

          
    <?php endwhile; ?>


</div>








<?php get_footer();?>