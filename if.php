<?php

$a = 5; 
$b = 10; 
$c = '10';

// Check if $a is less than $b
if ($a < $b) {
    echo "$a is less than $b" . PHP_EOL;
} else {
    echo "$a is greater than $b" . PHP_EOL;
}

// Check if $b is greater than or equal to $c
if ($b >= $c) {
    echo "$b is greater than or equal to $c" . PHP_EOL;
} else {
    echo "$b is less than or equal to $c" . PHP_EOL;
}

// Check if $b and $c are identical
if ($b === $c) {
    echo "$b is identical to $c" . PHP_EOL;
  // Check if $b is equal to $c
} elseif ($b == $c) {
    echo "$b is equal to $c" . PHP_EOL;
  // Check if $b is not identical to $c
} elseif ($b !== $c) {
    echo "$b is not identical to $c" . PHP_EOL;

} else {
    echo "$b is not equal to $c" . PHP_EOL;
} 

?>
