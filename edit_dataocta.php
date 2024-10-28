<?php
include('koneksi.php');
$db = new database();
$id_barang = $_GET['id_barang'];
$data_edit_barang = $db->tampil_edit_data($id_barang);

if (empty($data_edit_barang)) {
    die("Data tidak ditemukan.");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Barang</title>
</head>
<body>
    <h3>Form Edit Data Barang</h3>
    <hr/>
    <form method="post" action="proses_barang.php?action=edit&id_barang=<?php echo $id_barang; ?>">
        <?php
        foreach ($data_edit_barang as $d) {
        ?>
        <table>
            <tr>
                <td>Nama Barang</td>
                <td>:</td>
                <td>
                    <input type="hidden" name="id_barang" value="<?php echo $d['id_barang']; ?>">
                    <input type="text" name="nama_barang" value="<?php echo htmlspecialchars($d['nama_barang']); ?>" required />
                </td>
            </tr>
            <tr>
                <td>Stok</td>
                <td>:</td>
                <td>
                    <input type="number" name="stok" value="<?php echo htmlspecialchars($d['stok']); ?>" required />
                </td>
            </tr>
            <tr>
                <td>Harga Beli</td>
                <td>:</td>
                <td>
                    <input type="number" name="harga_beli" value="<?php echo htmlspecialchars($d['harga_beli']); ?>" required />
                </td>
            </tr>
            <tr>
                <td>Harga Jual</td>
                <td>:</td>
                <td>
                    <input type="number" name="harga_jual" value="<?php echo htmlspecialchars($d['harga_jual']); ?>" required />
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" name="tombol" value="Ubah" />
                    <a href="tampil_data.php">
                        <input type="button" value="Kembali" />
                    </a>
                </td>
            </tr>
        </table>
        <?php
        }
        ?>
    </form>
</body>
</html>
