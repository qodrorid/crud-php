<?php

class Kucing extends IbuKucing {

    use TraitShare;

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