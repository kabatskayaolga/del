<?php get_header(); ?>
<div class="wrapper"><?php get_template_part( 'head'); ?>
  <div class="head_block_wrapp head_home">
    <div class="container">
      <div class="flex-wrapper wrapper__head_block">
        <div class="head_block">
          <h1>Страница не найдена ...</h1>
          <p>Неверный адрес, либо страница больше не существует, вернитесь <a href="<?php $url = home_url(); echo esc_url( $url ); ?>">на главную</a></p>
        </div>
      </div>
    </div>
  </div>
</div><?php get_footer(); ?>