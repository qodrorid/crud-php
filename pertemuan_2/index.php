<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

include("IbuKucing.php");
include("Kucing.php");

$kucing = new Kucing(1000, "Begal", "Hitam");
echo $kucing->meong() . '<br>';
echo $kucing->getRas() . '<br>';
echo $kucing->getWarna() . '<br>';
echo $kucing->getHarga() . '<br>';
$kucing->setHarga();
echo $kucing->getHarga() . '<br>';
echo $kucing->getUmur() . '<br>';