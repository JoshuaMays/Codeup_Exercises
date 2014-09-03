<?php

$test = 5;

// Keep looping until $test reaches 15.
while ($test <= 15) {
	echo $test . PHP_EOL;
	$test++;
	usleep(750000);
}

?>
