<?php

declare(strict_types=1);

/*Write a program that asks the user to enter two words.
The program then prints out both words on one line.
The words will be separated by enough dots so that the total line length is 30:

Enter first word:
turtle
Enter second word
153
turtle....................153

This could be used as part of an index for a book. To print out the dots, use echo "." inside a loop body.*/

$firstWord = readline("Enter first word: \n");
$secondWord = readline("Enter second word: \n");

$wordsLength = strlen($firstWord) + strlen($secondWord);
$desiredLineLength = 30;
$dotsNeeded = $desiredLineLength - $wordsLength;

echo $firstWord;

for ($i = 0; $i < $dotsNeeded; $i++) {
    echo '.';
}

echo $secondWord . PHP_EOL;
