<?php get_header();?>

<h1>vengo de resultados</h1>



            <?php while(have_posts() ): the_post(); ?>
            

            <?php endwhile; ?>

            <a href="<?php the_permalink();?>">
             
                  <?php the_title(); ?>
                 
                 </a>

                 <?php get_search_form();?>

<?php get_footer();?>