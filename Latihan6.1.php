<?php
class Perulangan{
    public function looping()
    {
        for ($x = 1; $x <= 10; $x++)
        {
        echo $x."<br/>"; //Badan perulangan
        }   
    }
}
$ObjekPerulangan = new Perulangan();
echo $ObjekPerulangan->looping();
?>
