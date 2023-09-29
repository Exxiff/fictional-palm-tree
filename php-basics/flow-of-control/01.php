<?php


echo "Input the 1st number: ";
$number1 = (int)readline();
echo "Input the 2nd number: ";
$number2 = (int)readline();
echo "Input the 3rd number: ";
$number3 = (int)readline();
//todo print the largest number
if ($number1 >= $number2 && $number2 > $number3) {
    echo $number1 . " Is the largest number!\n";
} elseif ($number1 <= $number2 && $number2 > $number3) {
    echo $number2 . " Is the largest number!\n";
} else
    echo $number3 . " Is the largest number!\n";