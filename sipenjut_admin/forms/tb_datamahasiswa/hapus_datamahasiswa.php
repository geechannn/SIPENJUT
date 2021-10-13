<?php
include "../koneksi.php";
$id_nim = $_GET['id_nim'];

$query = mysqli_query($conn, "DELETE FROM tb_datamahasiswa WHERE id_nim='$id_nim'");
if($query){
	echo "<script>alert('Data Berhasil dihapus...'); window.location = 'index.php' </script>";
} else {
	echo "<script>alert('Data Gagal dihapus...'); window.location = 'index.php' </script>";
}