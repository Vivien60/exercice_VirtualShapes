<?php
declare(strict_types=1);
function autoload_virtualShapes_1247575(string $nomClasse) : void {
    $prefix = "virtualShapes";
    $len = strlen($prefix);
    if (strncmp($prefix, $nomClasse, $len) !== 0) {
        // no, move to the next registered autoloader
        return;
    }
    $nomClasse = substr($nomClasse, $len+1);
    $baseDir =dirname(__DIR__).DIRECTORY_SEPARATOR."src";
    $srcClass = implode(DIRECTORY_SEPARATOR, [
        $baseDir,
        str_replace("\\", DIRECTORY_SEPARATOR, "$nomClasse.php"),
    ]);
    if(file_exists($srcClass)) {
        include $srcClass;
        return;
    }
}

spl_autoload_register('autoload_virtualShapes_1247575');
