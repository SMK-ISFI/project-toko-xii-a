<?php

class Connection
{
  private $hostname = "localhost";
  private $username = "root";
  private $password = "root";
  // dbname tuliskan sesuai nama db yang dibuat
  private $dbname   = "db_toko";

  // Function digunakan untuk menjalankan koneksi
  public function runKoneksi()
  {
    try {
      // Menjalankan koneksi
      return new PDO("mysql:host=$this->hostname;dbname=$this->dbname", $this->username, $this->password);
    } catch (PDOException $e) {
      // Kalau koneksi error tampilkan pesan error
      echo "Error: " . $e->getMessage();
    }
  }
}
