<?php

$solds_arr = Configure::read('Board.sold_statuses');

// query conditions
$fl_cond['conditions'] = array();
$fl_cond['conditions']['Listing.listing_date <='] = date('Y-m-d');

$mlsid = null;
$fields = array('remarks,address_num,address_direction,status,status_id,acres,address_street,asking_price,zip,city,state,beds,sqft,fullbaths,subdivision');
$limit = 12;

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
<div class="properties-slider new-listings-slider property-slider">
    <div class="row slider-wrap">
        <?php
            foreach($featured_listings as $listing)
            {
            $fl_img = $property->image($listing['Listing']['mlsid'], $listing['Listing']['class'], array(
                'img_type'            => $board['Board']['img_type'],
                'db_field'            => (isset($listing['Listing']['pic_list']) && !empty($listing['Listing']['pic_list'])) ? $listing['Listing']['pic_list'] : null,
                'listing_image_host'  => $board['BoardXref']['img_host'],
                'title'               => $property->cleantxt($listing['Listing']['subdivision']),
                'width'               => 470,
                'height'              => 300,
                'link'                => false,
                'url_data'            => $listing
            ));

            preg_match( '@src="([^"]+)"@' , $fl_img, $match );
            $fl_img = array_pop($match);

            if(isset($settings['SettingRealestate']['listing_url_scheme']) && !empty($settings['SettingRealestate']['listing_url_scheme'])) {
                $url_scheme = $property->url_scheme($listing);
                $prop_url = $html->url(array('controller' => 'listings', 'action'=>'view', $url_scheme));;
            } else {
                $prop_url = $html->url(array('controller' => 'listings', 'action'=>'view', Inflector::slug(strtolower($listing['Listing']['class'])), $listing['Listing']['mlsid']));
            }

            $is_sold = false;
            if(!empty($solds_arr) && in_array($listing['Listing']['status_id'], $solds_arr)) {
                $is_sold = true;
            }

            $price = $property->propprice($listing['Listing']['asking_price']);
            $status = $listing['Listing']['status'];
            $status_class = 'status-'.Inflector::slug(strtolower($listing['Listing']['status_id']));
            $status_id = Inflector::slug(strtolower($listing['Listing']['status_id']));
            $class = $listing['Listing']['class'];
            $mlsNum = $listing['Listing']['mlsid'];

            $short_address = $property->buildAddress($listing['Listing']);
            $city = $listing['Listing']['city'];
            $state = $listing['Listing']['state'];
            $zip = $listing['Listing']['zip'];

            $beds = $listing['Listing']['beds'];
            $fullbaths = $listing['Listing']['fullbaths'];
            $sqft = $listing['Listing']['sqft'];
            $acres = $listing['Listing']['acres'];

            // Days on site
            $dateoflisting = $listing['Listing']['listing_date'];
            $datetime1 = new DateTime($dateoflisting);
            $datetime2 = new DateTime(date('Y-m-d'));
            $interval = $datetime1->diff($datetime2);
            $daysOnSite = null;
            if ($interval->format('%a') == '0') {
                $daysOnSite = 'Listed Today';
            } else {
                $daysOnSite = $interval->format('%a Days Listed');
            }
            
        ?>
        <div class="item">
            <div class="prop__wrap">
                <div class="prop__pic">
                    <a href="<?php echo $prop_url; ?>">
                        <?php if(strpos($fl_img, 'holder.js') !== false) { ?>
                        <div class="prop__img lazy" data-src="//assets.myrsol.com/listing_images/listings-noimage.gif"></div>
                        <?php } else { ?>
                        <div class="prop__img lazy" data-src="<?php echo $fl_img; ?>"></div>
                        <?php } ?>
                        <div class="prop__meta">
                            <ul>
                                <li class="prop__class"><?php echo $class; ?></li>
                                <?php
                                    if($is_sold == false) {
                                        ?>
                                        <?php if($status_id != '0') { ?>
                                            <li class="prop__status <?php echo $status_class; ?>"><?php echo ucwords(strtolower($status)); ?></li>
                                        <?php } ?>
                                        <?php
                                    } else {
                                        ?>
                                        <li class="prop__status sold <?php echo $status_class; ?>"><?php echo ucwords(strtolower($status)); ?></li>
                                        <?php
                                    }
                                ?>
                            </ul>
                        </div>
                        <div class="prop__bottom">
                            <div class="prop__price"><?php echo $price; ?></div>
                            <div class="prop__daymls">
                                <time class="prop__days" datetime="<?php echo date('Y-m-d', strtotime($listing['Listing']['listing_date'])); ?>"><?php echo $daysOnSite; ?></time><br>
                                <span class="prop__mls">MLS # <?php echo $mlsNum; ?></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="prop__content">
                    <div class="prop__address">
                        <div class="prop__street"><?php echo $short_address; ?></div>
                        <span class="prop__city"><?php echo $city; ?></span>, <span class="prop__state"><?php echo $state; ?></span> <span class="prop__zip"><?php echo $zip; ?></span>
                    </div>
                    <ul class="prop__common">
                        <?php
                            if(!empty($beds)) {
                                echo '<li><svg role="img" title="Beds"><use xlink:href="/img/tm-07/icon-pack.svg#beds"></use></svg><strong>'.$beds.'</strong> bed</li>';
                            }
                            if(!empty($fullbaths)) {
                                echo '<li><svg role="img" title="Baths"><use xlink:href="/img/tm-07/icon-pack.svg#baths"></use></svg><strong>'.$fullbaths.'</strong> bath</li>';
                            }
                            if(!empty($sqft)) {
                                echo '<li><svg role="img" title="SqFt"><use xlink:href="/img/tm-07/icon-pack.svg#sqft"></use></svg><strong>'.$sqft.'</strong> sqft</li>';
                            }
                            if(strtolower($class) == 'land' || strtolower($class) == 'commercial/industrial') {
                                if(!empty($acres)) {
                                    echo '<li><svg role="img" title="Acres"><use xlink:href="/img/tm-07/icon-pack.svg#acres"></use></svg><strong>'.$acres.'</strong> acres</li>';
                                }
                            }
                        ?>
                    </ul>
                    <a href="<?php echo $prop_url; ?>" class="btn btn__primary prop__link">View Listing <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
</div> <!-- properties-slider -->
<?php
} else {
    echo '<p>No listings found</p>';
}
?>