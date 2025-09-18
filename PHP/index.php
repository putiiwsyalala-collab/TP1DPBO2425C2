<?php
require_once 'TokoElektronik.php';
session_start();


// Inisialisasi produk jika belum ada
if (!isset($_SESSION['produk'])) {
    $_SESSION['produk'] = [];
}

# Cari Produk
$hasilCari = [];
if (isset($_POST['cari'])) {
    $keyword = strtolower($_POST['keyword']);
    foreach ($_SESSION['produk'] as $produk) {
        if (strpos(strtolower($produk->getNamaProduk()), $keyword) !== false) {
            $hasilCari[] = $produk;
        }
    }
}

# Edit Produk (tampilkan data ke form)
$produkEdit = null;
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    foreach ($_SESSION['produk'] as $produk) {
        if ($produk->getId() === $id && $produkEdit === null) {
            $produkEdit = $produk;
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Toko Elektronik</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        table, th, td { border: 1px solid black; }
        th, td { padding: 10px; text-align: center; }
        img { max-width: 100px; }
    </style>
</head>
<body>
    <h1>Toko Elektronik</h1>

    <!-- Form Tambah/Edit Produk -->
    <h2><?php echo isset($produkEdit) ? "Edit Produk" : "Tambah Produk"; ?></h2>
    <form method="post" action="proses.php">
        <input type="hidden" name="id" value="<?php echo $produkEdit ? $produkEdit->getId() : ''; ?>">
        Nama: <input type="text" name="nama" required value="<?php echo $produkEdit ? $produkEdit->getNamaProduk() : ''; ?>">
        Merk: <input type="text" name="merk" required value="<?php echo $produkEdit ? $produkEdit->getMerk() : ''; ?>">
        Harga: <input type="number" name="harga" required value="<?php echo $produkEdit ? $produkEdit->getHarga() : ''; ?>">
        Stok: <input type="number" name="stok" required value="<?php echo $produkEdit ? $produkEdit->getStok() : ''; ?>">
        Gambar: <input type="text" name="gambar" required value="<?php echo $produkEdit ? $produkEdit->getGambar() : ''; ?>">
        <button type="submit" name="<?php echo $produkEdit ? 'update' : 'tambah'; ?>">
            <?php echo $produkEdit ? 'Update' : 'Tambah'; ?>
        </button>
    </form>

    <!-- Form Cari -->
    <h2>Cari Produk</h2>
    <form method="post">
        <input type="text" name="keyword" placeholder="Cari berdasarkan nama...">
        <button type="submit" name="cari">Cari</button>
    </form>

    <!-- Tabel Produk -->
    <h2>Daftar Produk</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Merk</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
        <?php
        $daftarProduk = isset($_POST['cari']) ? $hasilCari : $_SESSION['produk'];
        if (!empty($daftarProduk)) {
            foreach ($daftarProduk as $produk) {
                echo "<tr>";
                echo "<td>" . $produk->getId() . "</td>";
                echo "<td>" . $produk->getNamaProduk() . "</td>";
                echo "<td>" . $produk->getMerk() . "</td>";
                echo "<td>" . $produk->getHarga() . "</td>";
                echo "<td>" . $produk->getStok() . "</td>";
                echo "<td><img src='" . $produk->getGambar() . "'></td>";
                echo "<td>
                        <a href='index.php?edit=" . $produk->getId() . "'>Edit</a> | 
                        <a href='proses.php?hapus=" . $produk->getId() . "'>Hapus</a>
                      </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>Tidak ada produk</td></tr>";
        }
        ?>
    </table>
</body>
</html>