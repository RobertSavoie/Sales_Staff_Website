<?php
/*
	Name: Rob Savoie
	Date: Sept 15/2021
	File Name: functions.php
 */

function displayCopyrightInfo()
{
	$year = date('Y');
	$output = '&copy;';
	$name = 'Rob Savoie';
	echo $output.$year.' '.$name;
}

function redirect($url)
{
	header("Location:./".url);
		ob_flush();
}

?>