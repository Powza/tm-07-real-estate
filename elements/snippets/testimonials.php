<div class="testimonials-slider">
    <div class="slider-wrap">
        <blockquote>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
            <footer>
                <strong>Don Ardolino, St. Louis MO</strong><br>
                <small>
                    <a href="/agents/view/tanya-newberry.html" title="Tanya Newberry Profile">
                        Tanya Newberry (Broker Owner)
                    </a>
                </small>
            </footer>
        </blockquote>
        <blockquote>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
            <footer>
                <strong>Don Ardolino, St. Louis MO</strong><br>
                <small>
                    <a href="/agents/view/tanya-newberry.html" title="Tanya Newberry Profile">
                        Tanya Newberry (Broker Owner)
                    </a>
                </small>
            </footer>
        </blockquote>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.testimonials-slider .slider-wrap').html($('.testimonials-slider blockquote').sort(function(){
            return Math.random()-0.5;
        }));
        $('.testimonials-slider .slider-wrap').slick({
            adaptiveHeight: true,
            prevArrow: '<button type="button" class="slick-prev btn btn__primary__outline"><i class="fa fa-angle-left"></i> Prev</button>',
            nextArrow: '<button type="button" class="slick-next btn btn__primary__outline">Next <i class="fa fa-angle-right"></i></button>',
            appendArrows: $('<div></div>').addClass('section__slider-arrows').appendTo('.testimonials-slider'),
        });
    });
</script>