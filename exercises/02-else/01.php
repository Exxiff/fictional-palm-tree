<?php
/*Exercise 1
Given variables (int) 10, string "10" determine if they both are the same.*/

$number = 10;
$string = "10";
// == compares true value, $number==$string would be the same
// === compares everything, value and type, must be identical

if ($number === $string)
{

    echo 'They are the same.'. PHP_EOL;
} else {
    echo 'They are different.'. PHP_EOL;
}

var_dump($string);
var_dump($number);