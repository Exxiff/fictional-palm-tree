<?php declare(strict_types=1);
/*Exercise #9
Write a program that calculates and displays a person's body mass index (BMI).
Where weight is measured in pounds and height is measured in inches.
Display a message indicating whether the person has optimal weight, is underweight, or is overweight.
A person's BMI is calculated with the following formula: BMI = weight x 703 / height ^ 2.
A sedentary person's weight is considered optimal if his or her BMI is between 18.5 and 25.
If the BMI is less than 18.5, the person is considered underweight.
If the BMI value is greater than 25, the person is considered overweight.
Your program must accept metric units.*/


//Conversion from metric to imperial
function centimetersToInches(float $input): float
{
    return $input * 0.393701;
}

function kgToLbs(float $input): float
{
    return $input * 2.20462;
}

//Get BMI, Rounding twice, because PHP hates math
function calculateBmi(float $weight, float $height): float
{
    $result = 703 * ($weight / $height ** 2);
    return round(round($result, 2), 1);
}

//User input
do {
    $userWeightKG = (float)readline("INSERT WEIGHT KG : ");
    $userHeightCm = (float)readline("INSERT HEIGHT CM : ");
    if ($userWeightKG <= 0 || $userHeightCm <= 0) {
        echo "Please enter valid values for weight and height.\n";
    }
} while ($userWeightKG <= 0 || $userHeightCm <= 0);

$userWeightLbs = kgToLbs($userWeightKG);
$userHeightInches = centimetersToInches($userHeightCm);
$userBmi = calculateBmi($userWeightLbs, $userHeightInches);

//Switch config
$lowerLimit = 18.5;
$upperLimit = 25;

//Main output message
switch ($userBmi) {
    case ($userBmi < $lowerLimit):
        echo "BMI of $userBmi indicates that you are Underweight.\n";
        break;
    case ($userBmi > $upperLimit):
        echo "BMI of $userBmi indicates that you are Overweight.\n";
        break;
    case($userBmi > $lowerLimit && $userBmi < $upperLimit):
        echo "BMI of $userBmi indicates that you are at a Optimal weight.\n";
        break;
}
