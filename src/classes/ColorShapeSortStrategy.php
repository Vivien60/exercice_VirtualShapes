<?php

namespace virtualShapes\classes;

use config\Config;

class ColorShapeSortStrategy extends AbstractShapeSortStrategy
{
    public function orderList($elt1, $elt2) : int
    {
        $rankForElt1 = array_search($elt1->getColor(), $this->eltOrder);
        $rankForElt2 = array_search($elt2->getColor(), $this->eltOrder);
        if($rankForElt1 === false || $rankForElt2 === false) {
            throw new \LogicException("One or more color is not in pre-sorted list");
        }
        if ($rankForElt1 == $rankForElt2) {
            return 0;
        }
        return ($rankForElt1 < $rankForElt2) ? -1 : 1;
    }
}