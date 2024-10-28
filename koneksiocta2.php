<?php
class database {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "belajar_oop";
    private $koneksi;

    public function __construct() {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        if (mysqli_connect_error()) {
            die("Koneksi database gagal: " . mysqli_connect_error());
        }
    }

    public function tampil_data() {
        $hasil = [];
        $data = mysqli_query($this->koneksi, "SELECT * FROM tb_barang");
        if ($data) {
            while ($row = mysqli_fetch_assoc($data)) { // Changed to mysqli_fetch_assoc for better readability
                $hasil[] = $row;
            }
        }
        return $hasil;
    }

    public function tambah_data($nama_barang, $stok, $harga_beli, $harga_jual) {
        $query = "INSERT INTO tb_barang (nama_barang, stok, harga_beli, harga_jual) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($this->koneksi, $query);
        mysqli_stmt_bind_param($stmt, "siid", $nama_barang, $stok, $harga_beli, $harga_jual); // Prepared statement
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }

    public function tampil_edit_data($id_barang) {
        $hasil = [];
        $query = "SELECT * FROM tb_barang WHERE id_barang=?";
        $stmt = mysqli_prepare($this->koneksi, $query);
        mysqli_stmt_bind_param($stmt, "i", $id_barang);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        
        while ($d = mysqli_fetch_assoc($result)) {
            $hasil[] = $d;
        }
        mysqli_stmt_close($stmt);
        return $hasil;
    }

    public function edit_data($id_barang, $nama_barang, $stok, $harga_beli, $harga_jual) {
        $query = "UPDATE tb_barang SET nama_barang=?, stok=?, harga_beli=?, harga_jual=? WHERE id_barang=?";
        $stmt = mysqli_prepare($this->koneksi, $query);
        mysqli_stmt_bind_param($stmt, "siidi", $nama_barang, $stok, $harga_beli, $harga_jual, $id_barang);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }

    public function delete_data($id_barang) {
        $query = "DELETE FROM tb_barang WHERE id_barang=?";
        $stmt = mysqli_prepare($this->koneksi, $query);
        mysqli_stmt_bind_param($stmt, "i", $id_barang);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }

    public function cari_data($nama_barang) {
        $hasil = [];
        $query = "SELECT * FROM tb_barang WHERE nama_barang=?";
        $stmt = mysqli_prepare($this->koneksi, $query);
        mysqli_stmt_bind_param($stmt, "s", $nama_barang);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        while ($row = mysqli_fetch_assoc($result)) {
            $hasil[] = $row;
        }
        mysqli_stmt_close($stmt);
        return $hasil;
    }
}
?>
