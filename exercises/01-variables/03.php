<?php
/*Exercise 3
Concatenate your name, surname and integer of your age.*/

$age = 26;
$firstName = 'Atis';
$lastName = 'Ladigs';
// "" for multiple variables, ' . ' for one variable
echo "My name is $firstName $lastName, and I'm $age years old.". PHP_EOL;
//Different way to get same output
echo 'My name is ' . $firstName . ' ' . $lastName . ', and I\'m ' . $age . ' years old.'.PHP_EOL;

