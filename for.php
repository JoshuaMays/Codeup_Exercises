<?php

// Asking for and setting a lower bound.
fwrite(STDOUT, "Please enter a starting number: ");
$start = trim(fgets(STDIN));

// Asking for and setting an upper bound.
fwrite(STDOUT, "Now enter an ending number: ");
$end = trim(fgets(STDIN));

// Make sure that the upper and lower bounds are numbers
// if not, print an error message.
while (!is_numeric($start) || !is_numeric($end)) {
	fwrite(STDOUT,"It doesn't look like you're giving me numbers.\n" 
				. "Please try again.\n");
	
	fwrite(STDOUT, "Enter a starting number: ");
	$start = trim(fgets(STDIN));

	fwrite(STDOUT, "Now enter an ending number: ");
	$end = trim(fgets(STDIN));
}

fwrite(STDOUT, "Enter an incrementer: ");
$incrementer = trim(fgets(STDIN));

if (!$incrementer) {
	$incrementer = 1;
}

for ($i = $start; $i <= $end; $i+=$incrementer) {
	fwrite(STDOUT,"$i\n");
}

?>