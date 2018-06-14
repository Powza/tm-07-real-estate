<?php

// query conditions
$fl_cond['conditions'] = array();
$fl_cond['conditions']['Listing.office_id'] = array('934');

// Auto pull agents
$agentsArr = array();
if($settings['SettingRealestate']['featured_listings_type'] == 'a') {
    $agentsArr = @unserialize($settings['SettingRealestate']['featured_listings_agents']);
    if(!empty($agentsArr)) {
        $fl_cond['conditions']['Listing.agent_id'] = $agentsArr;
  }
}

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
<div class="properties-slider featured-listings-slider">
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
                $prop_url = $html->url(array('controller' => 'listings', 'action'=>'view', $url_scheme));
            } else {
                $prop_url = $html->url(array('controller' => 'listings', 'action'=>'view', Inflector::slug(strtolower($listing['Listing']['class'])), $listing['Listing']['mlsid']));
            }

            $price = $property->propprice($listing['Listing']['asking_price']);
            $status = ucfirst($listing['Listing']['status']);
            $status_class = 'status-'.Inflector::slug(strtolower($listing['Listing']['status_id']));
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
            
        ?>
        <div class="item">
            <div class="prop-wrap">
                <div class="prop-pic">
                    <a href="<?php echo $prop_url; ?>">
                        <div class="prop-img" data-src="<?php echo $fl_img; ?>"></div>
                        <ul class="prop-meta">
                            <li class="prop-class"><?php echo $class; ?></li>
                        </ul>
                        <div class="prop-bottom">
                            <div class="prop-price"><?php echo $price; ?></div>
                        </div>
                    </a>
                </div>
                <div class="prop-content">
                    <div class="prop-address">
                        <div class="prop-street"><?php echo $short_address; ?></div>
                        <span class="prop-city"><?php echo $city; ?></span>, <span class="prop-state"><?php echo $state; ?></span> <span class="prop-zip"><?php echo $zip; ?></span>
                    </div>
                    <ul class="prop-common">
                        <?php
                            if(!empty($beds)) {
                                echo '<li><svg role="img" title="Beds"><use xlink:href="/img/tm-07/icon-pack.svg#beds"></use></svg>'.$beds.' bd</li>';
                            }
                            if(!empty($fullbaths)) {
                                echo '<li><svg role="img" title="Baths"><use xlink:href="/img/tm-07/icon-pack.svg#baths"></use></svg>'.$fullbaths.' ba</li>';
                            }
                            if(!empty($sqft)) {
                                echo '<li><svg role="img" title="SqFt"><use xlink:href="/img/tm-07/icon-pack.svg#sqft"></use></svg>'.$sqft.' sqft</li>';
                            }
                            if($class == 'Land' || $class == 'Commercial') {
                                if(!empty($acres)) {
                                    echo '<li><svg role="img" title="Acres"><use xlink:href="/img/tm-07/icon-pack.svg#acres"></use></svg>'.$acres.' acres</li>';
                                }
                            }
                        ?>
                    </ul>
                    <span class="prop-mls">MLS # <?php echo $mlsNum; ?><br><small><time datetime="<?php echo date('Y-m-d', strtotime($listing['Listing']['listing_date'])); ?>"><?php echo date('m/d/Y', strtotime($listing['Listing']['listing_date'])); ?></time></small></span>
                    <a href="<?php echo $prop_url; ?>" class="btn btn__primary__outline">View Listing</a>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
</div> <!-- properties-slider -->
<script>
    $(function() {
        $('.featured-listings-slider .slider-wrap').html($('.featured-listings-slider .item').sort(function(){
            return Math.random()-0.5;
        }));
        $('.featured-listings-slider .prop-img').Lazy({
            scrollDirection: 'vertical'
        });
        $('.featured-listings-slider .slider-wrap').slick({
            prevArrow: '<button type="button" class="slick-prev btn btn__primary__outline"><i class="fa fa-angle-left"></i> Prev</button>',
            nextArrow: '<button type="button" class="slick-next btn btn__primary__outline">Next <i class="fa fa-angle-right"></i></button>',
            appendArrows: $('<div></div>').addClass('section__slider-arrows').appendTo('.featured-listings-slider'),
        });
    });
</script>
<?php
} else {
    echo '<p>No listings found</p>';
}
?>