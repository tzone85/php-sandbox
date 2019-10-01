<?php

	# A block of code that can be called repeatedly

	function simpleFunction() {
		echo 'hello world';
	}

//	simpleFunction();

	function sayHallo($name = 'World') {
		echo "Hello $name <br>";
	}

//	sayHallo('Tim');

	function addNumbers($num1, $num2) {
		return $num1 + $num2;
	}

//	echo addNumbers(2, 4);

	// by refeernce

	$myNum = 10;

	function addFive($num) {
		$num += 5;
	}

	function addTen(&$num) {
		$num += 10;
	}

	addFive($myNum);
	echo "Value $myNum<br>";

	addTen($myNum);
	echo "Value $myNum<br>";