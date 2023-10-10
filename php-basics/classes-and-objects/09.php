<?php

declare(strict_types=1);

class BankAccount
{
    private string $username;
    private int $balanceCents;

    public function __construct(string $username, int $balanceCents)
    {
        $this->username = $username;
        $this->balanceCents = $balanceCents;
    }

    public function showNameAndBalance(): string
    {
        $formattedBalance = number_format(abs($this->balanceCents) / 100, 2);

        if ($this->balanceCents < 0) {
            $formattedBalance = '-' . '$' . $formattedBalance;
        } else {
            $formattedBalance = '$' . $formattedBalance;
        }
        return "$this->username, $formattedBalance";
    }
}

$clients = [
    new BankAccount("Bobby", -12),
    new BankAccount("John", 42069),
    new BankAccount("Davidus", 0)
];

foreach ($clients as $client) {
    /** @var BankAccount $client */
    echo $client->showNameAndBalance() . PHP_EOL;
}