<?php
include "../koneksi.php";
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

$query = mysqli_query($conn, "INSERT INTO tb_datamahasiswa (id_nim, nama_jurusan, golongan_uktawal, jenis_kelamin, jml_penghasilan_ortu, jns_pekerjaan_ayah, jns_pekerjaan_ibu, assets, jarak_tinggal, daya_lisrik, sumber_air)
	VALUES ('$id_nim','$nama_jurusan','$golongan_uktawal','$jenis_kelamin','$jml_penghasilan_ortu','$jns_pekerjaan_ayah','$jns_pekerjaan_ibu', '$assets', '$jarak_tinggal', '$daya_lisrik', '$sumber_air')");
if($query){
	echo "<script>alert('Data Berhasil ditambahkan...'); window.location = 'index_tambah.php'</script>";
} else {
	echo "<script>alert('Data Gagal ditambahkan'); window.location = 'index_tambah.php'</script>";
}