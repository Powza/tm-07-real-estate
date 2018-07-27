<?php
/*
** Disclaimer board last updated
*/
?>
<?php
if(isset($disclaimers[0]['Disclaimer']['body']) && !empty($disclaimers[0]['Disclaimer']['body'])) {
	echo $time->format('M j @ g:ia', $disclaimers[0]['Board']['board_last_updated']);
}
?>
<?php echo $time->format('M j @ g:ia', $board['Board']['board_last_updated']); ?>