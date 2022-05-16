

<?php get_header();?>


<div class="primary">
    
<!-- <h5>vengo de page</h5> -->
<?php while(have_posts() ): the_post(); ?>
    <div class="titulo__page">
            <?php the_title(); ?>
    </div>

    <div class="content__page">

            <?php the_content(); ?>

    </div>
            

<?php endwhile; ?>


</div>





<?php get_footer();?>