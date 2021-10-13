<?php
include "../koneksi.php";
$nim = $_GET['nim'];

$query = mysqli_query($conn, "DELETE FROM tb_mahasiswa WHERE nim='$nim'");
if($query){
  echo "<script>alert('Data Berhasil dihapus...'); window.location = 'index_mahasiswa.php' </script>";
} else {
  echo "<script>alert('Data Gagal dihapus...'); window.location = 'index_mahasiswa.php' </script>";
}