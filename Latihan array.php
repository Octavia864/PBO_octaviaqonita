php
<?php

class Angsuran {
  private $noAngsuran;
  private $jumlah;

  public function __construct($noAngsuran, $jumlah) {
    $this->noAngsuran = $noAngsuran;
    $this->jumlah = $jumlah;
  }

  public function getNoAngsuran() {
    return $this->noAngsuran;
  }

  public function getJumlah() {
    return $this->jumlah;
  }

  public function setNoAngsuran($noAngsuran) {
    $this->noAngsuran = $noAngsuran;
  }

  public function setJumlah($jumlah) {
    $this->jumlah = $jumlah;
  }
}

class PenghitungAngsuran {
  private $besaranPinjaman;
  private $besaranAngsuran;
  private $lamaAngsuran;

  public function __construct($besaranPinjaman, $besaranAngsuran, $lamaAngsuran) {
    $this->besaranPinjaman = $besaranPinjaman;
    $this->besaranAngsuran = $besaranAngsuran;
    $this->lamaAngsuran = $lamaAngsuran;
  }

  public function hitungAngsuran() {
    $angsuranData = array();
    $jumlahAngsuran = $this->besaranPinjaman / $this->lamaAngsuran;
    $jumlahBunga = $jumlahAngsuran * ($this->besaranAngsuran / 100);

    for ($i = 1; $i <= $this->lamaAngsuran; $i++) {
      $jumlah = $jumlahAngsuran + ($jumlahBunga - ($jumlahBunga / $i));
      $angsuranData[] = new Angsuran($i, 'Rp ' . number_format($jumlah, 0, ',', '.'));
    }

    return $angsuranData;
  }
}

$besaranPinjaman = 1000000;
$besaranAngsuran = 10;
$lamaAngsuran = 5;

$penghitungAngsuran = new PenghitungAngsuran($besaranPinjaman, $besaranAngsuran, $lamaAngsuran);
$angsuranData = $penghitungAngsuran->hitungAngsuran();

echo "TOKO PEGADAIAN SYARIAH\n";
echo "Jl.Keadilan No.16\n";
echo "Telp 732746238\n";
echo "Program Penghitung Besaran Angsuran Hutang\n";
echo "Besaran Pinjaman : Rp " . number_format($besaranPinjaman, 0, ',', '.') . ";\n";
echo "Masukan Besaran Angsuran (%) : " . $besaranAngsuran . "\n";
echo "Lama Angsuran (bulan) : " . $lamaAngsuran . "\n";

echo "+---------------+---------------+\n";
echo "| No. Angsuran  | Jumlah        |\n";
echo "+---------------+---------------+\n";

foreach ($angsuranData as $angsuran) {
  echo "| " . $angsuran->getNoAngsuran() . "             | " . $angsuran->getJumlah() . "  |\n";
}

echo "+---------------+---------------+\n";

?>
