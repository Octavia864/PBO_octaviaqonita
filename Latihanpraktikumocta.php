<?php
class BangunRuang {
    public $username = "octavia";
    public $password = "1267378";
    private $isLoggedIn = false;

    public function login() {
        echo "Selamat datang di Aplikasi Bangun Ruang CLI\n";
        echo "Silahkan Login terlebih dahulu:\n";

        // Simulated login for demonstration
        $inputUsername = trim(fgets(STDIN));
        $inputPassword = trim(fgets(STDIN));

        if ($inputUsername === $this->username && $inputPassword === $this->password) {
            $this->isLoggedIn = true;
            $this->bicara();
        } else {
            echo "Mohon maaf, username dan password yang anda masukkan salah!\n";
        }
    }

    public function bicara() {
        if ($this->isLoggedIn) {
            echo "Selamat datang, anda telah berhasil login di Aplikasi Bangun Ruang CLI\n";
            echo "Silahkan pilih salah satu bangun ruang:\n";
            echo "1. Persegi\n2. Persegi Panjang\n3. Segitiga\n4. Lingkaran\n5. Belah Ketupat\n";

            $choice = (int) trim(fgets(STDIN));
            switch ($choice) {
                case 1:
                    $this->Persegi();
                    break;
                case 2:
                    $this->PersegiPanjang();
                    break;
                case 3:
                    $this->Segitiga();
                    break;
                case 4:
                    $this->Lingkaran();
                    break;
                case 5:
                    $this->BelahKetupat();
                    break;
                default:
                    echo "Pilihan tidak valid!\n";
            }
        }
    }

    private function Persegi() {
        $sisi = 6; // cm
        $luas = $sisi * $sisi;
        $keliling = 4 * $sisi;

        echo "Luas Persegi: {$luas} cm²\n";
        echo "Keliling Persegi: {$keliling} cm\n";
        $this->kembaliKeMenu();
    }

    private function PersegiPanjang() {
        $panjang = 3; // cm
        $lebar = 2; // cm
        $luas = $panjang * $lebar;
        $keliling = 2 * ($panjang + $lebar);

        echo "Luas Persegi Panjang: {$luas} cm²\n";
        echo "Keliling Persegi Panjang: {$keliling} cm\n";
        $this->kembaliKeMenu();
    }

    private function Segitiga() {
        $alas = 4; // cm
        $tinggi = 2; // cm
        $luas = 0.5 * $alas * $tinggi;
        $keliling = $alas + 2 * sqrt(($alas/2)**2 + $tinggi**2); // Assuming isosceles triangle

        echo "Luas Segitiga: {$luas} cm²\n";
        echo "Keliling Segitiga: {$keliling} cm\n";
        $this->kembaliKeMenu();
    }

    private funct<?php
    class BangunRuang {
        public $username = "octavia";
        public $password = "1267378";
        private $isLoggedIn = false;
    
        public function login() {
            echo "Selamat datang di Aplikasi Bangun Ruang CLI\n";
            echo "Silahkan Login terlebih dahulu:\n";
    
            // Simulated login for demonstration
            $inputUsername = trim(fgets(STDIN));
            $inputPassword = trim(fgets(STDIN));
    
            if ($inputUsername === $this->username && $inputPassword === $this->password) {
                $this->isLoggedIn = true;
                $this->bicara();
            } else {
                echo "Mohon maaf, username dan password yang anda masukkan salah!\n";
            }
        }
    
        public function bicara() {
            if ($this->isLoggedIn) {
                echo "Selamat datang, anda telah berhasil login di Aplikasi Bangun Ruang CLI\n";
                echo "Silahkan pilih salah satu bangun ruang:\n";
                echo "1. Persegi\n2. Persegi Panjang\n3. Segitiga\n4. Lingkaran\n5. Belah Ketupat\n";
    
                $choice = (int) trim(fgets(STDIN));
                switch ($choice) {
                    case 1:
                        $this->Persegi();
                        break;
                    case 2:
                        $this->PersegiPanjang();
                        break;
                    case 3:
                        $this->Segitiga();
                        break;
                    case 4:
                        $this->Lingkaran();
                        break;
                    case 5:
                        $this->BelahKetupat();
                        break;
                    default:
                        echo "Pilihan tidak valid!\n";
                }
            }
        }
    
        private function Persegi() {
            $sisi = 6; // cm
            $luas = $sisi * $sisi;
            $keliling = 4 * $sisi;
    
            echo "Luas Persegi: {$luas} cm²\n";
            echo "Keliling Persegi: {$keliling} cm\n";
            $this->kembaliKeMenu();
        }
    
        private function PersegiPanjang() {
            $panjang = 3; // cm
            $lebar = 2; // cm
            $luas = $panjang * $lebar;
            $keliling = 2 * ($panjang + $lebar);
    
            echo "Luas Persegi Panjang: {$luas} cm²\n";
            echo "Keliling Persegi Panjang: {$keliling} cm\n";
            $this->kembaliKeMenu();
        }
    
        private function Segitiga() {
            $alas = 4; // cm
            $tinggi = 2; // cm
            $luas = 0.5 * $alas * $tinggi;
            $keliling = $alas + 2 * sqrt(($alas/2)**2 + $tinggi**2); // Assuming isosceles triangle
    
            echo "Luas Segitiga: {$luas} cm²\n";
            echo "Keliling Segitiga: {$keliling} cm\n";
            $this->kembaliKeMenu();
        }
    
        private function Lingkaran() {
            $r = 5; // cm
            $phi = 3.14;
            $luas = $phi * $r * $r;
            $keliling = 2 * $phi * $r;
    
            echo "Luas Lingkaran: {$luas} cm²\n";
            echo "Keliling Lingkaran: {$keliling} cm\n";
            $this->kembaliKeMenu();
        }
    
        private function BelahKetupat() {
            $diagonal1 = 3; // cm
            $diagonal2 = 5; // cm
            $luas = ($diagonal1 * $diagonal2) / 2;
            $keliling = 4 * sqrt(($diagonal1/2)**2 + ($diagonal2/2)**2); // Assuming the sides are equal
    
            echo "Luas Belah Ketupat: {$luas} cm²\n";
            echo "Keliling Belah Ketupat: {$keliling} cm\n";
            $this->kembaliKeMenu();
        }
    
        private function kembaliKeMenu() {
            echo "Pengerjaan sudah selesai. Kembali ke menu utama? (y/n): ";
            $asal = trim(fgets(STDIN));
            if (strtolower($asal) === 'y') {
                $this->bicara();
            } else {
                echo "Terima kasih telah menggunakan aplikasi ini.\n";
            }
        }
    }
    
    // Run the application
    $app = new BangunRuang();
    $app->login();
    ?>
    
