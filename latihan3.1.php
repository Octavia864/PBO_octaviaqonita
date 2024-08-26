<?php
class Kendaraan
{
    var $ jumlah roda=4;
    var $ warna;
    var $ bahanBakar="Premium";
    var $ harga=100000000;
    var $ merek;
    var $ tahunPembuatan=2004;
    function statusHarga()
    {
                    if($this->harga >50000000)
                    {
                    $status = "Harga kendaraan Mahal";
                    }
                    else
                    {
                    $status = "Harga Kendaraan Murah";
                    }
                }
    function statusSubsidi()
    {
                    if($this->$tahunPembuatan < 2005 && 
bahanBakar=="Premium"){
                    $status = "DAPAT SUBSIDI";
                    }
                    else{
                    $status = "TIDAK DAPAT SUBSIDI";
                    }
                    return$status;
    }
}             
//instansiasi kelas
$ObjekKendaraan = new Kendaraan();//pembuatan objek dari kelas
echo"jumlahRoda : ".$ObjekKendaraan->jumlahRoda."<br/>";//proses instansiasi
 pemanggilan variable
echo "Status Harga :".$ObjekKendaraan->$statusHarga();//proses
 instansiasi/pemanggilan function dari kelas
echo "Status Subsidi:".$ObjekKendaraan1->statusSubsidi();
?>
