<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

include("IbuKucing.php");
include("Kucing.php");

$kucing = new Kucing();
$kucing->meong();
echo '<br/>';
$kucing->getHarga();
echo '<br/>';
echo 'Akses property public $harga : ' . $kucing->harga;
echo '<br/>';
echo 'Akses property protected $warna : ' . $kucing->warna; // Error