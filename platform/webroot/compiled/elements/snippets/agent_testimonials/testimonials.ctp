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
<?php
} else {
    echo '<p>No agent testimonials found</p>';
}
?>