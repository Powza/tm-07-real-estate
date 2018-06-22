<?php
	App::import('Controller', 'App');
	$app = new AppController;
	$app->settings = $settings;
	$areas = $app->lookup_areas();
	unset($app);
?>
<div class="featured-areas-slider">
	<ul>
		<?php 
			if(isset($areas) && !empty($areas)) {
				$included_areas = unserialize($settings['SettingRealestate']['included_areas']);

				if(!empty($included_areas) && is_array($included_areas)) {
					foreach($included_areas as $key => $value) {
						foreach($areas as $keysub => $valuesub) {
							if(strtolower($value) === strtolower($valuesub)) {
								echo '<li><a href="/listings/index/area:'.$keysub.'">'.$valuesub.'</a></li>';
							}
						}
					}
				} else {
					foreach($areas as $k => $v) {
						echo '<li><a href="/listings/index/area:'.$k.'">'.$v.'</a></li>';
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