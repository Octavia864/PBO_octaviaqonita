<?php
class manusia{
    public $nama;
    public $umur;
    public $gender;

    function bicara(){
        echo "Selamat Datang";
    }

    function getInfo(){
        echo "Nama=".$this->nama."<br/>";
        echo "Umur=".$this->umur."<br/>";
        echo "JK=".$this->gender."<br/>";
    }
}

class ayah extends manusia{
    function pekerjaan(){
        echo "Pegawai Negeri Sipil";
    }
}
 class ibu extends manusia{
    function pekerjaan(){
        echo "Ibu Rumah Tangga";
    }
 }

 class anak extends manusia{
    function pekerjaan(){
        echo "Pelajar";
    }
 }

$ObjectAyah=new Ayah();
$ObjectAyah->nama="Budi";
$ObjectAyah->gender="Laki-Laki";
$ObjectAyah->umur="45";
echo "<b>Info Ayah</b><br/>";
$ObjectAyah->getInfo();
$ObjectAyah->pekerjaan();

$ObjectIbu=new ibu();
$ObjectIbu->nama="Dini";
$ObjectIbu->gender="Perempuan";
$ObjectIbu->umur="38";
echo "<b>Info Ibu</b><br/>";
$ObjectIbu->getInfo();
$ObjectIbu->pekerjaan();

$ObjectAnak=new anak();
$ObjectAnak->nama="Ardi";
$ObjectIbu->gender="Laki-Laki";
$ObjectIbu->umur="15";
echo "<b>Info Anak</b><br/>";
$ObjectIbu->getInfo();
$ObjectIbu->pekerjaan();




