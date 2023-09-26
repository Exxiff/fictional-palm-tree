<?php declare(strict_types=1);
function displayBoard(array $board)
{
    echo "##################\n\n";
    foreach ($board as $row) {

        foreach ($row as $element) {
            echo " [$element]";
        }
        echo PHP_EOL;
    }
    echo PHP_EOL;
}

$slotElements = [
    '7' => ['value' => 6],
    'A' => ['value' => 5],
    'K' => ['value' => 4],
    'K' => ['value' => 4],
    'Q' => ['value' => 3],
    'Q' => ['value' => 3],
    'Q' => ['value' => 3],
    'J' => ['value' => 2],
    'J' => ['value' => 2],
    'J' => ['value' => 2],
    'J' => ['value' => 2],
    'X' => ['value' => 1],
    'X' => ['value' => 1],
    'X' => ['value' => 1],
    'X' => ['value' => 1],
    'X' => ['value' => 1],
];

$slotPayLines = [
    //Straight lines
    [[0, 0], [0, 1], [0, 2], [0, 3]],
    [[1, 0], [1, 1], [1, 2], [1, 3]],
    [[2, 0], [2, 1], [2, 2], [2, 3]],
    //Diagonal lines
    [[0, 0], [1, 1], [2, 2], [2, 3]],
    [[2, 0], [1, 1], [0, 2], [0, 3]],
    [[0, 0], [0, 1], [1, 2], [2, 3]],
    [[2, 0], [2, 1], [1, 2], [0, 3]],
    [[1, 0], [0, 1], [0, 2], [0, 3]],
    [[1, 0], [2, 1], [2, 2], [2, 3]],

];

$slotHeight = 3;
$slotLength = 4;
$balance = 1000;
$spinCost = 25;
while (true) {

    echo "Balance: $balance$\n";
    $userInput = readline('Spin? (Press Enter to spin/Type anything to quit): ');

    if (strtolower($userInput) !== '' || $balance < $spinCost) {
        break;
    }
    $balance -= $spinCost;

    $board = [];

    for ($rows = 0; $rows < $slotHeight; $rows++) {
        for ($columns = 0; $columns < $slotLength; $columns++) {
            $board[$rows][$columns] = array_rand($slotElements);
        }
    }
    displayBoard($board);
    $totalPayout = 0;
    foreach ($slotPayLines as $lines) {
        $winLineSymbols = '';
        foreach ($lines as $position) {
            $x = $position[0];
            $y = $position[1];
            $winLineSymbols .= $board[$x][$y];
        }

        if (count(array_unique(str_split($winLineSymbols))) === 1 ||
            substr_count($winLineSymbols, $winLineSymbols[0], 0, 3) === 3
        ) {
            $payout = $slotElements[$winLineSymbols[0]]['value'] * substr_count($winLineSymbols, $winLineSymbols[0]);
            $totalPayout += $payout;
            echo "You won with $winLineSymbols (Payout: +$payout$)" . PHP_EOL;
        }
        $balance += $totalPayout;
        {

        }
    }

}



