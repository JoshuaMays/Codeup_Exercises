<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

# ECHO text as data type.

// foreach ($things as $thing) {
//     if (is_array($thing)) {
//         echo '$thing is an array.' . PHP_EOL;
//     } elseif (is_bool($thing)) {
//         echo '$thing is a boolean.' . PHP_EOL;
//     } elseif (is_float($thing)) {
//         echo '$thing is a float.' . PHP_EOL;
//     } elseif (is_int($thing)) {
//         echo '$thing is an int.' . PHP_EOL;
//     } elseif (is_null($thing)) {
//         echo '$thing is a null value.' . PHP_EOL;
//     } elseif (is_string($thing)) {
//         echo '$thing is a string.' . PHP_EOL;
//     }
// }

# ECHO gettype($thing) to show data type of the values inside the $things array.

// foreach ($things as $thing) {
//     if (is_array($thing)){
//         echo '$thing is an ' . gettype($thing) . " data type." . PHP_EOL;
//     } elseif (is_bool($thing)) {
//         echo '$thing is a ' . gettype($thing) . " data type." . PHP_EOL;
//     } elseif (is_float($thing)) {
//         echo '$thing is a ' . gettype($thing) . " data type." . PHP_EOL;
//     } elseif (is_int($thing)) {
//         echo '$thing is an ' . gettype($thing) . " data type." . PHP_EOL;
//     } elseif (is_null($thing)) {
//         echo '$thing is a ' . gettype($thing) . " data type." . PHP_EOL;
//     } elseif (is_string($thing)) {
//         echo '$thing is a ' . gettype($thing) . " data type." . PHP_EOL;
//     }
// }

# ECHO text to show data types for scalar values

// foreach ($things as $thing) {
//     if (is_scalar($thing)) {
//         if (is_float($thing)) {
//             echo '$thing is a float.' . PHP_EOL;
//         } elseif (is_int($thing)) {
//             echo '$thing is an int.' . PHP_EOL;
//         } elseif (is_string($thing)) {
//             echo '$thing is a string.' . PHP_EOL;
//         } elseif (is_bool($thing)) {
//             echo '$thing is a boolean.' . PHP_EOL;
//         }
//     }
// }

# ECHO values, if value is an array, loop through the array and echo the stored values

foreach ($things as $thing) {
    if (is_array($thing)) {
        // If the $thing is an array, loop through array and echo the values
        foreach ($thing as $value) {
            echo "$value";
        }
        echo PHP_EOL;
        // Just echo the value of $thing.
    } else {
        echo "$thing" . PHP_EOL;
    }
}

?>
