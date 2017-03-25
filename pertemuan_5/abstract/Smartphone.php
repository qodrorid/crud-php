<?php

abstract class Smartphone {

    abstract public function getMerk();
    
    abstract public function getProsesor();
    
    abstract public function getRam();
    
    abstract public function getHarga();

    public function getChild()
    {
        return "Get child smartphone";
    }

}