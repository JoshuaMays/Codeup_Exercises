<?php

function add($a, $b) {
	if(is_numeric($a) && is_numeric($b)) {
		echo $a + $b . PHP_EOL;		
	}
	else {
		echo "ERROR: Must pass numeric values to add()" . PHP_EOL;
	}

}

function subtract($a, $b) {
	if(is_numeric($a) && is_numeric($b)) {
		echo $a - $b . PHP_EOL;		
	}
	else {
		echo "ERROR: Must pass numeric values to subtract()" . PHP_EOL;
	}
}

function multiply($a, $b) {
	if(is_numeric($a) && is_numeric($b)) {
		echo $a * $b . PHP_EOL;		
	}
	else {
		echo "ERROR: Must pass numeric values to multiply()" . PHP_EOL;
	}
}

function divide($a, $b) {
	if(is_numeric($a) && is_numeric($b)) {
		if ($b != 0) {
			echo $a / $b . PHP_EOL;	
		}
		else {
			echo '$a is ' . $a . ' and $b is ' . $b . '. ------ ';
			echo "ERROR: And that's why you never divide by zero!" . PHP_EOL;
		}	
	}
	else {
		echo "ERROR: Must pass numeric values to divide()" . PHP_EOL;
	}
}

function modulus($a, $b) {
	if(is_numeric($a) && is_numeric($b)) {
		if ($b != 0) {
			echo $a % $b . PHP_EOL;	
		}
		else {
			echo '$a is ' . $a . ' and $b is ' . $b . '. ------ ';			
			echo "ERROR: And that's why you never divide by zero!" . PHP_EOL;
		}		
	}
	else {
		echo "ERROR: Must pass numeric values to modulus()" . PHP_EOL;
	}
}

add(1,1);
subtract(39, 2);
multiply(10, 9);
divide(9, 0);
modulus(15, 0);


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