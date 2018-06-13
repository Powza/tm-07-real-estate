<?php

// query conditions
$fl_cond['conditions'] = array();
$fl_cond['conditions']['AgentTestimonial.active'] = 1;

$agentTestimonials = $this->requestAction('/snippets/get_testimonials', array(
  'named' => $fl_cond,
  'limit' => 12,
));

$total_testimonials = 0;

if(isset($agentTestimonials) && !empty($agentTestimonials))
{
  $total_testimonials = count($agentTestimonials);

?>
<div class="testimonials-slider">
    <div class="slider-wrap">
        <?php
        shuffle($agentTestimonials);
        foreach($agentTestimonials as $testimonial) {
            $agentName = $testimonial['Agent']['firstname'].' '. $testimonial['Agent']['lastname'];
        ?>
        <blockquote>
            <p><?php echo $testimonial['AgentTestimonial']['body']; ?></p>
            <footer>
                <strong><?php echo $testimonial['AgentTestimonial']['name']; ?></strong><br>
                <small>
                    <a href="/agents/view/<?php echo $testimonial['Agent']['slug']; ?>" title="<?php echo $agentName; ?> Profile">
                        <?php echo $agentName; ?><?php if(!empty($testimonial['Agent']['title'])) { ?> (<?php echo $testimonial['Agent']['title']; ?>)<?php } ?>
                    </a>
                </small>
            </footer>
        </blockquote>
        <?php
        }
        ?>
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
<?php
}
?>