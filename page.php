<?php get_header(); ?>
<div class="wrapper">
  <?php get_template_part( 'head'); ?><?php if (has_post_thumbnail() ) : ?>
  <div class="head_block_wrapp head_home" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
    <div class="container">
      <div class="flex-wrapper wrapper__head_block">
        <div class="head_block">
          <?php the_title( '<h1>', '</h1>' );
          the_content(); ?><?php while ( have_posts() ) : the_post(); ?>     <?php the_content(); ?>
          <?php
          endwhile;
          wp_reset_query(); 
          ?>
        </div>
      </div>
    </div>
  </div><?php else : ?>
  <div class="head_block_wrapp head_home">
    <div class="container">
      <div class="flex-wrapper wrapper__head_block">
        <div class="head_block">
          <?php the_title( '<h1>', '</h1>' ); 
          the_content(); ?><?php while ( have_posts() ) : the_post(); ?>     <?php the_content(); ?>
          <?php
          endwhile;
          wp_reset_query(); 
          ?>
        </div>
      </div>
    </div>
  </div><?php endif; ?>
</div><?php get_footer(); ?>