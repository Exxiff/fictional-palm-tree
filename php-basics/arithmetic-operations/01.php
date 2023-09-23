<?php declare(strict_types=1);
/*Exercise #1
Write a program to accept two integers, and return true
...if either one is 15 or if their sum or difference is 15.*/



function diff(int $x,int $y) : bool
{
    if ($x === 15 || $y === 15 || ($x + $y) === 15 || ($x - $y) === 15)
    {
        return true;
    } else {
        return false;
    }
}
//Input Prompt
$x =(int) readline("Enter the X : \n");
$y =(int) readline("Enter the Y : \n");

if(diff($x,$y))
{
    echo "Statement is True\n";
} else {
    echo "Statement is False\n";
}