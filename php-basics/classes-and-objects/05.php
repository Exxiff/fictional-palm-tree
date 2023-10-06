<?php

declare(strict_types=1);

class Date
{
    private int $month;
    private int $day;
    private int $year;

    public function __construct(int $month, int $day, int $year)
    {
        $this->month = $month;
        $this->day = $day;
        $this->year = $year;
    }

    public function getDay(): string
    {
        if ($this->day < 10) {
            return "0" . $this->day;
        }
        return (string)$this->day;
    }

    public function getMonth(): string
    {
        if ($this->month < 10) {
            return "0" . $this->month;
        }
        return (string)$this->month;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function setDay(int $newDay): void
    {
        $this->day = $newDay;
    }

    public function setMonth(int $newMonth): void
    {
        $this->month = $newMonth;
    }

    public function setYear(int $newYear): void
    {
        $this->year = $newYear;
    }

    public function displayDate(): string
    {
        return $this->getMonth() . "/" . $this->getDay() . "/" . $this->getYear();
    }
}

$dateToday = new Date (rand(1, 30), rand(1, 12), rand(1945, 2023));
echo "Date: " . $dateToday->displayDate() . PHP_EOL;
echo "Wrong date!\n";

$dateToday->setDay((int)readline('Set Day: '));
$dateToday->setMonth((int)readline('Set Month: '));
$dateToday->setYear((int)readline('Set Year: '));

echo "Change successful!\nDate: " . $dateToday->displayDate() . PHP_EOL;