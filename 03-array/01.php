<?php
/*Exercise 1
Create a non-associative array with 3 integer values.
and display the total sum of them.*/

$numbers = array(10,20,40);
//Different way to declare array
$numbers1 = [10,20,40];

echo array_sum($numbers) . PHP_EOL;
echo array_sum($numbers1) . PHP_EOL;