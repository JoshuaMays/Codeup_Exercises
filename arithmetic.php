<?php

function divideByZero($a, $b) {
	echo '$a is ' . $a . ' and $b is ' . $b . '. ------ ';
	echo 'ERROR: And that\'s why you never divide by zero!' . PHP_EOL;
}

function nonNumericValues($a, $b) {
	echo '$a is ' . $a . ' and $b is ' . $b . '. ------ ';
	echo 'ERROR: Must pass numeric values to function.' . PHP_EOL;
}


function add($a, $b) {
	if(is_numeric($a) && is_numeric($b)) {
		echo $a + $b . PHP_EOL;		
	}
	else {
		nonNumericValues($a,$b);
	}

}

function subtract($a, $b) {
	if(is_numeric($a) && is_numeric($b)) {
		echo $a - $b . PHP_EOL;		
	}
	else {
		nonNumericValues($a, $b);
	}
}

function multiply($a, $b) {
	if(is_numeric($a) && is_numeric($b)) {
		echo $a * $b . PHP_EOL;		
	}
	else {
		nonNumericValues($a, $b);
	}
}

function divide($a, $b) {
	if(is_numeric($a) && is_numeric($b)) {
		if ($b != 0) {
			echo $a / $b . PHP_EOL;	
		}
		else {
			divideByZero($a, $b);
		}	
	}
	else {
		nonNumericValues($a, $b);
	}
}

function modulus($a, $b) {
	if(is_numeric($a) && is_numeric($b)) {
		if ($b != 0) {
			echo $a % $b . PHP_EOL;	
		}
		else {
			divideByZero($a, $b);
		}		
	}
	else {
		nonNumericValues($a, $b);
	}
}

add(1,1);
subtract(39, 'alphabet');
multiply(10, 9);
divide(9, 0);
modulus(15, 2);


$a = 50;
$b = 12;
$c = 100;
$d = 3;



add($a, $c);
subtract($a, $b);
multiply($c, $b);
divide($a, $d);
modulus($a, $b);
?>