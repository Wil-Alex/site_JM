

<?php get_header();?>

<!-- <h1>vengo del category</h1> -->


<article class="categorias">

             <div class="titulo__categorias">
                     <?php the_category(); ?>
               </div>
               <div class="categorias__secciones">
                         
                 
                      

                         <?php if (have_posts() ): while(have_posts() ): the_post(); ?>

                         
                                   <div class="categorias__secciones--titulo">
                                       
                                       
                                        <a href="<?php the_permalink();?>">
                                                  
                                                  <?php the_post_thumbnail('destacada'); ?> 
                                                 
                                        
                                       </a>
                                        
                                        <a href="<?php the_permalink();?>">
                                                  
                                                 
                                                  <?php the_title(); ?>
                                        
                                        </a>
                                       
                                        
                                    </div>   
                                        <!-- <div> 
                                                  <?php the_excerpt(); ?> 
                                                  
                                                  <a href="<?php the_permalink();?>"> Leer más</a>
                                                  
                                        </div>  -->
                                       
                                             
                         

                         <!-- <?php the_content(); ?> -->


               
                            <?php endwhile; else: ?>

                              <div class="no_respuesta">
                              <h2><?php _e('No hay contenido disponible');?></h2>
                              <p><?php _e('Aún no se ha publicado nada en esta sección pero regresa pronto por aqui, mientras puedes seguir navegando');?> </p><br><br>
                              <a class="regresar" href="<?php echo esc_url(home_url('/')); ?>"> Ir al inicio </a>     
                             </div>
                              <?php endif;?>

                           


               </div>

               

                       
               <div class="boton">
                                   <?php if( get_next_posts_link() || get_previous_posts_link() ) { ?>
                                                                      
                                                            
                                        <div class="boton_navegacion"><?php previous_posts_link( __('Anterior') ); ?></div>
                                        <div class="boton_navegacion"><?php next_posts_link( __('Siguiente') ); ?></div>
                                                                                               
                                   <?php } ?>
                              </div>

</article>

<aside class="aside__category">


</aside>

<?php get_footer();?>