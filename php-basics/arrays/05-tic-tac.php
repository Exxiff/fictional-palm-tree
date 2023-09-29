<?php declare(strict_types=1);
$board = [
    [' ', ' ', ' '],
    [' ', ' ', ' '],
    [' ', ' ', ' ']
];

function checkGameState(array $board, string $player): bool
{
    for ($i = 0; $i < 3; $i++) {
        if ($board[$i][0] === $player
            && $board[$i][1] === $player
            && $board[$i][2] === $player ||
            $board[0][$i] === $player
            && $board[1][$i] === $player
            && $board[2][$i] === $player) {
            return true;
        }
    }
    if ($board[0][0] === $player
        && $board[1][1] === $player
        && $board[2][2] === $player ||
        $board[2][0] === $player
        && $board[1][1] === $player
        && $board[0][2] === $player) {
        return true;
    }
    return false;
}


function displayBoard(array $board)
{
    echo " {$board[0][0]} | {$board[0][1]} | {$board[0][2]} \n";
    echo "---+---+---\n";
    echo " {$board[1][0]} | {$board[1][1]} | {$board[1][2]} \n";
    echo "---+---+---\n";
    echo " {$board[2][0]} | {$board[2][1]} | {$board[2][2]} \n";
}

$player = 'X';
$gameOver = false;

echo "Welcome to Tic-Tac-Toe!\n";
while (!$gameOver) {
    $row = 0;
    $col = 0;

    do {
        displayBoard($board);
        $input = trim((string)readline("$player, choose your location (row, column): "));
        //Throws many errors if input is not perfect!!!
        list($row, $col) = explode(' ', $input);
        if (!is_numeric($row) || !is_numeric($col) || ($row < 0 || $row > 2) || ($col < 0 || $col > 2)) {
            displayBoard($board);
            echo "Invalid input. Please enter row and column as numbers between 0 and 2.\n";
        }
    } while (
        $row < 0 || $row > 2 ||
        $col < 0 || $col > 2 ||
        $board[$row][$col] !== ' '
    );

    $board[$row][$col] = $player;

    if (checkGameState($board, $player)) {
        displayBoard($board);
        $gameOver = true;
        echo $player . " HAS WON!!\n\n";
    }
    if (!in_array(' ', array_merge(...$board))) {
        displayBoard($board);
        $gameOver = true;
        echo "IT IS A DRAW!!!\n";
    }
    if ($player === 'X') {
        $player = 'O';
    } else {
        $player = 'X';
    }

}
