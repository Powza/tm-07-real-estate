<?php
/*
 +---------------------------------------------------------------------------------------------------+
 + $Id: search_mls.ctp 1306 2012-08-22 17:08:49Z chrome $
 + Last Modified: $Date: 2012-08-22 13:08:49 -0400 (Wed, 22 Aug 2012) $
 + Version: $Revision: 1306 $
 + Modified By: $LastChangedBy: chrome $
 +---------------------------------------------------------------------------------------------------+
*/
?>
<?php echo $form->create('Listing', array('url'=>'/listings/search_by_mls_address','id'=>'search_mls')); ?>

<div class="row">
	<div class="col-md-12">
		<div class="form-group">
			<div class="mls-results"><span class="mls-loading"></span></div>
			<div id="qs_suggest"></div>
			<button id="mlsSearch" type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
		</div>
	</div>
</div>

<?php echo $form->end(); ?>

<script type="text/javascript">
$(document).ready(function() {

	$('.header__search-mls-address .mls-results').hide();
	
	var qs_suggest = $('.header__search-mls-address #qs_suggest').magicSuggest({
		hideTrigger: true,
		minChars: 2,
		maxSuggestions: 100,
		allowFreeEntries: true,
		placeholder: 'Search by MLS # or Address',
		maxSelection: 15,
		inputCfg: {'autocomplete':'true'},
		name: 'data[Listing][mlsnumbers]',
		data: '/listings/ajax_mlsdata',
		displayField: 'name',
		renderer: function (a){ if(typeof(a.display) == 'undefined' || a.display == '') { return a.id; /*var mlsids = a.id; console.log(mlsids); return mlsids.split(",");*/ } else { return a.display; } },
		selectionRenderer: function (a){ if(typeof(a.display) == 'undefined' || a.display == '') { return a.id; /*var mlsids = a.id; console.log(mlsids); return mlsids.split(",");*/ } else { return a.display; } },
	});
	
	$(qs_suggest).on('beforeload', function() {
		$(".header__search-mls-address .mls-results").show().spin({ lines: 9, length: 1, width: 4, radius: 4, speed: 1.3, left: '0px' });
	});
	
	$(qs_suggest).on('load', function() {
		$(".header__search-mls-address .mls-results").hide().spin(false);
	});
	
});
</script>