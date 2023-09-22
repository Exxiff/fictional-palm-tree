<?php declare(strict_types=1);

//Shared element pool, CPU and Human picks form pool
$elements = [
    'rock' => ['scissors', 'lizard'],
    'scissors' => ['paper', 'lizard'],
    'paper' => ['rock', 'spock'],
    'lizard' => ['spock', 'paper'],
    'spock' => ['scissors', 'rock'],
];

//Main game logic
function determineWinner(string $playerChoice, string $computerChoice, array $elements): string
{
    if ($playerChoice == $computerChoice) {
        return 'Both picked ' . ucfirst($playerChoice) . ' it is a DRAW';
    }
    if (in_array($computerChoice, $elements[$playerChoice])) {
        return ucfirst($playerChoice) . " Beats " . ucfirst($computerChoice) . ", PLAYER WINS\n";
    }
    {
        return ucfirst($computerChoice) . " Beats " . ucfirst($playerChoice) . ", COMPUTER WINS\n";
    }
}

//CPU picks random Element key
$computerChoice = array_rand($elements);

echo "Welcome to the ARENA!!!\n";
//Input loop, won't accept anything else besides what's available from element pool
while (true) {
    echo "Select form the following : \n";
    //Dynamically generates list of elements
    foreach ($elements as $key => $beats) {
        echo '* ' . ucfirst($key) . PHP_EOL;
    }
    //Player input
    $playerChoice = strtolower(readline('Pick your Element : '));
    if (!array_key_exists($playerChoice, $elements)) {
        echo "Input a valid Element!\n";
    } else {
        echo determineWinner($playerChoice, $computerChoice, $elements) . PHP_EOL;
        break;
    }
}
