<?php get_header(); ?>
<div class="wrapper">
  <?php get_template_part( 'head'); ?><?php if (has_post_thumbnail() ) : ?>
  <div class="head_block_wrapp head_home" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
    <div class="container">
      <div class="flex-wrapper wrapper__head_block">
        <div class="head_block">
          <?php the_title( '<h1>', '</h1>' );
          the_content(); ?><?php while ( have_posts() ) : the_post(); ?>     <?php the_content(); ?><a class="button open_modal" data-href="#consult_modal">Получить консультацию</a><?php
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
  <div class="advantage dark_blue_container dark_section center__wrapper">
    <div class="container">
      <h2>Преимущества наших дистанционных курсов</h2>
      <div class="flex-wrapper">
        <div class="flex-column"><img src="https://seminarna.ru/assets/pages/images/advantage/student.png" alt="реализованы на электронной образовательной среде, которая интуитивно понятна любому пользователю компьютера"/>
          <p>реализованы на электронной образовательной среде, которая интуитивно понятна любому пользователю компьютера</p>
        </div>
        <div class="flex-column"><img src="https://seminarna.ru/assets/pages/images/advantage/ereader.png" alt="каждый наш курс четко структурирован и построен по тематическим модулям"/>
          <p>каждый наш курс четко структурирован и построен по тематическим модулям</p>
        </div>
        <div class="flex-column"><img src="https://seminarna.ru/assets/pages/images/advantage/notebook.png" alt="слушатели имеют возможность задавать эксперту вопросы по материалам занятий и ситуациям из своей практики"/>
          <p>слушатели имеют возможность задавать эксперту вопросы по материалам занятий и ситуациям из своей практики</p>
        </div>
        <div class="flex-column"><img src="https://seminarna.ru/assets/pages/images/advantage/laptop.png" alt="дистанционное обучение ориентировано на отработку навыков и практическую работу слушателя"/>
          <p>дистанционное обучение ориентировано на отработку навыков и практическую работу слушателя</p>
        </div>
        <div class="flex-column"><img src="https://seminarna.ru/assets/pages/images/advantage/download.png" alt="материалы библиотеки знаний доступны для скачивания"/>
          <p>материалы библиотеки знаний доступны для скачивания</p>
        </div>
        <div class="flex-column"><img src="https://seminarna.ru/assets/pages/images/advantage/graduate.png" alt="обучение возможно из любой точки мира и с любого устройства, где есть интернет"/>
          <p>обучение возможно из любой точки мира и с любого устройства, где есть интернет</p>
        </div>
      </div>
    </div>
  </div><?php $posts = get_field('лектора');
  if( $posts ): ?>
  <?php foreach( $posts as $post): ?>
  <?php setup_postdata($post); ?>
  <?php endforeach; ?>
   <?php wp_reset_postdata(); ?>
  <?php endif; ?>
  <div class="aboutUs_block_wrapp" id="about">
    <div class="container">
      <div class="flex-wrapper">
        <div class="flex-column__2-3"><?php if ( function_exists('dynamic_sidebar') )		dynamic_sidebar('about-dist-cource'); ?>
          <div class="flex-wrapper in__flex-wrap">
            <div class="flex-column__2-3">
              <h5>Каждый дистанционный курс центра профессионального развития «ПРОФИ-КАРЬЕРА» включает:</h5>
              <p><i class="icon-slider ico-left"></i>Блок теоретической части в виде слайдов</p>
              <p><i class="icon-customer-service ico-left"></i>Интерактивные диалоговые тренажеры для отработки практических навыков</p>
              <p><i class="icon-video-player ico-left"></i>Обучающие видеофрагменты с комментариями</p>
              <p><i class="icon-library ico-left"></i>Библиотеку знаний: нормативную базу по курсу обучения, шаблоны документов, методические пособия</p>
            </div>
            <div class="flex-column__1-3">
              <h5>Система контроля обучения включает:</h5>
              <p><i class="icon-test ico-left"></i>Тестирование</p>
              <p><i class="icon-clipboard ico-left"></i>Практические задания</p>
              <p><i class="icon-speech-bubble ico-left"></i>Чат с преподавателем</p>
              <p><i class="icon-chat ico-left"></i>Форумы для коммуникации с тренером</p>
            </div>
          </div>
        </div>
        <div class="aboutUs_block flex-column__1-3">
          <div class="slider_block about_slider"><?php if ( function_exists('dynamic_sidebar') )		dynamic_sidebar('slider-about-dist-cource'); ?>	</div>
        </div>
      </div>
    </div>
  </div>
  <div class="grey_section">
    <div class="container">
      <div class="center__wrapper">
        <h2>Наши дистанционные курсы</h2>
      </div>
      <div class="events_block__wrapper">
        <div class="flex-wrapper events_wrapper">
          <?php
          
          		$args = array(
          		'category__in' => 1,
          		'post_type' => array( 'cources' ),
          		'meta_query' => array(
          			'relation' => 'AND',
          			array(
          				'key' => 'формат_обучения',
          				'value' => 'Дистанционный курс'
          			),
          		)
          		);
          		query_posts( $args );
          		if ($posts) : ?>
          		 <?php while ( have_posts() ) : the_post();
          		 get_template_part( 'content' );
          		 endwhile; ?>
          			<?php else :
          				get_template_part( 'content', 'none' );
          		endif;
          wp_reset_query(); 
          ?>
        </div>
      </div>
    </div>
  </div>
</div><?php get_footer(); ?>