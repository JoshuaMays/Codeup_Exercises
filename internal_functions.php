<?php 

$nothing = null;
$something = "";
$array = array(1,2,3);
$serialArray = serialize($array);
$unserialArray = unserialize($serialArray);

function amISet($check) {
	unset($check);
	if (isset($check)) {
		$result = "SET";
		return $result;
	}
	else {
		$result = "EMPTY";
		return $result;
	}
}

// function amIEmpty($check) {
// 	if (empty($check)) {
// 		$result = "EMPTY";
// 		return $result;
// 	}
// 	else {
// 		$result = "NOT EMPTY";
// 		return $result;
// 	}
// }


$checked = amISet($nothing);
echo '$checked is ' . $checked . '.' . PHP_EOL;

// $checked = amIEmpty($nothing);
// echo '$checked is ' . $checked . '.' . PHP_EOL;

$checked = amISet($something);
echo '$checked is ' . $checked . '.' . PHP_EOL;

// $checked = amIEmpty($something);
// echo '$checked is ' . $checked . '.' . PHP_EOL;

// $checked = amISet($serialArray);
// echo '$checked is ' . $checked . '.' . PHP_EOL;

// $checked = amISet($unserialArray);
// echo '$checked is ' . $checked . '.' . PHP_EOL;


?>