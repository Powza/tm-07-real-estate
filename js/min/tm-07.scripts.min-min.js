$(function(){function e(){function e(){var e=$(this).scrollTop();Math.abs(i-e)<=r||(e>i&&e>a?$(".header__meta").css({opacity:"0",transform:"translateY(-100%)"}):e+$(window).height()<$(document).height()&&$(".header__meta").css({opacity:"1",transform:"translateY(0)"}),i=e)}var o,i=0,r=46,a=$("header").outerHeight();$(window).scroll(function(e){o=!0}),setInterval(function(){o&&(e(),o=!1)},0)}function o(){$("body.int").css("padding-top",$(".header").height()+"px")}function i(){var e=['iframe[src*="player.vimeo.com"]','iframe[src*="youtube.com"]','iframe[src*="youtube-nocookie.com"]','iframe[src*="kickstarter.com"][src*="video.html"]','iframe[src*="screenr.com"]','iframe[src*="blip.tv"]','iframe[src*="dailymotion.com"]','iframe[src*="viddler.com"]','iframe[src*="qik.com"]','iframe[src*="revision3.com"]','iframe[src*="hulu.com"]','iframe[src*="funnyordie.com"]','iframe[src*="flickr.com"]','embed[src*="v.wordpress.com"]'],o=e.join(",");$(o).wrap('<span class="fluid-video" />')}svg4everybody(),$(".header #main_navigation").smartmenus(),$(".mobile-menu #main_navigation").smartmenus(),$(".header__mobile-menu-btn").click(function(e){e.preventDefault(),$(".mobile-menu").toggleClass("mobile-menu__open"),$("body").toggleClass("mobile-menu-open"),$(this).toggleClass("open")}),$(window).scroll(function(){var e=$(this).scrollTop(),o=$(".start-scroll").position();e>$("header").outerHeight()?$(".header__meta").addClass("fixed"):$(".header__meta").removeClass("fixed")}),e(),$(window).resize(function(){o()}),o(),i(),$('[data-toggle="tooltip"]').tooltip({delay:{show:500,hide:122200}}),$(".section__lazyload").Lazy()});