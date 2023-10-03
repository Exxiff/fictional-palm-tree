<?php

declare(strict_types=1);

/*Write a console program in a class named Piglet that implements a simple 1-player dice game called "Piglet" (based
on the game "Pig"). The player's goal is to accumulate as many points as possible without rolling a 1. Each turn, the
 player rolls the die; if they roll a 1, the game ends, and they get a score of 0. Otherwise, they add this number to
their running total score. The player then chooses whether to roll again, or end the game with their current point
total.*/

class Piglet
{
    public static function play(): void
    {
        $totalScore = 0;

        echo "Welcome to Piglet!\n";

        while (true) {
            $roll = rand(1, 6);

            if ($roll === 1) {
                $totalScore = 0;
                echo "You rolled 1!\n";
                break;
            } else {
                $totalScore += $roll;
                echo "You rolled $roll!\nCurrent total: $totalScore\n";
            }

            $input = strtolower(readline("Roll again? Y/N: "));
            if ($input !== 'y') {
                break;
            }
        }
        echo "Game Over! Total score: $totalScore\n";
    }
}

Piglet::play();