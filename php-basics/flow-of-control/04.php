<?php
/*Write a program which prints “Sunday”, “Monday”, ... “Saturday”
 if the int variable "dayNumber" is 0, 1, ..., 6, respectively.
 Otherwise, it shall print "Not a valid day".

Use:
    a "nested-if" statement
    a "switch-case-default" statement.*/

$dayNumber = readline("Insert number from 0-6 to get corresponding day : \n");

switch ($dayNumber) {
    case 0;
        echo "Sunday\n";
        break;
    case 1;
        echo "Monday\n";
        break;
    case 2;
        echo "Tuesday\n";
        break;
    case 3;
        echo "Wednesday\n";
        break;
    case 4;
        echo "Thursday\n";
        break;
    case 5;
        echo "Friday\n";
        break;
    case 6;
        echo "Saturday\n";
        break;
    default;
        echo "Not a valid Day\n";
}
//Second variation
if ($dayNumber >= 0 && $dayNumber <= 6) {
    if ($dayNumber == 0) {
        echo "Sunday\n";
    } elseif ($dayNumber == 1) {
        echo "Monday\n";
    } elseif ($dayNumber == 2) {
        echo "Tuesday\n";
    } elseif ($dayNumber == 3) {
        echo "Wednesday\n";
    } elseif ($dayNumber == 4) {
        echo "Thursday\n";
    } elseif ($dayNumber == 5) {
        echo "Friday\n";
    } elseif ($dayNumber == 6) {
        echo "Saturday\n";
    }
} else {
    echo "Not a valid Day\n";
}