<?
//akses properties
class Kendaraan
{
    var $jumlahRoda;
    var $warna;
    var $bahanBakar;
    var $Harga;
    var $Merek;
    var $tahunpembuatan;
    
    function setMerek($x) {
        $this ->merek = $x;
    }
    function getMerek() {
        return $this ->merek;
    }
    function setHarga() {
        $this ->harga =$y;
    }
    function getHarga() {
        return $this ->harga;
    } 

}
$kendaraan1 = new Kendaraan;
$kendaraan1 ->setMerek('Yamaha Mio');
$kendaraan1 ->setHarga(10000000);
echo $kendaraan1 ->getMerek('Yamaha Mio');
echo "<br>";
echo $kendaraan1 ->getHarga('10000000');

?>

