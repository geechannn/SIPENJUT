<?php
include'../koneksi.php';
if(isset($_POST['submit']))
{
	$id_kriteria = $_POST['id_kriteria'];
	$nama_kriteria = $_POST['nama_kriteria'];


	$query = mysqli_query($conn, "INSERT INTO tb_kriteria (id_kriteria, nama_kriteria)
		VALUES ('$id_kriteria', '$nama_kriteria')" );

	if($query){
		echo "<script>alert('Data Berhasil ditambahkan...'); window.location = 'index_kriteria.php'</script>";
	} else {
		echo "<script>alert('yahh Data Gagal ditambahkan'); window.location = 'index_kriteria.php'</script>";
	}
}
?>