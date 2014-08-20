<?php

// first names
$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy','Michael'];

function searchArrays($keyword, $array) {
	// Look for $keyword in $array and set the key of that array to $match
	$match = array_search($keyword, $array);
	// Only if $match is a boolean false, return false.
	if($match === false) {
		return false;
	}
	return true;
}

function compareArrays($array1, $array2) {
	// Set a counter for the number of matches
	$numOfMatches = 0;

	// Loop through each value of $compare, running searchArrays on all values. 
	foreach ($array2 as $keyword) {
		$foundAMatch = searchArrays($keyword, $array1);

		// Increment numOfMatch when a match is found.
		if ($foundAMatch) {
			$numOfMatches++;
		}
	}
	return $numOfMatches;
}

// $result = searchArrays("Tina", $names);
// echo $result;

$numOfMatches = compareArrays($names, $compare);
echo $numOfMatches . " matches" . PHP_EOL;

?>