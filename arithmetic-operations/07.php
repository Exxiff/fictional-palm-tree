<?php
/*Exercise #7
Modify the example program to compute the position of an object after falling for 10 seconds,
... outputting the position in meters. The formula in Math notation is:
Gravity formula
(https://github.com/codelex-io/php-syllabus/blob/main/php-basics/arithmetic-operations/gravity-formula.png)
Note: The correct value is -490.5m.*/

$accelerationSpeed = (-9.81);
$timeInSeconds = 10;
$initialVelocity = 0;
$initialPosition = 0;

$endPosition = (0.5) * ($accelerationSpeed * ($timeInSeconds ** 2) + $initialVelocity * $timeInSeconds +
        $initialPosition);

echo "After $timeInSeconds second fall, your vertical position would change by $endPosition meters.\n";