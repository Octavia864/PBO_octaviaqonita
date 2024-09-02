<?php

class Kendaraan
{
    var $jumlahRoda;
    var $warna;
    var $bahan_bakar;
    var $harga;
    var $merek;

    function statusharga()

    {
        if ($this ->harga > 50000000) $status = 'Mahal';
        else $status = 'Murah';
        return $status; 
    }
    
    function setmerek($x)
    {
        $this -> merek = $x;
    }
    function setHarga($x)
    {
        $this->harga = $x;
    }
    
}