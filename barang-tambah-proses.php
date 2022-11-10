<?php
// Hubungkan ke file Barang_model.php yang ada di folder models
require "models/Barang_model.php";
// Buat object dari Barang_model.php
$barang = new Barang();
/**
 * Ketika tombol dengan name barang-simpan ditekan
 * maka ambil semua data yang ada di dalam input */
if (isset($_POST["barang-simpan"])) {
  /**
   *  Setiap nilai yang ada di inputan
   * dimasukkan ke dalam setiap atribut yang ada di dalam class Barang
   * menggunakan object $barang
   */
  $barang->barang_nama  = $_POST["barang-nama"];
  $barang->barang_harga = $_POST["barang-harga"];
  $barang->barang_stok  = $_POST["barang-stok"];
  /**
   * data diatas dimasukkan ke dalam function tambah_barang()
   */
  $barang->tambah_barang();
  /**
   * Setelah data berhasil disimpan ke db,
   * kembali ke halaman index.php
   */
  header("Location: index.php");
}
