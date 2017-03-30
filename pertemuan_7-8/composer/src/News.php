<?php
namespace Portal;

use Carbon\Carbon;
use Faker\Factory;

class News {

    public function getCategory()
    {
        return 'News';
    }

    public function getTitle()
    {
        $faker = Factory::create("id_ID");

        return $faker->name;
    }

    public function getPublished()
    {        
        $carbon = Carbon::createFromDate(2017, 3,  20);

        return $carbon->diffForHumans();
    }

}