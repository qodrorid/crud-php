<?php
namespace Portal;

use Carbon\Carbon;
use Faker\Factory;

class Games extends Category implements Publishable, Printable {    

    public function getCategory()
    {
        return 'Games';
    }

    public function getTitle()
    {
        $faker = Factory::create("id_ID");

        return $faker->company;
    }

    public function getPublished()
    {
        $carbon = Carbon::createFromDate(2017, 2,  20);

        return $carbon->diffForHumans();
    }

    public function __toString()
    {
        return "Ini object games";
    }

}