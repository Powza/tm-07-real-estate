<?php
	$address_1 = $settings['Setting']['address1'];
	$address_2 = $settings['Setting']['address2'];

	if (!empty($address_1)) {
		echo $address_1;
	}
	if (!empty($address_2)) {
		echo ', ' . $address_2;
	}
?>