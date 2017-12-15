<?php
// подгружаем среду WP
require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');

// фильтруем POST данные, передаваемые этому файлу с Javascript
$format = htmlspecialchars(trim($_POST['format']));
$document = htmlspecialchars(trim($_POST['document']));
$cat = htmlspecialchars(trim($_POST['cat']));

?> 


	<?php
	
	if( ($format=='0') && ($document=='0') && ($cat=='0') ){

		$args = array(
			'category__in' => 1,
			'post_type' => array( 'cources' ),
			'posts_per_page' => -1
			);

	}
	elseif( ($format != '0') && ($document=='0') && ($cat=='0') ){
		$args = array(
			'category__in' => 1,
			'post_type' => array( 'cources' ),
			'meta_query' => array(
				
				array(
					'key' => 'формат_обучения',
					'value' => $format
				)
				),
			'posts_per_page' => -1
			// 'orderby' => 
			);
	}
	elseif( ($format == '0') && ($document!='0') && ($cat=='0') ){
		$args = array(
			'category__and' => array(1),
			'post_type' => array( 'cources' ),
			'meta_query' => array(
				'relation' => 'AND',
				array(
					'key' => 'выдаваемый_документ',
					'value' => $document
				)
				),
			'posts_per_page' => -1
			);
	}
	elseif( ($format == '0') && ($document=='0') && ($cat!='0') ){
		$args = array(
			'category__and' => array(1,$cat),
			'post_type' => array( 'cources' ),
			'posts_per_page' => -1
			);
	}
	elseif( ($format != '0') && ($document=='0') && ($cat!='0') ){
		$args = array(
			'category__and' => array(1,$cat),
			'post_type' => array( 'cources' ),
			'meta_query' => array(
				'relation' => 'AND',
				array(
					'key' => 'формат_обучения',
					'value' => $format
				),
				
			),
			'posts_per_page' => -1
			);			
	}
	elseif( ($format == '0') && ($document!='0') && ($cat!='0') ){
		$args = array(
			'category__and' => array(1,$cat),
			'post_type' => array( 'cources' ),
			'meta_query' => array(
				'relation' => 'AND',
				array(
					'key' => 'выдаваемый_документ',
					'value' => $document
				)
				
			),
			'posts_per_page' => -1
			);
	}
	else
	{
		// echo $cat,$format,$document, ' 4';
			$args = array(
			'category__and' => array(1),
			'post_type' => array( 'cources' ),
			'meta_query' => array(
				'relation' => 'AND',
				array(
					'key' => 'формат_обучения',
					'value' => $format
				),
				array(
					'key' => 'выдаваемый_документ',
					'value' => $document
				)
			),
			'posts_per_page' => -1
			);
			
	} 
	query_posts( $args );
	if( have_posts() ){ 	
		while ( have_posts() ) : the_post();
		 get_template_part( 'content', get_post_format() );
		 endwhile; 
	} else { ?>
	   <p>К сожалению, по вашему запросу курсов не найдено</p>
	<?php }


	?>
