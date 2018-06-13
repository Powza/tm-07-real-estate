<div class="post-slider">
    <div class="post">
        <div class="post-wrap">
            <article>
                <div class="post-pic">
                    <a href="<?php echo $post_url; ?>">
                        <div class="post-img">
                            <img src="https://cdn.resize.sparkplatform.com/somo/1024x768/true/20180512144019304369000000-o.jpg">
                        </div>
                    </a>
                </div>
                <div class="post-content">
                    <div class="post-meta">May 30, 2018</div>
                    <h3 class="post-title"><a href="">Jimmy Fallon’s 8 Best Hosting Moments of All Time</a></h3>
                    <p>Nulla vitae elit libero, a pharetra augue. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus...</p>
                    <a href="" class="btn btn__primary__outline">View Post</a>
                </div>
            </article>
        </div>
    </div>
    <div class="post">
        <div class="post-wrap">
            <article>
                <div class="post-pic">
                    <a href="<?php echo $post_url; ?>">
                        <div class="post-img">
                            <img src="https://cdn.resize.sparkplatform.com/somo/1024x768/true/20180512144019304369000000-o.jpg">
                        </div>
                    </a>
                </div>
                <div class="post-content">
                    <div class="post-meta">May 30, 2018</div>
                    <h3 class="post-title"><a href="">Jimmy Fallon’s 8 Best Hosting Moments of All Time</a></h3>
                    <p>Nulla vitae elit libero, a pharetra augue. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus...</p>
                    <a href="" class="btn btn__primary__outline">View Post</a>
                </div>
            </article>
        </div>
    </div>
    <div class="post">
        <div class="post-wrap">
            <article>
                <div class="post-pic">
                    <a href="<?php echo $post_url; ?>">
                        <div class="post-img">
                            <img src="https://cdn.resize.sparkplatform.com/somo/1024x768/true/20180512144019304369000000-o.jpg">
                        </div>
                    </a>
                </div>
                <div class="post-content">
                    <div class="post-meta">May 30, 2018</div>
                    <h3 class="post-title"><a href="">Jimmy Fallon’s 8 Best Hosting Moments of All Time</a></h3>
                    <p>Nulla vitae elit libero, a pharetra augue. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus...</p>
                    <a href="" class="btn btn__primary__outline">View Post</a>
                </div>
            </article>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.post-slider').slick({
            dots: false,
            infinite: true,
            speed: 500,
            slidesToShow: 3,
            slidesToScroll: 3,
            rows:1,
            arrows: true,
            prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-angle-left"></i> Prev</button>',
            nextArrow: '<button type="button" class="slick-next">Next <i class="fa fa-angle-right"></i></button>',
            appendArrows: $('<div></div>').addClass('section__slider-arrows').css({'float': 'right'}).appendTo('.blog-posts .section__title'),
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
        $('.post-slider .post-img').imgLiquid({fill:true});
    });
</script>