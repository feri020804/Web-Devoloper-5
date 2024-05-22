<?php
function aritmatika($angka1,$angka2,$hasil){
    switch ($hasil){
        case "tambah":
            return $angka1 + $angka2;
        case "kurang":
            return $angka1 - $angka2;
        case "kali":
            return $angka1 * $angka2;
        case "bagi":
            return $angka1 / $angka2;
            if ($angka2 != 0) {
                return $angka1 / $angka2;
            }
        default:
            return "hasil tidak ditemukan";
    }
}
echo "3 + 5 = " . aritmatika(3, 5, 'tambah') . "<br>";
echo "10 - 4 = " . aritmatika(10, 4, 'kurang') . "<br>";
echo "6 * 7 = " . aritmatika(6, 7, 'kali') . "<br>";
echo "20 / 4 = " . aritmatika(20, 4, 'bagi') . "<br>";