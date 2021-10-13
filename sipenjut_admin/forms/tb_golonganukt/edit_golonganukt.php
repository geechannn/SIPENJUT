<?php
include "../koneksi.php";

function edit ($rows)
{
global $conn;
		$id_kelompok = $rows['id_kelompok'];
		$kelompok_ukt = $rows['kelompok_ukt'];
		$rentang_ukt = $rows['rentang_ukt'];
		$query = "UPDATE tb_golonganukt SET id_kelompok='$id_kelompok', kelompok_ukt='$kelompok_ukt', rentang_ukt='$rentang_ukt' WHERE id_kelompok='$id_kelompok'";
		mysqli_query($conn,$query);
return mysqli_affected_rows($conn);
}


if (isset($_POST['edit']))
{
	if (edit($_POST)>0)
		{
			echo "<script>alert('Data Berhasil diubah...'); window.location ='index1.php'</script>";
		} else

		{
			echo "<script>alert('Data Gagal diubah...'); window.location ='index1.php'</script>";
		}
}