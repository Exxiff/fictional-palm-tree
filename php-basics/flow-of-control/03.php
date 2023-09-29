<?php
//Write a program that reads a positive integer and count the number of digits the number has.
//input any number

//LIMIT 20 digits
while (true) {

    $number = str_replace(' ', '', readline("Enter number : \n"));
    $originalNumber = $number;

    $digitCount = 0;
    if ($number < 0 || !is_numeric($number)) {
        echo "! Please insert only Positive integers !\n";
        continue;
    } elseif ((int)$number === 0) {
        echo "Digit Count is 1\n";
        break;
    } else {
        while ((int)$number >= 1) {
            $number = $number / 10;
            $digitCount++;
        }
    }
    echo "Number '$originalNumber' has $digitCount digits\n";
    break;
}