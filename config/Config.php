<?php
declare(strict_types=1);
namespace config;

use virtualShapes\classes\AbstractShapeSortStrategy;
use virtualShapes\classes\Circle;
use virtualShapes\classes\ColorShapeSortStrategy;
use virtualShapes\classes\Square;

class Config
{
    private static ?Config $_instance = null;
    public AbstractShapeSortStrategy $shapesOrder;

    private function __construct()
    {
        self::$_instance = $this;
        $this->shapesOrder = new ColorShapeSortStrategy(['red', 'white', 'blue', 'green', ]);
    }

    public static function newInstance(): static
    {
        return self::$_instance?:new static();
    }
}