<?php

// query conditions

$fl_cond['conditions'] = array();

$mlsid = null;
$fields = array('remarks,address_num,address_direction,address_street,asking_price,zip,city,state,beds,sqft,fullbaths,subdivision');
$limit = 1;

$featured_listings = $this->requestAction('/snippets/featured_listings_custom_query', array(
  	'named' => $fl_cond,
  	'fields' => $fields,
  	'mlsid' => $mlsid,
  	'limit' => $limit,
  	'order' => 'listing_date desc',
));

$total_listings = 0;

if(isset($featured_listings) && !empty($featured_listings))
{
  	$total_listings = count($featured_listings);
?>
  	<?php
  	foreach($featured_listings as $listing)
  	{
    	if(isset($settings['SettingRealestate']['listing_url_scheme']) && !empty($settings['SettingRealestate']['listing_url_scheme'])) {
      		$url_scheme = $property->url_scheme($listing);
      		$prop_url = $html->url(array('controller' => 'listings', 'action'=>'view', $url_scheme));;
    	} else {
      		$prop_url = $html->url(array('controller' => 'listings', 'action'=>'view', Inflector::slug(strtolower($listing['Listing']['class'])), $listing['Listing']['mlsid']));
    	}

		$short_address = $property->buildAddress($listing['Listing']);

		$city = $listing['Listing']['city'];
		$state = $listing['Listing']['state'];
		$zip = $listing['Listing']['zip'];

		if (!empty($listing['Listing']['beds'])) {
			$beds = '<strong>'.$listing['Listing']['beds'].'</strong> Bed,';
		}
		if (!empty($listing['Listing']['fullbaths'])) {
			$fullbaths = '<strong>'.$listing['Listing']['fullbaths'].'</strong> Bath,';
		}
		if (!empty($listing['Listing']['sqft'])) {
			$sqft = '<strong>'.$listing['Listing']['sqft'].'</strong> SqFt';
		}
        if (!empty($listing['Listing']['beds']) || !empty($listing['Listing']['fullbaths']) || !empty($listing['Listing']['sqft'])) {
            $seperator = ' / ';
        }
  	?>
  	<p>
        <span>New Listing <?php echo date("m/d/Y", strtotime($listing['Listing']['listing_date'])); ?></span> <?php echo $short_address; ?>, <?php echo $city; ?>, <?php echo $state; ?> <?php echo $zip; ?> <?php echo $seperator; ?> <?php echo $beds; ?> <?php echo $fullbaths; ?> <?php echo $sqft; ?> <a href="<?php echo $prop_url; ?>" class="btn btn__light__outline">View Listing</a>
    </p>

<?php
}

?>
<?php
}
?>