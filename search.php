<?php get_header();?>



      <div class="resultados">
           <h1>Resultados de su busqueda</h1>
            <?php while(have_posts() ): the_post(); ?>
            
            <?php endwhile; ?>
                  <?php get_search_form();?>
                    <div class="enlace_busqueda">
                          <a href="<?php the_permalink();?>">
                        </div>
             
                  <?php the_title(); ?>
                 
                 </a>

                
            
            
      </div>

<?php get_footer();?>