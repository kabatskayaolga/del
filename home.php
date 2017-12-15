<?php get_header(); ?>
<div class="wrapper"><?php get_template_part( 'head'); ?>
  <div class="head_block_wrapp head_home">
    <div class="container">
      <div class="head_block">
        <h1><span class="label">Курсы по</span><br/>делопроизводству<br/>и <br/>архиву </h1>
        <p>Лицензированный учебный центр по делопроизводству, секретарскому и архивному делу</p>
      </div>
      <div class="head-directions flex-wrapper__container center__wrapper">
        <h3>Выберите направление или ознакомтесь со всеми предложенными вариантами</h3>
        <div class="flex-wrapper">
          <div class="flex-column__1-4 head-directions__item"><i class="icon-folder icon_big"></i>
            <h4>Делопроизводство, документооборот</h4>
            <p>Семинары и курсы повышения квалификации по делопроизводству и документообороту. Пройдите обучение в нашем центре, и получите престижный документ об окончании обучения.</p><a class="button">Выбрать курс</a>
          </div>
          <div class="flex-column__1-4 head-directions__item"><i class="icon-archive icon_big"></i>
            <h4>Архивное дело</h4>
            <p>Семинары и курсы повышения квалификации для архивариусов. Обучение проводят лучшие эксперты страны в области архивного дела. По окончании обучения выдаются удостоверения о повышении квалификации.</p><a class="button">Выбрать курс</a>
          </div>
          <div class="flex-column__1-4 head-directions__item"><i class="icon-student2 icon_big"></i>
            <h4>Секретарское дело и офис-менеджмент</h4>
            <p>Приглашаем пройти практическое обучение для секретарей-помощников руководителя, офис-менеджеров, секретарей ресепшен. На курсах Вы получите практические знания и навыки для успешного выполнения своих должностных обязанностей.</p><a class="button">Выбрать курс</a>
          </div>
          <div class="flex-column__1-4 head-directions__item"><i class="icon-communication icon_big"></i>
            <h4>Деловой общение и этикет</h4>
            <p>1-2х дневные тренинги и семинары по основам делового общения и делового этикета. Обучение будет полезно для всех специалистов, желающих повысить свой уровень коммуникации и имидж компании в целом.</p><a class="button">Выбрать курс</a>
          </div>
        </div><a class="button">Ознакомиться со всеми курсами</a>
      </div>
    </div>
  </div>
  <div class="aboutUs_block_wrapp">
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
      <h3>Заполните,пожалуйста, форму обратной связи, и Вы получите персональную скидку на любой курс обучения в нашем центре. </h3>
      <form class="form_wrapper">
        <div class="flex-wrapper flex-wrapper__center">
          <div class="flex-column">
            <input class="form__input" type="text" placeholder="Ваше имя"/>
          </div>
          <div class="flex-column">
            <input class="form__input" type="text" placeholder="Ваше имя"/>
          </div>
          <div class="flex-column">
            <input class="form__input" type="text" placeholder="Ваше имя"/>
          </div>
        </div>
        <input class="form__submit" type="submit" value="Отправить"/>
      </form>
    </div>
  </div>
  <div class="advantages_block_wrapp dark_section center__wrapper">
    <div class="container">
      <h2>Наши преимущества</h2>
      <div class="flex-wrapper">
        <div class="flex-column__1-5"><i class="icon-moscow icon_big"></i>
          <h4>Ваше обучение проходит в самом центре Москвы, в престижном историческом здании рядом с Кремлем </h4>
        </div>
        <div class="flex-column__1-5"><i class="icon-tea icon_big"></i>
          <h4>Сытные кофе-паузы и комфортную обстановку отмечают все наши клиенты </h4>
        </div>
        <div class="flex-column__1-5"><i class="icon-teacher icon_big"></i>
          <h4>Ваши преподаватели - лучшие эксперты страны в области управления документами, архивного и секретарского дела</h4>
        </div>
        <div class="flex-column__1-5"><i class="icon-conversation icon_big"></i>
          <h4>Мини-группы дают Вам возможность получить ответы на Ваши вопросы и обменяться опытом с коллегами по обучению </h4>
        </div>
        <div class="flex-column__1-5"><i class="icon-student icon_big"></i>
          <h4>Обучение можно пройти в любом удобном Вам формате: очно, дистанционно или индивидуально </h4>
        </div>
      </div>
    </div>
  </div>
  <div class="lecturers_block_wrapp center__wrapper">
    <div class="container">
      <h2>Тренеры и преподаватели</h2>
      <div class="lecturers_slider lecturers_slider_home slider_block">
        <div>
          <div class="image_wrapper"><img src="images/lecturers/20555c2.jpg"/></div>
          <div class="hidden_block"><span class="specialty">Тренер-практик</span>
            <h3>Коновалов Сергей Владимирович</h3>
            <p>Прошел практические обучение: компания YOMO, под руководством, практикующего «бывшего» вице президента по операционной деятельности компании Тойота, более 12 месяцев.</p><a class="button">Задать вопрос лектору</a>
          </div>
        </div>
        <div>
          <div class="image_wrapper"><img src="images/lecturers/16e8e67a.png"/></div>
          <div class="hidden_block"><span class="specialty">Бизнес-тренер - преподаватель</span>
            <h3>Муталов Артур Сагадеевич</h3>
            <p>Эксперт-практик  в области разработки бизнес-процессов и автоматизации систем управления информацией и поддержки управленческих решений.</p><a class="button">Задать вопрос лектору</a>
          </div>
        </div>
        <div>
          <div class="image_wrapper"><img src="images/lecturers/595c0e1c.jpg"/></div>
          <div class="hidden_block"><span class="specialty">Бизнес-тренер, коуч</span>
            <h3>Александр Петрищев</h3>
            <p>Разработчик и методист. Автор более 30 программ по темам: ораторское искусство, мастерство общения, лидерские тренинги, взаимоотношения, конфликтология, командообразование, увеличение продаж, стрессоустойчивость, управленческие тренинги.</p><a class="button">Задать вопрос лектору</a>
          </div>
        </div>
        <div>
          <div class="image_wrapper"><img src="images/lecturers/6fbff1f.jpg"/></div>
          <div class="hidden_block"><span class="specialty">Тренер-практик</span>
            <h3>Cосновая Анна Владимировна</h3>
            <p>Сертифицированный специалист в области стратегического менеджмента и Learning and knowledge management (управления знаниями) Эксперт-практик в области корпоративного и дистанционного обучения Методист и разработчик учебных модульных программ и учебно-методических комплексов и материалов в ЦДР «Профи-Карьера»</p><a class="button">Задать вопрос лектору</a>
          </div>
        </div>
        <div>
          <div class="image_wrapper"><img src="images/lecturers/29647d76.jpg"/></div>
          <div class="hidden_block"><span class="specialty">Тренер-практик</span>
            <h3>Терновой Николай</h3>
            <p>Автор и разработчик обучающих программ, бизнес тренер</p><a class="button">Задать вопрос лектору</a>
          </div>
        </div>
        <div>
          <div class="image_wrapper"><img src="images/lecturers/5ecee2b.jpg"/></div>
          <div class="hidden_block"><span class="specialty">Тренер-практик</span>
            <h3>Григорьева Татьяна Олеговна</h3>
            <p>Кандидат экономических наук, консультант по организационному развитию, генеральный директор &quot;Профи-Карьера&quot;, сертифицированный тренер, специалист в области развития и обучения персонала</p><a class="button">Задать вопрос лектору</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="lessons_block_wrapp grey_section">
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
      <h2>Наши Клиенты</h2>
      <div class="slider_block client_slider"><?php if ( function_exists('dynamic_sidebar') )		dynamic_sidebar('slider-clients'); ?></div>
    </div>
  </div>
  <div class="reviews_block_wrapp dark_section center__wrapper">
    <div class="container">
      <h2>Отзывы любимых клиентов</h2>
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