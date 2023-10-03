<?php

declare(strict_types=1);

/* Write a console program in a class named RollTwoDice that prompts the user for a desired sum,
...then repeatedly rolls two six-sided dice (using a Random object to generate random numbers from 1-6)
...until the sum of the two dice values is the desired sum. Here is the expected dialogue with the user:
Desired sum: 9
4 and 3 = 7
3 and 5 = 8
5 and 6 = 11
5 and 6 = 11
1 and 5 = 6
6 and 3 = 9
*/

class RollTwoDice
{
    private static function GetValidInput(): int
    {
        while (true) {
            $userInput = (int)readline("Input desired Sum (2-12): ");

            if ($userInput >= 2 && $userInput <= 12) {
                return $userInput;
            } else {
                echo "Invalid input! Please enter a number between 2 and 12.\n";
            }
        }
    }

    private static function ThrowDice(): int
    {
        return rand(1, 6);
    }

    public static function Play(): void
    {
        $userInput = self::GetValidInput();

        do {
            $firstDice = self::ThrowDice();
            $secondDice = self::ThrowDice();
            $diceSum = $firstDice + $secondDice;
            echo "$firstDice and $secondDice = $diceSum\n";
        } while ($userInput !== $diceSum);
    }
}

RollTwoDice::Play();