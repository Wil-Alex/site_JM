<?php get_header();?>

<h2>de single</h2>


<div class="primary" id="primary">

    <?php while(have_posts() ): the_post(); ?>

             <a href="<?php the_permalink();?>"><?php the_title(); ?></a>

           
            <?php the_content(); ?>

            <?php comments_template(); ?>

    <?php endwhile; ?>


</div>




<?php get_footer();?>