<?php declare(strict_types=1);
/*Exercise #2
Write a program called CheckOddEven which prints "Odd Number"
...if the int variable “number” is odd, or “Even Number” otherwise.
 The program shall always print “bye!” before exiting.*/

function checkOddEven(int $input) : bool
{
    if($input % 2 === 0) {
        return true;
    } else {
        return false;
    }
}

$input = (int) readline("Check number : \n");

if(checkOddEven($input))
{
    echo "$input is a EVEN NUMBER \n";
}else {
    echo "$input is an ODD NUMBER \n";
}

echo "Bye!\n";