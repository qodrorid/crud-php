<?php

class Facebook implements Likeable {

    private $user;
    private $status;
    private $like;

    public function __construct($user, $status)
    {
        $this->user = $user;
        $this->status = $status;
        $this->like = 0;
    }

    public function getPlatform() 
    {
        return 'Facebook';
    }

    public function setLike()
    {
        $this->like++;
    }

    public function getTotalLike() 
    {
        return $this->like;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function getStatus()
    {
        return $this->status;
    }    

}