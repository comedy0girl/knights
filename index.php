

<?php get_header(); ?>

<div class="twelve columns">
	<div class="welcomeHero" >
		<div class="knights" style="background-image: url('<?php bloginfo('template_url') ?>/assets/images/header.jpg') ">
			 <div class="header-text">
			 	<h1><?php echo get_bloginfo( 'name' ); ?></h1>
			 	<h5><?php echo get_option('blogdescription'); ?></h5>
			 	<a class="classic-button" href="#amenities">Amenities</a>
			 	<a class="classic-button" href="/reservations">Reservations</a>
		
			</div>
		</div> 
	</div>
	<div class="twelve columns news" id="latest-news"><?php 
		if ( have_posts() ) : 
	        while ( have_posts() ) : 
	                the_post(); 
	                     the_content(); 
	         endwhile; else : ?>
	        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p><?php 
	    endif; ?>
	</div><?php 
		include (TEMPLATEPATH . '/includes/_reservations.php'); ?>
</div>


<?php get_footer(); ?> 
