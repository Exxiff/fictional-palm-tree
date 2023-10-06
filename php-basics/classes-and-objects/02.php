<?php

declare(strict_types=1);

class Point
{
    private int $x;
    private int $y;

    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function swapPoints(Point $point1, Point $point2)
    {
        $tempX = $point1->x;
        $tempy = $point1->y;

        $point1->x = $point2->x;
        $point1->y = $point2->y;

        $point2->x = $tempX;
        $point2->y = $tempy;
    }

    public function getPoints(): string
    {
        return "($this->x, $this->y)\n";
    }
}

$p1 = new Point(5, 2);
$p2 = new Point(-3, 6);

echo $p1->getPoints();
echo $p2->getPoints();

$p1->swapPoints($p1, $p2);

echo $p1->getPoints();
echo $p2->getPoints();