<?php
include'../koneksi.php';
if(isset($_POST['submit']))
{
	$id_subkriteria = $_POST['id_subkriteria'];
	$nama_subkriteria = $_POST['nama_subkriteria'];
	$id_kriteria = $_POST['id_kriteria'];
	$keterangan = $_POST['keterangan'];


	$query = mysqli_query($conn, "INSERT INTO tb_subkriteria (id_subkriteria, nama_subkriteria, id_kriteria, keterangan)
		VALUES ('$id_subkriteria', '$nama_subkriteria', '$id_kriteria', '$keterangan')" );

	if($query){
		echo "<script>alert('Data Berhasil ditambahkan...'); window.location = 'index_subkriteria.php'</script>";
	} else {
		echo "<script>alert('Data Gagal ditambahkan'); window.location = 'index_subkriteria.php'</script>";
	}
}
?>