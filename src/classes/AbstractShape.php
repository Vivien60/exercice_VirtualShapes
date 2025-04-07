<?php
declare(strict_types=1);
namespace virtualShapes\classes;

use config\Config;

abstract class AbstractShape
{
    abstract public function draw();

    public static function orderList($elt1, $elt2)
    {
        $order = Config::newInstance()->shapesOrder;
        $rankForElt1 = array_search($elt1::class, $order);
        $rankForElt2 = array_search($elt2::class, $order);
        if( $rankForElt1 == $rankForElt2 )
            return 0;
        return ($rankForElt1 < $rankForElt2) ? -1 : 1;
    }
}