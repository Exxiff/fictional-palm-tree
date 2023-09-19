<?php declare (strict_types=1);
/*Exercise 1
Create a function that accepts any string and returns the same value with added "codelex" by the end of it.
Print this value out.*/

function addCodelex (string $inputString): string
{
    return $inputString . " codelex". PHP_EOL;
}

$input = readline("Input text : ");
echo addCodelex($input);



