$(function() {
  // Subdivision Module Reorder
  /*function subdivisionModuleReorder() {
        if ($('#community-nav .nav-tabs a[href="#sub-listings"]').length > 0) {
            $('#community-nav .nav-tabs a[href="#sub-listings"]').parent().prependTo('#community-nav .nav-tabs');
            if (window.location.hash) {
            } else {
                $('#community-nav .nav-tabs a[href="#sub-listings"]').click();
            }
        }
    }
    subdivisionModuleReorder();*/

  // Lazyload
  function lazyLoad() {
    var lazyLoadInstance = new LazyLoad({
      elements_selector: ".lazy",
      threshold: 0
    });
  }
  lazyLoad();

  // Sidebar Scroll List Box
  function sidebarScrollList() {
    $(".sidebar__list-scroll").each(function(i) {
      $(this).attr("id", "list" + i);
    });
    $(".sidebar__list-scroll .list-slider ul").each(function(i, item) {
      var slidesShowScroll = $(this)
        .parent()
        .data("list-items");
      slidesShowScroll = slidesShowScroll <= 0 ? (slidesShowScroll = 1) : slidesShowScroll;
      if (slidesShowScroll == null) {
        slidesShowScroll = 6;
      }
      var carouselId = "carousel" + i;
      this.id = carouselId;
      $(this).slick({
        rows: 0,
        vertical: true,
        verticalSwiping: true,
        slidesToShow: slidesShowScroll,
        slidesToScroll: slidesShowScroll,
        prevArrow:
          '<button type="button" class="slick-prev btn btn__light__outline"><i class="fa fa-angle-up"></i></button>',
        nextArrow:
          '<button type="button" class="slick-next btn btn__light__outline"><i class="fa fa-angle-down"></i></button>',
        appendArrows: $("<div></div>")
          .addClass("section__slider-arrows")
          .appendTo(".sidebar__list-scroll#list" + i + " h4")
      });
    });
  }
  sidebarScrollList();

  // Sidebar Multilevel List Box
  function multilevelList() {
    $(".sidebar__multilevel-list").each(function(i) {
      $(this).attr("id", "multilevel_" + i);
      $("ul:first", this)
        .smartmenus("destroy")
        .removeAttr("id class style")
        .addClass("sm sm-vertical-list")
        .smartmenus();
    });
  }
  multilevelList();

  // Sidebar MultiLevelMenus List Box
  function multiLevelMenusList() {
    $(".sidebar__multilevelmenus-list").each(function(i) {
      $(this).attr("id", "multilevelmenus_" + i);
    });
    $(".sidebar__multilevelmenus-list .panel-group").each(function(i) {
      $(this).attr("id", "panel-group_" + i);
      $(".panel-title a", this).attr("data-parent", "#panel-group_" + i);
    });
    $(".sidebar__multilevelmenus-list .panel-title a").each(function(i) {
      $(this)
        .attr("href", "#collapse_" + i)
        .attr("aria-controls", "collapse_" + i)
        .attr("aria-expanded", "false");
    });
    $(".sidebar__multilevelmenus-list .panel-heading").each(function(i) {
      $(this).attr("id", "heading_" + i);
    });
    $(".sidebar__multilevelmenus-list .panel-collapse").each(function(i) {
      $(this)
        .attr("id", "collapse_" + i)
        .attr("aria-labelledby", "heading_" + i);
      $("ul:first", this)
        .smartmenus("destroy")
        .removeAttr("id class style")
        .addClass("sm sm-vertical-list")
        .smartmenus();
    });
  }
  multiLevelMenusList();

  // Homepage Property Slider
  function propertySlider() {
    $("img").on("error", function() {
      $(this).attr("src", "broken.gif");
    });
    $(".property-slider:not(.sidebar .property-slider)").each(function(i) {
      $(this).attr("id", "slide_" + i);
    });
    $(".property-slider:not(.sidebar .property-slider) .slider-wrap").each(function(i, item) {
      var carouselId = "carousel_" + i;
      this.id = carouselId;
      $(this).slick({
        slidesToShow: 4,
        slidesToScroll: 4,
        rows: 2,
        prevArrow:
          '<button type="button" class="slick-prev btn btn__primary__outline"><i class="fa fa-angle-left"></i> Prev</button>',
        nextArrow:
          '<button type="button" class="slick-next btn btn__primary__outline">Next <i class="fa fa-angle-right"></i></button>',
        appendArrows: $("<div></div>")
          .addClass("section__slider-arrows")
          .appendTo($(this).parent()),
        responsive: [
          {
            breakpoint: 1680,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3
            }
          },
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
              rows: 1,
              slidesPerRow: 1
            }
          },
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              rows: 1,
              slidesPerRow: 1
            }
          }
        ]
      });
    });
  }
  propertySlider();

  // Sidebar Property Slider
  function propertySliderSidebar() {
    $(".sidebar .property-slider").each(function(i) {
      $(this).attr("id", "sidebar_slide_" + i);
      $(".sidebar .property-slider#sidebar_slide_" + i + " .slider-wrap").html(
        $(".sidebar .property-slider .item").sort(function() {
          return Math.random() - 0.5;
        })
      );
    });
    $(".sidebar .property-slider .slider-wrap").each(function(i, item) {
      var carouselId = "carousel_" + i;
      this.id = carouselId;
      $(this).slick({
        rows: 0,
        adaptiveHeight: true,
        prevArrow:
          '<button type="button" class="slick-prev btn btn__primary__outline"><i class="fa fa-angle-left"></i> Prev</button>',
        nextArrow:
          '<button type="button" class="slick-next btn btn__primary__outline">Next <i class="fa fa-angle-right"></i></button>',
        appendArrows: $("<div></div>")
          .addClass("section__slider-arrows")
          .appendTo($(this).parent())
      });
    });
  }
  propertySliderSidebar();

  // Homepage Agent Slider
  function agentSlider() {
    "use strict";
    $(".agent-slider:not(.sidebar .agent-slider)").each(function(i) {
      $(this).attr("id", "slide_" + i);
      let agentSort = $.trim($(this).data("agent-sort"));
      if (agentSort.toLowerCase() == "random") {
        $(".agent-slider:not(.sidebar .agent-slider)#slide_" + i + " .slider-wrap").html(
          $(".agent-slider:not(.sidebar .agent-slider)#slide_" + i + " .slider-wrap .agent").sort(function() {
            return Math.random() - 0.5;
          })
        );
      }
      let agentPrimary = $.trim($(this).data("agent-primary"));
      $(".agent-slider:not(.sidebar .agent-slider)#slide_" + i + " .slider-wrap .agent").each(function() {
        let agentId = $(".agent-name", this).data("agent-id");
        if (agentPrimary == agentId) {
          $(this)
            .parent()
            .prepend(this);
        }
      });
    });
    $(".agent-slider:not(.sidebar .agent-slider) .slider-wrap").each(function(i, item) {
      var carouselId = "carousel_" + i;
      this.id = carouselId;
      $(this).slick({
        rows: 0,
        slidesToShow: 5,
        slidesToScroll: 5,
        prevArrow:
          '<button type="button" class="slick-prev btn btn__primary__outline"><i class="fa fa-angle-left"></i> Prev</button>',
        nextArrow:
          '<button type="button" class="slick-next btn btn__primary__outline">Next <i class="fa fa-angle-right"></i></button>',
        appendArrows: $("<div></div>")
          .addClass("section__slider-arrows")
          .appendTo($(this).parent()),
        responsive: [
          {
            breakpoint: 1680,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 4
            }
          },
          {
            breakpoint: 1440,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3
            }
          },
          {
            breakpoint: 1100,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3
            }
          },
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      });
    });
  }
  agentSlider();

  // Sidebar Agent Slider
  function agentSliderSidebar() {
    "use strict";
    $(".sidebar .agent-slider").each(function(i) {
      $(this).attr("id", "sidebar_slide_" + i);
      let agentSort = $.trim($(this).data("agent-sort"));
      if (agentSort.toLowerCase() == "random") {
        $(".agent-slider#sidebar_slide_" + i + " .slider-wrap").html(
          $(".agent-slider#sidebar_slide_" + i + " .slider-wrap .agent").sort(function() {
            return Math.random() - 0.5;
          })
        );
      }
      let agentPrimary = $.trim($(this).data("agent-primary"));
      $(".agent-slider#sidebar_slide_" + i + " .slider-wrap .agent").each(function() {
        let agentId = $(".agent-name", this).data("agent-id");
        if (agentPrimary == agentId) {
          $(this)
            .parent()
            .prepend(this);
        }
      });
    });
    $(".sidebar .agent-slider .slider-wrap").each(function(i, item) {
      var carouselId = "carousel_" + i;
      this.id = carouselId;
      $(this).slick({
        rows: 0,
        adaptiveHeight: true,
        prevArrow:
          '<button type="button" class="slick-prev btn btn__primary__outline"><i class="fa fa-angle-left"></i> Prev</button>',
        nextArrow:
          '<button type="button" class="slick-next btn btn__primary__outline">Next <i class="fa fa-angle-right"></i></button>',
        appendArrows: $("<div></div>")
          .addClass("section__slider-arrows")
          .appendTo($(this).parent())
      });
    });
  }
  agentSliderSidebar();

  // RoyalSlider Fullscreen Hide Header
  function royalSliderFullscreen() {
    if ($(".listings_view .royalSlider").length) {
      var slider = $(".royalSlider").data("royalSlider");
      slider.ev.on("rsEnterFullscreen", function() {
        $(".header").hide();
      });
      slider.ev.on("rsExitFullscreen", function() {
        $(".header").show();
      });
    }
  }
  royalSliderFullscreen();

  // svg4everybody
  svg4everybody();

  // SmartMenus
  $(".header #main_navigation").smartmenus();
  $(".mobile-menu #main_navigation").smartmenus();

  // Mobile Navigation
  $(".header__mobile-menu-btn").click(function(e) {
    e.preventDefault();
    $(".mobile-menu").toggleClass("mobile-menu__open");
    $("body").toggleClass("mobile-menu-open");
    $(this).toggleClass("open");
  });

  // Navbar Scroll
  function headerHeadroom() {
    var header = document.querySelector(".header .header__meta");

    if (window.location.hash) {
      header.classList.add("headroom--unpinned");
    }
    var headroom = new Headroom(header, {
      tolerance: {
        down: 10,
        up: 20
      },
      offset: $(".admin-navbar").outerHeight() + $(".header").outerHeight()
    });
    headroom.init();
  }
  headerHeadroom();

  // Header padding
  function headerCalculateContentPadding() {
    $("body.int").css("padding-top", $(".header").height() + "px");
  }
  $(window).resize(function() {
    headerCalculateContentPadding();
  });
  //headerCalculateContentPadding();

  // Responsive Embed
  function responsiveVideoEmbed() {
    var videoSelectors = [
      //'iframe[src*="player.vimeo.com"]',
      'iframe[src*="youtube.com"]',
      'iframe[src*="youtube-nocookie.com"]',
      'iframe[src*="kickstarter.com"][src*="video.html"]',
      'iframe[src*="screenr.com"]',
      'iframe[src*="blip.tv"]',
      'iframe[src*="dailymotion.com"]',
      'iframe[src*="viddler.com"]',
      'iframe[src*="qik.com"]',
      'iframe[src*="revision3.com"]',
      'iframe[src*="hulu.com"]',
      'iframe[src*="funnyordie.com"]',
      'iframe[src*="flickr.com"]',
      'embed[src*="v.wordpress.com"]'
    ];
    var allVideos = videoSelectors.join(",");
    $(allVideos).wrap('<span class="fluid-video" />');
  }
  responsiveVideoEmbed();

  // Enable tooltips
  $('[data-toggle="tooltip"]').tooltip({
    delay: {
      show: 500,
      hide: 500
    }
  });

  // Homepage Agent Testimonials
  function agentTestimonials() {
    $(".testimonials-slider .slider-wrap").html(
      $(".testimonials-slider blockquote").sort(function() {
        return Math.random() - 0.5;
      })
    );
    $(".testimonials-slider .slider-wrap").slick({
      rows: 0,
      adaptiveHeight: true,
      prevArrow:
        '<button type="button" class="slick-prev btn btn__primary__outline"><i class="fa fa-angle-left"></i> Prev</button>',
      nextArrow:
        '<button type="button" class="slick-next btn btn__primary__outline">Next <i class="fa fa-angle-right"></i></button>',
      appendArrows: $("<div></div>")
        .addClass("section__slider-arrows")
        .appendTo(".testimonials-slider")
    });
  }
  agentTestimonials();

  // Hero Slider
  function heroImage() {
    $(".hero__media__slider .slider").slick({
      rows: 0,
      fade: true,
      autoplay: true,
      autoplaySpeed: 10000,
      prevArrow:
        '<button type="button" class="slick-prev"><svg role="img" title="Left Arrow"><use xlink:href="img/tm-07/icon-pack.svg#left-arrow"></use></svg></button>',
      nextArrow:
        '<button type="button" class="slick-next"><svg role="img" title="Right Arrow"><use xlink:href="img/tm-07/icon-pack.svg#right-arrow"></use></svg></button>',
      appendArrows: $("<div></div>")
        .addClass("section__slider-arrows hidden-xs")
        .appendTo(".hero__content__wrap")
    });
  }

  // Hero Video
  function heroVideo() {
    var videoContainer = ".hero__video";
    $(videoContainer).YTPlayer({
      videoURL: $(videoContainer).data("video-url"),
      containment: videoContainer,
      loop: true,
      autoPlay: true,
      showControls: false,
      abundance: 0,
      stopMovieOnBlur: false,
      // startAt: 20,
      // stopAt: 25,
      playOnlyIfVisible: true,
      onScreenPercentage: 100
    });
  }

  // Check if media type is defind and default if empty
  function heroMediaCheck() {
    var checkMediaType = $.trim($(".hero__media").data("media-type"));
    if (checkMediaType == "video") {
      $(".hero__media__slider").remove();
      $(".hero__media__video").show();
      heroVideo();
    } else if (checkMediaType == "image") {
      $(".hero__media__video").remove();
      $(".hero__media__slider").show();
      heroImage();
    } else {
      $(".hero__media__video").remove();
      $(".hero__media__slider").show();
      heroImage();
    }
  }
  heroMediaCheck();

  // Search Suggest
  function quickSearchSuggest() {
    $("#qs_suggest").each(function(i) {
      $(".mls-loading-results").hide();
      $(this).magicSuggest({
        hideTrigger: true,
        minChars: 2,
        maxSuggestions: 100,
        allowFreeEntries: true,
        placeholder: "Search by MLS # or Address",
        maxSelection: 15,
        inputCfg: { autocomplete: "true" },
        name: "data[Listing][mlsnumbers]",
        data: "/listings/ajax_mlsdata",
        displayField: "name",
        renderer: function(a) {
          if (typeof a.display == "undefined" || a.display == "") {
            return a.id;
          } else {
            return a.display;
          }
        },
        selectionRenderer: function(a) {
          if (typeof a.display == "undefined" || a.display == "") {
            return a.id;
          } else {
            return a.display;
          }
        }
      });
      $(this).on("beforeload", function() {
        $(".mls-loading-results").show();
      });

      $(this).on("load", function() {
        $(".mls-loading-results").hide();
      });
    });
  }
  quickSearchSuggest();

  // Mobile Search Suggest
  function mobileQuickSearchSuggest() {
    var width = $(window).width();

    if (width <= 991) {
      $(window).scroll(function(e) {
        e.preventDefault();
        var x = $(this).scrollTop();
        if (x >= 50) {
          $(".mls-search").addClass("mls-search-hide");
        } else {
          $(".mls-search").removeClass("mls-search-hide");
        }
      });
    }
  }
  mobileQuickSearchSuggest();

  $(window).resize(function() {
    mobileQuickSearchSuggest();
  });

  // Quicksearch Single Select
  $(".qs-single-select").selectize({
    create: false,
    hideSelected: true,
    allowEmptyOption: true,
    placeholder: $(this).data("placeholder")
  });

  // Quicksearch Multiple Select
  $("#qs_form .multi-select.placeholder").remove();
  $("#qs_form .multi-select").show();
  $("#qs_form .multi-select").multipleSelect({
    minimumCountSelected: 2,
    placeholder: $(this).data("placeholder"),
    selectAll: $(this).data("select-all")
  });

  /* Gene Carter Quick Search */
  /*function quickSearchSubdivisions() {
        $('.qs_searchsubs').each(function (i) {
            $(this).selectize({
                plugins: ['remove_button'],
                valueField: 'id',
                labelField: 'name',
                searchField: ['name'],
                create: false,
                openOnFocus: true,
                maxOptions: 1000,
                maxItems: 30,
                loadThrottle: 500,
                render: {
                    option: function(item, escape) {
                        return '<div class="col-xs-12 ms-res-item">' + escape(item.name) + '</div>';
                    }
                },
                load: function(query, callback) {
                    if(!query.length) { return callback(); }
                    $.ajax({
                            url: '/listings/grab_subdivisions/',
                            data: {
                                q: query
                            },
                            error: function() {
                                    callback();
                            },
                            success: function(res) {
                                    callback(res);
                            }
                    });
                }
            });
            $(this).change(function() {
                if($('option', this).length > 0){ 
                    console.log('has items'); 
                    $('#qs_form #qs_propclass').val('1').prop('disabled', true).parent().css('opacity','0.6');
                    $('#qs_form #qs_proparea').prop('disabled', true).parent().css('opacity','0.6');
                    $('#qs_form #qs_proparea option:first').text('All Locations');
                    $('#qs_form #qs_submit').val('').prop('disabled', false);
                } else {
                    console.log('empty');
                    $('#qs_form #qs_propclass').val('').prop('disabled', false).parent().removeAttr('style');
                    $('#qs_form #qs_proparea').prop('disabled', false).parent().removeAttr('style')
                    $('#qs_form #qs_proparea option:first').text('Area');
                    if($('#qs_form #qs_propclass').val() == '') {
                        $('#qs_form #qs_submit').val('').prop('disabled', true);
                    }
                }
                quickSearchLoad();
            });
        });
    }
    quickSearchSubdivisions();
    function geneCarterQuickSearch() {
        function quickSearchLoad() {
        	"use strict";
            const propClass = $('#qs_propclass');
            const submitButton = $('#qs_submit');
            if (propClass.val() != '') {
                submitButton.prop('disabled', false);
                submitButton.on('click', function () {
                    $('#qs_form').submit();
                });
            } else {
                submitButton.prop('disabled', true);
            }
            const locationSelect = document.querySelector('#qs_proplocation');
            const locationContainer = document.querySelector('.ftr_lot_location');
            const locationReset = () => {
                locationSelect.options.length = 0;
            }
            const newConstructionSelect = document.querySelector('#qs_propnewConstruction');
            const newConstructionContainer = document.querySelector('.ftr_construction');
            const newConstructionReset = () => {
                newConstructionSelect.options.length = 0;
            }
            locationReset();
            newConstructionReset();
            if (propClass.val() == '1' || propClass.val() == '2') {
                //$(locationContainer).show();
                locationSelect.innerHTML += (`
                    <option>All Locations</option>
                    <option value="5366">Adult Community 55+</option>
                    <option value="5354">Channel</option>
                    <option value="5881">East Of Business 17</option>
                    <option value="5352,5353">Golf Course Community</option>
                    <option value="5356,5361">Intracoastal Waterway Community</option>
                    <option value="5351">Inlet/Creek</option>
                    <option value="7756">Lake/Pond</option>
                    <option value="5365">Ocean Front</option>
                    <option value="5358">Ocean View</option>
                    <option value="5360">Second Row Beach</option>
                `);
                //$(newConstructionContainer).show();
                newConstructionSelect.innerHTML += (`
                    <option value="6319">Never Occupied</option>
                    <option value="8284">Never Sold - previously Occupied</option>
                    <option value="6320">To Be Built</option>
                    <option value="6510">Under Construction</option>
                    <option value="6318">Resale</option>
                `);
            } else if (propClass.val() == '3') {
                //$(locationContainer).show();
                locationSelect.innerHTML += (`
                    <option>All Locations</option>
                    <option value="5366">Adult Community 55+</option>
                    <option value="5354">Channel</option>
                    <option value="5881">East Of Business 17</option>
                    <option value="5352,5353">Golf Course Community</option>
                    <option value="5356,5361">Intracoastal Waterway Community</option>
                    <option value="5351">Inlet/Creek</option>
                    <option value="7756">Lake/Pond</option>
                    <option value="5365">Ocean Front</option>
                    <option value="5358">Ocean View</option>
                    <option value="5360">Second Row Beach</option>
                `);
                //$(newConstructionContainer).hide();
            } else if (propClass.val() == '4') {
                //$(locationContainer).show();
                locationSelect.innerHTML += (`
                    <option>All Locations</option>
                    <option value="5354">Channel</option>
                    <option value="5881">East Of Business 17</option>
                    <option value="5352,5353">Golf Course Community</option>
                    <option value="5356,5361">Intracoastal Waterway Community</option>
                    <option value="5351">Inlet/Creek</option>
                    <option value="7756">Lake/Pond</option>
                    <option value="5365">Ocean Front</option>
                    <option value="5358">Ocean View</option>
                    <option value="5360">Second Row Beach</option>
                `);
                //$(newConstructionContainer).hide();
            } else {
                //$(locationContainer).hide();
                //$(newConstructionContainer).hide();
            }
            $(locationSelect).multipleSelect('refresh');
            $(newConstructionSelect).multipleSelect('refresh');
        }
        quickSearchLoad();

        $('#qs_propclass').on('change', function (e) {
            e.preventDefault();
            e.stopPropagation();
            quickSearchLoad();
        });
    }
    geneCarterQuickSearch();*/
});
