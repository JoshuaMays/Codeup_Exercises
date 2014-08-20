<?php

// custom function for creating humanized list with an Oxford comma from an array, unsorted version is the default.
function humanized_list($physicists_array, $sort = false) {
	// Check if we should sort the array first.
	if ($sort) {
		asort($physicists_array);
	}
	// Remove and save the last array value for later
	$trailing_physicist = array_pop($physicists_array);
	// Turn array back into a string and concat the trailing value.
	$physicists_string = implode(", ", $physicists_array) . ", and {$trailing_physicist}";
	return $physicists_string;
}

$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

// Convert string into an array.
$physicists_array = explode(", ", $physicists_string);

// Call humanized_list and save the returned value (human-readable string).
$famous_fake_physicists = humanized_list($physicists_array);

echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}." . PHP_EOL;

?>