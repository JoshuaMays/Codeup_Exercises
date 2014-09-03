<?php

$hungry = false;
$food_available = true;

// Check if both hungry and food is available.
if ($hungry && $food_available) {
	echo "We are fed and good to go." . PHP_EOL;
}

$have_money = false;

// Check if hungry and there is food, or if have money.
if ($hungry && $food_available || $have_money) {
	echo "You should go eat." . PHP_EOL;

} else {
	echo "Not hungry, but thank you!" . PHP_EOL;
}

?>
