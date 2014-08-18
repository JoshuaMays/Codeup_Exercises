<?php

// Set the default timezone
date_default_timezone_set('America/Chicago');

// Get Day of Week as number
// 1 (for Monday) through 7 (for Sunday)
$day_of_week = date('N');

switch($day_of_week) {
	case 1:
		// Output Monday
		echo 'Monday' . PHP_EOL;
		break;
	case 2:
		// Output Tuesday
		echo 'Tuesday' . PHP_EOL;
		break;
	case 3:
		// Output Wednesday
		echo 'Wednesday' . PHP_EOL;
		break;
	case 4:
		// Output Thursday
		echo 'Thursday' . PHP_EOL;
		break;
	case 5:
		// Output Friday
		echo 'Friday' . PHP_EOL;
		break;
	case 6:
		// Output Saturday
		echo 'Saturday' . PHP_EOL;
		break;
	case 7:
		// Output Sunday
		echo 'Sunday' . PHP_EOL;
		break;
}

if ($day_of_week == 1) {
	// Output Monday
	echo 'Monday' . PHP_EOL;
} elseif ($day_of_week == 2) {
	// Output Tuesday
	echo 'Tuesday' . PHP_EOL;
} elseif ($day_of_week == 3) {
	// Output Wednesday
	echo 'Wednesday' . PHP_EOL;
} elseif ($day_of_week == 4) {
	// Output Thursday
	echo 'Thursday' .  PHP_EOL;
} elseif ($day_of_week == 5) {
	// Output Friday
	echo 'Friday' . PHP_EOL;
} elseif ($day_of_week == 6) {
	// Output Saturday
	echo 'Saturday' . PHP_EOL;
} elseif ($day_of_week == 7) {
	// Output Sunday
	echo 'Sunday' . PHP_EOL;
}

?>