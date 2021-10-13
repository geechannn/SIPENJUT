<?php
include "../koneksi.php";

$query = mysqli_query($conn, "SELECT * FROM tb_datamahasiswa WHERE id_nim='$_GET[id_nim]'");
$id_nim = $_POST['id_nim'];
$nama_jurusan = $_POST['nama_jurusan'];
$golongan_uktawal = $_POST['golongan_uktawal'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$jml_penghasilan_ortu = $_POST['jml_penghasilan_ortu'];
$jns_pekerjaan_ayah = $_POST['jns_pekerjaan_ayah'];
$jns_pekerjaan_ibu = $_POST['jns_pekerjaan_ibu'];
$assets = $_POST['assets'];
$jarak_tinggal = $_POST['jarak_tinggal'];
$daya_lisrik = $_POST['daya_lisrik'];
$sumber_air = $_POST['sumber_air'];


$query = mysqli_query($conn, "UPDATE tb_datamahasiswa SET nama_jurusan='$nama_jurusan'  , golongan_uktawal='$golongan_uktawal', jenis_kelamin='$jenis_kelamin', jml_penghasilan_ortu='$jml_penghasilan_ortu', jns_pekerjaan_ayah='$jns_pekerjaan_ayah', jns_pekerjaan_ibu='$jns_pekerjaan_ibu', assets='$assets', jarak_tinggal='$jarak_tinggal', daya_lisrik='$daya_lisrik', sumber_air='$sumber_air' WHERE id_nim='$id_nim' ");

if ($query){
	echo "<script>alert('Data Berhasil diubah...'); window.location ='index.php'</script>";
} else{
	echo "<script>alert('Data Gagal diubah...'); window.location ='index.php'</script>";
}