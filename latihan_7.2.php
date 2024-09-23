<?php

class manusia {
    public $nama;
    public $umur;
    public $gender;

    function bicara() {
        echo "Selamat Datang";
    }

    function getinfo() {
        echo "Nama= " . $this->nama . "<br/>";
        echo "Umur= " . $this->umur . "<br/>";
        echo "JK= " . $this->gender . "<br/>";
    }
}

class ayah extends manusia {
    function pekerjaan() {
        echo "Pegawai Negeri Sipil";
    }
}

class ibu extends manusia {
    function pekerjaan() {
        echo "Ibu Rumah Tangga";
    }
}

class anak extends manusia {
    function pekerjaan() {
        echo "Pelajar";
    }
}

$objekayah = new ayah();
$objekayah->nama = "Budi";
$objekayah->gender = "Laki-Laki";
$objekayah->umur = "45";
echo "<b>Info Ayah</b><br/>";
$objekayah->getinfo();
$objekayah->pekerjaan();

$objekibu = new ibu();
$objekibu->nama = "Dini";
$objekibu->gender = "Perempuan";
$objekibu->umur = "38";
echo "<b>Info Ibu</b><br/>";
$objekibu->getinfo();
$objekibu->pekerjaan();

$objekanak = new anak();
$objekanak->nama = "Ardi";
$objekanak->gender = "Laki-Laki";
$objekanak->umur = "15";
echo "<b>Info Anak</b><br/>";
$objekanak->getinfo();
$objekanak->pekerjaan();
?>