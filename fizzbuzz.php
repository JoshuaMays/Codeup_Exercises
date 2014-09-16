<?php

// Solution to FizzBuzz programming exercise
for ($i = 1; $i <= 100; $i++) {
           // If iterator divisible by 3, assign Fizz to $val
    $val = ($i % 3 == 0 ? "Fizz" : "")
           // If iterator divisible by 5, assign Buzz to string $val -- concat Fizz and Buzz if both.
         . ($i % 5 == 0 ? "Buzz" : "");
          // if $val string is empty, echo the iterator, else echo the string.
    echo (!$val ? $i : $val) . PHP_EOL;
}

?>
