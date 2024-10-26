<?php

class RumusBangunRuang {
    public function hitungLuasPersegiPanjang($panjang, $lebar) {
        $volume = $panjang * $lebar;
        return $volume;
    }

    public function hitungKelilingPersegiPanjang($panjang, $lebar) {
        $keliling = 2 * ($panjang + $lebar);
        return $keliling;
    }

    public function hitungLuasPersegi($sisi) {
        $persegi = $sisi * $sisi;
        return $persegi;
    }

    public function hitungLuasSegitiga($alas, $tinggi) {
        $segitiga = 0.5 * $alas * $tinggi;
        return $segitiga;
    }

    public function hitungLuasLingkaran($jarijari) {
        $LuasLingkaran = pi() * pow($jarijari, 2);
        return $LuasLingkaran;
    }

    public function hitungKelilingLingkaran($jarijari) {
        $Kelilinglingkaran = 2 * pi() * $jarijari;
        return $Kelilinglingkaran;
    }
}


$bangunRuang = new RumusBangunRuang();
$luasPersegi = $bangunRuang->hitungLuasPersegiPanjang(10, 5);
echo "Luas Persegi Panjang : $luasPersegi <br>";

$kelilingPersegi = $bangunRuang->hitungKelilingPersegiPanjang(10, 5);
echo "Keliling Persegi Panjang : $kelilingPersegi <br>";

$luasPersegi = $bangunRuang->hitungLuasPersegi(10);
echo "Luas Persegi : $luasPersegi <br>";

$luasSegitiga = $bangunRuang->hitungLuasSegitiga( 10, 15);
echo "Luas Segitiga : $luasSegitiga <br>";

$luasLingkaran = $bangunRuang->hitungLuasLingkaran(12);
echo "Luas Lingkaran : $luasLingkaran <br>";

$kelilingLingkaran = $bangunRuang->hitungKelilingLingkaran(12);
echo "Keliling Lingkaran : $kelilingLingkaran <br>";