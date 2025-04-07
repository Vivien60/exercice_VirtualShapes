<?php
declare(strict_types=1);
namespace config;

use virtualShapes\classes\Circle;
use virtualShapes\classes\Square;

class Config
{
    private static ?Config $_instance = null;
    public array $shapesOrder;

    private function __construct()
    {
        self::$_instance = $this;
        $this->shapesOrder = ['red', 'green', 'white', 'blue'];
    }

    public static function newInstance(): static
    {
        return self::$_instance?:new static();
    }
}