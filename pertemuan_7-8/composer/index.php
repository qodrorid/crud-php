<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require("vendor/autoload.php");

use Carbon\Carbon;
use Faker\Factory;
use Portal\Lounge;

Carbon::setLocale('id');
echo Carbon::now()->toDateTimeString() . "<br/><br>";

$faker = Factory::create("id_ID");

echo $faker->name . "<br/>";
echo $faker->address . "<br/>";
echo $faker->phoneNumber . "<br/><br/>";

echo Lounge::getNews()->getCategory() . "<br/>";
echo Lounge::getNews()->getTitle() . "<br/>";
echo Lounge::getNews()->getPublished() . "<br/><br/>";

echo Lounge::getGames()->getCategory() . "<br/>";
echo Lounge::getGames()->getTitle() . "<br/>";
echo Lounge::getGames()->getPublished() . "<br/>";