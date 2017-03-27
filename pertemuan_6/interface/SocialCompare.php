<?php

class SocialCompare {
    
    public static function compare(Likeable $social1, Likeable $social2)        
    {
        if ($social1->getTotalLike() > $social2->getTotalLike()) {
            echo $social1->getPlatform() . " " . $social1->getUser() . " ";
            echo "Lebih populer dari " . $social2->getPlatform() . " ";
            echo $social2->getUser() . "\n";
        } else if($social1->getTotalLike() < $social2->getTotalLike()) {
            echo $social2->getPlatform() . " " . $social2->getUser() . " ";
            echo "Lebih populer dari " . $social1->getPlatform() . " ";
            echo $social1->getUser() . "\n";
        } else {
            echo 'Kedua user sama-sama populer';
        }
    }

}
