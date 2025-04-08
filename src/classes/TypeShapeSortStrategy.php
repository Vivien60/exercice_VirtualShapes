<?php

namespace virtualShapes\classes;

use config\Config;

class TypeShapeSortStrategy extends AbstractShapeSortStrategy
{
    public static function orderList($elt1, $elt2) : int
    {
        $rankForElt1 = array_search($elt1::class, self::$eltOrder);
        $rankForElt2 = array_search($elt2::class, self::$eltOrder);
        if ($rankForElt1 == $rankForElt2) {
            return 0;
        }
        return ($rankForElt1 < $rankForElt2) ? -1 : 1;
    }
}