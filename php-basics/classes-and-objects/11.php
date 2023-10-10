<?php

declare(strict_types=1);

class Account
{
    private float $balance;
    private string $name;

    public function __construct(float $balance, string $name)
    {
        $this->balance = $balance;
        $this->name = $name;
    }

    public function deposit(float $amount): void
    {
        $this->balance += $amount;
        echo "$" . number_format($amount, 2) . " deposited to $this->name\n";
    }

    public function withdraw(float $amount): void
    {
        $this->balance -= $amount;
        echo "$" . number_format($amount, 2) . " withdrawn from $this->name\n";
    }

    public function balance(): string
    {
        return "$" . number_format($this->balance, 2) . PHP_EOL;
    }

    public static function transfer(Account $from, Account $to, float $amount): void
    {
        $from->withdraw($amount);
        $to->deposit($amount);

    }

    public function __toString(): string
    {
        return "$this->name - $" . number_format($this->balance, 2) . PHP_EOL;
    }
}

$bartosAccount = new Account(200.25, "Bartos account");
$bartosSwissAccount = new Account(25000.00, "Bartos switzerland account");
echo "///////\n";
echo "Initial state\n";
echo $bartosAccount;
echo $bartosSwissAccount;

$bartosAccount->withdraw(20);
echo "Barto's account balance is now: " . $bartosAccount->balance();
$bartosSwissAccount->deposit(400);
echo "Barto's Swiss account balance is now: " . $bartosSwissAccount->balance();

echo "Final State\n";
echo $bartosAccount;
echo $bartosSwissAccount;

echo "///////\n";

$matthewAccount = new Account(1000.00, "Matt's account");
$myAccount = new Account(0.00, "My account");

echo $matthewAccount;
echo $myAccount;

$matthewAccount->withdraw(100.00);
$myAccount->deposit(100.00);

echo $matthewAccount;
echo $myAccount;

echo "///////\n";

$accountA = new Account(100.00, 'A');
$accountB = new Account(0.00, 'B');
$accountC = new Account(0.00, 'C');

Account::transfer($accountA, $accountB, 50.00);
Account::transfer($accountB, $accountC, 25.00);

echo $accountA;
echo $accountB;
echo $accountC;





