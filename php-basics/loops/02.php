<?php

declare(strict_types=1);

$i = readline("Insert base number: \n");
$n = readline("Insert times to multiply: \n");

//todo complete loop to multiply i with itself n times, it is NOT allowed to use built-in pow() function

$result = 1;

for ($j = 0; $j < $n; $j++) {
    $result *= $i;
}

echo "Result : $result\n";

