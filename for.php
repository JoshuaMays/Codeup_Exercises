<?php

// Asking for and setting a lower bound.
fwrite(STDOUT, "Please enter a starting number: ");
$start = trim(fgets(STDIN));

// Asking for and setting an upper bound.
fwrite(STDOUT, "Now enter an ending number: ");
$end = trim(fgets(STDIN));

// Set $incrementer value to user input.
fwrite(STDOUT, "Enter an incrementer: ");
$incrementer = trim(fgets(STDIN));
// Make sure that the upper and lower bounds are numbers
// if not, print an error message.
while (!is_numeric($start) || !is_numeric($end)) {
	fwrite(STDOUT,"It doesn't look like you're giving me numbers.\n" 
				. "Please try again.\n");
	// Reset the $start value to user input.
	fwrite(STDOUT, "Enter a starting number: ");
	$start = trim(fgets(STDIN));
	// Reset the $end value to user input.
	fwrite(STDOUT, "Now enter an ending number: ");
	$end = trim(fgets(STDIN));
}

// Set a $incrementer to default value (1) if user input is non-numeric.
if (!is_numeric($incrementer)) {
	$incrementer = 1;
}
// Check if program should increment or decrement.
if ($start <= $end) {
	for ($i = $start; $i <= $end; $i+=$incrementer) {
		fwrite(STDOUT,"$i\n");
	}
} else {
	for ($i = $start; $i >= $end; $i-=$incrementer) {
		fwrite(STDOUT, "$i\n");
    }
}
?>