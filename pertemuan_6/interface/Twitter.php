<?php

class Twitter implements Likeable {

    private $tweet;
    private $user;
    private $favorite;

    public function __construct($user, $tweet)
    {
        $this->user = $user;
        $this->tweet = $tweet;
        $this->favorite = 0;
    }

    public function getPlatform() 
    {
        return 'Twitter';
    }

    public function setLike()
    {
        $this->setFavorite();
    }

    public function setFavorite()
    {
        $this->favorite++;
    }

    public function getFavorite()
    {
        return $this->favorite;
    }   
    
    public function getTotalLike() 
    {
        return $this->getFavorite();
    }

    public function getUser()
    {
        return $this->user;
    }

    public function getTweet()
    {
        return $this->tweet;
    }    

}