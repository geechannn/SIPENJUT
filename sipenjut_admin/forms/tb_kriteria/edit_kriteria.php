<?php
include "../koneksi.php";

function edit ($rows)
{
global $conn;
		$id_kriteria = $rows['id_kriteria'];
		$nama_kriteria = $rows['nama_kriteria'];

		$query = "UPDATE tb_kriteria SET id_kriteria='$id_kriteria', nama_kriteria='$nama_kriteria' WHERE id_kriteria='$id_kriteria'";
		mysqli_query($conn,$query);
return mysqli_affected_rows($conn);
}

if (isset($_POST['edit']))
{
	if (edit($_POST)>0)
		{
			echo "<script>alert('Data Berhasil diubah...'); window.location ='index_kriteria.php'</script>";
		} else

		{
			echo "<script>alert('Data Gagal diubah...'); window.location ='index_kriteria.php'</script>";
		}
}

