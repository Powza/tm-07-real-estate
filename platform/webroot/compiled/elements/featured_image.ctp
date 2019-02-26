<?php
	if($page['Page']['is_home'] == 1) {
		if(isset($page['Page']['featured_image']) && !empty($page['Page']['featured_image'])) {
			echo '<div class="item" style="background-image: url('. FULL_BASE_URL.$page['Page']['featured_image'] .');"></div>';
		} else {
			$root = $_SERVER['DOCUMENT_ROOT'] . '/webroot';
			$path = '/img/tm-07/hero/slider/';
			$files = glob($root . $path . "*.{jpg,jpeg,png,gif,JPG,JPEG,PNG,GIF}", GLOB_BRACE);
			$sorted_files = array();
			foreach ($files as $file) {
			    $sorted_files[$file] = $file;
			}
			sort($sorted_files);
			foreach ($sorted_files as $image) {    
			    $image = preg_replace('/^' . preg_quote($root, '/') . '/', '', $image);
			    echo '<div class="item" style="background-image: url('. $image .');"></div>';
			}
		}
	} elseif(isset($page['Page']['featured_image']) && !empty($page['Page']['featured_image'])) {
		echo FULL_BASE_URL.$page['Page']['featured_image'];
	} elseif(isset($blog['Blog']['featured_image']) && !empty($blog['Blog']['featured_image'])) {
		echo FULL_BASE_URL.$blog['Blog']['featured_image'];
	} elseif(isset($listing[$class_model]['pic_list']) && !empty($listing[$class_model]['pic_list'])) {
		$main_img = $property->image($listing[$class_model]['mlsid'], $listing[$class_model]['class'], array(
			'img_type' => $board['Board']['img_type'],
			'db_field' => (isset($listing[$class_model]['pic_list']) && !empty($listing[$class_model]['pic_list'])) ? $listing[$class_model]['pic_list'] : null,
			'listing_image_host' => $board['BoardXref']['img_host'],
			'title' => 'MLS#'.$listing[$class_model]['mlsid'].' in '.$listing[$class_model]['city'],
			'link' => true,
			'alt' => $alt,
			'class' => 'img-polaroid',
			'return_img_name_only' => true,
			'lightbox' => $listing[$class_model]['mlsid']
		));
		echo $main_img;
	} else {
		function UR_exists($url){
		   $headers = get_headers($url);
		   return stripos($headers[0],"200 OK") ? true : false;
		}
		$theme_default_image = FULL_BASE_URL.'/img/tm-07/banner-int.jpg';
		if(UR_exists($theme_default_image)) {
			echo $theme_default_image;
		}
	}
?>