<?php

// for ($i = 1; $i <= 100; $i++) {
// 	if($i%3 == 0) {
// 		echo "Fizz";
// 		if($i%5 == 0) {
// 			echo "Buzz\n";
// 		} else {
// 			echo "\n";
// 		}

// 	} elseif ($i%5 == 0) {
// 		echo "Buzz\n";
// 	} else {
// 		echo $i . "\n";
// 	}
// }


// for ($i = 1; $i <=100; $i++) {
// 	if ($i%3 == 0 && $i%5 == 0) {
// 		echo "FizzBuzz\n";
// 	} elseif ($i%3 == 0 && $i%5 != 0) {
// 		echo "Fizz\n";
// 	} elseif ($i%3 != 0 && $i%5 == 0) {
// 		echo "Buzz\n";
// 	} else {
// 		echo "$i\n";
// 	}
// }

for ($i = 1; $i <= 100; $i++) {
	$val = ($i % 3 == 0 ? "Fizz" : "") 
		 . ($i % 5 == 0 ? "Buzz" : "");
	echo (!$val ? $i : $val) . "\n";
}

?>