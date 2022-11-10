<!DOCTYPE html>
<html lang="en">

<head>
  <title>Toko Muhammad</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

<body class="container">
  <h1>Daftar Barang Toko Muhammad</h1>

  <!-- Tag untuk berpindah halaman menggunakan tag a (anchor) -->
  <!-- href di isi tujuan halaman -->
  <!-- Diantara tag pembuka dan pentutup <a> tuliskan 
    keterangan yang tampil di browser -->
  <a href="barang-tambah.php">Tambah Data Barang</a>
  <!-- table untuk menampilkan data -->
  <table class="table table-striped-columns mt-3">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Barang</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
      // Masukkan file Barang model
      require "models/Barang_model.php";
      /** Buat object dari class Barang model
       * untuk mengakses function tampil_barang() */
      $barang = new Barang();
      $tampil = $barang->tampil_barang();
      /** Tampilkan datanya menggunakan 
       * perulangan foreach */
      $no = 1;
      foreach ($tampil as $t) {
        echo "
        <tr>
          <td>$no</td>
          <td>$t->barang_nama</td>
          <td>$t->barang_harga</td>
          <td>$t->barang_stok</td>
          <td>
            <a href='barang-edit.php?id=$t->barang_id' class='btn btn-sm btn-warning'>Edit</a>
            <form action='barang-hapus-proses.php' method='POST' class='d-inline'>
              <input type='hidden' name='barang-id' value='$t->barang_id' />
              <input type='submit' name='barang-hapus' value='Hapus' class='btn btn-sm btn-danger'/>
            </form>
          </td>
        </tr>
        ";
        $no++;
      }
      ?>
    </tbody>
  </table>
</body>

</html>