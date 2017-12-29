<?php get_header(); ?>
<div class="wrapper">
  <?php get_template_part( 'head'); ?><?php if (has_post_thumbnail() ) : ?>
  <div class="head_block_wrapp head_home pg-588" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
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
  </div>
  <div class="study_block center__wrapper">
    <div class="container">
      <h2>Какое обучение Вы найдете в Центре Профессионального Развития «Профи-Карьера»?</h2>
    </div>
    <div class="dark_blue_container">
      <div class="container">
        <div class="flex-wrapper">
          <div><img src="<?php echo get_template_directory_uri()?>/images/courses/course1.png" alt="Курсы повышения квалификации"/>
            <h5>Курсы повышения квалификации</h5>
          </div>
          <div><img src="<?php echo get_template_directory_uri()?>/images/courses/course2.png" alt="Семинары и Тренинги"/>
            <h5>Семинары и Тренинги</h5>
          </div>
          <div><img src="<?php echo get_template_directory_uri()?>/images/courses/course3.png" alt="Дистанционное обучение"/>
            <h5>Дистанционное обучение</h5>
          </div>
          <div><img src="<?php echo get_template_directory_uri()?>/images/courses/course4.png" alt="Профессиональная переподготовка"/>
            <h5>Профессиональная переподготовка</h5>
          </div>
          <div><img src="<?php echo get_template_directory_uri()?>/images/courses/course5.png" alt="Корпоративное обучение"/>
            <h5>Корпоративное обучение</h5>
          </div>
          <div><img src="<?php echo get_template_directory_uri()?>/images/courses/course6.png" alt="Бизнес-консалтинг"/>
            <h5>Бизнес-консалтинг</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="grey_section map">
    <div class="container">
      <div class="flex-wrapper flex-wrapper__end">
        <div class="flex-column">
          <h2>Наше расположение в историческом центре Москвы</h2>
          <h4 style="margin-bottom: 0;">г. Москва, ул. Садовническая дом 5</h4>
          <p style="margin-top: 0;">самый центр Москвы, 7 минут пешком от м.Новокузнецкая главные достопримечательности в пешей доступности</p>
          <div class="flex-wrapper">
            <div class="flex-column__map"><img src="<?php echo get_template_directory_uri()?>/images/location/location1.png" alt="&lt;strong&gt;1 минута&lt;/strong&gt; до Большого Каменного моста"/>
              <p><strong>1 минута</strong> до Большого Каменного моста</p>
            </div>
            <div class="flex-column__map"><img src="<?php echo get_template_directory_uri()?>/images/location/location2.png" alt="&lt;strong&gt;10 минут&lt;/strong&gt; пешком по прямой до Кремля"/>
              <p><strong>10 минут</strong> пешком по прямой до Кремля</p>
            </div>
            <div class="flex-column__map"><img src="<?php echo get_template_directory_uri()?>/images/location/location3.png" alt="&lt;strong&gt;5 минут&lt;/strong&gt; до Третьяковской галереи"/>
              <p><strong>5 минут</strong> до Третьяковской галереи</p>
            </div>
            <div class="flex-column__map"><img src="<?php echo get_template_directory_uri()?>/images/location/location4.png" alt="&lt;strong&gt;5 минут&lt;/strong&gt; до Болотной набережной и обводного канала Москвы"/>
              <p><strong>5 минут</strong> до Болотной набережной и обводного канала Москвы</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="lessons_block_wrapp grey_section" id="lessons">
    <div class="container">
      <div class="center__wrapper">
        <h2>Наш сервис = Ваши удобство и комфорт</h2>
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
  <div class="photo_slider">
    <div class="container center__wrapper">
      <h2>Фотографии наших корпоративных тренингов и семинаров</h2>
      <div class="slider_container">
        <div class="_containerflex-2 slider_upper_block slider_block" id="photo_slider">
          <div><a href="https://seminarna.ru/assets/pages/images/slider/1.JPG"><img src="https://seminarna.ru/assets/pages/images/slider/1.JPG"/></a></div>
          <div><a href="https://seminarna.ru/assets/pages/images/slider/2010-01-0618-23-01-2.JPG"><img src="https://seminarna.ru/assets/pages/images/slider/2010-01-0618-23-01-2.JPG"/></a></div>
          <div><a href="https://seminarna.ru/assets/pages/images/slider/1-2.JPG"><img src="https://seminarna.ru/assets/pages/images/slider/1-2.JPG"/></a></div>
          <div><a href="https://seminarna.ru/assets/pages/images/slider/IMG_2016-11-0822_49_56.jpg"><img src="https://seminarna.ru/assets/pages/images/slider/IMG_2016-11-0822_49_56.jpg"/></a></div>
          <div><a href="https://seminarna.ru/assets/pages/images/slider/P1030321.JPG"><img src="https://seminarna.ru/assets/pages/images/slider/P1030321.JPG"/></a></div>
          <div><a href="https://seminarna.ru/assets/pages/images/slider/D8C4AFFA-0FE6-45AF-80D1-8A0223CFC503-3.JPG"><img src="https://seminarna.ru/assets/pages/images/slider/D8C4AFFA-0FE6-45AF-80D1-8A0223CFC503-3.JPG"/></a></div>
          <div><a href="https://seminarna.ru/assets/pages/images/slider/IMG_2016-11-15142816.jpg"><img src="https://seminarna.ru/assets/pages/images/slider/IMG_2016-11-15142816.jpg"/></a></div>
          <div><a href="https://seminarna.ru/assets/pages/images/slider/4-2.JPG"><img src="https://seminarna.ru/assets/pages/images/slider/4-2.JPG"/></a></div>
          <div><a href="https://seminarna.ru/assets/pages/images/slider/2.JPG"><img src="https://seminarna.ru/assets/pages/images/slider/2.JPG"/></a></div>
          <div><a href="https://seminarna.ru/assets/pages/images/slider/3.jpg"><img src="https://seminarna.ru/assets/pages/images/slider/3.jpg"/></a></div>
          <div><a href="https://seminarna.ru/assets/pages/images/slider/4.JPG"><img src="https://seminarna.ru/assets/pages/images/slider/4.JPG"/></a></div>
          <div><a href="https://seminarna.ru/assets/pages/images/slider/IMG_2016-02-1114_20_19-2.jpg"><img src="https://seminarna.ru/assets/pages/images/slider/IMG_2016-02-1114_20_19-2.jpg"/></a></div>
          <div><a href="https://seminarna.ru/assets/pages/images/slider/IMG_2697.JPG"><img src="https://seminarna.ru/assets/pages/images/slider/IMG_2697.JPG"/></a></div>
          <div><a href="https://seminarna.ru/assets/pages/images/slider/BFBB311C-CBAF-43A8-9311-4DA149054396-2.JPG"><img src="https://seminarna.ru/assets/pages/images/slider/BFBB311C-CBAF-43A8-9311-4DA149054396-2.JPG"/></a></div>
          <div><a href="https://seminarna.ru/assets/pages/images/slider/2010-01-0618-20-5b7.jpg"><img src="https://seminarna.ru/assets/pages/images/slider/2010-01-0618-20-5b7.jpg"/></a></div>
          <div><a href="https://seminarna.ru/assets/pages/images/slider/IMG_2708.JPG"><img src="https://seminarna.ru/assets/pages/images/slider/IMG_2708.JPG"/></a></div>
          <div><a href="https://seminarna.ru/assets/pages/images/slider/IMG_0264-28-05-17-01-17.JPG"><img src="https://seminarna.ru/assets/pages/images/slider/IMG_0264-28-05-17-01-17.JPG"/></a></div>
          <div><a href="https://seminarna.ru/assets/pages/images/slider/IMG_2677.JPG"><img src="https://seminarna.ru/assets/pages/images/slider/IMG_2677.JPG"/></a></div>
          <div><a href="https://seminarna.ru/assets/pages/images/slider/IMG_0234-28-05-17-01-17.JPG"><img src="https://seminarna.ru/assets/pages/images/slider/IMG_0234-28-05-17-01-17.JPG"/></a></div>
          <div><a href="https://seminarna.ru/assets/pages/images/slider/IMG_0273-28-05-17-01-17.JPG"><img src="https://seminarna.ru/assets/pages/images/slider/IMG_0273-28-05-17-01-17.JPG"/></a></div>
          <div><a href="https://seminarna.ru/assets/pages/images/slider/IMG_0247-28-05-17-01-17.JPG"><img src="https://seminarna.ru/assets/pages/images/slider/IMG_0247-28-05-17-01-17.JPG"/></a></div>
        </div>
      </div>
    </div>
  </div>
  <div class="slider_block about_slider grey_section">
    <div class="container center__wrapper">
      <h2>Наша лицензия и выдаваемые документы об окончании обучения</h2><?php if ( function_exists('dynamic_sidebar') )		dynamic_sidebar('slider-about-us'); ?>
    </div>
  </div>
  <div class="sales dark_section">
    <div class="container">
      <div class="center__wrapper">
        <h2>Вы платите меньше даже в кризис</h2>
        <p>Довольные клиенты, которые развивают профессионализм и навыки своих сотрудников даже в кризис  – для нас это реальность. Почему?</p>
      </div>
      <div class="padding-block">
        <div class="flex-wrapper">
          <div class="flex-column__1-2 approaches-align-block">
            <div class="flex-wrapper flex-wrapper__start">
              <div>
                <h3><span class="big_span">3</span> тарифа</h3>
              </div>
              <div><span class="values">на обучение по ценам ниже конкурентов (мы проверяли!) </span><span class="values">возможность сотрудникам компаний от Владивостока до Калининграда принять участие в семинарах и курсах по своим материальным возможностям и пожеланиям.</span>
              </div>
            </div>
          </div>
          <div>
            <div class="flex-column__1-2 approaches-align-block mini_block">
              <div class="flex-wrapper flex-wrapper__start">
                <div>
                  <h3><span class="big_span">10%</span> скидка</h3>
                </div>
                <div><span class="values">как комплимент за лояльность! Для тех, кто учился у нас ранее</span>
                </div>
              </div>
            </div>
            <div class="flex-column__1-2 approaches-align-block mini_block">
              <div class="flex-wrapper flex-wrapper__start">
                <div>
                  <h3><img src="<?php echo get_template_directory_uri()?>/images/icon.png"></h3>
                </div>
                <div><span class="values">выгодное обучение группы сотрудников одной организации. При обучении 2-х сотрудников - 10% скидка, более 2х - скидка возрастает</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="video_block video_block-about grey_section">
    <div class="container">
      <div class="flex-wrapper">
        <div class="flex-column__frame">
          <h2>О нас говорят телеканалы</h2>
          <div class="iframe-wrapper">
            <iframe allowfullscreen="" frameborder="0" src="https://www.youtube.com/embed/BvSnlu05mPo"></iframe>
          </div>
        </div>
        <div class="flex-column__frame">
          <h2>Буклет-знакомство с Центром профессионального развития &quot;Профи-Карьера&quot;</h2>
          <div class="iframe-wrapper">
            <iframe allowfullscreen="" frameborder="0" src="//www.slideshare.net/slideshow/embed_code/key/yuFIfojm5JvruC"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div><?php endif; ?>
</div><?php get_footer(); ?>