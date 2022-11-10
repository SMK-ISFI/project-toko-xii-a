<?php
require "models/Barang_model.php";
$barang = new Barang();

$tampil = $barang->tampil_barang_id($_GET["id"]);
// echo $_GET["id"];
// echo $tampil->barang_nama . "<br>";
// echo $tampil->barang_harga . "<br>";
// echo $tampil->barang_stok . "<br>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Edit Barang Baru</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

<body class="container">
  <h1>Edit Barang Baru</h1>

  <!-- 
    METHOD = POST
    ACTION = barang-edit-proses.php
 -->
  <form action="barang-edit-proses.php" method="POST">
    <!-- 
        Input tipe hidden menyimpan id barang
        id barang ini akan digunakan untuk melakukan
        pengeeditan data pada query UPDATE di bagian where-nya
     -->
    <input type="hidden" name="barang_id" value="<?= $tampil->barang_id ?>" />
    <div class="mb-3">
      <label for="">Nama Barang</label>
      <input type="text" name="barang-nama" value="<?= $tampil->barang_nama ?>" class="form-control">
    </div>
    <div class="mb-3">
      <label for="">Harga Barang</label>
      <input type="number" name="barang-harga" value="<?= $tampil->barang_harga ?>" class="form-control">
    </div>
    <div class="mb-3">
      <label for="">Stok Barang</label>
      <input type="number" name="barang-stok" value="<?= $tampil->barang_stok ?>" class="form-control">
    </div>
    <input type="submit" name="barang-simpan" value="Simpan" class="btn btn-lg btn-success">
  </form>
</body>

</html>