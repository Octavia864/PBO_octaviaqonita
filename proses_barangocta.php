<?php
include('koneksi.php');
$koneksi = new database();

$action = $_GET['action'];

if ($action == "add") {
    $koneksi->tambah_data($_POST['nama_barang'], $_POST['stok'], $_POST['harga_beli'], $_POST['harga_jual']);
    header("Location: index.php"); // Removed redundant "header:" prefix
    exit(); // It's a good practice to call exit after a redirect
} elseif ($action == "edit") {
    $id_barang = $_GET['id_barang'];
    $koneksi->edit_data($id_barang, $_POST['nama_barang'], $_POST['stok'], $_POST['harga_beli'], $_POST['harga_jual']);
    header("Location: index.php");
    exit();
} elseif ($action == "delete") {
    $id_barang = $_GET['id_barang'];
    $koneksi->delete_data($id_barang);
    header("Location: index.php");
    exit();
} elseif ($action == "search") {
    $nama_barang = $_POST['nama_barang'];
    $koneksi->cari_data($nama_barang);
    header("Location: cari_data.php");
    exit();
}
?>
