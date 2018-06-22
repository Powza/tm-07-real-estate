<aside class="sidebar">
    <div class="sidebar__widget sidebar__agent-portal">
        <?php include('elements/snippets/agent-portal.php'); ?>
    </div>
	<div class="sidebar__widget sidebar__quicksearch">
		<h4>Quick Search</h4>

		<form id="qs_form" class="form-quicksearch" name="qs_form" method="post" action="/property-search.html">
            <fieldset style="display:none;"><input type="hidden" name="_method" value="POST"></fieldset>
            <div class="form-group">
                <select class="form-control qs-single-select" id="qs_propclass" name="data[Listing][class][]" onchange="qsClassSelect();">
                    <option value="">All Property Types</option>
                    <option value="1">Residential</option><option value="3">Multifamily</option><option value="2">Land</option><option value="4">Commercial Industrial</option><option value="5">Farm</option>
                </select>
            </div>
            <div class="form-group form-select">
                <select class="form-control" id="qs_propcity" name="data[Listing][city][]">
                    <option value="">All Cities</option>
                    <option value="12">Blue Eye</option><option value="5">Branson</option>
                </select>
            </div>
            <div class="form-group">
	            <script>
	                $(function() {
	                    $("#qs_status").multiselect({
	                        buttonWidth: "100%",
	                        maxHeight: "100px",
	                        buttonContainer: '<div class="btn-group btn-status hidden-xs hidden-sm" />',
	                        buttonClass: "btn btn-default",
	                        buttonText: function(t, e) {
	                            if (0 == t.length) return "Any Status";
	                            if (1 == t.length) return t.each(function() {
	                                s = $(this).text()
	                            }), s;
	                            if (t.length >= 3) return t.length + " selected statuses";
	                            var s = "";
	                            return t.each(function() {
	                                s += $(this).text() + ", "
	                            }), s.substr(0, s.length - 2)
	                        },
	                        onChange: function(t, e) {}
	                    });
	                });
	            </script>
	            <select name="data[Listing][status][]" class="form-control" multiple="multiple" id="qs_status" style="display: none;">
	                <option value="1" data-id="1" data-status="Active">Active</option><option value="2" data-id="2" data-status="active short sale">active short sale</option><option value="3" data-id="3" data-status="active w/contingency">active w/contingency</option><option value="4" data-id="4" data-status="Pending">Pending</option>
	            </select>
	        </div>
            <div class="form-group hidden-md hidden-lg">
                <select name="data[Listing][status][]" class="form-control" multiple="multiple">
                    <option value="" default="" disabled="" selected="">Any Status</option>
                    <option value="1" data-id="1" data-status="Active">Active</option><option value="2" data-id="2" data-status="active short sale">active short sale</option>
                </select>
            </div>

            <div class="form-group">
                <script>
                    $(function() {
                        $("#qs_lot").multiselect({
                            buttonWidth: "100%",
                            maxHeight: "100px",
                            buttonContainer: '<div class="btn-group btn-status hidden-xs hidden-sm" />',
                            buttonClass: "btn btn-default",
                            includeSelectAllOption: true,
                            buttonText: function(t, e) {
                                if (0 == t.length) return "Any Status";
                                if (1 == t.length) return t.each(function() {
                                    s = $(this).text()
                                }), s;
                                if (t.length >= 3) return t.length + " selected statuses";
                                var s = "";
                                return t.each(function() {
                                    s += $(this).text() + ", "
                                }), s.substr(0, s.length - 2)
                            },
                            onChange: function(t, e) {}
                        });
                    });
                </script>
                <select name="data[Listing][status][]" class="form-control" multiple="multiple" id="qs_lot" style="display: none;">
                    <option value="5366">Adult Community 55+</option>
                    <option value="5354">Channel</option>
                    <option value="5881">East Of Business 17</option>
                    <option value="5362">Floating Dock</option>
                    <option value="5362">Floating Dock</option>
                    <option value="5362">Floating Dock</option>
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
        <script>
            $(function() {
                $('.qs-single-select').selectize({
                    create: false,
                    hideSelected: true,
                    allowEmptyOption: true,
                });
            })
        </script>
	</div>
    
    <div class="sidebar__widget sidebar__featured-listing">
        <?php include('elements/snippets/featured-listings-sidebar.php'); ?>
    </div>

    <div class="sidebar__widget sidebar__featured-areas">
        <h4>Featured Areas</h4>
        <div class="featured-areas-slider">
            <div class="item"><a href="">Andrews</a></div>
            <div class="item"><a href="">Conway</a></div>
            <div class="item"><a href="">Galivants Ferry</a></div>
            <div class="item"><a href="">Garden City</a></div>
            <div class="item"><a href="">Georgetown</a></div>
            <div class="item"><a href="">Little River</a></div>
            <div class="item"><a href="">Longs</a></div>
            <div class="item"><a href="">Loris</a></div>
            <div class="item"><a href="">Murrells Inlet</a></div>
            <div class="item"><a href="">Myrtle Beach</a></div>
            <div class="item"><a href="">North Myrtle Beach</a></div>
            <div class="item"><a href="">Pawleys Island</a></div>
            <div class="item"><a href="">Surfside Beach</a></div>
        </div>
        <script>
            $(document).ready(function() {
                $('.sidebar .featured-areas-slider').html($('.sidebar .featured-areas-slider .item').sort(function(){
                    return Math.random()-0.5;
                }));
                $('.sidebar .featured-areas-slider').slick({
                    vertical: true,
                    verticalSwiping: true,
                    dots: false,
                    infinite: true,
                    speed: 500,
                    slidesToShow: 6,
                    slidesToScroll: 6,
                    rows:1,
                    arrows: true,
                    prevArrow: '<button type="button" class="slick-prev btn btn__light__outline"><i class="fa fa-angle-up"></i></button>',
                    nextArrow: '<button type="button" class="slick-next btn btn__light__outline"><i class="fa fa-angle-down"></i></button>',
                    appendArrows: $('<div></div>').addClass('section__slider-arrows').appendTo('.sidebar__featured-areas h4'),
                });
            });
        </script>
    </div>

    <div class="sidebar__widget sidebar__list">
    	<h4>Quick Links</h4>
    	<ul>
    		<li><a href="">Venenatis Vulputate Sit</a></li>
    		<li><a href="">Porta Tristique Tellus</a></li>
    		<li><a href="">Risus Aenean Elit</a></li>
    	</ul>
    </div>

    <div class="sidebar__widget">
    	<h4>Paragraph</h4>
    	<img src="img/tm-07/banner-int.jpg">
    	<p>Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
    	<a href="" class="btn btn-primary">Example Link</a>
    </div>
</aside>