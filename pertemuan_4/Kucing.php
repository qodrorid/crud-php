<?php

class Kucing extends IbuKucing {

    use TraitShare;

    const MAX_UMUR = 17;

    private $warna;
    private $ras;
    private $harga;
    public static $makanan = "Mie Ayam";

    public function __construct($harga = 10000, $ras = "Persia", $warna = "Merah")
    {
        $this->harga = $harga;
        $this->ras = $ras;
        $this->warna = $warna;
    }

    public function __call($method, $var)
    {
        echo $method."<br>";
        echo "<pre>".print_r($var, 1)."</pre>";
    }

    public static function __callStatic($method, $var)
    {
        echo $method."<br>";        
        echo "<pre>".print_r($var, 1)."</pre>";
    }

    public function __set($nama, $nilai)
    {
        echo "<br> Membuat property $nama dan diberi nilai $nilai";
    }

    public function __get($nama)
    {
        echo "<br> Membuat property $nama ";
    }

    public function __toString()
    {
        return "<br> dari object ke string";
    }

    public function meong() 
    {
        return $this->getSuami();
    }

    public static function lari()
    {
        echo "Kucing lagi lari <br/>";
    }

    public static function bab()
    {
        self::lari();
        static::lari();
        echo "Kucing lagi BAB";
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

    public function getUmur()
    {
        return self::MAX_UMUR;
    }

    public function setHarga($harga = 99999999)
    {
        $this->harga = $harga;
        return $this;
    }

    public function setRas($ras)
    {
        $this->ras = $ras;
        return $this;
    }

    public function setWarna($warna)
    {
        $this->warna = $warna;
        return $this;
    }

    public function toJson()
    {
        $data = [
            'ras' => $this->ras,
            'warna' => $this->warna,
            'harga' => $this->harga
        ];

        echo json_encode($data);
    }

    public function toHtml()
    {
        echo "<b>".$this->ras."</b><br>";
        echo "<b>".$this->warna."</b><br>";
        echo "<b>".$this->harga."</b><br>";
    }

}