<?php

class BangunDatar {

    // Constructor untuk menyimpan konstanta
    public $phi;

    public function __construct() {
        $this->phi = 3.14;
    }

    // Method menghitung luas persegi
    public function persegi($sisi) {
        $luas = $sisi * $sisi;
        $keliling = 4 * $sisi;

        echo "<h3>Persegi</h3>";
        echo "Sisi: $sisi <br>";
        echo "Luas: $luas <br>";
        echo "Keliling: $keliling <br>";
    }

    // Method menghitung luas persegi panjang
    public function persegiPanjang($panjang, $lebar) {
        $luas = $panjang * $lebar;
        $keliling = 2 * ($panjang + $lebar);

        echo "<h3>Persegi Panjang</h3>";
        echo "Panjang: $panjang <br>";
        echo "Lebar: $lebar <br>";
        echo "Luas: $luas <br>";
        echo "Keliling: $keliling <br>";
    }

    // Method menghitung luas segitiga
    public function segitiga($alas, $tinggi, $sisi1, $sisi2, $sisi3) {
        $luas = 0.5 * $alas * $tinggi;
        $keliling = $sisi1 + $sisi2 + $sisi3;

        echo "<h3>Segitiga</h3>";
        echo "Alas: $alas <br>";
        echo "Tinggi: $tinggi <br>";
        echo "Sisi 1: $sisi1 <br>";
        echo "Sisi 2: $sisi2 <br>";
        echo "Sisi 3: $sisi3 <br>";
        echo "Luas: $luas <br>";
        echo "Keliling: $keliling <br>";
    }

    // Method menghitung luas lingkaran
    public function lingkaran($jariJari) {
        $luas = $this->phi * $jariJari * $jariJari;
        $keliling = 2 * $this->phi * $jariJari;

        echo "<h3>Lingkaran</h3>";
        echo "Jari-jari: $jariJari <br>";
        echo "Phi: " . $this->phi . "<br>";
        echo "Luas: $luas <br>";
        echo "Keliling: $keliling <br>";
    }

    // Method menghitung luas trapesium
    public function trapesium($sisiAtas, $sisiBawah, $tinggi, $sisiMiring1, $sisiMiring2) {
        $luas = 0.5 * ($sisiAtas + $sisiBawah) * $tinggi;
        $keliling = $sisiAtas + $sisiBawah + $sisiMiring1 + $sisiMiring2;

        echo "<h3>Trapesium</h3>";
        echo "Sisi atas: $sisiAtas <br>";
        echo "Sisi bawah: $sisiBawah <br>";
        echo "Tinggi: $tinggi <br>";
        echo "Sisi miring 1: $sisiMiring1 <br>";
        echo "Sisi miring 2: $sisiMiring2 <br>";
        echo "Luas: $luas <br>";
        echo "Keliling: $keliling <br>";
    }
}

// Membuat objek
$bangun = new BangunDatar();

// Memanggil setiap method
$bangun->persegi(5);
$bangun->persegiPanjang(8, 4);
$bangun->segitiga(6, 4, 5, 5, 6);
$bangun->lingkaran(7);
$bangun->trapesium(8, 12, 5, 5, 5);

?>