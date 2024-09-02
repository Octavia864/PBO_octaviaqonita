<?php
class Mahasiswa{
    var $nama;
    var $kelas;
    var $matakuliah;
    var $nilai;
    var $lulus_kuis;

function setnama($x)
{
    $this ->nama = $x;
}
function setkelas($x)
{
    $this ->kelas = $x;
}
function setmatakuliah($x)
{
    $this ->matakuliah = $x;
}
function setnilai($x)
{
    $this ->nilai = $x;
}
function setlulus_kuis ($x)
{
    $this ->lulus_kuis = $x;
}


}
$Data1 = array('Aditya','SI_2','Pemograman Berbasis Objek','80','lulus_kuis');
$Data2 = array('Shinta','SI_2','Pemograman Berbasis Objek','75','lulus_kuis');
$Data3 = array('Ineu','SI_2','Pemograman Berbasis Objek','55','Tidak lulus_kuis');

for($i = 1; $i <= 3; $i++)
for($h = 0; $h <= 3; $h++)
             ${"Mahasiswa$i"} = new Mahasiswa();
             ${"Mahasiswa$i"}->setnama(${"Data$i"} [0]);
             ${"Mahasiswa$i"}->setkelas(${"Data$i"} [1]);
             ${"Mahasiswa$i"}->setmatakuliah(${"Data$i"} [2]);
             ${"Mahasiswa$i"}->setnilai(${"Data$i"} [3]);
             ${"Mahasiswa$i"}->setlulus_kuis(${"Data$i"} [4]);
    


for ($i =1; $i <=3; $i++) {
        echo "\$mahasiswa$i<br>"
              .${"mahasiswa$i"} -> getNama()."<br>"
              .${"mahasiswa$i"} -> getkelas()."<br>"
              .${"mahasiswa$i"} -> getmatakuliah()."<br>"
              .${"mahasiswa$i"} -> getnilai()."<br>"
              .${"mahasiswa$i"} -> getlulus_kuis()."<br><br>";
}

             