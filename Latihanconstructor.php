<?php
class Pegawai {
    private $nama;
    private $golongan;
    private $gajiPokok;
    private $lemburJam;
 
    // Constructor dengan parameter
    public function __construct($nama, $golongan) {
        $this->nama = $nama;
        $this->golongan = $golongan;
        $this->gajiPokok = $this->getGajiPokok($golongan);
        $this->lemburJam = 0;
    }
 
    // Destructor
    public function __destruct() {
        // Menampilkan pesan saat objek dihapus
        echo "Objek Pegawai {$this->nama} dihapus.<br>";
    }
 
    // Method set dan get
    public function getNama() {
        return $this->nama;
    }
 
    public function setNama($nama) {
        $this->nama = $nama;
    }
 
    public function getGolongan() {
        return $this->golongan;
    }
 
    public function setGolongan($golongan) {
        $this->golongan = $golongan;
        $this->gajiPokok = $this->getGajiPokok($golongan);
    }
 
    public function getGajiPokok($golongan) {
        $gaji = [
            "Ib" => 1250000,
            "Ic" => 1300000,
            "Id" => 1350000,
            "IIa" => 2000000,
            "IIb" => 2100000,
            "IIc" => 2200000,
            "IId" => 2300000,
            "IIIa" => 2400000,
            "IIIb" => 2500000,
            "IIIc" => 2600000,
            "IIId" => 2700000,
            "IVa" => 2800000,
            "IVb" => 2900000,
            "IVc" => 3000000,
            "IVd" => 3100000,
        ];
        return $gaji[$golongan] ?? 0;
    }
 
    public function setLembur($jam) {
        $this->lemburJam = $jam;
    }
 
    public function getGajiTotal() {
        $gajiLembur = $this->lemburJam * 15000;
        return $this->gajiPokok + $gajiLembur;
    }
}
 
// Program utama
function main() {
    $pegawaiList = [];
    
    // Input data pegawai
    $jumlahPegawai = (int)readline("Masukkan jumlah pegawai: ");
    
    for ($i = 0; $i < $jumlahPegawai; $i++) {
        $nama = readline("Masukkan nama pegawai ke-" . ($i + 1) . ": ");
        $golongan = readline("Masukkan golongan pegawai (Ib, Ic, Id, IIa, IIb, IIc, IId, IIIa, IIIb, IIIc, IIId, IVa, IVb, IVc, IVd): ");
        
        $pegawai = new Pegawai($nama, $golongan);
        
        $lembur = (int)readline("Masukkan jumlah jam lembur: ");
        $pegawai->setLembur($lembur);
 
        $pegawaiList[] = $pegawai;
    }
 
    // Menampilkan hasil
    echo "\n" . str_pad("Nama", 20) . str_pad("Golongan", 10) . str_pad("Gaji Pokok", 15) . "Gaji Total\n";
    echo str_repeat("-", 60) . "\n";
    foreach ($pegawaiList as $pegawai) {
        echo str_pad($pegawai->getNama(), 20) .
             str_pad($pegawai->getGolongan(), 10) .
             str_pad($pegawai->getGajiPokok($pegawai->getGolongan()), 15) .
             $pegawai->getGajiTotal() . "\n";
    }
 
    // Menghapus objek pegawai
    unset($pegawaiList);
}
 
main();
?>