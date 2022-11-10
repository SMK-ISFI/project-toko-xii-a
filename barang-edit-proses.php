<?php
require "models/Barang_model.php";
$barang = new Barang();

if (isset($_POST["barang-simpan"])) {
    // echo $_POST["barang_id"];
    $barang->barang_nama = $_POST["barang-nama"];
    $barang->barang_harga = $_POST["barang-harga"];
    $barang->barang_stok = $_POST["barang-stok"];

    $barang->edit_barang($_POST["barang_id"]);

    header("Location: index.php");
}