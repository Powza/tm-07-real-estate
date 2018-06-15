<div class="hero__media__slider">
    <div class="slider">
        <div class="item" style="background-image: url('img/tm-07/hero/slider/1.jpg');"></div>
        <div class="item" style="background-image: url('img/tm-07/hero/slider/2.jpg');"></div>
        <div class="item" style="background-image: url('img/tm-07/hero/slider/3.jpg');"></div>
        <div class="item" style="background-image: url('img/tm-07/hero/slider/4.jpg');"></div>
    </div>
    <script>
        $(function() {
            $('.hero__media__slider .slider').slick({
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