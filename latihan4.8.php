<?php
class Kendaraan
{

}
$Data1 = array ('Toyota Yaris','4','160000000','Merah','Pertamax','2014');
$Data2 = array ('Honda Scoopy','13000000','Putih','Premium','2005');
$Data3 = array ('Isuzu Panther','4','400000000','Hitam','Solar','1994');

    for ($i = 1; $i <=3; $i++) {
    for ($h = 0; $h <=5; $h++) {
                ${"kendaraan$i"} = new Kendaraan();
                ${"kendaraan$i"} -> setMerek(${"Data$i"} [0] );
                ${"kendaraan$i"} -> setjmlroda(${"Data$i"} [1]);
                ${"kendaraan$i"} ->setHarga(${"Data$i"} [2] );
                ${"kendaraan$i"} ->setwarna(${"Data$i"})

    }
    }