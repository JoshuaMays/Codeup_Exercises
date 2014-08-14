<?php

fwrite(STDOUT, "Please enter a starting number: ");
$start = trim(fgets(STDIN));

fwrite(STDOUT, "Now enter an ending number: ");
$end = trim(fgets(STDIN));

fwrite(STDOUT, "Enter an incrementer: ");
$incrementer = trim(fgets(STDIN));

for ($i = $start; $i <= $end; $i+=$incrementer) {
	fwrite(STDOUT,"$i\n");
}

?>