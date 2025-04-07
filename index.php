<?php
declare(strict_types=1);
/*
 * Step 1 :
 * $aSquare = new Square();
 * $aSquare->draw()
 */
require_once("src/autoload.php");

use virtualShapes\classes\Square;

$aSquare = new Square();
$aSquare->draw();
echo PHP_EOL;
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