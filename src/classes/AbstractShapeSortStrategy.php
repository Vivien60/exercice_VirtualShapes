<?php

namespace virtualShapes\classes;

abstract class AbstractShapeSortStrategy
{

    public function __construct(protected array $eltOrder)
    {
    }

    abstract public function orderList(AbstractShape $elt1, AbstractShape $elt2):int;
}