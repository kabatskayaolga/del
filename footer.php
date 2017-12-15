
<footer class="footer">
  <div class="footer_container container">
    <div class="flex-wrapper"><?php $all_options = get_option('true_options'); ?>
      <div class="flex-column">
        <div class="footer_logo"><?php if ( function_exists('dynamic_sidebar') )		dynamic_sidebar('logo-in-footer'); ?></div>
        <div class="footer_nav__menu"><?php wp_nav_menu( array('theme_location' => 'menu-2' )); ?></div>
      </div>
      <div class="flex-column">
        <div class="footer_nav__menu"><?php wp_nav_menu(); ?>
        </div>
        <h3>Подписывайтесь на нас</h3>
        <div class="footer_social social_block"><a class="soc" href="<?php echo $all_options['fb']; ?>" target="_blank" title="facebook"><i class="icon-facebook"></i></a><a class="soc" href="<?php echo $all_options['ins']; ?>" target="_blank" title="instagram"><i class="icon-instagram"></i></a><a class="soc" href="<?php echo $all_options['vk']; ?>" target="_blank" title="vk"><i class="icon-vk"></i></a><a class="soc" href="<?php echo $all_options['yt']; ?>" target="_blank" title="youtube"><i class="icon-youtube"></i></a><a class="soc" href="<?php echo $all_options['ss']; ?>" target="_blank" title="telegram"><i class="icon-telegram"></i></a>
        </div>
      </div>
      <div class="flex-column">
        <div class="footer_contacts"><a class="footer_contact" href="tel:<?php echo $all_options['tel']; ?>"><i class="icon-phone"> </i><?php echo $all_options['tel']; ?></a><a class="footer_contact" href="<?php echo $all_options['loc-addr']; ?>"><i class="icon-loc"> </i><?php echo $all_options['loc']; ?></a><a class="footer_contact" target="_blank" href="mailto:<?php echo $all_options['email']; ?>"><i class="icon-mail"> </i><?php echo $all_options['email']; ?></a>
        </div>
        <p>Заявки принимаются ежедневно</p>
        <h3>Консультации</h3>
        <p>с пн по пт с 9:00-18:00. </p>
      </div>
      <div class="flex-column footer_forms">
        <div class="footer_form footer_search search_form">
          <h3>Поиск по сайту</h3><?php get_search_form(); ?>
        </div>
      </div>
    </div>
  </div>
</footer>
<div class="form_modal modal" id="lector_modal">
  <div class="modal-content modal-content_sm">
    <div class="close">&times;</div>
    <h3>
       Задайте вопрос тренеру</h3>
    <div class="content_modal">
      <form class="form_wrapper"><?php $all_options = get_option('true_options'); ?>
        <input class="form__input" type="text" name="company" placeholder="Название компании"/>
        <div class="open_block typeOfCourse1 status1 active"></div>
        <h4>Контактная информация:</h4>
        <input class="form__input" type="text" name="name" placeholder="Контактное лицо"/>
        <input class="form__input" type="tel" name="phone" placeholder="Контактный телефон"/>
        <input class="form__input" type="email" name="email" placeholder="Email"/><br/><strong>Ваш вопрос:</strong>
        <textarea class="form__input" placeholder="получите консультацию лектора" rows="5" name="question"></textarea><input type='hidden' name='title' value='Получение консультации лектора'>
<input type='hidden' name='mailtoAddr' value='<?php echo $all_options["mailto"]; ?>'>
        <div class="center__wrapper">
          <p class="small">*При отправлении заявки Вы подтверждаете согласие на обработку своих персональных данных. Мы ценим наших клиентов и никогда не занимаемся рассылкой спама. Ваши данные хранятся только у нас и не передаются другим компаниям.	</p>
          <input class="form__submit" type="submit" value="Отправить"/>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="form_modal modal" id="consult_modal">
  <div class="modal-content modal-content_sm">
    <div class="close">&times;</div>
    <h3>
       Получите консультацию</h3>
    <div class="content_modal">
      <form class="form_wrapper">
        <input class="form__input" type="text" name="company" placeholder="Название компании"/>
        <div class="open_block typeOfCourse1 status1 active"></div>
        <h4>Контактная информация:</h4>
        <input class="form__input" type="text" name="name" placeholder="Контактное лицо"/>
        <input class="form__input" type="tel" name="phone" placeholder="Контактный телефон"/>
        <input class="form__input" type="email" name="email" placeholder="Email"/><br/><strong>Ваш вопрос:</strong>
        <textarea class="form__input" placeholder="получите консультацию" rows="5" name="question"></textarea><?php if (is_page(2)) : ?>
<input type='hidden' name='title' value='Получение консультации по Корпоративному обучению'>
<?php elseif (is_page(18)) : ?>
<input type='hidden' name='title' value='Получение консультации по Дистанционному обучению'>
<?php else : ?>
<input type='hidden' name='title' value='Получение консультации'>
<?php endif; ?>	
<input type='hidden' name='mailtoAddr' value='<?php echo $all_options["mailto"]; ?>'>
        <div class="center__wrapper">
          <p class="small">*При отправлении заявки Вы подтверждаете согласие на обработку своих персональных данных. Мы ценим наших клиентов и никогда не занимаемся рассылкой спама. Ваши данные хранятся только у нас и не передаются другим компаниям.	</p>
          <input class="form__submit" type="submit" value="Отправить"/>
        </div>
      </form>
    </div>
  </div>
</div>
<script>var templateDir2 = "<?php bloginfo('template_url') ?>/mail.php";</script><?php wp_footer(); ?>