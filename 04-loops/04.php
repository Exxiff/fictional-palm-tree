<?php
/*Exercise 4
Create a non-associative array with integers
and print out only integers that divides by 3 without any left.*/

$numArr = [1, 3, 4, 7, 8, 9, 14, 16, 18, 20];

foreach ($numArr as $number)
{
    if ($number%3==0) {
        echo $number.PHP_EOL;
    }
}