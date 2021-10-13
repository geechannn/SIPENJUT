<?php
include "../koneksi.php";

function edit ($rows)
{
global $conn;
		$id_subkriteria  = $rows['id_subkriteria'];
		$nama_subkriteria = $rows['nama_subkriteria'];
		$id_kriteria = $rows['id_kriteria'];
		$keterangan = $rows['keterangan'];

		$query = "UPDATE tb_subkriteria SET id_subkriteria='$id_subkriteria', nama_subkriteria='$nama_subkriteria', id_kriteria='$id_kriteria', keterangan='$keterangan' WHERE id_subkriteria='$id_subkriteria'";
		mysqli_query($conn,$query);
return mysqli_affected_rows($conn);
}

if (isset($_POST['edit']))
{
	if (edit($_POST)>0)
		{
			echo "<script>alert('Data Berhasil diubah...'); window.location ='index_subkriteria.php'</script>";
		} else

		{
			echo "<script>alert('Data Gagal diubah...'); window.location ='index_subkriteria.php'</script>";
		}
}
