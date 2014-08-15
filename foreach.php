<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

// foreach ($things as $thing) {
// 	if (is_array($thing)) {
// 		echo "\$thing is an array.\n";
// 	} elseif (is_bool($thing)) {
// 		echo "\$thing is a boolean.\n";
// 	} elseif (is_float($thing)) {
// 		echo "\$thing is a float.\n";
// 	} elseif (is_int($thing)) {
// 		echo "\$thing is an int.\n";
// 	} elseif (is_null($thing)) {
// 		echo "\$thing is a null value.\n";
// 	} elseif (is_string($thing)) {
// 		echo "\$thing is a string.\n";
// 	}
// }

// foreach ($things as $thing) {
// 	if (is_scalar($thing)) {
// 		if (is_float($thing)) {
// 			echo "\$thing is a float.\n";
// 		} elseif (is_int($thing)) {
// 			echo "\$thing is an int.\n";
// 		} elseif (is_string($thing)) {
// 			echo "\$thing is a string.\n";
// 		} elseif (is_bool($thing)) {
// 			echo "\$thing is a boolean.\n";
// 		}
// 	}
// }

foreach ($things as $thing) {
	if (is_array($thing)) {
		foreach ($thing as $value) {
			echo "{$value} ";
		}
		echo "\n";
	} else {
		echo "$thing\n";
	}
}

?>
