<?php get_header(); ?>
<div class="wrapper">
  <?php get_template_part( 'head'); ?><?php
  	if ( have_posts() ) : ?>
  <div class="head_block_wrapp head_home">
    <div class="container">
      <div class="flex-wrapper wrapper__head_block">
        <div class="head_block">
          <h1><?php echo get_queried_object()->name; ?></h1><?php the_archive_description(); ?>
          <div class="form_header">
            <h5>Заполните пожалуйста форму обратной связи и <br/><span class="akcent">мы подберем для Вас наиболее подходящее спецпредложение </span>по данному направлению!</h5>
          </div>
        </div>
        <div class="form-block">
          <form class="form_wrapper form_wrapper_column">
            <h4>Получить спецпредложение</h4>
            <input class="form__input" type="text" placeholder="Ваше имя"/>
            <input class="form__input" type="text" placeholder="Ваше имя"/>
            <input class="form__input" type="text" placeholder="Ваше имя"/>
            <input class="form__submit" type="submit" value="Отправить"/>
          </form>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="events_block__wrapper">
        <div class="flex-wrapper__container">
          <form>
            <div class="flex-wrapper form_wrapper flex-wrapper__center center__wrapper form_wrapper__selects">
              <div>
                <div class="flex-wrapper">
                  <div class="flex-column">
                    <select class="form__select">
                      <option value="Опция 1">Тематика</option>
                      <option value="Опция 1">Опция 1</option>
                    </select>
                  </div>
                  <div class="flex-column">
                    <select class="form__select">
                      <option value="Опция 1">Формат обучения</option>
                      <option value="Опция 1">Опция 1</option>
                    </select>
                  </div>
                  <div class="flex-column">
                    <select class="form__select">
                      <option value="Опция 1">Документ об обучении</option>
                      <option value="Опция 1">Опция 1</option>
                    </select>
                  </div>
                  <div class="flex-column">
                    <select class="form__select">
                      <option value="Опция 1">Дата</option>
                      <option value="Опция 1">Опция 1</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="flex-column">
                <input class="form__submit" type="submit" value="Искать"/>
              </div>
            </div>
          </form>
          <div class="flex-wrapper events_wrapper">
            <?php while ( have_posts() ) : the_post();
            get_template_part( 'content', get_post_format() );
            endwhile; ?>
          </div>
          <div class="center__wrapper">
            <div class="navigation_buttons"><a class="button" href="#"><<</a><a class="button" href="#">1</a><a class="button active" href="#">2</a><a class="button" href="#">3</a><a class="button" href="#">>></a></div>
          </div>
        </div>
      </div>
    </div>
  </div>	<?php else :
  		get_template_part( 'template-parts/content', 'none' );
  	endif; ?>
</div><?php get_footer(); ?>