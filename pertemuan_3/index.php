<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

spl_autoload_register(function($class) {
    include $class . ".php";
});

$kucing = new Kucing();
$kucing->setHarga(1000)->setRas("Persia")->setWarna("Grey")->toHtml();
$kucing->setHarga(1000)->setRas("Persia")->setWarna("Grey")->toJson();
echo '<br/>';
$kucing->shareFacebook();