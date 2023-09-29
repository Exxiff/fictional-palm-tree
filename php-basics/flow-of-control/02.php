<?php
echo "Enter the number: ";
$number = readline();
//todo print if number is positive or negative
if ($number > 0) {
    echo $number . " is Positive\n";
} elseif ($number < 0) {
    echo $number . " is Negative\n";
} else
    echo $number . " is Neither\n";