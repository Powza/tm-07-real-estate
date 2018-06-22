<div class="agent-slider">
    <div class="row slider-wrap">
        <div class="agent">
            <div class="agent-wrap">
                <div class="agent-pic">
                    <a href="<?php echo $prop_url; ?>">
                        <div class="agent-img" data-src="img/tm-07/hero/slider/4.jpg"></div>
                        <div class="agent-meta">
                            <div class="agent-name">John Smith</div>
                            <div class="agent-title">Realtor</div>
                        </div>
                    </a>
                </div>
                <div class="agent-content">
                    <div class="pull-left">
                        <ul>
                            <li>
                                <a href="/agents/view/charlie-gerken.html#contact">
                                    <svg role="img" title="Email">
                                        <use xlink:href="img/tm-07/icon-pack.svg#email"></use>
                                    </svg>
                                    Email Me
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <svg role="img" title="Phone">
                                        <use xlink:href="img/tm-07/icon-pack.svg#phone"></use>
                                    </svg>
                                    (860) 388-7721
                                </a>
                            </li>
                        </ul>
                    </div>
                    <a href="" class="btn btn__primary__outline">View Profile</a>
                </div>
            </div>
        </div>
        <div class="agent">
            <div class="agent-wrap">
                <div class="agent-pic">
                    <a href="<?php echo $prop_url; ?>">
                        <div class="agent-img" data-src="img/tm-07/hero/slider/4.jpg"></div>
                        <div class="agent-meta">
                            <div class="agent-name">John Smith</div>
                            <div class="agent-title">Realtor</div>
                        </div>
                    </a>
                </div>
                <div class="agent-content">
                    <div class="pull-left">
                        <ul>
                            <li>
                                <a href="/agents/view/charlie-gerken.html#contact">
                                    <svg role="img" title="Email">
                                        <use xlink:href="img/tm-07/icon-pack.svg#email"></use>
                                    </svg>
                                    Email Me
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <svg role="img" title="Phone">
                                        <use xlink:href="img/tm-07/icon-pack.svg#phone"></use>
                                    </svg>
                                    (860) 388-7721
                                </a>
                            </li>
                        </ul>
                    </div>
                    <a href="" class="btn btn__primary__outline">View Profile</a>
                </div>
            </div>
        </div>
        <div class="agent">
            <div class="agent-wrap">
                <div class="agent-pic">
                    <a href="<?php echo $prop_url; ?>">
                        <div class="agent-img" data-src="img/tm-07/hero/slider/4.jpg"></div>
                        <div class="agent-meta">
                            <div class="agent-name">John Smith</div>
                            <div class="agent-title">Realtor</div>
                        </div>
                    </a>
                </div>
                <div class="agent-content">
                    <div class="pull-left">
                        <ul>
                            <li>
                                <a href="/agents/view/charlie-gerken.html#contact">
                                    <svg role="img" title="Email">
                                        <use xlink:href="img/tm-07/icon-pack.svg#email"></use>
                                    </svg>
                                    Email Me
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <svg role="img" title="Phone">
                                        <use xlink:href="img/tm-07/icon-pack.svg#phone"></use>
                                    </svg>
                                    (860) 388-7721
                                </a>
                            </li>
                        </ul>
                    </div>
                    <a href="" class="btn btn__primary__outline">View Profile</a>
                </div>
            </div>
        </div>
        <div class="agent">
            <div class="agent-wrap">
                <div class="agent-pic">
                    <a href="<?php echo $prop_url; ?>">
                        <div class="agent-img" data-src="img/tm-07/hero/slider/4.jpg"></div>
                        <div class="agent-meta">
                            <div class="agent-name">John Smith</div>
                            <div class="agent-title">Realtor</div>
                        </div>
                    </a>
                </div>
                <div class="agent-content">
                    <div class="pull-left">
                        <ul>
                            <li>
                                <a href="/agents/view/charlie-gerken.html#contact">
                                    <svg role="img" title="Email">
                                        <use xlink:href="img/tm-07/icon-pack.svg#email"></use>
                                    </svg>
                                    Email Me
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <svg role="img" title="Phone">
                                        <use xlink:href="img/tm-07/icon-pack.svg#phone"></use>
                                    </svg>
                                    (860) 388-7721
                                </a>
                            </li>
                        </ul>
                    </div>
                    <a href="" class="btn btn__primary__outline">View Profile</a>
                </div>
            </div>
        </div>
        <div class="agent">
            <div class="agent-wrap">
                <div class="agent-pic">
                    <a href="<?php echo $prop_url; ?>">
                        <div class="agent-img" data-src="img/tm-07/hero/slider/4.jpg"></div>
                        <div class="agent-meta">
                            <div class="agent-name">John Smith</div>
                            <div class="agent-title">Realtor</div>
                        </div>
                    </a>
                </div>
                <div class="agent-content">
                    <div class="pull-left">
                        <ul>
                            <li>
                                <a href="/agents/view/charlie-gerken.html#contact">
                                    <svg role="img" title="Email">
                                        <use xlink:href="img/tm-07/icon-pack.svg#email"></use>
                                    </svg>
                                    Email Me
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <svg role="img" title="Phone">
                                        <use xlink:href="img/tm-07/icon-pack.svg#phone"></use>
                                    </svg>
                                    (860) 388-7721
                                </a>
                            </li>
                        </ul>
                    </div>
                    <a href="" class="btn btn__primary__outline">View Profile</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function() {
        $('.agent-slider .slider-wrap').html($('.agent-slider .slider-wrap .agent').sort(function(){
            return Math.random()-0.5;
        }));
        $('.agent-slider .agent-img').Lazy({
            scrollDirection: 'vertical'
        });
        $('.agent-slider .slider-wrap').slick({
            slidesToShow: 4,
            slidesToScroll: 4,
            prevArrow: '<button type="button" class="slick-prev btn btn__primary__outline"><i class="fa fa-angle-left"></i> Prev</button>',
            nextArrow: '<button type="button" class="slick-next btn btn__primary__outline">Next <i class="fa fa-angle-right"></i></button>',
            appendArrows: $('<div></div>').addClass('section__slider-arrows').appendTo('.agent-slider'),
            responsive: [
            {
                breakpoint: 1680,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
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
</script>