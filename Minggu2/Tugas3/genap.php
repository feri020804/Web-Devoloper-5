<?php
function Genap($pertama,$terakhir){
    $angka = [];
    for ($i=$pertama; $i <= $terakhir; $i++){
        if ($i % 2 == 0){
            $angka[] = $i;
        }
    }
    return $angka;
}

$genap = Genap(1,10);
echo  "Ini adalah tampilan angka ganjil: " . implode(", ",$genap);