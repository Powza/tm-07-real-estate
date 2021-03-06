<?php
	if(isset($random_agents) && !empty($random_agents))
	{
?>
    <div class="row slider-wrap">
	    <?php
	        foreach ($random_agents as $agent)
	        {
	            $fullname = $agent['Agent']['firstname'].' '. $agent['Agent']['lastname'];
	            $first_letter_lastname = strtolower(substr(trim($agent['Agent']['lastname']), 0, 1));
	            $agent_personal_url = !empty($agent['Agent']['personal_url']);
	            $agent_image = $agent['Agent']['image'];
	            $agent_profile = $html->url(array('controller'=>'agents','action'=>'view', $agent['Agent']['slug']));
	            $agent_title = $agent['Agent']['title'];
	            $agent_string = $agent['Agent']['id'];
	            $agent_office_phone = $agent['Agent']['office_phone'];
                $agent_cell_phone = $agent['Agent']['cell_phone'];
                $agent_fax_phone = $agent['Agent']['fax'];
                $agent_tollfree_phone = $agent['Agent']['tollfree_phone'];
                $agent_name_selector = strtolower(preg_replace('/\s+/', '', $agent['Agent']['firstname'])).'-'.strtolower(preg_replace('/\s+/', '', $agent['Agent']['lastname']));
	    ?>
	    <div class="agent <?php echo $agent_name_selector; ?>">
	    	<div class="agent__wrap">
		        <div class="agent__pic">
		        	<a href="<?php echo $agent_profile; ?>">
			            <?php
			                if(!empty($agent_image)){
			                	if(!empty($agent['Agent']['lastname'])) {
									$imgPath = $first_letter_lastname.'/'.$agent_string.'/';
								} else {
									$imgPath = 'other/'.$agent_string.'/';
								}
								echo '<div class="agent__img lazy" data-bg="url('.$html->url('/files/images/agents/'.$imgPath.$agent['Agent']['image']).')"></div>';
			                }
			                else {
                                echo '<div class="agent__img" style="background-image: url(data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22342%22%20height%3D%22249.99999999999997%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20342%20249.99999999999997%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16ea406947d%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A17pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16ea406947d%22%3E%3Crect%20width%3D%22342%22%20height%3D%22249.99999999999997%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22152.890625%22%20y%3D%22106.79999999999998%22%3ENo%3C%2Ftext%3E%3Ctext%20x%3D%22135.25%22%20y%3D%22132.79999999999998%22%3EImage%3C%2Ftext%3E%3Ctext%20x%3D%22118.6640625%22%20y%3D%22158.79999999999998%22%3EAvailable%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E);"></div>';
                            }
			            ?>
				        <div class="agent__meta">
                            <div class="agent__name" data-agent-id="<?php echo $agent_string; ?>"><?php echo $fullname; ?></div>
                            <div class="agent__title"><?php echo $agent_title; ?></div>
                        </div>
			        </a>
		        </div>
		        <div class="agent__content">
                    <ul>
                        <?php if(!empty($agent_office_phone)) { ?>
                        <li>
                            <a href="tel:<?php echo $agent_office_phone; ?>">
                                <svg role="img" title="Phone">
                                    <use xlink:href="/img/tm-07/icon-pack.svg#phone"></use>
                                </svg>
                                <strong>Office</strong> <?php echo $agent_office_phone; ?>
                            </a>
                        </li>
                        <?php } ?>
                        <?php if(!empty($agent_cell_phone)) { ?>
                        <li>
                            <a href="tel:<?php echo $agent_cell_phone; ?>">
                                <svg role="img" title="Cell Phone">
                                    <use xlink:href="/img/tm-07/icon-pack.svg#phone-cell"></use>
                                </svg>
                                <strong>Cell</strong> <?php echo $agent_cell_phone; ?>
                            </a>
                        </li>
                        <?php } ?>
                        <?php if(!empty($agent_fax_phone)) { ?>
                        <li>
                            <a href="tel:<?php echo $agent_fax_phone; ?>">
                                <svg role="img" title="Fax Phone">
                                    <use xlink:href="/img/tm-07/icon-pack.svg#phone-fax"></use>
                                </svg>
                                <strong>Fax</strong> <?php echo $agent_fax_phone; ?>
                            </a>
                        </li>
                        <?php } ?>
                        <?php if(!empty($agent_tollfree_phone)) { ?>
                        <li>
                            <a href="tel:<?php echo $agent_tollfree_phone; ?>">
                                <svg role="img" title="Phone">
                                    <use xlink:href="/img/tm-07/icon-pack.svg#phone"></use>
                                </svg>
                                <strong>Toll Free</strong> <?php echo $agent_tollfree_phone; ?>
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                    <div class="agent__bottom">
                        <a class="agent__contact btn btn__primary" href="<?php echo $agent_profile; ?>">
                            <svg role="img" title="Email">
                                <use xlink:href="/img/tm-07/icon-pack.svg#email"></use>
                            </svg>
                            Email Me
                        </a>
                    </div>
                </div>
		    </div>
	    </div>
	    <?php
			}
		?>
	</div>
	<?php
	} else {
		echo '<p>No agents found</p>';
	}
?>