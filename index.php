<?php get_header(); ?>
<div class="wrapper">
  <?php get_template_part( 'head'); ?>
  <?php
  	if ( have_posts() ) :
  		
  		while ( have_posts() ) : the_post();	
  			get_template_part( 'content', get_post_format() );
  		endwhile;
  		the_posts_navigation();
  	else :
  		get_template_part( 'content', 'none' );
  	endif; ?>
</div><?php get_footer(); ?>