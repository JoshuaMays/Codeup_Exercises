<?php

// custom function for creating humanized list with an Oxford comma from an array, unsorted version is the default.
function humanized_list($string, $sort = false) {
    // Convert string into an array.
    $array = explode(", ", $string);

    // Check if we should sort the array first.
    if ($sort) {
        sort($array);
    }
    // Remove and save the last array value for later
    $trailing = array_pop($array);
    // Turn array back into a string and concat the trailing value.
    $string = implode(", ", $array) . ", and $trailing";
    return $string;
}

$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

// Call humanized_list and save the returned value (human-readable string).
$famous_fake_physicists = humanized_list($physicists_string, TRUE);

echo "Some of the most famous fictional theoretical physicists are $famous_fake_physicists." . PHP_EOL;

?>
