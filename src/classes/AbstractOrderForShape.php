<?php

namespace virtualShapes\classes;

abstract class AbstractOrderForShape
{
    abstract public static function orderList(AbstractShape $elt1, AbstractShape $elt2):int;
}