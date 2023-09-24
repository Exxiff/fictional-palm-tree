<?php

$numbers = [20, 30, 25, 35, -16, 60, -100];

//todo calculate an average value of the numbers

$arrayAverage = round((array_sum($numbers) / count($numbers)), 2);

echo "Array average is " . $arrayAverage . PHP_EOL;
