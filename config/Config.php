<?php
declare(strict_types=1);
namespace config;

use virtualShapes\classes\AbstractOrderForShape;
use virtualShapes\classes\Circle;
use virtualShapes\classes\ColorOrderForShape;
use virtualShapes\classes\Square;

class Config
{
    private static ?Config $_instance = null;
    public AbstractOrderForShape $shapesOrder;

    private function __construct()
    {
        self::$_instance = $this;
        $this->shapesOrder = new ColorOrderForShape(['red', 'white', 'blue', 'green', ]);
    }

    public static function newInstance(): static
    {
        return self::$_instance?:new static();
    }
}