

<?php get_header();?>


<div class="primary" id="primary">
    
<h5>vengo de page</h5>
<?php while(have_posts() ): the_post(); ?>

            <?php the_title(); ?>

            <?php the_content(); ?>

<?php endwhile; ?>


</div>





<?php get_footer();?>