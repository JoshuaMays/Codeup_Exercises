<?php 

$nothing = null;
$something = "";
$array = array(1,2,3);
$serialArray = serialize($array);
$unserialArray = unserialize($serialArray);

function amISet($check) {
	if (isset($check)) {
		$result = "SET";
		return $result;
	}
	else {
		$result = "EMPTY";
		return $result;
	}
}

// $checked = amISet($nothing);
// echo '$checked is ' . $checked . '.' . PHP_EOL;

// $checked = amISet($something);
// echo '$checked is ' . $checked . '.' . PHP_EOL;

// $checked = amISet($serialArray);
// echo '$checked is ' . $checked . '.' . PHP_EOL;

$checked = amISet($unserialArray);
echo '$checked is ' . $checked . '.' . PHP_EOL;

// Create a function that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"

// TEST: If var $nothing is set, display '$nothing is SET'

// TEST: If var $nothing is empty, display '$nothing is EMPTY'

// TEST: If var $something is set, display '$something is SET'

// Serialize the array $array, and output the results

// Unserialize the array $array, and output the results



?>