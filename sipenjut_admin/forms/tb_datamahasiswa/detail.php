<?php
include "../koneksi.php";
$query = mysqli_query($conn, "SELECT * FROM tb_datamahasiswa WHERE id_nim='$_GET[id_nim]'");
$data  = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../AdminLTE/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../AdminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../AdminLTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../AdminLTE/dist/css/adminlte.min.css">
	<title></title>
</head>
<body>

<div class="card">
  <div class="card-header">
    Detail Data Mahasiswa
  </div>
  <div class="card-body">
    <table class="table table-bordered">
      <tbody>
        <colgroup>
          <col style="width:15%">
          <col style="width:50%">
        </colgroup>  
                <tr>
                  <th>NIM</th>
                  <td>: <?php echo $data["id_nim"]; ?></td>
                </tr>

                <tr>
                  <th>Nama Jurusan</th>
                  <td>: <?php echo $data["nama_jurusan"] ?></td>
                </tr>

                <tr>
                    <th>Golongan UKT Awal</th>
                    <td>: <?php echo $data["id_golongan_uktawal"] ?></td>
                </tr>

                <tr>
                    <th>Jenis Kelamin</th>
                    <td>: <?php echo $data["jenis_kelamin"] ?></td>
                </tr>

                <tr>
                    <th>Jumlah Penghasilan Orang Tua</th>
                    <td>: <?php echo $data["jml_penghasilan_ortu"] ?></td>
                </tr>

                <tr>
                    <th>Jenis Pekerjaan Ayah</th>
                    <td>: <?php echo $data["jns_pekerjaan_ayah"] ?></td>
                </tr>

                <tr>
                    <th>Jenis Pekerjaan Ibu</th>
                    <td>: <?php echo $data["jns_pekerjaan_ibu"] ?></td>
                </tr>

                <tr>
                    <th>Asset yang Dimiliki</th>
                    <td>: <?php echo $data["assets"] ?></td>
                </tr>

                <tr>
                    <th>Jarak Tinggal (km)</th>
                    <td>: <?php echo $data["jarak_tinggal"] ?></td>
                </tr>

                <tr>
                    <th>Daya Listrik (watt)</th>
                    <td>: <?php echo $data["daya_lisrik"] ?></td>
                </tr>

                <tr>
                    <th>Sumber Air</th>
                    <td>: <?php echo $data["sumber_air"] ?></td>
                </tr>
          
      </tbody>
    </table>
    <!-- <h3 class="card-title">Detail Data Pegawai</h3> -->
    <a href="index.php" class="btn btn-primary">Kembali</a>
  </div>
</div>

</body>
</html>