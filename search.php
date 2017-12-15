<?php get_header(); ?>
<div class="wrapper"><?php get_template_part( 'head'); ?>
  <div class="head_block_wrapp head_home">
    <div class="container">
      <div class="flex-wrapper wrapper__head_block">
        <div class="head_block"><h1><span class="label"> <?php printf( esc_html__( 'Результаты поиска для: %s', 'theme' ), '</span></br>' . get_search_query() . '' ); ?></div>
      </div>
    </div>
    <div class="container">
      <div class="events_block__wrapper"><?php if ( have_posts() ) : ?>
        <div class="flex-wrapper__container">
          <div class="flex-wrapper">
            <?php while ( have_posts() ) : the_post();
            	get_template_part( 'content' );
            endwhile; ?>
          </div>
          <div class="center__wrapper">
            <div class="navigation_buttons">
              <?php $args2 = array(
              	'show_all'     => false, 
              	'end_size'     => 1,    
              	'mid_size'     => 1,     
              	'prev_next'    => true,
              	'prev_text'    => __('«'),
              	'next_text'    => __('»'),
              	'add_args'     => false,
              	'add_fragment' => '',    
              	'screen_reader_text' => __( '' ),
              ); 
              the_posts_pagination( $args2 );?>	
            </div>
          </div>
        </div><?php else :
        	get_template_part( 'content', 'none' );
        endif; ?>
      </div>
    </div>
  </div>
</div><?php get_footer(); ?>