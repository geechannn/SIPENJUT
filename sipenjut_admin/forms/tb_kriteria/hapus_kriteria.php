<?php
include "../koneksi.php";
$id_kriteria = $_GET['id_kriteria'];

$query = mysqli_query($conn, "DELETE FROM tb_kriteria WHERE id_kriteria='$id_kriteria'");
if($query){
	echo "<script>alert('Data Berhasil dihapus...'); window.location = 'index_kriteria.php' </script>";
} else {
	echo "<script>alert('Data Gagal dihapus...'); window.location = 'index_kriteria.php' </script>";
}