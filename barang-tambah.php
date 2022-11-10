<!DOCTYPE html>
<html lang="en">

<head>
  <title>Tambah Barang Baru</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

<body class="container">
  <h1>Tambah Barang Baru</h1>

  <!-- 
    METHOD = POST
    ACTION = barang-tambah-proses.php
 -->
  <form action="barang-tambah-proses.php" method="POST">
    <div class="mb-3">
      <label for="">Nama Barang</label>
      <input type="text" name="barang-nama" class="form-control">
    </div>
    <div class="mb-3">
      <label for="">Harga Barang</label>
      <input type="number" name="barang-harga" class="form-control">
    </div>
    <div class="mb-3">
      <label for="">Stok Barang</label>
      <input type="number" name="barang-stok" class="form-control">
    </div>
    <input type="submit" name="barang-simpan" value="Simpan" class="btn btn-lg btn-success">
  </form>
</body>

</html>