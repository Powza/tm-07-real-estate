$(function(){
// Use listing image as background image
function e(){if($(".listings_view .royalSlider").length){var e=$(".listings_view .royalSlider .rsNavSelected img").attr("src");$(".banner.section__background").css("background-image","url("+e+")")}}
// Sidebar Scoll List Box
function i(){$(".sidebar .sidebar__list-scroll").each(function(e){$(this).attr("id","list"+e),$(".sidebar .sidebar__list-scroll#list"+e+" ul").html($(".sidebar .sidebar__list-scroll#list"+e+" ul li").sort(function(){return Math.random()-.5}))}),$(".sidebar .sidebar__list-scroll .list-slider ul").each(function(e,i){var t="carousel"+e;this.id=t,$(this).slick({vertical:!0,verticalSwiping:!0,slidesToShow:6,slidesToScroll:6,prevArrow:'<button type="button" class="slick-prev btn btn__light__outline"><i class="fa fa-angle-up"></i></button>',nextArrow:'<button type="button" class="slick-next btn btn__light__outline"><i class="fa fa-angle-down"></i></button>',appendArrows:$("<div></div>").addClass("section__slider-arrows").appendTo(".sidebar__list-scroll#list"+e+" h4")})})}
// Homepage Property Slider
function t(){$(".property-slider:not(.sidebar .property-slider)").each(function(e){$(this).attr("id","slide_"+e)}),$(".property-slider:not(.sidebar .property-slider) .slider-wrap").each(function(e,i){var t="carousel_"+e;this.id=t,$(this).slick({slidesToShow:4,slidesToScroll:4,rows:2,prevArrow:'<button type="button" class="slick-prev btn btn__primary__outline"><i class="fa fa-angle-left"></i> Prev</button>',nextArrow:'<button type="button" class="slick-next btn btn__primary__outline">Next <i class="fa fa-angle-right"></i></button>',appendArrows:$("<div></div>").addClass("section__slider-arrows").appendTo($(this).parent()),responsive:[{breakpoint:1680,settings:{slidesToShow:3,slidesToScroll:3}},{breakpoint:992,settings:{slidesToShow:2,slidesToScroll:2}},{breakpoint:767,settings:{slidesToShow:1,slidesToScroll:1}}]})})}
// Sidebar Property Slider
function r(){$(".sidebar .property-slider").each(function(e){$(this).attr("id","sidebar_slide_"+e),$(".sidebar .property-slider#sidebar_slide_"+e+" .slider-wrap").html($(".sidebar .property-slider .item").sort(function(){return Math.random()-.5}))}),$(".sidebar .property-slider .slider-wrap").each(function(e,i){var t="carousel_"+e;this.id=t,$(this).slick({adaptiveHeight:!0,prevArrow:'<button type="button" class="slick-prev btn btn__primary__outline"><i class="fa fa-angle-left"></i> Prev</button>',nextArrow:'<button type="button" class="slick-next btn btn__primary__outline">Next <i class="fa fa-angle-right"></i></button>',appendArrows:$("<div></div>").addClass("section__slider-arrows").appendTo($(this).parent())})})}
// Homepage Agent Slider
function s(){$(".agent-slider .slider-wrap").html($(".agent-slider .slider-wrap .agent").sort(function(){return Math.random()-.5})),$(".agent-slider .agent-img").Lazy({scrollDirection:"vertical"}),$(".agent-slider .slider-wrap").slick({slidesToShow:5,slidesToScroll:5,prevArrow:'<button type="button" class="slick-prev btn btn__primary__outline"><i class="fa fa-angle-left"></i> Prev</button>',nextArrow:'<button type="button" class="slick-next btn btn__primary__outline">Next <i class="fa fa-angle-right"></i></button>',appendArrows:$("<div></div>").addClass("section__slider-arrows").appendTo(".agent-slider"),responsive:[{breakpoint:1680,settings:{slidesToShow:4,slidesToScroll:4}},{breakpoint:1440,settings:{slidesToShow:3,slidesToScroll:3}},{breakpoint:1100,settings:{slidesToShow:3,slidesToScroll:3}},{breakpoint:992,settings:{slidesToShow:2,slidesToScroll:2}},{breakpoint:767,settings:{slidesToShow:1,slidesToScroll:1}}]})}
// RoyalSlider Fullscreen Hide Header
function o(){if($(".listings_view .royalSlider").length){var e=$(".royalSlider").data("royalSlider");e.ev.on("rsEnterFullscreen",function(){$(".header").hide()}),e.ev.on("rsExitFullscreen",function(){$(".header").show()})}}
// Navbar Scroll
function l(){var e=document.querySelector(".header .header__meta"),i;window.location.hash&&e.classList.add("headroom--unpinned"),new Headroom(e,{tolerance:{down:10,up:20},offset:$(".admin-navbar").outerHeight()+$(".header").outerHeight()}).init()}
// Header padding
function a(){$("body.int").css("padding-top",$(".header").height()+"px")}
// Responsive Embed
function n(){var e,i=[
//'iframe[src*="player.vimeo.com"]',
'iframe[src*="youtube.com"]','iframe[src*="youtube-nocookie.com"]','iframe[src*="kickstarter.com"][src*="video.html"]','iframe[src*="screenr.com"]','iframe[src*="blip.tv"]','iframe[src*="dailymotion.com"]','iframe[src*="viddler.com"]','iframe[src*="qik.com"]','iframe[src*="revision3.com"]','iframe[src*="hulu.com"]','iframe[src*="funnyordie.com"]','iframe[src*="flickr.com"]','embed[src*="v.wordpress.com"]'].join(",");$(i).wrap('<span class="fluid-video" />')}
// Homepage Agent Testimonials
function d(){$(".testimonials-slider .slider-wrap").html($(".testimonials-slider blockquote").sort(function(){return Math.random()-.5})),$(".testimonials-slider .slider-wrap").slick({adaptiveHeight:!0,prevArrow:'<button type="button" class="slick-prev btn btn__primary__outline"><i class="fa fa-angle-left"></i> Prev</button>',nextArrow:'<button type="button" class="slick-next btn btn__primary__outline">Next <i class="fa fa-angle-right"></i></button>',appendArrows:$("<div></div>").addClass("section__slider-arrows").appendTo(".testimonials-slider")})}
// Hero Slider
function c(){$(".hero__media__slider .slider").slick({fade:!0,autoplay:!0,autoplaySpeed:1e4,prevArrow:'<button type="button" class="slick-prev"><svg role="img" title="Left Arrow"><use xlink:href="img/tm-07/icon-pack.svg#left-arrow"></use></svg></button>',nextArrow:'<button type="button" class="slick-next"><svg role="img" title="Right Arrow"><use xlink:href="img/tm-07/icon-pack.svg#right-arrow"></use></svg></button>',appendArrows:$("<div></div>").addClass("section__slider-arrows hidden-xs").appendTo(".hero__search__links")})}
// Hero Video
function u(){var e=".hero__video";$(e).YTPlayer({videoURL:$(e).data("video-url"),containment:e,loop:!0,autoPlay:!0,showControls:!1,abundance:0,ratio:"auto",quality:"default",stopMovieOnBlur:!1,playOnlyIfVisible:!0})}
// Check if media type is defind and default if empty
function p(){var e=$.trim($(".hero__media").data("media-type"));"video"==e?($(".hero__media__slider").remove(),$(".hero__media__video").show(),u()):($(".hero__media__video").remove(),$(".hero__media__slider").show(),c())}
// Lazyload
$(".lazy").Lazy({scrollDirection:"vertical",threshold:0}),e(),i(),t(),r(),s(),o(),
// svg4everybody
svg4everybody(),
// SmartMenus
$(".header #main_navigation").smartmenus(),$(".mobile-menu #main_navigation").smartmenus(),
// Mobile Navigation
$(".header__mobile-menu-btn").click(function(e){e.preventDefault(),$(".mobile-menu").toggleClass("mobile-menu__open"),$("body").toggleClass("mobile-menu-open"),$(this).toggleClass("open")}),
// Quicksearch Single Select
$(".qs-single-select").selectize({create:!1,hideSelected:!0,allowEmptyOption:!0,placeholder:$(this).data("placeholder")}),
// Quicksearch Multiple Select
$("#qs_form .multi-select.placeholder").remove(),$("#qs_form .multi-select").show(),$("#qs_form .multi-select").multipleSelect({minimumCountSelected:2,placeholder:$(this).data("placeholder")}),l(),$(window).resize(function(){a()}),a(),n(),
// Enable tooltips
$('[data-toggle="tooltip"]').tooltip({delay:{show:500,hide:500}}),d(),p()});