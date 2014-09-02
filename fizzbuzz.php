<?php

for ($i = 1; $i <= 100; $i++) {
           // If iterator divisible by 3, assign Fizz to $val
    $val = ($i % 3 == 0 ? "Fizz" : "")
           // If iterator divisible by 5, assign Buzz to string $val -- concat Fizz and Buzz if both.
         . ($i % 5 == 0 ? "Buzz" : "");
          // if $val string is empty, echo the iterator, else echo the string.
    echo (!$val ? $i : $val) . "\n";
}

// for ($i = 1; $i <=100; $i++) {
//     // If iterator is divisible by 3 AND 5, echo FizzBuzz
//     if ($i%3 == 0 && $i%5 == 0) {
//         echo "FizzBuzz\n";
//       // If iterator is only divisible by 3, echo Fizz
//     } elseif ($i%3 == 0 && $i%5 != 0) {
//         echo "Fizz\n";
//       // If iterator is only divisible by 5, echo Buzz
//     } elseif ($i%3 != 0 && $i%5 == 0) {
//         echo "Buzz\n";
//       // If iterator is not divisible by either 3 or 5, echo just the iterator.
//     } else {
//         echo "$i\n";
//     }
// }
?>
