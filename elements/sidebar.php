<aside class="sidebar">
  <div class="sidebar__widget sidebar__quicksearch">
    <h4>Quick Search</h4>

    <form id="qs_form" class="form-quicksearch" name="qs_form" method="post" action="/property-search.html">
      <fieldset style="display:none;"><input type="hidden" name="_method" value="POST"></fieldset>
      <div class="form-group">
        <select class="form-control qs-single-select" id="qs_propclass" name="data[Listing][class][]" onchange="qsClassSelect();">
          <option value="">All Property Types</option>
          <option value="1">Residential</option>
          <option value="3">Multifamily</option>
          <option value="2">Land</option>
          <option value="4">Commercial Industrial</option>
          <option value="5">Farm</option>
        </select>
      </div>
      <div class="form-group form-select">
        <select class="form-control" id="qs_propcity" name="data[Listing][city][]">
          <option value="">All Cities</option>
          <option value="12">Blue Eye</option>
          <option value="5">Branson</option>
        </select>
      </div>
      <div class="form-group">
        <select class="form-control multi-select placeholder">
          <option value="" disabled selected hidden>Lot Location</option>
        </select>
        <select multiple="multiple" class="form-control multi-select" data-placeholder="Lot Location" style="display: none;">
          <option value="1">January</option>
          <option value="12">pending contingent on financing</option>
          <option value="2">January</option>
          <option value="13">December</option>
          <option value="4">January</option>
          <option value="5">January</option>
        </select>
      </div>

      <div class="collapse" id="searchMore">
        <div class="row">
          <div class="col-xs-6 col-md-6">
            <div class="form-group form-input">
              <input name="data[Listing][lp]" type="text" value="" pattern="[0-9]*" placeholder="$ Min Price" data-v-min="0" class="form-control" id="ListingLp">
            </div>
          </div>
          <div class="col-xs-6 col-md-6">
            <div class="form-group form-input">
              <input name="data[Listing][hp]" type="text" value="" pattern="[0-9]*" placeholder="$ Max Price" data-v-min="0" class="form-control" id="ListingHp">
            </div>
          </div>
          <div class="col-xs-6 col-md-6">
            <div class="form-group form-select">
              <select name="data[Listing][br]" id="qs_beds" class="form-control">
                <option value="0">All Beds</option>
                <option value="Efficiency">Efficiency</option>
                <option value="1">1+</option>
              </select>
            </div>
          </div>
          <div class="col-xs-6 col-md-6">
            <div class="form-group form-select">
              <select name="data[Listing][fba]" id="qs_baths" class="form-control">
                <option value="0">All Baths</option>
                <option value="1">1+</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-4 col-md-4">
          <a class="btn btn-secondary collapsed more" role="button" data-toggle="collapse" href="#searchMore" aria-expanded="false" aria-controls="searchMore"></a>
        </div>
        <div class="col-xs-8 col-md-8">
          <a href="javascript:void(0);" class="btn btn-primary" onclick="$('#qs_form').submit();">Search</a>
        </div>
      </div>
    </form>
  </div>

  <div class="sidebar__widget sidebar__agents">
    <div class="agent-slider">
      <?php include('elements/snippets/agents.php'); ?>
    </div>
  </div>

  <div class="sidebar__widget sidebar__featured-listing">
    <?php include('elements/snippets/featured-listings.php'); ?>
  </div>

  <div class="sidebar__widget sidebar__menu-box sidebar__list-scroll">
    <h4>Featured Areas</h4>
    <div class="list-slider" data-list-items="3">
      <ul>
        <li><a href="">Andrews</a></li>
        <li><a href="">Galivants Ferry</a></li>
        <li><a href="">Garden City</a></li>
        <li><a href="">Georgetown</a></li>
        <li><a href="">Little River</a></li>
        <li><a href="">Longs</a></li>
        <li><a href="">Loris</a></li>
        <li><a href="">Murrells Inlet</a></li>
        <li><a href="">Myrtle Beach</a></li>
        <li><a href="">North Myrtle Beach</a></li>
        <li><a href="">Pawleys Island</a></li>
        <li><a href="">Surfside Beach</a></li>
      </ul>
    </div>
  </div>

  <div class="sidebar__widget sidebar__menu-box sidebar__multilevel sidebar__multilevel-list">
    <h4>Multi Level</h4>
    <ul>
      <li><a href="/">Andrews</a></li>
      <li><a href="/">Conway</a></li>
      <li>
        <a href="">Galivants Ferry</a>
        <ul>
          <li><a href="">Georgetown</a></li>
          <li>
            <a href="">Little River</a>
            <ul>
              <li><a href="">Georgetown</a></li>
              <li>
                <a href="/">Little River Long text what happens</a>
                <ul>
                  <li><a href="/">Georgetown</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="/">Longs</a></li>
        </ul>
      </li>
      <li><a href="/">Garden City</a></li>
      <li><a href="/">Georgetown</a></li>
      <li><a href="">Murrells Inlet</a></li>
    </ul>
  </div>

  <div class="sidebar__widget sidebar__menu-box sidebar__no-title sidebar__multilevel sidebar__multilevelmenus-list">
    <h4 class="hidden">Multi Level Menus</h4>
    <div class="panel-group" role="tablist" aria-multiselectable="true">
      <div class="panel panel-default">
        <div class="panel-heading" role="tab">
          <h4 class="panel-title">
            <a role="button" data-toggle="collapse">
              Popular Searches
            </a>
          </h4>
        </div>
        <div class="panel-collapse collapse" role="tabpanel">
          <div class="panel-body">
            <ul>
              <li><a href="/">Andrews</a></li>
              <li><a href="/">Long text what happens sdada</a></li>
              <li>
                <a href="">Galivants Ferry</a>
                <ul>
                  <li><a href="">Georgetown</a></li>
                  <li>
                    <a href="">Little River</a>
                    <ul>
                      <li><a href="">Georgetown</a></li>
                      <li>
                        <a href="/">Little River Long text what happens</a>
                        <ul>
                          <li><a href="/">Georgetown</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="/">Longs</a></li>
                </ul>
              </li>
              <li><a href="/">Garden City</a></li>
              <li><a href="/">Georgetown</a></li>
              <li><a href="">Murrells Inlet</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab">
          <h4 class="panel-title">
            <a role="button" data-toggle="collapse">
              Popular Searches
            </a>
          </h4>
        </div>
        <div class="panel-collapse collapse" role="tabpanel">
          <div class="panel-body">
            <ul>
              <li><a href="/">Andrews</a></li>
              <li><a href="/">Conway</a></li>
              <li>
                <a href="">Galivants Ferry</a>
                <ul>
                  <li><a href="">Georgetown</a></li>
                  <li>
                    <a href="">Little River</a>
                    <ul>
                      <li><a href="">Georgetown</a></li>
                      <li>
                        <a href="/">Little River Long text what happens</a>
                        <ul>
                          <li><a href="/">Georgetown</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="/">Longs</a></li>
                </ul>
              </li>
              <li><a href="/">Garden City</a></li>
              <li><a href="/">Georgetown</a></li>
              <li><a href="">Murrells Inlet</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="sidebar__widget sidebar__list sidebar__new-listings">
    <h4>Quick Links</h4>
    <ul>
      <li><a href="">Venenatis Vulputate Sit <span class="badge pull-right">12</span></a></li>
      <li><a href="">Porta Tristique Tellus <span class="badge pull-right">12</span></a></li>
      <li><a href="">Risus Aenean Elit <span class="badge pull-right">12</span></a></li>
    </ul>
  </div>

  <div class="sidebar__widget">
    <h4>Paragraph</h4>
    <img src="img/tm-07/banner-int.jpg">
    <p>Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
    <a href="" class="btn btn-primary">Example Link</a>
  </div>

  <div class="sidebar__widget">
    <h4>Sign Up For Our Email Newsletter</h4>
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Enter your email address">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Go</button>
      </span>
    </div>
  </div>
</aside>