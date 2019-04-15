<?php
    /* Template Name: Single Page */
get_header(); ?>

<div class="twelve columns standard-content">
    <div class="nine columns content-inner">

        <div class="standard-inner">
             <?php if ( have_posts() ) : 
                while ( have_posts() ) : 
                        the_post(); 
                             the_content(); 
                 endwhile; else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
        </div>
       
    </div>  
    <div class="three columns content-sidebar">
        <?php dynamic_sidebar( 'sidebar-page' ); ?> 
    </div>
</div><?php 
        include (TEMPLATEPATH . '/includes/_reservations.php'); ?>

  <div class="page-banner-bottom"><?php global $post; ?>
    <?php
    $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
    ?>
    <div class="row twelve columns bannerImage" style="background: url(<?php echo $src[0]; ?> ); background-position:top center; height: 400px; -webkit-background-size: cover;
  -moz-background-size: cover; -o-background-size: cover; background-size: cover;"></div>
    
</div>  


<?php get_footer(); ?>