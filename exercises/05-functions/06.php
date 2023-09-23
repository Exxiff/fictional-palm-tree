<?php
/*Exercise 6
Create a non-associative array with 5 elements where 3 are integers, 1 float and 1 string.
Create a for loop that iterates non-associative array using php in-built function that determines count of elements in the array.
Create a function that doubles the integer number.
Within the loop using php in-built function print out the double of the number value (using your custom function).*/

$elements = array(5, 10, 20, 2.222222, 'hello');

function doubleNumbers($element)
{
    if (is_numeric($element) && !is_float($element)) {
        return $element * 2;
    } else {
        return $element;
    }
}

for ($i = 0; $i < count($elements); $i++) {
    echo doubleNumbers($elements[$i]) . PHP_EOL;
}
