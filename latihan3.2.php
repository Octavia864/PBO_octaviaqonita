<?php
class Kendaraan
{
    var $jumlahRoda=4;
    var $warna;
    var $bahanBakar="Premium"
    var $harga=100000000;
    var $merek;
    var $tahunPembuatan=2004;
//Objek1
    //deklarasi objek dan istansiasi objek (berada di luar class)
    $ObjekKendaraan1 = new Kendaraan;
    //setting properties
    $ObjekKendaraan1 ->harga=100000000;
    $ObjekKendaraan1 ->tahunPembuatan = 1999;
    //intansiaisi objek (pemanggilan method/function)
    echo"Status Harga : ".objekKendaraan ->statusHarga();

//Objek2
    //deklarasi objek dan instansiasi objek (berada di luar class)
    $objekKendaraan2 = new Kendaraan;
    //setting properties 
    $objekKendaraan2 ->bahanBakar ="Pertamax";
    $objekKendaraan2 ->tahunPembuatan = 1999;
    //instansiasi objek (pemanggilan method/function)
    echo "<br>";
    echo "Status BBM:".objekKendaraan2 ->dapatSubsidi();
    echo "<br>";
    echo "Harga Bekas:"<div class="objekKendaraan2" ->hargaSecondKendaraan();
}