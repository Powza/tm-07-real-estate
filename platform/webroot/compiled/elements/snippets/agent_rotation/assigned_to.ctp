<?php
/*
 +---------------------------------------------------------------------------------------------------+
 + $Id: admin_help.ctp 47 2008-05-19 10:57:20Z chrome $
 + Last Modified: $Date: 2008-05-19 06:57:20 -0400 (Mon, 19 May 2008) $
 + Version: $Revision: 47 $
 + Modified By: $LastChangedBy: chrome $
 +---------------------------------------------------------------------------------------------------+
*/
$my_aa_main = $session->read('MY_ASSIGNED_AGENT');
$my_aa_alt = $session->read('AgentPortal.assigned');
$agent_extract = '';

if(isset($assigned_agent_snippet) && !empty($assigned_agent_snippet)) 
{
	if(!empty($my_aa_main))
	{
		$agent_extract = Set::extract($assigned_agent_snippet, '/Agent[id='.$my_aa_main.']');
		$agent_extract = $agent_extract[0];
	}
	elseif(!empty($my_aa_alt)) 
	{
		$agent_extract = Set::extract($assigned_agent_snippet, '/Agent[id='.$my_aa_alt.']');
		$agent_extract = $agent_extract[0];	
	}
	else
	{
	}
	
	if(!empty($agent_extract))
	{
		$fullname = $agent_extract['Agent']['firstname'].' '. $agent_extract['Agent']['lastname'];
		$agentbio = substr($agent_extract['Agent']['bio'], 0, 150);
		$agentNameLower = str_replace(' ', '-', strtolower($fullname));
	?>
    
	 <script>
		$(function() {
			$('.agent-portal').remove();

			// Header
			$('.header__contact').append('\
				<ul>\
					<?php if(!empty($agent_office_phone) && empty($agent_cell_phone) || !empty($agent_office_phone) && !empty($agent_cell_phone)) { ?>
                    <li>\
                    	<a href="tel:<?php echo $agent_office_phone; ?>">\
	                    	<svg role="img" title="Phone">\
	                            <use xlink:href="/img/tm-07/icon-pack.svg#phone"></use>\
	                        </svg>\
	                    	<span class="hidden-xs"><?php echo $agent_office_phone; ?></span>\
                    	</a>\
                    </li>\
                    <?php } ?>
                    <?php if(empty($agent_office_phone) && !empty($agent_cell_phone)) { ?>
                   	<li>\
                   		<a href="tel:<?php echo $agent_cell_phone; ?>">\
                   			<svg role="img" title="Phone">\
	                            <use xlink:href="/img/tm-07/icon-pack.svg#phone"></use>\
	                        </svg>\
                   			<span class="hidden-xs"><?php echo $agent_cell_phone; ?></span>\
                   		</a>\
                   	</li>\
                    <?php } ?>
					<li>\
						<a href="<?php echo $html->url(array('controller'=>'agents','action'=>'view', $agent_extract['Agent']['slug'])); ?>#contact" class="btn btn-primary">\
							<svg role="img" title="Email">\
	                            <use xlink:href="/img/tm-07/icon-pack.svg#email"></use>\
	                        </svg>\
							<span class="hidden-xs">Email</span>\
						</a>\
					</li>\
				</ul>\
			');

			// Footer
			$('.footer .contact-info').append('\
				<address>\
					<dl class="dl-horizontal">\
						<dt>\
							<svg role="img" title="Address">\
                                <use xlink:href="/img/tm-07/icon-pack.svg#address"></use>\
                            </svg>\
						</dt>\
						<dd>\
							<?php echo $agent_extract['Agent']['address1']; ?><br>\
							<?php echo if(!empty($agent_extract['Agent']['address2'])) { echo $agent_extract['Agent']['address2'].'<br>'; }; ?>
							<?php echo $agent_extract['Agent']['city']; ?>, <?php echo $agent_extract['Agent']['state']; ?> <?php echo $agent_extract['Agent']['zip']; ?>
						</dd>\
						<?php if(empty($agent_extract['Agent']['office_phone']) && empty($agent_extract['Agent']['cell_phone'])) { ?>
						<?php } else { ?>
						<dt>\
							<svg role="img" title="Phone">\
                                <use xlink:href="/img/tm-07/icon-pack.svg#phone"></use>\
                            </svg>\
						</dt>\
						<dd>\
							<?php if(!empty($agent_extract['Agent']['office_phone'])) { echo '<a href="tel:'.$agent_extract['Agent']['office_phone'].'">Office: '.$agent_extract['Agent']['office_phone'].'</a><br>';  } ?>
							<?php if(!empty($agent_extract['Agent']['cell_phone'])) { echo '<a href="tel:'.$agent_extract['Agent']['cell_phone'].'">Cell: '.$agent_extract['Agent']['cell_phone'].'</a>';  } ?>
						</dd>\
						<?php } ?>
						<dt>\
							<svg role="img" title="Email">\
                                <use xlink:href="/img/tm-07/icon-pack.svg#email"></use>\
                            </svg>\
						</dt>\
						<dd><?php echo '<a href="'.$html->url(array('controller'=>'agents','action'=>'view', $agent_extract['Agent']['slug'])).'">Send an Email</a>'; ?></dd>\
					</dl>\
				</address>\
			');

			// Social
			$('.footer .social').append('\
				<ul>\
					<?php if(!empty($agent_extract['Agent']['facebook_user'])) { ?>
					<li><a href="https://facebook.com/<?php echo $agent_extract['Agent']['facebook_user']; ?>" class="social-facebook" target="_blank">Facebook</a></li>\
					<?php } ?>
					<?php if(!empty($agent_extract['Agent']['twitter_user'])) { ?>
					<li><a href="https://twitter.com/<?php echo $agent_extract['Agent']['twitter_user']; ?>" class="social-twitter" target="_blank">Twitter</a></li>\
					<?php } ?>
					<?php if(!empty($agent_extract['Agent']['instagram_user'])) { ?>
					<li><a href="https://instagram.com/<?php echo $agent_extract['Agent']['instagram_user']; ?>" class="social-instagram" target="_blank">Instagram</a></li>\
					<?php } ?>
					<?php if(!empty($agent_extract['Agent']['linkedin_user'])) { ?>
					<li><a href="http://www.linkedin.com/in/<?php echo $agent_extract['Agent']['linkedin_user']; ?>" class="social-linkedin" target="_blank">LinkedIn</a></li>\
					<?php } ?>
					<?php if(!empty($agent_extract['Agent']['googleplus_user'])) { ?>
					<li><a href="<?php echo $agent_extract['Agent']['googleplus_user']; ?>" class="social-googleplus" target="_blank">Google Plus</a></li>\
					<?php } ?>
				</ul>\
			');

		});
	</script>
    
	<?php
	}
}

?>