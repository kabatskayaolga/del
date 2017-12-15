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
  </div>
  <div class="presentation_block no-bottom">
    <div class="container">
      <div class="padding-block">
        <h2>Инструментарий системы дистанционного обучения </h2><img src="https://seminarna.ru/assets/pages/images/proficariera-distant.jpg" alt="Инструментарий системы дистанционного обучения "/>
      </div>
    </div>
  </div>
  <div class="lecturers_block_wrapp center__wrapper grey_section" id="lecturers">
    <div class="container">
      <h2>Тренеры и преподаватели</h2>
      <div class="flex-wrapper single-lecturers">
        <div class="lecturers_slider lecturers_slider_home slider_block lecturers_slider__small">
          <?php $posts = get_field('лектора');
          if( $posts ): ?>
          <?php foreach( $posts as $post): ?>
          <?php setup_postdata($post); ?>
          <div>
            <div class="image_wrapper"><img src="<?php the_post_thumbnail_url(); ?>"/></div>
            <div class="hidden_block"><span class="specialty"><?php the_field( "специализация" ) ?></span>
              <h3><?php the_title() ?></h3>
              <p><?php the_content(); ?></p><a class="button open_modal" data-href="#lector_modal">Задать вопрос лектору</a>
            </div>
          </div><?php endforeach; ?>
           <?php wp_reset_postdata(); ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="light_container blockquote_block padding-block">
        <blockquote>«Эффективность Центра «Профи-Карьера» заключается в оптимальном соотношении отработки практических навыков и подачи теоретического материала, и, конечно, в высоком профессионализме тренеров.»</blockquote><em>- Начальник управления по работе с персоналом ОАО «Уралсиб»</em>
      </div>
    </div>
  </div>
  <div class="presentation_block no-bottom">
    <div class="container">
      <div class="padding-block">
        <h2>Буклет-презентация дистанционного обучения центра «Профи-Карьера»</h2>
        <div class="iframe-wrapper">
          <iframe allowfullscreen="" frameborder="0" src="https://www.scribd.com/embeds/359208720/content?start_page=1&amp;view_mode=slideshow&amp;access_key=key-OoKAcDYsKmB6CqtGev7z&amp;show_recommendations=true"></iframe>
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