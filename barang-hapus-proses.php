<?php
require 'models/Barang_model.php';
$barang = new Barang();

if (isset($_POST["barang-hapus"])) {
    // echo $_POST["barang-id"];
    $barang->hapus_barang($_POST["barang-id"]);

    header("Location: index.php");
}