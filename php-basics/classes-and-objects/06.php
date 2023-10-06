<?php

declare(strict_types=1);

class Survey
{
    private int $totalSurveyed;
    private float $purchasedDrink;
    private float $prefersCitrus;

    public function __construct(int $totalSurveyed, float $purchasedDrink, float $prefersCitrus)
    {
        $this->totalSurveyed = $totalSurveyed;
        $this->purchasedDrink = $purchasedDrink;
        $this->prefersCitrus = $prefersCitrus;
    }

    public function calculateEnergyDrinkers(): float
    {
        return round($this->totalSurveyed * $this->purchasedDrink);
    }

    public function getTotalPeople(): int
    {
        return $this->totalSurveyed;
    }

    public function calculatePrefersCitrus(): float
    {
        return round($this->calculateEnergyDrinkers() * $this->prefersCitrus);
    }
}

$survey = new Survey(12467, 0.14, 0.64);

$totalSurveyed = $survey->getTotalPeople();
$weeklyDrinkers = $survey->calculateEnergyDrinkers();
$prefersCitrus = $survey->calculatePrefersCitrus();

echo "Total number of people surveyed $totalSurveyed.\n";
echo "Approximately $weeklyDrinkers bought at least one energy drink.\n";
echo "$prefersCitrus of those $weeklyDrinkers prefer citrus flavored energy drinks.\n";