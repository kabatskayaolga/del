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
  </div>
  <div class="approaches">
    <div class="container">
      <h2>Два «Кита», на которых строится наше корпоративное обучение</h2>
    </div>
    <div class="dark_blue_container">
      <div class="container">
        <div class="flex-wrapper">
          <div class="flex-column__1-2 approaches-align-block">
            <h3>Модульный подход</h3>
            <div><span>комплексные программы обучения</span><span>адаптация и составление любой программы под ваши цели и задачи</span><span>250 программ по типу &quot;конструктора&quot;</span>
            </div>
          </div>
          <div class="flex-column__1-2 approaches-align-block">
            <h3>Практический подход</h3>
            <div><span>предтренинговая диагностика и &quot;погружение&quot; в специфику компании-заказчика</span><span>технология &quot;обучение действием&quot;: отработка теории на упражнениях и деловых играх</span><span>разбор ваших рабочих ситуаций на практической части обучения</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="presentation_block grey_section">
    <div class="light_container">
      <div class="container">
        <h2>Наши успешные кейсы проведенного корпоративного обучения в презентации</h2>
        <div class="padding-block">
          <div class="flex-wrapper">
            <div class="iframe-wrapper">
              <iframe allowfullscreen="" frameborder="0" src="https://www.scribd.com/embeds/359311259/content?start_page=1&amp;view_mode=slideshow&amp;access_key=key-g9cCL1zZ2Wp3AcdTttva&amp;show_recommendations=true"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="standarts">
    <div class="container">
      <div class="flex-wrapper">
        <div class="flex-column"><img src="https://seminarna.ru/assets/pages/images/gerb.jpg"/></div>
        <div class="flex-column">
          <h2>Что вам дает адаптация наших программ под требования профессиональных стандартов РФ?</h2>
          <p>С 1 июля 2016 года в России начали действовать профессиональные стандарты. Для соответствия занимаемым должностям все сотрудники должны обладать определенными квалификацией, знаниями, умениями и навыками, которые закреплены в соттветствующих профстандартах.</p>
          <p><strong>Проходя обучение у нас, ваши сотрудники проходят обучение по программам, максимально адаптированным под требования профстандартов.</strong></p>
        </div>
      </div>
    </div>
  </div>
  <div class="photo_slider grey_section">
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
  <div class="lecturers_block_wrapp center__wrapper" id="lecturers">
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
  <div class="price_block grey_container grey_section">
    <div class="container">
      <div class="center__wrapper">
        <h2>О ценах на корпоративное обучение</h2>
      </div>
      <div class="flex-wrapper flex-wrapper-center">
        <div class="flex-column">
          <div class="pakage_block">
            <h3>Минимальный пакет включает</h3>
            <ul>
              <li>Предтренинговая встреча лично или в скайпе</li>
              <li>Составление и адаптация программы обучения</li>
              <li>Проведение тренинга на вашей или нашей территории</li>
              <li>Авторские раздаточные материалы</li>
              <li>Именные сертификаты</li>
              <li>Краткий постренинговый отчет</li>
              <li>Анкетирование участников обучения</li>
            </ul>
          </div>
          <div class="price_coast_block">
            <h3>Тарифы на корпоративное обучение</h3>
            <p>Группа 3-5 человек <strong>от 30 000 рублей</strong></p>
            <p>Группа 6-10 человек <strong>от 45 000 рублей</strong></p>
            <p>Группа 11 и больше человек <strong>от 75 000 рублей</strong></p>
          </div>
        </div>
        <div class="flex-column">
          <form class="form_wrapper" id="spec">
            <h3>Заполните форму ниже и получите коммерческое предложение по обучению Ваших сотрудников! </h3>
            <h4>Программа тренинга </h4>
            <div class="flex-wrapper flex-wrapper-left">
              <div>
                <input class="form__input_radio" type="radio" name="program" id="radio1" value="Программа тренинга : типовая" checked="checked"/>
                <label class="form__label_radio" for="radio1">типовая</label>
              </div>
              <div>
                <input class="form__input_radio" type="radio" name="program" id="radio2" value="Программа тренинга : разработанная под ваши требования"/>
                <label class="form__label_radio" for="radio2">разработанная под ваши требования</label>
              </div>
            </div>
            <h4>Количества участников от вашей компании
              <input class="form__input" type="number"/>чел
            </h4>
            <h4>Место проведения тренинга</h4>
            <div class="flex-wrapper flex-wrapper-left">
              <div>
                <input class="form__input_radio" type="radio" name="loc" id="radio3" value="Место проведения тренинга: выездной тренинг на вашей территории" checked="checked"/>
                <label class="form__label_radio" for="radio3">выездной тренинг на вашей территории</label>
              </div>
              <div>
                <input class="form__input_radio" type="radio" name="loc" id="radio4" value="Место проведения тренинга: наши залы в центре Москвы"/>
                <label class="form__label_radio" for="radio4">наши залы в центре Москвы</label>
              </div>
            </div>
            <h3></h3>
            <h4>Предтренинговая диагностика</h4>
            <input class="form__input_checkbox" type="checkbox" value="Предтренинговая диагностика: онлайн-тестирование/анкетирование" id="checkbox5"/>
            <label class="form__label_checkbox" for="checkbox5">онлайн-тестирование/анкетирование</label>
            <input class="form__input_checkbox" type="checkbox" value="Предтренинговая диагностика: «тайный покупатель»" id="checkbox6"/>
            <label class="form__label_checkbox" for="checkbox6">«тайный покупатель»</label>
            <input class="form__input_checkbox" type="checkbox" value="Предтренинговая диагностика: оценка персонала" id="checkbox7"/>
            <label class="form__label_checkbox" for="checkbox7">оценка персонала</label>
            <input class="form__input_checkbox" type="checkbox" value="Предтренинговая диагностика: Аудит эффективности подразделений компании" id="checkbox8"/>
            <label class="form__label_checkbox" for="checkbox8">Аудит эффективности подразделений компании</label>
            <input class="form__input_checkbox" type="checkbox" value="Предтренинговая диагностика: Посттренинговый отчет с рекомендациями" id="checkbox9"/>
            <label class="form__label_checkbox" for="checkbox9">Посттренинговый отчет с рекомендациями</label>
            <input class="form__input_checkbox" type="checkbox" value="Предтренинговая диагностика: Индивидуальные планы развития сотрудников" id="checkbox10"/>
            <label class="form__label_checkbox" for="checkbox10">Индивидуальные планы развития сотрудников</label>
            <input class="form__input_checkbox" type="checkbox" value="Предтренинговая диагностика: Разработка корпоративных регламентов и стандартов" id="checkbox11"/>
            <label class="form__label_checkbox" for="checkbox11">Разработка корпоративных регламентов и стандартов</label>
            <h4>Постренинговое сопровождение</h4>
            <input class="form__input_checkbox" type="checkbox" value="Постренинговое сопровождение: онлайн-тестирование по итогам обучения" id="checkbox12"/>
            <label class="form__label_checkbox" for="checkbox12">онлайн-тестирование по итогам обучения</label>
            <input class="form__input_checkbox" type="checkbox" value="Постренинговое сопровождение: обучающие рассылки" id="checkbox13"/>
            <label class="form__label_checkbox" for="checkbox13">обучающие рассылки</label>
            <input class="form__input_checkbox" type="checkbox" value="Постренинговое сопровождение: подключение к «библиотеке знаний»" id="checkbox14"/>
            <label class="form__label_checkbox" for="checkbox14">подключение к «библиотеке знаний»</label>
            <input class="form__input_checkbox" type="checkbox" value="Постренинговое сопровождение: дополнительное дистанционное обучение" id="checkbox15"/>
            <label class="form__label_checkbox" for="checkbox15">дополнительное дистанционное обучение</label>
            <input class="form__input_checkbox" type="checkbox" value="Постренинговое сопровождение: проведение вебинара" id="checkbox16"/>
            <label class="form__label_checkbox" for="checkbox16">проведение вебинара</label>
            <input class="form__input_checkbox" type="checkbox" value="Постренинговое сопровождение: проведение дополнительного мини-тренинга" id="checkbox17"/>
            <label class="form__label_checkbox" for="checkbox17">проведение дополнительного мини-тренинга</label>
            <h4>Заполните форму и получите расчет коммерческого предложения</h4>
            <input class="big open_modal form__submit" data-href="#form_modal" type="submit" value="Получите коммерческое предложение" data-reveal-id="order_corp_modal" data-open="order_corp_modal"/>
            <div class="form_modal modal" id="form_modal">
              <div class="modal-content modal-content_sm">
                <div class="close">&times;</div>
                <h3>
                   Заполните форму для получения коммерческого предложения по обучению Ваших сотрудников!</h3>
                <div class="content_modal">
                  <input class="form__input" type="text" name="company" placeholder="Название компании"/>
                  <div class="open_block typeOfCourse1 status1 active"></div>
                  <h4>Контактная информация:</h4>
                  <input class="form__input" type="text" name="name" placeholder="Контактное лицо"/>
                  <input class="form__input" type="tel" name="phone" placeholder="Контактный телефон"/>
                  <input class="form__input" type="email" name="email" placeholder="Email"/><br/><strong>Ваши пожелания:</strong>
                  <textarea class="form__input" placeholder="для оформления договора и счёта на обучение" rows="5" name="wishes"></textarea><input type='hidden' name='title' value='Получение коммерческого предложения по обучению персонала [Корпоративное обучение]'>
<?php $all_options = get_option('true_options'); ?>
<input type='hidden' name='mailtoAddr' value='<?php echo $all_options["mailto"]; ?>'>
                  <input type="hidden" name="request"/>
                  <div class="center__wrapper">
                    <p class="small">*При отправлении заявки Вы подтверждаете согласие на обработку своих персональных данных. Мы ценим наших клиентов и никогда не занимаемся рассылкой спама. Ваши данные хранятся только у нас и не передаются другим компаниям.	</p>
                    <input class="form__submit" type="submit" value="Отправить"/>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="video_block grey_container">
    <div class="container">
      <div class="padding-block">
        <h2>Корпоративное обучение по мастерству презентации и публичного выступления</h2>
        <div class="iframe-wrapper">
          <iframe allowfullscreen="" frameborder="0" src="https://www.youtube.com/embed/5RK4PmaqB5A"></iframe>
        </div>
      </div>
    </div>
  </div>
  <div class="reviews_block_wrapp dark_section center__wrapper">
    <div class="container">
      <h2>Отзывы любимых клиентов</h2>
      <div class="slider_block reviews_slider"><?php if ( function_exists('dynamic_sidebar') )		dynamic_sidebar('slider-reviews'); ?>								</div>
    </div>
  </div><?php endif; ?>
</div><?php get_footer(); ?>