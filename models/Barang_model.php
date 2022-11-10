<?php
// Masukkan connetion
require "Connection.php";

class Barang extends Connection
{
  // Atribut yang ada di tb_barang
  public $barang_nama;
  public $barang_harga;
  public $barang_stok;

  // Method constructor
  public function __construct()
  {
    // Menjalankan koneksi di dalam class model Barang
    $this->con = $this->runKoneksi();
  }

  // Function untuk mengambil data yang ada di tb_barang
  public function tampil_barang()
  {
    // Query untuk mendapatkan data barang
    $query = "SELECT * FROM tb_barang";
    // query kita hubungkan ke koneksi menggunakan prepare()
    $data = $this->con->prepare($query);
    // query kita eksekusi menggunakan execute()
    $data->execute();
    /**  kembalikan data hasil eksekusi dan 
     * ditampilkan menggunakan object 
     * menggunakan fetchAll() */
    return $data->fetchAll(PDO::FETCH_OBJ);
  }

  // Function untuk menambahkan data baru ke database
  public function tambah_barang()
  {
    // Query untuk menambahkan data barang baru
    $query = "INSERT INTO tb_barang(barang_nama, barang_harga, barang_stok) VALUES (?, ?, ?)";
    // Query hubungkan ke koneksi menggunakan prepare()
    $data = $this->con->prepare($query);
    // Data baru kita tempelkan ke query menggunakan function bindParam()
    $data->bindParam(1, $this->barang_nama);
    $data->bindParam(2, $this->barang_harga);
    $data->bindParam(3, $this->barang_stok);
    // query eksekusi menggunakan execute()
    return $data->execute();
  }

  // Function untuk menampilkan data berdasarkan id
  public function tampil_barang_id($id)
  {
    // Query untuk mendapatkan data barang berdasarkan id
    $query = "SELECT * FROM tb_barang WHERE barang_id=?";
    $data = $this->con->prepare($query);
    $data->bindParam(1, $id);
    $data->execute();
    return $data->fetch(PDO::FETCH_OBJ);
  }

  // Function untuk mengedit data yang sudah ada
  // berdasarkan id
  public function edit_barang($id)
  {
    // Query Update data barang
    $query = "UPDATE tb_barang SET barang_nama=? ,barang_harga=? ,barang_stok=? WHERE barang_id=?";
    $data = $this->con->prepare($query);
    $data->bindParam(1, $this->barang_nama);
    $data->bindParam(2, $this->barang_harga);
    $data->bindParam(3, $this->barang_stok);
    $data->bindParam(4, $id);
    return $data->execute();
  }

  // Function untuk menghapus data barang yang sudah ada
  // Berdasarkan id
  public function hapus_barang($id) 
  {
    // Query mengahapus data barang
    $query = "DELETE FROM tb_barang WHERE barang_id=?";
    $data = $this->con->prepare($query);
    $data->bindParam(1, $id);
    return $data->execute();
  }
}
