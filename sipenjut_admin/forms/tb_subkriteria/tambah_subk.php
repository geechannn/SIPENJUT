<?php
include'../../koneksi.php';
if(isset($_POST['submit']))
{
	$id_subkriteria = $_POST['id_subkriteria'];
	$nama_subkriteria = $_POST['nama_subkriteria'];
	
	$keterangan = $_POST['keterangan'];



	$query = mysqli_query($conn, "INSERT INTO tb_subkriteria (id_subkriteria, nama_subkriteria, keterangan)
		VALUES ('$id_subkriteria', '$nama_subkriteria', '$keterangan')" );

	if($query){
		echo "<script>alert('Data Berhasil ditambahkan...'); window.location = 'index_subk.php'</script>";
	} else {
		echo "<script>alert('yahh Data Gagal ditambahkan'); window.location = 'index_subk.php'</script>";
	}
}
?>