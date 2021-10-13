<?php
include'../koneksi.php';
if(isset($_POST['submit']))
{
	$nim = $_POST['nim'];
	$password = $_POST['password'];
	$nama_mhs = $_POST['nama_mhs'];


	$query = mysqli_query($conn, "INSERT INTO tb_mahasiswa (nim, password, nama_mhs)
		VALUES ('$nim', '$password', '$nama_mhs')" );

	if($query){
		echo "<script>alert('Data Berhasil ditambahkan...'); window.location = 'index_mahasiswa.php'</script>";
	} else {
		echo "<script>alert('yahh Data Gagal ditambahkan'); window.location = 'index_mahasiswa.php'</script>";
	}
}
?>