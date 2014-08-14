<?php

fwrite(STDOUT, "Please enter a starting number: ");
$start = trim(fgets(STDIN));
fwrite(STDOUT, "Now enter an ending number: ");
$end = trim(fgets(STDIN));

for ($i = $start; $i <= $end; $i++) {
	fwrite(STDOUT,"$i\n");
}

?>