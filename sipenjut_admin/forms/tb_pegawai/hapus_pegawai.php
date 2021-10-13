<?php
include "../koneksi.php";
$nip = $_GET['nip'];

$query = mysqli_query($conn, "DELETE FROM tb_pegawai WHERE nip='$nip'");
if($query){
  echo "<script>alert('Data Berhasil dihapus...'); window.location = 'index_pegawai.php' </script>";
} else {
  echo "<script>alert('Data Gagal dihapus...'); window.location = 'index_pegawai.php' </script>";
}