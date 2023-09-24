<?php
$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2165, 1457, 2456
];


//todo
echo "Original numeric array: " . implode(", ", $numbers) . PHP_EOL;

//todo
$sortedNumbers = $numbers; // makes copy of original array
sort($sortedNumbers); // rearranges given array
echo "Sorted numeric array: " . implode(", ", $sortedNumbers) . PHP_EOL;

$words = [
    "Java",
    "Python",
    "PHP",
    "C#",
    "C Programming",
    "C++"
];

//todo
echo "Original string array: " . implode(", ", $words) . PHP_EOL;

//todo
$sortedWords = $words;
sort($sortedWords);
echo "Sorted string array: " . implode(", ", $sortedWords) . PHP_EOL;