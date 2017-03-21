<?php

class Kucing extends IbuKucing {

    const MAX_UMUR = 17;

    private $warna;
    private $ras;
    private $harga;


    public function __construct($harga = 10000, $ras = "Persia", $warna = "Merah")
    {
        $this->harga = $harga;
        $this->ras = $ras;
        $this->warna = $warna;
    }

    public function meong() 
    {
        return $this->getSuami();
    }

    public function getHarga()
    {
        return $this->harga;
    }

    public function getRas()
    {
        return $this->ras;
    }

    public function getWarna()
    {
        return $this->warna;
    }

    public function setHarga($harga = 99999999)
    {
        if ($harga >= 100) {
            $this->harga = $harga;
        }
    }

    public function getUmur()
    {
        return self::MAX_UMUR;
    }

}