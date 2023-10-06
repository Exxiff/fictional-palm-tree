<?php

declare(strict_types=1);

class FuelGauge
{
    const MAX_FUEL = 70;

    private int $fuelAmount;

    public function __construct(int $startingFuel)
    {
        $this->fuelAmount = $startingFuel;
    }

    public function getFuelReport(): int
    {
        return $this->fuelAmount;
    }

    public function fillFuelTank(int $amount): void
    {
        while ($this->fuelAmount < $amount && $this->fuelAmount !== self::MAX_FUEL) {
            $this->fuelAmount++;
        }
    }

    public function burnFuel(): void
    {
        if ($this->fuelAmount >= 0) {
            $this->fuelAmount--;
        }
    }
}

class Odometer
{
    const MAX_UNITS = 999999;
    private int $currentUnits;
    private int $tripDistance = 0;
    private FuelGauge $fuelGauge;

    public function __construct(int $startingUnits, FuelGauge $fuelGauge)
    {
        $this->currentUnits = $startingUnits;
        $this->fuelGauge = $fuelGauge;
    }

    public function getOdometerReport(): int
    {
        return $this->currentUnits;
    }

    public function getTripDistance(): int
    {
        return $this->tripDistance;
    }

    public function increaseOdometer(): void
    {
        $this->currentUnits++;
        $this->tripDistance++;
        if ($this->currentUnits > self::MAX_UNITS) {
            $this->currentUnits = 0;
        }
    }

    public function fuelConsumption(): void
    {
        if (($this->tripDistance) % 10 === 0) {
            $this->fuelGauge->burnFuel();
        }
    }
}

$fuelTank = new FuelGauge(0);
$odometer = new Odometer(999985, $fuelTank);

//Fill Fuel
echo "Fuel tank: {$fuelTank->getFuelReport()} L\n";
$fuelTank->fillFuelTank((int)readline('Fill fuel tank: '));
echo "Fuel tank: {$fuelTank->getFuelReport()} L\n";

//Driving
while ($fuelTank->getFuelReport() > 0) {
    $odometer->increaseOdometer();
    $odometer->fuelConsumption();
    echo "Odometer: {$odometer->getOdometerReport()} KM, Fuel: {$fuelTank->getFuelReport()} L\n";
}
echo "Distance traveled: {$odometer->getTripDistance()} KM\n";