<?php
/*Exercise 6
Create a variable $plateNumber that stores your car plate number.
Create a switch statement that prints out that it's your car in case of your number.*/

$plateNumber = "BN-9929";

switch ($plateNumber)
{
    case "BN-9929":
        echo "$plateNumber is your plate number".PHP_EOL;
        break;
    default:
        echo "This is not you number".PHP_EOL;
}