<?php get_header(); ?>
<div class="wrapper"><?php get_template_part( 'head'); ?>
<?php $url = 'url(' . get_the_post_thumbnail_url() . ')'; ?>
  <div class="head_block_wrapp head_home" style="background-image: <?php echo (has_post_thumbnail()) ?  $url : "" ?>;">
    <div class="container">
      <div class="head_block">
        <?php the_title( '<h1>', '</h1>' ); the_content(); ?>
        <?php while ( have_posts() ) : the_post(); ?> 
         <?php the_content(); ?>
        <?php
        endwhile;
        wp_reset_query(); 
        ?>
      </div>
      <div class="head-directions flex-wrapper__container center__wrapper">
        <h3>Выберите направление обучения:</h3>
        <div class="flex-wrapper"><a class="flex-column flex-column__1-4 head-directions__item" href="<?php echo get_category_link(4);?>"><i class="icon-folder icon_big"></i>
            <h4><?php echo get_cat_name(4); ?></h4>
            <p><?php echo category_description(4); ?></p>
            <div class="button">Выбрать курс</div></a><a class="flex-column flex-column__1-4 head-directions__item" href="<?php echo get_category_link(5);?>"><i class="icon-archive icon_big"></i>
            <h4><?php echo get_cat_name(5); ?></h4>
            <p><?php echo category_description(5); ?></p>
            <div class="button">Выбрать курс</div></a><a class="flex-column flex-column__1-4 head-directions__item" href="<?php echo get_category_link(6);?>"><i class="icon-student2 icon_big"></i>
            <h4><?php echo get_cat_name(6); ?></h4>
            <p><?php echo category_description(6); ?></p>
            <div class="button">Выбрать курс</div></a><a class="flex-column flex-column__1-4 head-directions__item" href="<?php echo get_category_link(7);?>"><i class="icon-communication icon_big"></i>
            <h4><?php echo get_cat_name(7); ?></h4>
            <p><?php echo category_description(7); ?></p>
            <div class="button">Выбрать курс</div></a>
        </div><a class="button" href="<?php echo get_category_link(1);?>">Ознакомиться со всеми курсами</a>
      </div>
    </div>
  </div>
  <div class="aboutUs_block_wrapp" id="about">
    <div class="container">
      <div class="flex-wrapper flex-wrapper__center">
        <div class="aboutUs_block flex-column__1-3"><?php if ( function_exists('dynamic_sidebar') )		dynamic_sidebar('about-us'); ?></div>
        <div class="flex-column__2-3">
          <div class="slider_block about_slider"><?php if ( function_exists('dynamic_sidebar') )		dynamic_sidebar('slider-about-us'); ?></div>
        </div>
      </div>
    </div>
  </div>
  <div class="specialOffer_block_wrapp grey_section center__wrapper">
    <div class="container">
      <h2>Получите спецпредложение по обучению Вашего персонала </h2>
      <h3>Заполните, пожалуйста, форму обратной связи и получите персональную скидку на любой курс обучения. </h3><?php $all_options = get_option('true_options'); ?>
      <form class="form_wrapper" id="spec">
        <div class="flex-wrapper flex-wrapper__center">
          <div class="flex-column">
            <input class="form__input" type="text" name="name" placeholder="Ваше имя" required="required"/>
          </div>
          <div class="flex-column">
            <input class="form__input" type="tel" name="phone" placeholder="Ваш телефон" required="required"/>
          </div>
          <div class="flex-column">
            <input class="form__input" type="email" name="email" placeholder="Ваш email" required="required"/>
          </div>
        </div><input type='hidden' name='mailtoAddr' value='<?php echo $all_options["mailto"]; ?>'>
<input type='hidden' name='title' value='Спецпредложение по обучению Вашего персонала [Главная страница]'>
        <input class="form__submit" type="submit" value="Отправить"/>
      </form>
    </div>
  </div>
  <div class="advantages_block_wrapp dark_section center__wrapper" id="advantages">
    <div class="container">
      <h2>Наши преимущества</h2>
      <div class="flex-wrapper">
        <div class="flex-column__1-5"><i class="icon-teacher icon_big"></i>
          <h4>Ваши преподаватели - лучшие эксперты страны в области управления документами, архивного и секретарского дела</h4>
        </div>
        <div class="flex-column__1-5"><i class="icon-moscow icon_big"></i>
          <h4>Ваше обучение проходит в самом центре Москвы, в престижном историческом здании рядом с Кремлем </h4>
        </div>
        <div class="flex-column__1-5"><i class="icon-conversation icon_big"></i>
          <h4>Мини-группы дают Вам возможность получить ответы на Ваши вопросы и обменяться опытом с коллегами по обучению </h4>
        </div>
        <div class="flex-column__1-5"><i class="icon-tea icon_big"></i>
          <h4>Вкусные обеды ,кофе-паузы и комфортную обстановку отмечают все наши клиенты </h4>
        </div>
        <div class="flex-column__1-5"><i class="icon-student icon_big"></i>
          <h4>Обучение можно пройти в любом удобном Вам формате: очно, дистанционно или индивидуально </h4>
        </div>
      </div>
    </div>
  </div>
  <div class="lecturers_block_wrapp center__wrapper" id="lecturers">
    <div class="container">
      <h2>Тренеры и преподаватели</h2>
      <div class="flex-wrapper single-lecturers">
        <div class="lecturers_slider lecturers_slider_home slider_block">
          <?php $args = array(
          	'numberposts' => -1,
          	'category'    => 8,
          	'post_type'   => 'any',
          	'suppress_filters' => true,
          );
          $posts = get_posts( $args );
          foreach($posts as $key=>$post){ setup_postdata($post); ?>
          <div>
            <div class="image_wrapper"><img src="<?php the_post_thumbnail_url(); ?>"/></div>
            <div class="hidden_block"><span class="specialty"><?php the_field( "специализация" ) ?></span>
              <h3><?php the_title() ?></h3>
              <p><?php the_content(); ?></p><a class="button open_modal" data-href="#lector_modal">Задать вопрос лектору</a>
            </div>
          </div><?php }
          wp_reset_postdata(); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="lessons_block_wrapp grey_section" id="lessons">
    <div class="container">
      <div class="center__wrapper">
        <h2>Где проходят занятия</h2>
      </div>
      <div class="flex-wrapper firs-flex">
        <div class="flex-column__1-4">
          <div class="flex-wrapper flex-content-column">
            <div>
              <div class="slider_block lessons_slider"><?php if ( function_exists('dynamic_sidebar') )	dynamic_sidebar('slider-beige-hall'); ?></div>
            </div>
            <div>
              <p><strong>Залы оснащены</strong> самым современным оборудованием для комфортного обучения. </p><p><strong>Мы предоставляем</strong> сытные кофе-паузы</p>
            </div>
          </div>
        </div>
        <div class="flex-column__1-4">
          <div class="flex-wrapper flex-content-column">
            <div>
              <div class="slider_block lessons_slider"><?php if ( function_exists('dynamic_sidebar') )	dynamic_sidebar('slider-black-hall'); ?></div>
            </div>
            <div>
              <p>В перерывах доступен <strong>вай-фай</strong> </p><p><strong>Оплата любым способом:</strong></p><ul><li>безналичный расчет для юр.лиц,</li><li>оплата через Интернет на счет юр.лица,</li>наличными на месте.</p>
            </div>
          </div>
        </div>
        <div class="flex-column__1-4">
          <div class="flex-wrapper flex-content-column">
            <div>
              <div class="slider_block lessons_slider"><?php if ( function_exists('dynamic_sidebar') )	dynamic_sidebar('slider-restaurant'); ?></div>
            </div>
            <div>
              <p><strong>Комплексные обеды в Балчуг-плаза</strong> (престижный офисный комплекс класса А+, где расположено российское отделение Google, Газпромбанк)</p>
            </div>
          </div>
        </div>
        <div class="flex-column__1-4">
          <div class="flex-wrapper flex-content-column">
            <div>
              <div class="slider_block lessons_slider"><?php if ( function_exists('dynamic_sidebar') )	dynamic_sidebar('slider-hotel'); ?></div>
            </div>
            <div>
              <p><strong>Гостиница расположена в том же здании, где проходит обучение </strong>(гости столицы имеют возможность остановиться в гостинице в нашем же здании, можем помочь с размещением и бронированием)</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="client_block_wrapp center__wrapper">
    <div class="container">
      <h2>Наши клиенты</h2>
      <div class="slider_block client_slider"><?php if ( function_exists('dynamic_sidebar') )		dynamic_sidebar('slider-clients'); ?></div>
    </div>
  </div>
  <div class="reviews_block_wrapp dark_section center__wrapper" id="reviews">
    <div class="container">
      <h2>Отзывы клиентов</h2>
      <div class="slider_block reviews_slider"><?php if ( function_exists('dynamic_sidebar') )		dynamic_sidebar('slider-reviews'); ?></div>
    </div>
  </div>
  <div class="partners_block_wrapp center__wrapper">
    <div class="container">
      <h2>Наши партнеры</h2>
      <div class="slider_block partners_slider"><?php if ( function_exists('dynamic_sidebar') )		dynamic_sidebar('slider-partners'); ?></div>
    </div>
  </div>
</div><?php get_footer(); ?>