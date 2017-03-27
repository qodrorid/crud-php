<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once("Likeable.php");
require_once("Facebook.php");
require_once("Twitter.php");
require_once("SocialCompare.php");

$fbAhok = new Facebook("Ahok", "Jangan mau dibohongi Al-Maidah 51");
$fbAhok->setLike();
$fbAhok->setLike();

$tweetAnies = new Twitter("Anies", "Kembali ke laptop");
$tweetAnies->setFavorite();
$tweetAnies->setFavorite();
$tweetAnies->setFavorite();

SocialCompare::compare($fbAhok, $tweetAnies);