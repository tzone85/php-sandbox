<?php

	/*
	 *  - indexed
	 *  - Associative
	 *  - Multi-dimensional
	 *
	 */

	// indexed

	$people = array('Thando', 'Mncedi', 'Mqwathi');
	$ids = array(22, 44, 66);
	$cars = ['Honda', 'Kia', 'Ford'];
	$cars[] = 'BMW';

//	echo $ids[2];
//	echo $people[2];
//	echo $cars[3];

//	print_r($cars);
//	var_dump($cars);


	$people = array('Brad' => 35, 'Jose' => 30, 'Winnie' => 70);
	$ids = array(22 => 'Brad', 33 => 'Jose', 55 => 'Winnie');

//	echo $people['Brad'];
//	echo $ids[33];

	// Multi-Dimensional

	$cars = array(
		array('Honder', 20, 50),
		array('Mercedeze Benz', 15, 37),
		array('Musdang', 75, 80)
	);

	echo $cars[1][2];