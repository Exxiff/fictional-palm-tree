<?php declare(strict_types=1);
/*Exercise #8
Foo Corporation needs a program to calculate how much to pay their hourly employees.
The US Department of Labor requires that employees get paid time and a
... half for any hours over 40 that they work in a single week.
For example, if an employee works 45 hours, they get 5 hours of overtime, at 1.5 times their base pay.
The State of Massachusetts requires that hourly employees be paid at least $8.00 an hour.
Foo Corp requires that an employee not work more than 60 hours in a week.
Summary:
    An employee gets paid (hours worked) × (base pay), for each hour up to 40 hours.
    For every hour over 40, they get overtime = (base pay) × 1.5.
    The base pay must not be less than the minimum wage ($8.00 an hour). If it is, print an error.
    If the number of hours is greater than 60, print an error message.
Write a method that takes the base pay and hours worked as parameters, and prints the total pay or an error.
Write a main method that calls this method for each of these employees:
                Employee 	Base Pay 	Hours Worked
                Employee 1 	$7.50 	    35
                Employee 2 	$8.20 	    47
                Employee 3 	$10.00 	    73
 * */
function createWorker(string $name, float $basePay, int $hoursWorked): stdClass
{
    $worker = new stdClass();
    $worker->name = $name;
    $worker->basePay = $basePay;
    $worker->hoursWorked = $hoursWorked;
    return $worker;
}

$workers = [
    createWorker('Employee 1', 7.50, 35),
    createWorker('Employee 2', 8.20, 47),
    createWorker('Employee 3', 10.00, 73),
//    createWorker('Employee 4', 1.25, 150),
//    createWorker('Employee 5', 13.00, 40),
//    createWorker('Employee 6', 7.00, 60),
];

function calculateSalary(float $basePay, int $hoursWorked): string
{
    $outputMessage = '';
    $maxWeeklyHours = 60;
    $minimumWage = 8;
    $overtimeThreshold = 40;
    $overtimePay = 1.5;

    $overtimeSalary = ($hoursWorked - $overtimeThreshold) * ($basePay * $overtimePay);
    $salary = $basePay * $hoursWorked; // !!!
    $baseSalary = $overtimeThreshold * $basePay;
    $totalSalary = $baseSalary + $overtimeSalary;

    if ($hoursWorked > $overtimeThreshold) {
        $outputMessage .= number_format($totalSalary, 2) . "$";
    } else {
        $outputMessage .= number_format($salary, 2) . "$";
    }

    if ($basePay < $minimumWage) {
        $outputMessage .= "\n* Error: Hourly wage is lower than $minimumWage $/h!!!";
    }
    if ($hoursWorked > $maxWeeklyHours) {
        $outputMessage .= "\n* Error: Workers hours are higher than legal limit $maxWeeklyHours H/Week!!!";
    }
    return $outputMessage;
}

foreach ($workers as $worker) {
    $workerInfo = "$worker->name, Rate: $worker->basePay$/h, Worked: {$worker->hoursWorked}h";
    echo $workerInfo . ', calculated salary: ' . calculateSalary($worker->basePay, $worker->hoursWorked) . PHP_EOL;
}