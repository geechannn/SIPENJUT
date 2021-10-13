<?php
include "../../AdminLTE/header.php";
include "../../AdminLTE/sidebar.php";
include '../koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
 <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="../../AdminLTE/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../AdminLTE/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../AdminLTE/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
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

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  
  <title>Tambah Data | Data Mahasiswa</title>
</head>



<body>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">

          <div class="col-sm-50">
            <center>
            <h1>Lakukan Peninjauan Ulang UKT dengan mengisi form dibawah ini!</h1>
          </center>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>


<div class="w-50 mx-auto border p-3 mt-5">
  <h4 class="mb"><i class="fa fa-angle-right"></i> Input Data Mahasiswa</h4>
    <form action="tambah_datamahasiswa.php" method="POST">

      <br>
      <label for="id_nim">NIM</label>
      <input type="text" name="id_nim" id="id_nim" class="form-control" placeholder="Input NIM!" required>
      <br>

      <label for="nama_jurusan">Jurusan</label>
      <input type="text" name="nama_jurusan" id="nama_jurusan" class="form-control" placeholder="Input Jurusan!" required>
      <br>

      <label for="golongan_uktawal">Id Kelompok UKT Awal</label>           
            <select class="custom-select" id="golongan_uktawal" name="golongan_uktawal" placeholder="Input Kelompok UKT anda saat ini!" required >
                            <option selected></option>
                            <option value="Kelompok I">Kelompok I</option>
                            <option value="Kelompok II">Kelompok II</option>
                            <option value="Kelompok III">Kelompok III</option>
                            <option value="Kelompok IV">Kelompok IV</option>
                            <option value="Kelompok V">Kelompok V</option>
                            <option value="Kelompok VI">Kelompok VI</option>
                            <option value="Kelompok VII">Kelompok VII</option>
                            <option value="Kelompok VIII">Kelompok VIII</option>
            </select>

      <br><br>
      <label for="jenis_kelamin">Jenis Kelamin</label>
      <br>
      <label class="radio-inline"><input required="required" type="radio" name="jenis_kelamin" value="Laki - Laki">Laki - Laki</label> &nbsp;
      <label class="radio-inline"><input required="required" type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</label>
      <br><br>


      <label for="jml_penghasilan_ortu">Jumlah Penghasilan Orang Tua</label>
      <input type="text" name="jml_penghasilan_ortu" id="jml_penghasilan_ortu" class="form-control" placeholder="Input jumlah penghasilan orang tua!" required>
      <br>

      <label for="jns_pekerjaan_ayah">Jenis Pekerjaan Ayah</label>
      <input type="text" name="jns_pekerjaan_ayah" id="jns_pekerjaan_ayah" class="form-control" placeholder="Input jenis pekerjaan ayah!" required>
      <br>

      <label for="jns_pekerjaan_ibu">Jenis Pekerjaan Ibu</label>
      <input type="text" name="jns_pekerjaan_ibu" id="jns_pekerjaan_ibu" class="form-control" placeholder="Input jenis pekerjaan ibu!" required>
      <br>

      <label for="assets">Jumlah Assets</label>
      <input type="text" name="assets" id="assets" class="form-control" placeholder="Input jumlah asset yang dimiliki!" required>
      <br>

      <label for="jarak_tinggal">Jarak Tinggal (km)</label>
      <input type="text" name="jarak_tinggal" id="jarak_tinggal" class="form-control" placeholder="Input jarak tinggal dalam satuan (km)!" required>
      <br>

      <label for="daya_lisrik">Daya Lisrik (watt)</label>
      <input type="text" name="daya_lisrik" id="daya_lisrik" class="form-control" placeholder="Input daya listrik dalam satuan (Watt)!" required>
      <br>

      <label for="sumber_air">Sumber Air</label>
      <input type="text" name="sumber_air" id="sumber_air" class="form-control" placeholder="Input jenis pemakaian sumber air!" required>
      <br>


    <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label"></label>
      <div class="col-sm-10">

        <input onclick="myalert()"class="btn btn-outline-success" name="submit" type="submit" value="Kirim Data!">
            <script>
              function myalert(){
                 var tanya = confirm("Apa anda yakin sudah mengisi semua data dengan benar ?\n ");
         
                 if(tanya === true) {
                    pesan = "Ya";
                 }else{
                    pesan = "Tidak";
                 }
         
                 document.getElementById("pesan").innerHTML = pesan;
              }
            </script>

        <a href="../tb_tambahdata/index_tambah.php" class="btn btn-outline-danger">Batal </a>
      </div>
    </div>
    </form>
</div>


<!-- <?php include "../../AdminLTE/footer.php"; ?> -->

<!-- jQuery -->
<script src="../../AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../AdminLTE/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../AdminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../AdminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../AdminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../AdminLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../AdminLTE/plugins/jszip/jszip.min.js"></script>
<script src="../../AdminLTE/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../AdminLTE/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../AdminLTE/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../AdminLTE/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../AdminLTE/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../../AdminLTE/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../AdminLTE/dist/js/demo.js"></script>
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