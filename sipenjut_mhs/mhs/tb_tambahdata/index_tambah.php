 <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../AdminLTE/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../AdminLTE/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../AdminLTE/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../AdminLTE/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../AdminLTE/plugins/summernote/summernote-bs4.min.css"> 

<?php
    session_start();
    include '../koneksi.php';
    $id=$_SESSION['nim'];

    $data = mysqli_query($conn, "SELECT * FROM tb_mahasiswa WHERE nim = $id ");
   
   include "../../AdminLTE/header.php";
  include "../../AdminLTE/sidebar.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD TABEL DATA MAHASIWA</title>
</head>
<body>




<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Melakukan Peninjauan Ulang dengan Mengisi form dibawah ini! Tinjau Ulang UKT Mu!</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Mahasiswa</h3>
              </div>
    <div class="card-body">
    <a href="form_tambah_datamahasiswa.php" class="btn btn-outline-primary" >Masukan Data!</a>
    <br><br>
       


    
<!--

<table id="example1" class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>
            <center>No</center>
        </th>
        <th>
            <center>NIM</center>
        </th>
        <th>
            <center>Jurusan</center>
        </th>
        <th>
            <center>Id Kelompok UKT Awal</center>
        </th>
        <th>
            <center>Jenis Kelamin</center>
        </th>
        <th>
            <center>Jumlah Penghasilah Orang Tua</center>
        </th>
        <th>
            <center>Jenis Pekerjaan Ayah</center>
        </th>
        <th>
            <center>Jenis Pekerjaan Ibu</center>
        </th>
        <th>
            <center>Jumlah Assets</center>
        </th>
        <th>
            <center>Jarak Tinggal (km)</center>
        </th>
        <th>
            <center>Daya Listrik (watt)</center>
        </th>
        <th>
            <center>Sumber Air</center>
        </th>
        <th>
            <center>Aksi</center>
        </th>
    </tr>
    </thead>
-->


<?php
    $i=1;
    $sqlGet = "SELECT * FROM tb_datamahasiswa";
    $query = mysqli_query($conn, $sqlGet);

    while($data = mysqli_fetch_array($query)){
?>
<!--
        <tbody>
            <tr>
                <th>
                    <center><?= $i++ ?></center>
                </th>
                <td>
                    <center><?php echo $data["id_nim"] ?></center>
                </td>
                <td>
                    <center><?php echo $data["nama_jurusan"] ?></center>
                </td>
                <td>
                    <center><?php echo $data["golongan_uktawal"] ?></center>
                </td>
                <td>
                    <center><?php echo $data["jenis_kelamin"] ?></center>
                </td>
                <td>
                    <center><?php echo $data["jml_penghasilan_ortu"] ?></center>
                </td>
                <td>
                    <center><?php echo $data["jns_pekerjaan_ayah"] ?></center>
                </td>
                <td>
                    <center><?php echo $data["jns_pekerjaan_ibu"] ?></center>
                </td>
                <td>
                    <center><?php echo $data["assets"] ?></center>
                </td>
                <td>
                    <center><?php echo $data["jarak_tinggal"] ?></center>
                </td>
                <td>
                    <center><?php echo $data["daya_lisrik"] ?></center>
                </td>
                <td>
                    <center><?php echo $data["sumber_air"] ?></center>
                </td>
                <td>
                    <center>
                        <a href="detail.php?id_nim=<?php echo $data["id_nim"]; ?>" class="btn btn-outline-info" > Detail</a>

                        <a href="form_edit_datamahasiswa.php?id_nim=<?php echo $data["id_nim"]; ?>" class="btn btn-outline-primary" > Edit</a>

                        <a href="hapus_datamahasiswa.php?id_nim=<?php echo $data["id_nim"]; ?>" class="btn btn-outline-danger" > Hapus</a>
                    </center>
                </td>
            </tr>
        </tbody>
      -->
<?php } ?>
    </table>
        </div>


              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>



<?php 
include "../../AdminLTE/footer.php"; 
?>

<!-- jQuery -->
<script src="../../AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../AdminLTE/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../../AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../../AdminLTE/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../../AdminLTE/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../../AdminLTE/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../../AdminLTE/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../AdminLTE/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../AdminLTE/plugins/moment/moment.min.js"></script>
<script src="../../AdminLTE/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../../AdminLTE/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../AdminLTE/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../AdminLTE/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../AdminLTE/dist/js/pages/dashboard.js"></script>


<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>