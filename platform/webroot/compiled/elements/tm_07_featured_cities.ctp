<?php
	App::import('Controller', 'App');
	$app = new AppController;
	$app->settings = $settings;
	$cities = $app->lookup_cities();
	unset($app);
?>
<div class="featured-areas-slider">
	<ul>
		<?php 
			if(isset($cities) && !empty($cities)) {
				$included_cities = unserialize($settings['SettingRealestate']['included_cities']);

				if(!empty($included_cities) && is_array($included_cities)) {
					foreach($included_cities as $key => $value) {
						foreach($cities as $keysub => $valuesub) {
							if(strtolower($value) === strtolower($valuesub)) {
								echo '<li><a href="/listings/index/city:'.$keysub.'">'.$valuesub.'</a></li>';
							}
						}
					}
				} else {
					foreach($cities as $k => $v) {
						echo '<li><a href="/listings/index/city:'.$k.'">'.$v.'</a></li>';
					}
				}
			}
		?>
	</ul>
 </div>

<script>
    $(document).ready(function() {
        $(".sidebar .featured-areas-slider ul").html($(".sidebar .featured-areas-slider ul li").sort(function(){
            return Math.random()-0.5;
        }));
        $('.sidebar .featured-areas-slider ul').slick({
            slide: 'li',
            vertical: true,
            verticalSwiping: true,
            slidesToShow: 6,
            slidesToScroll: 6,
            prevArrow: '<button type="button" class="slick-prev btn btn__light__outline"><i class="fa fa-angle-up"></i></button>',
            nextArrow: '<button type="button" class="slick-next btn btn__light__outline"><i class="fa fa-angle-down"></i></button>',
            appendArrows: $('<div></div>').addClass('section__slider-arrows').appendTo('.sidebar__featured-areas h4'),
        });
    });
</script>