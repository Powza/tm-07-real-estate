<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Tiny Minute</title>
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/frontend.myrsol.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script type="text/javascript">var controller = "pages"; var action = "view";if (!window.console) window.console = {};if (!window.console.log) window.console.log = function () { };</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/frontend.plugins.min.js"></script>
    <script type="text/javascript" src="js/frontend.myrsol.min.js"></script>
</head>
<body>
    <?php include('elements/header.php'); ?>
    <section class="section hero">
        <div class="hero__media">
            <div class="hero__media__slider">
                <div class="item" style="background-image: url('img/tm-07/hero/slider/11.jpg');"></div>
                <div class="item" style="background-image: url('img/tm-07/hero/slider/2.jpg');"></div>
                <div class="item" style="background-image: url('img/tm-07/hero/slider/3.jpg');"></div>
                <div class="item" style="background-image: url('img/tm-07/hero/slider/4.jpg');"></div>
            </div>
            <script>
                $(document).ready(function() {
                    $('.hero__media__slider').slick({
                        fade: true,
                        autoplay: true,
                        autoplaySpeed: 10000,
                        prevArrow: '<button type="button" class="slick-prev"><svg role="img" title="Left Arrow"><use xlink:href="img/tm-07/icon-pack.svg#left-arrow"></use></svg></button>',
                        nextArrow: '<button type="button" class="slick-next"><svg role="img" title="Right Arrow"><use xlink:href="img/tm-07/icon-pack.svg#right-arrow"></use></svg></button>',
                        appendArrows: $('<div></div>').addClass('section__slider-arrows hidden-xs').appendTo('.hero__search__links'),
                    });
                });
            </script>
        </div>
        <div class="hero__container container-fluid container-fluid-fixed">
            <div class="hero__content">
                <div class="hero__content__wrap">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="hero__content__text">
                                <h3>We sell <span>10x more</span><br> than the competition</h3>
                                <p>Discover your perfect home today!</p>
                            </div>
                            <div class="hero__quicksearch">
                                <form id="qs_form" class="form-quicksearch" name="qs_form" method="post" action="/property-search.html">
                                    <fieldset style="display:none;"><input type="hidden" name="_method" value="POST"></fieldset>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="row">
                                                <div class="col-sm-3 col-md-4">
                                                    <div class="form-group form-select">
                                                        <select class="form-control" id="qs_propclass" name="data[Listing][class][]" onchange="qsClassSelect();">
                                                            <option value="">All Property Types</option>
                                                            <option value="1">Residential</option><option value="3">Multifamily</option><option value="2">Land</option><option value="4">Commercial Industrial</option><option value="5">Farm</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 col-md-3">
                                                    <div class="form-group form-select">
                                                        <select class="form-control" id="qs_propcity" name="data[Listing][city][]">
                                                            <option value="">All Cities</option>
                                                            <option value="12">Blue Eye</option><option value="5">Branson</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 col-md-3 hidden">
                                                    <div class="form-group">
                                                        <script>
                                                            $(document).ready(function() {
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
                                                                })
                                                            })
                                                        </script>
                                                        <select name="data[Listing][status][]" class="form-control" multiple="multiple" id="qs_status" style="display: none;">
                                                            <option value="1" data-id="1" data-status="Active">Active</option><option value="2" data-id="2" data-status="active short sale">active short sale</option><option value="3" data-id="3" data-status="active w/contingency">active w/contingency</option><option value="4" data-id="4" data-status="Pending">Pending</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group form-select hidden-md hidden-lg">
                                                        <select name="data[Listing][status][]" class="form-control" multiple="multiple">
                                                            <option value="" default="" disabled="" selected="">Any Status</option>
                                                            <option value="1" data-id="1" data-status="Active">Active</option><option value="2" data-id="2" data-status="active short sale">active short sale</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-sm-3 col-md-3">
                                                    <div class="form-group">
                                                        <select class="form-control multi-select placeholder">
                                                            <option value="" disabled selected hidden>Lot Location</option>
                                                        </select>
                                                        <select multiple="multiple" class="form-control multi-select" style="display: none;">
                                                            <option value="1">January</option>
                                                            <option value="12">pending contingent on financing</option>
                                                            <option value="2">January</option>
                                                            <option value="13">December</option>
                                                            <option value="4">January</option>
                                                            <option value="5">January</option>
                                                        </select>
                                                        <script>
                                                            $(function() {
                                                                $('#qs_form .multi-select.placeholder').remove();
                                                                $('#qs_form .multi-select').show();
                                                                $('#qs_form .multi-select').multipleSelect({
                                                                    minimumCountSelected: 2,
                                                                    placeholder: "Lot Location"
                                                                });
                                                            });
                                                        </script>
                                                    </div>
                                                </div>

                                                <div class="col-sm-3 col-md-2 hidden-xs">
                                                    <a class="btn btn-secondary collapsed more" role="button" data-toggle="collapse" href="#searchMore" aria-expanded="false" aria-controls="searchMore"></a>
                                                </div>
                                                <div class="col-sm-12 col-md-12">
                                                    <div class="collapse" id="searchMore">
                                                        <div class="row">
                                                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                                                                <div class="form-group form-input">
                                                                    <input name="data[Listing][lp]" type="text" value="" pattern="[0-9]*" placeholder="$ Min Price" data-v-min="0" class="form-control" id="ListingLp">
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                                                                <div class="form-group form-input">
                                                                    <input name="data[Listing][hp]" type="text" value="" pattern="[0-9]*" placeholder="$ Max Price" data-v-min="0" class="form-control" id="ListingHp">
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                                                                <div class="form-group form-select">
                                                                    <select name="data[Listing][br]" id="qs_beds" class="form-control">
                                                                    <option value="0">All Beds</option>
                                                                    <option value="Efficiency">Efficiency</option>
                                                                    <option value="1">1+</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                                                                <div class="form-group form-select">
                                                                    <select name="data[Listing][fba]" id="qs_baths" class="form-control">
                                                                    <option value="0">All Baths</option>
                                                                    <option value="1">1+</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="row">
                                                <div class="col-xs-4 hidden-sm hidden-md hidden-lg">
                                                    <a class="btn btn-secondary collapsed more" role="button" data-toggle="collapse" href="#searchMore" aria-expanded="false" aria-controls="searchMore"></a>
                                                </div>
                                                <div class="col-xs-8 col-sm-12 col-md-12">
                                                    <a href="javascript:void(0);" class="btn btn-primary" onclick="$('#qs_form').submit();">Search</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="hero__search__links">
                                <ul>
                                    <li>
                                        <a href="">
                                            <svg role="img" title="Subdivision">
                                                <use xlink:href="img/tm-07/icon-pack.svg#subdivision"></use>
                                            </svg>
                                            Subdivision
                                        </a>
                                    </li>
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
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="section hero__callout hidden-xs">
            <div class="container-fluid">
                <p><span>New Listing 5/20/2018</span> 7288 Catena Ln, Myrtle Beach, SC 29572&nbsp; / &nbsp;<strong>3</strong> Bed, <strong>3</strong> Bath, <strong>3700</strong> SqFt <a class="btn btn__light__outline">View Listing</a></p>
            </div>
        </section>
    </section>
    <section class="section section__background__color__grey section__spacer">
        <div class="section__title container-fluid container-fluid-edge-space">
            <h2>Featured Listings</h2>
            <a class="btn btn__secondary__outline section__title__link" href="">View All</a>
        </div>
        <div class="container-fluid container-fluid-edge-space">
            <?php include('elements/snippets/featured-listings.php'); ?>
        </div>
        <div class="container-fluid container-fluid-edge-space">
            <hr class="big-spacer">
        </div>
        <div class="section__title container-fluid container-fluid-edge-space">
            <h2>Newly Added</h2>
            <a class="btn btn__secondary__outline section__title__link" href="">View All</a>
        </div>
        <div class="container-fluid container-fluid-edge-space">
            <?php include('elements/snippets/new-listings.php'); ?>
        </div>
    </section>
    <main class="section main-content section__spacer">
        <div class="container-fluid container-fluid-fixed">
            <div class="row">
                <div class="col-md-8 col-lg-9">
                    <div class="content-main">
                        <h1>We are the best real estate business ever</h1>
                        <p class="lead">Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut</p>
                        <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Nam ac elit a ante commodo tristique.</p>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/wz7Y-w70yWE?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Nam ac elit a ante commodo tristique.</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <aside class="sidebar">
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
                                    $(".sidebar .featured-areas-slider").html($(".sidebar .featured-areas-slider .item").sort(function(){
                                        return Math.random()-0.5;
                                    }));
                                    $('.sidebar .featured-areas-slider').slick({
                                        vertical: true,
                                        verticalSwiping: true,
                                        slidesToShow: 6,
                                        slidesToScroll: 6,
                                        prevArrow: '<button type="button" class="slick-prev btn btn__light__outline"><i class="fa fa-angle-up"></i></button>',
                                        nextArrow: '<button type="button" class="slick-next btn btn__light__outline"><i class="fa fa-angle-down"></i></button>',
                                        appendArrows: $('<div></div>').addClass('section__slider-arrows').appendTo('.sidebar__featured-areas h4'),
                                    });
                                });
                            </script>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </main>
    <section class="section section__spacer section__center section__background section__lazyload" data-src="img/tm-07/team.jpg">
        <div class="container-fluid container-fluid-fixed">
            <div class="section__title">
                <h2>We are Ready to Help You Buy or Sell a Home</h2>
                <p class="lead">Ready to get started? Give us a call today at <a href="">(860) 388-7721</a></p>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <ul class="section__links">
                        <li><a href="" class="btn btn__light__outline btn-lg">What's My Home Worth</a></li>
                        <li><a href="" class="btn btn__primary btn-lg">Find My New Home</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="section section__background__color__grey section__spacer">
        <div class="section__title container-fluid container-fluid-edge-space">
            <h2>Meet Our Team</h2>
            <a class="btn btn__secondary__outline section__title__link" href="">View All</a>
        </div>
        <div class="container-fluid container-fluid-edge-space">
            <?php include('elements/snippets/agents.php'); ?>
        </div>
    </section>
    <section class="section services section__spacer section__center section__background section__lazyload" data-src="img/tm-07/office.jpg">
        <div class="container-fluid container-fluid-edge-space">
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <div class="services__item">
                        <div class="services__icon">
                            <svg role="img" title="Map Search">
                                <use xlink:href="img/tm-07/icon-pack.svg#map-search"></use>
                            </svg>
                        </div>
                        <h3>Map Search</h3>
                        <p>Search by map to find homes for sale and houses for sale by location.</p>
                        <a class="btn btn__light__outline" href="">View Map</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <div class="services__item">
                        <div class="services__icon">
                            <svg role="img" title="Latest Listings">
                                <use xlink:href="img/tm-07/icon-pack.svg#subdivision"></use>
                            </svg>
                        </div>
                        <h3>Latest Listings</h3>
                        <p>View all the newest homes and properties recently posted on our site.</p>
                        <a class="btn btn__light__outline" href="">See Latest</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <div class="services__item">
                        <div class="services__icon">
                            <svg role="img" title="Listings Alerts">
                                <use xlink:href="img/tm-07/icon-pack.svg#email"></use>
                            </svg>
                        </div>
                        <h3>Listings Alerts</h3>
                        <p>Receive email updates when listings fall within your saved search criteria.</p>
                        <a class="btn btn__light__outline" href="">Subscribe</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <div class="services__item">
                        <div class="services__icon">
                            <svg role="img" title="Search MLS">
                                <use xlink:href="img/tm-07/icon-pack.svg#advanced-search"></use>
                            </svg>
                        </div>
                        <h3>Search MLS</h3>
                        <p>Find the perfect home using our detailed property search options.</p>
                        <a class="btn btn__light__outline" href="">Detailed Search</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section testimonials section__spacer">
        <div class="section__title container-fluid container-fluid-fixed">
            <h2>Testimonials</h2>
        </div>
        <div class="container-fluid container-fluid-fixed">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <?php include('elements/snippets/testimonials.php'); ?>
                </div>
            </div>
        </div>
    </section>
    <?php include('elements/footer.php'); ?>
</body>
</html>