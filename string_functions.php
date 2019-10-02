<?php
	# substr()
	# Returns a portion of a string

//	$output = substr('Hello', 1, 3);
//	$output = substr('Hello', -2);
//	echo $output;

	# strlen()
//	$output = strlen('Hello world');
//	echo $output;

	# strpos()
	# Finds the position of the first occurence of a sub string

//	$output = strpos('Hello Magnifacent Beast', 'c');
//	echo $output;

	# strrpos()
	# Finds the position of the last occurence of a sub string

//	$output = strrpos('Hello Magnifacent Beast', 'e');
//	echo $output;

	# trim()
	# Strips whitespave

//	$text = 'Hello World          ';
//	var_dump($text);

//	$trimmed = trim($text);
//	var_dump($trimmed);

	# strtoupper()
	# Makes everything uppercase

//	$output = strtoupper('Nto ka Mqwathi');
//	echo $output;

	# strtolower()
	# Makes everything uppercase

//	$output = strtolower('Nto ka Mqwathi');
//	echo $output;

	# ucwords()
	# Capitalize every word

//	$output = ucwords('hello world');
//	echo $output;

	# str_replace()
	# Replace all occurences of a search string with a replacement

//	$text = 'Hello world';
//	$output = str_replace('world', 'everyone', $text);
//	echo $output;

	# is_string()
	# check if string

//	$val = 'Hello';
//	$output = is_string($val);
//	echo $output;

//	$values = array(true, false, null, 'abc', 33, '33', 2.2, '', '          	', 0);
//
//	foreach ($values as $value) {
//		if (is_string($value)) {
//			echo "{$value} is a string <br>";
//		}
//	}

	# gzcompress()
	# Compress a string

	$string = 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';

	$compressed = gzcompress($string);
	echo $string."</br></br>";

	echo $compressed."</br></br>";

	$original = gzuncompress($compressed);
	echo $original;
