<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

spl_autoload_register(function($class) {
    include $class . ".php";
});

$kucing = new Kucing();
Kucing::bab();
echo '<br/>';
echo Kucing::$makanan;
echo '<br/>';
$kucing->minumAsi('taufan', 'ridho');
echo Kucing::minumJus('jeruk', 'jeruk bali');
$kucing->beratBadan = 80;
$kucing->beratTubuh;

echo new Kucing;