

<?php 

/*
Template Name: Plantillas categorias
*/



get_header();?>

<h1>vengo del index</h1>
<div class="primary" id="primary">

    <?php while(have_posts() ): the_post(); ?>

             <a href="<?php the_permalink();?>"><?php the_title(); ?></a>

             <a href="<?php the_permalink();?>"><?php the_excerpt(); ?></a>
            <!-- <?php the_content(); ?> -->

    <?php endwhile; ?>


</div>








<?php get_footer();?>