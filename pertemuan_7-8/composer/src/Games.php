<?php
namespace Portal;

use Carbon\Carbon;
use Faker\Factory;

class Games {    

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

}