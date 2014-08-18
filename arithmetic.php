<?php

function add($a, $b) {
	echo $a + $b . PHP_EOL;
}

function subtract($a, $b) {
	echo $a - $b . PHP_EOL;
}

function multiply($a, $b) {
	echo $a * $b . PHP_EOL;
}

function divide($a, $b) {
	echo $a / $b . PHP_EOL;
}

function modulus($a $b) {
	echo $a % $b . PHP_EOL;
}

add(1,4);
subtract(39, 2);
multiply(10, 5);
divide(9, 3);
modulus(15, 3);


$a = 50;
$b = 12;


add($a, $b);
subtract($a, $b);
multiply($a, $b);
divide($a, $b);
modulus($a, $b);
?>