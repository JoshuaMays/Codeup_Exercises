<?php

$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$famous_fake_physicists = explode(", ", $physicists_string);

$trailing_physicist = array_pop($famous_fake_physicists);

$famous_fake_physicists = implode(", ", $famous_fake_physicists) . ", and {$trailing_physicist}";

echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}." . PHP_EOL;

?>