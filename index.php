<?php
declare(strict_types=1);
/*
 * Step 1 :
 * $aSquare = new Square();
 * $aSquare->draw()
 */
require_once("src/autoload.php");

use virtualShapes\classes\AbstractShape;
use virtualShapes\classes\Circle;
use virtualShapes\classes\Square;
/*
 * Step 2 :
 * $aCircle = new Circle();
 * $aCircle->draw()
 */
/*
 * Step 3 :
 * $aSquare = new Square(2);
 * $aSquare->draw()
 * $aCircle = new Circle(3);
 * $aCircle->draw()
 */
/*
 * Step 4 :
 * $shapesToDraw = [new Square(2), new Circle(3)]
 * $orderedList = do something to $shapesToDraw
 */
/*
 * Step 5 :
 * HOLLY SHIT ! New order policies asked by our client !
 * Time to refactor ... YES !
 */
AbstractShape::$sorter = config\Config::newInstance()->shapesOrder;
$shapesToDraw = [new Square('blue'), new Circle('white')];
usort($shapesToDraw, [AbstractShape::class, 'orderList']);
foreach($shapesToDraw as $aShape)
{
    $aShape->draw();
    echo PHP_EOL;
}