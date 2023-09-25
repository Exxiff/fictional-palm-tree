<?php declare(strict_types=1);

$wordBank = [
    'bicycle', 'diamond', 'lantern',
    'pumpkin', 'library', 'umbrella',
    'octopus', 'wallet', 'pneumonoultramicroscopicsilicovolcanoconiosis',
];

function GameStateMessage($gameState, $playerWordString): string
{
    $message = '';
    switch ($gameState) {
        case "win":
            $message = "You win! The word was " . strtoupper($playerWordString) . PHP_EOL;
            break;
        case "lose":
            $message = "You lost, no guesses left. The word was " . strtoupper($playerWordString) . PHP_EOL;
            break;
    }
    return $message;
}

function sanitizeInput(string $input): string
{
    return strtolower(str_replace(' ', '', $input));
}

function validateInput(string $input): bool
{
    return strlen($input) === 1 && ctype_alpha($input);
}

function getGameInfo(int $guessCount, array $gameBoard, string $misses, bool $validInput): string
{
    $info = "-=-=-=-=-=-=-=-=-=-=-=-=-=-\n\n";
    $info .= "Attempts left: $guessCount\n\n";
    $info .= "Word: " . implode(' ', $gameBoard) . "\n\n";
    $info .= "Misses: " . $misses . "\n\n";
    if ($validInput === false) {
        $info .= "Invalid input! Please enter a single letter\n\n";
    }
    return $info;
}

$playAgain = true;
while ($playAgain === true) {

    $guessCount = 7;
    $missedLetters = '';
    $gameStatus = 'continue';
    $validInput = true;

    $playerWordString = $wordBank[array_rand($wordBank)];
    $playerLetterArray = str_split($playerWordString);
    $gameBoardArray = array_fill(0, strlen($playerWordString), '_');

    while ($gameStatus === 'continue') {
        var_dump($validInput);
        $correctGuess = false;

        echo getGameInfo($guessCount, $gameBoardArray, $missedLetters, $validInput);
        $userInput = sanitizeInput(readline('Guess: '));
        $validInput = validateInput($userInput);
        if (validateInput($userInput) === false) {
            continue; // restarts loop
        }

        for ($i = 0; $i < strlen($playerWordString); $i++) {
            if ($userInput === $playerLetterArray[$i]) {
                $gameBoardArray[$i] = $userInput;
                $correctGuess = true;
            }
        }
        if ($correctGuess === false) {
            $guessCount--;
            $missedLetters .= $userInput;
        }
        if ($gameBoardArray === $playerLetterArray) {
            echo getGameInfo($guessCount, $gameBoardArray, $missedLetters, $validInput);
            $gameStatus = 'win';
        }
        if ($guessCount <= 0) {
            echo getGameInfo($guessCount, $gameBoardArray, $missedLetters, $validInput);
            $gameStatus = 'lose';
        }

        echo GameStateMessage($gameStatus, $playerWordString);
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
