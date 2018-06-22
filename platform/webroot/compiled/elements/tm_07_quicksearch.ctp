<?php 
$qscriteria = $session->read('SearchCriteria');
$included_classes = unserialize($settings['SettingRealestate']['included_classes']);
echo $form->create('Listing', array('id'=>'qs_form', 'class'=>'form-quicksearch', 'name'=>'qs_form', 'action'=>'search')); 

?>

<div class="form-group form-select hidden-md hidden-lg">
	<select id="qs_propclass" class="form-control" name="data[Listing][class][]">
	    <option value="">Property Class</option>
		<?php 
			$sess_cl = explode(',', @$qscriteria['class']);
			foreach($parent_classes as $propertyClass) {
				if(!empty($included_classes)) {
					if(!in_array($propertyClass['ListingClass']['search_id'], $included_classes)) {
						continue;
					}
				}
				if(isset($qscriteria['class']) && !empty($qscriteria['class'])) {
					$cls_sel = in_array($propertyClass['ListingClass']['search_id'], $sess_cl) ? ' selected="selected"' : null;
				} else {
					$cls_sel = null;
				}
				echo '<option '.$cls_sel.' value="'.$propertyClass['ListingClass']['search_id'].'">'.$propertyClass['ListingClass']['class_name'].'</option>';
			}
		?>
	</select>
</div>
<div class="form-group hidden-xs hidden-sm">
	<select id="qs_propclass" class="form-control qs-single-select" name="data[Listing][class][]">
	    <option value="">Property Class</option>
		<?php 
			$sess_cl = explode(',', @$qscriteria['class']);
			foreach($parent_classes as $propertyClass) {
				if(!empty($included_classes)) {
					if(!in_array($propertyClass['ListingClass']['search_id'], $included_classes)) {
						continue;
					}
				}
				if(isset($qscriteria['class']) && !empty($qscriteria['class'])) {
					$cls_sel = in_array($propertyClass['ListingClass']['search_id'], $sess_cl) ? ' selected="selected"' : null;
				} else {
					$cls_sel = null;
				}
				echo '<option '.$cls_sel.' value="'.$propertyClass['ListingClass']['search_id'].'">'.$propertyClass['ListingClass']['class_name'].'</option>';
			}
		?>
	</select>
</div>





<div class="form-group form-select hidden-md hidden-lg">
	<?php
		App::import('Controller', 'App');
		$app = new AppController;
		$app->settings = $settings;
		$cities = $app->lookup_cities();
		unset($app);
	?>
    <select class="form-control" id="qs_propcity" name="data[Listing][city][]">
    	<option value="">All Cities</option>
        <?php
            if(isset($cities) && !empty($cities)) {
				$included_cities = unserialize($settings['SettingRealestate']['included_cities']);

				if(!empty($included_cities) && is_array($included_cities)) {
					foreach($included_cities as $key => $value) {
						foreach($cities as $keysub => $valuesub) {
							if(strtolower($value) === strtolower($valuesub)) {
								echo '<option value="'.$keysub.'">'.$valuesub.'</option>';
							}
						}
					}
				} else {
					foreach($cities as $k => $v) {
						echo '<option value="'.$k.'">'.$v.'</option>';
					}
				}
			}
        ?>
    </select>
</div>
<div class="form-group hidden-xs hidden-sm">
	<?php
		App::import('Controller', 'App');
		$app = new AppController;
		$app->settings = $settings;
		$cities = $app->lookup_cities();
		unset($app);
	?>
    <select class="form-control qs-single-select" id="qs_propcity" name="data[Listing][city][]">
    	<option value="">All Cities</option>
        <?php
            if(isset($cities) && !empty($cities)) {
				$included_cities = unserialize($settings['SettingRealestate']['included_cities']);

				if(!empty($included_cities) && is_array($included_cities)) {
					foreach($included_cities as $key => $value) {
						foreach($cities as $keysub => $valuesub) {
							if(strtolower($value) === strtolower($valuesub)) {
								echo '<option value="'.$keysub.'">'.$valuesub.'</option>';
							}
						}
					}
				} else {
					foreach($cities as $k => $v) {
						echo '<option value="'.$k.'">'.$v.'</option>';
					}
				}
			}
        ?>
    </select>
</div>

<?php
	/*
	** start statuses
	*/
	if(isset($sess_status)) {
		$sel_status = explode(',', $sess_status);
	} else {
		$sel_status = null;
	}
	$included_statuses = unserialize($settings['SettingRealestate']['included_statuses']);

	$statusHolder = '';
	$status_cnt = 0;
	foreach($this->viewVars['statuses'] as $kStatus => $vStatus) {
		if(!empty($included_statuses)) {
			if(!in_array($kStatus, $included_statuses)) {
				continue;
			}
		}

		$status_sel = null;
		if(isset($sess_status)) {
			$status_sel = in_array($kStatus, $sel_status) ? ' selected="selected"' : null;
		} else {
			$status_sel = null;
		}
		$statusHolder .= '<option value="'.$kStatus.'" data-id="'.$kStatus.'" data-status="'.$vStatus.'" '.$status_sel.'>'.$vStatus.'</option>';
		$status_cnt++;
	}
	/*
	** end statuses
	*/
?>

<div class="form-group hidden-xs hidden-sm">
	<select class="form-control multi-select placeholder">
		<option value="" disabled selected hidden>Any Status</option>
    </select>
    <select name="data[Listing][status][]" multiple="multiple" class="form-control multi-select" style="display: none;">
    	<?php echo $statusHolder; ?>
    </select>
    <script>
        $(function() {
            $('#qs_form .multi-select.placeholder').remove();
            $('#qs_form .multi-select').show();
            $('#qs_form .multi-select').multipleSelect({
                minimumCountSelected: 2,
                placeholder: "Any Status"
            });
        });
    </script>
</div>
<div class="form-group hidden-md hidden-lg">
	<select name="data[Listing][status][]" class="form-control" multiple="multiple">
		<option value="" default disabled selected>Any Status</option>
		<?php echo $statusHolder; ?>
	</select>
</div>

<div class="collapse" id="searchMore">
    <div class="row">
        <div class="col-xs-6 col-md-6">
            <div class="form-group form-input">
                <?php
					// check for price restriction
					$lowprice_restrictions = 0;
					if(!empty($settings['SettingRealestate']['price_low']) && $settings['SettingRealestate']['price_low'] > 0) {
						$lowprice_restrictions = $settings['SettingRealestate']['price_low'];
					}
					?>
					<?php
					$sel_lowprice = null;
					if(isset($sess_lowprice) && !empty($sess_lowprice)) {
						$sel_lowprice = number_format($sess_lowprice, 0, '', '');
					}
					echo $form->input('Listing.lp', array('value' => $sel_lowprice, 'pattern' => '[0-9]*', 'placeholder' => '$ Min Price', 'data-v-min' => '0', 'class'=>'text', 'label'=>false,'div'=>false, 'class'=>'form-control'));
				?>
            </div>
        </div>
        <div class="col-xs-6 col-md-6">
            <div class="form-group form-input">
                <?php
					$sel_highprice = null;
					if(isset($sess_highprice) && !empty($sess_highprice)) {
						$sel_highprice = number_format($sess_highprice, 0, '', '');
						if($sel_highprice == 999999999999) {
							$sel_highprice = null;
						}
					}
					echo $form->input('Listing.hp', array('value' => $sel_highprice, 'pattern' => '[0-9]*', 'placeholder' => '$ Max Price', 'data-v-min' => '0', 'class'=>'text', 'label'=>false,'div'=>false, 'class'=>'form-control'));
				?>
            </div>
        </div>
        <div class="col-xs-6 col-md-6">
            <div class="form-group form-select hidden-md hidden-lg">
                <?php 
					$sess_br = isset($qscriteria['br']) ? $qscriteria['br'] : null;
					echo $form->select('br', array(
						'0'		=>'All Beds',
						'1'		=>'1+',
						'2'		=>'2+',
						'3'		=>'3+',
						'4'		=>'4+',
						'5'		=>'5+',
						'6'		=>'6+'), $sess_br, array('id'=>'qs_beds','class'=>'form-control'), false);
				?>
            </div>
            <div class="form-group hidden-xs hidden-sm">
                <?php 
					$sess_br = isset($qscriteria['br']) ? $qscriteria['br'] : null;
					echo $form->select('br', array(
						'0'		=>'All Beds',
						'1'		=>'1+',
						'2'		=>'2+',
						'3'		=>'3+',
						'4'		=>'4+',
						'5'		=>'5+',
						'6'		=>'6+'), $sess_br, array('id'=>'qs_beds','class'=>'form-control qs-single-select'), false);
				?>
            </div>
        </div>
        <div class="col-xs-6 col-md-6">
            <div class="form-group form-select hidden-md hidden-lg">
                <?php 
					$sess_fba = isset($qscriteria['fba']) ? $qscriteria['fba'] : null;
					echo $form->select('fba', array(
						'0' 	=>'All Baths',
						'1' 	=>'1+',
						'2' 	=>'2+',
						'3' 	=>'3+',
						'4' 	=>'4+',
						'5' 	=>'5+',
						'6' 	=>'6+'), $sess_fba, array('id'=>'qs_baths','class'=>'form-control'), false);
				?>
            </div>
            <div class="form-group hidden-xs hidden-sm">
                <?php 
					$sess_fba = isset($qscriteria['fba']) ? $qscriteria['fba'] : null;
					echo $form->select('fba', array(
						'0' 	=>'All Baths',
						'1' 	=>'1+',
						'2' 	=>'2+',
						'3' 	=>'3+',
						'4' 	=>'4+',
						'5' 	=>'5+',
						'6' 	=>'6+'), $sess_fba, array('id'=>'qs_baths','class'=>'form-control qs-single-select'), false);
				?>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-4 col-md-4">
        <a class="btn btn-secondary collapsed more" role="button" data-toggle="collapse" href="#searchMore" aria-expanded="false" aria-controls="searchMore"></a>
    </div>
    <div class="col-xs-8 col-md-8">
        <a href="javascript:void(0);" class="btn btn-primary" onclick="$('.sidebar #qs_form').submit();">Search</a>
    </div>
</div>
</form>

<script>
    $(function() {
        $('.qs-single-select').selectize({
            create: false,
            hideSelected: true,
            allowEmptyOption: true,
        });
    })
</script>
