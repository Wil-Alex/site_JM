<?php get_header();?>

<!-- <h2>de single</h2> -->


<div class="post">

        <?php the_title(); ?>

    <div class="post__content">
            <?php while(have_posts() ): the_post(); ?>


                
                    <?php the_content(); ?>

                

            <?php endwhile; ?>
    </div>
</div>


    <?php if (comments_open() || get_comments_number() ) :
    
            comments_template();
    endif; ?>

    
 




<?php get_footer();?>