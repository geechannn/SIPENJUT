<?php
include "../koneksi.php";

function edit ($rows)
{
global $conn;
		$nim = $rows['nim'];
		$password = $rows['password'];
		$nama_mhs = $rows['nama_mhs'];

		$query = "UPDATE tb_mahasiswa SET nim='$nim', password='$password', nama_mhs='$nama_mhs' WHERE nim='$nim'";
		mysqli_query($conn,$query);
return mysqli_affected_rows($conn);
}

if (isset($_POST['edit']))
{
	if (edit($_POST)>0)
		{
			echo "<script>alert('Data Berhasil diubah...'); window.location ='index_mahasiswa.php'</script>";
		} else

		{
			echo "<script>alert('Data Gagal diubah...'); window.location ='index_mahasiswa.php'</script>";
		}
}

