
<?php 
$newMessage = '';
$shortMessage = '';
$shortMessage2 = '';
if (get_field('формат_обучения') != 'Дистанционное обучение : Дистанционное обучение' || get_field('формат_обучения') != 'Вебинар : Вебинар') :
$dates = get_field( "ближайшие_даты" );
$newtext = explode('<br />', $dates);
$count = 0;
foreach ($newtext as $message) {
	$newtext2 = explode('-', $message);
	$count2 = 0;
	$result = 1;
	foreach ($newtext2 as $message2) {
		$count2++ ;
		if ($count2 == 1) :
			 $message2= preg_replace("/  +/"," ",$message2); 
     if (strlen($message2) >= 10) :
        // echo strlen($message2) . ' 1: ' . $message2 . '</br>';
      $result=(strtotime($message2) > strtotime(date("j.n.Y")));
     else :
        // echo strlen($message2) . ' 2: ' . $message2 . '</br>';
      $result=(strtotime($message2 . '.' . substr($message, -4, 4)) > strtotime(date("j.n.Y")));
    endif;  
		endif;
	}
	
	if (  $result == true) : 
		$count++ ;
		if($count < 4):
			$newMessage .= '<div class="dateDiv">';
			if($count == 1) :
				$newMessage .= '<input type="radio" id="date' . $count . '" name="date" value="' . $message . '" class="form__input_radio" checked>';
				$shortMessage .= '<span class="current_date">' . $message . '</span>';
				$shortMessage2 = $message;
			else :
				$newMessage .= '<input type="radio" id="date' . $count . '" name="date" value="' . $message . '" class="form__input_radio">';
				$shortMessage .= '<span class="other_dates">' . $message . '</span>';
			endif;
			$newMessage .= '<label class="form__label_radio" for="date' . $count . '">'. $message .'</label>';
			$newMessage .= '</div>';
		endif;
	endif;
	
}
endif;
?> <?php if( in_category(array(4,5,6,7)) ) : ?>	
<?php if (is_singular() && has_post_thumbnail() ) : ?>
<div class="head_block_wrapp head_home" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
  <div class="container">
    <div class="flex-wrapper wrapper__head_block">
      <div class="head_block"><h1><span class='label'><?php the_field( "формат_обучения" ) ?>:</span><br/><?php
        	the_title( '', '</h1>' );
        	the_content(); ?>
        <?php if($shortMessage2 != '') : ?>
        <h4 class="dates">
          Ближайшие даты: <?php echo $shortMessage; ?></h4><?php endif; ?>	<a class="button anchor" href="#main">Подробнее о курсе </a><a class="button active anchor" href="#price">Ознакомиться с ценами</a>
      </div>
      <div class="form-block"><?php $all_options = get_option('true_options'); ?>
        <form class="form_wrapper form_wrapper_column" id="spec">
          <h4>Получить спецпредложение</h4>
          <input class="form__input" type="text" name="name" placeholder="Ваше имя" required="required"/>
          <input class="form__input" type="tel" name="phone" placeholder="Ваш телефон" required="required"/>
          <input class="form__input" type="email" name="email" placeholder="Ваш email" required="required"/><input type='hidden' name='mailtoAddr' value='<?php echo $all_options["mailto"]; ?>'>
<input type='hidden' name='title' value='Спецпредложение по курсу "<?php the_title(); ?>"'>
          <input class="form__submit" type="submit" value="Отправить"/>
        </form>
      </div>
    </div>
  </div>
</div><?php elseif (is_singular()) : ?>
<div class="head_block_wrapp head_home">
  <div class="container"><?php if( is_category('1') ) : ?>
    <div class="flex-wrapper wrapper__head_block"></div><?php else : ?>
    <div class="flex-wrapper wrapper__head_block flex-wrapper__center_justify"><?php endif; ?>
      <div class="head_block">
        <?php if( is_category('1') ) : ?>
        <h1><span class='label'><?php the_field( "формат_обучения" ) ?>:</span><br/><?php
        	the_title( '', '</h1>' );
        	the_content(); ?>
        <?php else : ?>
        <?php the_title( '<h1>', '</h1>' );
        the_content(); ?>
        <?php endif; ?>
        <?php if( is_category('1') ) : ?>
        <?php if($shortMessage2 != '') : ?>
        <h4 class="dates">
          Ближайшие даты: <?php echo $shortMessage; ?></h4><?php endif; ?><a class="button anchor" href="#main">Подробнее о курсе </a><a class="button active anchor" href="#price">Ознакомиться с ценами</a><?php endif; ?>
      </div><?php if( is_category('1') ) : ?>
      <div class="form-block">
        <form class="form_wrapper form_wrapper_column">
          <h4>Получить спецпредложение</h4>
          <input class="form__input" type="text" placeholder="Ваше имя"/>
          <input class="form__input" type="text" placeholder="Ваше имя"/>
          <input class="form__input" type="text" placeholder="Ваше имя"/><input type='hidden' name='mailtoAddr' value='<?php echo $all_options["mailto"]; ?>'>
<input type='hidden' name='title' value='Спецпредложение по курсу "<?php the_title(); ?>"'>
          <input class="form__submit" type="submit" value="Отправить"/>
        </form>
      </div><?php endif; ?>
    </div>
  </div>
</div><?php else : ?>
<div class="flex-column__event flex-column__1-4">
  <div class="event_block__prew">
    <div class="event_block__prew_img"><a href="<?php echo get_page_link(); ?>"> <img src="<?php the_post_thumbnail_url(); ?>"/></a></div>
    <div class="event_block__prew_info">
      <p class="category"><span><?php the_field( "формат_обучения" ) ?>: </span><?php the_title(); ?></p>
      <p><?php if($shortMessage2 != '') : ?><span class="label">Ближайшая дата:</span><?php echo $shortMessage2; ?>	
        <?php endif; ?>			<br/><span class="label">Длительность:</span><?php the_field( "длительность_курса" ) ?><br/><span class="label"> Выдаваемый документ:  </span><?php the_field( "выдаваемый_документ" ) ?><br/><span class="label">Цена:</span><?php the_field( "стоимость_по_умолчанию" ) ?>
        руб
      </p>
      <div class="center__wrapper"><a class="button" href="<?php echo get_page_link(); ?>">Подробнее</a></div>
    </div>
  </div>
</div><?php endif; ?>
<?php
if ( is_singular() and in_category('1')) : ?>
<div class="information_block_wrapp grey_section">
  <div class="container">
    <div class="flex-wrapper">
      <div id="main">
        <div class="main-information">
          <div> <span class="item">Длительность курса: </span><span class="num-days"><?php the_field( "длительность_курса" ) ?></span></div><?php if (get_field('ближайшие_даты') != '') : ?>
          <div><span class="item">Даты: </span><br/><?php echo the_field( "ближайшие_даты" ); ?></div><?php endif; ?><?php if (get_field('место_проведения') != '') : ?>
          <div><span class="item">Место проведения: </span><?php echo get_field( "место_проведения" ) ?></div><?php endif; ?>
          <div><span class="item">Формат обучения: </span><?php the_field( "формат_обучения" ) ?></div>
          <div><span class="item">Выдаваемый документ:  </span><?php the_field( "выдаваемый_документ" ) ?></div>
          <div><span class="item">Стоимость: </span>от
            <?php the_field( "стоимость_по_умолчанию" ) ?>
            руб.
          </div>
          <div class="center__wrapper"><a class="button active anchor" href="#price">Записаться на курс</a></div>
        </div>
      </div>
      <div class="more_information__wrapper">
        <h2>Информация о курсе</h2>
        <div class="tab_wrapper">
          <section class="tabs-links"><a href="#usefulness"><i class="icon-mortarboard"></i>Чем полезен курс</a><a class="active" href="#for_whom"><i class="icon-team"></i>Для кого курс</a><a href="#program"><i class="icon-list"></i>Программа курса</a></section>
          <div id="usefulness"><?php the_field( "чем_полезен_курс" ) ?></div>
          <div class="active" id="for_whom"><?php the_field( "для_кого_курс" ) ?></div>
          <div id="program"><?php the_field( "программа_курса" ) ?><a class="more" href=""></a></div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="lecturers_block_wrapp center__wrapper">
  <div class="container">
    <h2>Тренеры и преподаватели</h2><?php $posts = get_field('лектора'); ?>
    <?php if( $posts ):
    $count=count($posts); 
    if( $count < 5) : ?>
    <div class="flex-wrapper single-lecturers">
      <?php foreach( $posts as $post): ?>
      <?php setup_postdata($post);?>
      <div class="flex-column">
        <div class="flex-wrapper flex-content-rows">
          <div class="image_wrapper">
            <div class="image_wrapper__hidden"><img src="<?php the_post_thumbnail_url(); ?>"/></div>
          </div>
          <div class="hidden_block">
            <h3><?php the_title() ?></h3>
            <p><?php the_content(); ?></p><a class="button active open_modal" data-href="#lector_modal">Задать вопрос лектору</a>
          </div>
        </div>
      </div><?php endforeach; ?>
      <?php wp_reset_postdata(); ?>
    </div><?php else : ?>
    <div class="flex-wrapper single-lecturers single-lecturers__slider lecturers_slider slider_block lecturers_slider__small">
      <?php foreach( $posts as $post): ?>
      <?php setup_postdata($post);?>
      <div>
        <div class="image_wrapper"><img src="<?php the_post_thumbnail_url(); ?>"/></div>
        <div class="hidden_block"><span class="specialty"><?php the_field( "специализация" ) ?></span>
          <h3><?php the_title() ?></h3>
          <p><?php the_content(); ?></p><a class="button open_modal" data-href="#lector_modal">Задать вопрос лектору</a>
        </div>
      </div><?php endforeach; ?>
      <?php wp_reset_postdata(); ?>
    </div><?php endif; ?>
    <?php endif; ?>
  </div>
</div>
<div class="advantages_block_wrapp dark_section center__wrapper">
  <div class="container">
    <h2>Вы получаете</h2>
    <div class="flex-wrapper">
      <div class="flex-column__1-5"><i class="icon-notebook icon_big"></i>
        <h4>авторский раздаточный материал</h4>
      </div>
      <div class="flex-column__1-5"><i class="icon-file icon_big"></i>
        <h4>канцелярские принадлежности</h4>
      </div>
      <div class="flex-column__1-5"><i class="icon-percent icon_big"></i>
        <h4>система групповых и корпоративных скидок*</h4>
      </div>
      <div class="flex-column__1-5"><i class="icon-domain-registration icon_big"></i>
        <h4>Возможно проведение семинара в  корпоративном формате и в форме вебинара</h4>
      </div>
      <div class="flex-column__1-5"><i class="icon-perc icon_big"></i>
        <h4>Предусмотрены скидки для групп от 2-х и более человек</h4>
      </div>
    </div>
  </div>
</div>
<div class="price_block_wrapp" id="price">
  <div class="container">
    <div class="center__wrapper">
      <h2>Расчет Вашей цены на обучение</h2>
    </div>
    <form class="form_wrapper">
      <div class="flex-wrapper">
        <div class="calc_block">
          <h4>Количество участников:</h4>
          <div class="flex-wrapper">
            <div class="quantity_people">
              <input class="quantity_people__size" hidden="hidden" name="quantity_people" value="1"/>
              <div class="quantity_people__sizevalue">
                <div>1</div>
                <div>2</div>
                <div>3</div>
                <div>4</div>
                <div>5</div>
                <div>6</div>
                <div>7</div>
                <div>8</div>
                <div>9</div>
                <div>10</div>
                <div>11</div>
              </div>
              <div class="quantity_people__range"></div>
            </div>
            <div class="quantity_people_num">Больше? Выберите 
              <input class="form__input_number" type="number" min="1" value="12" name="quantity_people_more"/>
            </div>
          </div><?php if($shortMessage2 != '') : ?>
          <h4 class="date_h4">Дата проведения:</h4>
          <div class="flex-wrapper"><?php echo $newMessage; ?> </div>
          <input class="form__input_checkbox" type="checkbox" id="payment" name="payment" value="Скидка при ранней оплате +10%"/>
          <label class="form__label_checkbox" for="payment">Оплата до <span class="time_for_sale"> </span><span class="akcent-color"> (скидка 10% по предоплате)</span></label><?php endif; ?>
          <input type="hidden" name="sale" value=""/>
          <h4>Дополнительно:</h4>
          <input class="form__input_checkbox" type="checkbox" id="dinner" name="dinner" value="+500 руб/чел. за обед"/>
          <label class="form__label_checkbox" for="dinner">Нужны обеды! <span class="akcent-color">+ 500 руб. / обед</span></label>
          <input class="form__input_checkbox" type="checkbox" id="advanced_training" name="advanced_training" value=" формат повышения квалификации +3500 руб."/>
          <label class="form__label_checkbox" for="advanced_training">Курс в формате повышения квалификации<span class="akcent-color">+ 3500 руб.</span><span class="about_item">По окончании курса вы получаете удостоверение о повышении квалификации</span></label>
        </div>
        <div class="price_block">
          <div class="old_price">
            <div class="old_price__title">Базовая цена =</div>
            <div class="old_price__rub"><?php the_field( "стоимость_по_умолчанию" ) ?></div>
          </div>
          <div class="new_price">
            <div class="new_price__title">Итоговая цена =</div>
            <div class="new_price__rub"><?php the_field( "стоимость_по_умолчанию" ) ?></div>
          </div>
          <div class="price_block__items">
            <h5>В стоимость входит:</h5><?php if( get_field('в_стоимость_входит') ): ?>
            <p><?php the_field('в_стоимость_входит'); ?></p>
            <?php endif; ?>
            <div class="center__wrapper"><a class="button active big open_modal" href="#form_modal">Записаться на курс</a></div>
          </div>
        </div>
        <div class="form_modal modal" id="form_modal">
          <div class="modal-content">
            <div class="close">&times;</div>
            <h3>
               Заполните форму для регистрации на курс <span class="name_of_cource_span">
                «
                <?php the_title(); ?>
                »</span></h3>
            <div class="content_modal">
              <div class="flex-wrapper">
                <div class="flex-column__1-3">
                  <div class="form_block">
                    <h4>Формат обучения:</h4>
                    <div>
                      <input class="toggleItems form__input_radio" type="radio" id="typeOfCourse1" name="typeOfCourse" value="Открытый" checked="checked"/>
                      <label class="form__label_radio" for="typeOfCourse1">Открытый</label>
                    </div>
                    <div>
                      <input class="form__input_radio toggleItems" type="radio" id="typeOfCourse2" name="typeOfCourse" value="Корпоративный"/>
                      <label class="form__label_radio" for="typeOfCourse2">Корпоративный</label>
                    </div>
                  </div>
                  <div class="form_block">
                    <div class="open_block active typeOfCourse1 status1 status2">
                      <h4>Статус:</h4>
                      <div>
                        <input class="toggleItems form__input_radio" type="radio" id="status1" name="status" value="Юридическое лицо" checked="checked"/>
                        <label class="form__label_radio" for="status1">Юридическое лицо</label>
                      </div>
                      <div>
                        <input class="form__input_radio toggleItems" type="radio" id="status2" name="status" value="Физическое лицо"/>
                        <label class="form__label_radio" for="status2">Физическое лицо</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="flex-column__1-3">
                  <div>
                    <h4>Контактная информация:</h4>
                    <div class="open_block typeOfCourse1 typeOfCourse2 status1 active">
                      <input class="form__input" type="text" name="company" placeholder="Название компании"/>
                    </div>
                    <div class="open_block typeOfCourse1 status1 active"><strong>Бухгалтерские реквизиты:</strong>
                      <textarea class="form__input" placeholder="для оформления договора и счёта на обучение" rows="5" name="accountingInformation"></textarea>
                    </div>
                    <input class="form__input" type="text" placeholder="Контактное лицо" name="name"/>
                    <input class="form__input" type="tel" placeholder="Контактный телефон" name="phone"/>
                    <input class="form__input" type="text" name="email" placeholder="Email"/>
                  </div>
                </div>
                <div class="flex-column__1-3 flex-wrapper flex-content-column">
                  <div class="open_block typeOfCourse1 status1 status2 active">
                    <h4>ФИО участников:</h4>
                    <textarea class="form__input" placeholder="Введите через запятую ФИО участников" rows="5" name="members"></textarea>
                  </div>
                  <div class="open_block typeOfCourse2">
                    <h4>Ваши пожелания</h4>
                    <textarea class="form__input" placeholder="пожелания к программе, место проведения, число участников и пр." rows="5" name="wishes"></textarea>
                  </div>
                  <div class="info-block">
                    <p>Количество человек: <span class="quantity_people_span">1</span></p>
                    <p>Количество дней: <span class="quantity_days"></span></p>
                    <p>Дата проведения: <span class="quantity_days_span"></span></p>
                    <h4>Стоимость: <span class="price_span"> </span></h4>
                    <input type="hidden" name="price"/>
                  </div>
                </div>
              </div><input type='hidden' name='title' value='Регистрация на курс: <?php the_title();?>'>
<?php $all_options = get_option('true_options'); ?>
<input type='hidden' name='mailtoAddr' value='<?php echo $all_options["mailto"]; ?>'><br/>
              <div class="center__wrapper">
                <p class="small">*При отправлении заявки Вы подтверждаете согласие на обработку своих персональных данных. Мы ценим наших клиентов и никогда не занимаемся рассылкой спама. Ваши данные хранятся только у нас и не передаются другим компаниям.	</p>
                <input class="form__submit" type="submit" value="Отправить"/>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div><?php
endif; ?>
<?php
else: ?><?php if (is_singular() ) : ?>
<div class="head_block_wrapp head_home materials">
  <div class="container">
    <div class="image_back"><?php echo (has_post_thumbnail()) ? the_post_thumbnail() : '' ?>		</div>
    <div class="flex-wrapper wrapper__head_block">
      <div class="head_block">
        <h1>
        <?php
        	the_title( '', '</h1>' ); ?>
        <?php if( in_category(10)) : ?>
        <p class="date"><?php the_time('j F Y'); ?></p><br/><?php endif; 
        the_content(); ?>
      </div>
    </div>
  </div>
</div><?php else : ?>
<div class="flex-column__event flex-column__1-4">
  <div class="event_block__prew">
    <div class="event_block__prew_info"><?php if( is_category(10)) : ?>
      <p class="date"><?php the_time('j F Y'); ?></p><?php endif; ?><a href="<?php echo get_page_link(); ?>">
        <h3><?php the_title(); ?></h3></a>
      <p>
         <?php 
        the_excerpt();
        ?>
      </p>
      <div class="center__wrapper"><a class="button" href="<?php echo get_page_link(); ?>">Подробнее</a></div>
    </div>
  </div>
</div><?php endif; ?>
<?php
endif; ?>