<?php

declare(strict_types=1);

/*Write a console program in a class named AsciiFigure that draws a figure of the following form, using for loops.

////////////////\\\\\\\\\\\\\\\\
////////////********\\\\\\\\\\\\
////////****************\\\\\\\\
////************************\\\\
********************************

Then, modify your program using an integer class constant so that it can create a similar figure of any size.
For instance, the diagram above has a size of 5. For example, the figure below has a size of 3:

////////\\\\\\\\
////********\\\\
****************

And the figure below has a size of 7:

////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\
////////////////////********\\\\\\\\\\\\\\\\\\\\
////////////////****************\\\\\\\\\\\\\\\\
////////////************************\\\\\\\\\\\\
////////********************************\\\\\\\\
////****************************************\\\\
************************************************
*/

class AsciiFigure
{
    const SIZE = 7;

    public static function drawFigure(int $size = self::SIZE): void
    {
        for ($i = 0; $i < $size; $i++) {
            $slashes = '';
            $stars = '';
            $backSlashes = '';

            for ($j = $size; $j > $i + 1; $j--) {
                $slashes .= '////';
            }
            for ($j = 0; $j < $i; $j++) {
                $stars .= '********';
            }
            for ($j = $size; $j > $i + 1; $j--) {
                $backSlashes .= '\\\\\\\\';
            }
            $line = $slashes . $stars . $backSlashes;
            echo $line . PHP_EOL;
        }
    }
}

AsciiFigure::drawFigure();