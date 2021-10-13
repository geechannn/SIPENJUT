<?php
include "../koneksi.php";
$id_kelompok = $_GET['id_kelompok'];

$query = mysqli_query($conn, "DELETE FROM tb_golonganukt WHERE id_kelompok='$id_kelompok'");
if($query){
	echo "<script>alert('Data Berhasil dihapus...'); window.location = 'index1.php' </script>";
} else {
	echo "<script>alert('Data Gagal dihapus...'); window.location = 'index1.php' </script>";
}