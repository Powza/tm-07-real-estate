<?php
/*
** Listing view only
** Does this listing belong to an agent on this site?
*/
if($this->params['controller'] == 'listings' && $this->params['action'] == 'view' && (isset($this->viewVars['class_model']) && !empty($this->viewVars['class_model']))) {
  // class model of listing.. example ScCcarResidential
  $clsModel = $this->viewVars['class_model'];

  // gotta get listing view vars so we can get agent_id
  $listingVars = $this->viewVars['listing'][$clsModel];

  if(isset($listingVars['agent_id']) && !empty($listingVars['agent_id'])) {

    // fields to return, don't change - especially "migrated_images"
    $fields = array(
      'id', 'agent_id', 'firstname', 'lastname', 'slug', 'image', 'address1', 'address2', 'city', 'state', 'zip',
      'tollfree_phone', 'office_phone', 'cell_phone', 'fax', 'email', 'title', 'designations', 'personal_url',
      'twitter_user', 'facebook_user', 'linkedin_user', 'googleplus_user', 'instagram_user', 'migrated_images'
    );

    // do NOT add anymore named parameters to this, agent_id is the only 1 needed.
    $agent = $this->requestAction('/snippets/agent_by_agentid', array(
      'named' => array(
        'agent_id' => $listingVars['agent_id']
      ),
      'fields' => $fields,
    ));
  }
}
?>

<?php if(isset($agent) && !empty($agent)) { ?>
<div class="sidebar__widget sidebar__agentid">
    <?php
        $agent_fullname = $agent['Agent']['firstname'].' '. $agent['Agent']['lastname'];
        $agent_profile_url = $html->url(array('controller'=>'agents','action'=>'view', $agent['Agent']['slug']));
        $agent_title = $agent['Agent']['title'];

        $phone_num = '';
        if(!empty($agent['Agent']['cell_phone'])) {
            $phone_num = $agent['Agent']['cell_phone'];
        } elseif(!empty($agent['Agent']['office_phone'])) {
            $phone_num = $agent_info['Agent']['office_phone'];
        } elseif(!empty($agent_info['Agent']['tollfree_phone'])) {
            $phone_num = $agent_info['Agent']['tollfree_phone'];
        }

        // phone number to display with full extension
        $phone_display = preg_replace('~.*(\d{3})[^\d]{0,7}(\d{3})[^\d]{0,7}(\d{4})(\s*x\s*\d{0,5})?.*~', '($1) $2-$3 $4', $phone_num);

        // phone number for tel: or sms: link
        $phone_tel = preg_replace('~.*(\d{3})[^\d]{0,7}(\d{3})[^\d]{0,7}(\d{4})(\s*x\s*\d{0,5})?.*~', '$1$2$3$4', $phone_num);
        $phone_tel = preg_replace('/[[:blank:]]?x/i', ',', $phone_tel, 1);
    ?>
    <div class="agent-slider">
        <div class="row">
            <div class="agent">
                <div class="agent-wrap">
                    <div class="agent-pic">
                        <a href="<?php echo $agent_profile_url; ?>" title="<?php echo $agent_fullname; ?>">
                            <?php
                            if(!empty($agent['Agent']['image'])) {
                                $img_dir = $global->legacyImageHandler('agents', $agent);
                                if(file_exists(WWW_ROOT.$img_dir['dir'].'thumb.medium.'.$agent['Agent']['image'])) {
                                    echo '<div class="agent-img lazy" data-src="'.$img_dir['dir'].$agent['Agent']['image'].'"></div>';
                                } else {
                                    echo '<div class="agent-img lazy" data-src="holder.js/100px250?text=No \n Image \n Available&amp;auto=true"></div>';
                                }
                            } else {
                                echo '<div class="agent-img lazy" data-src="holder.js/100px250?text=No \n Image \n Available&amp;auto=true"></div>';
                            }
                            ?>
                            <div class="agent-meta">
                                <div class="agent-name"><?php echo $agent_fullname; ?></div>
                                <div class="agent-title"><?php echo $agent_title; ?></div>
                            </div>
                        </a>
                    </div>
                    <div class="agent-content">
                        <div class="pull-left">
                            <ul>
                                <li>
                                    <a href="<?php echo $agent_profile_url; ?>#contact">
                                        <svg role="img" title="Email">
                                            <use xlink:href="/img/tm-07/icon-pack.svg#email"></use>
                                        </svg>
                                        Email Me
                                    </a>
                                </li>
                                <li>
                                    <a href="tel:<?php echo $phone_tel; ?>">
                                        <svg role="img" title="Phone">
                                            <use xlink:href="/img/tm-07/icon-pack.svg#phone"></use>
                                        </svg>
                                        <?php echo $phone_display; ?>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <a href="<?php echo $agent_profile_url; ?>" class="btn btn__primary__outline">View Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
}
?>