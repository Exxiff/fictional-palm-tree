<?php
/*Exercise 5
Given variable (int) 50 create a condition that prints out "correct" if the variable is inside the range.
Range should be stored within the 2 separated variables $y and $z.*/

$input = 26;
$y = 100;
$z = 25;

if ($input >= $z && $input <= $y)
{
    echo "Correct". PHP_EOL;
} else {
    echo "Incorrect" .PHP_EOL;
}