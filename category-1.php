<?php get_header(); ?>
<div class="wrapper"><?php get_template_part( 'head'); ?>
  <div class="head_block_wrapp head_home">
    <div class="container">
      <div class="flex-wrapper wrapper__head_block">
        <div class="head_block">
          <h1><?php echo get_queried_object()->name; ?></h1>
          <p><?php the_archive_description(); ?></p>
          <div class="form_header">
            <h5>Заполните пожалуйста форму обратной связи и <br/><span class="akcent">мы подберем для Вас наиболее подходящее спецпредложение </span>по данному направлению!</h5>
          </div>
        </div><?php if( is_category('1') ) : ?>
        <div class="form-block"><?php $all_options = get_option('true_options'); ?>
          <form class="form_wrapper form_wrapper_column" id="spec">
            <h4>Получить спецпредложение</h4>
            <input class="form__input" type="text" name="name" placeholder="Ваше имя" required="required"/>
            <input class="form__input" type="tel" name="phone" placeholder="Ваш телефон" required="required"/>
            <input class="form__input" type="email" name="email" placeholder="Ваш email" required="required"/><input type='hidden' name='mailtoAddr' value='<?php echo $all_options["mailto"]; ?>'>
<input type='hidden' name='title' value='Спецпредложение по обучению [страница Курсы]'>
            <input class="form__submit" type="submit" value="Отправить"/>
          </form>
        </div><?php endif; ?>				
      </div>
    </div>
    <div class="container">
      <div class="events_block__wrapper">
        <div class="flex-wrapper__container">
          <form>
            <div class="flex-wrapper form_wrapper flex-wrapper__center center__wrapper form_wrapper__selects">
              <div>
                <div class="flex-wrapper">
                  <div class="flex-column"><?php wp_dropdown_categories('child_of=1&class=form__select&show_option_all=Тематика'); ?></div>
                  <div class="flex-column">
                    <?php $field_name = 'field_59f829c881c48';
                    $field = get_field_object($field_name);
                    if( $field )
                    {
                    	echo '<select name="' . $field['name'] . '" class="form__select" id="format"><option value="0" selected="selected">' . $field['label'] . '</option>';
                         foreach( $field['choices'] as $k => $v )
                         {
                           echo '<option value="' . $v . '">' . $v . '</option>';
                         }
                       echo '</select>';
                    } ?>
                  </div>
                  <div class="flex-column">
                    <?php $field_name = 'field_59f7216f26fc2';
                    $field = get_field_object($field_name);
                    if( $field )
                    {
                    	echo '<select name="' . $field['name'] . '" class="form__select" id="document"><option value="0" selected="selected">' . $field['label'] . '</option>';
                         foreach( $field['choices'] as $k => $v )
                         {
                           echo '<option value="' . $v . '">' . $v . '</option>';
                         }
                       echo '</select>';
                    } ?>
                  </div>
                </div>
              </div>
            </div><?php
            
            	$page = (get_query_var('paged')) ? get_query_var('paged') : 1;
            		$args = array(
            		'category__in' => 1,
            		'post_type' => array( 'cources' ),
            		'meta_query' => array(
            			'relation' => 'AND',
            		),
            		'paged' => $page,
            		'posts_per_page' => -1
            		);
            		query_posts( $args );?>
            <div class="flex-wrapper events_wrapper">
              		<?php
              		if ($posts) : ?>
              		 <?php while ( have_posts() ) : the_post();
              		 get_template_part( 'content' );
              		 endwhile; ?>
              		
              			<?php else :
              				get_template_part( 'content', 'none' );
              		endif;
              ?>
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
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script>var templateDir = "<?php bloginfo('template_url') ?>/archive_getter.php"</script><?php get_footer(); ?>