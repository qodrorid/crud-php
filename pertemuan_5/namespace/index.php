<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once("Asus/Smartphone.php");
require_once("Xiaomi/Smartphone.php");
require_once("Advance/Smartphone.php");

use Asus\Smartphone as Asus;
use Xiaomi\Smartphone as Xiaomi;
use Advance\Smartphone as Advance;

$asus = new Asus();
$xiaomi = new Xiaomi();
$advance = new Advance();

echo $asus->tampilMerk() . '<br>';
echo $xiaomi->tampilMerk() . '<br>';
echo $advance->tampilMerk() . '<br>';