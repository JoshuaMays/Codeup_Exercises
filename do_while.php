<?php

// Exercise 1
$a = 0;
do {
    echo $a . "\n";
    $a += 2;
  // Check if $a has reached 100 yet.
} while ($a <= 100);


// Exercise 2
$a = 100;

do {
    echo $a . "\n";
    $a -= 5;
  // Check if $a has reached -10 yet.
} while ($a >= -10);


// Exercise 3
$a = 2;

do {
    echo $a . "\n";
    $a *= $a;
  // Check if $a still less than 1000000
} while ($a < 1000000);

?>
