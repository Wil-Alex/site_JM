<?php get_header();?>

<h2>de single</h2>


<div class="primary" id="primary">

    <?php while(have_posts() ): the_post(); ?>

             <a href="<?php the_permalink();?>"><?php the_title(); ?></a>

           
            <?php the_content(); ?>

           

    <?php endwhile; ?>

</div>


    <?php if (comments_open() || get_comments_number() ) :
    
            comments_template();
    endif; ?>

    
 




<?php get_footer();?>