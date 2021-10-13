<?php
include'../koneksi.php';
if(isset($_POST['submit']))
{
	$nip = $_POST['nip'];
	$password = $_POST['password'];
	$lvl = $_POST['lvl'];


	$query = mysqli_query($conn, "INSERT INTO tb_pegawai (nip, password, lvl)
		VALUES ('$nip', '$password', '$lvl')" );

	if($query){
		echo "<script>alert('Data Berhasil ditambahkan...'); window.location = 'index_pegawai.php'</script>";
	} else {
		echo "<script>alert('yahh Data Gagal ditambahkan'); window.location = 'index_pegawai.php'</script>";
	}
}
?>