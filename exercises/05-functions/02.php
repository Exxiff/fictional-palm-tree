<?php declare (strict_types=1);
/*Exercise 2
Create a function that accepts 2 integer arguments.
First argument is a base value and the second one is a value it's been multiplied by.
For example, given argument 10 and 5 prints out 50*/

function multiply(int $x,int $y) : int
{
    return $x * $y;
}
//Input for variables
$x =(int) readline("First number : \n");
$y =(int) readline("Second number : \n");

echo $x . " * " . $y . " = " . multiply($x,$y) . PHP_EOL;
