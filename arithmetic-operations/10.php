<?php declare(strict_types=1);
//Exercise #10

function circleArea(float $radius): float
{
    return round((pi() * $radius ** 2), 2);
}

function rectangleArea(float $length, float $width): float
{
    return $length * $width;
}

function triangleArea(float $base, float $height): float
{
    return $base * $height * 0.5;
}

while (true) {
    echo PHP_EOL;
    echo "Geometry Calculator:\n";
    echo "1. Calculate the Area of a Circle\n";
    echo "2. Calculate the Area of a Rectangle\n";
    echo "3. Calculate the Area of a Triangle\n";
    echo "4. Quit\n";
    echo PHP_EOL;
    $choice = (int)readline("Enter your choice (1-4) : \n");
    echo "You picked $choice\n";

    if ($choice === 4) {
        echo "Goodbye!\n";
        break;
    } elseif ($choice < 1 || $choice > 4) {
        echo "Please select a number from 1 to 4!\n";
    } else
        switch ($choice) {
            case 1:
                while (true) {
                    $radius = readline("Input circle radius : ");
                    if ($radius <= 0) {
                        echo "Please enter only positive values!\n";
                    } else {
                        echo "Circle area is : " . circleArea((float)$radius) . PHP_EOL;
                        break;
                    }
                }
                break;
            case 2:
                while (true) {
                    $length = readline("Input rectangle length : ");
                    $width = readline("Input rectangle width : ");
                    if ($length < 0 || $width < 0) {
                        return "Please enter only positive values!\n";
                    } else {
                        echo "Rectangle area is : " . round(rectangleArea((float)$length, (float)$width), 2) . PHP_EOL;
                        break;
                    }
                }
                break;
            case 3:
                while (true) {
                    $base = readline("Input triangle base length : ");
                    $height = readline("Input triangle height : ");
                    if ($base < 0 || $height < 0) {
                        return "Please enter only positive values!\n";
                    } else {
                        echo "Triangle area is : " . round(triangleArea((float)$base, (float)$height), 2) . PHP_EOL;
                        break;
                    }
                }
                break;
        }

}


