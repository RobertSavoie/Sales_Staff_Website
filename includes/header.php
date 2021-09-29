<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="../css/webd2201.css" /> 
	
	
	<!--
	Author: Rob Savoie 
	Filename: <?php echo $file; ?>
	Date: <?php echo $date; ?>
	Description: <?php echo $description; ?>
	-->
	
	<?php
	require ("../includes/constants.php");
	require ("../includes/db.php");
	require ("../includes/functions.php");
	?>
	<title>WEBD2201 - <?php echo $title; ?></title>
</head>
<body>
<div id="container">
	<div id="header">
		<img src="../images/dpnurple.png" alt="YOUR SITE LOGO ALT" />
		<h1>
			<?php echo $banner; ?>			
		</h1>
	</div>
	<div id="sites">
		<ul>
			<li><a href="http://opentech.durhamcollege.org/pufferd/webd2201/">WEBD2201</a></li>
			<li><a href="http://www.w3schools.com">W3Schools</a></li>
			<li><a href="http://validator.w3.org">XHTML Validator</a></li>
			<li><a href="http://jigsaw.w3.org/css-validator/">CSS Validator</a></li>			
			<li><a href="http://php.net/manual/en/index.php">PHP Manual</a></li>
			<li><a href="http://www.durhamcollege.ca">Durham College</a></li>
			
		</ul>
	</div>
	<div id="content-container">
		<div id="navigation">
			<h3>
				Local Navigation Bar
			</h3>
			<ul>
				<li><a href="./index.php">WEBD3201 Home Page</a></li>
				<li><a href="./sign-in.php">Login Page</a></li>
			</ul>
		</div>
		<div id="content">
		<!-- start of main page content. --> 