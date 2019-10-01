<?php
//	echo date('d'); // day
//	echo date('Y'); // month
//	echo date('Y'); // year
//	echo date('7'); // day of the week

//	echo date('m-d-Y');
//	echo date('m/d/Y');

//echo date('h'); // hour
//echo date('i'); // min
//echo date('s'); // seconds
//echo date('a'); // AM or PM

	date_default_timezone_set('Africa/Johannesburg');
//	echo date('h:i:s a');
//
	$timestamp = mktime(10, 14, 45, 9, 7, 1980);
//	echo $timestamp;

//	echo date('m/d/y h:i:s a', $timestamp);

//	$timestamp2 = strtotime('7:00pm March 2019');
	$timestamp3 = strtotime('tomorrow');
	$timestamp4 = strtotime('next Sunday');
	$timestamp5 = strtotime('+2 Months');
//	echo $timestamp2;

//	echo date('m/d/y h:i:s a', $timestamp2);
	echo date('m/d/y h:i:s a', $timestamp5);