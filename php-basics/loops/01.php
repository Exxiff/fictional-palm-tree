<?php

declare(strict_types=1);

echo "The first 10 natural numbers are: ";

//todo write a program that displays first 10 natural numbers

for ($i = 1; $i <= 10; $i++) {
    echo $i;
    if ($i !== 10) {
        echo ' ';
    }
}
echo PHP_EOL;