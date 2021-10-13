<?php
include "../koneksi.php";

function edit ($rows)
{
global $conn;
		$nip = $rows['nip'];
		$password = $rows['password'];
		$lvl = $rows['lvl'];

		$query = "UPDATE tb_pegawai SET nip='$nip', password='$password' , lvl='$lvl' WHERE nip='$nip'";
		mysqli_query($conn,$query);
return mysqli_affected_rows($conn);
}

if (isset($_POST['edit']))
{
	if (edit($_POST)>0)
		{
			echo "<script>alert('Data Berhasil diubah...'); window.location ='index_pegawai.php'</script>";
		} else

		{
			echo "<script>alert('Data Gagal diubah...'); window.location ='index_pegawai.php'</script>";
		}
}

