<?php

class Kucing extends IbuKucing {

    protected $warna = "merah";
    private   $ras = "persia";
    public    $harga = 1000000;

    public function meong() 
    {
        echo "Suaminya Ibu : " . $this->getSuami();
        echo "<br> Kucing Meong (-,-)";
    }

    public function getHarga()
    {
        echo $this->harga;
    }

}