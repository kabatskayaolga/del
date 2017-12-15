
<div class="header_search search_form">
  <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>">
    <div class="form-block-wrap">
      <input class="search_form__input" type="text" name="s" id="s" placeholder="Найдите то, что вас интересует" value="<?php echo get_search_query() ?>"/><input type="hidden" value="cources" name="post_type" />
      <input class="search_form__submit" type="submit" id="searchsubmit"/>
    </div>
  </form>
</div>