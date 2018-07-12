<?php
	if(isset($random_agents) && !empty($random_agents))
	{
?>

	<div class="agent-slider">
	    <div class="row slider-wrap">
		    <?php
		        foreach ($random_agents as $agent)
		        {
		            $fullname = $agent['Agent']['firstname'].' '. $agent['Agent']['lastname'];
		            $lastname = strtolower($agent['Agent']['lastname']);
		            $first_letter_lastname = substr($lastname, 0, 1); 
		            $agent_personal_url = !empty($agent['Agent']['personal_url']);
		            $agent_image = $agent['Agent']['image'];
		            $agent_profile = $html->url(array('controller'=>'agents','action'=>'view', $agent['Agent']['slug']));
		            $agent_title = $agent['Agent']['title'];
		            $agent_string = $agent['Agent']['id'];
		            $agent_office_phone = $agent['Agent']['office_phone'];
		            $agent_cell_phone = $agent['Agent']['cell_phone'];
		    ?>
		    <div class="agent">
		    	<div class="agent-wrap">
			        <div class="agent-pic">
			        	<a href="<?php echo $agent_profile; ?>">
				            <?php 
				                if(!empty($agent_image)){
				                    echo '<div class="agent-img" data-src="'.$html->url('/files/images/agents/'.$first_letter_lastname.'/'.$agent_string.'/'.$agent['Agent']['image']).'"></div>';
				                }
				                else {
				                    echo '<div class="agent-img" style="background-image: url(data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22342%22%20height%3D%22249.99999999999997%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20342%20249.99999999999997%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_163d5d4a2ed%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A17pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_163d5d4a2ed%22%3E%3Crect%20width%3D%22342%22%20height%3D%22249.99999999999997%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22152.8984375%22%20y%3D%22106.79999999999998%22%3ENo%3C%2Ftext%3E%3Ctext%20x%3D%22135.2578125%22%20y%3D%22132.79999999999998%22%3EImage%3C%2Ftext%3E%3Ctext%20x%3D%22118.671875%22%20y%3D%22158.79999999999998%22%3EAvailable%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E);"></div>';
				                }
				            ?>
					        <div class="agent-meta">
	                            <div class="agent-name"><?php echo $fullname; ?></div>
	                            <div class="agent-title"><?php echo $agent_title; ?></div>
	                        </div>
				        </a>
			        </div>
			        <div class="agent-content">
	                    <div class="pull-left">
	                        <ul>
	                            <li>
	                            	<a href="<?php echo $agent_profile; ?>#contact">
	                            		<svg role="img" title="Email">
			                                <use xlink:href="/img/tm-07/icon-pack.svg#email"></use>
			                            </svg>
	                            		Email Me
	                            	</a>
	                            </li>
	                            <?php if(!empty($agent_office_phone) && empty($agent_cell_phone) || !empty($agent_office_phone) && !empty($agent_cell_phone)) { ?>
	                            <li>
	                            	<a href="tel:<?php echo $agent_office_phone; ?>">
	                            		<svg role="img" title="Phone">
			                                <use xlink:href="/img/tm-07/icon-pack.svg#phone"></use>
			                            </svg>
	                            		<?php echo $agent_office_phone; ?>
	                            	</a>
	                            </li>
	                            <?php } ?>
	                            <?php if(empty($agent_office_phone) && !empty($agent_cell_phone)) { ?>
	                           	<li>
	                           		<a href="tel:<?php echo $agent_cell_phone; ?>">
	                           			<svg role="img" title="Phone">
			                                <use xlink:href="/img/tm-07/icon-pack.svg#phone"></use>
			                            </svg>
	                           			<?php echo $agent_cell_phone; ?>
	                           		</a>
	                           	</li>
	                            <?php } ?>
	                        </ul>
	                    </div>
	                    <a href="<?php echo $agent_profile; ?>" class="btn btn__primary__outline" title="View <?php echo $fullname; ?> Profile">View Profile</a>
	                </div>
			    </div>
		    </div>
		    <?php
				}
			?>
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
	<?php
	} else {
		echo '<p>No agents found or setup</p>';
	}
?>