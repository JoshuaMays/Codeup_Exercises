<?php
// Function adds two numbers together.
function add($a, $b) {
    // Checks if arguments are numeric.
    if (is_Numeric($a) && is_Numeric($b)) {
        return $a + $b;
    } else {
        // If args are nonnumeric, call nonNumericError message.
        return nonNumericError();
    }

}

function subtract($a, $b) {
    // Checks if arguments are numeric.
    if (is_Numeric($a) && is_Numeric($b)) {
        return $a - $b;
    } else {
        // If args are nonnumeric, call nonNumericError message.
        return nonNumericError();
    }

}

function multiply($a, $b) {
    // Checks if arguments are numeric.
    if (is_Numeric($a) && is_Numeric($b)) {
        return $a * $b;
    } else {
        // If args are nonnumeric, call nonNumericError message.
        return nonNumericError();
    }


}

function divide($a, $b) {
    // Checks if arguments are numeric.
    if (is_Numeric($a) && is_Numeric($b)) {
        // Check if divisor argument is zero
        if ($b == 0) {
            // Return divideByZero error message.
            return divideByZero($b);
        }
        else {
            return $a / $b;
        }
    }
    else {
        // If args are nonnumeric, call nonNumericError message.
        return nonNumericError();
    }

}

function modular($a, $b) {
    // Checks if arguments are numeric.
    if (is_Numeric($a) && is_Numeric($b)) {
        // Check if divisor argument is zero
        if ($b == 0) {
            // Return divideByZero error message.
            return divideByZero($b);
        }
        else {
            return $a % $b;
        }
    }
    else {
        // If args are nonnumeric, call nonNumericError message.
        return nonNumericError();
}

}

function nonNumericError() {
    return 'ERROR: One of the values is non-numeric.';
}

function divideByZero($b) {
    return 'ERROR: Please never ever divide by zero.';
}

echo add(138, 'a') . PHP_EOL;
echo subtract(131, 'b') . PHP_EOL;
echo multiply(3, 'c') . PHP_EOL;
echo divide(4, '0') . PHP_EOL;
echo modular(4,3) . PHP_EOL;

?>
