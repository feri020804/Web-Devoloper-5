<?php
class Kendaraan{
    public $merk;
    public $warna;
    public $tahun_pembuatan;

    public function __construct(){
        $this->merk = "toyota";
        $this->warna = "hitam";
        $this->tahun_pembuatan = "2017";
    }
    public function roda(){
        echo "roda berputar";
    }
    public function stir(){
        echo "stir membelok";
    }
}

$toyota = new Kendaraan("toyota","hitam","2017");
$toyota->merk = "toyota";
$toyota->warna = "hitam";
$toyota->tahun_pembuatan = "2017";
$toyota->roda();
echo " Mobil $toyota->merk berwarna $toyota->warna Tahun $toyota->tahun_pembuatan dengan baik";
