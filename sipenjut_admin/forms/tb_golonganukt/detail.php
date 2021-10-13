<?php
include "koneksi.php";
$query = mysqli_query($conn, "SELECT * FROM tb_golonganukt WHERE id_kelompok='$_GET[id_kelompok]'");
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
    Detail Data Golongan UKT
  </div>
  <div class="card-body">
    <table class="table table-bordered">
      <tbody>
        <tr>
          <th>ID Kelompok UKT</th>
          <td>: <?php echo $data["id_kelompok"]; ?></td>
        </tr>

        <tr>
          <th>Kelompok UKT</th>
          <td>: <?php echo $data["kelompok_ukt"] ?></td>
        </tr>

        <tr>
          <th>Rentang UKT</th>
          <td>: <?php echo $data["rentang_ukt"] ?></td>
        </tr>

             
          
      </tbody>
    </table>
    <!-- <h3 class="card-title">Detail Data Pegawai</h3> -->
    <a href="index_golonganukt.php" class="btn btn-primary">Kembali</a>
  </div>
</div>

</body>
</html>