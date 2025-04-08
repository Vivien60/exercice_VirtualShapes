<?php
namespace virtualShapes\classes;

class Circle extends AbstractShape
{
    public function __construct($color = 'white')
    {
        parent::__construct($color);
    }

    public function draw()
    {
        echo 'Draw a circle';
    }
}