<?php
/*Write a program that creates an array of ten integers. It should put ten random numbers from 1 to 100 in the array.
It should copy all the elements of that array into another array of the same size.
Then display the contents of both arrays. To get the output to look like this, you'll need a several for loops.
    Create an array of ten integers
    Fill the array with ten random numbers (1-100)
    Copy the array into another array of the same capacity
    Change the last value in the first array to a -7
    Display the contents of both arrays
Array 1: 45 87 39 32 93 86 12 44 75 -7
Array 2: 45 87 39 32 93 86 12 44 75 50
*/

//create an "Empty" array, with 10 slots
$numbers = array_fill(0, 10, 0);
$numbersCopy = array_fill(0, 10, 0);
//Populate the array with for loop, with random numbers 1-100
for ($a = 0; $a < count($numbers); $a++) {
    $numbers[$a] = rand(1, 100);
}
//Copy main array into other array with for loop, one by one
for ($b = 0; $b < count($numbers); $b++) {
    $numbersCopy[$b] = $numbers[$b];
}
//Change the last element of the first array with -7
$lastNumberIndex = count($numbers) - 1;
$numbers[$lastNumberIndex] = -7;
//echo both arrays
echo "Array 1: " . implode(" ", $numbers) . PHP_EOL;
echo "Array 2: " . implode(" ", $numbersCopy) . PHP_EOL;
