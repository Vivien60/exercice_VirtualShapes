<?php
declare(strict_types=1);
namespace virtualShapes\classes;

use config\Config;

abstract class AbstractShape
{
    private string $color;

    public static AbstractShapeSortStrategy $sorter;

    public function __construct(string $color)
    {
        $this->color = $color;
    }

    abstract public function draw();

    public static function orderList(AbstractShape $elt1, AbstractShape $elt2) : int
    {
        if(!self::$sorter) {
            throw new \LogicException("Sorter strategy not initialized");
        }
        return self::$sorter::orderList($elt1, $elt2);
    }

    public function getColor(): string
    {
        return $this->color;
    }

}