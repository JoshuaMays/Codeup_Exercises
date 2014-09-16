<?php

// Function to determine the number of days in a month.
function daysOfMonth($month){
    
    $days = date('t', strtotime($month));
    return $days;
}

$month = 'February';
$numDays = daysOfMonth($month);
fwrite(STDOUT, "$month has $numDays days in it.");

?>

