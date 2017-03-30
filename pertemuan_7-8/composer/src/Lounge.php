<?php
namespace Portal;

class Lounge {

    public function __construct()
    {
        
    }

    public static function getNews()
    {
        return new News();
    }

    public static function getGames()
    {
        return new Games();
    }    

}