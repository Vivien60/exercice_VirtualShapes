<?php

namespace virtualShapes\classes;

use config\Config;

class ColorOrderForShape extends AbstractOrderForShape
{
    public static function orderList($elt1, $elt2) : int
    {
        $order = Config::newInstance()->shapesOrder;
        $rankForElt1 = array_search($elt1::$color, self::$eltOrder);
        $rankForElt2 = array_search($elt2::$color, self::$eltOrder);
        if ($rankForElt1 == $rankForElt2) {
            return 0;
        }
        return ($rankForElt1 < $rankForElt2) ? -1 : 1;
    }
}