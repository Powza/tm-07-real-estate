<?php
	App::import('Controller', 'App');
	$app = new AppController;
	$app->settings = $settings;
	$areas = $app->lookup_areas();
	unset($app);
?>
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