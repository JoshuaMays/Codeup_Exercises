<?php

function humanized_list($physicists_string) {
	$physicists_string = explode(", ", $physicists_string);
	$trailing_physicist = array_pop($physicists_string);
	$physicists_string = implode(", ", $physicists_string) . ", and {$trailing_physicist}";
	return $physicists_string;
}





$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

// $famous_fake_physicists = explode(", ", $physicists_string);

// $trailing_physicist = array_pop($famous_fake_physicists);

// $famous_fake_physicists = implode(", ", $famous_fake_physicists) . ", and {$trailing_physicist}";

$famous_fake_physicists = humanized_list($physicists_string);

echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}." . PHP_EOL;



?>