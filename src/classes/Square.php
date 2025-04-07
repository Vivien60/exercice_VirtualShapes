<?php
declare(strict_types=1);
namespace virtualShapes\classes;
class Square extends AbstractShape
{
    public function __construct()
    {
    }

    public function draw()
    {
        echo 'Draw a square';
    }
}