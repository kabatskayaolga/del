<?php
/**
 * delo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package delo
 */

if ( ! function_exists( 'delo_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function delo_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on delo, use a find and replace
		 * to change 'delo' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'delo', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Главное меню', 'delo' ),
			'menu-2' => esc_html__( 'Главной страницы', 'delo' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'delo_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			// 'height'      => 250,
			// 'width'       => 250,
			// 'flex-width'  => true,
			// 'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'delo_setup' );



function delo_widgets_init() {
	
	register_sidebar( array(
		'name'          => esc_html__( 'Заголовок и текст главной страницы', 'delo' ),
		'id'            => 'header_home',
		'description'   => esc_html__( 'Добавьте заголовок и текст', 'delo' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h1>',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Информация "О нас"', 'delo' ),
		'id'            => 'about-us',
		'description'   => esc_html__( 'Добавьте заголовок и текст', 'delo' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( '[Слайдер] с документами', 'delo' ),
		'id'            => 'slider-about-us',
		'description'   => esc_html__( 'Добавьте изображения сертификатов', 'delo' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => esc_html__( '[Слайдер] Бежевый зал', 'delo' ),
		'id'            => 'slider-beige-hall',
		'description'   => esc_html__( 'Добавьте изображения/лого зала в блоке [Где проходят занятия]', 'delo' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => esc_html__( '[Слайдер] Черный зал', 'delo' ),
		'id'            => 'slider-black-hall',
		'description'   => esc_html__( 'Добавьте изображения/лого зала в блоке [Где проходят занятия]', 'delo' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => esc_html__( '[Слайдер] Ресторан', 'delo' ),
		'id'            => 'slider-restaurant',
		'description'   => esc_html__( 'Добавьте изображения/лого ресторана в блоке [Где проходят занятия]', 'delo' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => esc_html__( '[Слайдер] Гостиница', 'delo' ),
		'id'            => 'slider-hotel',
		'description'   => esc_html__( 'Добавьте изображения/лого гостиницы в блоке [Где проходят занятия]', 'delo' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => esc_html__( '[Слайдер] Наши Клиенты', 'delo' ),
		'id'            => 'slider-clients',
		'description'   => esc_html__( 'Добавьте изображения/лого клиентов', 'delo' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

	$text = 'Добавьте изображения/лого отзывов клиентов \n + Добавить виджет -> Изображение -> Добавить изображение -> Загрузить фото/Отмечаем галочкой изображение -> Добавить к виджету';

	register_sidebar( array(
		'name'          => esc_html__( '[Слайдер] Отзывы клиентов', 'delo' ),
		'id'            => 'slider-reviews',
		'description'   => '<strong>Добавьте изображения отзывов клиентов</strong></br></br> 1) Добавить виджет -> </br>2) Изображение -> </br>3) Добавить изображение -> </br>4) Загрузить фото/Отмечаем галочкой изображение -> </br>5) Добавить к виджету </br></br> Заголовок оставляем пустым' ,
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => esc_html__( '[Слайдер] Наши партнеры', 'delo' ),
		'id'            => 'slider-partners',
		'description'   => esc_html__( 'Добавьте изображения/лого партнеров', 'delo' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Лого в футере', 'delo' ),
		'id'            => 'logo-in-footer',
		'description'   => esc_html__( 'Добавьте изображение белого логотипа', 'delo' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Информация "Дистанционный курс" SCORM', 'delo' ),
		'id'            => 'about-dist-cource',
		'description'   => esc_html__( 'Добавьте заголовок и текст', 'delo' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( '[Слайдер] "Дистанционный курс" SCORM', 'delo' ),
		'id'            => 'slider-about-dist-cource',
		'description'   => esc_html__( 'Добавьте изображения сертификатов', 'delo' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	
}
add_action( 'widgets_init', 'delo_widgets_init' );




// add_filter( 'widget_title', 'hide_widget_title' );
// function hide_widget_title( $title ) {
//     if ( empty( $title ) ) return '';
//     if ( $title[0] == '!' ) return '';
//     return $title;
// }
/**
 * Enqueue scripts and styles.
 */
function delo_scripts() {
	wp_enqueue_style( 'delo-style', get_stylesheet_uri() );

	wp_enqueue_script( 'delo-navigation', get_template_directory_uri() . '/js/script.js', array(), '20151215', true );

}
add_action( 'wp_enqueue_scripts', 'delo_scripts' );




$true_page = 'myparameters.php'; // это часть URL страницы, рекомендую использовать строковое значение, т.к. в данном случае не будет зависимости от того, в какой файл вы всё это вставите
$true_page2 = 'my-contacts-parameters.php'; 
/*
 * Функция, добавляющая страницу в пункт меню Настройки
 */
function true_options() {
	global $true_page;
	add_menu_page( 'Контактные данные', 'Контактные данные', 'manage_options', $true_page, 'true_option_page'); 

}
add_action('admin_menu', 'true_options');
 
/**
 * Возвратная функция (Callback)
 */ 
function true_option_page(){
	global $true_page;
	?><div class="wrap">
		<h2>Контактные данные сайта</h2>
		<form method="post" enctype="multipart/form-data" action="options.php">
			<?php 
			settings_fields('true_options'); // меняем под себя только здесь (название настроек)
			do_settings_sections($true_page);
			?>
			<p class="submit">  
				<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />  
			</p>
		</form>
	</div><?php
}
 
/*
 * Регистрируем настройки
 * Мои настройки будут храниться в базе под названием true_options (это также видно в предыдущей функции)
 */
function true_option_settings() {
	global $true_page;
	// Присваиваем функцию валидации ( true_validate_settings() ). Вы найдете её ниже
	register_setting( 'true_options', 'true_options', 'true_validate_settings' ); // true_options
 	


	////////////////////////////////////////////////////////////////////////////////////////
	//
	//
 	//    ТЕЛЕФОН + ЕМЕЙЛ
 	//
 	//
 	////////////////////////////////////////////////////////////////////////////////////////



	// Добавляем секцию
	add_settings_section( 'true_section_1', 'Телефон, емейл и адрес', '', $true_page );
 
	// Создадим текстовое поле в первой секции
	$true_field_params = array(
		'type'      => 'text', // тип
		'id'        => 'tel'
	);
	add_settings_field( 'my_text_field', 'Номер телефона', 'true_option_display_settings', $true_page, 'true_section_1', $true_field_params );

	
 
	// Создадим текстовое поле в первой секции
	$true_field_params = array(
		'type'      => 'text', // тип
		'id'        => 'email'
	);
	add_settings_field( 'my_text_field2', 'Емейл', 'true_option_display_settings', $true_page, 'true_section_1', $true_field_params );



	// Создадим текстовое поле в первой секции
	$true_field_params = array(
		'type'      => 'text', // тип
		'id'        => 'loc'
	);
	add_settings_field( 'my_text_field3', 'Адрес', 'true_option_display_settings', $true_page, 'true_section_1', $true_field_params );


	// Создадим текстовое поле в первой секции
	$true_field_params = array(
		'type'      => 'text', // тип
		'id'        => 'loc-addr'
	);
	add_settings_field( 'my_text_field4', 'Ссылка на адрес Яндекс-мар', 'true_option_display_settings', $true_page, 'true_section_1', $true_field_params );


	////////////////////////////////////////////////////////////////////////////////////////
	//
	//
 	//    Социальные сети
 	//
 	//
 	////////////////////////////////////////////////////////////////////////////////////////



	// Добавляем секцию
	add_settings_section( 'true_section_1_2', 'Социальные сети (ссылки)', '', $true_page );
 
	// Создадим текстовое поле в первой секции
	$true_field_params = array(
		'type'      => 'text', // тип
		'id'        => 'fb'
	);
	add_settings_field( 'my_text_field', 'Facebook', 'true_option_display_settings', $true_page, 'true_section_1_2', $true_field_params );

	
 
	// Создадим текстовое поле в первой секции
	$true_field_params = array(
		'type'      => 'text', // тип
		'id'        => 'ins'
	);
	add_settings_field( 'my_text_field2', 'Instagram', 'true_option_display_settings', $true_page, 'true_section_1_2', $true_field_params );


	// Создадим текстовое поле в первой секции
	$true_field_params = array(
		'type'      => 'text', // тип
		'id'        => 'vk'
	);
	add_settings_field( 'my_text_field3', 'Vkontakte', 'true_option_display_settings', $true_page, 'true_section_1_2', $true_field_params );

	// Создадим текстовое поле в первой секции
	// $true_field_params = array(
	// 	'type'      => 'text', // тип
	// 	'id'        => 'g'
	// );
	// add_settings_field( 'my_text_field4', 'Google+', 'true_option_display_settings', $true_page, 'true_section_1_2', $true_field_params );

	// Создадим текстовое поле в первой секции
	// $true_field_params = array(
	// 	'type'      => 'text', // тип
	// 	'id'        => 'tw'
	// );
	// add_settings_field( 'my_text_field5', 'Twitter', 'true_option_display_settings', $true_page, 'true_section_1_2', $true_field_params );


	// Создадим текстовое поле в первой секции
	$true_field_params = array(
		'type'      => 'text', // тип
		'id'        => 'yt'
	);
	add_settings_field( 'my_text_field6', 'Youtube', 'true_option_display_settings', $true_page, 'true_section_1_2', $true_field_params );

	// Создадим текстовое поле в первой секции
	$true_field_params = array(
		'type'      => 'text', // тип
		'id'        => 'ss'
	);
	add_settings_field( 'my_text_field7', 'Telegram', 'true_option_display_settings', $true_page, 'true_section_1_2', $true_field_params );



	////////////////////////////////////////////////////////////////////////////////////////
	//
	//
 	//    Социальные сети
 	//
 	//
 	////////////////////////////////////////////////////////////////////////////////////////



	// Добавляем секцию
	add_settings_section( 'true_section_1_3', 'Почта на которую будут приходить заявки', '', $true_page );
 
	// Создадим текстовое поле в первой секции
	$true_field_params = array(
		'type'      => 'text', // тип
		'id'        => 'mailto'
	);
	add_settings_field( 'my_text_field', 'Емейл для заявок', 'true_option_display_settings', $true_page, 'true_section_1_3', $true_field_params );

	
 
	











}
add_action( 'admin_init', 'true_option_settings' );
 
/*
 * Функция отображения полей ввода
 * Здесь задаётся HTML и PHP, выводящий поля
 */
function true_option_display_settings($args) {
	extract( $args );
 
	$option_name = 'true_options';
 
	$o = get_option( $option_name );
 
	switch ( $type ) {  
		case 'text':  
			$o[$id] = esc_attr( stripslashes($o[$id]) );
			echo "<input class='regular-text' type='text' id='$id' name='" . $option_name . "[$id]' value='$o[$id]' />";  
			// echo ($desc != '') ? "<br /><span class='description'>$desc</span>" : "";  
		break;
		case 'textarea':  
			$o[$id] = esc_attr( stripslashes($o[$id]) );
			echo "<textarea class='code large-text' cols='50' rows='10' type='text' id='$id' name='" . $option_name . "[$id]'>$o[$id]</textarea>";  
			echo ($desc != '') ? "<br /><span class='description'>$desc</span>" : "";  
		break;
		case 'checkbox':
			$checked = ($o[$id] == 'on') ? " checked='checked'" :  '';  
			echo "<label><input type='checkbox' id='$id' name='" . $option_name . "[$id]' $checked /> ";  
			echo ($desc != '') ? $desc : "";
			echo "</label>";  
		break;
		case 'select':
			echo "<select id='$id' name='" . $option_name . "[$id]'>";
			foreach($vals as $v=>$l){
				$selected = ($o[$id] == $v) ? "selected='selected'" : '';  
				echo "<option value='$v' $selected>$l</option>";
			}
			echo ($desc != '') ? $desc : "";
			echo "</select>";  
		break;
		case 'radio':
			echo "<fieldset>";
			foreach($vals as $v=>$l){
				$checked = ($o[$id] == $v) ? "checked='checked'" : '';  
				echo "<label><input type='radio' name='" . $option_name . "[$id]' value='$v' $checked />$l</label><br />";
			}
			echo "</fieldset>";  
		break; 
	}
}
 
/*
 * Функция проверки правильности вводимых полей
 */
function true_validate_settings($input) {
	foreach($input as $k => $v) {
		$valid_input[$k] = trim($v);
 
		/* Вы можете включить в эту функцию различные проверки значений, например
		if(! задаем условие ) { // если не выполняется
			$valid_input[$k] = ''; // тогда присваиваем значению пустую строку
		}
		*/
	}
	return $valid_input;
}

add_filter('excerpt_more', 'new_excerpt_more');
function new_excerpt_more($more) {
	global $post;
	return '';
}
function your_prefix_register_post_type() {

	$args = array (
		'label' => esc_html__( 'Курсы', 'text-domain' ),
		'labels' => array(
			'menu_name' => esc_html__( 'Курсы', 'text-domain' ),
			'name_admin_bar' => esc_html__( 'Курсы', 'text-domain' ),
			'add_new' => esc_html__( 'Добавить новый курс', 'text-domain' ),
			'add_new_item' => esc_html__( 'Добавить новый курс', 'text-domain' ),
			'new_item' => esc_html__( 'Новый курс', 'text-domain' ),
			'edit_item' => esc_html__( 'Редактировать курс', 'text-domain' ),
			'view_item' => esc_html__( 'Все курсы', 'text-domain' ),
			'update_item' => esc_html__( 'Update Курсы', 'text-domain' ),
			'all_items' => esc_html__( 'Все курсы', 'text-domain' ),
			'search_items' => esc_html__( 'Искать курсы', 'text-domain' ),
			'parent_item_colon' => esc_html__( 'Родительский курс', 'text-domain' ),
			'not_found' => esc_html__( 'Курсы не найдены', 'text-domain' ),
			'not_found_in_trash' => esc_html__( 'Курсы не найдены', 'text-domain' ),
			'name' => esc_html__( 'Курсы', 'text-domain' ),
			'singular_name' => esc_html__( 'Курсы', 'text-domain' ),
		),
		'public' => true,
		'exclude_from_search' => false,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_nav_menus' => true,
		'show_in_menu' => true,
		'show_in_admin_bar' => false,
		'show_in_rest' => false,
		'capability_type' => 'post',
		'hierarchical' => false,
		'has_archive' => true,
		'query_var' => true,
		'can_export' => true,
		'rewrite_no_front' => false,
		'supports' => array(
			'title',
			'editor',
			'thumbnail',
		),
		'menu_icon' => 'dashicons-book-alt',
		'taxonomies' => array(
			'category',
		),
		'rewrite' => true,
	);

	register_post_type( 'cources', $args );

$args = array (
		'label' => esc_html__( 'Лекторы', 'text-domain' ),
		'labels' => array(
			'menu_name' => esc_html__( 'Лекторы', 'text-domain' ),
			'name_admin_bar' => esc_html__( 'Лекторы', 'text-domain' ),
			'add_new' => esc_html__( 'Новый лектор', 'text-domain' ),
			'add_new_item' => esc_html__( 'Добавь нового лектора', 'text-domain' ),
			'new_item' => esc_html__( 'Новый лектор', 'text-domain' ),
			'edit_item' => esc_html__( 'Редактировать лектора', 'text-domain' ),
			'view_item' => esc_html__( 'Лектор', 'text-domain' ),
			'update_item' => esc_html__( 'Update Лекторы', 'text-domain' ),
			'all_items' => esc_html__( 'Все лекторы', 'text-domain' ),
			'search_items' => esc_html__( 'Искать лекторов', 'text-domain' ),
			'parent_item_colon' => esc_html__( 'Родитель лекторов', 'text-domain' ),
			'not_found' => esc_html__( 'Лекторы не найдены', 'text-domain' ),
			'not_found_in_trash' => esc_html__( 'Лекторы не найдены', 'text-domain' ),
			'name' => esc_html__( 'Лекторы', 'text-domain' ),
			'singular_name' => esc_html__( 'Лекторы', 'text-domain' ),
		),
		'public' => true,
		'exclude_from_search' => false,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_nav_menus' => true,
		'show_in_menu' => true,
		'show_in_admin_bar' => false,
		'show_in_rest' => false,
		'capability_type' => 'post',
		'hierarchical' => false,
		'has_archive' => true,
		'query_var' => true,
		'can_export' => true,
		'rewrite_no_front' => false,
		'supports' => array(
			'title',
			'editor',
			'thumbnail',
		),
		'taxonomies' => array(
			'category',
		),
		'menu_icon' => 'dashicons-businessman',
		'rewrite' => true,
	);

	register_post_type( 'lectors', $args );

	$args = array (
		'label' => esc_html__( 'Обучающие материалы', 'text-domain' ),
		'labels' => array(
			'menu_name' => esc_html__( 'Обучающие материалы', 'text-domain' ),
			'name_admin_bar' => esc_html__( 'Обучающие материалы', 'text-domain' ),
			'add_new' => esc_html__( 'Добавить материлы', 'text-domain' ),
			'add_new_item' => esc_html__( 'Добавить	материлы', 'text-domain' ),
			'new_item' => esc_html__( 'Добавить материлы', 'text-domain' ),
			'edit_item' => esc_html__( 'Редактировать материлы', 'text-domain' ),
			'view_item' => esc_html__( 'Показать материлы', 'text-domain' ),
			'update_item' => esc_html__( 'Update Обучающие материалы', 'text-domain' ),
			'all_items' => esc_html__( 'Все обучающие материлы', 'text-domain' ),
			'search_items' => esc_html__( 'Искать обучающие материлы', 'text-domain' ),
			'parent_item_colon' => esc_html__( 'Родительские обучающие материлы', 'text-domain' ),
			'not_found' => esc_html__( 'Искать обучающие материлы', 'text-domain' ),
			'not_found_in_trash' => esc_html__( 'Обучающие материлы не найдены', 'text-domain' ),
			'name' => esc_html__( 'Обучающие материалы', 'text-domain' ),
			'singular_name' => esc_html__( 'Обучающие материалы', 'text-domain' ),
		),
		'public' => true,
		'exclude_from_search' => false,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_nav_menus' => true,
		'show_in_menu' => true,
		'show_in_admin_bar' => false,
		'show_in_rest' => false,
		'capability_type' => 'post',
		'hierarchical' => false,
		'has_archive' => true,
		'query_var' => true,
		'can_export' => true,
		'rewrite_no_front' => false,
		'supports' => array(
			'title',
			'editor',
			'thumbnail',
		),
		'menu_icon' => 'dashicons-media-default',
		'taxonomies' => array(
			'category',
		),
		'rewrite' => true,
	);

	register_post_type( 'materials', $args );
}
add_action( 'init', 'your_prefix_register_post_type' );


add_filter( 'get_the_archive_title', function ( $title ) {

    $title = single_cat_title( '', false );

    return $title;

});


function remove_menus(){
  // remove_menu_page( 'index.php' );                  //Консоль
  // remove_menu_page( 'edit.php' );                   //Записи
  // remove_menu_page( 'upload.php' );                 //Медиафайлы
  // remove_menu_page( 'edit.php?post_type=page' );    //Страницы
  // remove_menu_page( 'edit-comments.php' );          //Комментарии
  // remove_menu_page( 'themes.php' );                 //Внешний вид
  // remove_menu_page( 'plugins.php' );                //Плагины
  // remove_menu_page( 'users.php' );                  //Пользователи
  // remove_menu_page( 'tools.php' );                  //Инструменты

  //   remove_menu_page( 'edit.php?post_type=acf' ); 
  //   remove_menu_page( 'edit.php?post_type=mb-post-type' ); 
  // remove_menu_page( 'options-general.php' );        //Настройки
}
add_action( 'admin_menu', 'remove_menus' );


function prefix_pre_get_posts($query) {
     if ($query->is_category) {
          $query->set('post_type', 'any');
     }
     return $query;
}
 
add_action('pre_get_posts', 'prefix_pre_get_posts');