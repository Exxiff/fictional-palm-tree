<?php

declare(strict_types=1);

class SavingsAccount
{
    private int $balanceCents;
    private float $annualInterestRate;
    private int $totalDepositsCents = 0;
    private int $totalWithdrawalsCents = 0;
    private int $totalInterestEarnedCents = 0;

    public function __construct(int $balanceCents, float $annualInterestRate)
    {
        $this->balanceCents = $balanceCents;
        $this->annualInterestRate = $annualInterestRate / 100; // convert to 0.0X
    }

    public function withdraw(int $amount): void
    {
        $this->balanceCents -= $amount;
        $this->totalWithdrawalsCents += $amount;
    }

    public function deposit(int $amount): void
    {
        $this->balanceCents += $amount;
        $this->totalDepositsCents += $amount;
    }

    public function calculateMonthlyInterest(): void
    {
        $monthlyInterest = intval(round($this->balanceCents * ($this->annualInterestRate / 12)));
        $this->balanceCents += ($monthlyInterest);
        $this->totalInterestEarnedCents += $monthlyInterest;
    }

    public function getTotalDeposits(): int
    {
        return $this->totalDepositsCents;
    }

    public function getTotalWithdrawals(): int
    {
        return $this->totalWithdrawalsCents;
    }

    public function getTotalInterestEarned(): int
    {
        return $this->totalInterestEarnedCents;
    }

    public function getBalance(): int
    {
        return $this->balanceCents;
    }

    public static function formatCurrency(int $amountCents): string
    {
        return '$' . number_format($amountCents / 100, 2);
    }
}

$initialBalance = abs((int)readline('How much money is in the account?: $') * 100);
$annualInterestRate = abs((float)readline('Enter the annual interest rate %: '));

$account = new SavingsAccount($initialBalance, $annualInterestRate);


$timePeriod = abs((int)readline('For how long do you wish to invest?: '));

for ($month = 1; $month <= $timePeriod; $month++) {
    $account->deposit(abs((int)readline("Enter amount deposited for month $month: $") * 100));
    $account->withdraw(abs((int)readline("Enter amount withdrawn for month $month: $") * 100));
    $account->calculateMonthlyInterest();

    echo PHP_EOL;
}

echo "Starting Balance: " . SavingsAccount::formatCurrency($initialBalance) . PHP_EOL;
echo "Investment period $timePeriod months, $annualInterestRate% annual interest rate\n";
echo "Total deposited: " . SavingsAccount::formatCurrency($account->getTotalDeposits()) . PHP_EOL;
echo "Total withdrawn: " . SavingsAccount::formatCurrency($account->getTotalWithdrawals()) . PHP_EOL;
echo "Interest earned: " . SavingsAccount::formatCurrency($account->getTotalInterestEarned()) . PHP_EOL;
echo "End balance: " . SavingsAccount::formatCurrency($account->getBalance()) . PHP_EOL;