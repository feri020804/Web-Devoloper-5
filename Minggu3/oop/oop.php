<?php
class buah
{
    public $nama;
    public $warna;
    public $rasa;

    public function __construct($nama, $warna, $rasa)
    {
        $this->nama = $nama;
        $this->warna = $warna;
        $this->rasa = $rasa;
    }

    public function jatuh()
    {
        echo "$this->nama jatuh \n";
    }
}

class mobil
{
    public $warna;
    public $merk;

    public function __construct($warna, $merk)
    {
        $this->warna = $warna;
        $this->merk = $merk;

    }

    public function berjalan()
    {
        echo "mobil $this->merk berjalan \n";
    }
    public function mengerem()
    {
        echo "mobil $this->merk mengerem \n";
    }
}

$apel = new buah("Apel", "Orange", "Manis dan Asam");
$apel->nama ="apel";
$apel->warna ="orange";
$jerul->rasa = "Manis dan Asam";
$apel->jatuh();

$toyota = new mobil("Toyota", "Silver");
$toyota->merk = "Toyota";
$toyota->warna = "Silver";
$toyota->berjalan();
echo "Mobil $toyota->merk berwarna $toyota->warna";


echo "\n";