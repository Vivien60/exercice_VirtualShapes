<?php

namespace virtualShapes\classes;

use config\Config;

class ColorOrderForShape extends AbstractOrderForShape
{
    public static function orderList($elt1, $elt2) : int
    {
        $order = Config::newInstance()->shapesOrder;
        $rankForElt1 = array_search($elt1->getColor(), self::$eltOrder);
        $rankForElt2 = array_search($elt2->getColor(), self::$eltOrder);
        if(!$rankForElt1 || !$rankForElt2) {
            throw new \LogicException("One or more color is not in pre-sorted list");
        }
        if ($rankForElt1 == $rankForElt2) {
            return 0;
        }
        return ($rankForElt1 < $rankForElt2) ? -1 : 1;
    }
}