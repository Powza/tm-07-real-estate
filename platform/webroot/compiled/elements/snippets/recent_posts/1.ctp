<?php
/*
 +---------------------------------------------------------------------------------------------------+
 + $Id: 1.ctp 615 2009-01-12 14:28:20Z chrome $
 + Last Modified: $Date: 2009-01-12 09:28:20 -0500 (Mon, 12 Jan 2009) $
 + Version: $Revision: 615 $
 + Modified By: $LastChangedBy: chrome $
 +---------------------------------------------------------------------------------------------------+
*/
App::import('Helper', array('Text','Time'));
$time =& new TimeHelper;
$text =& new TextHelper;

if($posts) {

	echo '<ul>';
	$result = 0;
	foreach($posts as $post) {
		echo '<li>';
		echo '<a data-toggle="tooltip" data-placement="top" title="'.$post['Blog']['title'].'" href="'.$html->url(array('controller' => 'blogs', 'action' => 'view', 'slug' => $post['Blog']['slug'])).'">'.$post['Blog']['title'].'</a>';
		echo '<small>'.$time->friendlyDate($post['Blog']['start_date']).'</small>';
		echo '</li>';
		$result++;
		if ($result == 3) break;
	}
	if($result > 2) {
		echo '<li><a href="/blog">View More</a></li>';
	}
	echo '</ul>';
} else {
	echo '<p>No posts found</p>';
}
?>