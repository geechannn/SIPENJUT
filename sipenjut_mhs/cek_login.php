<?php

include 'koneksi.php';
session_start();
$nim = $_POST['nim'];
$password = $_POST['password'];

$login = mysqli_query($conn, "SELECT * FROM tb_mahasiswa WHERE nim = '$nim' AND password= '$password'");
$cek = mysqli_num_rows($login);




if ($cek > 0) {
    $data = mysqli_fetch_assoc($login);


    $_SESSION['nim'] = $data['nim'];
    $_SESSION['status'] = "login";
    header("location:mhs/tb_tambahdata/index_tambah.php");
} else {
    header("location:index.html?pesan=gagal");
}