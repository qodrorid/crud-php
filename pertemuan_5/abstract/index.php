<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once("Smartphone.php");
require_once("Nokia.php");

$nokia = new Nokia();
echo $nokia->getMerk() . '<br/>';
echo $nokia->getProsesor() . '<br/>';
echo $nokia->getRam() . '<br/>';
echo $nokia->getHarga() . '<br/>';
echo $nokia->getChild() . '<br/>';  