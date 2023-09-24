<?php

$wordBank = [
    'bicycle', 'diamond', 'lantern',
    'pumpkin', 'library', 'umbrella',
    'octopus', 'wallet', 'pneumonoultramicroscopicsilicovolcanoconiosis',
];

function sanitizeInput(string $input): string
{
    return strtolower(trim($input));
}

$playAgain = true;
while ($playAgain === true) {
    $randomWord = $wordBank[array_rand($wordBank)];
    $splitWord = str_split($randomWord);
    $guessCount = 7;
    $misses = '';
    $gameBoard = array_fill(0, strlen($randomWord), '_');

    while ($guessCount > 0) {
        $correctGuess = false;
        echo "-=-=-=-=-=-=-=-=-=-=-=-=-=-\n\n";
        echo "Attempts left: $guessCount\n\n";
        echo "Word : " . implode(' ', $gameBoard) . "\n\n";
        echo "Mises : " . $misses . PHP_EOL . PHP_EOL;
        $userInput = (string)readline('Guess : ');
        $userInput = sanitizeInput($userInput);

        for ($i = 0; $i < strlen($randomWord); $i++) {
            if ($userInput === $splitWord[$i]) {
                $gameBoard[$i] = $userInput;
                $correctGuess = true;
            }
        }

        if ($correctGuess === false) {
            $guessCount--;
            $misses .= $userInput;
        }

        if ($gameBoard === $splitWord) {
            echo "You win! The word was " . strtoupper($randomWord) . PHP_EOL;
            break;
        }

        if ($guessCount === 0) {
            echo "You lost, no guesses left. The word was " . strtoupper($randomWord) . PHP_EOL;
        }
    }
    while (true) {
        $playAgainAnswer = sanitizeInput(readline('Play "again" or "quit"? : '));
        if ($playAgainAnswer === 'again') {
            break;
        } elseif ($playAgainAnswer === 'quit') {
            $playAgain = false;
            break;
        } else {
            echo "Invalid input!!!\n";
        }
    }
}
