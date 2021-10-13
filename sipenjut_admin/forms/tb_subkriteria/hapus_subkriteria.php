<?php
include "../koneksi.php";
$id_subkriteria = $_GET['id_subkriteria'];

$query = mysqli_query($conn, "DELETE FROM tb_subkriteria WHERE id_subkriteria='$id_subkriteria'");
if($query){
	echo "<script>alert('Data Berhasil dihapus...'); window.location = 'index_subkriteria.php' </script>";
} else {
	echo "<script>alert('Data Gagal dihapus...'); window.location = 'index_subkriteria.php' </script>";
}