<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require("vendor/autoload.php");

use Portal\Lounge;
use Portal\Games;

$games = new Games();
$reflection = new ReflectionClass($games);

echo "Class dari variable games adalah: " . get_class($games) . "<br/>";
echo "Method dari variable games adalah: <pre>" . print_r(get_class_methods($games), 1) . "</pre>";

echo $reflection->getName() . "<br/>";
echo $reflection->getParentClass()->getName() . "<br/>";
echo "<pre>" . print_r($reflection->getInterfaceNames(), 1) . "</pre>";