<?php
class manusia{
    //properties (encapsulation)
    private $nama="Ardi";
    private $kelas= "SI 2";

    //method manusia

    private function m_nama(){
        return $this->nama;
    }
    public function tampilkan_nama(){
        return $this->m_nama;
    }
    public function  tampilkan_kelas(){
        return $this->kelas;
    }



}
//instansi class manusia
$manusia = new manusia();

//memanggil method tampilkan_nama dari class manusia
echo "Nama : ".$manusia->tampilkan_nama()."<br />";
echo "Kelas : ".manusia->tampilkan_kelas();
?>