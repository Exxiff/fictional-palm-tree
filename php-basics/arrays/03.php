<?php

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];

echo "Enter the value to search for: ";

//todo check if an array contains a value user entered
$userInput = trim(readline());

foreach ($numbers as $number) {
    $numberFound = false;
    if ($userInput == $number) {
        $numberFound = true;
        break;
    }
}

if ($numberFound === true) {
    echo "$userInput was found in Array!\n";
} else {
    echo "$userInput is not present in Array!\n";
}
