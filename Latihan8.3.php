<?php

class manusia{
    //property
    var $nama;
    var $warna;

    //method construct di jalankan pertama kali
    function __costruct() {
        echo "ini adalah isi method construct <br/>";
    }

    //method destruct di jalankan terakhir
    function __destruct(){
        return "ini adalah isi method destruct <br/>";
    }

    //method manusia
    function tampilkan_nama(){
        return "Nama saya mahasiswa SI <br/>";
    }
    
}
//instansi class manusia
$manusia = new manusia();

//memanggil method tampilkan_nama dari class manusia
echo $manusia->tampilkan_nama();
?>