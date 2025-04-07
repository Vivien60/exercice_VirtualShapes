<?php
declare(strict_types=1);
namespace virtualShapes\classes;

use config\Config;

abstract class AbstractShape
{
    public static string $color = 'white';
    public static AbstractOrderForShape $sorter;

    abstract public function draw();

    public static function orderList(AbstractShape $elt1, AbstractShape $elt2) : int
    {
        return self::$sorter::orderList($elt1, $elt2);
    }
}