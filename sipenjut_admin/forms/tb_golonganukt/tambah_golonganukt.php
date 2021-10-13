<?php
include'../koneksi.php';
if(isset($_POST['submit']))
{
	$id_kelompok = $_POST['id_kelompok'];
	$kelompok_ukt = $_POST['kelompok_ukt'];
	$rentang_ukt = $_POST['rentang_ukt'];



	$query = mysqli_query($conn, "INSERT INTO tb_golonganukt (id_kelompok, kelompok_ukt, rentang_ukt)
		VALUES ('$id_kelompok', '$kelompok_ukt', '$rentang_ukt')" );

	if($query){
		echo "<script>alert('Data Berhasil ditambahkan...'); window.location = 'index_golonganukt.php'</script>";
	} else {
		echo "<script>alert('yahh Data Gagal ditambahkan'); window.location = 'index_golonganukt.php'</script>";
	}
}
?>