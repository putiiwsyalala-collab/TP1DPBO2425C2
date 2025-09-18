<?php
require_once 'TokoElektronik.php';
session_start();


// Inisialisasi array produk di session jika belum ada
if (!isset($_SESSION['produk'])) {
    $_SESSION['produk'] = [];
}


# Tambah Produk
if (isset($_POST['tambah'])) {
    $id = uniqid();
    $produkBaru = new TokoElektronik(
        $id,
        $_POST['nama'],
        $_POST['merk'],
        (int)$_POST['harga'],
        (int)$_POST['stok'],
        $_POST['gambar']
    );
    $_SESSION['produk'][] = $produkBaru;

    header("Location: index.php");
    exit;
}
// Hapus Produk

if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $produkBaru = [];

    foreach ($_SESSION['produk'] as $produk) {
        if ($produk->getId() !== $id) {
            $produkBaru[] = $produk;
        }
    }

    $_SESSION['produk'] = $produkBaru;

    header("Location: index.php");
    exit;
}


// Update Produk
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $produkBaru = [];

    foreach ($_SESSION['produk'] as $produk) {
        if ($produk->getId() === $id) {
            $produk->setNamaProduk($_POST['nama']);
            $produk->setMerk($_POST['merk']);
            $produk->setHarga((int)$_POST['harga']);
            $produk->setStok((int)$_POST['stok']);
            $produk->setGambar($_POST['gambar']);
        }
        $produkBaru[] = $produk;
    }

    $_SESSION['produk'] = $produkBaru;

    header("Location: index.php");
    exit;
}