<?php
declare(strict_types=1);
namespace virtualShapes\classes;
class Square extends AbstractShape
{
    public static string $color = 'red';

    public function __construct()
    {
    }

    public function draw()
    {
        echo 'Draw a square';
    }
}