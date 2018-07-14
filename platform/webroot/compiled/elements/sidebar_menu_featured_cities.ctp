<?php
	App::import('Controller', 'App');
	$app = new AppController;
	$app->settings = $settings;
	$cities = $app->lookup_cities();
	unset($app);
?>
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