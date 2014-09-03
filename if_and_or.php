<?php
$x = 0;
$y = 5;
$z = 10;

// Check if $x is less than $y AND if $y is less than $z
if ($x < $y && $y < $z) {
	echo "{$x} < {$y} < {$z}" . PHP_EOL;
}

// Check if $x is either greater than 0 OR less than 10.
if ($x > 0 || $x < 10) {
	echo "$x is greater than 0 OR less than 10." . PHP_EOL;
}

// Check if $y is either greater than 0 OR less than 10.
if ($y > 0 || $y < 10) {
	echo "$y is greater than 0 OR less than 10." . PHP_EOL;
}

// Check if $z is either greater than 0 OR less than 10.
if ($z > 0 || $z < 10) {
	echo "$z is greater than 0 0R less than 10." . PHP_EOL;
}

// If $x is greater than 0 AND less than 10, echo the result as
// a sentence "$x is greater than 0 AND less than 10."

// repeat the if statement for $y and $z

// Check if $x is greater than 10 AND less than 10.
if ($x > 0 && $x < 10) {
	echo "$x is greater than 0 AND less than 10." . PHP_EOL;
}

// Check if $y is greater than 10 AND less than 10.
if ($y > 0 && $y < 10) {
	echo "$y is greater than 0 AND less than 10." . PHP_EOL;
}

// Check if $z is greater than 10 AND less than 10.
if ($z > 0 && $z < 10){
	echo "$z is greater than 10 AND less than 10." . PHP_EOL;
}

?>
