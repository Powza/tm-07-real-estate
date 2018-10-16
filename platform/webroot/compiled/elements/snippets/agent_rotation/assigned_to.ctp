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
		$lastname = strtolower($agent_extract['Agent']['lastname']);
		$first_letter_lastname = substr($lastname, 0, 1); 
	?>
    
	 <script>
		$(function() {
			$('.agent-portal').remove();

			// Header

			// OLD - Phone and Email
			$('.header__contact1').append('\
				<ul>\
					<?php if(!empty($agent_extract['Agent']['office_phone']) && empty($agent_extract['Agent']['cell_phone']) || !empty($agent_extract['Agent']['office_phone']) && !empty($agent_extract['Agent']['cell_phone'])) { ?>
                    <li>\
                    	<a href="tel:<?php echo $agent_extract['Agent']['office_phone']; ?>">\
	                    	<svg role="img" title="Phone">\
	                            <use xlink:href="/img/tm-07/icon-pack.svg#phone"></use>\
	                        </svg>\
	                    	<span class="hidden-xs"><?php echo $agent_extract['Agent']['office_phone']; ?></span>\
                    	</a>\
                    </li>\
                    <?php } ?>
                    <?php if(empty($agent_extract['Agent']['office_phone']) && !empty($agent_extract['Agent']['cell_phone'])) { ?>
                   	<li>\
                   		<a href="tel:<?php echo $agent_extract['Agent']['cell_phone']; ?>">\
                   			<svg role="img" title="Phone">\
	                            <use xlink:href="/img/tm-07/icon-pack.svg#phone"></use>\
	                        </svg>\
                   			<span class="hidden-xs"><?php echo $agent_extract['Agent']['cell_phone']; ?></span>\
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

			// NEW - Name, Phone, Email, Agent Pic
			$('.header__contact').append('\
				<div class="header__agent">\
					<div class="header__agent__info">\
						<a href="/agent" class="hidden-xs hidden-sm">\
							<span class="hidden-xs"><?php echo $fullname; ?></span>\
						</a>\
						<?php if(!empty($agent_extract['Agent']['office_phone']) && empty($agent_extract['Agent']['cell_phone']) || !empty($agent_extract['Agent']['office_phone']) && !empty($agent_extract['Agent']['cell_phone'])) { ?>
						<a href="tel:<?php echo $agent_extract['Agent']['office_phone']; ?>">\
							<svg role="img" title="phone">\
								<use xlink:href="img/tm-07/icon-pack.svg#phone"></use>\
							</svg>\
							<span class="hidden-xs"><?php echo $agent_extract['Agent']['office_phone']; ?></span>\
						</a>\
						<?php } ?>
						<?php if(empty($agent_extract['Agent']['office_phone']) && !empty($agent_extract['Agent']['cell_phone'])) { ?>
							<a href="tel:<?php echo $agent_extract['Agent']['cell_phone']; ?>">\
							<svg role="img" title="phone">\
								<use xlink:href="img/tm-07/icon-pack.svg#phone"></use>\
							</svg>\
							<span class="hidden-xs"><?php echo $agent_extract['Agent']['cell_phone']; ?></span>\
						</a>\
						<?php } ?>
						<a href="<?php echo $html->url(array('controller'=>'agents','action'=>'view', $agent_extract['Agent']['slug'])); ?>#contact">\
							<svg role="img" title="Email">\
								<use xlink:href="img/tm-07/icon-pack.svg#email"></use>\
							</svg>\
							<span class="hidden-xs">Send Email</span>\
						</a>\
					</div>\
					<?php if(!empty($agent_extract['Agent']['image'])) { ?>
					<div class="header__agent__pic">\
						<a href="<?php echo $html->url(array('controller'=>'agents','action'=>'view', $agent_extract['Agent']['slug'])); ?>" style="background-image:url(\'/files/images/agents/<?php echo $first_letter_lastname .'/'. $agent_extract['Agent']['id'] .'/thumb.small.'. $agent_extract['Agent']['image']; ?>\')"></a>\
					</div>\
					<?php } ?>
				</div>\
			');

			// Sidebar
			$('.sidebar').prepend('\
				<div class="sidebar__widget sidebar__agent">\
					<h4><?php echo $fullname; ?></h4>\
					<?php if(!empty($agent_extract['Agent']['image'])) { ?>
					<a href="<?php echo $html->url(array('controller'=>'agents','action'=>'view', $agent_extract['Agent']['slug'])); ?>"><img class="section__lazyload" alt="<?php echo $agent_extract['Agent']['firstname'] .' '. $agent_extract['Agent']['lastname']; ?>" data-src="/files/images/agents/<?php echo $first_letter_lastname .'/'. $agent_extract['Agent']['id'] .'/'. $agent_extract['Agent']['image']; ?>"></a>\
					<p>\
					<?php } ?>
					<?php if(!empty($agent_extract['Agent']['office_phone'])) { ?>
					<a href="tel:<?php echo $agent_extract['Agent']['office_phone']; ?>"><?php echo $agent_extract['Agent']['office_phone']; ?> Office</a><br>\
					<?php } ?>
					<?php if(!empty($agent_extract['Agent']['cell_phone'])) { ?>
					<a href="tel:<?php echo $agent_extract['Agent']['cell_phone']; ?>"><?php echo $agent_extract['Agent']['cell_phone']; ?> Cell</a><br>\
					<?php } ?>
					<a href="<?php echo $html->url(array('controller'=>'agents','action'=>'view', $agent_extract['Agent']['slug'])); ?>#contact"><?php echo $agent_extract['Agent']['email']; ?></a>\
					</p>\
					<a href="<?php echo $html->url(array('controller'=>'agents','action'=>'view', $agent_extract['Agent']['slug'])); ?>" class="btn btn-primary">View My Profile</a>\
				</div>\
			');

			// Footer
			$('.footer .contact-info').append('\
				<address>\
					<dl class="dl-horizontal">\
						<dt>\
							<svg role="img" title="Profile">\
                                <use xlink:href="/img/tm-07/icon-pack.svg#profile"></use>\
                            </svg>\
						</dt>\
						<dd>\
							<a href="<?php echo $html->url(array('controller'=>'agents','action'=>'view', $agent_extract['Agent']['slug'])); ?>"><?php echo $fullname ?></a>\
						</dd>\
						<?php if(!empty($agent_extract['Agent']['address1'])) { ?>
						<dt>\
							<svg role="img" title="Address">\
                                <use xlink:href="/img/tm-07/icon-pack.svg#address"></use>\
                            </svg>\
						</dt>\
						<dd>\
							<?php echo $agent_extract['Agent']['address1']; ?><br>\
							<?php if(!empty($agent_extract['Agent']['address2'])) { echo $agent_extract['Agent']['address2'].'<br>'; }; ?>\
							<?php echo $agent_extract['Agent']['city']; ?>, <?php echo $agent_extract['Agent']['state']; ?> <?php echo $agent_extract['Agent']['zip']; ?>\
						</dd>\
						<?php } ?>
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
						<dd><?php echo '<a href="'.$html->url(array('controller'=>'agents','action'=>'view', $agent_extract['Agent']['slug'])).'#contact">'.$agent_extract['Agent']['email'].'</a>'; ?></dd>\
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