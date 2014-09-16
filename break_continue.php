<?php

// Examples using continue and break in a loop.

for ($i = 1; $i <=100; $i++) {
    if ($i % 2 != 0) {
    // Don't echo odd numbers, continue loop.
    continue;
    }
    echo $i . PHP_EOL;
}

for ($i = 1; $i <= 100; $i++) {
    echo $i . PHP_EOL;
    if ($i == 10) {
        // Quit looping when $i reaches 10.
        break;
    }
}

?>
