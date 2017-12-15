
<header class="header">
  <div class="header_wrapper__top dark_section">
    <div class="header_container container"><?php $all_options = get_option('true_options'); ?>
      <div class="flex-wrapper flex-wrapper__center">
        <div class="header_contacts"><a class="header_contact header_contact__phone" href="tel:<?php echo $all_options['tel']; ?>"><i class="icon-phone"></i><?php echo $all_options['tel']; ?></a><a class="header_contact header_contact__email" href="mailto:<?php echo $all_options['email']; ?>"><i class="icon-mail"></i><?php echo $all_options['email']; ?></a></div><?php get_search_form(); ?>
        <div class="header_social social_block"><a class="soc" href="<?php echo $all_options['fb']; ?>" target="_blank" title="facebook"><i class="icon-facebook"></i></a><a class="soc" href="<?php echo $all_options['ins']; ?>" target="_blank" title="instagram"><i class="icon-instagram"></i></a><a class="soc" href="<?php echo $all_options['vk']; ?>" target="_blank" title="vk"><i class="icon-vk"></i></a><a class="soc" href="<?php echo $all_options['yt']; ?>" target="_blank" title="youtube"><i class="icon-youtube"></i></a><a class="soc" href="<?php echo $all_options['ss']; ?>" target="_blank" title="telegram"><i class="icon-telegram"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="header_wrapper__bottom">
    <div class="header_container container">
      <div class="flex-wrapper flex-wrapper__center flex_head">
        <div class="header_logo"><?php echo get_custom_logo(); ?></div>
        <div class="header_nav__menu"><a class="nav_button__hidden"><i class="icon-menu"></i></a>
          <div class="header_nav__menu_wrapper"><?php wp_nav_menu(); ?></div>
        </div>
      </div>
    </div>
  </div>
</header>