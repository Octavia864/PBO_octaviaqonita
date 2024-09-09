<?php

class Kendaraan {
    // Properti dari kelas Kendaraan
    private $harga;
    private $tahun_pembuatan;
    private $bahan_bakar;
    private $plat_nomor;

    // Konstruktor untuk inisialisasi properti
    public function __construct($harga, $tahun_pembuatan, $bahan_bakar, $plat_nomor) {
        $this->harga = $harga;
        $this->tahun_pembuatan = $tahun_pembuatan;
        $this->bahan_bakar = $bahan_bakar;
        $this->plat_nomor = $plat_nomor;
    }

    // Menentukan status harga
    public function statusHarga() {
        return $this->harga > 50000000 ? 'Mahal' : 'Murah';
    }

    // Menentukan apakah kendaraan dapat subsidi
    public function dapatSubsidi() {
        return ($this->bahan_bakar == 'Premium' && $this->tahun_pembuatan < 2005) ? 'Dapat Subsidi' : 'Tidak Dapat Subsidi';
    }

    // Menghitung harga bekas
    public function hargaBekas() {
        if ($this->tahun_pembuatan > 2005) {
            return $this->harga;
        } elseif ($this->tahun_pembuatan >= 2000 && $this->tahun_pembuatan <= 2005) {
            return $this->harga * 0.8;
        } else {
            return $this->harga * 0.6;
        }
    }

    // Menghitung pajak
    public function pajak() {
        return $this->tahun_pembuatan <= 2017 ? $this->harga * 0.025 : 0;
    }

    // Menentukan hari operasi berdasarkan plat nomor
    public function operasiPlatNomor() {
        $plat_nomor_terakhir = substr($this->plat_nomor, -1);
        return ($plat_nomor_terakhir % 2 == 0) ? 'Selasa, Kamis, dan Sabtu' : 'Senin, Rabu, Jumat, dan Minggu';
    }

    // Method untuk mencetak informasi kendaraan
    public function printInfo() {
        echo "Status Harga: " . $this->statusHarga() . "\n";
        echo "Subsidi: " . $this->dapatSubsidi() . "\n";
        echo "Harga Bekas: " . number_format($this->hargaBekas(), 0, ',', '.') . "\n";
        echo "Pajak: " . number_format($this->pajak(), 0, ',', '.') . "\n";
        echo "Hari Operasi Plat Nomor: " . $this->operasiPlatNomor() . "\n";
    }
}

// Contoh penggunaan
$kendaraan1 = new Kendaraan(60000000, 2004, 'Premium', 'B1234CD');
$kendaraan1->printInfo();

$kendaraan2 = new Kendaraan(30000000, 2006, 'Pertamax', 'B5678EF');
$kendaraan2->printInfo();

$kendaraan3 = new Kendaraan(20000000, 1999, 'Premium', 'B1357GH');
$kendaraan3->printInfo();
?>