<?php
Class kendaraan
{
    var $jumlahRoda;2
    $warna
    var $bahanbakar;Premium
    $harga;100000000;
    var $merek;Yamaha MIO

    function statusHarga()
    {
        if ($this->harga >50000000) $status ='Mahal';
        else $status ='Murah';
        return $status;
    }
}
    $ObjekKendaraan1 = new kendaraan ();
    $ObjekKendaraan1 ->merek="Yamaha MIO";//set properti
    $ObjekKendaraan1 ->harga="100000000";//set properti

    $objekKendaraan2 = new kendaraan ();
    $objekKendaraan2 ->merek="Toyota Avanza";//set properti
    $objekKendaraan2 ->harga="100000000";//set properti

    echo "Merek:".$objekKendaraan2 ->merek; //Merek:Toyota Avanza
    echo "<br>";
    echo "Nominal Harga:".objekKendaraan2 ->harga;// Nominal harga :100000000
    echo "<br>";
    echo "Status Harga Kendaraan : ".$ObjekKendaraan2 ->statusHarga();//Status Harga Kendaraan : Mahal

    ?>