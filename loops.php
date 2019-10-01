<?php

	// for, while, do while, forEach

	$people = array('Brad', 'Jose', 'William');

//	foreach ($people as $person) {
//		echo $person;
//		echo '<br>';
//	}
//

	$people = array('Brad' => 'brad@thandotec.com', 'Jose' => 'jose@thandotec.co.za', 'William' => 'bill@minitec.co.za');

	foreach ($people as $person => $email) {
		echo $person.': '.$email;
		echo '<br>';
	}