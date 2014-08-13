<?php

$hungry = false;
$food_available = true;

if ($hungry && $food_available) {
	echo "We are fed and good to go.\n";
}

$have_money = false;

if ($hungry && $food_available || $have_money) {
	echo "You should go eat.\n";

} else {
	echo "Not hungry, but thank you!\n";
}

?>