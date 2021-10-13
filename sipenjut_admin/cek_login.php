<?php

include 'koneksi.php';

$nip = $_POST['nip'];
$password = $_POST['password'];

$login = mysqli_query($conn, "SELECT * FROM tb_pegawai WHERE nip = '$nip' AND password= '$password'");
$cek = mysqli_num_rows($login);

if ($cek > 0) {
    $data = mysqli_fetch_assoc($login);

    if ($data['lvl'] == 'keuangan') {
        $_SESSION['nip'] = $nip;
        $_SESSION['lvl'] == "keuangan";
        header("location:forms/tb_datamahasiswa/index.php");
    } else if ($data['lvl'] == 'baak') {
        $_SESSION['nip'] = $nip;
        $_SESSION['lvl'] == "baak";
        header("location:forms/tj_sipenjut/index.php");
    } else {
        header("location:index.html?pesan=gagal");
    }
} else {
    header("location:index.html?pesan=gagal");
}

