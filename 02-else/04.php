<?php
/*Exercise 4
By your choice, create condition with 3 checks.
For example, if value is greater than X, less than Y and is an even number.*/

$input = 22;
$y = 40;
$x = 20;

if ($input > $x && $input < $y && $input % 2 == 0)
{
    echo "input number DOES meet conditions". PHP_EOL;
} else {
    echo "input number DOESN'T meet conditions". PHP_EOL;
}