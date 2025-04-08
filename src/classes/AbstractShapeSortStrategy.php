<?php

namespace virtualShapes\classes;

abstract class AbstractShapeSortStrategy
{
    protected static array $eltOrder;

    public function __construct(array $eltOrder)
    {
        self::$eltOrder = $eltOrder;
    }

    abstract public static function orderList(AbstractShape $elt1, AbstractShape $elt2):int;
}