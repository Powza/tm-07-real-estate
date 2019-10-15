<form id="qs_form" class="form-quicksearch" name="qs_form" method="post" action="/property-search.html">
    <fieldset style="display:none;"><input type="hidden" name="_method" value="POST"></fieldset>
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="hero__link-buttons">
                <a href="" class="btn btn-primary">Search Oceanfront & Resort Condos</a>
                <select name="data[Listing][property][]" placeholder="Search by Subdivision" class="form-control hidden-xs qs_searchsubs" type="text">
                    <option value="3565" selected="selected">Assey</option>
                </select>
            </div>
        </div>
        <div class="col-sm-6 col-md-8">
            <div class="row">
                <div class="col-sm-12 col-md-9 col-lg-8">
                    <div class="hero__quicksearch drop-tree collapse-group">
                        <button class="collapse-link hidden-sm hidden-md hidden-lg collapsed" type="button" data-toggle="collapse" aria-expanded="false" data-target="#main-tree">Quick Search</button>
                        <div class="collapse" id="main-tree" aria-expanded="false" style="height: 0px;">
                            <div class="row">
                                <div class="col-sm-6 col-md-6 hidden-sm hidden-md hidden-lg">
                                    <div class="form-group">
                                        <select name="data[Listing][property][]" placeholder="Search by Subdivision" class="form-control qs_searchsubs" type="text">
                                            <option value="3565" selected="selected">Assey</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group form-select">
                                        <select class="form-control" id="qs_propclass" name="data[Listing][class][]">
                                            <option value="1" selected="selected">Choose Property Type</option>
                                            <option value="1">Residential</option>
                                            <option value="2">Condo/Townhouse</option>
                                            <option value="3">Land</option>
                                            <option value="4">Multi Family</option>
                                            <option value="5">Commercial/Industrial</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group form-select">
                                        <select class="form-control" id="qs_proparea" name="data[Listing][area][]">
                                            <option value="" selected="selected">Area</option>
                                            <option class="any-city" value="">Any Grand Strand City</option>
                                            <option value="7">Atlantic Beach</option>
                                            <option value="365">Briarcliff Acres</option>
                                            <option value="10">Calabash</option>
                                            <option value="15">Conway</option>
                                            <option value="21">Garden City</option>
                                            <option value="22">Georgetown</option>
                                            <option value="54">Litchfield Beach</option>
                                            <option value="32">Little River</option>
                                            <option value="33">Longs</option>
                                            <option value="35">Loris</option>
                                            <option value="4">Murrells Inlet</option>
                                            <option value="1">Myrtle Beach</option>
                                            <option value="2">North Myrtle Beach</option>
                                            <option value="43">Pawleys Island</option>
                                            <option value="5">Surfside Beach</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-12 ftr_lot_location">
                                    <div class="form-group">
                                        <select class="form-control multi-select placeholder">
                                            <option value="" disabled selected hidden>Location (Ocean, Waterway, Golf, etc.)</option>
                                        </select>
                                        <select id="qs_proplocation" name="data[Listing][ftr_lot_location][]" multiple="multiple" class="form-control multi-select" data-select-all="false" data-placeholder="Location (Ocean, Waterway, Golf, etc.)" style="display: none;">
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-12 ftr_construction">
                                    <div class="form-group">
                                        <select class="form-control multi-select placeholder">
                                            <option value="" disabled selected hidden>New Construction/Resale?</option>
                                        </select>
                                        <select id="qs_propnewConstruction" name="data[Listing][ftr_construction][]" multiple="multiple" class="form-control multi-select" data-placeholder="New Construction/Resale?" style="display: none;">
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-sm-12 col-md-12">
                                    <div class="collapse" id="searchMore">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-12">
                                                <div class="form-group form-select">
                                                    <select class="form-control" id="qs_propstatus" name="data[Listing][status][]">
                                                        <option value="0" selected="selected">Listing Status</option>
                                                        <option value="0">Active</option>
                                                        <option value="13">Pending Sale - Cash Terms</option>
                                                        <option value="5">Pending Contingent on Financing</option>
                                                        <option value="6">Contingency Contract (Other)</option>
                                                        <option value="7">Pending Contingent Contract</option>
                                                        <option value="12">Hold Don't Show</option>
                                                        <option value="8,9,10,11">Sold</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                                <div class="form-group form-input">
                                                    <input name="data[Listing][lp]" type="text" value="" pattern="[0-9]*" placeholder="$ Min Price" data-v-min="0" class="form-control" id="ListingLp">
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                                <div class="form-group form-input">
                                                    <input name="data[Listing][hp]" type="text" value="" pattern="[0-9]*" placeholder="$ Max Price" data-v-min="0" class="form-control" id="ListingHp">
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                                <div class="form-group form-select">
                                                    <select name="data[Listing][br]" id="qs_beds" class="form-control">
                                                        <option value="0">Bedrooms</option>
                                                        <option value="Efficiency">Efficiency</option>
                                                        <option value="1">1+</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                                <div class="form-group form-select">
                                                    <select name="data[Listing][fba]" id="qs_baths" class="form-control">
                                                        <option value="0">Baths</option>
                                                        <option value="1">1+</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-4 col-md-3">
                                    <a class="btn btn-secondary collapsed more" role="button" data-toggle="collapse" href="#searchMore" aria-expanded="false" aria-controls="searchMore"></a>
                                </div>
                                <div class="col-xs-8 col-md-9">
                                    <button class="btn btn-primary" id="qs_submit" disabled>Search</button>
                                </div>
                            </div>
                            <div class="hero__search__links">
                                <ul>
                                    <li>
                                        <a href="">
                                            <svg role="img" title="Map Search">
                                                <use xlink:href="img/tm-07/icon-pack.svg#map-search"></use>
                                            </svg>
                                            Map Search
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <svg role="img" title="Advanced Search">
                                                <use xlink:href="img/tm-07/icon-pack.svg#advanced-search"></use>
                                            </svg>
                                            Advanced Search
                                        </a>
                                    </li>
                                    <li class="hidden-md hidden-lg">
                                        <a href="" data-toggle="modal" data-target="#areaPolygonMapModal">
                                            <svg role="img" title="Polygon">
                                                <use xlink:href="img/tm-07/icon-pack.svg#polygon"></use>
                                            </svg>
                                            Area Map
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <a href="" class="polyMapLink hidden-sm hidden-xs" data-toggle="modal" data-target="#areaPolygonMapModal"><img data-toggle="tooltip" data-placement="top" title="Area Map" src="img/polygon-map-icon.png"></a>
                </div>
            </div>
        </div>
    </div>
</form>