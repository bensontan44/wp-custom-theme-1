<?php get_header() ?>       

    <div class="container">

      <div class="row">

        <div class="col-sm-12">
            
                
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        
                    <h2><?php the_title() ?></h2>
                    <p> <?php the_content(); ?></p>
                             
                <?php endwhile; else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>
 
            
        </div> <!-- /.col-sm-12->

      </div><!-- /.row -->

    </div><!-- /.container -->

<?php get_footer() ?>