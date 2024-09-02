<?php
//membuat class
class Kendaraan{
    var $merek;
    var $jmlroda;
    var $harga;
    var $warna;
    var $bhnbakar;
    var $tahun;

    function setMerek($x)
    {
        $this ->merek = $x;
    }
    function setHarga($x)
    {
        $this ->harga = $x;
    }
    function setjmlroda($x)
    {
        $this ->jmlroda = $x;
    }
    function setwarna ($x)
    {
        $this ->warna = $x;
    }
    function setbhnbakar ($x)
    {
        $this ->jmlroda = $x;
    }
    function settahun ($x)
    {
        $this ->tahun = $x;
    }

}
$Kendaraan1 = new Kendaraan();
$Kendaraan1 ->setMerek('Toyota Yaris');
$Kendaraan1 ->setjmlroda(4);
$Kendaraan1 ->setharga(160000000);
$Kendaraan1 ->setwarna("Merah");
$Kendaraan1 ->setbhnbakar("Premium");
$Kendaraan1 ->settahun(2005);

$Kendaraan2 = new Kendaraan();
$Kendaraan2 ->setMerek('Honda Scoopy');
$Kendaraan2 ->setjmlroda(2);
$Kendaraan2 ->setharga(13000000);
$Kendaraan2 ->setwarna("Putih");
$Kendaraan2 ->setbhnbakar("Premium");
$Kendaraan2 ->settahun(2004);

$Kendaraan3 = new Kendaraan();
$Kendaraan3 ->setMerek('Isuzu Panther');
$Kendaraan3 ->setjmlroda(4);
$Kendaraan3 ->setharga(170000000);
$Kendaraan3 ->setwarna("Hitam");
$Kendaraan3 ->setbhnbakar("Solar");
$Kendaraan3 ->settahun(2003);
echo $Kendaraan1 ->merek;
echo "<br>";
echo $Kendaran1 ->jmlroda;
echo "<br>";
echo $Kendaraan1 ->harga;
echo "<br>";
echo $Kendaraan1 ->warna;
echo "<br>";
echo $Kendaraan1 ->bhnbakar;
echo "<br>";
echo $Kendaraan1 ->tahun;
echo "<br>";
echo "<br>";

echo $Kendaraan2 ->merek;
echo "<br>";
echo $Kendaraan2 ->jmlroda;
echo "<br>";
echo $Kendaraan2 ->harga;
echo "<br>";
echo $Kendaraan2 ->warna;
echo "<br>";
echo $Kendaraan2 ->$bhnbakar;
echo "<br>";
echo $Kendaraan2 ->tahun;
echo "<br>";
echo "<br>";

echo $Kendaraan3 ->merek;
echo "<br>";
echo $Kendaraan3 ->jmlroda;
echo "<br>";
echo $Kendaraan3 ->harga;
echo "<br>";
echo $Kendaraan3 ->warna;
echo "<br>";
echo $Kendaraan3 ->bhnbakar;
echo "<br>";
echo $Kendaraan3 ->tahun;
echo "<br>";

?>
