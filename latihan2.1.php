<?php
class Guru {
    var $nama_nama = array ("de","ce","ve","re");
    var $nama_guru;
    var $NIK;
    var $kelas;
    var $alamat;

}

class Murid {
    var $nama_siswa;
    var $NIS;
    var $kelas;
    var $alamat;

}

class Kurikulum {
    var $tahun_akademik;
    var $sks_matkul;
}

class Mobil {

    var $jumlahRoda=4;
    var $warna="Merah";
    var $bahanBakar="Pertamax";
    var $harga=120000000;
    var $merek='A';


    Public function statusHarga()
    {
        if ($this->harga >50000000) $status = 'Mahal';
        else $status = 'Murah';
        return $status;
    }


}

$ObjekBMW = new Mobil; //ini adalah objek BMW dari class Mobil
$ObjekTesla = new Mobil;//ini adalah objek Tesla dari class Mobil
$ObjekAudi = new Mobil;//ini adalah objek Audi dari class Mobil