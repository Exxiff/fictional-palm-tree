<?php
/*Exercise 2
Given variable (int) 50, determine if it's in the range of 1 and 100.*/

$value = 99;
$minValue = 1;
$maxValue = 100;

if ($value <= $maxValue && $value >= $minValue)
{
    echo "$value is in the range of $minValue and $maxValue". PHP_EOL;
} else {
    echo "$value is NOT in the range of $minValue and $maxValue". PHP_EOL;
}