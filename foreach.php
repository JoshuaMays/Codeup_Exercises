<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

# ECHO text as data type.

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

# ECHO gettype($thing) to show data type of the values inside the $things array.

// foreach ($things as $thing) {
// 	if (is_array($thing)){
// 		echo "\$thing is an " . gettype($thing) . " data type.\n";
// 	} elseif (is_bool($thing)) {
// 		echo "\$thing is a " . gettype($thing) . " data type.\n";
// 	} elseif (is_float($thing)) {
// 		echo "\$thing is a " . gettype($thing) . " data type.\n";
// 	} elseif (is_int($thing)) {
// 		echo "\$thing is an " . gettype($thing) . " data type.\n";
// 	} elseif (is_null($thing)) {
// 		echo "\$thing is a " . gettype($thing) . " data type.\n";
// 	} elseif (is_string($thing)) {
// 		echo "\$thing is a " . gettype($thing) . " data type.\n";
// 	}
// }

# ECHO text to show data types for scalar values

foreach ($things as $thing) {
	if (is_scalar($thing)) {
		if (is_float($thing)) {
			echo "\$thing is a float.\n";
		} elseif (is_int($thing)) {
			echo "\$thing is an int.\n";
		} elseif (is_string($thing)) {
			echo "\$thing is a string.\n";
		} elseif (is_bool($thing)) {
			echo "\$thing is a boolean.\n";
		}
	}
}

# ECHO values, if value is an array, loop through the array and echo the stored values

// foreach ($things as $thing) {
// 	if (is_array($thing)) {
// 		foreach ($thing as $value) {
// 			echo "{$value} ";
// 		}
// 		echo "\n";
// 	} else {
// 		echo "$thing\n";
// 	}
// }

?>
